<?php
App::uses('AppController', 'Controller');
/**
 * Temas Controller
 *
 * @property Tema $Tema
 */
class TemasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tema->recursive = 0;
		$this->set('temas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Tema->id = $id;
		if (!$this->Tema->exists()) {
			throw new NotFoundException(__('Tema inválido'));
		}
		$this->set('tema', $this->Tema->read(null, $id));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Tema->recursive = 0;
		$this->set('temas', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Tema->id = $id;
		if (!$this->Tema->exists()) {
			throw new NotFoundException(__('Tema inválido'));
		}
		$this->set('tema', $this->Tema->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Tema->create();
			if ($this->Tema->save($this->request->data)) {
				$this->Session->setFlash(__('El tema se guardó'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El tema no se guardó'));
			}
		}
		$libros = $this->Tema->Libro->find('list');
		$this->set(compact('libros'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Tema->id = $id;
		if (!$this->Tema->exists()) {
			throw new NotFoundException(__('Tema inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tema->save($this->request->data)) {
				$this->Session->setFlash(__('El tema se guardó'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El tema no se guardó'));
			}
		} else {
			$this->request->data = $this->Tema->read(null, $id);
		}
		$libros = $this->Tema->Libro->find('list');
		$this->set(compact('libros'));
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
		$this->Tema->id = $id;
		if (!$this->Tema->exists()) {
			throw new NotFoundException(__('Tema inválido'));
		}
		if ($this->Tema->delete()) {
			$this->Session->setFlash(__('Tema borrado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tema no borrado'));
		$this->redirect(array('action' => 'index'));
	}
}
