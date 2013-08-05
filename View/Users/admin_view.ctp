<?php
    $this->Html->addCrumb(__('Administración'), '/admin/administracion'); 
    $this->Html->addCrumb(__('Usuarios'), '/admin/users'); 
    $this->set('title_for_layout',__('Usuarios - Biblioteca')); 
?>
<h1><?php  echo __('Usuario');?></h1>
<div id="cristal">
<table>
<?php 
	echo $this->Util->centrar(array('izda'=>__('Id:'),'dcha'=>h($user['User']['id']))); 
	echo $this->Util->centrar(array('izda'=>__('Nombre:'),'dcha'=>h($user['User']['username']))); 
	echo $this->Util->centrar(array('izda'=>__('Apellidos:'),'dcha'=>h($user['User']['apellidos']))); 
	echo $this->Util->centrar(array('izda'=>__('Teléfono:'),'dcha'=>h($user['User']['telefono']))); 
	echo $this->Util->centrar(array('izda'=>__('Email:'),'dcha'=>h($user['User']['email']))); 
	echo $this->Util->centrar(array('izda'=>__('Dni:'),'dcha'=>h($user['User']['dni']))); 
	echo $this->Util->centrar(array('izda'=>__('Noticias:'),'dcha'=>h($user['User']['noticias']))); 
	echo $this->Util->centrar(array('izda'=>__('Contraseña:'),'dcha'=>h($user['User']['password']))); 
	echo $this->Util->centrar(array('izda'=>__('Tipo:'),'dcha'=>h($user['Tipo']['nombre']))); 
	echo $this->Util->centrar(array('izda'=>__('Borrado:'),'dcha'=>h($user['User']['borrado']))); 
?>
</table>
</div>

<h3><?php echo __('Comentarios');?></h3>
	<?php if (!empty($user['Comentario'])):?>
	<table id="tabla">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Comentario'); ?></th>
		<th><?php echo __('Recomendado'); ?></th>
		<th><?php echo __('Libro'); ?></th>
		<th><?php echo __('Borrado'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Comentario'] as $comentario): ?>
		<tr>
			<td class="centrado"><?php echo $comentario['id'];?></td>
			<td class="centrado"><?php echo $this->Html->link(h($comentario['comentario']),array('controller'=>'comentarios','action'=>'view',$comentario['id']));?></td>
			<td class="centrado"><?php echo $comentario['recomendado'];?></td>
			<td class="centrado"><?php echo h($comentario['Libro']['titulo']);?></td>
			<td class="centrado"><?php echo $comentario['borrado'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<?php if (!empty($user['Contenido'])):?>
<h3><?php echo __('Contenidos');?></h3>
	<table id="tabla">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripción'); ?></th>
		<th><?php echo __('Libro'); ?></th>
		<th><?php echo __('Borrado'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Contenido'] as $contenido): ?>
		<tr>
			<td class="centrado"><?php echo $contenido['id'];?></td>
			<td class="centrado"><?php echo h($contenido['nombre']);?></td>
			<td class="centrado"><?php echo $this->Html->link(h($contenido['descripcion']),array('controller'=>'contenidos','action'=>'view',$contenido['id']));?></td>
			<td class="centrado"><?php echo h($contenido['Libro']['titulo']);?></td>
			<td class="centrado"><?php echo $contenido['borrado'];?></td>
		</tr>
	<?php endforeach; ?>
    </table>
<?php else:?>
<h3>No hay contenidos</h3>
<?php endif; ?>
    
	<?php if (!empty($user['Prestamo'])):?>
<h3><?php echo __('Préstamos');?></h3>
	<table id="tabla">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Libro Id'); ?></th>
		<th><?php echo __('Fecha Prestamo'); ?></th>
		<th><?php echo __('Fecha Devolucion'); ?></th>
		<th><?php echo __('Borrado'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Prestamo'] as $prestamo): ?>
		<tr>
			<td class="centrado"><?php echo $prestamo['id'];?></td>
			<td class="centrado"><?php echo $prestamo['user_id'];?></td>
			<td class="centrado"><?php echo $prestamo['libro_id'];?></td>
			<td class="centrado"><?php echo $prestamo['fecha_prestamo'];?></td>
			<td class="centrado"><?php echo $prestamo['fecha_devolucion'];?></td>
			<td class="centrado"><?php echo $prestamo['borrado'];?></td>
		</tr>
	<?php endforeach; ?>
    </table>
<?php else:?>
<h3>No hay Préstamos</h3>
<?php endif; ?>

