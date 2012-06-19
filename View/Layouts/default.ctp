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
<?php echo $this->Html->css('estilos.min'); ?>
<?php echo $this->Html->script('jquery'); ?>
<?php echo $this->Html->script('jquery.corner.min'); ?>
<?php echo $this->Html->script('jquery.md5.min'); ?>
<?php echo $this->Html->script('jquery.dropshadow.min'); ?>
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
