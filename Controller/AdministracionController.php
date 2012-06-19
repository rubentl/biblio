<?php
App::uses('AppController', 'Controller');
App::uses('Ip', 'Model');

class AdministracionController extends AppController {


	public function admin_index() {
	}
    
    public function admin_consola(){
        if ($this->request->is('post')){
            $sql = new Ip();
            if (!empty($this->data['query'])){
                $resultados = $sql->query($this->data['query']);
                $this->set(compact('resultados'));
            } else{
                $this->Session->setFlash(__('No dejes el campo vacío, por favor.'), 'default', array('class'=>'error-message'), 'error');        
            } 
        }
    }

}
