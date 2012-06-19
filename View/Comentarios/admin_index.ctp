<?php
$this->set('title_for_layout', 'Comentarios - Biblioteca'); 
$this->Html->addCrumb('Comentarios', '/admin/comentarios');
?>
<h1><?php echo __('Comentarios');?></h1>
<table id="tabla">
    <tr>
		<th><?php echo $this->Paginator->sort('Id'); ?></th>
		<th><?php echo $this->Paginator->sort('Comentario'); ?></th>
		<th><?php echo $this->Paginator->sort('Recomendado'); ?></th>
		<th><?php echo $this->Paginator->sort('Borrado'); ?></th>
		<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($comentarios as $comentario): ?>
		<tr>
			<td class="centrado"><?php echo h($comentario['Comentario']['id']);?>&nbsp;</td>
			<td><?php echo h($comentario['Comentario']['comentario']);?></td>
			<td class="centrado"><?php echo h($comentario['Comentario']['recomendado']);?>&nbsp;</td>
			<td class="centrado"><?php echo h($comentario['Comentario']['borrado']);?>&nbsp;</td>
			<td class="actions centrado">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'comentarios', 'action' => 'view', $comentario['Comentario']['id'])); ?> -
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'comentarios', 'action' => 'edit', $comentario['Comentario']['id'])); ?> -
				<?php echo $this->Form->postLink(__('Borrar'), array('controller' => 'comentarios', 'action' => 'delete', $comentario['Comentario']['id']), null, __('¿Quieres borrar # %s?', $comentario['Comentario']['id'])); ?>
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
    <?php echo $this->Html->link(__('Nuevo Comentario'), array('controller' => 'comentarios', 'action' => 'add'), array('class'=>'enlace')); ?>
</div>
