<?php 
	$this->Html->addCrumb(__('Nuevo registro'), '/users/add');
    $this->Html->addCrumb(__('Registro'), '/users/index'); 
    $this->set('title_for_layout',__('Registro - Biblioteca')); 
?>
<h1>Registro</h1>
<h2 class="centrado">
		<?php echo $this->Session->flash(); ?>
</h2>
