<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Prestamos Controller
 *
 * @property Prestamo $Prestamo
 */
class PrestamosController extends AppController {

    public function pedir($id,$titulo){
        $usuario = $this->Session->read('User');
        $user_id = $this->Session->read('Id');
        $dia = date(DATE_RFC822);
        $email = new CakeEmail('smtp');
        $email->from('polipo86@gmail.com', 'Gmail')
            ->to($this->Company_Email)
            ->subject('Petición de Préstamo')
            ->send('El Usuario: "'.$usuario.'" con id: ['.$user_id.'] quiere el libro: "'.$titulo.'" con id: ['.$id.']. Hoy es: '.$dia);
        $this->Session->setFlash('Petición enviada con éxito.<br />Pronto recibirás respuesta.');
        $this->redirect('/inicio/mensaje');
    }

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Prestamo->recursive = 0;
		$this->set('prestamos', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Prestamo->id = $id;
		if (!$this->Prestamo->exists()) {
			throw new NotFoundException(__('Préstamo no válido'));
		}
		$this->set('prestamo', $this->Prestamo->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Prestamo->create();
			if ($this->Prestamo->save($this->request->data)) {
				$this->Session->setFlash(__('El préstamo se guardó'));
				$this->redirect(array('controller'=>'inicio','action' => 'mensaje'));
			} else {
				$this->Session->setFlash(__('El préstamo no se guardó'));
				$this->redirect(array('controller'=>'inicio','action' => 'mensaje'));
			}
		}
		$users = $this->Prestamo->User->find('list');
		$libros = $this->Prestamo->Libro->find('list');
		$this->set(compact('users', 'libros'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Prestamo->id = $id;
		if (!$this->Prestamo->exists()) {
			throw new NotFoundException(__('Préstamo no válido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Prestamo->save($this->request->data)) {
				$this->Session->setFlash(__('El préstamo se guardó'));
				$this->redirect(array('controller'=>'inicio','action' => 'mensaje'));
			} else {
				$this->Session->setFlash(__('El préstamo no se guardó'));
				$this->redirect(array('controller'=>'inicio','action' => 'mensaje'));
			}
		} else {
			$this->request->data = $this->Prestamo->read(null, $id);
		}
		$users = $this->Prestamo->User->find('list');
		$libros = $this->Prestamo->Libro->find('list');
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
		$this->Prestamo->id = $id;
		if (!$this->Prestamo->exists()) {
			throw new NotFoundException(__('Préstamo no válido'));
		}
		if ($this->Prestamo->delete()) {
			$this->Session->setFlash(__('Préstamo borrado'));
			$this->redirect(array('controller'=>'inicio','action' => 'mensaje'));
		}
		$this->Session->setFlash(__('Préstamo no borrado'));
			$this->redirect(array('controller'=>'inicio','action' => 'mensaje'));
	}
}
