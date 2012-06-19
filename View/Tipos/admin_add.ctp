<?php 
    $this->Html->addCrumb('Tipos', '/admin/tipos/add'); 
    $this->set('title_for_layout','Tipos - Biblioteca'); 
?>
	<h1><?php echo __('Tipos');?></h1>
<?php echo $this->Form->create('Tipo');?>
	<fieldset>
		<legend><?php echo __('Nuevo tipo de usuario'); ?></legend>
    <p>
    <?php
		echo $this->Form->input('nombre',array('label'=>'Nombre: '));
		echo $this->Form->input('borrado',array('label'=>'Borrado: ','size'=>'2'));
    ?>
    </p>
<?php echo $this->Form->end(__('Guardar'));?>
	</fieldset>
<div class="actions centrado">
<p>
    <?php echo $this->Html->link(__('Listar Tipos'), array('action' => 'index'),array('class'=>'enlace'));?>&nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Listar Usuarios'), array('controller' => 'users', 'action' => 'index'),array('class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add'),array('class'=>'enlace')); ?> 
</p>
</div>
