<?php 
$this->set('title_for_layout', 'Novedades - Biblioteca'); 
$this->Html->addCrumb('Novedades', '/inicio/novedades');
if (!isset($ultimos)){
    $texto = str_replace("{{Company.Nombre}}", $Company_Nombre, $contenido);
    $final = str_replace("{{Company.Email}}", 
        $this->Html->link($Company_Email, 
            'mailto:'.$Company_Email, 
            array('class' => 'enlace', 'title' => 'Correo de contacto')), 
        $texto);
    echo $final;
    echo $fecha;
}else{
?>
<div class="centrado">
<h1>Novedades</h1>
<h4>Estos son los últimos cinco libros</h4>
<?php foreach($ultimos as $ult){
    echo $this->Html->link($ult['Libro']['titulo'],
            array('controller'=>'libros','action'=>'view',$ult['Libro']['id']),
            array('class'=>'enlace')).'<br />';
}}?>
</div>
