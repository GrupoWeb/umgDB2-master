function CargarPagina(contenedor,pagina){
    $(contenedor).load(pagina);
}

function addCapacitacion(form){
    $(form).submit(function(e){
        e.preventDefault();
        let parametros = $(this).serialize()
        $.ajax({
            data: parametros,
            url: 'model/php/addCapacitacion.php',
            type: "post",
            success: function(response){
                if(response = 'success'){
                    swal({
                        title: "Capacitaciones",
                        text: "Dato Almacenado!",
                        icon: "success",
                        button: true,
                        dangerMode: true,
                      })
                      .then((willDelete) => {
                        if (willDelete) {
                            Iniciar('view/capacitacion.php','Capacitaciones');
                        } 
                      });
                                       
                }
            }
        })
       
    })
}

function editarCapacitacion(form,pagina,modal) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        //console.log(parametros);
        $.ajax({
            data: parametros,
            url: 'model/php/UCapacitacion.php',
            type: "post",
            success: function (response) {
                if (response = 'success') {
                    swal({
                        title: "Capacitaciones",
                        text: "Dato Modificado!",
                        icon: "success",
                        button: true,
                        dangerMode: true,
                      })
                      .then((willDelete) => {
                        if (willDelete) {
                            Iniciar(pagina,'Capacitaciones');
                        } 
                      });
                      CierraPopup(modal);
                }
            }
        })
    })
}

function deleteCapacitacion(form,pagina,modal) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        //console.log(parametros);
        $.ajax({
            data: parametros,
            url: 'model/php/DCapacitacion.php',
            type: "post",
            success: function (response) {
                if (response = 'success') {
                    swal({
                        title: "Capacitaciones",
                        text: "Dato Eliminado!",
                        icon: "success",
                        button: true,
                        dangerMode: true,
                      })
                      .then((willDelete) => {
                        if (willDelete) {
                            Iniciar(pagina,'Capacitaciones');
                        } 
                      });
                      CierraPopup(modal);
                }
            }
        })
    })
}


function CalcularEdad(dato){
    
    fecha = $("#"+dato).val();
    $.get( "model/php/calcular.php", {fecha: fecha}, function( data ) {
           $('#edad').val(data);
     });  
}

function addPersona(form){
    $(form).submit(function(e){
        e.preventDefault();
        let parametros = $(this).serialize();
       // console.log(parametros);
        $.ajax({
            data: parametros,
            url: 'model/php/addPersona.php',
            type: "post",
            success: function(response){
                if(response = 'success'){
                    swal({
                        title: "Capacitadores",
                        text: "Dato Almacenado!",
                        icon: "success",
                        button: true,
                        dangerMode: true,
                      })
                      .then((willDelete) => {
                        if (willDelete) {
                            Iniciar('view/capacitador.php', 'Capacitadores');
                        } 
                      });
                                       
                }
            }
        })
       
    })
}


function editarPersona(form,pagina,modal) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        //console.log(parametros);
        $.ajax({
            data: parametros,
            url: 'model/php/UPersona.php',
            type: "post",
            success: function (response) {
                if (response = 'success') {
                    swal({
                        title: "Capacitador",
                        text: "Dato Modificado!",
                        icon: "success",
                        button: true,
                        dangerMode: true,
                      })
                      .then((willDelete) => {
                        if (willDelete) {
                            Iniciar(pagina,'Capacitadores');
                        } 
                      });
                      CierraPopup(modal);
                }
            }
        })
    })
}


function deletePersona(form,pagina,modal) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        //console.log(parametros);
        $.ajax({
            data: parametros,
            url: 'model/php/DPersona.php',
            type: "post",
            success: function (response) {
                if (response = 'success') {
                    swal({
                        title: "Capacitaciones",
                        text: "Dato Eliminado!",
                        icon: "success",
                        button: true,
                        dangerMode: true,
                      })
                      .then((willDelete) => {
                        if (willDelete) {
                            Iniciar(pagina,'Capacitaciones');
                        } 
                      });
                      CierraPopup(modal);
                }
            }
        })
    })
}


function asignacionPersona(form,pagina,modal) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        //console.log(parametros);
        $.ajax({
            data: parametros,
            url: 'model/php/APersona.php',
            type: "post",
            success: function (response) {
                if (response = 'success') {
                    swal({
                        title: "Capacitaciones",
                        text: "Dato Eliminado!",
                        icon: "success",
                        button: true,
                        dangerMode: true,
                      })
                      .then((willDelete) => {
                        if (willDelete) {
                            Iniciar(pagina,'Capacitaciones');
                        } 
                      });
                      CierraPopup(modal);
                }
            }
        })
    })
}



