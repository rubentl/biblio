<?php
$this->set('title_for_layout', 'Buscar - Biblioteca'); 
$this->Html->addCrumb('Buscar', '/buscar');
?>
<h1>Búsqueda avanzada</h1>
<div id="listado">
<?php echo $this->Session->flash('avanzada'); ?>
<form action="<?php echo $this->Html->url('/libros/avanzada');?>" method="post" name="avanzada">
  <p>*Cuantos más campos rellenes más precisa será la búsqueda.</p>
  <p><label for="titulo" class="alinea">Título:</label><input type="text" name="titulo" id="titulo" size="45" title="Introduce el Título del libro que quieres buscar" /> </p>  
  <p><label for="autor" class="alinea">Autor:</label><input type="text" name="autor" id="autor" size="45" title="Introduce el Autor del libro que quieres buscar" /></p>               	
  <p><label for="editorial" class="alinea">Editorial:</label><input type="text" name="editorial" id="editorial" size="45" title="Introduce la editorial del libro que quieres buscar" /></p>               	
  <p><label for="tema" class="alinea">Tema:</label>
  <!--<input type="text" name="tema" id="tema" size="45" title="Introduce el tema del libro que quieres buscar" />-->
  <select name="tema" id="tema" >
            <option value=""></option>
  		<?php foreach($temas as $tema):?>
        	<option value="<?php echo $tema ?>"><?php echo $tema ?></option>
  		<?php endforeach; ?>
  </select>
  </p>               	
  <p><label for="isbn" class="alinea">Isbn:</label>
     <input type="text" name="isbn" id="isbn" size="20" title="Introduce el Isbn del libro que quieres buscar" />
  </p>
  <p>
     <input type="submit" value="Buscar" name="buscar" title="Empieza la búsqueda" id="submit"/> 
  </p>           	
 </form>
</div>
