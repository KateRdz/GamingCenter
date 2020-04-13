$(buscar());
function buscar(consulta){
	$.ajax({
		url:'./indexx2.php',
		type: 'POST',
		dataType: 'html',
		data:{consulta: consulta},
	})
	.done(function (respuesta) {
		$("#llenar").html(respuesta);
	})
	.fail(function () {
		console.log('error');
	})
}

function actualizar(consulta){
	$.ajax({
		url:'./actualizarIn2.php',
		type: 'POST',
		dataType: 'html',
		data:{consulta: consulta},
	})
	.done(function (respuesta) {
		$("#datosA").html(respuesta);
	})
	.fail(function () {
		console.log('error');
	})
}


function eliminar(consulta){
	$.ajax({
		url:'./eliminarConsola.php',
		type: 'POST',
		dataType: 'html',
		data:{consulta: consulta},
	})
}

function guardar(id,p,s){
	console.log(id+p+s);
	$.ajax({
		url:'./actualizarGuardarConsola.php',
		type: 'POST',
		dataType: 'html',
		data:{id: id, p: p,s: s},
		success:function(response){
			console.log(response);
			alert("Se ha guardado exitosamente");
			buscar();
		}
	})
}

$(document).on('keyup','#busqueda', function(){
	var valor = $(this).val();
	if(valor != " "){
		buscar(valor);
	}else{
		buscar();
	}
})

$(document).on('onclick','#eliminar', function(){	
	var v = $(this).val();
	console.log("entro "+v);
	if(v != " "){
		eliminar(v);
	}else{
		eliminar();
	}
})


function preg(value) {
	var v = value;
	console.log("entro "+v);
	if(v != " "){
		eliminar(v);
		buscar();
	}else{
		eliminar();
	}
}

function act(value){
	var va = value;
	console.log("valor act"+va);
	if(va != " "){
		actualizar(va);
	}else{
		actualizar();
	}
}

function guard(idd){
	var id = idd;
	
	var p = document.getElementById("pl").value;
	var s = document.getElementById("sr").value;
	

	if(id != " "){
		if(f == null) {
			f = "null";
			console.log("entrof ");
		}
		if(g == null) {
			g = "null";
			console.log("entro g");
		}
			console.log("f "+ f +" g "+g);
		guardar(id,p,s);
		buscar();
	}else{
		guardar();
	}
}