function DasignacionPersona(form, pagina, modal) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        //console.log(parametros);
        $.ajax({
            data: parametros,
            url: 'model/php/DAPersona.php',
            type: "post",
            success: function (response) {
                if (response = 'success') {
                    swal({
                        title: "Capacitadores",
                        text: "Dato Eliminado!",
                        icon: "success",
                        button: true,
                        dangerMode: true,
                      })
                      .then((willDelete) => {
                        if (willDelete) {
                            Iniciar(pagina,'Capacitadores');
                        } 
                      });
                      CierraPopup(modal);
                }
            }
        })
    })
}

function addPregunta(form){
    $(form).submit(function(e){
        e.preventDefault();
        let parametros = $(this).serialize();
       // console.log(parametros);
        $.ajax({
            data: parametros,
            url: 'model/php/addPregunta.php',
            type: "post",
            success: function(response){
                if(response = 'success'){
                    swal({
                        title: "Preguntas",
                        text: "Dato Almacenado!",
                        icon: "success",
                        button: true,
                        dangerMode: true,
                      })
                      .then((willDelete) => {
                        if (willDelete) {
                            Iniciar('view/preguntas.php', 'Preguntas');
                        } 
                      });
                                       
                }
            }
        })
       
    })
}


function editarPregunta(form,pagina,modal) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        //console.log(parametros);
        $.ajax({
            data: parametros,
            url: 'model/php/UPregunta.php',
            type: "post",
            success: function (response) {
                if (response = 'success') {
                    swal({
                        title: "Capacitador",
                        text: "Dato Modificado!",
                        icon: "success",
                        button: true,
                        dangerMode: true,
                      })
                      .then((willDelete) => {
                        if (willDelete) {
                            Iniciar(pagina,'Capacitadores');
                        } 
                      });
                      CierraPopup(modal);
                }
            }
        })
    })
}

function deletePregunta(form,pagina,modal) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        //console.log(parametros);
        $.ajax({
            data: parametros,
            url: 'model/php/DPregunta.php',
            type: "post",
            success: function (response) {
                if (response = 'success') {
                    swal({
                        title: "Capacitaciones",
                        text: "Dato Eliminado!",
                        icon: "success",
                        button: true,
                        dangerMode: true,
                      })
                      .then((willDelete) => {
                        if (willDelete) {
                            Iniciar(pagina,'Capacitaciones');
                        } 
                      });
                      CierraPopup(modal);
                }
            }
        })
    })
}

function UploadFile() {
    $('#upload').submit(function (e) {
        e.preventDefault();

        var formData = new FormData($(this)[0]);
        //formData.append("dato","valor");
        $.ajax({
            type: "POST",
            url: "../model/addFileUpload.php",
            data: formData,
            contentType: false,
            processData: false,
            success: function (event) {
                if (event) {
                    alert("Dato Ingresado");
                    $("#contenedor").load("catalogos/uploadFile.php");
                } else {
                    alert("Error al subir archivo");
                }
            }
        })
    })
}


function addAdjunto(form){
    $(form).submit(function(e){
        e.preventDefault();
        let parametros = $(this).serialize();
        $.ajax({
            data: new FormData(this),
            url: 'model/php/uploadfile.php',
            type: "post",
            contentType: false,
                cache: false,
                processData: false,
            success: function(response){
                if(response = 'success'){
                    swal({
                        title: "Adjunto",
                        text: "Dato Almacenado!",
                        icon: "success",
                        button: true,
                        dangerMode: true,
                      })
                      .then((willDelete) => {
                        if (willDelete) {
                            Iniciar('view/ingresoCapa.php', 'Control de Capacitaciones');
                        } 
                      });
                                       
                }
            }
        })
       
    })
}


function addIndicador(form) {
    $(form).submit(function(e){
        e.preventDefault();
        let parametros = $(this).serialize();
        $.ajax({
            data: new FormData(this),
            url: 'model/php/addIndicador.php',
            type: "post",
            contentType: false,
                cache: false,
                processData: false,
            success: function(response){
                if(response = 'success'){
                    swal({
                        title: "Indicador",
                        text: "Dato Almacenado!",
                        icon: "success",
                        button: true,
                        dangerMode: true,
                      })
                      .then((willDelete) => {
                        if (willDelete) {
                            Iniciar('view/indicadores.php', 'Indicadores');
                        } 
                      });
                                       
                }
            }
        })
       
    })
}


















