<?php
$this->set('title_for_layout', 'Resultados - Biblioteca'); 
$this->Html->addCrumb('Resultados', '/libros/simple');
?>
	<h1><?php echo __('Resultados');?></h1>
<?php if ($this->Session->check('Message.flash')):?>
    	<h2 class="centrado">
        <?php echo $this->Session->flash();  ?>
        </h2>
<?php else: ?>
	<table id="tabla">
	<tr>
			<th><?php echo $this->Paginator->sort('titulo');?></th>
			<th><?php echo $this->Paginator->sort('isbn');?></th>
			<th><?php echo $this->Paginator->sort('editorial_id');?></th>
			<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
	foreach ($libros as $libro): ?>
	<tr>
		<td><?php echo h($libro['Libro']['titulo']); ?>&nbsp;</td>
		<td class="centrado"><?php echo h($libro['Libro']['isbn']); ?>&nbsp;</td>
		<td class="centrado"><?php echo h($libro['Editoriale']['nombre']); ?>&nbsp;</td>
		<td class="actions centrado">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $libro['Libro']['id'])); ?> 
            <?php switch($this->Session->read('Tipo')):
                    case 'admin':
            ?> - 
                <?php echo $this->Html->link(__('Editar'), array('controller'=>'admin/libros','action' => 'edit', $libro['Libro']['id'])); ?> -
                <?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $libro['Libro']['id']), null, __('¿Quieres borrar # %s?', $libro['Libro']['id'])); 
                        break;
                    case 'usuario':
            ?> - 
                <?php echo $this->Html->link(__('Pedir'),array(
                    'controller'=>'prestamos',
                    'action'=>'pedir',
                    $libro['Libro']['id'],
                    $libro['Libro']['titulo']));?>
            <?php endswitch;?>
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
		echo $this->Paginator->numbers(array('separator' => ' '));
        echo $this->Paginator->next(' - '.__('Sig').'>', array(), null, array('class' => 'next disabled'));
        echo '</span>'
	?>
    </p>
<?php endif; ?>
