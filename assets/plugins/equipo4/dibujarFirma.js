/*Código de fncionamiento para el lienzo de firmas
Author: Equipo 4*/

var lienzo = document.getElementById('canvas');/*guardamos al elemento canvas en una variable*/
var ctx = lienzo.getContext("2d");/*Obtenemos el contexto del canvas*/
var ubicLienzo = lienzo.getBoundingClientRect();/*Esto nos ayuda a calcular las coordenadas dentro del canvas*/
var selecNgo = document.getElementById('colorNegro');
var selecAzl = document.getElementById('colorAzul');
var limpLienzo = document.getElementById('limpiarLienzo');
var guardarFirma = document.getElementById('transfPng');
var x=0, y=0, dibujando=false, color='black';/*variables complementarias*/

lienzo.addEventListener('mousedown', function(e){/*Función para identificar el inicio del trazo*/
	/*Obtenemos el punto inicial tomando en cuenta la ubicación del lienzo*/
	x=e.clientX-ubicLienzo.left;
	y=e.clientY-ubicLienzo.top;
	/*Como ya se inicio el trazo, la bandera cambia a verdadero*/
	dibujando=true;
});

lienzo.addEventListener('mousemove', function(e){/*Funciona para trazar el movimiento del mouse*/
	if (dibujando===true) {/*Si ya se ha comenzado a dibujar*/
		dibujar(x,y,e.clientX-ubicLienzo.left,e.clientY-ubicLienzo.top)/*se obtiene el valor de inicio de 'x' y 'y', además de los valores actuales de ambas coordenadas*/
		/*Después de trazar la línea, sus coordenadas finales se convierten en las coordenadas iniciales de la siguiente linea*/
		x=e.clientX-ubicLienzo.left;
		y=e.clientY-ubicLienzo.top;
	}
});

lienzo.addEventListener('mouseup', function(e){/*Cuando se termina el trazado.*/
	if (dibujando===true) {
		dibujar(x,y,e.clientX-ubicLienzo.left,e.clientY-ubicLienzo.top);
		/*Reiniciamos las coordenadas, ya que se detuvo el trazado (se solto el boton de click)*/
		x=0;
		y=0;
		/*Como se ha terminado de dibujar la linea, la bandera se convierte a false*/
		dibujando = false;
	}
});

function dibujar(x1, y1, x2, y2){/*Función para mostrar las lineas en pantalla*/
	ctx.beginPath();/*Indicamos que se va a dibujar*/
	ctx.strokeStyle=color;/*Color de la linea*/
	ctx.lineWidth=2;/*Grosor de la linea*/
	ctx.moveTo(x1, y1);/*Se mueve el lápiz a la coordenada inicial de la linea*/
	ctx.lineTo(x2, y2);/*Se traza hacia las coordenadas finales*/
	ctx.stroke(); /*Indicamos que solo es una línea*/
	ctx.closePath();
}

/*Funciones para los botones*/
selecNgo.addEventListener('click', function(){/*Funciones para cambiar el color a negro (predeterminado)*/
	color='black';
});
selecAzl.addEventListener('click', function(){/*Funciones para cambiar el color a azul*/
	color='blue';
});
limpLienzo.addEventListener('click', function(){/*Funcion para limpiar el lienzo*/
	ctx.clearRect(0,0, lienzo.width, lienzo.height);
});
guardarFirma.addEventListener('click', function(){/*funcion para convertir la firma en imagen png*/
	var url = lienzo.toDataURL("image/svg+xml", 1.0);/*convertimos el lienzo en url*/
	var nuevaFirma = document.getElementById('imgFirma');/*seleccionamos la etiqueta img de la previsualización*/
	nuevaFirma.src= url;/*cambiamos el atributo src de la previsualización´para que se muestre la nueva imagen de la firma*/
	
});