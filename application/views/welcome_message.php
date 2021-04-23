<!doctype html>
<html lang="en">
    <?=$this->load->view('includes/head', '', true) ?>
    <body>

            <!-- ========== Menu Izquierdo ========== -->
            <?=$this->load->view('includes/menu_izdo', '', true) ?>

            <!-- ========== Menu Superior ========== -->
            <?=$this->load->view('includes/menu_sup', '', true) ?>

            <!-- ========== Footer ========== -->
            <?=$this->load->view('includes/footer', '', true) ?>

            <!-- ========== Contenido ========== -->
            <?=$this->load->view('includes/contenido', '', true) ?>

            <?=$this->load->view('includes/base_js', '', true) ?>
    </body>
</html>