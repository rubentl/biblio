<?php

# /app/Controller/InicioController.php
App::uses('ContenidoHtml', 'Model');
App::uses('Libro', 'Model');

class InicioController extends AppController {

    public $components = array('RequestHandler');
    public $helpers = array('Text', 'Rss');

	protected function _dameContenido($tabla){
		$contenido = new ContenidoHtml();
		$texto = $contenido->find('all', array('conditions' => array('Seccione.nombre' => $tabla, 'ContenidoHtml.borrado' => "no")));
        return $texto[0]['ContenidoHtml'];	
	}	

    public function index() {
    }

	public function contacto(){
    }

	public function legal() {
		$contenido = $this->_dameContenido('legal');
		$this->set('contenido', $contenido['texto']);
    }

    public function novedades() {
        $libro = new Libro();
        $ultimos = $libro->find('all',array('limit'=>5,'order'=>array('Libro.id'=>'desc')));
        if (empty($ultimos)){
            $contenido = $this->_dameContenido('novedades');
            $this->set(array(
                'contenido' => $contenido['texto'], 
                'fecha' => $contenido['fecha']));
        }
        if ($this->RequestHandler->isRss()) {
                return $this->set(compact('ultimos'));
        }
    }

	public function quienes() {
		$contenido = $this->_dameContenido('quienes somos');
		$this->set('contenido', $contenido['texto']);
    }

	public function enlaces() {
		$contenido = $this->_dameContenido('enlaces');
		$this->set('contenido', $contenido['texto']);
    }

	public function mapa() {
    }

    public function admin_pass(){
        if ($this->request->is('post')){
		    $this->set('pass', $this->data);
        }
    }

    public function mensaje(){
    }

    public function admin_mensaje(){
        $this->render('mensaje');
    }
}
