/**
 * @author Angel Barrientos
 */

function initEvents() {

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