<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {
	
	public function login(){
		if ($this->request->is('post')){
			$db = $this->User->findByUsername($this->data['usuario']);
			if (!empty($db) && ($db['User']['password'] == $this->data['contrasena'])){
				$this->Session->write('User', h($db['User']['username']));
				$this->Session->write('Tipo', h($db['Tipo']['nombre']));
				$this->Session->write('Id', h($db['User']['id']));
			} else {
				$this->Session->setFlash(__('Usuario y/o contraseña incorrectos'), 'default', array('class'=>'error-message'),'login');
			}
		}
		$this->redirect(array('controller'=>'inicio'));
	}
	
	public function logout(){
		$this->Session->delete('User');
		$this->Session->write('Tipo','invitado');
		$this->Session->delete('Id');
		$this->redirect(array('controller' => 'inicio'));
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Usuario no válido'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
    public function add() {
        if ($this->Session->check('User')){
            $this->Session->setFlash(__('Ya estás registrado'));
            $this->redirect(array('controller'=>'inicio','action'=>'mensaje'));
        }
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Te has registrado con éxito. <br /> Ahora puedes iniciar sesión con tu nombre y contraseña.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Ha habido un fallo en el registro.'));
			}			
		}
		$tipos = $this->User->Tipo->find('list');
		$this->set(compact('tipos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Usuario no válido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('El usuario se modificó.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Algo fue mal editando el usuario.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
		$tipos = $this->User->Tipo->find('list');
		$this->set(compact('tipos','id'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if ($this->request->is('post')) {
			$this->User->id = $this->Session->read('Id');
			if (!$this->User->exists()) {
				$this->Session->setFlash(__('No tienes permisos para borrar este usuario.'));
				$this->render();
			}
			switch ($this->request->data['borrar']){
				case "anular":	//sólo anulamos la cuenta de usuario y no sus comentarios
					$this->User->delete($this->User->id, false);
					break;
				case "borrar": //borrados el usuario y los comentarios.
					$this->User->delete($this->User->id, true);
					break;
			}
			$this->Session->setFlash(__('Usuario borrado. <br /> Ya no se podrán usar estas credenciales.'));
			$this->redirect(array('action' => 'index'));
		}
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Usuario no válido'));
        }
        $this->User->recursive = 2;
		$this->set('user', $this->User->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Usuario guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El usuario no se ha podido guardar'));
			}
		}
		$tipos = $this->User->Tipo->find('list');
		$this->set(compact('tipos'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Usuario no válido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('El usuario se ha salvado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El usuario no se pudo salvar'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
		$tipos = $this->User->Tipo->find('list');
		$this->set(compact('tipos'));
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Usuario inválido'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('Usuario borrado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El usuario no se pudo guardar'));
		$this->redirect(array('action' => 'index'));
	}
}
