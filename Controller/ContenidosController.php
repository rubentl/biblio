<?php
App::uses('AppController', 'Controller');
App::uses('File', 'Utility');

/**
 * Contenidos Controller
 *
 * @property Contenido $Contenido
 */
class ContenidosController extends AppController {


	function __upload($file_array){
		$file = new File($file_array['tmp_name']);
		$file_base = pathinfo($file_array['name']);;
		$ext = strtolower($file_base['extension']);
		$data = $file->read();
		$file->close();
		$full_path = 'files/'.$file_array['name'];
		$file = new File($full_path, true);
		$file->write($data);
		$file->close();
		$full_path = explode('/', $full_path);
	   	return $full_path[1];
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Contenido->recursive = 0;
		$this->set('contenidos', $this->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function add($libro = null) {
		if ($this->request->is('post')) {
			$this->request->data['Contenido']['nombre'] = $this->__upload($this->request->data['Contenido']['nombre']);
			$this->Contenido->create();
			if ($this->Contenido->save($this->request->data)) {
				$this->Session->setFlash(__('Contenido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El contenido no se pudo guardar.'));
			}
		}
		$libros = $this->Contenido->Libro->findById($libro);
		$users = $this->Contenido->User->findById($this->Session->read('Id'));
		$this->set(compact('libros', 'programas', 'users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null, $libro = null) {
		$this->Contenido->id = $id;
		if (!$this->Contenido->exists()) {
			throw new NotFoundException(__('Contenido inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->data['Contenido']['nombre'] = $this->__upload($this->data['Contenido']['nombre']);
			if ($this->Contenido->save($this->request->data)) {
				$this->Session->setFlash(__('El contenido fue salvado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El contenido no se pudo salvar.'));
			}
		} else {
			$this->request->data = $this->Contenido->read(null, $id);
		}
		$libros = $this->Contenido->Libro->findById($libro);
		$programas = $this->Contenido->Programa->find('list');
		$users = $this->Contenido->User->findById($this->Session->read('Id'));
		$this->set(compact('libros', 'programas', 'users'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Contenido->id = $id;
		if (!$this->Contenido->exists()) {
			throw new NotFoundException(__('Contenido no válido'));
		}
		if ($this->Contenido->delete()) {
			$this->Session->setFlash(__('Contenido borrado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contenido no se borró'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Contenido->recursive = 0;
		$this->set('contenidos', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Contenido->id = $id;
		if (!$this->Contenido->exists()) {
			throw new NotFoundException(__('Contenido no válido'));
		}
		$this->set('contenido', $this->Contenido->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Contenido->create();
			if ($this->Contenido->save($this->request->data)) {
				$this->Session->setFlash(__('El contenido fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El contenido no se salvó.'));
			}
		}
		$libros = $this->Contenido->Libro->find('list');
		$users = $this->Contenido->User->find('list');
		$this->set(compact('libros', 'programas', 'users'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Contenido->id = $id;
		if (!$this->Contenido->exists()) {
			throw new NotFoundException(__('Contenido inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Contenido->save($this->request->data)) {
				$this->Session->setFlash(__('El contenido se guardó'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El contenido no se pudo guardar.'));
			}
		} else {
			$this->request->data = $this->Contenido->read(null, $id);
		}
		$libros = $this->Contenido->Libro->find('list');
		$users = $this->Contenido->User->find('list');
		$this->set(compact('libros', 'programas', 'users'));
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
		$this->Contenido->id = $id;
		if (!$this->Contenido->exists()) {
			throw new NotFoundException(__('Contenido no válido'));
		}
		if ($this->Contenido->delete()) {
			$this->Session->setFlash(__('Contenido borrado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contenido no se borró'));
		$this->redirect(array('action' => 'index'));
	}
}
