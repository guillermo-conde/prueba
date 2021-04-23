<!doctype html>
<html lang="en">
    <?=$this->load->view('includes/head', '', true) ?>    
    <?=header('Access-Control-Allow-Origin: *');?>
    
    <body>

            <!-- ========== Menu Izquierdo ========== -->
            <?=$this->load->view('includes/menu_izdo', '', true) ?>

            <!-- ========== Menu Superior ========== -->
            <?=$this->load->view('includes/menu_sup', '', true) ?>

            <!-- ========== Contenido ========== -->
           <div class="content-wrapper">
               <!-- Content Header (Page header) -->
               <div class="content-header">
                 <div class="container-fluid">
                   <div class="row mb-2">
                     <div class="col-sm-12">
                       
                       <section class="clean-block clean-hero" style="background-image: linear-gradient(rgba(102,7,8,0.5),rgba(102,7,8,0.5)),url(<?= base_url('assets/image4.jpg')?>);color:#fff;">
                           <div class="text">
                               <h2 style="font-size: 64px; text-align: center;"><br>Sección de Firma de Archivos<br><br></h2><i class="fa fa-pencil" style="font-size: 40px;"></i>
                               <p style="font-size: 34px;text-align: center;"><br>Crea tu firma y colócala en el documento.<br><br></p>
                           </div>
                       </section>
                     </div><!-- /.col -->
                   </div><!-- /.row -->
                 </div><!-- /.container-fluid -->
               </div>
               <!-- /.content-header -->

               <!-- Main content -->
               <section class="content">

                <section class="d-xl-flex justify-content-xl-center clean-block features" style="width: 97%;margin: 10px;">
                    <div class="container" style="width: 100%;">
                        <div class="table-responsive" style="width: 100%;height: 1000px;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="background-color: #660708;color: #ffffff;font-size: 24px;">Archivo</th>
                                        <th class="text-center" style="color: #ffffff;background-color: #660708;font-size: 24px;">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                          <canvas style="border: solid 1px black;" id="canvasPDF" width="612" height="792" ondrop="drop(event)" ondragover="allowDrop(event)"></canvas>
                                          <img src="" alt="" id="prueba">
                                        <td style="height: 100px;" width="700" height="0">
                                          <label class="d-lg-flex justify-content-lg-center" style="color: #660708;font-size: 20px;">Dibuja tu firma:</label>

                                          <canvas style=";background: #fff;border: solid 2px #000; cursor: crosshair; margin-left: 110px;" id="canvas" width="225" height="100">
                                          </canvas>
                                          <div style="display: flex;">
                                            <div style="width: 50%;">
                                              <p style="text-align: center;">Color de la pluma</p>
                                              <div style="display: flex; justify-content: space-around;">
                                                <button class="btn btn-primary d-lg-flex justify-content-lg-center"
                                                type="button" style="background-color: #660708;" id="colorNegro">Negro</button>
                                                <button class="btn btn-primary d-lg-flex justify-content-lg-center"
                                                type="button" style="background-color: #660708;" id="colorAzul">Azul</button>
                                              </div> 
                                            </div>
                                            <div style="width: 50%;">
                                              <p style="text-align: center;">Acciones</p>
                                              <div style="display: flex; justify-content: space-around;">
                                                <button class="btn btn-primary d-lg-flex justify-content-lg-center"
                                                type="button" style="background-color: #660708;" id="limpiarLienzo">Limpiar</button>
                                                <button class="btn btn-primary d-lg-flex justify-content-lg-center"
                                                type="button" style="background-color: #660708;" id="transfPng">Guardar Firma</button>
                                              </div> 
                                            </div>
                                          </div>

                                          <img src="" alt="Una vez confirmada la firma, aquí podrá visualizarla y arrastrarla hacia el documento." id="imgFirma" width="225" height="100" style="border: solid 1px #660708; margin-top: 30px; margin-left: 110px"  ondragstart="drag(event)">
                                          <form method="post" action="<?= base_url('assets/actualizacionPDF.php')?>" id="cargaImgServer">
                                            <textarea name="urlImgFirma" id="urlImgFirma" style="display: none;"></textarea>
                                            <textarea name="tituloDocumento" id="tituloDocumento" style="display: none;"></textarea>
                                            <textarea name="baseUrl" id="baseUrl" style="display: none;"><?php echo base_url(); ?></textarea>
                                            <input type="text" name="id" id="id" style="display: none;" value="<?php echo$documento->IdDocumento; ?>"></input>                                            
                                            <input  class="btn btn-primary text-center d-xl-flex justify-content-xl-center" type="submit" style="margin: 100px;padding: 6px;width: 250px;background-color: #660708;font-size: 20px; text-align: center;" id="actDocumento" value="Actualizar Documento"></input> 
                                          </form>
                                                                                    
                                        </td>
                                    </tr>
                                    <tr></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
               <!-- /.content -->
           </div>

            <!-- ========== Footer ========== -->
            <?=$this->load->view('includes/footer', '', true) ?>

            <script type="text/javascript">
              var base_url = '<?php echo base_url(); ?>';
              var documento_url = '<?php echo $documento->url; ?>';
              var documento_nombre = '<?php echo $documento->titulo; ?>';
              </script>
            <script type="text/javascript" src="<?= base_url('assets/pdf.js')?>"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.debug.js"></script>
            <script type="text/javascript" src="<?= base_url('assets/plugins/equipo4/incrustarPDF.js')?>"></script>
            <script type="text/javascript" src="<?= base_url('assets/plugins/equipo4/dibujarFirma.js')?>"></script>
            <script type="text/javascript" src="<?= base_url('assets/plugins/equipo4/arrastrarFirma.js')?>"></script>
            <script type="text/javascript" src="<?= base_url('assets/plugins/equipo4/exportarPDF.js')?>"></script>
             <?=$this->load->view('includes/base_js', '', true) ?> 
    </body>
</html>