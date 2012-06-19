<?php 
    $this->Html->addCrumb(__('Libros'), '/admin/libros'); 
    $this->set('title_for_layout',__('Libros - Biblioteca')); 
?>

<h1><?php echo __('Libro');?></h1>
<?php echo $this->Form->create('Libro');?>
	<fieldset>
        <legend><?php echo __('Nuevo Libro'); ?></legend>
    <div class="mizdo">
	<?php
    echo $this->Form->input('isbn', array(
        'label' => array(
            'text' => 'Isbn: ', 
            'class' => 'alinea'), 
        'size'=>'18'));
    ?>
    </div>
	</fieldset>
<div class="centrado"><p><?php echo $this->Form->end(__('Probar suerte'));?></p></div>

<div class="actions centrado">
	<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('Libro.id')), array('class'=>'enlace'), __('¿Seguro que quieres borrar # %s?', $this->Form->value('Libro.id'))); ?>&nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Listar Libros'), array('action' => 'index'), array('class'=>'enlace'));?>&nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Listar Editoriales'), array('controller' => 'editoriales', 'action' => 'index'), array('class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Nuevo Editorial'), array('controller' => 'editoriales', 'action' => 'add'), array('class'=>'enlace')); ?> <br />
    <?php echo $this->Html->link(__('Listar Comentarios'), array('controller' => 'comentarios', 'action' => 'index'), array('class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Nuevo Comentario'), array('controller' => 'comentarios', 'action' => 'add'), array('class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Listar Contenidos'), array('controller' => 'contenidos', 'action' => 'index'), array('class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Nuevo Contenido'), array('controller' => 'contenidos', 'action' => 'add'), array('class'=>'enlace')); ?> <br />
    <?php echo $this->Html->link(__('Listar Préstamos'), array('controller' => 'prestamos', 'action' => 'index'), array('class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Nuevo Prestamo'), array('controller' => 'prestamos', 'action' => 'add'), array('class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Listar Autores'), array('controller' => 'autores', 'action' => 'index'), array('class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Nuevo Autor'), array('controller' => 'autores', 'action' => 'add'), array('class'=>'enlace')); ?><br /> 
    <?php echo $this->Html->link(__('Listar Temas'), array('controller' => 'temas', 'action' => 'index'), array('class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Nuevo Tema'), array('controller' => 'temas', 'action' => 'add'), array('class'=>'enlace')); ?> 
</div>
