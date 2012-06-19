<?php 
$this->set('title_for_layout', 'Biblioteca'); 
?>
    <h1>Búsqueda</h1>
    <div class="centrado">
    <?php echo $this->Session->flash('inicio') ?>
	<form action=<?php echo '"'.$this->Html->url('/libros/simple').'"' ?> method="post" name="simple">
	  <input type="text" id="buscar" name="query" size="35" class="query" title="Introduce la palabra que quieres buscar. Autor, T&iacute;tulo o n&uacute;mero Isbn" />
	  <input type="submit" value="Buscar" name="buscar" title="enviamos la b&uacute;squeda"/>
    </form>
	  <p class="ayuda">*Autor, Título o <acronym title="International Standard Book Number">Isbn</acronym></p> 
    </div>
