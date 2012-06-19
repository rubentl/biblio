<?php
    $this->Html->addCrumb(__('Libros'), '/admin/libros'); 
    $this->set('title_for_layout',__('Libros - Biblioteca')); 
?>
<h1><?php  echo __('Libros');?></h1>
<?php echo '<h3>'.$this->Session->flash().'</h3>'; ?>
<div id="cristal">
<table>
<?php
	echo $this->Util->centrar(array('izda'=>__('Id:'),'dcha'=>h($libro['Libro']['id']))); 
	echo $this->Util->centrar(array('izda'=>__('Título:'),'dcha'=>h($libro['Libro']['titulo']))); 
	echo $this->Util->centrar(array('izda'=>__('Isbn:'),'dcha'=>h($libro['Libro']['isbn']))); 
	echo $this->Util->centrar(array('izda'=>__('Tejuelo:'),'dcha'=>h($libro['Libro']['tejuelo']))); 
	echo $this->Util->centrar(array('izda'=>__('Año:'),'dcha'=>h($libro['Libro']['anio']))); 
	echo $this->Util->centrar(array('izda'=>__('Edición:'),'dcha'=>h($libro['Libro']['edicion']))); 
	echo $this->Util->centrar(array('izda'=>__('Editorial:'),'dcha'=>h($libro['Editoriale']['nombre']))); 
	echo $this->Util->centrar(array('izda'=>__('Encuadernación:'),'dcha'=>h($libro['Libro']['encuadernacion']))); 
	echo $this->Util->centrar(array('izda'=>__('Copias:'),'dcha'=>h($libro['Libro']['copias']))); 
	echo $this->Util->centrar(array('izda'=>__('Borrado:'),'dcha'=>h($libro['Libro']['borrado']))); 
