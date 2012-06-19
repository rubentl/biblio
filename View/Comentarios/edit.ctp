<?php
    $this->Html->addCrumb(__('Libro'), '/libros/view/'.$libros['Libro']['id']); 
    $this->Html->addCrumb(__('Comentarios'), '/comentarios/edit/'.$comentario['Comentario']['id']); 
    $this->set('title_for_layout',__('Comentarios - Biblioteca')); 
?>
<h1><?php  echo __('Comentario');?></h1>

<div class="comentarios form">
<?php echo $this->Form->create('Comentario');?>
	<fieldset>
		<legend><?php echo __('Editar Comentario'); ?></legend>
	<?php
		echo $this->Form->input('comentario', array('label' => array('text' => 'Comentario: ', 'class' => 'alinea'), 'rows' => '10', 'cols' => '60'));
		echo $this->Form->input('recomendado', array('label' => array('text' => 'Recomendado: ', 'class' => 'alinea'), 'size' => '4'));
		echo $this->Form->hidden('libro_id', array('value'=> $libros['Libro']['id']));
		echo $this->Form->hidden('user_id', array('value' => $users['User']['id']));
	?>
    <div class="centrado" ><?php echo $this->Form->end(__('Guardar'));?></div>
	</fieldset>

</div>
