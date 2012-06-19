<?php
    $this->Html->addCrumb(__('Administración'), '/admin/administracion');
    $this->Html->addCrumb(__('Editoriales'), '/admin/editoriales');
    $this->set('title_for_layout',__('Editoriales - Biblioteca'));
?>
<h1><?php echo __('Editoriales')?></h1>

	<table id="tabla">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('ciudad');?></th>
			<th><?php echo $this->Paginator->sort('borrado');?></th>
			<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
	foreach ($editoriales as $editoriale): ?>
	<tr>
		<td class="centrado"><?php echo h($editoriale['Editoriale']['id']); ?>&nbsp;</td>
		<td class="centrado"><?php echo h($editoriale['Editoriale']['nombre']); ?>&nbsp;</td>
		<td class="centrado"><?php echo h($editoriale['Editoriale']['ciudad']); ?>&nbsp;</td>
		<td class="centrado"><?php echo h($editoriale['Editoriale']['borrado']); ?>&nbsp;</td>
		<td class="actions centrado">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $editoriale['Editoriale']['id'])); ?> - 
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $editoriale['Editoriale']['id'])); ?> -
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $editoriale['Editoriale']['id']), null, __('¿Estás seguro que quieres borrar # %s?', $editoriale['Editoriale']['id'])); ?>
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
        echo $this->Paginator->next(' - '. __('Sig').'>', array(), null, array('class' => 'next disabled'));
        echo '</span>'
	?>
    </p>

<div class="actions centrado">
	<?php echo $this->Html->link(__('Nueva Editorial'), array('action' => 'add'), array('class'=>'enlace')); ?>
</div>
