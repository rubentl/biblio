<?php
    $this->Html->addCrumb('Administración', '/admin/administracion');
    $this->Html->addCrumb('Autores', '/admin/autores/add'); 
    $this->set('title_for_layout','Autores - Biblioteca'); 
?>
<h1><?php echo __('Autores') ?></h1>

<?php echo $this->Form->create('Autore');?>
	<fieldset>
		<legend><?php echo __('Nuevo autor'); ?></legend>
<div class="mizdo">
    <?php
		echo $this->Form->input('nombre', array('label'=>array('text'=>'Nombre: ','class'=>'alinea')));
		echo $this->Form->input('borrado', array('label'=>array('text'=>'Borrado:
        ','class'=>'alinea'), 'size'=>'2', 'value'=>'no'));
    ?>
</div>
	</fieldset>
<div class="centrado"><p><?php echo $this->Form->end(__('Guardar'));?></p></div>

<div class="actions centrado">
		<?php echo $this->Html->link(__('Listar Autores'), array('action' => 'index'), array('class'=>'enlace'));?> &nbsp;|&nbsp;
		<?php echo $this->Html->link(__('Listar Libros'), array('controller' => 'libros', 'action' => 'index'), array('class'=>'enlace')); ?> &nbsp;|&nbsp; 
		<?php echo $this->Html->link(__('Nuevo Libro'), array('controller' => 'libros', 'action' => 'add'), array('class'=>'enlace')); ?> 
</div>
