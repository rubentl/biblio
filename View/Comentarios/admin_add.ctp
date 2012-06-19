<?php
    $this->Html->addCrumb(__('Administración'), '/admin/administracion'); 
    $this->Html->addCrumb(__('Comentarios'), '/admin/comentarios'); 
    $this->set('title_for_layout',__('Comentarios - Biblioteca')); 
?>
<h1><?php  echo __('Comentario');?></h1>

<div class="comentarios form">
<?php echo $this->Form->create('Comentario');?>
	<fieldset>
		<legend><?php echo __('Nuevo Comentario'); ?></legend>
	<?php
		echo $this->Form->input('comentario', array('label' => array('text' => 'Comentario: ', 'class' => 'alinea'), 'rows' => '10', 'cols' => '60'));
		echo $this->Form->input('recomendado', array('label' => array('text' => 'Recomendado: ', 'class' => 'alinea'), 'size' => '2'));
		echo $this->Form->input('libro_id', array('label'=> array('text'=>'Libro: ', 'class'=>'alinea')));
		echo $this->Form->hidden('user_id', array('value' => $this->Session->read('Id')));
	?>
	</fieldset>
    <div class="centrado" ><p><?php echo $this->Form->end(__('Guardar'));?></p></div>
</div>
<div class="actions centrado">
    <?php echo $this->Html->link(__('Listar Comentarios'), array('controller' => 'comentarios', 'action' => 'index'), array('class'=>'enlace')); ?>
</div>
