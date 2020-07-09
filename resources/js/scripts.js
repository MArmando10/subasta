

//validacion de numeros
    function check(e) {
        tecla = (document.all) ? e.keyCode : e.which;
    
        //Tecla de retroceso para borrar, siempre la permite
        if (tecla == 8) {
            return true;
        }
    
        // Patron de entrada, en este caso solo acepta numeros y letras
        patron = /[A-Za-z0-9]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
    }


//validar tiempo restante de la subasta
function TiempoRestante(fechaInicio, duracion)
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
    elem.innerText = "Hola mundo"
}