//validar tiempo restante de la subasta
function tiempo_restante(fechaInicio, duracion)
{
    //obtener fecha actual
    var elem = document.getElementById('para');

    var hoy = new Date();
    var fecha = hoy.getDate() + '-' + ( hoy.getMonth() + 1 ) + '-' + hoy.getFullYear();

    //hora actual
    var hora = hoy.getUTCHours()+':' + hoy.getUTCMinutes()+'-' + hoy.getSeconds();
    //obtener fecha y hora actual
    var fechaYHora = fecha + ' ' + hora;

    var elem = document.getElementById('tiempo_restante');
    elem.innerText = "hola mundo"
}


