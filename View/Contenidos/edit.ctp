<div class="contenidos form">
<?php echo $this->Form->create('Contenido');?>
	<fieldset>
		<legend><?php echo __('Edit Contenido'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('libro_id');
		echo $this->Form->input('programa_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('borrado');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Contenido.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Contenido.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contenidos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Libros'), array('controller' => 'libros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Libro'), array('controller' => 'libros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Programas'), array('controller' => 'programas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Programa'), array('controller' => 'programas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
