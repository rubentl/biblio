<?php
    $this->Html->addCrumb(__('Administración'), '/admin/administracion'); 
    $this->Html->addCrumb(__('Contenidos'), '/admin/contenidos'); 
    $this->set('title_for_layout',__('Contenidos - Biblioteca')); 
?>
<h1><?php  echo __('Contenido');?></h1>

<div class="contenidos form">
<?php echo $this->Form->create('Contenido');?>
	<fieldset>
        <legend><?php echo __('Editar Contenido'); ?></legend>
    <div class="mizdo">
	<?php
		echo $this->Form->input('nombre', array('label' => array('text' => 'Nombre: ', 'class' => 'alinea'),'size' => '40'));
		echo $this->Form->input('descripcion', array('label' => array('text' => 'Descripción: ', 'class' => 'alinea'), 'size' => '60'));
		echo $this->Form->input('libro_id', array('label'=> array('text'=>'Libro: ', 'class'=>'alinea'), 'size'=>'5'));
		echo $this->Form->input('user_id', array('label'=> array('text'=>'Usuario:', 'class'=>'alinea'), 'size'=>'5'));
		echo $this->Form->input('borrado', array('label'=> array('text'=>'Borrado:', 'class'=>'alinea'), 'size'=>'2'));
    ?>
    </div>
	</fieldset>
    <div class="centrado" ><p><?php echo $this->Form->end(__('Guardar'));?></p></div>
</div>
<div class="actions centrado">
		<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('Contenido.id')), array('class'=>'enlace'), __('¿Seguro que quieres borrar # %s?', $this->Form->value('Contenido.id'))); ?> &nbsp;|&nbsp;
		<?php echo $this->Html->link(__('Listar Contenidos'), array('action' => 'index'), array('class'=>'enlace'));?>
</div>
