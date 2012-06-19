<?php 
    $this->Html->addCrumb(__('Tipos'), '/admin/tipos'); 
    $this->set('title_for_layout',__('Tipos - Biblioteca')); 
?>
	<h1><?php echo __('Tipos');?></h1>
<?php echo $this->Form->create('Tipo');?>
	<fieldset>
        <legend><?php echo __('Editar Tipo de Usuario'); ?></legend>
    <p>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre', array('label'=>'Nombre: '));
        echo $this->Form->input('borrado', array('label'=>'Borrado: ','size'=>'2'));
    ?>
    <?php echo $this->Form->end(__('Editar'));?>
    </p>
	</fieldset>
<div class="actions centrado">
<p>
    <?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('Tipo.id')), array('class'=>'enlace'), __('¿Seguro que quieres borrar # %s?', $this->Form->value('Tipo.id'))); ?>&nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Listar Tipos'), array('action' => 'index'),array('class'=>'enlace'));?>&nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Listar Usuarios'), array('controller' => 'users', 'action' => 'index'),array('class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add'),array('class'=>'enlace')); ?> 
</p>
</div>
