<?php 
	
	require('fpdf182/fpdf.php');
	const NOMBRETEMPORAL = 'imgtemporal.jpg';

	if ($_SERVER['REQUEST_METHOD']) {
		$urlImagen = $_POST['urlImgFirma'];
		$nombreDocumento = $_POST['tituloDocumento'];
		$id = $_POST['id'];
		$base_URL = $_POST['baseUrl'];

		
		//ruta donde se guardará el documento firmado.
		$rutaDestino = $base_URL.'assets/docfirmados/'.$nombreDocumento.'-firmado.pdf';
		
		$divisionURL = explode(',', $urlImagen);
		$imgDecodificada = base64_decode($divisionURL[1]);

		if( $imgDecodificada!==false )
		{
		    //Guardamos la imagen en una ubicación temporal.
		    if( file_put_contents(NOMBRETEMPORAL,$imgDecodificada)!==false )
		    {
		        //  Instanciamos fpdf para la creacion del documento y posteriormente agregarla la imagen
		        $pdf = new FPDF('p', 'mm', 'Letter');
		        $pdf->AddPage();
		        $pdf->Image(NOMBRETEMPORAL, 0, 0, 216, 279);
		        //Guardamos el documento en la carpeta  del tyai8e
		        $pdf->Output('f', $rutaDestino);

		        //  Eliminamos la imagen temporal.
		        unlink(NOMBRETEMPORAL);
		    }
		}


		$host = "sql5.freesqldatabase.com";
		$bd = "sql5407134";
		$usuario = "sql5407134";
		$contraseña = "WhUt6mIxKL";
		$conexion = mysqli_connect($host, $usuario, $contraseña, $bd);
		mysqli_query($conexion, "UPDATE documentose4 SET status=1, urlfirmado='$rutaDestino' WHERE IdDocumento='$id'");

		//Camiamos a la vista de 
		header('Location: http://127.0.0.1/tyai8e/index.php/ListaDocumentos');
	}
	
 ?>