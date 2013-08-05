<?php

$this->set('channelData', array(
    'title' => __("&Uacute;ltimos libros"),
    'link' => $this->Html->url('/novedades', true),
    'description' => __("&Uacute;ltimos libros."),
    'language' => 'es-es'
));

App::uses('Sanitize', 'Utility');
if (!empty($ultimos)){
    foreach ($ultimos as $ult) {

        $this->Html->link($ult['Libro']['titulo'],
                array('controller'=>'libros','action'=>'view',$ult['Libro']['id']));

        $libroLink = array(
            'controller' => 'libros',
            'action' => 'view',
            $ult['Libro']['id']);

        // Preparo el T&iacute;tulo para que cumpla con la validaci&oacute;n feed 
        $titulo = preg_replace('=\(.*?\)=is', '', $ult['Libro']['titulo']);
        $titulo = $this->Text->stripLinks($titulo);
        $titulo = Sanitize::stripAll($titulo);


        echo  $this->Rss->item(array(), array(
            'title' => $titulo,
            'link' => $libroLink,
            'description' => $titulo,
            'guid' => array('url' => $libroLink, 'isPermaLink' => 'true'),
        ));
    }
    }
