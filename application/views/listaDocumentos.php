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

                <!-- Main content -->
                <section class="content">
                  <!-- Insertar contenido aqui -->
                      <main class="page landing-page">
                          <section class="text-justify clean-block features" style="background-color: #660708;height: 400px;">
                              <div class="container">
                                  <div class="block-heading" style="height: 500px;">
                                      <br><br>
                                      <h4 style="background-color: #660708;color: #ffffff;font-size: 68px;height: 150px;">Sección de Listado de Archivos</h4>
                                      <h2 class="text-info" style="color: #660708;"></h2><i class="icon-pencil icon" style="color: #ffffff;font-size: 30px;"></i>
                                      <p style="color: #ffffff;font-size: 26px;">En este apartado se puedes consultar los documentos pendientes por firmar.<br></p>
                                  </div>
                              </div>
                          </section>
                            <?php echo form_open('./ListaDocumentos/buscador');?>
                                <input type="text" style="margin: 18px;padding: 10px;background-color: #ffffff;color: #660708;font-size: 20px;" name="buscador">
                                <button type="submit" class="btn btn-primary" type="button" style="background-color: #660708;color: #ffffff;font-size: 24px;margin: 10px;">Buscar&nbsp;<i class="fa fa-search"></i></button>
                            <?php echo form_close();?>
                          <div
                              class="modal fade" role="dialog" tabindex="-1">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h4 class="modal-title">Modal Title</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                      <div class="modal-body">
                                          <p>The content of your modal.</p>
                                      </div>
                                      <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
                                  </div>
                              </div>
                              </div>
                              <!--Comment-->
                              <section class="clean-block about-us" style="color: #660708;">
                                  <div class="table-responsive" style="margin: 20px;padding: 0px;">
                                      <table class="table">
                                          <thead>
                                              <tr>
                                                  <th style="background-color: #660708;color: #ffffff;">
                                                      <h4 class="text-left" style="color: rgb(255,255,255);width: 200px;">Fecha&nbsp;&nbsp;<i class="fa fa-calendar"></i></h4>
                                                  </th>
                                                  <th style="background-color: #660708;color: #ffffff;">
                                                      <h4 style="color: rgb(255,255,255);">Matricula&nbsp;&nbsp;<i class="fa fa-user"></i></h4>
                                                  </th>
                                                  <th style="background-color: #660708;color: #ffffff;">
                                                      <h4 style="color: rgb(255,255,255);">Alumno&nbsp;&nbsp;<i class="fa fa-user"></i></h4>
                                                  </th>
                                                  <th style="background-color: #660708;color: #ffffff;">
                                                      <h4 style="color: rgb(255,255,255);">Documento&nbsp;&nbsp;<i class="fa fa-file-pdf-o"></i></h4>
                                                  </th>
                                                  <th style="background-color: #660708;color: #ffffff;">
                                                      <h4 style="color: rgb(255,255,255);">Acción&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></h4>
                                                  </th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                                <?php #print_r($documentos);?> 
                                                <?php 
                                                    if(isset($documentos)){ //verificacion: la variable ha sido declarada ¿?
                                                        foreach ($documentos as $key) { 
                                                ?>
                                                    <tr>
                                                        <?php 
                                                            if ($key['fechaDif'] >= 1 && $key['fechaDif'] <= 2)   {
                                                                //Se concatena y se evalua el tipo de fecha con la diferencia y se colorea dependiendo el tiempo.
                                                                echo '<td style="color: #ffffff;background-color: #5bda3c; text-align: center;">'.$key['fechaCarg'].'</td>';
                                                            } 
                                                            elseif ($key['fechaDif'] > 2 && $key['fechaDif'] <= 5) {
                                                                echo '<td style="color: #ffffff;background-color: #fe880a; text-align: center;">'.$key['fechaCarg'].'</td>';
                                                            }
                                                            else {
                                                                echo '<td style="color: #ffffff;background-color: #D80808; text-align: center;">'.$key['fechaCarg'].'</td>';
                                                            }
                                                            
                                                        ?>
                                                            <td><label style="color: #660708;font-size: 20px;"></label><label style="color: #660708;font-size: 20px;"><?= $key['matricula']; ?></label></td>
                                                            <td style="color: #660708;"><label style="color: #660708;font-size: 20px;"><?= $key['alumno']; ?></label></td>
                                                            <td style="color: #660708;"><label style="color: #660708;font-size: 20px;"><?= $key['titulo']; ?></label></td>
                                                            <td><button class="btn btn-primary text-left" type="button" style="background-color: #660708;"><a href="../index.php/firma/index/<?= $key['idDocumento']; ?>" style="color: white;">Firmar</a></button><i class="fa fa-arrow-down" style="height: 50px;width: 100px;filter: blur(0px);color: #660708;font-size: 30px;margin: 3px;"></i></td>
                                                    </tr>
                                                <?php 
                                                        }//End foreach
                                                    }//End if
                                                    //Validamos si la posicion $encontro fue declarada en el controlador
                                                    if (isset($encontro)) {
                                                        if ($encontro['estatus'] == FALSE) {
                                                            echo '<tr><td collspan="5">'.$encontro['info'].'</td></tr>';
                                                        }
                                                    }
                                                ?>
                                          </tbody>
                                      </table>
                                  </div>
                              </section>
                      </main>
                  </body>
                </section>
                <!-- /.content -->
            </div>

            <!-- ========== Footer ========== -->
            <?=$this->load->view('includes/footer', '', true) ?>

            <?=$this->load->view('includes/base_js', '', true) ?>
    </body>
</html>