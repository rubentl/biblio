<?php 
$this->Html->addCrumb(__('Administración'), '/admin/administracion');
$this->Html->addCrumb(__('Email'), '/admin/email/add');
$this->set('title_for_layout',__('Administración - Biblioteca')); 
?>
<h1> <?php echo __('Emails')?> </h1>
<fieldset>
<legend>Envío de noticias</legend>
<?php echo $this->Session->flash('validar'); ?>
<Form action="<?php echo $this->Html->url('/admin/email/add')?>" method="post" name="email" class="mizdo">
	<label for="asunto">Asunto: </label><br />
	<input type="text" name="asunto" id="asunto" title="asunto del mensaje" size="55" /><br />
	<label for="cuerpo">Mensaje: </label><br />
	<textarea name="cuerpo" id="cuerpo" cols="55" rows="10" title="Mensaje del correo"></textarea>
    <p><input type="submit" value="Enviar" />
    <input type="reset" value="Borrar" /></p>
</form>
</fieldset>	 
