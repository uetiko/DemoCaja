/**
 * @author Angel Barrientos
 */

function initEvents() {
	makeEvents();
	uploadFile();
}

function makeEvents(){
		$( "#tabs" ).tabs();
}

function uploadFile(){
	$('#status').hide();
	new AjaxUpload($('#updateFile'), {
		action : '../../../src/com.calaveraStudio.demo.cgi/cgi.php',
		name : 'file',
		onSubmit : function(file, ext) {			
			if((true != (/(jpg)$/.test(ext)))){
				alert('No es una imagen en formato jpg, lo sorry');
				return false;
			}else{
				$("div#status").show();
				$("div#status").html('Procesando archivo. <img src="../../img/gif/loading.gif" />');
			}
		}
	});
}

function publica() {
	$('#publica').click(function() {
		var obj = {
				
		}
		$.ajax({
			url : '../../../src/com.calaveraStudio.demo.cgi/cgi.php',
			dataType : 'json',
			type : 'POST',
			data : {
				publicar : true,
				action : 'publicar',
			},
			success : function(response, textStatus, jqXHR) {

			},
			error : function(response, textStatus, jqXHR) {
				alert(textStatus);
			}
		});
	});
}

function getPublicacionesActivas() {
	$.ajax({
		url : '../../../src/com.calaveraStudio.demo.cgi/cgi.php',
		dataType : 'json',
		type : 'POST',
		data : {
			publicar : true,
			action : 'activas',
		},
		success : function(response, textStatus, jqXHR) {

		},
		error : function(response, textStatus, jqXHR) {
			alert(textStatus);
		}
	});
}

function getNoActivas() {
	$.ajax({
		url : '../../../src/com.calaveraStudio.demo.cgi/cgi.php',
		type : 'POST',
		dataType : 'json',
		data : {
			publicar : true,
			action : 'noActivas',
		},
		success : function(response, textStatus, jqXHR) {

		},
		error : function(response, textStatus, jqXHR) {
			alert(textStatus);
		}
	});
}