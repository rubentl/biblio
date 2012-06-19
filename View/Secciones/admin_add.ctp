<div class="secciones form">
<?php echo $this->Form->create('Seccione');?>
	<fieldset>
		<legend><?php echo __('Admin Add Seccione'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('borrado');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Secciones'), array('action' => 'index'));?></li>
	</ul>
</div>
