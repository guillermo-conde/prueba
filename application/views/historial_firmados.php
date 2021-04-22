<!doctype html>
<html lang="en">
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
                                      <h4 style="background-color: #660708;color: #ffffff;font-size: 30px;height: 50px;">HISTORIAL <i class="fa fa-history"></i></h4>
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
                      <div class="card">
                          <div class="card-body">
                              <div class="row align-items-center">
                                  <div class="col">

                                      <!-- Title -->
                                      <h3 class="card-title text-uppercase text-muted mb-2"><i class="fa fa-user-tie"></i>
                                          Nombre
                                      </h3>

                                      <!-- Heading -->
                                      <span class="h3 fe fe-user text-muted mb-0"></span>
                                    <br>
                                    <?php foreach ($datos as $key => $estudiante): ?>
                                        
                                      <?php echo(ucwords(strtolower($estudiante->NOMBRE." ".$estudiante->APP." ".$estudiante->APM))); ?>
                                    <?php endforeach ?>
                                      </span>

                                  </div>

                                  <div class="col-auto">

                                      <!-- Icon -->
                                      <span class="h2 fe fe-user text-muted mb-0"></span>

                                  </div>

                              </div> <!-- / .row -->

                          </div>
                      </div>

                  </div>
                  <div class="col-12 col-lg-6 col-xl">

                      <!-- Card -->
                      <div class="card">
                          <div class="card-body">
                              <div class="row align-items-center">
                                  <div class="col">

                                      <!-- Title -->
                                      <h6 class="card-title text-uppercase text-muted mb-2"><i class="fa fa-file-alt"></i> 
                                          MATRICULA
                                      </h6>

                                      <!-- Heading -->
                                      <span class="h3 fe fe-user text-muted mb-0"></span>
                                      <br>
                                      <?php foreach ($datos as $key => $estudiante): ?>
                                          <?php echo $estudiante->MATRICULA ?>
                                        <?php endforeach ?>
                                      </span>

                                  </div>
                                  <div class="col-auto">

                                      <!-- Icon -->
                                      <span class="h2 fe ion-document-text text-muted mb-0"></span>

                                  </div>
                              </div> <!-- / .row -->

                          </div>
                      </div>
                  </div>
               
                  <div class="col-12 col-lg-6 col-xl">
                      <!-- Card -->
                      <div class="card">
                          <div class="card-body">
                              <div class="row align-items-center">
                                  <div class="col">

                                      <!-- Title -->
                                      <h6 class="card-title text-uppercase text-muted mb-2"><i class="fa fa-clipboard-list"></i> 
                                          Periodo 
                                      </h6>
                                      <br>
                                      <div class="row align-items-center no-gutters">
                                          <div class="col-auto">

                                              <!-- Heading -->
                                              <select class="form-control form-control-sm">
                                              <?php foreach ($idperiodos as $key => $periodos): ?>
                                                    <option value="<?php $periodos->IdPeriodo ?>"><?php echo(ucwords(strtolower($periodos->Periodo))); ?></option>
                                                <?php endforeach ?>
                                              </select>

                                          </div>
                                          <div class="col">


                                          </div>
                                      </div> <!-- / .row -->

                                  </div>
                                  <div class="col-auto">

                                      <!-- Icon -->
                                      <span class="h2 fe ion-calendar text-muted mb-0"></span>

                                  </div>
                              </div> <!-- / .row -->

                          </div>
                      </div>

                  </div>
              </div>

              <div class="card">
                  <div class="table-responsive" style="margin: 20px;padding: 0px;">
                  <table id="datatable" class=" table-nowrap card-table">
                          <thead>
                          <th style="background-color: #660708;color: #ffffff;">
                          <h4 class="text-left" style="color: rgb(255,255,255); font-size: 20px; width: 300px;">NOMBRE DEL DOCUMENTO&nbsp;&nbsp;<i class="fa fa-file-alt"></i></h4>
                        </th>
                        <th style="background-color: #660708;color: #ffffff;">
                        <h4 style="color: rgb(255,255,255); font-size: 20px; width: 200px;">FECHA DE CARGA&nbsp;&nbsp;<i class="fa fa-calendar"></i></h4>
                        </th>
                        <th style="background-color: #660708;color: #ffffff;">
                        <h4 style="color: rgb(255,255,255); font-size: 20px; width: 200px;">MOTIVO&nbsp;&nbsp;<i class="fa fa-sticky-note"></i></h4>
                        </th>
                        <th style="background-color: #660708;color: #ffffff;">
                        <h4 style="color: rgb(255,255,255); font-size: 20px; width: 190px;">ESTADO&nbsp;&nbsp;<i class="fa fa-info-circle"></i></h4>
                        </th>
                        <th style="background-color: #660708;color: #ffffff;">
                        <h4 style="color: rgb(255,255,255); font-size: 20px; width: 180px;">ARCHIVO&nbsp;&nbsp;<i class="fa fa-file-alt"></i></h4>
                        </th>
                          </tr>
                          </thead>
                          <tbody>   
                          <?php foreach ($IdAlumno as $key => $estudiante): ?> 
                          <?php foreach ($IdDocumento as $key => $documentos): ?>
                          
                                            
                          <tr class="fila">
                      
                            <td>                           
                            <?php if($documentos->Matricula==$estudiante->MATRICULA){
                                    echo(ucwords(strtolower($documentos->NombreDoc)));
                                } 
                                ?>

                              </td> 
                              <td>
                              <?php if($documentos->Matricula==$estudiante->MATRICULA){
                                    echo(ucwords(strtolower($documentos->Fecha_Carga)));
                                } 
                                ?>
                              </td>     
                              <td>
                              <?php if($documentos->Matricula==$estudiante->MATRICULA){
                                    echo(ucwords(strtolower($documentos->Motivo)));
                                } 
                                ?>
                              </td>
                              <td>
                              <?php if($documentos->Matricula==$estudiante->MATRICULA){
                                    echo(ucwords(strtolower($documentos->Estatus_Firmado)));
                                } 
                                ?>
                              </td>  
                              <td>
                              <?php if($documentos->Matricula==$estudiante->MATRICULA){
                                    echo(ucwords(strtolower($documentos->Ruta_archivo)));
                                } 
                                ?>
                              </td> 
                                   
                          </tr>
                          <?php endforeach ?>
                          <?php endforeach ?>
                          </tbody>
                      </table>
                  </div>
              </div>

            </div>
            <!-- ========== /Contenido ========== -->
            </div>
        </div> <!-- / .row -->
            <!-- ========== Footer ========== -->
            <?=$this->load->view('includes/footer', '', true) ?>

            <?=$this->load->view('includes/base_js', '', true) ?>
    </body>
</html>