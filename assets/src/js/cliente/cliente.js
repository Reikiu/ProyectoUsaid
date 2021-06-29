$(document).ready(function () {

	$("#dataCliente").DataTable();

$(document).on("click",".editarCliente", function () {
	var idCliente =$(this).attr("id");
	$.ajax({
		url: "cliente/jalar_datos",
		type: "POST",
		data:{idCliente:idCliente}
	})
		.done(function (data) {
			var datos = JSON.parse(data);
			$("#idCliente").val(datos[0].id);
			$("#nombres").val(datos[0].nombres);
            $("#apellidos").val(datos[0].apellidos);
            $("#direccion").val(datos[0].direccion);
            $("#telefono").val(datos[0].telefono);
            $("#email").val(datos[0].email);
        })
		.fail(function (jqXHR, textStatus, errorThrown) {
			console.log("Error al extraer la informacion");
        });
	$("#modalEdicionCliente").modal("show");

});
//modificacion del cliente
	$(document).on("click","#modificarCliente", function () {
		var info = JSON.stringify($("#frmEdicionCliente :input").serializeArray());
        $.ajax({
            url: "cliente/update_cliente",
            type: "POST",
            data:{info:info}
        })
            .done(function (data){
                var datos = JSON.parse(data);
                if (datos.estatus){
                	alert(datos.mensaje);
                	location.reload();
				}


            })
            .fail(function (jqXHR, textStatus, errorThrown) {
                console.log("Error al extraer la informacion");
            });
    })
});
// $(document).on("click",".editarActividad", function () {
//     var Id_Actividad =$(this).attr("Id_Actividad");
//     $.ajax({
//         url: "Actividades/jalar_datos",
//         type: "POST",
//         data:{Id_Actividad:Id_Actividad}
//     })
//         .done(function (data) {
//             var datos = JSON.parse(data);
//             $("#Id_Actividad").val(datos[0].Id_Actividad);
//             $("#Tipo_Documento").val(datos[0].Tipo_Documento);
//             $("#Municipio").val(datos[0].Municipio);
//             $("#Fecha_Inicio").val(datos[0].Fecha_Inicio);
//             $("#Fecha_Fin").val(datos[0].Fecha_Fin);
//             $("#Nombre_Actividad").val(datos[0].Nombre_Actividad);
//             $("#verificacion").val(datos[0].verificacion);
//             $("#impacto").val(datos[0].impacto);
//             $("#resultado").val(datos[0].resultado);
//         })
//         .fail(function (jqXHR, textStatus, errorThrown) {
//             console.log("Error al extraer la informacion");
//         });
//     $("#modalEdicionActividad").modal("show");
// });
// //modificacion del cliente
// $(document).on("click","#modificarActividad", function () {
//     var info = JSON.stringify($("#frmEdicionActividad :input").serializeArray());
//     $.ajax({
//         url: "Actividades/update_Actividad",
//         type: "POST",
//         data:{info:info}
//     })
//         .done(function (data){
//             var datos = JSON.parse(data);
//             if (datos.estatus){
//                 alert(datos.mensaje);
//                 location.reload();
//             }
//
//
//         })
//         .fail(function (jqXHR, textStatus, errorThrown) {
//             console.log("Error al extraer la informacion");
//         });
// })

