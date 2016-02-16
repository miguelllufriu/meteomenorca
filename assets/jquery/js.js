$( document ).ready(function(){

    /*Predefinido por materialize para inicializar menu en disp. móviles*/
   $(".button-collapse").sideNav();
   /*Imagen de fondo según hora del día*/
   $('html').css('background', 'url(assets/images/'+ponerFondoSegunHora()+'.jpg) no-repeat center center fixed');

   $.backstretch("assets/images/dia.jpg",{speed: 150});
   /*Según los grados del viento, la "arrow" señalará hacia la correspondiente dirección*/
   rotarFlechaDireccionViento();
})

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

function rotarFlechaDireccionViento(){
  var grados = +($('#valDirViento').text());
  $('#valDirViento').remove();
  var gradosTotales = 180 + grados;
  $('#arrowViento').css({"-ms-transform":"rotate("+gradosTotales+"deg)","-webkit-transform":"rotate("+gradosTotales+"deg)","transform":"rotate("+gradosTotales+"deg)"});
}
