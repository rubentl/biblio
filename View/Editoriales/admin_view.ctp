<?php
    $this->Html->addCrumb(__('Administración'), '/admin/administracion');
    $this->Html->addCrumb(__('Editoriales'), '/admin/editoriales');
    $this->set('title_for_layout',__('Editoriales - Biblioteca'));
?>
<h1><?php  echo __('Editoriales');?></h1>
<div id="cristal">
<table>
<?php    
	echo $this->Util->centrar(array('izda'=>__('Id:'),'dcha'=>h($editoriale['Editoriale']['id']))); 
	echo $this->Util->centrar(array('izda'=>__('Nombre:'),'dcha'=>h($editoriale['Editoriale']['nombre']))); 
	echo $this->Util->centrar(array('izda'=>__('Ciudad:'),'dcha'=>h($editoriale['Editoriale']['ciudad']))); 
	echo $this->Util->centrar(array('izda'=>__('Borrado:'),'dcha'=>h($editoriale['Editoriale']['borrado']))); 
?>    
</table>
</div>
<p>
<div class="actions centrado">
	<?php echo $this->Html->link(__('Editar Editorial'), array('action' => 'edit', $editoriale['Editoriale']['id']), array('class'=>'enlace')); ?> &nbsp;|&nbsp; 
	<?php echo $this->Form->postLink(__('Borrar Editorial'), array('action' => 'delete', $editoriale['Editoriale']['id']), array('class'=>'enlace'), __('¿Estás seguro que quieres borrar # %s?', $editoriale['Editoriale']['id'])); ?> &nbsp;|&nbsp; 
	<?php echo $this->Html->link(__('Listar Editoriales'), array('action' => 'index'), array('class'=>'enlace')); ?> &nbsp;|&nbsp; 
	<?php echo $this->Html->link(__('Nueva Editorial'), array('action' => 'add'), array('class'=>'enlace')); ?> 
</div>
</p>
