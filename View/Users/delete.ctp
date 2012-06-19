<?php 
    $this->Html->addCrumb(__('Registro'), '/users/delete'); 
    $this->set('title_for_layout',__('Registro - Biblioteca')); 
?>
<h1>Confirmar: borrar cuenta</h1>
<form action="<?php echo $this->Html->url('/users/delete');?>" method="post" name="consulta">       	  
<p><input type="radio" name="borrar" id="borrar" value="borrar" />
<label for="borrar">Anular mi cuenta y todos los datos, incluyendo mis comentarios.</label></p>
<p><input type="radio" name="borrar" id="anular" value="anular" checked="checked"/>
<label for="anular">Anular mi cuenta para que no se pueda usar.</label></p>
<input type="submit" value="Enviar" />
</form>