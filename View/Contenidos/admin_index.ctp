<?php
    $this->set('title_for_layout', 'Contenidos - Biblioteca'); 
    $this->Html->addCrumb('Administracion', '/admin/administracion');
    $this->Html->addCrumb('Contenidos', '/admin/contenidos');
?>
<h1><?php echo __('Contenidos');?></h1>
<table id="tabla">
    <tr>
		<th><?php echo $this->Paginator->sort('Id'); ?></th>
		<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
		<th><?php echo $this->Paginator->sort('Descripcion'); ?></th>
		<th><?php echo $this->Paginator->sort('Borrado'); ?></th>
		<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($contenidos as $contenido): ?>
		<tr>
			<td class="centrado"><?php echo h($contenido['Contenido']['id']);?>&nbsp;</td>
			<td class="centrado"><?php echo h($contenido['Contenido']['nombre']);?></td>
			<td class="centrado"><?php echo h($contenido['Contenido']['descripcion']);?>&nbsp;</td>
			<td class="centrado"><?php echo h($contenido['Contenido']['borrado']);?>&nbsp;</td>
			<td class="actions centrado">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'contenidos', 'action' => 'view', $contenido['Contenido']['id'])); ?> -
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'contenidos', 'action' => 'edit', $contenido['Contenido']['id'])); ?> -
				<?php echo $this->Form->postLink(__('Borrar'), array('controller' => 'contenidos', 'action' => 'delete', $contenido['Contenido']['id']),null , __('¿Quieres borrar # %s?', $contenido['Contenido']['id'])); ?>
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
	?>
    </p>
<div class="actions centrado">
    <?php echo $this->Html->link(__('Nuevo Contenido'), array('controller' => 'contenidos', 'action' => 'add'), array('class'=>'enlace')); ?>
</div>
