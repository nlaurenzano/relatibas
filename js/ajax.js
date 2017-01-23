function SendContactEmail()
{

	var name = $("#name").val();
	var email = $("#email").val();
	var message = $("#message").val();


	var ajaxFunction=$.ajax({
		url:"./php/nexo.php",
		type:"post",
		data:{
			doWhat:'SendContactEmail',
			name:name,
			email:email,
			message:message
		}
	});
	ajaxFunction.done(function(response) {
		$("#contactResponse").html(response);
	});
	ajaxFunction.fail(function(response) {
		$("#contactResponse").html(response.responseText);
	});
	ajaxFunction.always(function(response) {
		//alert("siempre "+response.statusText);

	});
}


/*function Show(showWhat)
{
	$("#principal").html('<img style="padding-top:10%;" src="imagenes/preloader.gif">');

	var ajaxFunction=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{doWhat:showWhat}
	});
	ajaxFunction.done(function(retorno){
		$("#principal").html(retorno);
	});
	ajaxFunction.fail(function(retorno){
		$("#principal").html(retorno.responseText);	
	});
	ajaxFunction.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}

function MostrarLogin() {
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{doWhat:"MostrarLogin"}
	});
	funcionAjax.done(function(retorno) {
		$("#formLogin").html(retorno);
	});
	funcionAjax.fail(function(retorno) {
		$("#mensajesLogin").html("Error en login.");
	});
	funcionAjax.always(function(retorno) {
		//alert("siempre "+retorno.statusText);
	});
}

function MostrarJSON(tablas) {
	//return tablas;
	tablas = JSON.parse(tablas);
	var retorno;

switch (tablas.status) {
	case 'success':
		retorno = '<div style="padding:10px;">';
		retorno += '<div style="float:left;">';

		// TODO: Cambiar títulos de la tabla
		retorno += "<table><tr><th>Nombre</th><th>Precio</th><th>Tipo</th><th>Acciones</th></tr>";

		for (var i = 0; i <= tablas.data.length - 1; i++) {
			retorno +=  "<tr><td>" + tablas.data[i].campo1 + "</td>";
			retorno +=  "<td>" + tablas.data[i].campo2 + "</td>";
			retorno +=  "<td>" + tablas.data[i].campo3 + "</td>";
			retorno +=  '<td><button class="btn btn-danger" style="margin-right:5px;"" name="Borrar" onclick="Borrar(\''+tablas.data[i].id+'\')">Borrar</button>';
			retorno +=  '<button class="btn btn-warning" name="Modificar" onclick="Modificar(\''+tablas.data[i].id+'\')">Modificar</button></td>';
			retorno +=  '</tr>';
		}
		retorno += '</table></div>';
		break;
	case 'fail':
		retorno = '<h2>' + tablas.data + ':</h2><pre>' + tablas.message + '</pre>';
		break;

	case 'error':
		retorno = '<h2>ERROR EN EL CLIENTE:</h2><pre>' + tablas.message + '</pre>';
		break;
	default:
		retorno = '';
	}

	return retorno;
}*/