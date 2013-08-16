<?php echo $this->Html->docType('xhtml-trans'); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
<?php echo $this->Html->charset('utf-8'); ?>
<?php echo $this->Html->meta(array(
    'name'=>'author',
    'content'=>'Rubén Toca Lucio')); ?>
<?php echo $this->Html->meta(array(
    'name'=>'description',
    'content'=>'Aplicación web para la gestión de mi biblioteca')); ?>
<?php echo $this->Html->meta(array(
    'name'=>'Keywords',
    'content'=>'biblioteca,Rubén Toca Lucio,cakephp')); ?>
<?php echo $this->Html->meta(
    'Novedades',
    '/inicio/novedades.rss',
    array('type' => 'rss')); ?>
<?php echo $this->Html->css('estilos.min'); ?>
<?php echo $this->Html->css('debug_toolbar'); ?>
<?php echo $this->Html->css('reveal'); ?>
<?php echo $this->Html->script('jquery'); ?>
<?php echo $this->Html->script('jquery.corner.min'); ?>
<?php echo $this->Html->script('jquery.md5.min'); ?>
<?php echo $this->Html->script('jquery.dropshadow.min'); ?>
<?php echo $this->Html->script('jquery.reveal'); ?>
<?php echo $this->Html->script('transify-min'); ?>
<?php echo $this->Html->script('utils.min'); ?>
<title><?php echo $title_for_layout?></title>
</head>

<body>
<div id="contenedor">
	<div id="cabecera">
		<?php echo $this->element('login'); ?>
		<?php echo $this->element('menu'); ?>
	</div>
    <!-- <div id="mensaje" class="reveal&#45;modal"> -->
    <!--   <h1>Aviso</h1> -->
    <!--   <p> -->
    <!--     La prueba. -->
    <!--   </p> -->
    <!--   <a class="close&#45;reveal&#45;modal">&#38;#215</a> -->
    <!-- </div> -->
	<div id="contenido">
    	<?php echo $content_for_layout ?>
    </div>
	<div id="pie">
		<?php echo $this->element('contacto'); ?>
        <?php echo $this->element('validacion'); ?>
        <?php echo $this->element('migas'); ?>
	</div>
</div>
<?php echo $this->Js->writeBuffer(); ?>
</body>
</html>
