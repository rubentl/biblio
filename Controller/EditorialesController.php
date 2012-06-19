<?php
App::uses('AppController', 'Controller');
/**
 * Editoriales Controller
 *
 * @property Editoriale $Editoriale
 */
class EditorialesController extends AppController {


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Editoriale->recursive = 0;
		$this->set('editoriales', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Editoriale->id = $id;
		if (!$this->Editoriale->exists()) {
			throw new NotFoundException(__('Editorial inválida'));
		}
		$this->set('editoriale', $this->Editoriale->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Editoriale->create();
			if ($this->Editoriale->save($this->request->data)) {
				$this->Session->setFlash(__('La editorial se guardó'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La editorial no se guardó'));
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
		$this->Editoriale->id = $id;
		if (!$this->Editoriale->exists()) {
			throw new NotFoundException(__('Editorial inválida'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Editoriale->save($this->request->data)) {
				$this->Session->setFlash(__('La editorial está guardada'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La editorial no se guardó'));
			}
		} else {
			$this->request->data = $this->Editoriale->read(null, $id);
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
		$this->Editoriale->id = $id;
		if (!$this->Editoriale->exists()) {
			throw new NotFoundException(__('Editorial no válida'));
		}
		if ($this->Editoriale->delete()) {
			$this->Session->setFlash(__('Editorial borrada'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Editorial no se borró'));
		$this->redirect(array('action' => 'index'));
	}
}
