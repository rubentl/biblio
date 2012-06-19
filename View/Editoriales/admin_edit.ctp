<?php
    $this->Html->addCrumb(__('Administración'), '/admin/administracion');
    $this->Html->addCrumb(__('Editoriales'), '/admin/editoriales');
    $this->set('title_for_layout',__('Editoriales - Biblioteca'));
?>

<h1><?php echo __('Editoriales');?></h1>

<?php echo $this->Form->create('Editoriale');?>
	<fieldset>
        <legend><?php echo __('Editar Editorial'); ?></legend>
    <div class="mizdo">
	<?php
		echo $this->Form->input('id', array('label' => array('text' => 'Id: ', 'class' => 'alinea'), 'size'=>'4'));
		echo $this->Form->input('nombre', array('label' => array('text' => 'Nombre: ', 'class' => 'alinea'), 'size'=>'40'));
		echo $this->Form->input('ciudad', array('label' => array('text' => 'Ciudad: ', 'class' => 'alinea'), 'size'=>'40'));
		echo $this->Form->input('borrado', array('label' => array('text' => 'Borrado: ', 'class' => 'alinea'), 'size'=>'2'));
    ?>
    </div>
	</fieldset>
<div class="centrado"><p><?php echo $this->Form->end(__('Guardar'));?></p></div>
<div class="actions centrado">
    <?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('Editoriales.id')), array('class'=>'enlace'), __('¿Estás seguro que quieres borrar # %s?', $this->Form->value('Editoriales.id'))); ?> &nbsp;|&nbsp;
	<?php echo $this->Html->link(__('Listar Editoriales'), array('action' => 'index'), array('class'=>'enlace'));?>
</div>
