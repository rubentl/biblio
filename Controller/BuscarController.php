<?php

# /app/Controller/BuscarController.php
App::uses('Tema', 'Model');


class BuscarController extends AppController {
	
    function index() {
		$temas = new Tema();
		$this->set('temas', $temas->find('list'));
    }
	
}