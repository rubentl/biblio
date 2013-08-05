<?php 
    $this->Html->addCrumb(__('Registro'), '/users/add'); 
    $this->set('title_for_layout',__('Registro - Biblioteca')); 
?>

<h1>Registro</h1>	

<?php
    echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php echo __('Nuevo Usuario'); ?></legend>
         <p class="ayuda">Los campos con un * son obligatorios.</p>
         <?php if ($this->Session->check('Message.flash')):?>
            <h3 class="centrado error-message">
               <?php echo $this->Session->flash();?>
           </h3>
         <?php endif;?>
        <div class="mizdo">
	<?php
		echo $this->Form->input('username', array('label' => array('text' => '*Nombre: ', 'class' => 'alinea'), 'size'=>'30'));
		echo $this->Form->input('apellidos', array('label' => array('text' => 'Apellidos: ', 'class' => 'alinea'), 'size'=>'40'));
		echo $this->Form->input('domicilio', array('label' => array('text' => 'Domicilio: ', 'class' => 'alinea'), 'size'=>'40'));
		echo $this->Form->input('telefono', array('label' => array('text' => 'Teléfono: ', 'class' => 'alinea'), 'size'=>'15'));
        echo $this->Form->input('email', array('label' => array('text' => '*Email: ', 'class' => 'alinea'), 'size'=>'20', 'div'=>false)); 
	?>
    <span class="ayuda">Si quieres noticias.</span>
	<?php	
		echo $this->Form->input('dni', array('label' => array('text' => '*Dni: ', 'class' => 'alinea'), 'size'=>'10'));
		echo $this->Form->input('noticias', array('label' => array('text' => 'Noticias: ', 'class' => 'alinea'), 'size'=>'4','div'=>false));
	?>
    <span class="ayuda">(si / no)</span>
    <?php 
		echo $this->Form->input('password', array('label' => array('text' => '*Contraseña: ', 'class' => 'alinea'), 'size'=>'20','value'=>''));
		echo $this->Form->input('rep_password', array('label' => array('text' => '*Repite Contraseña: '), 'type' => 'password', 'size'=>'20','value'=>''));
    ?>
    <?php
    echo $this->Form->input('captcha', array('label' => array('text' => $captcha_text), 'size'=>4, 'value'=>''));
		echo $this->Form->hidden('tipo_id', array('value'=> 2)); // usuario
	?>
    </div>
    </fieldset>  
    <?php echo $this->Form->end(array('label'=>__('Guardar'),'div'=>array('class'=>'centrado')));?>

