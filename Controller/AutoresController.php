<?php
App::uses('AppController', 'Controller');
/**
 * Autores Controller
 *
 * @property Autore $Autore
 */
class AutoresController extends AppController {


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Autore->recursive = 0;
		$this->set('autores', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Autore->id = $id;
		if (!$this->Autore->exists()) {
			throw new NotFoundException(__('Autor inválido'));
		}
		$this->set('autore', $this->Autore->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Autore->create();
			if ($this->Autore->save($this->request->data)) {
				$this->Session->setFlash(__('Se ha guardado el autor'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Error guardando el autor.'));
			}
		}
		$libros = $this->Autore->Libro->find('list');
		$this->set(compact('libros'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Autore->id = $id;
		if (!$this->Autore->exists()) {
			throw new NotFoundException(__('Autor inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Autore->save($this->request->data)) {
				$this->Session->setFlash(__('Se ha guardado el autor'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Error guardando el autor.'));
			}
		} else {
			$this->request->data = $this->Autore->read(null, $id);
		}
		$libros = $this->Autore->Libro->find('list');
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
		$this->Autore->id = $id;
		if (!$this->Autore->exists()) {
			throw new NotFoundException(__('Autor inválido'));
		}
		if ($this->Autore->delete()) {
			$this->Session->setFlash(__('Autor borrado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El autor no se pudo guardar'));
		$this->redirect(array('action' => 'index'));
	}
}
