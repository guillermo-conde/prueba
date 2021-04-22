<!doctype html>
<html lang="en">
<!-- ========== Created by Equipo6 ========== -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Documentos</title>
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
					<h4 style="background-color: #660708;color: #ffffff;font-size: 30px;height: 50px;">Documentos</h4>
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
							<div class="row justify-content-center features">
								<div class="col-sm-6 col-md-5 col-lg-4 item">
									<div class="box"><i class="fa fa-list-alt icon" style="color: rgb(238,20,20);"></i>
										<h3 class="name">Solicitud de recusamiento</h3><a class="btn btn-primary" role="button" href="<?= base_url('/PDF/solicitud_de_recursamiento.pdf')?>"  download="Solicitud_Recursamiento" style="background-color: rgb(116,120,125);">Descargar<br></a></div>
								</div>
								<div class="col-sm-6 col-md-5 col-lg-4 item">
									<div class="box"><i class="fa fa-list-alt icon" style="color: rgb(238,20,20);"></i>
										<h3 class="name">Solicitud de recuperacion final</h3><a class="btn btn-primary" role="button" href="<?= base_url('/PDF/solicitud_de_recursamiento.pdf')?>" download="Solicitud_Recursamiento" style="background-color: rgb(116,120,125);">Descargar<br></a></div>
								</div>
								<div class="col-sm-6 col-md-5 col-lg-4 item">
									<div class="box"><i class="fa fa-list-alt icon" style="color: rgb(238,20,46);"></i>
										<h3 class="name">Tramites</h3><button class="btn btn-primary" type="button" style="background-color: rgb(122,125,129);">Descargar<br></button></div>
								</div>
								<div class="col-sm-6 col-md-5 col-lg-4 item">
									<div class="box"><i class="fa fa-list-alt icon" style="color: rgb(238,20,20);"></i>
										<h3 class="name">Baja de asignatura</h3><a class="btn btn-primary" role="button" href="<?= base_url('/PDF/baja_de_asignatura.pdf')?>" download="Solicitud_baja"style="background-color: rgb(116,120,125);">Descargar<br></a></div>
								</div>
								<div class="col-sm-6 col-md-5 col-lg-4 item">
									<div class="box"><i class="fa fa-list-alt icon" style="color: rgb(238,20,20);"></i>
										<h3 class="name">Portafolio de evidencias de asesorias</h3><button class="btn btn-primary" type="button" style="background-color: rgb(135,137,139);">Descargar<br></button></div>
								</div>
							</div>
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

