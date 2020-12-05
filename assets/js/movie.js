//variable que almacena categorias seleccionadas desde el navegador
var arrCategories = []

if(typeof jsonCategory !== 'undefined') {	
	arrCategories = jsonCategory.slice()
	showCategories()
}

$("#addElement").click(function (e) {
	//deshabilitar submit del form
	e.preventDefault()
	
	let idCategory   = $("#category").val()
	let nameCategory = $("#category option:selected").text()

	if(idCategory != '') {
		if(typeof existCategory(idCategory) === 'undefined') {		
			//Llenar el array
			arrCategories.push({
				'id': idCategory,
				'name': nameCategory
			})	
		} else {
			alert("La Categoria ya se ha Seleccionado")
		}
		//mostrar información en el html
		showCategories()
	} else {
		alert("Debe Seleccionar una Categoria")
	}

})

function existCategory(idCategory) {
	let existCategory = arrCategories.find(function (category) {
		return category.id == idCategory
	})
	return existCategory
}

function showCategories() {
	$("#list-categories").empty()

	arrCategories.forEach(function (category) {
		$("#list-categories").append('<div class="form-group"><button onclick="removeElement('+category.id+')" class="btn btn-danger">X</button> <span>'+category.name+'</span></div>')
	})	
}

function removeElement(idCategory) {
	let index = arrCategories.indexOf(existCategory(idCategory))
	arrCategories.splice(index, 1)
	showCategories()
}

$("#submit").click(function (e) {
	e.preventDefault();

	if ($("#option").val() == "edit") {
		var mensaje = "¡Actualización Satisfactoria!";
		var url = "?controller=movie&method=update";	
		var params = {
			countCategories	: $("#countCategories").val(),
			id				: $("#id").val(),
			name 			: $("#name").val(),
			description		: $("#description").val(),
			user_id			: $("#user_id").val(),
			categories 		: arrCategories,
			previousCategories : jsonCategory
		}	
	}
	else{
		var mensaje = "¡Insercion Satisfactoria!";
		var url = "?controller=movie&method=save";
		var params = {
			countCategories	: $("#countCategories").val(),
			id				: $("#id").val(),
			name 			: $("#name").val(),
			description		: $("#description").val(),
			user_id			: $("#user_id").val(),
			categories 		: arrCategories,
		}
	}	
	

	//metodo postr de ajax para enviar el formulario
	$.post(url, params, function (response) {
		if(typeof response.error !== 'undefined') {
			alert(response.error)
		} else {
			alert(mensaje)
			location.href = "?controller=movie"
		}
	}, 'json').fail(function (error) {
		alert('Inserción Fallida')
	});

});

