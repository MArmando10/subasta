

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


// función validar tiempo restante de la subasta
function TiempoRestante(fechaInicio, duracion)
{
var fecha1 = new Date(fechaInicio.substring(0,4),fechaInicio.substring(5,7)-1,fechaInicio.substring(8,10));
var fecha2 = new Date(duracion.substring(0,4),duracion.substring(5,7)-1,duracion.substring(8,10));

document.getElementById('fecha1').value =  fecha1;
document.getElementById('fecha2').value =  fecha2;

var diasDif = fecha2.getTime() - fecha1.getTime();
var dias = Math.round(diasDif/(1000 * 60 * 60 * 24));

document.getElementById('diasYhoras').value = dias+1;
}