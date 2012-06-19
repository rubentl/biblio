<div class="contenidoHtmls form">
<?php echo $this->Form->create('ContenidoHtml');?>
	<fieldset>
		<legend><?php echo __('Admin Add Contenido Html'); ?></legend>
	<?php
		echo $this->Form->input('seccion_id');
		echo $this->Form->input('texto');
		echo $this->Form->input('borrado');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contenido Htmls'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Secciones'), array('controller' => 'secciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccione'), array('controller' => 'secciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
