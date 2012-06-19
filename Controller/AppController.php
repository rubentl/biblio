<?php

App::uses('Ip', 'Model');

class AppController extends Controller{
    public $helpers = array('Html', 'Form', 'Js', 'Util', 'Session', 'Tinymce');
    public $components = array('Session');//,'DebugKit.Toolbar'));
    public $paginate = array('maxLimit' => 10);

    function checkAdminSession() { 
        if ($this->Session->read('Tipo') !== 'admin') { // si no somos admin
            $this->Session->setFlash(__('Necesitas permisos de administrador<br />para entrar en esta sección'),
                'default',
                array('class'=>'error-message'),
                'admin');
            $this->redirect('/');
        }  
    }  

    function checkUserSession(){//sólo los registrados pueden comentar, y aportar material a las fichas.
        if ($this->Session->check('User')){//sólo existe la variable User si ya está registrado.
            return true;
        }else{
            $this->Session->setFlash(__('Tienes que estar registrado para hacer esto.'),
                'default',
                array('class'=>'error-message'),
                'admin');
            $this->redirect('/');
        }
    }

    function beforeFilter(){
        parent::beforeFilter();
        // Contador de visitas
        if (!$this->Session->check('Ip')){
            $this->Session->write('Ip', 'echo');
            $ip = new Ip();
            $ip->create(array('ip'=> env('REMOTE_ADDR'), 'navegador'=> env('HTTP_USER_AGENT'), 'fecha'=> getdate()));
            $ip->save();
        }
        $this->Company_Nombre = 'Rubén Toca Lucio';
        $this->Company_Email = 'polipo86@gmail.com';
        $this->set('Company_Email', $this->Company_Email);
        $this->set('Company_Nombre', $this->Company_Nombre);
        // hay que comprobar que estás registrado como administrador
        if(isset($this->params['admin'])) {  
            $this->checkAdminSession();
        }
        // si no estás registrado Tipo = invitado
        if (!$this->Session->check('Tipo')){
            $this->Session->write('Tipo','invitado');
        }
    }

}
