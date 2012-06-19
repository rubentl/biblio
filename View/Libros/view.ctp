<?php
    $this->Html->addCrumb(__('Buscar'), '/buscar'); 
    $this->Html->addCrumb(__('Libros'), '/libros/view/'.$libro['Libro']['id']); 
    $this->set('title_for_layout',__('Libros - Biblioteca'));
	$sesion = $this->Util->Sesion(); 
?>
<h1><?php  echo __('Libro');?></h1>

<div id="cristal">
<table class="mizdo">
<?php
	echo $this->Util->centrar(array('izda'=>__('Título:'),'dcha'=>h($libro['Libro']['titulo']))); 
	echo $this->Util->centrar(array('izda'=>__('Autor:'),'dcha'=>h($todos_autores))); 
	echo $this->Util->centrar(array('izda'=>__('Isbn:'),'dcha'=>h($libro['Libro']['isbn']))); 
	echo $this->Util->centrar(array('izda'=>__('Tejuelo:'),'dcha'=>h($libro['Libro']['tejuelo']))); 
	echo $this->Util->centrar(array('izda'=>__('Año:'),'dcha'=>h($libro['Libro']['anio']))); 
	echo $this->Util->centrar(array('izda'=>__('Edición:'),'dcha'=>h($libro['Libro']['edicion']))); 
	echo $this->Util->centrar(array('izda'=>__('Editorial:'),'dcha'=>h($libro['Editoriale']['nombre']))); 
	echo $this->Util->centrar(array('izda'=>__('Encuadernación:'),'dcha'=>h($libro['Libro']['encuadernacion']))); 
	echo $this->Util->centrar(array('izda'=>__('Copias:'),'dcha'=>h($libro['Libro']['copias']))); 
	echo $this->Util->centrar(array('izda'=>__('Temas:'),'dcha'=>h($todos_temas))); 
?>	
</table>
</div>

<div class="related">
	<?php if (!empty($libro['Comentario'])):?>
	<h3><?php echo __('Comentarios');?>
    <?php if ($sesion): ?>
    <input type="button" value="Añadir Comentario" onclick="location.href='<?php echo $this->Html->url('/comentarios/add/'.$libro['Libro']['id']);?>'">
    <?php endif;?>
    </h3>
	<table id="tabla">
	<tr>
      		<th><?php echo __('Socio'); ?></th>
		<th><?php echo __('Comentario'); ?></th>
		<th><?php echo __('Recomendado'); ?></th>
        	<?php if ($sesion): ?>
        	<th><?php echo __('Acción'); ?></th>
        	<?php endif;?>
	</tr>
	<?php foreach ($comentario as $comen):?>
		<tr>
        	<td class="centrado"><?php echo h($comen['User']['username']);?></td>
			<td class="centrado"><?php echo h($comen['comentario']);?></td>
			<td class="centrado"><?php echo h($comen['recomendado']);?></td>
            <?php if ($sesion['Id'] == $comen['user_id']): ?>
            <td class="centrado">
                <?php echo $this->Html->link(__('Editar'), '/comentarios/edit/'.$comen['id'].'/'.$libro['Libro']['id']); ?> - 
                <?php echo $this->Html->link(__('Borrar'), '/comentarios/delete/'.$comen['id']); ?>
            </td>
       		<?php endif;?>
		</tr>
	<?php endforeach; ?>
	</table>
<?php else: ?>
	<h3><?php echo __('No hay comentarios.');?>
     <?php if ($sesion): ?>
    <input type="button" value="Añadir Comentario" onclick="location.href='<?php echo $this->Html->url('/comentarios/add/'.$libro['Libro']['id']);?>'">
    <?php endif;?>
    </h3>
<?php endif;?>
</div>

<div class="related">
	<?php if (!empty($libro['Contenido'])):?>
	<h3><?php echo __('Contenidos');?>
     <?php if ($sesion): ?>
    <input type="button" value="Añadir Contenido" onclick="location.href='<?php echo $this->Html->url('/contenidos/add/'.$libro['Libro']['id']);?>'">
    <?php endif;?>
    </h3>
	<table id="tabla">
	<tr>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripción'); ?></th>
		<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($contenido as $conte): ?>
		<tr>
			<td class="centrado"><?php echo h($conte['nombre']);?></td>
			<td><?php echo h($conte['descripcion']);?></td>
			<td class="actions centrado">
				<?php echo $this->Html->link(__('Descargar'), "/descargas/descarga/".$conte['nombre']); ?>
                <?php if ($sesion['Id'] == $conte['user_id']): ?>
                	-  <?php echo $this->Html->link(__('Borrar'), '/contenidos/delete/'.$conte['id']); ?>
                <?php endif; ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php else: ?>
	<h3><?php echo __('No hay contenidos.');?>
	<?php if ($sesion): ?>
    <input type="button" value="Añadir Contenido" onclick="location.href='<?php echo $this->Html->url('/contenidos/add/'.$libro['Libro']['id']);?>'">
    <?php endif;?></h3>
<?php endif; ?>
</div>
