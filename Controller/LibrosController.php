<?php
App::uses('AppController', 'Controller');
App::uses('Tema', 'Model');
App::uses('Autore', 'Model');
App::uses('Editoriale', 'Model');
/**
 * Libros Controller
 *
 * @property Libro $Libro
 */
include_once('Component/simple_html_dom.php');
include_once('Component/load_url.php');

class LibrosController extends AppController {

	public function simple(){
		if ($this->request->is('post')){
			if (!empty($this->data['query'])){
				$query = $this->data['query'];
				if (eregi('^[0-9,-]+$', $query)){ // Si es un número 
					$query = $this->Libro->ean13($query); // convertimos a ean13
				}
				$this->Libro->recursive = 0;
				$libros = $this->Libro->find('all', array(
					'conditions' => array(
						'OR' => array(
							'Libro.titulo LIKE ' => '%'.$query.'%',
							'Libro.isbn LIKE ' => '%'.$query.'%')
						),	
					));
                foreach ($libros as $lib){ 
                    // Pongo en $ides los id de los libros que coinciden con la búsqueda
					$ides[] = $lib['Libro']['id'];
                }
				$autores = $this->Libro->Autore->find('all', array(
					'conditions' => array (
						'Autore.nombre LIKE' => '%'.$query.'%')
					));
                foreach ($autores as $aut){ 
                    // añado a $ides los id cuyo autor coincide con la búsqueda
                    foreach($aut['Libro'] as $lib){
                        $ides[] = $lib['id'];
                    }
				}
				if (!empty($ides)){	
                    $this->paginate = array(
                            'limit' => 10,
                            'conditions' => array('Libro.id' => $ides));
				} else {
					$this->Session->setFlash(__('La búsqueda no produjo ningún resultado.'));
				}
			} else {
				$this->Session->setFlash(__('No has puesto ningún criterio de búsqueda.'),'default',array('class'=>'error-message'),'inicio');
				$this->redirect(array('controller'=>'inicio'));
			}
		}
		$this->Libro->recursive = 0;
		$this->set('libros',$this->paginate());
	}
	
	public function avanzada(){
		if ($this->request->is('POST')){
			if (!empty($this->data['titulo']) || 
			    !empty($this->data['autor']) || 
				!empty($this->data['tema']) ||
				!empty($this->data['editorial']) ||
				!empty($this->data['isbn'])){
				$titulo = $this->data['titulo']; // recojo todos los valores de los campos
				$autor = $this->data['autor'];
				$tema = $this->data['tema'];
				$editorial = $this->data['editorial'];
				$isbn = $this->data['isbn'];
				if (eregi('^[0-9,-]+$', $isbn)){ // Si es un número 
					$isbn = $this->Libro->ean13($isbn); // convertimos a ean13
				}
				$this->Libro->recursive = 2;
				$sql = "SELECT DISTINCT Libro.id FROM editoriales INNER JOIN (temas INNER JOIN ((libros as Libro INNER JOIN (autores INNER JOIN autores_libros ON autores.id = autores_libros.autor_id) ON Libro.id = autores_libros.libro_id) INNER JOIN libros_temas ON Libro.id = libros_temas.libro_id) ON temas.id = libros_temas.tema_id) ON editoriales.id = Libro.editoriale_id WHERE  ((autores.borrado)='no') AND ((Libro.borrado)='no') AND ((temas.borrado)='no') AND ((editoriales.borrado)='no') ";
				$sql .= (!empty($titulo))?"AND (Libro.titulo LIKE '%".$titulo."%') ":''; 
				$sql .= (!empty($autor))?"AND (autores.nombre LIKE '%".$autor."%') ":'';
				$sql .= (!empty($tema))?"AND (temas.nombre LIKE '%".$tema."%') ":'';
				$sql .= (!empty($editorial))?"AND (editoriales.nombre LIKE '%".$editorial."%') ":'';
				$sql .= (!empty($isbn))?"AND (Libro.isbn LIKE '%".$isbn."%') ":'';
				$sql .= ';';
				$libros = $this->Libro->query($sql);
				foreach ($libros as $lib){ // Pongo en $ides los id de los libros que coinciden con la búsqueda
					$ides[] = $lib['Libro']['id'];
				}
				if (!empty($ides)){	
                    $this->paginate = array(
                        'limit' => 10,
                        'conditions' => array('Libro.id' => $ides));
				} else {
                    $this->Session->setFlash('La búsqueda no produjo ningún resultado.');
				}
		  } else {
              $this->Session->setFlash(__('No has puesto ningún criterio de búsqueda.'),
                  'default',array('class'=>'error-message'),'avanzada');
			  $this->redirect(array('controller'=>'buscar'));
		  }
	  }
	  $this->Libro->recursive = 0;
	  $this->set('libros',$this->paginate());
	  $this->render('simple');
	}

