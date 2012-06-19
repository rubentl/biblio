<div class="libros index">
	<h2><?php echo __('Libros');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('titulo');?></th>
			<th><?php echo $this->Paginator->sort('isbn');?></th>
			<th><?php echo $this->Paginator->sort('tejuelo');?></th>
			<th><?php echo $this->Paginator->sort('anio');?></th>
			<th><?php echo $this->Paginator->sort('edicion');?></th>
			<th><?php echo $this->Paginator->sort('editorial_id');?></th>
			<th><?php echo $this->Paginator->sort('encuadernacion');?></th>
			<th><?php echo $this->Paginator->sort('copias');?></th>
			<th><?php echo $this->Paginator->sort('borrado');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($libros as $libro): ?>
	<tr>
		<td><?php echo h($libro['Libro']['id']); ?>&nbsp;</td>
		<td><?php echo h($libro['Libro']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($libro['Libro']['isbn']); ?>&nbsp;</td>
		<td><?php echo h($libro['Libro']['tejuelo']); ?>&nbsp;</td>
		<td><?php echo h($libro['Libro']['anio']); ?>&nbsp;</td>
		<td><?php echo h($libro['Libro']['edicion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($libro['Editoriale']['nombre'], array('controller' => 'editoriales', 'action' => 'view', $libro['Editoriale']['id'])); ?>
		</td>
		<td><?php echo h($libro['Libro']['encuadernacion']); ?>&nbsp;</td>
		<td><?php echo h($libro['Libro']['copias']); ?>&nbsp;</td>
		<td><?php echo h($libro['Libro']['borrado']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $libro['Libro']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $libro['Libro']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $libro['Libro']['id']), null, __('Are you sure you want to delete # %s?', $libro['Libro']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(' - '. __('next').' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Libro'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Editoriales'), array('controller' => 'editoriales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Editoriale'), array('controller' => 'editoriales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contenidos'), array('controller' => 'contenidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contenido'), array('controller' => 'contenidos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Prestamos'), array('controller' => 'prestamos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prestamo'), array('controller' => 'prestamos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Autores'), array('controller' => 'autores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Autore'), array('controller' => 'autores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Temas'), array('controller' => 'temas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tema'), array('controller' => 'temas', 'action' => 'add')); ?> </li>
	</ul>
</div>
