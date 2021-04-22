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
            <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<style type="text/css">
.conte{
    background : #800000;
    height: 250px;
}
.titles{
    text-align: center;
    font-size: 50px;
    color: #F8F1F1;
    font-family: 'Times New Roman', Times, serif;
}
.subtitle{
    text-align: center;
    font-size: 25px;
    color: #F8F1F1;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.con{
    height:300px;
}
.bus{
    margin: 10px;
    padding: 5px;
    background-color: black;
    color: white;
    font-size: 20px;
    border-radius: 8px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.table{
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 20px;
    color:white;
}
.t{
    background-color: #800000;
    color:white;
}
.folio{
    text-align:center;
    font-family:font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size:22px;

}
.aceptable{
    color: #800000;
    background-color:;
    border:none;
    border-radius:5px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.revicion{
    background: #FF5733;
    border-radius:10px;
    font-size:20px;
    text-align:center;
    height:25px;
    color: white;
}
.concluido{
    background: #75D60D;
    border-radius:10px;
    font-size:20px;
    text-align:center;
    height:25px;
}
</style>
                <!-- Main content -->
                <section class="content">
                  <!-- Insertar contenido aqui -->
                      <main class="page landing-page">
                          <section class="conte" >
                              <div class="container">
                                  <div class="con">
                                      <br><br>
                                      <h4 class="titles">Listado de archivos para firma de Usuario</h4>
                                      <br>
                                      <p class="subtitle">Documentos mandados a firma para el Estudiante</p>
                                  </div>
                              </div>
                          </section>
                              <!--Comment-->
                              <section class="clean-block about-us" style="color: #800000; margin:30px">
                                  <div class="table-responsive">
                                      <table class="table">
                                          <thead>
                                              <tr>
                                                  <td class="t">ID</td>
                                                  <td class="t">TITULO</td>
                                                  <td class="t">DESCRIPCION</td>
                                                  <td class="t">URL</td>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <?php foreach($files->result() as $files){?>
                                              <tr class="folio">
                                                  <td><?= $files->id ?></td>
                                                  <td ><?= $files->title ?></td>
                                                  <td><?= $files->descripcion ?></td>
                                                  <td><a href="<?=$files->url?>"><?=$files->url?></a></td>
                                              </tr>
                                             <?php }?> 
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