?>	
</table>
</div>
<div class="related">
	<h3><?php echo __('Autores');?></h3>
	<?php if (!empty($libro['Autore'])):?>
	<table id="tabla">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Borrado'); ?></th>
		<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($libro['Autore'] as $autore): ?>
		<tr>
			<td class="centrado"><?php echo h($autore['id']);?></td>
			<td class="centrado"><?php echo h($autore['nombre']);?></td>
			<td class="centrado"><?php echo h($autore['borrado']);?></td>
			<td class="actions centrado">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'autores', 'action' => 'view', $autore['id'])); ?> -
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'autores', 'action' => 'edit', $autore['id'])); ?> -
				<?php echo $this->Form->postLink(__('Borrar'), array('controller' => 'autores', 'action' => 'delete', $autore['id']), null, __('¿Quieres borrar # %s?', $autore['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<div class="related">
	<h3><?php echo __('Temas');?></h3>
	<?php if (!empty($libro['Tema'])):?>
	<table id="tabla">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Borrado'); ?></th>
		<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($libro['Tema'] as $tema): ?>
		<tr>
			<td class="centrado"><?php echo h($tema['id']);?></td>
			<td class="centrado"><?php echo h($tema['nombre']);?></td>
			<td class="centrado"><?php echo h($tema['borrado']);?></td>
			<td class="actions centrado">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'temas', 'action' => 'view', $tema['id'])); ?> - 
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'temas', 'action' => 'edit', $tema['id'])); ?> - 
				<?php echo $this->Form->postLink(__('Borrar'), array('controller' => 'temas', 'action' => 'delete', $tema['id']), null, __('¿De verdad que quieres borrar # %s?', $tema['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	<?php endif; ?>
</div>

<div class="related">
	<?php if (!empty($libro['Comentario'])):?>
	<h3><?php echo __('Comentarios');?></h3>
	<table id="tabla">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Comentario'); ?></th>
		<th><?php echo __('Recomendado'); ?></th>
		<th><?php echo __('Borrado'); ?></th>
		<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($libro['Comentario'] as $comentario): ?>
		<tr>
			<td class="centrado"><?php echo h($comentario['id']);?></td>
			<td class="centrado"><?php echo h($comentario['comentario']);?></td>
			<td class="centrado"><?php echo h($comentario['recomendado']);?></td>
			<td class="centrado"><?php echo h($comentario['borrado']);?></td>
			<td class="actions centrado">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'comentarios', 'action' => 'view', $comentario['id'])); ?> -
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'comentarios', 'action' => 'edit', $comentario['id'])); ?> -
				<?php echo $this->Form->postLink(__('Borrar'), array('controller' => 'comentarios', 'action' => 'delete', $comentario['id']), null, __('¿Quieres borrar # %s?', $comentario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php else: ?>
	<h3>No hay comentarios.</h3>
<?php endif;?>
</div>

<div class="related">
	<?php if (!empty($libro['Contenido'])):?>
	<h3><?php echo __('Contenidos');?></h3>
	<table id="tabla">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripción'); ?></th>
		<th><?php echo __('Borrado'); ?></th>
		<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($libro['Contenido'] as $contenido): ?>
		<tr>
			<td class="centrado"><?php echo h($contenido['id']);?></td>
			<td class="centrado"><?php echo h($contenido['nombre']);?></td>
			<td><?php echo h($contenido['descripcion']);?></td>
			<td class="centrado"><?php echo h($contenido['borrado']);?></td>
			<td class="actions centrado">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'contenidos', 'action' => 'view', $contenido['id'])); ?> - 
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'contenidos', 'action' => 'edit', $contenido['id'])); ?> -
				<?php echo $this->Form->postLink(__('Borrar'), array('controller' => 'contenidos', 'action' => 'delete', $contenido['id']), null, __('Are you sure you want to delete # %s?', $contenido['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php else: ?>
	<h3>No hay contenidos.</h3>
<?php endif; ?>
</div>

<div class="related">
	<?php if (!empty($libro['Prestamo'])):?>
	<h3><?php echo __('Préstamos');?></h3>
	<table id="tabla">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Fecha Prestamo'); ?></th>
		<th><?php echo __('Fecha Devolucion'); ?></th>
		<th><?php echo __('Borrado'); ?></th>
		<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($libro['Prestamo'] as $prestamo): ?>
		<tr>
			<td class="centrado"><?php echo h($prestamo['id']);?></td>
			<td class="centrado"><?php echo h($prestamo['user_id']);?></td>
			<td class="centrado"><?php echo h($prestamo['fecha_prestamo']);?></td>
			<td class="centrado"><?php echo h($prestamo['fecha_devolucion']);?></td>
			<td class="centrado"><?php echo h($prestamo['borrado']);?></td>
			<td class="actions centrado">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'prestamos', 'action' => 'view', $prestamo['id'])); ?> -
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'prestamos', 'action' => 'edit', $prestamo['id'])); ?> -
				<?php echo $this->Form->postLink(__('Borrar'), array('controller' => 'prestamos', 'action' => 'delete', $prestamo['id']), null, __('¿Quieres borrar # %s?', $prestamo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php else: ?>
  <h3>No hay préstamos.</h3>
<?php endif; ?>
</div>

<div class="actions centrado">
<p>
	<?php echo $this->Html->link(__('Editar Libro'), array('action' => 'edit', $libro['Libro']['id']), array('class'=>'enlace')); ?>
    <?php echo $this->Form->postLink(__('Borrar Libro'), array('action' => 'delete', $libro['Libro']['id']), array('class'=>'enlace'), __('¿Seguro que quieres borrar # %s?', $libro['Libro']['id'])); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Nuevo Comentario'), array('controller' => 'comentarios', 'action' => 'add'), array('class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Nuevo Contenido'), array('controller' => 'contenidos', 'action' => 'add'), array('class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Nuevo Préstamo'), array('controller' => 'prestamos', 'action' => 'add'), array('class'=>'enlace')); ?> 
</p>
</div>

