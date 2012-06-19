<?php 
    $this->Html->addCrumb('Tipos', '/admin/tipos'); 
    $this->set('title_for_layout','Tipos - Biblioteca'); 
?>
	<h1><?php echo __('Tipos');?></h1>
	<table id="tabla">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('borrado');?></th>
			<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
	foreach ($tipos as $tipo): ?>
	<tr>
		<td class="centrado"><?php echo h($tipo['Tipo']['id']); ?>&nbsp;</td>
		<td class="centrado"><?php echo h($tipo['Tipo']['nombre']); ?>&nbsp;</td>
		<td class="centrado"><?php echo h($tipo['Tipo']['borrado']); ?>&nbsp;</td>
		<td class="actions centrado">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $tipo['Tipo']['id'])); ?> -
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $tipo['Tipo']['id'])); ?> -
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $tipo['Tipo']['id']), null, __('¿Estás seguro que quieres borrar # %s?', $tipo['Tipo']['id'])); ?>
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
	?>	</p>

<div class="actions centrado">
        <?php echo $this->Html->link(__('Nuevo Tipo'), array('action' => 'add'),array('class'=>'enlace')); ?>&nbsp|&nbsp 
		<?php echo $this->Html->link(__('Lista Usuarios'), array('controller' => 'users', 'action' => 'index'),array('class'=>'enlace')); ?> &nbsp|&nbsp 
		<?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add'),array('class'=>'enlace')); ?> 
</div>
