//validar tiempo restante de la subasta
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