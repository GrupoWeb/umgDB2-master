$(document).ready(function(){
    $('#menu li a').on('click', function(){
        $('li a.active').removeClass('active');
        $(this).addClass('active');
    }); 

    Iniciar('../resources/views/layaout/dashboard.blade.php','Dashboard BI');
})

function Iniciar(page,ruta){
    $('#contenedor').load(page);
    cambiodeRuta(ruta);

}

function cambiodeRuta(ruta){
    $('#ruta').text(ruta);
   
}

