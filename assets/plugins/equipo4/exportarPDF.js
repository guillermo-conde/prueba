/*//Seleccionamos el boton "Actualizar documento"
var actualizar = document.getElementById('actDocumento');
var documentoFirmado;

//Agregamos una funciona cuando se de click
actualizar.addEventListener('click', function(){
	//Seleccionamos el canvas del PDF
	var lienzoPDF1 = document.getElementById('canvasPDF');
	//Generamos la url de la imagen del canvas del PDF.
	urlPdfFirm = lienzoPDF1.toDataURL('image/jpeg', 1.0);

	//instanciamos la funcion de la librería
	var doc = new jsPDF('p', 'mm', 'letter');//el parámetro 'p'= vertcal, 'mm'=medida en milímetros, 'letter'=tamaño de hoja.

	//Agregamos la imagen a la hoja nueva
	doc.addImage(urlPdfFirm, 'PNG', 0, 0, 216, 279);//'urlPdfFirm'=url del canvas, 'PNG'=tipo de imagen, '0'=margen vertical izquierdo,
													// '0'=margen superior, '216'=alto de la imagen(mm), '279'=ancho de la imagen(mm)
	
	//descarga del documento.	
	documentoFirmado = doc.save('prueba.pdf');
});*/

//descomentar el código anterior en caso de que no funciones el código de abajo

document.getElementById('cargaImgServer').addEventListener('submit', function(){
	var canvasPDFFirmado = document.getElementById('canvasPDF');
	urlPdfFirm = canvasPDFFirmado.toDataURL('image/jpeg', 1.0);
	document.getElementById('urlImgFirma').value = urlPdfFirm;
	document.getElementById('tituloDocumento').value = documento_nombre;
}, false);