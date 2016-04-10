$( document ).ready(function(){

    /*Predefinido por materialize para inicializar menu en disp. móviles*/
   $(".button-collapse").sideNav();
   $('select').material_select();
   /*Imagen de fondo según hora del día*/
   //$('html').css('background', 'url(assets/images/'+ponerFondoSegunHora()+'.jpg) no-repeat center center fixed');

   $.backstretch("assets/images/dia.jpg",{speed: 150});
   /*Según los grados del viento, la "arrow" señalará hacia la correspondiente dirección*/
   rotarFlechaDireccionViento();

   /*Según ancho pantalla nos modificará las clases del cuadro de predicciones para mejor experiencia visual*/
   compruebaAnchoNavegador();
})

//NO TOCAR, MAS ADELANTE SE UTILIZARÁ PARA ALTERAR ESTILO DE LA WEB SEGÚN HORA DEL DÍA
function ponerFondoSegunHora(){
  var img = "";
  var temps = new Date();
  var hora = temps.getHours();

  if ((hora > 19 && hora <= 23) || (hora < 6)){
    return "dia";
  }else if (hora > 6 && hora < 10) {
    return "dia";
  }else if (hora > 10 && hora < 17) {
    return "dia";
  }else if (hora > 17 && hora < 19) {
    var num = Math.floor(Math.random() * 2) + 1;
    return "dia";
  }else{
    return "dia";
  }
}
////////////////////////////////////////////////////////////////////////////////////////
function rotarFlechaDireccionViento(){
  var grados = +($('#valDirViento').text());
  $('#valDirViento').remove();
  var gradosTotales = 180 + grados;
  $('#arrowViento').css({"-ms-transform":"rotate("+gradosTotales+"deg)","-webkit-transform":"rotate("+gradosTotales+"deg)","transform":"rotate("+gradosTotales+"deg)"});
  var grados01 = +($('#valDirViento01').text());
  $('#valDirViento01').remove();
  var gradosTotales01 = 180 + grados01;
  $('#arrowViento01').css({"-ms-transform":"rotate("+gradosTotales01+"deg)","-webkit-transform":"rotate("+gradosTotales01+"deg)","transform":"rotate("+gradosTotales01+"deg)"});
  var grados02 = +($('#valDirViento02').text());
  $('#valDirViento02').remove();
  var gradosTotales02 = 180 + grados02;
  $('#arrowViento02').css({"-ms-transform":"rotate("+gradosTotales02+"deg)","-webkit-transform":"rotate("+gradosTotales02+"deg)","transform":"rotate("+gradosTotales02+"deg)"});
  var grados03 = +($('#valDirViento03').text());
  $('#valDirViento03').remove();
  var gradosTotales03 = 180 + grados03;
  $('#arrowViento03').css({"-ms-transform":"rotate("+gradosTotales03+"deg)","-webkit-transform":"rotate("+gradosTotales03+"deg)","transform":"rotate("+gradosTotales03+"deg)"});
  var grados04 = +($('#valDirViento04').text());
  $('#valDirViento04').remove();
  var gradosTotales04 = 180 + grados04;
  $('#arrowViento04').css({"-ms-transform":"rotate("+gradosTotales04+"deg)","-webkit-transform":"rotate("+gradosTotales04+"deg)","transform":"rotate("+gradosTotales04+"deg)"});
  var grados05 = +($('#valDirViento05').text());
  $('#valDirViento05').remove();
  var gradosTotales05 = 180 + grados05;
  $('#arrowViento05').css({"-ms-transform":"rotate("+gradosTotales05+"deg)","-webkit-transform":"rotate("+gradosTotales05+"deg)","transform":"rotate("+gradosTotales05+"deg)"});
  var grados06 = +($('#valDirViento06').text());
  $('#valDirViento06').remove();
  var gradosTotales06 = 180 + grados06;
  $('#arrowViento06').css({"-ms-transform":"rotate("+gradosTotales06+"deg)","-webkit-transform":"rotate("+gradosTotales06+"deg)","transform":"rotate("+gradosTotales06+"deg)"});
  var grados07 = +($('#valDirViento07').text());
  $('#valDirViento07').remove();
  var gradosTotales07 = 180 + grados07;
  $('#arrowViento07').css({"-ms-transform":"rotate("+gradosTotales07+"deg)","-webkit-transform":"rotate("+gradosTotales07+"deg)","transform":"rotate("+gradosTotales07+"deg)"});
}

function compruebaAnchoNavegador(){
     var ancho = $(window).width();
     if (ancho < 1450){
       $('#generalPred_container').addClass('l7');
       $('#generalPred_container').removeClass('l6');
     }
}
