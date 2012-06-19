<div id="menu">
    <ul>
        <li><?php echo $this->Html->link('Inicio', '/inicio', array('title'=>'inicio')); ?></li>
        <li><?php echo $this->Html->link('Búsqueda', '/buscar', array('title'=>'buscar un libro')); ?></li>
        <li><?php echo $this->Html->link('Novedades', '/inicio/novedades', array('title'=>'novedades')); ?></li>
        <li><?php echo $this->Html->link('Nosotros', '/inicio/quienes', array('title'=>'quienes somos')); ?></li>
        <li><?php echo $this->Html->link('Enlaces', '/inicio/enlaces', array('title'=>'nuestros enlaces')); ?></li>
        <li><?php echo $this->Html->link('Registrarse', '/users/add', array('title'=>'para registrarse')); ?></li>
        <li><?php echo $this->Html->link('Mapa web', '/inicio/mapa', array('title'=>'mapa web')); ?></li>
    </ul>
</div>
