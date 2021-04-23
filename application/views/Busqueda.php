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
                                      <h4 style="background-color: #660708;color: #ffffff;font-size: 30px;height: 50px;">BÚSQUEDA <i class="fa fa-search"></i> </h4>
                                  </div>
                              </div>
                          </section>
                          <section class="text-justify clean-block features">
                              <div class="container">
                              <br>
                              <h4 style="color: #595959;font-size: 20px">BÚSQUEDA POR NOMBRE</h4>
                              </div>
                           </section>
    <div class="col-12 col-lg-6 col-xl">
    <!-- Main content -->
    <section class="principal">
</section>

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
                  <div class="table-responsive" style="margin: 20px;padding: 0px;">
                  <table id="datatable" class=" table-nowrap card-table">
                          <thead>
                          <th style="background-color: #660708;color: #ffffff;">
                          <h4 class="text-left" style="color: rgb(255,255,255); font-size: 22px; width: 300px;">NOMBRE DEL DOCUMENTO&nbsp;&nbsp;<i class="fa fa-file-alt"></i></h4>
                        </th>
                        <th style="background-color: #660708;color: #ffffff;">
                        <h4 style="color: rgb(255,255,255); font-size: 22px; width: 200px;">FECHA DE CARGA&nbsp;&nbsp;<i class="fa fa-calendar"></i></h4>
                        </th>
                        <th style="background-color: #660708;color: #ffffff;">
                        <h4 style="color: rgb(255,255,255); font-size: 22px; width: 200px;">MOTIVO&nbsp;&nbsp;<i class="fa fa-sticky-note"></i></h4>
                        </th>
                        <th style="background-color: #660708;color: #ffffff;">
                        <h4 style="color: rgb(255,255,255); font-size: 22px; width: 190px;">ESTADO&nbsp;&nbsp;<i class="fa fa-info-circle"></i></h4>
                        </th>
                        <th style="background-color: #660708;color: #ffffff;">
                        <h4 style="color: rgb(255,255,255); font-size: 22px; width: 180px;">ARCHIVO&nbsp;&nbsp;<i class="fa fa-file-alt"></i></h4>
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