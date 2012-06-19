<?php 
    $this->Html->addCrumb(__('Secciones'), '/admin/contenidoHtmls'); 
    $this->set('title_for_layout',__('Secciones - Biblioteca')); 
?>

<div class="contenidoHtmls index">
	<h1><?php echo __('Secciones');?></h1>
	<table id="tabla">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('seccion_id','Sección');?></th>
			<th><?php echo $this->Paginator->sort('fecha');?></th>
			<th><?php echo $this->Paginator->sort('borrado');?></th>
			<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
	foreach ($contenidoHtmls as $contenidoHtml): ?>
	<tr>
		<td class="centrado"><?php echo h($contenidoHtml['ContenidoHtml']['id']); ?>&nbsp;</td>
		<td class="centrado">
			<?php echo $this->Html->link($contenidoHtml['Seccione']['nombre'], array('controller' => 'secciones', 'action' => 'view', $contenidoHtml['Seccione']['id'])); ?>
		</td>
		<td class="centrado"><?php echo h($contenidoHtml['ContenidoHtml']['fecha']); ?>&nbsp;</td>
		<td class="centrado"><?php echo h($contenidoHtml['ContenidoHtml']['borrado']); ?>&nbsp;</td>
		<td class="actions centrado">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $contenidoHtml['ContenidoHtml']['id'])); ?> - 
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $contenidoHtml['ContenidoHtml']['id']), null, __('¿Desear borrar # %s?', $contenidoHtml['ContenidoHtml']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página <strong>{:page}</strong> de <strong>{:pages}</strong>, <strong>{:current}</strong> registros de <strong>{:count}</strong>')
	));
	?>	
	<?php
        echo '<span class="mizdo">';
		echo $this->Paginator->prev('<' . __('Ant').' - ', array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ','));
        echo $this->Paginator->next(' - '.__('Sig').'>', array(), null, array('class' => 'next disabled'));
        echo '</span>'
	?>
    </p>
</div>
<div class="actions centrado">
		<?php echo $this->Html->link(__('Nuevo ContenidoHtml'), array('action' => 'add'), array('class'=>'enlace')); ?>&nbsp;|&nbsp;
		<?php echo $this->Html->link(__('Listar Secciones'), array('controller' => 'secciones', 'action' => 'index'), array('class'=>'enlace')); ?> &nbsp;|&nbsp;
		<?php echo $this->Html->link(__('Nueva Sección'), array('controller' => 'secciones', 'action' => 'add'), array('class'=>'enlace')); ?> 
</div>
