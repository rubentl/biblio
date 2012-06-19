<?php
App::uses('AppController', 'Controller');
/**
 * Comentarios Controller
 *
 * @property Comentario $Comentario
 */
class ComentariosController extends AppController {
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Comentario->recursive = 0;
		$this->set('comentarios', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Comentario->id = $id;
		if (!$this->Comentario->exists()) {
			throw new NotFoundException(__('Comentario no válido'));
		}
		$this->set('comentario', $this->Comentario->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($libro = null) {
		if ($this->request->is('post')) {
			$this->Comentario->create();
			if ($this->Comentario->save($this->request->data)) {
				$this->Session->setFlash(__('Comentario guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El comentario no se pudo guardar.'));
			}
		}
		$users = $this->Comentario->User->findById($this->Session->read('Id'));
		$libros = $this->Comentario->Libro->findById($libro);
		$this->set(compact('users', 'libros'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null, $libro = null) {
		$this->Comentario->id = $id;
		if (!$this->Comentario->exists()) {
			throw new NotFoundException(__('Comentario no válido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Comentario->save($this->request->data)) {
				$this->Session->setFlash(__('El comentario se ha salvado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El comentario no se pudo guardar'));
			}
		} else {
			$this->request->data = $this->Comentario->read(null, $id);
		}
		$users = $this->Comentario->User->findById($this->Session->read('Id'));
        $libros = $this->Comentario->Libro->findById($libro);
        $comentario = $this->Comentario->read(null, $id);
		$this->set(compact('users', 'libros', 'comentario'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Comentario->id = $id;	
		if (!$this->Session->check('Id') || !($this->comentario->user_id === $this->Session->read('Id'))) {
			$this->Session->setFlash(__('No tienes autorización para esto.'));
			$this->render();
		}
		if (!$this->Comentario->exists()) {
			throw new NotFoundException(__('Comentario inválido'));
		}
		$this->Comentario->delete();
		$this->Session->setFlash(__('Comentario borrado'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Comentario->recursive = 0;
		$this->set('comentarios', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Comentario->id = $id;
		if (!$this->Comentario->exists()) {
			throw new NotFoundException(__('Comentario inválido'));
		}
		$this->set('comentario', $this->Comentario->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Comentario->create();
			if ($this->Comentario->save($this->request->data)) {
				$this->Session->setFlash(__('El comentario se salvó.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El comentario no se pudo salvar.'));
			}
		}
		$users = $this->Comentario->User->find('list');
		$libros = $this->Comentario->Libro->find('list');
		$this->set(compact('users', 'libros'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Comentario->id = $id;
		if (!$this->Comentario->exists()) {
			throw new NotFoundException(__('Comentario no válido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Comentario->save($this->request->data)) {
				$this->Session->setFlash(__('El comentario fue salvado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El comentario no se pudo salvar.'));
			}
		} else {
			$this->request->data = $this->Comentario->read(null, $id);
		}
		$users = $this->Comentario->User->find('list');
		$libros = $this->Comentario->Libro->find('list');
		$this->set(compact('users', 'libros'));
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
		$this->Comentario->id = $id;
		if (!$this->Comentario->exists()) {
			throw new NotFoundException(__('Comentario inválido'));
		}
		if ($this->Comentario->delete()) {
			$this->Session->setFlash(__('Comentario borrado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El Comentario no se pudo borrar.'));
		$this->redirect(array('action' => 'index'));
	}
}
