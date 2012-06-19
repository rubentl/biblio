<?php 
$this->Html->addCrumb(__('Administración'), 'admin/administracion'); 
$this->Html->addCrumb(__('Consola'), 'admin/administracion/consola'); 
$this->set('title_for_layout',__('Administración - Biblioteca')); 
?>

<?php if (!isset($resultados)): ?>
<h1>Administración</h1>
<div id="centrado">
    <p>
    <form action="<?php echo $this->Html->url('/admin/administracion/consola')?>" method="post" name="consola" >
        <?php echo $this->Session->flash('error')?>
        <label for="sql">Sentencia sql: </label><br />
        <textarea id="sql" title="Introduce la sentencia sql" name="query" rows="10"></textarea>
        <p class=centrado>
        <input type="submit" value="Ejecutar" title="Probamos suerte"/>
        </p>
    </form>
    </p>
</div>
<?php else: ?>
<h1>Resultado</h1>
<div id="query">
<?php foreach ($resultados as $resultado){
      echo h(pr($resultado)); 
}?>
</div>
<?php endif ?>
