<div class="temas form">
<?php echo $this->Form->create('Tema');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Tema'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('borrado');
		echo $this->Form->input('Libro');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tema.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tema.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Temas'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Libros'), array('controller' => 'libros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Libro'), array('controller' => 'libros', 'action' => 'add')); ?> </li>
	</ul>
</div>
