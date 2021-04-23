<!doctype html>
<html lang="en">
<!-- ========== Created by Equipo6 ========== -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Historial</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/Aseets/docs/assets/css/styleicon.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="/styleicon.css">
</head>
<?=$this->load->view('includes/head', '', true) ?>
<body>

<!-- ========== Menu Izquierdo ========== -->
<?=$this->load->view('includes/menu_izdo', '', true) ?>

<!-- ========== Menu Superior ========== -->
<?=$this->load->view('includes/menu_sup', '', true) ?>

<!-- ========== Contenido ========== -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<section class="text-justify clean-block features" style="background-color: #660708;height: 100px;">
			<div class="container">
				<div class="block-heading" style="height: 100px;">
					<br><br>
					<h4 style="background-color: #660708;color: #ffffff;font-size: 30px;height: 50px;">Historial de documentos descargados</h4>
				</div>
			</div>
		</section>
	</div>

	<div class="row justify-content-center mt-5 mt-md-5">
		<div class="col-12">
			<!-- ========== CONTENIDO ========== -->
			<div class="row">
				<div class="col-12 col-lg-6 col-xl">

					<!-- Card -->
					<div class="features-boxed">
						<div class="container">
							<!-- Start: Intro -->
							<div class="intro"></div>
							<!-- End: Intro -->
							<!-- Start: Features -->
							<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
								<thead>
								<tr>
									<th>Documento</th>
									<th>Area</th>
									<th>Fecha de descarga</th>
									<th>Hora</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>Carta de aceptacion</td>
									<td>Direccion de carrera</td>
									<td>25/01/2020</td>
									<td>8:00 am</td>
								</tr>
								<tr>

									<td>Baja de asignatura</td>
									<td>Direccion de carrera</td>
									<td>15/02/2020</td>
									<td>7:00 am</td>
								</tr>
								<tr>
									<td>Carta de presentación</td>
									<td>Direccion de carrera</td>
									<td>05/10/2020</td>
									<td>10:00 am</td>
								</tr>

								</tbody>
							</table>
							<!-- End: Features -->
						</div>
					</div>


				</div>



			</div>



		</div>
		<!-- ========== /Contenido ========== -->
	</div>
</div> <!-- / .row -->
<!-- ========== Footer ========== -->
<?=$this->load->view('includes/footer', '', true) ?>

<?=$this->load->view('includes/base_js', '', true) ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
</body>
</html>
