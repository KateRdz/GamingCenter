$(document).on('keyup','#precio1', function(){

	var precio1 = 0;
	var precio2 = 0;
	var horas =0;

	horas= document.getElementById("hora").value;
	precio1= document.getElementById("precio1").value;
	precio2 = document.getElementById("precio2").value;

	var total = parseInt(precio1)*horas + parseInt(precio2);
	document.getElementById("total").value = total;
	console.log("1 "+total);

})

$(document).on('keyup','#precio2', function(){
	
	var precio1 = 0;
	var precio2 = 0;
	var horas =0;

	horas= document.getElementById("hora").value;
	precio1= document.getElementById("precio1").value;
	precio2 = document.getElementById("precio2").value;

	var total = parseInt(precio1)*horas + parseInt(precio2);
	document.getElementById("total").value = total;
	console.log("2 "+total);
})

$(document).on('keyup','#hora', function(){

	var precio1 = 0;
	var precio2 = 0;
	var horas =0;

	horas= document.getElementById("hora").value;
	precio1= document.getElementById("precio1").value;
	precio2 = document.getElementById("precio2").value;

	var total = parseInt(precio1)*horas + parseInt(precio2);
	document.getElementById("total").value = total;
	console.log("3 h "+total);

})