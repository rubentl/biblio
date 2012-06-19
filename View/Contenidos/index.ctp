<?php
$this->set('title_for_layout', 'Contenidos - Biblioteca'); 
$this->Html->addCrumb('Contenidos', '/contenidos/index');
?>
<h1><?php echo __('Contenidos');?></h1>
<h2 class="centrado">
		<?php echo $this->Session->flash(); ?>
</h2>
