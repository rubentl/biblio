<?php
$this->set('title_for_layout', 'Comentarios - Biblioteca'); 
$this->Html->addCrumb('Comentarios', '/comentarios');
?>
<h1><?php echo __('Comentarios');?></h1>
<h2 class="centrado">
		<?php echo $this->Session->flash(); ?>
</h2>
