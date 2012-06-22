<?php 
    $this->Html->addCrumb(__('Secciones'), '/admin/contenidoHtmls'); 
    $this->set('title_for_layout',__('ContenidoHtml - Biblioteca')); 
    echo $this->Html->script('tinymce/tiny_mce');
    echo $this->Html->scriptBlock('
        tinyMCE.init({mode: "textareas",
            theme: "advanced",
            language: "es",
            plugins: "table,paste,insertdatetime",
            theme_advanced_buttons1_add: "|,cut,copy,paste",
            theme_advanced_buttons2_add: "|,pastetext,pasteword,selectall,|,table,|,insertdate",
            theme_advanced_buttons3: "",
            oninit: function(){redrawSombras();}});
    ');?>

<div class="contenidoHtmls form">
<h1>Contenidos Html</h1>
<?php echo $this->Form->create('ContenidoHtml');?>
	<fieldset>
		<legend><?php echo __('Editar contenido Html'); ?></legend>
	<?php
        echo $this->Form->input('id', array('label' => array('text' => 'Id: ', 'class' => 'alinea')));
		echo $this->Form->input('Seccione', array('label' => array('text' => 'Sección: ', 'class' => 'alinea')));
        echo $this->Form->input('texto',array(
            'label' => array('text' => 'Texto: ', 'class' => 'alinea'), 
            'escape'=>true, 'rows' => '20', 'cols' => '65'));
		echo $this->Form->input('fecha',array('label' => array('text' => 'Fecha: ', 'class' => 'alinea')));
		echo $this->Form->input('borrado',array('label' => array('text' => 'Borrado: ', 'class' => 'alinea')));
	?>
<div class="centrado"><?php echo $this->Form->end(__('Guardar'));?></div>
	</fieldset>
</div>
<div class="actions centrado">
    <p>
		<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('ContenidoHtml.id')), array('class'=>'enlace'), __('¿Quieres borrar # %s?', $this->Form->value('ContenidoHtml.id'))); ?>&nbsp;|&nbsp;
		<?php echo $this->Html->link(__('Listar Contenido Html'), array('action' => 'index'), array('class'=>'enlace'));?>&nbsp;|&nbsp;
		<?php echo $this->Html->link(__('Listar Secciones'), array('controller' => 'secciones', 'action' => 'index'), array('class'=>'enlace')); ?>&nbsp;|&nbsp;
        <?php echo $this->Html->link(__('Nueva Sección'), array('controller' => 'secciones', 'action' => 'add'), array('class'=>'enlace')); ?>
    </p>
</div>
