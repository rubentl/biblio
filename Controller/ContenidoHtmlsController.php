<?php
App::uses('AppController', 'Controller');
/**
 * ContenidoHtmls Controller
 *
 * @property ContenidoHtml $ContenidoHtml
 */
class ContenidoHtmlsController extends AppController {

 /**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ContenidoHtml->recursive = 2;
		$this->set('contenidoHtmls', $this->paginate());
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ContenidoHtml->create();
			if ($this->ContenidoHtml->save($this->request->data)) {
				$this->Session->setFlash(__('El contenido se salvó'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El contenido no se pudo salvar.'));
			}
		}
		$secciones = $this->ContenidoHtml->Seccione->find('list');
		$this->set(compact('secciones'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->ContenidoHtml->id = $id;
		if (!$this->ContenidoHtml->exists()) {
			throw new NotFoundException(__('Contenido html no válido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ContenidoHtml->save($this->request->data)) {
				$this->Session->setFlash(__('El contenido se salvó'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El contenido no se pudo salvar.'));
			}
		} else {
			$this->request->data = $this->ContenidoHtml->read(null, $id);
		}
		$secciones = $this->ContenidoHtml->Seccione->find('list');
		$this->set(compact('secciones'));
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
		$this->ContenidoHtml->id = $id;
		if (!$this->ContenidoHtml->exists()) {
			throw new NotFoundException(__('Contenido no válido'));
		}
		if ($this->ContenidoHtml->delete()) {
			$this->Session->setFlash(__('Contenido borrado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contenido no se borró'));
		$this->redirect(array('action' => 'index'));
	}
}
