$(buscar());
function buscar(consulta){
	$.ajax({
		url:'./indexx3.php',
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
		url:'./actualizarIn3.php',
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
		url:'./eliminarJugador.php',
		type: 'POST',
		dataType: 'html',
		data:{consulta: consulta},
	})
}

function guardar(id,n,a,f,g,t,c,m){
	console.log(id+n+a+f+g+t+c);
	$.ajax({
		url:'./actualizarGuardar.php',
		type: 'POST',
		dataType: 'html',
		data:{id: id, n: n,a: a,f: f,g: g,t: t,c: c,m:m},
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
	var n = document.getElementById("nom").value;
	var a = document.getElementById("ap").value;
	var f = document.getElementById("fn").value;
	var g = document.getElementById("gen").value;
	var t = document.getElementById("tel").value;
	var c = document.getElementById("cr").value;
	var m = document.getElementById("mn").value;

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
		guardar(id,n,a,f,g,t,c,m);
		buscar();
	}else{
		guardar();
	}
}