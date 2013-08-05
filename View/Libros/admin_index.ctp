<?php 
    $this->Html->addCrumb(__('Libros'), 'index'); 
    $this->set('title_for_layout',__('Libros - Biblioteca')); 
?>

<div class="actions centrado">
        <?php echo $this->Html->link(__('Nuevo Libro'), array('action' => 'add'), array('class'=>'enlace')); ?>&nbsp;|&nbsp;
        <?php echo $this->Html->link(__('Listar Editoriales'), array('controller' => 'editoriales', 'action' => 'index'), array('class'=>'enlace')); ?> &nbsp;|&nbsp;
        <?php echo $this->Html->link(__('Listar Comentarios'), array('controller' => 'comentarios', 'action' => 'index'), array('class'=>'enlace')); ?> &nbsp;|&nbsp;
        <?php echo $this->Html->link(__('Listar Contenidos'), array('controller' => 'contenidos', 'action' => 'index'), array('class'=>'enlace')); ?> <br /> 
        <?php echo $this->Html->link(__('Listar Prestamos'), array('controller' => 'prestamos', 'action' => 'index'), array('class'=>'enlace')); ?> &nbsp;|&nbsp;
        <?php echo $this->Html->link(__('Listar Autores'), array('controller' => 'autores', 'action' => 'index'), array('class'=>'enlace')); ?> &nbsp;|&nbsp;
        <?php echo $this->Html->link(__('Listar Temas'), array('controller' => 'temas', 'action' => 'index'), array('class'=>'enlace')); ?> 
</div>
	<h1><?php echo __('Libros');?></h1>
	<table id="tabla">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('titulo');?></th>
			<th><?php echo $this->Paginator->sort('tejuelo');?></th>
			<th><?php echo $this->Paginator->sort('copias');?></th>
			<th><?php echo $this->Paginator->sort('borrado');?></th>
			<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
	foreach ($libros as $libro): ?>
	<tr>
		<td class="centrado"><?php echo h($libro['Libro']['id']); ?>&nbsp;</td>
		<td><?php echo h($libro['Libro']['titulo']); ?>&nbsp;</td>
		<td class="centrado"><?php echo h($libro['Libro']['tejuelo']); ?>&nbsp;</td>
		<td class="centrado"><?php echo h($libro['Libro']['copias']); ?>&nbsp;</td>
		<td class="centrado"><?php echo h($libro['Libro']['borrado']); ?>&nbsp;</td>
		<td class="actions centrado">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $libro['Libro']['id'])); ?> -
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $libro['Libro']['id'])); ?> -
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $libro['Libro']['id']), null, __('¿Quieres borrar # %s?', $libro['Libro']['id'])); ?>
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
		echo $this->Paginator->numbers(array('separator' => ' '));
        echo $this->Paginator->next(' - '. __('Sig').'>', array(), null, array('class' => 'next disabled'));
        echo '</span>'
	?>
    </p>