	public function view($id = null) {
		$this->Libro->id = $id;
		if (!$this->Libro->exists()) {
			throw new NotFoundException(__('Libro no válido'));
        }
        $todos_temas = array(); 
        $todos_autores = array();
        $comentario = array();
        $contenido = array();

		$this->Libro->recursive = 2;
        $libro = $this->Libro->read(null, $id);
        if (!empty($libro['Autore']) ){
            foreach ($libro['Autore'] as $autore){
                if ($autore['borrado'] === 'no'){
                    $todos_autores[] = $autore['nombre'];
                }
            }
	    }
        if (!empty($libro['Tema']) ){
            foreach ($libro['Tema'] as $tema){
                if ($tema['borrado'] === 'no'){
                    $todos_temas[] = $tema['nombre'];
                }
            }
	    }
        if (!empty($libro['Comentario']) ){
            foreach ($libro['Comentario'] as $comen){
                if ($comen['borrado'] === 'no'){
                    $comentario[] = $comen;
                }
            }
	    }
        if (!empty($libro['Contenido']) ){
            foreach ($libro['Contenido'] as $conte){
                if ($conte['borrado'] === 'no'){
                    $contenido[] = $conte;
                }
            }
	    }
	$this->set(compact('libro', 'todos_autores', 'todos_temas', 'comentario', 'contenido'));
	}


    public function admin_ean($ean){
        $datos = $this->Libro->ean13($ean);
        $this->set(compact('datos'));
        $this->redirect(array(
            'controller' => 'inicio',
            'action' => 'mensaje'));
    }

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Libro->recursive = 0;
		$this->set('libros', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Libro->id = $id;
		if (!$this->Libro->exists()) {
			throw new NotFoundException(__('Libro no válido'));
		}
		$this->set('libro', $this->Libro->read(null, $id));
	}



/**
 * admin_new method
 *
 * @return void
 */

    public function admin_new(){
        if ($this->request->is('post')){
            $this->Libro->create();
            if ($this->Libro->save($this->request->data)){
                $this->Session->setFlash(__('El libro se guardó.'));
                $this->Session->delete('Datos');
                $this->Session->delete('Isbn');
                $this->Session->delete('Ides');
            }else{
                $this->Session->setFlash(__('El libro no se pudo guardar.'));
            }
            $this->redirect(array(
                    'controller' => 'inicio',
                    'action' => 'mensaje'));
        }
		$editoriales = $this->Libro->Editoriale->find('list');
		$autores = $this->Libro->Autore->find('list'); //TODO: autores con autocomplete con ajax.
		$temas = $this->Libro->Tema->find('list');
		$this->set(compact('editoriales', 'autores', 'temas'));
    }

/**
 * admin_add method
 *
 * @return void
 */

