$(document).ready(function () {
    load_graphic('Genero');
});
google.charts.load('current', {
    'packages': ['corechart']
});
google.charts.setOnLoadCallback();


function load_graphic(title) {
    var temp_title = title;
    $.ajax({
        url: "model/Grafico/genero.php",
        method: "POST",
        dataType: "JSON",
        success: function (data) {
            drawChart(data, temp_title);
        }
    });
}


function drawChart(chart_data, chart_main_title) {



    var jsonData = chart_data;
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'GENERO');
    data.addColumn('number', 'PERSONAS');

    $.each(jsonData, function (i, jsonData) {
        var generoH = jsonData.nombre;
        var cantidadH= parseFloat($.trim(jsonData.hombre));
        var generoM = jsonData.nombreM;
        var cantidadM= parseFloat($.trim(jsonData.mujer));
        data.addRows([
            [generoH, cantidadH],
            [generoM, cantidadM]
        ]);
    });


    var options = {
        title: 'Genero'
    };

    var chart = new google.visualization.PieChart(document.getElementById('chart_G'));
    chart.draw(data, options);
}
