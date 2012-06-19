<?php 
    $this->Html->addCrumb(__('Administración'), '/admin/administracion');
    $this->Html->addCrumb(__('Usuario'), '/admin/users/add'); 
    $this->set('title_for_layout',__('Usuario - Biblioteca')); 
?>
<h1> <?php echo __('Editar Usuario')?> </h1>
<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
        <legend><?php echo __('Editando usuario'); ?></legend>
        <div class="mizdo">
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username', array('label' => array('text' => 'Nombre: ', 'class' => 'alinea'), 'size'=>'30'));
		echo $this->Form->input('apellidos', array('label' => array('text' => 'Apellidos: ', 'class' => 'alinea'), 'size'=>'40'));
		echo $this->Form->input('domicilio', array('label' => array('text' => 'Domicilio: ', 'class' => 'alinea'), 'size'=>'40'));
		echo $this->Form->input('telefono', array('label' => array('text' => 'Teléfono: ', 'class' => 'alinea'), 'size'=>'15'));
		echo $this->Form->input('email', array('label' => array('text' => 'Email: ', 'class' => 'alinea'), 'size'=>'30'));
		echo $this->Form->input('dni', array('label' => array('text' => 'Dni: ', 'class' => 'alinea'), 'size'=>'10'));
		echo $this->Form->input('noticias', array('label' => array('text' => 'Noticias: ', 'class' => 'alinea'), 'size'=>'2'));
		// echo $this->Form->input('password', array('label' => array('text' => 'Contraseña: ', 'class' => 'alinea'), 'size'=>'50'));
		// echo $this->Form->input('rep_password', array('label' => array('text' => '*Repite Contraseña: '), 'type' => 'password', 'size'=>'50'));
        echo $this->Form->input('tipo_id', array('label' => array('text' => 'Tipo: ', 'class' => 'alinea'), 'size'=>'3'));
		echo $this->Form->input('borrado', array('label' => array('text' => 'Borrado: ', 'class' => 'alinea'), 'size'=>'2'));
?></div>
	</fieldset>
<div class="centrado"><p><?php echo $this->Form->end(__('Guardar'));?></p></div>
</div>
<div class="actions centrado">
    <?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('User.id')),array('class'=>'enlace'), __('¿Estás seguro que quieres borrar # %s?', $this->Form->value('User.id'))); ?> &nbsp; | &nbsp;
    <?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index'),array('class'=>'enlace'));?> &nbsp; | &nbsp;
    <?php echo $this->Html->link(__('Listar Tipos'), array('controller' => 'tipos', 'action' => 'index'),array('class'=>'enlace')); ?>  &nbsp; | &nbsp;
    <?php echo $this->Html->link(__('Nuevo Tipo'), array('controller' => 'tipos', 'action' => 'add'),array('class'=>'enlace')); ?>  &nbsp; | &nbsp;
    <?php echo $this->Html->link(__('Listar Prestamos'), array('controller' => 'prestamos', 'action' => 'index'),array('class'=>'enlace')); ?>  &nbsp; | &nbsp;
    <?php echo $this->Html->link(__('Nuevo Prestamo'), array('controller' => 'prestamos', 'action' => 'add'),array('class'=>'enlace')); ?> 
</div>
