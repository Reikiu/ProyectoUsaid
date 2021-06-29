$(document).on("click",".editarVisita", function () {
    var idVisita =$(this).attr("id");
    $.ajax({
        url: "visita/jalar_datos",
        type: "POST",
        data:{idVisita:idVisita}
    })
        .done(function (data) {
            var datos = JSON.parse(data);
            $("#idVisita").val(datos[0].Id_Planificacion);
            $("#Personas_que_Viajan").val(datos[0].Personas_que_Viajan);
            $("#Responsable").val(datos[0].Responsable);
            $("#Objetivo").val(datos[0].Objetivo);
            $("#fechaProgramada").val(datos[0].fechaProgramada);
            $("#Estado_Actividad").val(datos[0].Estado_Actividad);
            $("#municipio").val(datos[0].municipio);
            $("#resultado").val(datos[0].resultado);
            $("#nombreActividad").val(datos[0].Id_Actividad);
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            console.log("Error al extraer la informacion");
        });
    $("#modalEdicionVisita").modal("show");
});
//modificacion del cliente
$(document).on("click","#modificarVisita", function () {
    var info = JSON.stringify($("#frmEdicionVisita :input").serializeArray());
    $.ajax({
        url: "visita/update_visita",
        type: "POST",
        data:{info:info}
    })
        .done(function (data){
            var datos = JSON.parse(data);
            if (datos.estatus){
                Swal.fire({
                    title: "Exitoso!!",
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
});
// para eliminar visita
$(document).on("click",".eliminarVisita", function () {
    var idVisita =$(this).attr("id");
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
                url: "visita/delete_visita",
                type: "POST",
                data: {idVisita: idVisita}

            }).done(function (datos) {
                var datos = JSON.parse(datos);
                if (datos.estatus) {
                    Swal.fire({
                        title: "Exitoso!!",
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
        }
    })
});



// aqui ira para modificar y insertar

$(document).on("click",".editarLogistica", function () {
    var idLogistica =$(this).attr("id");
    $.ajax({
        url: "logistica/jalar_datos",
        type: "POST",
        data:{idLogistica:idLogistica}
    })
        .done(function (data) {
            var datos = JSON.parse(data);
            $("#idLogistica").val(datos[0].Id_Detalle);
            $("#Lugar").val(datos[0].Lugar);
            $("#Equipo_Y_Material_Requerido").val(datos[0].Equipo_Y_Material_Requerido);
            $("#Hora_Retorno_Oficina").val(datos[0].Hora_Retorno_Oficina);
            $("#Hora_Salida_Oficina").val(datos[0].Hora_Salida_Oficina);
            $("#Estado_Actividad").val(datos[0].Estado_Actividad);
            $("#Hora_Fin_Sesion").val(datos[0].Hora_Fin_Sesion);
            $("#Hora_Inicio_Sesion").val(datos[0].Hora_Inicio_Sesion);
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            console.log("Error al extraer la informacion");
        });
    $("#modalEdicionLogistica").modal("show");
});
//modificacion del logistica
$(document).on("click","#modificarLogistica", function () {
    var info = JSON.stringify($("#frmEdicionLogistica :input").serializeArray());
    $.ajax({
        url: "logistica/update_logistica",
        type: "POST",
        data:{info:info}
    })
        .done(function (data){
            var datos = JSON.parse(data);
            if (datos.estatus){
                Swal.fire({
                    title: "Exitoso!!",
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
});
// inicio de probar si manda la informacion de que se a insertado resultado
// $(window ).on("load", function () {
//         $("form").submit(function (event) {
//             event.preventDefault();
//             $.ajax({
//                 url: $('#resultadoForm').attr('action'),
//                 type:$("#resultadoForm").attr("method"),
//                 data:$("#resultadoForm").serialize(),
//                 success:function (respuesta) {
//                     Swal.fire({
//                         icon: "sucresultadoFormcess",
//                         title: "¡Exitoso!",
//                         text: respuesta,
//                         confirmButtonText: "<a href='resultado' style='text-decoration-line: none;color: white'>OK</a>",
//                     });
//                 }
//             })
//         });
// });


// aqui areemos un jalado de datos para llamar lo que es el municipio y actividad
$(document).on("click",".resultadoActividad", function () {
    var idResultado =$(this).attr("id");
    $.ajax({
        url: "resultado/jalar_datos",
        type: "POST",
        data:{idResultado:idResultado}
    })
        .done(function (data) {
            var datos = JSON.parse(data);
            $("#idResultado").val(datos[0].Id_Planificacion);
            $("#municipio1").val(datos[0].municipio);
            $("#nombreActividad1").val(datos[0].Id_Planificacion);
            $("#responsable1").val(datos[0].Responsable);
            $("#fechaProgramada1").val(datos[0].fechaProgramada);
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            console.log("Error al extraer la informacion");
        });
    $("#modalResultado").modal("show");
});
//guardar Resultado
$(document).ready(function () {
    $('#btnGuardarResultado').click(function () {
        var datos=$('#resultadoForm').serialize();

        $.ajax({
            type:'POST',
            url:'resultado/insertarResultado',
            data:datos,
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
        return false;
    })
});

// para eliminar logistica
$(document).on("click",".eliminarResultado", function () {
    var idResultado =$(this).attr("id");
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
                url: "resultado/delete_resultado",
                type: "POST",
                data: {idResultado: idResultado}

            }).done(function (datos) {
                var datos = JSON.parse(datos);
                if (datos.estatus) {
                    Swal.fire({
                        title: "Exitoso!!",
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
        }
    })
});

// aqui sera para modificar el Relsultado
$(document).on("click",".editarResultado", function () {
    var idResultado =$(this).attr("id");
    $.ajax({
        url: "resultado/jalar_datos2",
        type: "POST",
        data:{idResultado:idResultado}
    })
        .done(function (data) {
            var datos = JSON.parse(data);
            $("#idResultado").val(datos[0].idResultado);
            $("#Agenda").val(datos[0].Agenda);
            $("#Observaciones").val(datos[0].Observaciones);
            $("#partOtrosM").val(datos[0].partOtrosM);
            $("#partOtrosF").val(datos[0].partOtrosF);
            $("#hReaInvertidas").val(datos[0].hReaInvertidas);
            $("#acividadRea").val(datos[0].acividadRea);
            $("#fechaProSesion").val(datos[0].fechaProSesion);
            $("#fechaRegistro").val(datos[0].fechaRegistro);
            $("#partMunicM").val(datos[0].partMunicM);
            $("#partMunicH").val(datos[0].partMunicH);
            $("#Acuerdos").val(datos[0].Acuerdos);
            $("#nombreActividad1").val(datos[0].idVisita);
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            console.log("Error al extraer la informacion");
        });
    $("#modalEdicionResultado").modal("show");
});
//modificacion del logistica
$(document).on("click","#modificarResultado", function () {
    var info = JSON.stringify($("#frmEdicionResultado :input").serializeArray());
    $.ajax({
        url: "resultado/update_resultado",
        type: "POST",
        data:{info:info}
    })
        .done(function (data){
            var datos = JSON.parse(data);
            if (datos.estatus){
                Swal.fire({
                    title: "Exitoso!!",
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
});
// aqui llenar los campos de logisca q ocuparemos
$(document).on("click",".CrearLogistica", function () {
    var idLogistica =$(this).attr("id");
    $.ajax({
        url: "Logistica/datosVisita",
        type: "POST",
        data:{idLogistica:idLogistica}
    })
        .done(function (data) {
            var datos = JSON.parse(data);
            $("#idLogistica").val(datos[0].Id_Planificacion);
            $("#municipio2").val(datos[0].municipio);
            $("#responsable2").val(datos[0].Responsable);
            $("#fechaProgramada2").val(datos[0].fechaProgramada);
            $("#actividad").val(datos[0].Id_Planificacion);
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            console.log("Error al extraer la informacion");
        });
    $("#modaLogistica").modal("show");
});
//guardar logistica
$(document).ready(function () {
    $('#btnGuardarLogistica').click(function () {
        var datos=$('#logisticaForm').serialize();

        $.ajax({
            type:'POST',
            url:'logistica/insertarLogistica',
            data:datos,
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
        return false;
    })
});


// resultado de actividad
// $(document).ready(function () {
//     $('#btnGuardar1').click(function () {
//         var datos=$('#actividadesForm').serialize();
//
//         $.ajax({
//             type:"post",
//             url:'insertarActividad',
//             data:datos,
//             // contentType: false,
//             // processData: false,
//             // cache:false,
//             success:function (respuesta) {
//                 Swal.fire({
//                     title: 'Exitoso!!',
//                     text: respuesta,
//                     type: 'success',
//                     showCancelButton: true,
//                     confirmButtonColor: '#03d674',
//                     cancelButtonColor: '#1a89dd',
//                     cancelButtonText: 'Crear visita',
//                     confirmButtonText: 'Aceptar!'
//                 }).then((result) => {
//                     if (result.value) {
//                         location.href='/Usaid/actividades';
//                     }else {
//                         location.href='/Usaid/visita/agregarVisita';
//                     }
//                 })
//             }
//         })
//         return false;
//     })
// });
// mensaje de visita seria para confirmaciones
$(document).ready(function () {
    $('#btnGuardar2').click(function () {
        var datos=$('#visitaForm').serialize();

        $.ajax({
            type:'POST',
            url:'insertarVisita',
            data:datos,
            success:function (respuesta) {
                Swal.fire({
                    title: 'Exitoso!!',
                    text: respuesta,
                    type: 'success',
                    showCancelButton: true,
                    confirmButtonColor: '#03d674',
                    cancelButtonColor: '#1a89dd',
                    cancelButtonText: 'Asignar otra actividad a la visita',
                    confirmButtonText: 'OK!'
                }).then((result) => {
                    if (result.value) {
                        window.location.reload();
                    }
                })
            }
        })
        return false;
    })
})

$(document).ready(function () {
    $('#btnGuardar3').click(function () {
        var datos=$('#visitaForm').serialize();

        $.ajax({
            type:'POST',
            url:'insertarVisita',
            data:datos,
            success:function (respuesta) {
                Swal.fire({
                    title: 'Exitoso!!',
                    text: respuesta,
                    type: 'success',
                    showCancelButton: true,
                    confirmButtonColor: '#03d674',
                    cancelButtonColor: '#1a89dd',
                    cancelButtonText: 'Crear Logistica',
                    confirmButtonText: 'Aceptar!'
                }).then((result) => {
                    if (result.value) {
                        location.href='/Usaid/visita';
                    }else {
                        location.href='/Usaid/logistica/agregarLogistica';
                    }
                })
            }
        })
        return false;
    })
})
// fin de los mensajes de visita

// mensaje para los de logistica salir y guardar
$(document).ready(function () {
    $('#btnGuardar4').click(function () {
        var datos=$('#logisticaForm').serialize();

        $.ajax({
            type:'POST',
            url:'insertarLogistica',
            data:datos,
            success:function (respuesta) {
                Swal.fire({
                    title: respuesta,
                    type: 'success',
                    confirmButtonColor: '#051dd6',
                    confirmButtonText: 'OK!'
                }).then((result) => {
                    if (result.value) {
                        location.href='/Usaid/logistica';
                    }
                })
            }
        })
        return false;
    })
})
$(document).ready(function () {
    $('#btnGuardar5').click(function () {
        var datos=$('#logisticaForm').serialize();

        $.ajax({
            type:'POST',
            url:'insertarLogistica',
            data:datos,
            success:function (respuesta) {
                Swal.fire({
                    title: 'Exitoso!',
                    type: 'success',
                    text: respuesta,
                    confirmButtonColor: '#051dd6',
                    confirmButtonText: 'OK!'
                }).then((result) => {
                    if (result.value) {
                        location.href='/Usaid/admin/dashboard';
                    }
                })
            }
        })
        return false;
    })
})

// fin de probar si manda la informacion de que se a insertado resultado
$(document).on("click",".eliminarLogistica", function () {
    var idLogistica =$(this).attr("id");
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
                url: "logistica/delete_logistica",
                type: "POST",
                data: {idLogistica:idLogistica}

            }).done(function (datos) {
                var datos = JSON.parse(datos);
                if (datos.estatus) {
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
        }
    })
});

// aqui ira la parte para hacer un update para agregar conductor

$(document).on("click",".asignarConductor", function () {
    var idConductor =$(this).attr("id");
    $.ajax({
        url: "asignarConductor/jalar_datos",
        type: "POST",
        data:{idConductor:idConductor}
    })
        .done(function (data) {
            var datos = JSON.parse(data);
            $("#idConductor").val(datos[0].Id_Planificacion);
            $("#Personas_que_Viajan").val(datos[0].Personas_que_Viajan);
            $("#Responsable").val(datos[0].Responsable);
            $("#Objetivo").val(datos[0].Objetivo);
            $("#fechaProgramada").val(datos[0].fechaProgramada);
            $("#Estado_Actividad").val(datos[0].Estado_Actividad);
            $("#municipio").val(datos[0].municipio);
            $("#resultado").val(datos[0].resultado);
            $("#nombreActividad").val(datos[0].Id_Actividad);
            $("#conductor").val(datos[0].conductor);

        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            console.log("Error al extraer la informacion");
        });
    $("#modalAsignarConductor").modal("show");
});
//modificacion del logistica
$(document).on("click","#asignarConductor", function () {
    var info = JSON.stringify($("#frmAsignarConductor :input").serializeArray());
    $.ajax({
        url: "asignarConductor/update_conductor",
        type: "POST",
        data: {info: info}
    })
        .done(function (data){
            var datos = JSON.parse(data);
            if (datos.estatus){
                Swal.fire({
                    title: "Exitoso!!",
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
});