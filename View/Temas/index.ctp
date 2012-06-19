<?php
    $this->Html->addCrumb(__('Temas'), 'index'); 
    $this->set('title_for_layout',__('Temas - Biblioteca')); 
?>
<h1><?php echo __('Temas') ?></h1>

<div class="temas index">
	<table id="tabla">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
	foreach ($temas as $tema): ?>
	<tr>
		<td class="centrado"><?php echo h($tema['Tema']['id']); ?>&nbsp;</td>
		<td class="centrado"><?php echo h($tema['Tema']['nombre']); ?>&nbsp;</td>
		<td class="actions centrado">
            <?php echo $this->Html->link(__('Ver'), array('action' => 'view', $tema['Tema']['id'])); ?>
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
	?> </p>
</div>
