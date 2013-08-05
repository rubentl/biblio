<?php 
    $this->Html->addCrumb('Administración', '/admin/administracion/'); 
    $this->Html->addCrumb('Usuarios', '/admin/users/'); 
    $this->set('title_for_layout','Usuarios - Biblioteca'); 
?>
<div class="users index">
	<h1><?php echo __('Usuarios');?></h1>
	<p>
	<?php
	echo $this->Paginator->counter(array(
        'format' => __('Página <strong>{:page}</strong> de <strong>{:pages}</strong>, <strong>{:current}</strong> registros de <strong>{:count}</strong>')));
        echo '<span class="mizdo">';
		echo $this->Paginator->first('<< ', array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->prev(' < ', array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ','));
        echo $this->Paginator->next(' > ', array(), null, array('class' => 'next disabled'));
        echo $this->Paginator->last(' >> ', array(), null, array('class' => 'next disabled'));
        echo '</span>'
	?> </p>
	<table id="tabla">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('username');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('tipo_id');?></th>
			<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
	foreach ($users as $user): ?>
	<tr>
		<td class="centrado"><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td class="centrado"><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td class="centrado"><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($user['Tipo']['nombre'], array('controller' => 'tipos', 'action' => 'view', $user['Tipo']['id'])); ?>
		</td>
		<td class="actions centrado">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $user['User']['id'])); ?> -
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id'])); ?> -
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $user['User']['id']), null, __('¿Estás seguro que quieres borrar # %s?', $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
        'format' => __('Página <strong>{:page}</strong> de <strong>{:pages}</strong>, <strong>{:current}</strong> registros de <strong>{:count}</strong>')));
        echo '<span class="mizdo">';
		echo $this->Paginator->first('<< ', array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->prev(' < ', array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ','));
        echo $this->Paginator->next(' > ', array(), null, array('class' => 'next disabled'));
        echo $this->Paginator->last(' >> ', array(), null, array('class' => 'next disabled'));
        echo '</span>'
	?> </p>
</div>
<div class="centrado">
        <?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add'),array('class'=>'enlace')); ?> 
</div>
