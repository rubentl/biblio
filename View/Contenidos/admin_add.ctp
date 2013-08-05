<?php
    $this->Html->addCrumb(__('Administración'), '/admin/administracion'); 
    $this->Html->addCrumb(__('Contenidos'), '/admin/contenidos'); 
    $this->set('title_for_layout',__('Contenidos - Biblioteca')); 
?>
<h1><?php  echo __('Contenido');?></h1>

<div class="contenidos form">
<?php echo $this->Form->create('contenido');?>
	<fieldset>
		<legend><?php echo __('Nuevo contenido'); ?></legend>
    <div class="mizdo">
	<?php
		echo $this->Form->file('nombre', array('label' => array('text' => 'Archivo: ', 'class' => 'alinea')));
		echo $this->Form->input('description', array('label' => array('text' =>
        'Descripción: ', 'class' => 'alinea'), 'size' => '40', 'maxlength'=>80));
		echo $this->Form->input('libro_id', array('label'=> array('text'=>'Libro: ', 'class'=>'alinea'), 'size'=>'5'));
		echo $this->Form->input('user_id', array('label'=> array('text'=>'Usuario:', 'class'=>'alinea'), 'size'=>'5'));
		echo $this->Form->input('borrado', array('label'=> array('text'=>'Borrado:',
        'class'=>'alinea'), 'size'=>'2', 'value'=>'no'));
    ?>
    </div>
	</fieldset>
    <div class="centrado" ><p><?php echo $this->Form->end(__('Guardar'));?></p></div>
</div>
<div class="actions centrado">
    <?php echo $this->Html->link(__('Listar contenidos'), array('controller' => 'contenidos', 'action' => 'index'), array('class'=>'enlace')); ?>
</div>
