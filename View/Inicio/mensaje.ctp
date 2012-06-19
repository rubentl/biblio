<?php 
    $this->Html->addCrumb(__('Aviso'), '/inicio/mensaje'); 
    $this->set('title_for_layout',__('Aviso - Biblioteca')); 
?>

<h1><?php echo __('Aviso');?></h1>
<h2 class='centrado'><?php echo $this->Session->flash();?></h2>