	public function admin_add() {
        if ($this->request->is('post')) {
            if (!in_array($this->request->data['Libro']['isbn'],array('0','',' '))){
                // convierto isbn a ean13
                $isbn = $this->Libro->ean13($this->request->data['Libro']['isbn']); 
                $id_temp = $this->Libro->find('first',array(
                    'fields' => array('id'),'conditions' => array('isbn' => $isbn)));
                // si el isbn existe fuera
                if (isset($id_temp[$this->alias]['id'])){
                    $this->Session->setFlash(__('Este libro ya existe.'));
                    $this->redirect('/inicio/mensaje');
                }
                // llamo a _buscarLibro con el isbn para que devuelva un array con los 
                // datos del libro
                $error = 0;
                $datos = $this->_buscarLibro($isbn);
                switch($datos['Error']) {
                    case 'Sin datos':
                        $this->Session->setFlash(__('No se encontró el libro.<br />Lo siento, debes hacerlo a mano.'),
                            'default',array('class'=>'error-message'),'encontrado');
                        $this->redirect('/admin/libros/new');
                        break;
                    case 'Faltan datos':
                        $error = 1;
                        // break;
                    default:  //se encontró el libro y se guarda
                    $ides = array(); // para guardar todas las ides de los registros
                    // guadar la editorial
                    if (isset($datos['Publicación:'])){
                        $edito = new Editoriale();
                        if (isset($datos['Provincia:'])){
                            $edito->set(array('ciudad'=>$datos['Provincia:']));
                        }
                        $edito->set(array('nombre' => $datos['Publicación:']));
                        if (!$edito->checkExist()) $edito->save(null,false);
                        $ides['Editorial'] = $edito->getID();
                    }else{
                        $error = 1;
                        // break;
                    }
                    // guardar los autores
                    $ides['Autores'] = array();
                    if (isset($datos['Autor/es:'])){
                    foreach($datos['Autor/es:'] as $autor){
                        $aut = new Autore();
                        $aut->set(array('nombre' => $autor));
                        if (!$aut->checkExist()) $aut->save(null,false);
                        $ides['Autores'][] = $aut->getID();
                    }
                    }else{
                        $error = 1;
                        // break;
                    }
                    // guardar los temas
                    $ides['Temas'] = array();
                    if (isset($datos['Materia/s:'])){
                    foreach($datos['Materia/s:'] as $tema){
                        $tem = new Tema();
                        $tem->set(array('nombre' => $tema));
                        if (!$tem->checkExist()) $tem->save(null,false);
                        $ides['Temas'][] = $tem->getID();
                    }
                    }else{
                        $error = 1;
                        // break;
                    }
                    // guardar el Libro
                    $this->Libro->create();
                    if (isset($datos['Título:'])){
                        $this->Libro->set(array('titulo'=>$datos['Título:']));
                    }
                    if (isset($datos['Edición:'])){
                        $this->Libro->set(array('edicion'=>$datos['Edición:']));
                    }
                    if (isset($datos['Fecha Edición:'])){
                        $this->Libro->set(array('anio'=>$datos['Fecha Edición:']));
                    }
                    if (isset($datos['Encuadernación:'])){
                        $this->Libro->set(array('encuadernacion'=>$datos['Encuadernación:']));
                    }
                    if (isset($ides['Editorial'])){
                        $this->Libro->set(array('editoriale_id'=>$ides['Editorial']));
                    }
                    if (isset($ides['Autores'])){
                        $this->Libro->set(array('Autore'=>$ides['Autores']));
                    }
                    if (isset($ides['Temas'])){
                        $this->Libro->set(array('Tema'=>$ides['Temas']));
                    }
                    if (isset($isbn)){
                        $this->Libro->set(array('isbn'=>$isbn));
                    }
                    if ($error === 1){
                        $this->Session->setFlash(__('Datos incompletos debes hacerlo a mano.'),
                            'default',array('class'=>'error-message'),'encontrado');
                        $this->Session->write('Datos',$datos);
                        $this->Session->write('Isbn',$isbn);
                        $this->Session->write('Ides',$ides);
                        $this->redirect('/admin/libros/new');
                    }else{
                        if (!$this->Libro->checkExist()){ 
                            if ($this->Libro->save(null,false)){
                                $this->Session->setFlash(__('Se guardó con éxito.'));
                                $this->redirect('/admin/libros/view/'.$this->Libro->id);
                            }
                        }else{
                            $this->Session->setFlash(__('Este libro ya existe.'));
                            $this->redirect(array(
                                    'controller' => 'inicio',
                                    'action' => 'mensaje'));
                        }
                    }
                }
            }else{ // si está vacío el campo isbn
                $this->redirect('/admin/libros/new');
            }
		}
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Libro->id = $id;
		if (!$this->Libro->exists()) {
			throw new NotFoundException(__('Libro inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Libro->save($this->request->data)) {
				$this->Session->setFlash(__('El libro se guardó'));
			} else {
				$this->Session->setFlash(__('El libro no se guardó.'));
			}
			$this->redirect(array(
                        'controller' => 'inicio',
                        'action' => 'mensaje'));
		} else {
			$this->request->data = $this->Libro->read(null, $id);
		}
		$editoriales = $this->Libro->Editoriale->find('list');
		$autores = $this->Libro->Autore->find('list');
		$temas = $this->Libro->Tema->find('list');
		$this->set(compact('editoriales', 'autores', 'temas'));
	}

/**
 * admin_delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Libro->id = $id;
		if (!$this->Libro->exists()) {
			throw new NotFoundException(__('Libro inválido'));
		}
		if ($this->Libro->delete()) {
			$this->Session->setFlash(__('Libro borrado'));
		}
		$this->Session->setFlash(__('Libro no borrado'));
		$this->redirect(array(
                        'controller' => 'inicio',
                        'action' => 'mensaje'));
    }   

    protected function _buscarLibro($isbn){

        function trimutf8($cadena){
            return trim(utf8_encode($cadena));
        }

        function mcu($isbn){
            $error = '0';
            $host = 'http://www.mcu.es';
            $url1 = $host.'/webISBN/tituloSimpleFilter.do?cache=init&prev_layout=busquedaisbn&layout=busquedaisbn&language=es';
            $postData = 'params.forzaQuery=N&params.cdispo=A&params.cisbnExt='.$isbn.'&params.liConceptosExt[0].texto&params.orderByFormdId=1&language=es&prev_layout=busquedaisbn&layout=busquedaisbn&action=Buscar';
            $html = loadUrl($url1,array('method'=>'get',
                'session'=>true,
                'session_close'=>false));
            $html2 = str_get_html($html);
            $action = $html2->getElementById('libroBusquedaSimpleForm')->action;
            $url2 = $host.$action;
            $html = loadUrl($url2, array('method'=>'post',
                'session'=>true,
                'session_close'=>false,
                'post_data'=>$postData,
                'referer'=>$url1));
            $html2 = str_get_html($html);
            if (gettype($html2->getElementById('aviso')) === 'object' ){
                return array('Error'=> 'Sin datos');
            }
            $enlace = $html2->find('div.isbnResDescripcion span strong a',0)->href;
            $editorial = $html2->find('div.isbnResDescripcion span a',1)->href;
            $url3 = str_replace('&amp;','&',$host.$enlace);
            $html = loadUrl($url3, array('method'=>'get',
                'session'=>true,
                'referer'=>$url2));
            $html3 = str_get_html($html);
            $tabla = $html3->find('div.fichaISBN table tbody',0);
            $res = array();
            foreach($tabla->find('tr') as $row){
                $leyenda = trimutf8($row->find('th',0)->plaintext);
                $conten = $row->find('td',0);
                switch($leyenda){
                    case 'Materia/s:':
                    case 'Autor/es:':
                        $aumat = array(); 
                        foreach($conten->find('span') as $cont){
                            $aumat[] = trimutf8($cont->plaintext);
                        }
                        $contenido = $aumat;
                        break;
                    case 'Colección:':
                    case 'Lengua de publicación:':
                        $contenido = trimutf8($conten->find('span',0)->plaintext);
                        break;
                    case 'Publicación:':
                        $contenido = trimutf8($conten->find('span a',0)->plaintext);
                        break;
                    default:
                        $contenido = trimutf8($row->find('td',0)->plaintext);
                        break;
                }
                $res[$leyenda] = $contenido;  
            }
            //Conseguir la ciudad de la editorial.
            $urlEditorial = str_replace('&amp;','&',$host.$editorial);
            $html = loadUrl($urlEditorial, array('method'=>'get',
                'session'=>true,
                'session_close'=>false,
                'referer'=>$url2));
            $html4 = str_get_html($html);
            $tabla2 = $html4->find('div.fichaISBN table tbody',0);
            foreach($tabla2->find('tr') as $row){
                $leyenda = trimutf8($row->find('th',0)->plaintext);
                if ($leyenda === 'Provincia:'){
                    $conten = trimutf8($row->find('td',0)->plaintext);
                    $res[$leyenda] = $conten;
                } 
            }
            //Correcciones en la presentación de los datos
            if (isset($res['Edición:'])){
                $tmp = substr($res['Edición:'],0,1); //cogemos sólo el número de la Edición
                $res['Edición:'] = $tmp;
                if (isset($res['Fecha Edición:'])){
                    $tmp = explode('/',$res['Fecha Edición:']); //cogemos sólo el Año
                    $res['Fecha Edición:'] = $tmp[1];
                }elseif (isset($res['Fecha Impresión:'])){
                    $tmp = explode('/',$res['Fecha Impresión:']);
                    $res['Fecha Edición:'] = $tmp[1];
                }else{
                    $error = 'Faltan datos'; 
                }
            }else{
                $error = 'Faltan datos';
            }
            $tmparr = array();
            $regular = array('\[.*\]','\(.*\)'); //quitamos los [] y ()
            if (isset($res['Autor/es:'])){ 
                foreach($res['Autor/es:'] as $autor){
                    if (!strstr($autor,'tr.') && !strstr($autor,'coord.') 
                            && !strstr($autor,'dir.')){ 
                        //sino es traductor ni coordinador ni director lo aceptamos 
                        foreach($regular as $reg){
                            $autor = ereg_replace($reg,'',$autor);
                        }
                        // Si son varios autores.
                        if (strstr($autor,'...')) $autor = 'Varios';
                        $tmparr[] = trim($autor); //trimutf8($autor)
                    }
                }
                $res['Autor/es:'] = $tmparr;
            }else{
                $error = 'Faltan datos';
            }
            $res['Error'] = $error;
            return $res;
        }

        return mcu($isbn);
    }

}
