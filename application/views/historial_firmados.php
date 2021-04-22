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
                                      <h4 style="background-color: #660708;color: #ffffff;font-size: 30px;height: 50px;">HISTORIAL</h4>
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
                                      <h6 class="card-title text-uppercase text-muted mb-2">
                                          Nombre del docente
                                      </h6>

                                      <!-- Heading -->
                                      <span class="h2 mb-0">
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
                                      <h6 class="card-title text-uppercase text-muted mb-2">
                                          MATRICULA
                                      </h6>

                                      <!-- Heading -->
                                      <span class="h2 mb-0">
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
                                      <h6 class="card-title text-uppercase text-muted mb-2">
                                          Periodo
                                      </h6>

                                      <div class="row align-items-center no-gutters">
                                          <div class="col-auto">

                                              <!-- Heading -->
                                              <select class="form-control form-control-sm">
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
                  <div class="table-responsive mb-0">
                      <table class="table table-sm table-nowrap card-table">
                          <thead>
                          <tr>
                              <th>
                                  NOMBRE DEL DOCUMENTO
                              </th>
                              <th>
                                  FECHA DE CARGA
                              </th>
                              <th>
                                  MOTIVO
                              </th>
                              <th>
                                  ARCHIVO
                              </th>
                          </tr>
                          </thead>
                          <tbody>                          
                          <tr>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                          </tr>
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
