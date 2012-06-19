<h1>Contraseña</h1>
<fieldset>
    <legend>Dame una contraseña</legend>
<div id="centrado">
    <p>
    <form action="<?php echo $this->Html->url('/admin/inicio/pass');?>" method="post" name="login">
        <input type="password" class="text password" value="" name="contrasena" size='40' />
        <input type="submit" class="submit" value="Crear" name="Crear" />
    </form>
    </p>
<div>

<p>
<?php 
if (isset($pass) && !empty($pass)){ 
    echo $pass['contrasena'] . ' => <strong>' . md5($pass['contrasena']) .  '</strong>'; 
}
?>
</p>
</fieldset>
