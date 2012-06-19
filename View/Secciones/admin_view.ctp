<div class="secciones view">
<h2><?php  echo __('Seccione');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($seccione['Seccione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($seccione['Seccione']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Borrado'); ?></dt>
		<dd>
			<?php echo h($seccione['Seccione']['borrado']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Seccione'), array('action' => 'edit', $seccione['Seccione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Seccione'), array('action' => 'delete', $seccione['Seccione']['id']), null, __('Are you sure you want to delete # %s?', $seccione['Seccione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Secciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccione'), array('action' => 'add')); ?> </li>
	</ul>
</div>
