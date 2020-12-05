/*function validar(){

var NOMBREOBRA,REPRESENTANTE,DIRECCIONOBRA,expresion;

 //IDOBRA         = document.getElementById("IDOBRA").value;
 NOMBREOBRA     = document.getElementById("NOMBREOBRA").value;
 REPRESENTANTE  = document.getElementById("REPRESENTANTE").value;
 DIRECCIONOBRA  = document.getElementById("DIRECCIONOBRA").value;


    if (NOMBREOBRA === "" || REPRESENTANTE === "" || DIRECCIONOBRA === "" ){
    	alert("Todos los campos son Obligatorios ");
    	return false;
    }
    else if(NOMBREOBRA.length>30){
    	alert("El nombre de la obra es muy largo ");
    	return false;
    }

}

*/
$("#submit").click(function (e) {
	e.preventDefault();

	let url = "?controller=obra&method=save";
	let params = {
		NOMBREOBRA 	   :  $("#NOMBREOBRA").val(),
		REPRESENTANTE	: $("#REPRESENTANTE").val(),
		DIRECCIONOBRA	: $("#DIRECCIONOBRA").val(),
		
	}

	//metodo postr de ajax para enviar el formulario
	$.post(url, params, function (response) {
		if(NOMBREOBRA === "") {
			alert(response.error)
		} else {
			alert("Inserción Satisfactoria")
			location.href = "?controller=obra"
		}
	}, 'json').fail(function (error) {
		alert('Inserción Fallida')
		location.href = ""

	});

});


