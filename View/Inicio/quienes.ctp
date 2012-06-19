<?php 
$this->set('title_for_layout', 'Quienes somos - Biblioteca'); 
$this->Html->addCrumb('Quienes somos', '/inicio/quienes');
$texto = str_replace("{{Company.Nombre}}", $Company_Nombre, $contenido);
$final = str_replace("{{Company.Email}}",$this->Html->link($Company_Email, 'mailto:'.$Company_Email, array('class' => 'enlace','title'=>'Correo de contacto')), $texto);
echo $final;
?>