function enviarAlimento(form){
    $(form).submit(function(e){
        e.preventDefault();
        let parametros = $(this).serialize()
        $.ajax({
            data: parametros,
            url: 'php/addAlimento.php',
            type: "post",
            success: function(response){
                if(response = 'success'){

                    swal({
                        title: "Alimento",
                        text: "Dato Almacenado!",
                        icon: "warning",
                        button: true,
                        dangerMode: true,
                      })
                      .then((willDelete) => {
                        if (willDelete) {
                            window.location.href = "http://localhost/proyecto/proyectoDB/odontologia/";
                        
                        } 
                      });
                }
            }
        })
       
    })
}

function addTiempo(form){
    $(form).submit(function(e){
        e.preventDefault();
        let parametros = $(this).serialize()
        $.ajax({
            data: parametros,
            url: 'php/addTime.php',
            type: "post",
            success: function(response){
                if(response = 'success'){
                    swal({
                        title: "Tiempo de Comida",
                        text: "Dato Almacenado!",
                        icon: "warning",
                        button: true,
                        dangerMode: true,
                      })
                      .then((willDelete) => {
                        if (willDelete) {
                            window.location.href = "http://localhost/proyecto/proyectoDB/odontologia/";
                        
                        } 
                      });
                                       
                }
            }
        })
       
    })
}


function addMedico(form){
    $(form).submit(function(e){
        e.preventDefault();
        let parametros = $(this).serialize()
        $.ajax({
            data: parametros,
            url: 'php/addmedico.php',
            type: "post",
            success: function(response){
                if(response = 'success'){
                    swal({
                        title: "Médico Asignado y Guardado",
                        text: "Dato Almacenado!",
                        icon: "warning",
                        button: true,
                        dangerMode: true,
                      })
                      .then((willDelete) => {
                        if (willDelete) {
                            window.location.href = "http://localhost/proyecto/proyectoDB/odontologia/";
                        
                        } 
                      });
                                       
                }
            }
        })
       
    })
}

function addCita(form){
    $(form).submit(function(e){
        e.preventDefault();
        let parametros = $(this).serialize()
        $.ajax({
            data: parametros,
            url: 'php/addCita.php',
            type: "post",
            success: function(response){
                if(response = 'success'){
                    swal({
                        title: "Médico Asignado y Guardado",
                        text: "Dato Almacenado!",
                        icon: "warning",
                        button: true,
                        dangerMode: true,
                      })
                      .then((willDelete) => {
                        if (willDelete) {
                            window.location.href = "http://localhost/proyecto/proyectoDB/odontologia/";
                        
                        } 
                      });
                                       
                }
            }
        })
       
    })
}


function addDieta(form) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        $.ajax({
            data: parametros,
            url: 'php/addDieta.php',
            type: "post",
            success: function (response) {
                if (response = 'success') {
                    swal({
                            title: "DIETA GUARDADA",
                            text: "Dato Almacenado!",
                            icon: "success",
                            button: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                window.location.href = "http://localhost/proyecto/proyectoDB/odontologia/";

                            }
                        });

                }
            }
        })

    })
}

function addTipoOdontologia(form) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        $.ajax({
            data: parametros,
            url: 'php/addOtipo.php',
            type: "post",
            success: function (response) {
                if (response = 'success') {
                    swal({
                            title: "AGREGADO EXITOSAMENTE",
                            text: "Dato Almacenado!",
                            icon: "success",
                            button: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                window.location.href = "http://localhost/proyecto/proyectoDB/odontologia/";

                            }
                        });

                }
            }
        })

    })
}

function addOdontologia(form) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        $.ajax({
            data: parametros,
            url: 'php/addOdontologia.php',
            type: "post",
            success: function (response) {
                if (response = 'success') {
                    swal({
                            title: "AGREGADO EXITOSAMENTE",
                            text: "Dato Almacenado!",
                            icon: "success",
                            button: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                window.location.href = "http://localhost/proyecto/proyectoDB/odontologia/";

                            }
                        });

                }
            }
        })

    })
}



function editarAlimento(form,pagina,modal) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        console.log(parametros);
        $.ajax({
            data: parametros,
            url: 'php/Ualimento.php',
            type: "post",
            success: function (response) {
                if (response = 'success') {
                    swal("Edición Exitosa", "", "success");
                    CierraPopup(modal);
                    $("#contenido").load(pagina);
                }
            }
        })
    })
}


function editarCita(form,pagina,modal) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        console.log(parametros);
        $.ajax({
            data: parametros,
            url: 'php/Ucita.php',
            type: "post",
            success: function (response) {
                if (response = 'success') {
                    swal("Edición Exitosa", "", "success");
                    CierraPopup(modal);
                    $("#contenido").load(pagina);
                }
            }
        })
    })
}



