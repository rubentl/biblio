<?php
    $this->Html->addCrumb(__('Administración'), '/admin/administracion'); 
    $this->Html->addCrumb(__('Temas'), '/admin/temas/add'); 
    $this->set('title_for_layout',__('Temas - Biblioteca')); 
?>
<h1><?php echo __('Temas') ?></h1>

<div class="temas form">
<?php echo $this->Form->create('Tema');?>
	<fieldset>
        <legend><?php echo __('Añadir un Tema'); ?></legend>
    <div class="mizdo"><p>
	<?php
		echo $this->Form->input('nombre', array('label' => array('text' => 'Tema: '), 'size'=>'50'));
    ?>
    </p></div>
	</fieldset>
<div class="centrado"><p><?php echo $this->Form->end(__('Guardar'));?></p></div>
</div>
<div class="actions centrado">
		<?php echo $this->Html->link(__('Listar Temas'), array('action' => 'index'),array('class'=>'enlace'));?> &nbsp;|&nbsp;
		<?php echo $this->Html->link(__('Listar Libros'), array('controller' => 'libros', 'action' => 'index'),array('class'=>'enlace')); ?> &nbsp;|&nbsp;
        <?php echo $this->Html->link(__('Nuevo Libro'), array('controller' => 'libros', 'action' => 'add'),array('class'=>'enlace')); ?> 
</div>
