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
               <main class="page landing-page">
                          <section class="text-justify clean-block features" style="background-color: #660708;height: 100px;">
                              <div class="container">
                                  <div class="block-heading" style="height: 100px;">
                                      <br><br>
                                      <h4 style="background-color: #660708;color: #ffffff;font-size: 30px;height: 50px;">BÚSQUEDA</h4>
                                  </div>
                              </div>
                          </section>
                          <section class="text-justify clean-block features">
                              <div class="container">
                              <h4 style="color: #595959;font-size: 20px">BÚSQUEDA POR NOMBRE</h4>
                              </div>
                           </section>
    <div class="col-12 col-lg-6 col-xl">
    <!-- Main content -->
    <section class="text-justify clean-block features">
        <div class="container-fluid">
            <form action="enhanced-results.html">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <input type="search" class="form-control form-control-lg" placeholder="Escriba el nombre del documento" value="">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-lg btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
            <!-- ========== CONTENIDO ========== -->
            <section class="text-justify clean-block features">
                <div class="container">
                    <h4 style="color: #595959;font-size: 20px">BÚSQUEDA POR FECHA</h4>
                </div>
            
              <div class="col-md-25 offset-md-5">
              <form action ="" method = "">
                <input type = "date" name = "fecha" style = "color: #ffffff; background-color: #660708;"/>
            </form>  
                 </div>
              </div>
              </section>

           
            <section class="text-justify clean-block features">
                <div class="container">
                    <h4 style="color: #595959;font-size: 20px"> </h4>
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
            </section>

            </div>
            <!-- ========== /Contenido ========== -->
            </div>
        </div> <!-- / .row -->
            <!-- ========== Footer ========== -->
            <?=$this->load->view('includes/footer', '', true) ?>

            <?=$this->load->view('includes/base_js', '', true) ?>
    </body>
</html>