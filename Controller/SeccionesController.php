<?php
App::uses('AppController', 'Controller');
/**
 * Secciones Controller
 *
 * @property Seccione $Seccione
 */
class SeccionesController extends AppController {


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Seccione->recursive = 0;
		$this->set('secciones', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Seccione->id = $id;
		if (!$this->Seccione->exists()) {
			throw new NotFoundException(__('Sección no válida'));
		}
		$this->set('seccione', $this->Seccione->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Seccione->create();
			if ($this->Seccione->save($this->request->data)) {
				$this->Session->setFlash(__('La sección se guardó'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La sección no se guardó'));
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
		$this->Seccione->id = $id;
		if (!$this->Seccione->exists()) {
			throw new NotFoundException(__('Sección no válida'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Seccione->save($this->request->data)) {
				$this->Session->setFlash(__('La sección se guardó'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La sección no se guardó.'));
			}
		} else {
			$this->request->data = $this->Seccione->read(null, $id);
		}
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
		$this->Seccione->id = $id;
		if (!$this->Seccione->exists()) {
            throw new NotFoundException(__('Sección no válida'));
		}
		if ($this->Seccione->delete()) {
			$this->Session->setFlash(__('Sección borrada'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sección no borrada'));
		$this->redirect(array('action' => 'index'));
	}
}
