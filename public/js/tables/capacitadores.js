$(document).ready(function () {
    var tabla = $('#tPersonas').DataTable({
        "bDeferRender": true,
        "searching": true,
        "bLengthChange": false,
        "sPaginationType": "full_numbers",


        "ajax": {
            "url": "model/tabla/CCapacitadores.php",
            "type": "POST"
        },
        "columns": [

            { "data": "dpi" },
            { "data": "nombre" },
            { "data": "apellido" },
            { "data": "fechaNac" },
            { "data": "edad" },
            { "data": "direccion" },
            { "data": "telefono" },
            {
                "defaultContent": "<button type='button' class='editar btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fa fa-pencil' aria-hidden='true'></i></button><button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminar'><i class='fa fa-trash'></i></button><button type='button' class='eliminar btn btn-success' data-toggle='modal' data-target='#modalAsignar'><i class='fa fa-check-square-o'></i></button>"
            }

        ],
        "columnDefs": [
            { "width": "60%",  "targets": 0 },
            { "width": "20%", "targets": 1 },
          ],
        "dom": 'Bfrtip',
        "buttons": [
            {
                extend: 'excelHtml5',
                title: 'Reporte de Capacitaciones'
            },
            {
                extend: 'pdfHtml5',
                title: 'Reporte de Capacitaciones',
                messageTop: 'Reporte Gerencial',
                
            }
        ],
        "oLanguage": {
            "sProcessing": "Procesando...",
            "sLengthMenu": 'Mostrar <select>' +
                '<option value="10">10</option>' +
                '<option value="20">20</option>' +
                '<option value="30">30</option>' +
                '<option value="40">40</option>' +
                '<option value="50">50</option>' +
                '<option value="-1">All</option>' +
                '</select> registros',
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Filtrar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Por favor espere - cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });
     obtener_data_editar("#tPersonas tbody", tabla);
     obtener_data_eliminar("#tPersonas tbody", tabla);
     obtener_data_asignacion("#tPersonas tbody", tabla);
});

function obtener_data_editar(tbody, table) {
    $(tbody).on("click", "button.editar", function () {
        var data = table.row($(this).parents("tr")).data();
        var nombre = $("#nombreE").val(data.nombre);
        var apellido = $("#apellidoE").val(data.apellido);
        var idPersona = $("#idPersona").val(data.dpi);

    })
}

var obtener_data_eliminar = function (tbody, table) {
    $(tbody).on("click", "button.eliminar", function () {
        var data = table.row($(this).parents("tr")).data();
        var food = $("#idAlimento").val(data.dpi);

    })
}

var obtener_data_asignacion = function (tbody, table) {
    $(tbody).on("click", "button.eliminar", function () {
        var data = table.row($(this).parents("tr")).data();
        var food = $("#idPersonaA").val(data.dpi);
        var completo = $("#nombreA").val(data.nombre + " " + data.apellido);

    })
}