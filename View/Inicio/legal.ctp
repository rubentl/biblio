<?php 
$this->set('title_for_layout', 'Aviso Legal - Biblioteca'); 
$this->Html->addCrumb('Legal', '/inicio/legal');
$texto = str_replace("{{Company.Nombre}}", $Company_Nombre, $contenido);
$final = str_replace("{{Company.Email}}",$this->Html->link($Company_Email, 'mailto:'.$Company_Email, array('class' => 'enlace', 'title' => 'Correo de contacto')), $texto);
echo $final;
?>
