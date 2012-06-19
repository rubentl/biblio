<?php
    $this->Html->addCrumb(__('Administración'), '/admin/administracion');
    $this->Html->addCrumb(__('Contenidos'), '/admin/Contenidos');
    $this->set('title_for_layout',__('Contenidos - Biblioteca'));
?>
<h1><?php  echo __('Contenidos');?></h1>
<div id="cristal">
<table>
<?php    
	echo $this->Util->centrar(array('izda'=>__('Id:'),'dcha'=>h($contenido['Contenido']['id']))); 
	echo $this->Util->centrar(array('izda'=>__('Nombre:'),'dcha'=>h($contenido['Contenido']['nombre']))); 
	echo $this->Util->centrar(array('izda'=>__('Descripción:'),'dcha'=>h($contenido['Contenido']['descripcion']))); 
	echo $this->Util->centrar(array('izda'=>__('Usuario:'),'dcha'=>h($contenido['User']['username']))); 
	echo $this->Util->centrar(array('izda'=>__('Libro:'),'dcha'=>h($contenido['Libro']['titulo']))); 
	echo $this->Util->centrar(array('izda'=>__('Borrado:'),'dcha'=>h($contenido['Contenido']['borrado']))); 
?>  
</table>  
</div>
<p>
<div class="actions centrado">
		<?php echo $this->Html->link(__('Editar Contenido'), array('action' => 'edit', $contenido['Contenido']['id']),array('class'=>'enlace')); ?> &nbsp;|&nbsp;
		<?php echo $this->Form->postLink(__('Borrar Contenido'), array('action' => 'delete', $contenido['Contenido']['id']),array('class'=>'enlace'), __('¿Estás seguro que quieres borrar # %s?', $contenido['Contenido']['id'])); ?>&nbsp;|&nbsp; 
		<?php echo $this->Html->link(__('Listar Contenidos'), array('action' => 'index'),array('class'=>'enlace')); ?>&nbsp;|&nbsp; 
		<?php echo $this->Html->link(__('Nuevo Contenido'), array('action' => 'add'),array('class'=>'enlace')); ?>&nbsp;|&nbsp; 
		<?php echo $this->Html->link(__('Descargar'), "/descargas/descarga/".$contenido['Contenido']['nombre'], array('class'=>'enlace')); ?>
</div>
</p>
