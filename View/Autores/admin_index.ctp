<?php 
    $this->Html->addCrumb('Autores', '/admin/autores'); 
    $this->set('title_for_layout','Autores - Biblioteca'); 
?>
    <h1><?php echo __('Autores');?></h1>
	<table id="tabla">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('borrado');?></th>
			<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
	foreach ($autores as $autore): ?>
	<tr>
		<td class="centrado"><?php echo h($autore['Autore']['id']); ?>&nbsp;</td>
		<td class="centrado"><?php echo h($autore['Autore']['nombre']); ?>&nbsp;</td>
		<td class="centrado"><?php echo h($autore['Autore']['borrado']); ?>&nbsp;</td>
		<td class="actions centrado">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $autore['Autore']['id'])); ?> -
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $autore['Autore']['id'])); ?> -
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $autore['Autore']['id']), null, __('¿Estás seguro que quieres borrar # %s?', $autore['Autore']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
        'format' => __('Página <strong>{:page}</strong> de <strong>{:pages}</strong>, <strong>{:current}</strong> registros de <strong>{:count}</strong>')));
    echo '<span class="mizdo">';
    echo $this->Paginator->prev('<' . __('Ant').' - ', array(), null, array('class' => 'prev disabled'));
    echo $this->Paginator->numbers(array('separator' => ','));
    echo $this->Paginator->next(' - '. __('Sig').'>', array(), null, array('class' => 'next disabled'));
    echo '</span>'
	?>
    </p>
<div class="actions centrado">
    <?php echo $this->Html->link(__('Nuevo Autor'), array('action' => 'add'),array('class'=>'enlace')); ?> &nbsp; | &nbsp;
    <?php echo $this->Html->link(__('Listar Libros'), array('controller' => 'libros', 'action' => 'index'),array('class'=>'enlace')); ?> &nbsp; | &nbsp;
    <?php echo $this->Html->link(__('Nuevo Libro'), array('controller' => 'libros', 'action' => 'add'),array('class'=>'enlace')); ?> 
</div>
