<?php 
$this->set('title_for_layout', 'Mapa web - Biblioteca'); 
$this->Html->addCrumb('Mapa web', '/inicio/mapa');
?>
<h1>Mapa del sitio web</h1>
<div id="izda">
<h2>Búsquedas</h2>
<ul>
    <li><?php echo $this->Html->link('Búsqueda sencilla', '/inicio', array('class' => 'enlace','title'=>'Búsqueda sencilla')); ?></li>
    <li><?php echo $this->Html->link('Búsqueda avanzada', '/buscar', array('class' => 'enlace','title'=>'Búsqueda avanzada')); ?></li>
    <li><?php echo $this->Html->link('Búsqueda por temas', '/temas', array('class' => 'enlace','title'=>'Búsqueda por temas')); ?></li>
</ul>
<h2>Registro</h2>
<ul>
    <li><?php echo $this->Html->link('Registrarse', '/registro/nuevo', array('class' => 'enlace','title'=>'Registrarse')); ?></li>
    <li><?php echo $this->Html->link('Acceder como un usuario', '/registro/nuevo', array('class' => 'enlace','title'=>'Login')); ?></li>
</ul>
</div>
<div id="dcha">
<h2>Varios</h2>
<ul>
		<li><?php echo $this->Html->link('Novedades', '/inicio/novedades', array('class' => 'enlace','title'=>'Novedades')); ?></li>
		<li><?php echo $this->Html->link('Quienes somos', '/inicio/quienes', array('class' => 'enlace','title'=>'Quienes somos')); ?></li>
		<li><?php echo $this->Html->link('Enlaces', '/inicio/enlaces', array('class' => 'enlace','title'=>'Enlaces')); ?></li>
		<li><?php echo $this->Html->link('Mapa web', '/inicio/mapa', array('class' => 'enlace','title'=>'Mapa web')); ?></li>
		<li><?php echo $this->Html->link('Contacto', '/inicio/contacto', array('class' => 'enlace','title'=>'Contacto')); ?></li>
</ul>
</div>
