<?php
App::uses('AppHelper', 'View/Helper');

class UtilHelper extends AppHelper{
	public $helpers = array('Session','Html');
	
/*
*	centra dos textos sobre una línea imaginaria vertical
*   ej:              nombre: Julian
*                        Id: 1 
*/	
    public function centrar($texto){
		if ($texto['dcha'] == '') $texto['dcha'] = '&nbsp;';
        if (is_array($texto['dcha'])){
            $dcha = '';
            foreach($texto['dcha'] as $tmp){
                $dcha .= $tmp.'<br />';
            }
            $dcha = substr($dcha,0,strlen($dcha)-6);
        }else{
            $dcha = $texto['dcha'];
        }
        return $this->Html->tableCells(array(
            array('<div class="izda">'.$texto['izda'].'&nbsp;</div>', 
		          '<div class="dcha">'.$dcha.'</div>')));
    }
	
/*
*	Devuelve las variables de session del usuario en forma de array.
*/
	public function sesion(){
		if ($this->Session->check('User')){
			return array('User' => $this->Session->read('User'),
						 'Tipo' => $this->Session->read('Tipo'),
						 'Id' => $this->Session->read('Id')); 
		} else {
			return false;
		}
	}
}
