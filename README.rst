Biblioteca
==========

:Autor:    Rubén Toca Lucio
:Versión:  1.0
:Lenguaje: php

Es una aplicación web hecha en **php** con el framework **cakephp** en la versión *2.1.3*.

Es la gestión de mi biblioteca.

+ Búsqueda de libros por autor, título y isbn.
+ Búsqueda avanzada combinando estos criterios y el tema.
+ Sistema de comentarios y aportación de contenidos por libro.
+ Clasificación de los usuarios en administradores, socios e invitados.
+ Gestión de préstamos.
+ Automática inserción de nuevo títulos usando el isbn.

La estructura de la base de datos está en Config/Schema/biblioteca.sql.


TODO
====

    + [o] [#A] Validación **XHTML** y **CSS**.
    + [ ] [#B] Autocompletar los campos autores, temas y editoriales con ajax.
    + [X] [#A] Añadir un editor de campo como Tinymce para editar los contenidosHtml.
    + [ ] [#C] Añadir un feed de noticias y novedades.
    + [X] [#B] Poner un CAPTCHA en el registro y/o supervisarlo.
    + [ ] [#C] Cambiar las páginas de error que vienen por defecto.  
