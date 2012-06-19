<?php
    $this->Html->addCrumb(__('Administración'), '/admin/administracion');
    $this->Html->addCrumb(__('Comentarios'), '/admin/Comentarios');
    $this->set('title_for_layout',__('Editoriales - Biblioteca'));
?>
<h1><?php  echo __('Comentarios');?></h1>
<div id="cristal">
<table>
<?php    
	echo $this->Util->centrar(array('izda'=>__('Id:'),'dcha'=>h($comentario['Comentario']['id']))); 
	echo $this->Util->centrar(array('izda'=>__('Comentario:'),'dcha'=>h($comentario['Comentario']['comentario']))); 
	echo $this->Util->centrar(array('izda'=>__('Recomendado:'),'dcha'=>h($comentario['Comentario']['recomendado']))); 
	echo $this->Util->centrar(array('izda'=>__('Usuario:'),'dcha'=>h($comentario['User']['username']))); 
	echo $this->Util->centrar(array('izda'=>__('Libro:'),'dcha'=>h($comentario['Libro']['titulo']))); 
	echo $this->Util->centrar(array('izda'=>__('Borrado:'),'dcha'=>h($comentario['Comentario']['borrado']))); 
?>    
</table>
</div>
<p>
<div class="actions centrado">
	<?php echo $this->Html->link(__('Editar Comentario'), array('action' => 'edit', $comentario['Comentario']['id']),array('class'=>'enlace')); ?> &nbsp;|&nbsp; 
	<?php echo $this->Form->postLink(__('Borrar Comentario'), array('action' => 'delete', $comentario['Comentario']['id']),array('class'=>'enlace'), __('¿Seguro que quieres borrar # %s?', $comentario['Comentario']['id'])); ?>  &nbsp;|&nbsp;
	<?php echo $this->Html->link(__('Listar Comentarios'), array('action' => 'index'),array('class'=>'enlace')); ?>  &nbsp;|&nbsp;
	<?php echo $this->Html->link(__('Nuevo Comentario'), array('action' => 'add'),array('class'=>'enlace')); ?>
</div>
</p>
