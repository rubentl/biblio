<?php
App::uses('AppController', 'Controller');

class DescargasController extends AppController{
	
	function descarga($archivo){
        $this->viewClass = 'Media';
        $nombre = explode('.',$archivo);	
        $params = array(
            'id'        => $archivo,
            'name'      => $nombre[0],
            'download'  => true,
            'extension' => $nombre[1],
            'path'      => 'files' . DS
        );
        $this->set($params);
	}	
}