<?php
    $this->Html->addCrumb(__('Tipos'), '/admin/tipos'); 
    $this->set('title_for_layout',__('Tipos - Biblioteca')); 
?>
<h1><?php  echo __('Tipo');?></h1>
<div id="cristal">
<?php 
	echo $this->Util->centrar(array('izda'=>__('Id:'),'dcha'=>h($tipo['Tipo']['id']))); 
	echo $this->Util->centrar(array('izda'=>__('Nombre:'),'dcha'=>h($tipo['Tipo']['nombre']))); 
	echo $this->Util->centrar(array('izda'=>__('Borrado:'),'dcha'=>h($tipo['Tipo']['borrado']))); 
?>
</div>
<div class="actions centrado">
<p>
	<?php echo $this->Html->link(__('Editar Tipo'), array('action' => 'edit', $tipo['Tipo']['id']),array('class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Form->postLink(__('Borrar Tipo'), array('action' => 'delete', $tipo['Tipo']['id']),array('class'=>'enlace'), __('¿Estás seguro que quieres borrar # %s?', $tipo['Tipo']['id'])); ?>&nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Listar Tipos'), array('action' => 'index'),array('class'=>'enlace')); ?>&nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Nuevo Tipo'), array('action' => 'add'),array('class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Listar Usuarios'), array('controller' => 'users', 'action' => 'index'),array('class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add'),array('class'=>'enlace')); ?> 
</p>
</div>

<div class="related">
	<h3><?php echo __('Usuarios relacionados');?></h3>
	<?php if (!empty($tipo['User'])):?>
	<table id="tabla">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Dni'); ?></th>
		<th><?php echo __('Noticias'); ?></th>
		<th><?php echo __('Borrado'); ?></th>
		<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tipo['User'] as $user): ?>
		<tr>
			<td class="centrado"><?php echo $user['id'];?></td>
			<td class="centrado"><?php echo $user['username'];?></td>
			<td class="centrado"><?php echo $user['email'];?></td>
			<td class="centrado"><?php echo $user['dni'];?></td>
			<td class="centrado"><?php echo $user['noticias'];?></td>
			<td class="centrado"><?php echo $user['borrado'];?></td>
			<td class="actions centrado">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?> -
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?> -
				<?php echo $this->Form->postLink(__('Borrar'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('¿Estás seguro que quieres borrar # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions centrado">
    	<p>
		<?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add'), array('class'=>'enlace'));?> 
        </p>
	</div>
</div>
