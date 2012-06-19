<?php 
$this->Html->addCrumb(__('Administración'), 'admin/administracion'); 
$this->set('title_for_layout',__('Administración - Biblioteca')); 
?>
<h1>Administración</h1>
<div id="cristal">
<div id="centrado">
    <p  class="centrado">
    <input type="button" value="Administrar Usuarios" onclick="location.href='<?php echo $this->Html->url('/admin/users/index'); ?>'">
    </p>
    <p  class="centrado">
    <input type="button" value="Administrar Libros" onclick="location.href='<?php echo $this->Html->url('/admin/libros/index'); ?>'">
    </p>
    <p  class="centrado">
    <input type="button" value="Enviar Correos" onclick="location.href='<?php echo $this->Html->url('/admin/email/add'); ?>'">
    </p> 
    <p  class="centrado">
    <input type="button" value="Crear una contraseña" onclick="location.href='<?php echo $this->Html->url('/admin/inicio/pass'); ?>'" />  
    </p>               
    <p  class="centrado">
    <input type="button" value="Administrar Préstamos" onclick="location.href='<?php echo $this->Html->url('/admin/prestamos/index'); ?>'" />  
    </p>               
    <p  class="centrado">
    <input type="button" value="Consola Sql" onclick="location.href='<?php echo $this->Html->url('/admin/administracion/consola'); ?>'" />  
    </p> 
<?php if ($this->Session->read('User') === 'Rubén'):?>              
    <p  class="centrado">
    <input type="button" value="Administrar contenido Html" onclick="location.href='<?php echo $this->Html->url('/admin/contenidoHtmls/index'); ?>'" />  
    </p>               
<?php endif;?>
</div>
</div>
