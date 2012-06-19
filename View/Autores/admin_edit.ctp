<?php
    $this->Html->addCrumb('Administración', '/admin/administracion');
    $this->Html->addCrumb('Autores', '/admin/autores'); 
    $this->set('title_for_layout','Autores - Biblioteca'); 
?>
<h1><?php echo __('Autores') ?></h1>

<?php echo $this->Form->create('Autore');?>
	<fieldset>
		<legend><?php echo __('Editar autor'); ?></legend>
<div class="mizdo">
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre', array('label'=>array('text'=>'Nombre: ','class'=>'alinea')));
		echo $this->Form->input('borrado', array('label'=>array('text'=>'Borrado: ','class'=>'alinea'), 'size'=>'2'));
	?>
</div>
	</fieldset>
<div class="centrado"><p><?php echo $this->Form->end(__('Editar'));?></p></div>
<div class="actions centrado">
		<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('Autore.id')), array('class'=>'enlace'), __('¿Seguro que quieres borrar # %s?', $this->Form->value('Autore.id'))); ?> &nbsp;|&nbsp;
		<?php echo $this->Html->link(__('Listar Autores'), array('action' => 'index'),array('class'=>'enlace'));?> &nbsp;|&nbsp;
		<?php echo $this->Html->link(__('Listar Libros'), array('controller' => 'libros', 'action' => 'index'),array('class'=>'enlace')); ?> &nbsp;|&nbsp; 
		<?php echo $this->Html->link(__('Nuevo Libro'), array('controller' => 'libros', 'action' => 'add'),array('class'=>'enlace')); ?> 
</div>
