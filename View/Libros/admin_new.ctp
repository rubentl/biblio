<?php 
    $this->Html->addCrumb(__('Libros'), '/admin/libros'); 
    $this->set('title_for_layout',__('Libros - Biblioteca')); 
?>

<div class="actions centrado">
	<?php echo $this->Form->postLink(__('Borrar'), array(
        'action' => 'delete', 
        $this->Form->value('Libro.id')), array(
            'class'=>'enlace'),
         __('¿Seguro que quieres borrar # %s?', $this->Form->value('Libro.id'))); ?>&nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Listar Libros'), array(
        'action' => 'index'), array(
            'class'=>'enlace'));?>&nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Listar Editoriales'), array(
        'controller' => 'editoriales', 
        'action' => 'index'), array(
            'class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Nueva Editorial'), array(
        'controller' => 'editoriales', 
        'action' => 'add'), array(
            'class'=>'enlace')); ?> <br />
    <?php echo $this->Html->link(__('Listar Comentarios'), array(
        'controller' => 'comentarios', 
        'action' => 'index'), array(
            'class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Nuevo Comentario'), array(
        'controller' => 'comentarios', 
        'action' => 'add'), array(
            'class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Listar Contenidos'), array(
        'controller' => 'contenidos', 
        'action' => 'index'), array(
            'class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Nuevo Contenido'), array(
        'controller' => 'contenidos', 
        'action' => 'add'), array(
            'class'=>'enlace')); ?> <br />
    <?php echo $this->Html->link(__('Listar Préstamos'), array(
        'controller' => 'prestamos', 
        'action' => 'index'), array(
            'class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Nuevo Prestamo'), array(
        'controller' => 'prestamos', 
        'action' => 'add'), array(
            'class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Listar Autores'), array(
        'controller' => 'autores', 
        'action' => 'index'), array(
            'class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Nuevo Autor'), array(
        'controller' => 'autores', 
        'action' => 'add'), array(
            'class'=>'enlace')); ?><br /> 
    <?php echo $this->Html->link(__('Listar Temas'), array(
        'controller' => 'temas', 
        'action' => 'index'), array(
            'class'=>'enlace')); ?> &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Nuevo Tema'), array(
        'controller' => 'temas', 
        'action' => 'add'), array(
            'class'=>'enlace')); ?> 
</div>
<?php // preparamos los datos si los hay
    $titulo = ''; $editorial = ''; $isbn = ''; $edicion = ''; $anio = ''; $autor = '';
    $tema = ''; $encuadernacion = '';
    if ($this->Session->check('Datos')){ 
        $datos = $this->Session->read('Datos');
        if (isset($datos['Título:'])) $titulo=$datos['Título:'];
        if (isset($datos['Edición:'])) $edicion=$datos['Edición:'];
        if (isset($datos['Fecha Edición:'])) $anio=$datos['Fecha Edición:'];
        if (isset($datos['Encuadernación:'])) $encuadernacion=$datos['Encuadernación:'];
    }
    if ($this->Session->check('Ides')){
        $ides = $this->Session->read('Ides');
        if (isset($ides['Editorial'])) $editorial=$ides['Editorial'];
        if (isset($ides['Autores'])) $autor=$ides['Autores'];
        if (isset($ides['Temas'])) $tema=$ides['Temas'];

    }
    if ($this->Session->check('Isbn')) $isbn=$this->Session->read('Isbn');
?>
<h1><?php echo __('Libro');?></h1>
<?php 
    echo $this->Session->flash('encontrado');
    echo $this->Form->create('Libro');?>
	<fieldset>
        <legend><?php echo __('Nuevo Libro'); ?></legend>
    <div class="mizdo">
	<?php
        echo $this->Form->input('id', array(
            'label' => array(
                'text' => 'Id: ', 
                'class' => 'alinea')));
		echo $this->Form->input('titulo', array(
            'label' => array(
                'text' => 'Título: ', 
                'class' => 'alinea'), 
            'size'=>'50',
            'value'=>$titulo ));
        echo $this->Form->input('isbn', array(
            'label' => array(
                'text' => 'Isbn: ', 
                'class'=>'alinea'),
            'size' => '13',
            'value' => $isbn));
		echo $this->Form->input('tejuelo', array(
            'label' => array(
                'text' => 'Tejuelo: ', 
                'class' => 'alinea')));
		echo $this->Form->input('anio', array(
            'label' => array(
                'text' => 'Año: ', 
                'class'=>'alinea'), 
            'size' => '5',
            'value' => $anio));
        echo $this->Form->input('editoriale_id', array(
            'label' => array(
                'text' => 'Editorial: ', 
                'class' => 'alinea'),
            'div'=>false,
            'size'=>'4',
            'value' => $editorial));
        echo $this->Html->link(__('Nueva Editorial'), array(
            'controller' => 'editoriales',
            'action' => 'add'), array(
                'class'=>'enlace-boton', 
                'target'=>'_blank'));
		echo $this->Form->input('edicion', array(
            'label' => array(
                'text' => 'Edición: ', 
                'class'=>'alinea'), 
            'size' => '3',
            'value' => $edicion));
		echo $this->Form->input('encuadernacion', array(
            'label' => array(
                'text' => 'Encuad.: ', 
                'class' => 'alinea',
            'size' => 10,
            'value' => $encuadernacion)));
		echo $this->Form->input('copias', array(
            'label' => array(
                'text' => 'Copias: ', 
                'class'=>'alinea'), 
            'size'=>'3', 
            'value'=>1));
        echo $this->Form->input('Autore',array(
            'label' => array(
                'text' => 'Autores: ', 
                'class' => 'alinea'),
            'size' => '4',
            'div' => false,
            'value' => $autor));
        echo $this->Html->link(__('Nuevo Autor'), array(
            'controller' => 'autores', 
            'action' => 'add'), array(
                'class'=>'enlace-boton', 
                'target'=>'_blank'));
		echo $this->Form->input('Tema', array(
            'label' => array(
                'text' => 'Temas: ', 
                'class'=>'alinea'), 
            'size' => '6',
            'div' => false,
            'value' => $tema));
        echo $this->Html->link(__('Nuevo Tema'), array(
            'controller' => 'temas', 
            'action' => 'add'), array(
                'class'=>'enlace-boton', 
                'target'=>'_blank'));
		echo $this->Form->input('borrado', array(
            'label' => array(
                'text' => 'Borrado: ', 
                'class' => 'alinea'), 
            'size'=>'2', 
            'value'=>'no'));
    ?>
    </div>
	</fieldset>
<div class="centrado"><p><?php echo $this->Form->end(__('Guardar'));?></p></div>

