<?php 
    $this->Html->addCrumb(__('Libros'), '/libros/add/'.$libros['Libro']['id']); 
    $this->Html->addCrumb(__('Contenidos'), '/contenidos/add/'.$libros['Libro']['id']); 
    $this->set('title_for_layout',__('Comentarios - Biblioteca')); 
?>
<?php echo $this->Form->create('Contenido', array('type'=>'file'));?>
	<fieldset>
		<legend><?php echo __('Nuevo Contenido'); ?></legend>
	
		<p><?php echo $this->Form->file('nombre', array('label' => array('text' => 'Archivo: ', 'class' => 'alinea'))); ?></p>
		<?php echo $this->Form->input('descripcion', array('label' => array('text' =>
        'Descripción: ', 'class' => 'alinea'), 'size'=>'40', 'maxlegth' => '80'));
		echo $this->Form->hidden('libro_id', array('value'=> $libros['Libro']['id']));
		echo $this->Form->hidden('user_id', array('value' => $users['User']['id']));
	?>
   <div class="centrado"><?php echo $this->Form->end(__('Guardar'));?></div>
	</fieldset>
