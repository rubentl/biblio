// JavaScript Document
// Mis funciones
function sombras(){
    $("#contenedor").corner();
    $("#contenido").corner();
    $("#cristal").corner();
    $("#registro").corner();
    $("#contenido").dropShadow({left:6, top:8});
    $("#registro, #query").dropShadow({left:6, top:6});
    $("#contenedor").dropShadow({left:8, top:6});
    $('input[type!="file"]').dropShadow({left:2, top:2});
    $("h1").dropShadow({top:-19, left:2});
    $("#contenedor_dropShadow>.dropShadow").corner();
    $("#contenido_dropShadow>.dropShadow").corner();
    $("#registro_dropShadow>.dropShadow").corner();
    $("fieldset").corner();
    $('textarea').dropShadow({left:4, top:6});

};

$(window).load(function(){
    var max = 0;
    $(".alinea").each(function(){
        if ($(this).width() > max)
            max = $(this).width();    
    });
    $(".alinea").width(max+5);
    
    $('#reg input[type="text"]').focus(function(){
        if ($(this).hasClass("limpio") == false){
            $(this).val("");
            $(this).addClass("limpio");
        };
    });

    $('#cristal').transify({opacityOrig:.5});
    $('.transify').corner();
    sombras();

    $('a#pag').click(function(){
        $("#contenido").redrawShadow();
        $('#contenedor').redrawShadow();
        $('#registro, #query').redrawShadow();
        $("#contenedor_dropShadow>.dropShadow").corner();
        $("#contenido_dropShadow>.dropShadow").corner();
        $("#registro_dropShadow>.dropShadow").corner();
    });

	$("#log").submit(function(event) {  
		var pass = $("input#contrasena").val();
		var passmd5 = "";
		if ( pass != "" ){ 
			passmd5 = $.md5(pass);
			$("input#contrasena").val(passmd5); 
		}
	});

	$("#UserAddForm").submit(function(event) {  
		var pass = $("input#UserPassword").val();
		var repass = $("input#UserRepPassword").val();
		var passmd5 = "";
		var repassmd5 = "";
		if ( pass != "" ){ 
			passmd5 = $.md5(pass);
			$("input#UserPassword").val(passmd5); 
		}
		if ( repass != ""){
			repassmd5 = $.md5(repass);
			$("input#UserRepPassword").val(repassmd5);			
		}
	});	
});
