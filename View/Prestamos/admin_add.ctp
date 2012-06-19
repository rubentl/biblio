<?php 
    $this->Html->addCrumb('Administración', '/admin/administracion/'); 
    $this->Html->addCrumb('Préstamos', '/admin/prestamos/'); 
    $this->set('title_for_layout','Tipos - Biblioteca'); 
?>
<div class="prestamos form">
<h1>Préstamos</h1>
<?php echo $this->Form->create('Prestamo');?>
	<fieldset>
		<legend><?php echo __('Nuevo Préstamo'); ?></legend>
	<?php
		echo $this->Form->input('user_id', array('label' => array('text' => 'Usuario: ', 'class' => 'alinea'), 'size'=>'5'));
		echo $this->Form->input('libro_id', array('label' => array('text' => 'Libro: ', 'class' => 'alinea'), 'size'=>'10'));
        echo $this->Form->input('fecha_prestamo', array('label' => array('text' => 'F. préstamo: ', 'class' => 'alinea'), 'dateFormat'=>'DMY'));
		echo $this->Form->input('fecha_devolucion', array('label' => array('text' => 'F. devolución: ', 'class' => 'alinea'), 'dateFormat'=>'DMY'));
		echo $this->Form->input('borrado', array('label' => array('text' => 'Borrado: ', 'class' => 'alinea'), 'size'=>'5', 'value' => 'no'));
	?>
	</fieldset>
<div class="centrado"><p class="centrado"><?php echo $this->Form->end(__('Guardar'));?></p></div>
</div>
<div class="actions centrado">
    <?php echo $this->Html->link(__('Listar Préstamos'), array('action' => 'index'),array('class'=>'enlace'));?>&nbsp; | &nbsp;
    <?php echo $this->Html->link(__('Listar Usuarios'), array('controller' => 'users', 'action' => 'index'),array('class'=>'enlace')); ?> &nbsp; | &nbsp;
    <?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add'),array('class'=>'enlace')); ?> &nbsp; | &nbsp;
    <?php echo $this->Html->link(__('Listar Libros'), array('controller' => 'libros', 'action' => 'index'),array('class'=>'enlace')); ?><br /> 
    <?php echo $this->Html->link(__('Nuevo Libro'), array('controller' => 'libros', 'action' => 'add'),array('class'=>'enlace')); ?> 
</div>