function editarTiempo(form,pagina,modal) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        console.log(parametros);
        $.ajax({
            data: parametros,
            url: 'php/Utiempo.php',
            type: "post",
            success: function (response) {
                if (response = 'success') {
                    swal("Edición Exitosa", "", "success");
                    CierraPopup(modal);
                    $("#contenido").load(pagina);
                }
            }
        })
    })
}

function editarEspecialidad(form, pagina, modal) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        console.log(parametros);
        $.ajax({
            data: parametros,
            url: 'php/Uespecialidad.php',
            type: "post",
            success: function (response) {
                if (response = 'success') {
                    swal("Edición Exitosa", "", "success");
                    CierraPopup(modal);
                    $("#contenido").load(pagina);
                }
            }
        })
    })
}


function eliminarAlimento(form,pagina,modal) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        $.ajax({
            data: parametros,
            url: 'php/Dalimento.php',
            type: "post",
            success: function (response) {
                if (response = 'success') {
                    swal("Dato Eliminado", "", "success");
                    CierraPopup(modal);
                    $("#contenido").load(pagina);
                }
            }
        })

    })
}

function eliminarTiempo(form,pagina,modal) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        $.ajax({
            data: parametros,
            url: 'php/Dtiempo.php',
            type: "post",
            success: function (response) {
                if (response = 'success') {
                    swal("Dato Eliminado", "", "success");
                    CierraPopup(modal);
                    $("#contenido").load(pagina);
                }
            }
        })

    })
}

function eliminarCita(form,pagina,modal) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        $.ajax({
            data: parametros,
            url: 'php/Dcita.php',
            type: "post",
            success: function (response) {
                if (response = 'success') {
                    swal("Dato Eliminado", "", "success");
                    CierraPopup(modal);
                    $("#contenido").load(pagina);
                }
            }
        })

    })
}

function eliminarEspecialidad(form, pagina, modal) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        $.ajax({
            data: parametros,
            url: 'php/Despecialidad.php',
            type: "post",
            success: function (response) {
                if (response = 'success') {
                    swal("Dato Eliminado", "", "success");
                    CierraPopup(modal);
                    $("#contenido").load(pagina);
                }
            }
        })

    })
}


function Cpersona(url, lugar) {
    $.ajax({
        url: url,
        type: 'post',
        success: function (r) {
            $(lugar).html(r);
        }
    });
}

function COMBO(url, lugar) {
    $.ajax({
        url: url,
        type: 'post',
        success: function (r) {
            $(lugar).html(r);
        }
    });
}



function llenarCombos(url,lugar,idselect,nameselect) {
	$.ajax({
		url: url,
		type: 'post',
		success: function (r) {
			$(lugar).empty();
			r = JSON.parse(r);
			sedeItem = crearElemento('option', '__', '__', 'Seleccione...', '__', '__');
			sedeItem.setAttribute('value', '');
            $(lugar).append(sedeItem);
			for (i = 0; i < r.length; i++) {
				option = crearElemento('option', '__', '__', r[i][nameselect], '__', r[i][idselect]);
				$(lugar).append(option);
			}
		}
	});
}


function llenarCombosID(url, lugar,id) {
	
	var dato = "id="+id;
	$.ajax({
		url: url,
		type: 'post',
		data: dato,
		success: function (r) {
			$(lugar).empty();
			r = JSON.parse(r);
			sedeItem = crearElemento('option', '__', '__', 'Seleccione...', '__', '__');
			sedeItem.setAttribute('value', '');
			$(lugar).append(sedeItem);
			for (i = 0; i < r.length; i++) {
				option = crearElemento('option', '__', '__', r[i][1], '__', r[i][0]);
				$(lugar).append(option);
			}
		}
	});
}

function crearElemento(elemento, identificador, clase, texto, ruta, valor) {
	item = document.createElement(elemento);
	if (identificador !== '__') { item.id = identificador; }
	if (clase !== '__') { item.className = clase; }
	if (texto !== '__') { item.innerText = texto; }
	if (ruta !== '__') { item.dataset.cargarVista = ruta; }
	if (valor !== '__') { item.value = valor; }
	return item;
}


function CierraPopup(modal) {
    $(modal).modal('hide'); //ocultamos el modal
    $('body').removeClass('modal-open'); //eliminamos la clase del body para poder hacer scroll
    $('.modal-backdrop').remove(); //eliminamos el backdrop del modal
}
