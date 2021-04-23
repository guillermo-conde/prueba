<aside class="main-sidebar elevation-4">

<link rel="stylesheet" href="sidemain.css">

    <!-- Brand Logo -->
    <center><img src="<?= base_url('assets/docs/assets/img/logo_uptx.png')?>"  width=200px  height=90px class="logo"/></center>

    <!-- Sidebar -->
    <div id="sidebar">
      <!-- Sidebar user panel (optional) 
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="#" class="d-block"></a>
        </div> -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          

         <li class="nav-item">
            <a href="<?= base_url('index.php/Dashboard')?>" class="nav-link">
             
              
            <ion-icon name="apps-outline"></ion-icon>
              <p>
                Dashboard
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('index.php/Busqueda')?>" class="nav-link">
              
            <ion-icon name="search-outline"></ion-icon>


              <p>
                Busqueda
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
          <a href="<?= base_url('index.php/Documentosafirmausuario')?>" class="nav-link">
          <ion-icon name="folder-open-outline"></ion-icon>

              <p>
                Archivos para Firmar 
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
          <a href="<?= base_url('index.php/ListaDocumentos')?>" class="nav-link">
          <ion-icon name="document-text-outline"></ion-icon>

              <p>
                Listado de archivos
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
          <a href="<?= base_url('index.php/GenOficios')?>" class="nav-link">
          <ion-icon name="document-text-outline"></ion-icon>

              <p>
                Documentos
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
         
          <li class="nav-item">
          <a href="<?= base_url('index.php/')?>" class="nav-link">
          <ion-icon name="cloud-upload-outline"></ion-icon>

              <p>
                Alta de documentos docentes
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
          <a href="<?= base_url('index.php/')?>" class="nav-link">
          <ion-icon name="cloud-upload-outline"></ion-icon>

              <p>
                Alta de archivos alumnos 
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
          <a href="<?= base_url('index.php/')?>" class="nav-link">
          <ion-icon name="file-tray-full-outline"></ion-icon>

              <p>
                Listado de documentos firmados historial
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
          <a href="<?= base_url('index.php/')?>" class="nav-link">
          <ion-icon name="file-tray-full-outline"></ion-icon>

              <p>
                Listado de oficios historial
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <script src="sidemain.js" charset="utf-8"></script>
    
    <!-- /.sidebar -->
  </aside>


  <style>

ion-icon {
  color: red;
}

  </style>
