$(document).ready(function () {

    $("#dataCliente").DataTable();

    $(document).on("click",".editarActividad", function () {
        var idActividad =$(this).attr("id");
        $.ajax({
            url: "Actividades/jalar_datos",
            type: "POST",
            data:{idActividad:idActividad}
        })
            .done(function (data) {
                var datos = JSON.parse(data);
                $("#idActividad").val(datos[0].Id_Actividad);
                $("#Nombre_Actividad").val(datos[0].Nombre_Actividad);
                $("#Tipo_Documento").val(datos[0].Tipo_Documento);
                $("#Municipio").val(datos[0].Municipio);
                $("#Fecha_Inicio").val(datos[0].Fecha_Inicio);
                $("#Fecha_Fin").val(datos[0].Fecha_Fin);
                $("#verificacion").val(datos[0].verificacion);
                $("#impacto").val(datos[0].impacto);
                $("#resultado").val(datos[0].resultado);
            })
            .fail(function (jqXHR, textStatus, errorThrown) {
                console.log("Error al extraer la informacion");
            });
        $("#modalEdicionActividad").modal("show");
    });
//modificacion del cliente
    $(document).on("click","#modificarActiviad", function () {
        var info = JSON.stringify($("#frmEdicionActividad :input").serializeArray());
        $.ajax({
            url: "Actividades/update_Actividad",
            type: "POST",
            data:{info:info}
        })
            .done(function (data){
                var datos = JSON.parse(data);
                if (datos.estatus){
                    Swal.fire({
                        title: "Exitoso",
                        type: 'success',
                        text: datos.mensaje,
                        confirmButtonColor: '#051dd6',
                        confirmButtonText: 'OK!'
                    }).then((result) => {
                        if (result.value) {
                            window.location.reload();
                        }
                    })
                }


            })
            .fail(function (jqXHR, textStatus, errorThrown) {
                console.log("Error al extraer la informacion");
            });
    })

});
$(document).on("click",".eliminarActividad", function () {
    var idActividad =$(this).attr("id");
    Swal.fire({
  title: 'Estás seguro?',
  text: "No podrás revertir esto!",
   type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, ¡bórralo!'
}).then((result) => {
  if (result.value) {
    $.ajax({
            url: "Actividades/delete_actividad",
            type: "POST",
            data: {idActividad: idActividad},
            success:function (respuesta) {
            Swal.fire({
                title: 'Exitoso!!',
                text: respuesta,
                type: 'success',
                confirmButtonColor: '#03d674',
                confirmButtonText: 'OK!'
            }).then((result) => {
                if (result.value) {
                    window.location.reload();
                }
            })
        }
        })
  }
})
//     // modificar logistica
//     $(document).on("click",".editarLogistica", function () {
//         var idActividad =$(this).attr("id");
//         $.ajax({
//             url: "logistica/jalar_datos",
//             type: "POST",
//             data:{idLogistica:idLogistica}
//         })
//             .done(function (data) {
//                 var datos = JSON.parse(data);
//                 $("#idActividad").val(datos[0].Id_Actividad);
//                 $("#Nombre_Actividad").val(datos[0].Nombre_Actividad);
//                 $("#Tipo_Documento").val(datos[0].Tipo_Documento);
//                 $("#Municipio").val(datos[0].Municipio);
//                 $("#Fecha_Inicio").val(datos[0].Fecha_Inicio);
//                 $("#Fecha_Fin").val(datos[0].Fecha_Fin);
//                 $("#verificacion").val(datos[0].verificacion);
//                 $("#impacto").val(datos[0].impacto);
//                 $("#resultado").val(datos[0].resultado);
//             })
//             .fail(function (jqXHR, textStatus, errorThrown) {
//                 console.log("Error al extraer la informacion");
//             });
//         $("#modalEdicionActividad").modal("show");
//     });
// //modificacion del Logistica
//     $(document).on("click","#modificarActiviad", function () {
//         var info = JSON.stringify($("#frmEdicionActividad :input").serializeArray());
//         $.ajax({
//             url: "Actividades/update_Actividad",
//             type: "POST",
//             data:{info:info}
//         })
//             .done(function (data){
//                 var datos = JSON.parse(data);
//                 if (datos.estatus){
//                     Swal.fire({
//                         type: "success",
//                         title: "¡Fue exitoso!",
//                         text: datos.mensaje,
//                         confirmButtonText: "<a href='actividades' style='text-decoration-line: none;color: white'>OK</a>",
//                     })
//                 }
//
//
//             })
//             .fail(function (jqXHR, textStatus, errorThrown) {
//                 console.log("Error al extraer la informacion");
//             });
//     })
//
// });
// $(document).on("click",".eliminarActividad", function () {
//     var idActividad =$(this).attr("id");
//     Swal.fire({
//         title: 'Estás seguro?',
//         text: "No podrás revertir esto!",
//         type: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#3085d6',
//         cancelButtonColor: '#d33',
//         confirmButtonText: 'Si, ¡bórralo!'
//     }).then((result) => {
//         if (result.value) {
//             $.ajax({
//                 url: "Actividades/delete_actividad",
//                 type: "POST",
//                 data: {idActividad: idActividad}
//
//             }).done(function (datos) {
//                 var datos = JSON.parse(datos);
//                 if (datos.estatus) {
//                     Swal.fire({
//                         icon: "success",
//                         title: "¡Eliminado!",
//                         text: datos.mensaje,
//                         confirmButtonText: "<a href='actividades' style='text-decoration-line: none;color: white'>OK</a>",
//                     });
//                 }
//
//             })
//         }
//     })
});
// $(document).on("click",".agregarActividad", function () {
//
//             $.ajax({
//                 url: "insertarActividad",
//                 type: "POST",
//             }).done(function (data) {
//                 var datos = JSON.parse(data);
//                 if (datos.estatus) {
//                     Swal.fire({
//                         icon: "success",
//                         title: "¡Agregado!",
//                         text: datos.mensaje,
//                         confirmButtonText: "<a href='actividades' style='text-decoration-line: none;color: white'>OK</a>",
//                     });
//                 }
//
//             })
//
// });

// para modificar logistica

