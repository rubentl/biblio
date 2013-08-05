<?php
App::uses('Model', 'Model');

class AppModel extends Model {

	public function beforeDelete($cascada = true){
		$this->saveField('borrado','si');
		if ($cascada){
			$this->_deleteDependent($this->id, $cascada);
			$this->_deleteLinks($this->id);
		}
		return false;
	}
	
    public function beforeFind($queryData){
        if ($_SESSION['Tipo'] !== 'admin'){
            $queryData['conditions'][$this->alias.'.borrado'] = "no";
        }
		return $queryData;
	}

    public function checkExist(){
        $id = $this->find('first',array(
            'fields'=>array('id'),
            'conditions'=>array(
               $this->displayField => $this->data[$this->alias][$this->displayField]))
           );
        if (isset($id[$this->alias]['id'])){
            $this->id = $id[$this->alias]['id'];
            $this->data[$this->alias]['id'] = $this->id;
            return true;
        }
        return false;
    }
}
