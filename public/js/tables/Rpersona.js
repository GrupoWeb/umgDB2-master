$(document).ready(function () {
    var tabla = $('#RtPersonas').DataTable({
        "bDeferRender": true,
        "searching": true,
        "bLengthChange": false,
        "sPaginationType": "full_numbers",


        "ajax": {
            "url": "model/tabla/ATPersona.php",
            "type": "POST"
        },
        "columns": [

            { "data": "dpi" },
            { "data": "NOMBRE" },
            { "data": "descripcion" },
            {
                "defaultContent": "<button type='button' class='eliminarA btn btn-danger' data-toggle='modal' data-target='#modaldasignar'><i class='fa fa-trash'></i></button>"
            }

        ],
        "columnDefs": [
            { "width": "20%",  "targets": 0 },
            { "width": "60%", "targets": 1 },
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
     obtener_data_eliminar("#RtPersonas tbody", tabla);
});


var obtener_data_eliminar = function (tbody, table) {
    $(tbody).on("click", "button.eliminarA", function () {
        var data = table.row($(this).parents("tr")).data();
        var food = $("#idEpersona").val(data.idProl);

    })
}