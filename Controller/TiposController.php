<?php
App::uses('AppController', 'Controller');
/**
 * Tipos Controller
 *
 * @property Tipo $Tipo
 */
class TiposController extends AppController {
  
	public $helpers = array('Util');
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Tipo->recursive = 0;
		$this->set('tipos', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Tipo->id = $id;
		if (!$this->Tipo->exists()) {
			throw new NotFoundException(__('Tipo no válido'));
		}
		$this->set('tipo', $this->Tipo->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Tipo->create();
			if ($this->Tipo->save($this->request->data)) {
				$this->Session->setFlash(__('Tipo guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El tipo no se guardó..'));
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
		$this->Tipo->id = $id;
		if (!$this->Tipo->exists()) {
			throw new NotFoundException(__('Tipo no válido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tipo->save($this->request->data)) {
				$this->Session->setFlash(__('Tipo guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El tipo no se guardó..'));
			}
		} else {
            $this->request->data = $this->Tipo->read(null, $id);
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
		$this->Tipo->id = $id;
		if (!$this->Tipo->exists()) {
			throw new NotFoundException(__('Tipo no válido'));
		}
		if ($this->Tipo->delete()) {
			$this->Session->setFlash(__('El tipo se borró'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El tipo no se borró'));
		$this->redirect(array('action' => 'index'));
	}
}
