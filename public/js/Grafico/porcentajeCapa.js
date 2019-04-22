$(document).ready(function () {
    load_monthwise_data();
});


google.charts.load('current', {
    packages: ['corechart', 'bar']
});
google.charts.setOnLoadCallback();

function load_monthwise_data() {
    
    $.ajax({
        url: "model/grafico/porcentajeCapa.php",
        method: "POST",
        dataType: "JSON",
        success: function (data) {
            drawMonthwiseChart(data );
        }
    });
}

function drawMonthwiseChart(chart_data) {

    var jsonData = chart_data;
    var data = new google.visualization.DataTable();

    data.addColumn('string', 'capa');
    data.addColumn('number', 'cantidad');
    $.each(jsonData, function (i, jsonData) {
        var month = jsonData.capa;
        var profit = parseFloat($.trim(jsonData.cantidad));
        data.addRows([
            [month, profit]
        ]);
    });

    var options = {
        title: 'DACE',
        hAxis: {
            title: "PORCENTAJE DE ASISTENCIA POR CAPACITACION"
        },
        vAxis: {
            title: 'CANTIDAD'
        }
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('chart_genero'));
    chart.draw(data, options);
}
