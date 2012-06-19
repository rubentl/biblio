<?php
    $this->Html->addCrumb(__('Temas'), 'index');
    $this->set('title_for_layout',__('Temas - Biblioteca'));
?>
    <h1><?php echo __('Temas');?></h1>
<div id="cristal">
<table>
<?php
    echo $this->Util->centrar(array('izda'=>__('Id'),'dcha'=>h($tema['Tema']['id'])));
    echo $this->Util->centrar(array('izda'=>__('Nombre'),'dcha'=>h($tema['Tema']['nombre'])));
?>    
</table>
</div>
<p>
<div class="actions centrado">
    <?php echo $this->Html->link(__('Lista de Temas'), array('action' => 'index'), array('class'=>'enlace')); ?> &nbsp;|&nbsp;
	<?php echo $this->Html->link(__('Lista de Libros'), array('controller' => 'libros', 'action' => 'index'), array('class'=>'enlace')); ?>
</div>
</p>
<div class="related">
	<h3><?php echo __('Libros relacionados');?></h3>
	<?php if (!empty($tema['Libro'])):?>
	<table id="tabla">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('T&iacute;tulo'); ?></th>
		<th><?php echo __('Tejuelo'); ?></th>
		<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tema['Libro'] as $libro): ?>
		<tr>
			<td class="centrado"><?php echo $libro['id'];?></td>
			<td class="centrado"><?php echo $libro['titulo'];?></td>
			<td class="centrado"><?php echo $libro['tejuelo'];?></td>
			<td class="actions centrado">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'libros', 'action' => 'view', $libro['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'libros', 'action' => 'edit', $libro['id'])); ?>
				<?php echo $this->Form->postLink(__('Borrar'), array('controller' => 'libros', 'action' => 'delete', $libro['id']), null, __('¿Estás seguro que quieres borrar # %s?', $libro['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
