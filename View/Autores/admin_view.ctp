<?php
    $this->Html->addCrumb('Autores', '/admin/autores/'); 
    $this->set('title_for_layout','Autores - Biblioteca'); 
?>
<div class="centrado">
    <h1><?php echo __('Autor');?></h1>
		<?php echo __('Id: '); ?>
			<?php echo h($autore['Autore']['id']); ?>
		<?php echo __('Nombre: '); ?>
			<?php echo h($autore['Autore']['nombre']); ?>
		<?php echo __('Borrado: '); ?>
			<?php echo h($autore['Autore']['borrado']); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Autore'), array('action' => 'edit', $autore['Autore']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Autore'), array('action' => 'delete', $autore['Autore']['id']), null, __('Are you sure you want to delete # %s?', $autore['Autore']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Autores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Autore'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Libros'), array('controller' => 'libros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Libro'), array('controller' => 'libros', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Libros');?></h3>
	<?php if (!empty($autore['Libro'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Isbn'); ?></th>
		<th><?php echo __('Tejuelo'); ?></th>
		<th><?php echo __('Anio'); ?></th>
		<th><?php echo __('Edicion'); ?></th>
		<th><?php echo __('Editorial Id'); ?></th>
		<th><?php echo __('Encuadernacion'); ?></th>
		<th><?php echo __('Copias'); ?></th>
		<th><?php echo __('Borrado'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($autore['Libro'] as $libro): ?>
		<tr>
			<td><?php echo $libro['id'];?></td>
			<td><?php echo $libro['titulo'];?></td>
			<td><?php echo $libro['isbn'];?></td>
			<td><?php echo $libro['tejuelo'];?></td>
			<td><?php echo $libro['anio'];?></td>
			<td><?php echo $libro['edicion'];?></td>
			<td><?php echo $libro['editorial_id'];?></td>
			<td><?php echo $libro['encuadernacion'];?></td>
			<td><?php echo $libro['copias'];?></td>
			<td><?php echo $libro['borrado'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'libros', 'action' => 'view', $libro['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'libros', 'action' => 'edit', $libro['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'libros', 'action' => 'delete', $libro['id']), null, __('Are you sure you want to delete # %s?', $libro['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Libro'), array('controller' => 'libros', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
