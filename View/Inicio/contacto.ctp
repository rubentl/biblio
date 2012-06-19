<?php 
$this->set('title_for_layout', 'Contacto - Biblioteca'); 
$this->Html->addCrumb('Contacto', '/inicio/contacto');
?>
<h1>Contacto</h1>
<p>Para cualquier comunicación con el administrador del sitio web, enviar un email a la siguiente dirección:</p>
<p class="centrado"><?php echo $this->Html->link($Company_Email, 'mailto:'.$Company_Email, array('class' => 'enlace', 'title' => 'Correo de contacto')); ?>
</p>
