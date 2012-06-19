<div class="users view">
<h2><?php  echo __('User');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($user['User']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($user['User']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Domicilio'); ?></dt>
		<dd>
			<?php echo h($user['User']['domicilio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($user['User']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dni'); ?></dt>
		<dd>
			<?php echo h($user['User']['dni']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Noticias'); ?></dt>
		<dd>
			<?php echo h($user['User']['noticias']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Tipo']['nombre'], array('controller' => 'tipos', 'action' => 'view', $user['Tipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Borrado'); ?></dt>
		<dd>
			<?php echo h($user['User']['borrado']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos'), array('controller' => 'tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo'), array('controller' => 'tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contenidos'), array('controller' => 'contenidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contenido'), array('controller' => 'contenidos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Prestamos'), array('controller' => 'prestamos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prestamo'), array('controller' => 'prestamos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comentarios');?></h3>
	<?php if (!empty($user['Comentario'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Comentario'); ?></th>
		<th><?php echo __('Recomendado'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Libro Id'); ?></th>
		<th><?php echo __('Borrado'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Comentario'] as $comentario): ?>
		<tr>
			<td><?php echo $comentario['id'];?></td>
			<td><?php echo $comentario['comentario'];?></td>
			<td><?php echo $comentario['recomendado'];?></td>
			<td><?php echo $comentario['user_id'];?></td>
			<td><?php echo $comentario['libro_id'];?></td>
			<td><?php echo $comentario['borrado'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comentarios', 'action' => 'view', $comentario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comentarios', 'action' => 'edit', $comentario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comentarios', 'action' => 'delete', $comentario['id']), null, __('Are you sure you want to delete # %s?', $comentario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Contenidos');?></h3>
	<?php if (!empty($user['Contenido'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Libro Id'); ?></th>
		<th><?php echo __('Programa Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Borrado'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Contenido'] as $contenido): ?>
		<tr>
			<td><?php echo $contenido['id'];?></td>
			<td><?php echo $contenido['nombre'];?></td>
			<td><?php echo $contenido['descripcion'];?></td>
			<td><?php echo $contenido['libro_id'];?></td>
			<td><?php echo $contenido['programa_id'];?></td>
			<td><?php echo $contenido['user_id'];?></td>
			<td><?php echo $contenido['borrado'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contenidos', 'action' => 'view', $contenido['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contenidos', 'action' => 'edit', $contenido['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contenidos', 'action' => 'delete', $contenido['id']), null, __('Are you sure you want to delete # %s?', $contenido['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contenido'), array('controller' => 'contenidos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Prestamos');?></h3>
	<?php if (!empty($user['Prestamo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Libro Id'); ?></th>
		<th><?php echo __('Fecha Prestamo'); ?></th>
		<th><?php echo __('Fecha Devolucion'); ?></th>
		<th><?php echo __('Borrado'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Prestamo'] as $prestamo): ?>
		<tr>
			<td><?php echo $prestamo['id'];?></td>
			<td><?php echo $prestamo['user_id'];?></td>
			<td><?php echo $prestamo['libro_id'];?></td>
			<td><?php echo $prestamo['fecha_prestamo'];?></td>
			<td><?php echo $prestamo['fecha_devolucion'];?></td>
			<td><?php echo $prestamo['borrado'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'prestamos', 'action' => 'view', $prestamo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'prestamos', 'action' => 'edit', $prestamo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'prestamos', 'action' => 'delete', $prestamo['id']), null, __('Are you sure you want to delete # %s?', $prestamo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Prestamo'), array('controller' => 'prestamos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
