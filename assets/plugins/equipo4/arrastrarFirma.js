function allowDrop(ev){
  ev.preventDefault();//prevenimos el comportamient por defecto.
}

function drag(ev){
}

function drop(ev){
  //prevenimos el comportamient por defecto.
  ev.preventDefault();

  //Seleccionamos el canvas del documento y su contexto.
  var lienzoPDF = document.getElementById('canvasPDF');
  var ctxPDF = lienzoPDF.getContext('2d');

  //Seleccionamos la imagen de la firma de la previsualización.
  var imgDibujo = document.getElementById('imgFirma');

  //Función que permite calcular la ubicacion del mouse.
  var ubicLienzoPDF = lienzoPDF.getBoundingClientRect();

  //Instanciamos un objeto del tipo imagen.
  var imagen = new Image();
  //Igualamos el src del objeto con el de la previsualización
  imagen.src = imgDibujo.src;

  //Obtencion de las coordenadas de ajuste para centrar la firma.
  var ajustex=imgDibujo.width/2;
  var ajustey=imgDibujo.height/2;

  //Calculo de la posicion del mouse considerando el ajuste para centrar
  var xPDF= (ev.clientX-ubicLienzoPDF.left)-ajustex;
  var yPDF= (ev.clientY-ubicLienzoPDF.top)-ajustey;

  //Incurstacion de la firma.
  ctxPDF.drawImage(imagen, xPDF, yPDF);
}