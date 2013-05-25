<div id="migas">
<?php echo $this->Html->image('feed-icon.png', 
    array('alt' => 'Sindicaci&oacute;n', 
          'url' => array(
            'controller' => 'inicio',
            'action' => 'novedades.rss')
            ))?>
&nbsp;&nbsp;
<?php echo $this->Html->getCrumbs(' > ', 'Inicio'); ?>
</div>
