<?php 
    $this->Html->addCrumb('Administración', '/admin/administracion/'); 
    $this->Html->addCrumb('Préstamos', '/admin/prestamos/'); 
    $this->set('title_for_layout','Tipos - Biblioteca'); 
?>
<h1><?php  echo __('Préstamos');?></h1>
<div id="cristal">
<table>
<?php
    echo $this->Util->centrar(array('izda'=>__('Id:'),'dcha'=>h($prestamo['Prestamo']['id'])));
    echo $this->Util->centrar(array('izda'=>__('Usuario:'),'dcha'=>h($prestamo['User']['username'])));
    echo $this->Util->centrar(array('izda'=>__('Libro:'),'dcha'=>h($prestamo['Libro']['titulo'])));
    echo $this->Util->centrar(array('izda'=>__('Fecha préstamo:'),'dcha'=>h($prestamo['Prestamo']['fecha_prestamo'])));
    echo $this->Util->centrar(array('izda'=>__('Fecha devolución:'),'dcha'=>h($prestamo['Prestamo']['fecha_devolucion'])));
    echo $this->Util->centrar(array('izda'=>__('Borrado:'),'dcha'=>h($prestamo['Prestamo']['borrado'])));
?>
</table>
</div>
<div class="actions centrado">
<p>
    <?php echo $this->Html->link(__('Editar Préstamo'), array('action' => 'edit', $prestamo['Prestamo']['id']),array('class'=>'enlace')); ?>  &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Listar Préstamos'), array('action' => 'index'),array('class'=>'enlace')); ?>  &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Nuevo Préstamo'), array('action' => 'add'),array('class'=>'enlace')); ?>  &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Listar Usuarios'), array('controller' => 'users', 'action' => 'index'),array('class'=>'enlace')); ?>  &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add'),array('class'=>'enlace')); ?>  &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Listar Libros'), array('controller' => 'libros', 'action' => 'index'),array('class'=>'enlace')); ?>  &nbsp;|&nbsp;
    <?php echo $this->Html->link(__('Nuevo Libro'), array('controller' => 'libros', 'action' => 'add'),array('class'=>'enlace')); ?> 
</p>
</div>
