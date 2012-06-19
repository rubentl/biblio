<?php

App::uses('AppController', 'Controller');
App::uses('User', 'Model');
App::uses('CakeEmail', 'Network/Email');

class EmailController extends AppController {


	public function admin_add() {
        if ($this->request->is('post')){
            if (!empty($this->request->data['asunto']) && 
                !empty($this->request->data['cuerpo'])) {
                $socio = new User();
                $noticias = $socio->find('list', array('fields'=>'email', 'conditions'=> array('noticias'=>'si')));
                $email = new CakeEmail('smtp');
                foreach ($noticias as $mail){
                    $email->from('polipo86@gmail.com', 'Gmail')
                        ->to($mail)
                        ->subject($this->request->data['asunto'])
                        ->send($this->request->data['cuerpo']);
                }
                $this->Session->setFlash(__('Enviado con éxito'));
				$this->redirect('/inicio/mensaje');
            } else {
                $this->Session->setFlash(__('Rellena todo bien. Por favor.'), 'default', array('class'=>'error-message'), 'validar');
            }
        }    
	}

}
