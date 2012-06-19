<?php 
    $this->Html->addCrumb('Administración', '/admin/administracion/'); 
    $this->Html->addCrumb('Préstamos', '/admin/prestamos/'); 
    $this->set('title_for_layout','Tipos - Biblioteca'); 
?>
<div class="prestamos index">
	<h1><?php echo __('Préstamos');?></h1>
	<table id="tabla">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('libro_id');?></th>
			<th><?php echo $this->Paginator->sort('fecha_prestamo');?></th>
			<th><?php echo $this->Paginator->sort('fecha_devolución');?></th>
			<th><?php echo $this->Paginator->sort('borrado');?></th>
			<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
	foreach ($prestamos as $prestamo): ?>
	<tr>
		<td class="centrado"><?php echo h($prestamo['Prestamo']['id']); ?>&nbsp;</td>
		<td class="centrado">
			<?php echo $this->Html->link($prestamo['User']['username'], array('controller' => 'users', 'action' => 'view', $prestamo['User']['id'])); ?>
		</td>
		<td class="centrado">
			<?php echo $this->Html->link($prestamo['Libro']['titulo'], array('controller' => 'libros', 'action' => 'view', $prestamo['Libro']['id'])); ?>
		</td>
		<td class="centrado"><?php echo h($prestamo['Prestamo']['fecha_prestamo']); ?>&nbsp;</td>
		<td class="centrado"><?php echo h($prestamo['Prestamo']['fecha_devolucion']); ?>&nbsp;</td>
		<td class="centrado"><?php echo h($prestamo['Prestamo']['borrado']); ?>&nbsp;</td>
		<td class="actions centrado">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $prestamo['Prestamo']['id'])); ?> -
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $prestamo['Prestamo']['id'])); ?> -
            <?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $prestamo['Prestamo']['id']), null, __('¿Estás seguro que quieres borrar # %s?', $prestamo['Prestamo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
        'format' => __('Página <strong>{:page}</strong> de <strong>{:pages}</strong>, <strong>{:current}</strong> registros de <strong>{:count}</strong>')));
	?>
	<?php
        echo '<span class="mizdo">';
		echo $this->Paginator->prev('<' . __('Ant').' - ', array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ','));
        echo $this->Paginator->next(__('Sig') . '>', array(), null, array('class' => 'next disabled'));
        echo '</span>'
	?> </span></p>
</div>
<div class="actions centrado">
    <?php echo $this->Html->link(__('Nuevo Prestamo'), array('action' => 'add'), array('class'=>'enlace')); ?>&nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Listar Usuarios'), array('controller' => 'users', 'action' => 'index'),array('class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add'),array('class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Listar Libros'), array('controller' => 'libros', 'action' => 'index'),array('class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Nuevo Libro'), array('controller' => 'libros', 'action' => 'add'),array('class'=>'enlace')); ?> 
</div>
