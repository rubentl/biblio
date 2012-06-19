<?php $sesion = $this->Util->sesion();?>
<div id="registro">
<?php if ($sesion) : ?>
	Bienvenido <strong><?php echo $sesion['User'] ?></strong>.
    <?php if ($sesion['Tipo'] === 'admin') : ?>
		<a href="<?php echo $this->Html->url('/admin/administracion/') ?>" title="Ir a la zona de administración" class="enlace mizdo">Administración</a>
    <?php endif; ?>	
    <br />
    <a href="<?php echo $this->Html->url('/users/edit/'.$sesion['Id']) ?>" title="modificar la cuenta">Modificar cuenta</a>&nbsp;|&nbsp;
    <a href="<?php echo $this->Html->url('/users/delete') ?>" title="borrar la cuenta">Borrar cuenta</a>&nbsp;|&nbsp;
    <a href="<?php echo $this->Html->url('/users/logout') ?>" title="cerrar sesión">Cerrar sesión</a>

<?php else: ?>
    <form action="<?php echo $this->Html->url('/users/login') ?>" method="post" name="registro" id="log">
    <label for="usuario" class="alinea">Usuario:</label>
    <input type="text" name="usuario" size="15" title="Introduce usuario" id="usuario" class="field" tabindex="1" />
    <input type="submit" value="Entrar" id="entrar" tabindex="3" />  <br />
    <label for="contrasena" class="alinea">Contraseña:</label>
    <input type="password" name="contrasena" size="15" title="Introduce contraseña" id="contrasena" class="field" tabindex="2" /><br />   
    <?php echo $this->Session->flash('login') ?>
    </form>
<?php endif; ?>
<?php echo $this->Session->flash('admin')?>
</div>
