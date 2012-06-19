<?php
$this->Js->JqueryEngine->jQueryObject = '$j';
echo $this->Html->scriptBlock('var $j = jQuery.noConflict();', array('inline' => false));
$this->Html->startScript(array('inline' => false)); ?>
$j(window).load(function(){
	$j("#log").submit(function(event) {  
		var pass = $j("input#contrasena").val();
		var passmd5 = "";
		if ( pass != "" ){ 
			passmd5 = $j.md5(pass);
			$j("input#contrasena").val(passmd5); 
		}
	});	
});
<?php $this->Html->scriptEnd(); ?>
