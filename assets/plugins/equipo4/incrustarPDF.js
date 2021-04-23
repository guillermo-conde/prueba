var urlPDF = documento_url; //Declaramos la ruta del pdf

pdfjsLib.GlobalWorkerOptions.workerSrc = base_url+'assets/pdf.worker.js'; //referenciamos un complemento de la librería.
var loadingTask = pdfjsLib.getDocument(urlPDF); //instanciamos la promesa con la url del archivo.

loadingTask.promise.then(function(pdf) { //Declaramos la promesa
  pdf.getPage(1).then(function(page) { //Acciones de la promesa
    var scale = 1; //Definimos la escala del documento
    var viewport = page.getViewport({ scale: scale, }); //Extraemos las dimensiones en base a la escala definida

    var lienzoPDF = document.getElementById('canvasPDF');//Seleccionamos le canvas
    var ctxPDF = lienzoPDF.getContext('2d');//Extraemos le contexto del canvas
    //Hacemos que la dimension del canvas coinsida con la escala del documento.
    lienzoPDF.height = viewport.height;
    lienzoPDF.width = viewport.width;

    //Definimos un array de datos con el contexto del canvas y la escala del documento.
    var renderContext = {
      canvasContext: ctxPDF,
      viewport: viewport,
    };
    //Invocamos la funcion para incrustar el documento y le pasamos el array de datos.
    page.render(renderContext);
  });
});