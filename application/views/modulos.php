<!doctype html>
    <?=$this->load->view('includes/head', '', true) ?>
    <body>

            <!-- ========== Menu Izquierdo ========== -->
            <?=$this->load->view('includes/menu_izdo', '', true) ?>

            <!-- ========== Menu Superior ========== -->
            <?=$this->load->view('includes/menu_sup', '', true) ?>
            

            <div class="content-wrapper">
               <!-- Content Header (Page header) -->
               <div class="content-header">
                 <div class="container-fluid">
                   <div class="row mb-2">
                     <div class="col-sm-12">
  <!-- ========== Style ========== -->
            <style type="text/css">
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
  }
body{
    background: #F5F3F4;
  }
  .container{
    width: 200%;
    height: 100vh;
    padding: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
   
  .login-container{
    display: flex;
    width: 650px;
    height: auto;
    background: #fff;
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .2);
  }
   
  .register, .login{
    flex: 1;
  }
   
  .register{
    padding: 40px;
    position: relative;
  }
   
  .register h2{
    color: #797979;
    margin-bottom: 30px;
  }
  .register h3{
    color: #797979;
    margin-bottom: 30px;
  }
   
  .register input{
    width: 100%;
    padding: 5px;
    font-size: 16px;
    margin-bottom: 25px;
    border-top-style: none;
    border-left-style: none;
    border-right-style: none;
    border-bottom: 1px solid #a8a8a8;
    color: #333;
  }
   
  .register input:active,
  .register input:focus{
    outline: none;
  }
   
  .register .submit{
    width: auto;
    padding: 10px;
    background: #B1A7A6;
    color: #fff;
    font-size: 12px;
    box-shadow: 0 0 3px 0 rgba(0, 0, 0, .2);
    cursor: pointer;
  }
   
  .register::after{
    content: '>';
    position: absolute;
    width: 25px;
    height: 25px;
    top: 50%;
    right: -23px;
    padding: 10px;
    text-align: center;
    font-size: 19px;
    background: #f1f1f1;
    border-radius: 50%;
    transform: translateY(-50%);
    box-shadow: -1px 1px 3px 1px rgba(0, 0, 0, .2);
    color: #7c7c7c;
  }
   
  .login{
    background-image: linear-gradient(to bottom right, #E5383B, #E5383B);
    padding: 40px;
  }
   
  .login h2{
    color: #fff;
    margin-bottom: 45px;
  }
   
  .login button i{
    position: absolute;
    top: 12px; 
    left: 12px;
  }
   
  .login button{
    width: 100%;
    margin: 15px 0px;
    padding: 10px;
    box-shadow: 0 0 3px 0 rgba(0, 0, 0, .2);
    cursor: pointer;
    
  }
   
  .login .fb{
    background: #660708;
    border-style: none;
    color: #fff;
  }
   
  .login .tw{
    background: #A4161A;
    border-style: none;
    color: #fff;
  }
   
  .login .correo{
    background: #33d4ce;
    border-style: none;
    color: #fff;
  }
   
  @media only screen and (max-width: 540px){
    .login-container{
      display: block;
    }
   
    .register, .login{
      flex: none;
    }
   
    .register::after{
      top: unset;
      bottom: -25px;
      left: 50%;
      transform: translateX(-50%) rotate(90deg);
    }
  }
</style>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Untitled</title>
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
<!-- <h1>PROGRAMACIÓN WEB <div class="container-fluid"><img id="logouni" src="<?= base_url('assets/docs/assets/img/TI.jpeg' /*width="1052" height="200"*/)?>">
    <a class="navbar-brand" href="#" style="font-family: Raleway, sans-serif;font-size: 200px;width: 1052px;"></a></h1> -->
    <nav class="navbar navbar-light navbar-expand-md">
        <button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse show" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" href="Dashboard">DASHBOARD</a></li><li class="nav-item"><a class="nav-link" href="#">PROGRAMAS</a></li><li class="nav-item"><a class="nav-link" href="#">VIDEO CONFERENCIAS</a></li>
                    <li class="nav-item"><a class="nav-link" href="login">LOGIN</a></li>
                    <li class="nav-item"><a class="nav-link" href="usuarios">SIGN UP!</a></li>  
                    <li class="nav-item"><a class="nav-link" href="#">CONTACTO: (246 46) 5 13 00 Llamame bb ;)</a></li>
                    
                </ul>
        </div>
        </div>
    </nav>
    <div class="jumbotron" id="prmo">
        <h1 align="center">INGENIERÍA EN TECNOLOGÍAS DE LA INFORMACIÓN.</h1>
        <p align= "center"><br />El Ingeniero en Tecnologías de la Información es un profesional que se enfoca a la integración, implantación, operación y administración de sistemas informáticos empleando como herramienta principal las tecnologías computacionales,
            así como también operar y administrar las comunicaciones y telecomunicaciones.<br /><br /></p>
        <center><p><a class="btn btn-primary">Leer Mas</a></p></center>
    </div>
    <div class="container-fluid"><img id="logouni" src="<?= base_url('assets/docs/assets/img/escuela.jpeg')?>" width="1052" height="500">
    <a class="navbar-brand" href="#" style="font-family: Raleway, sans-serif;font-size: 10px;width: 559px;"></a>
    <center><img src="https://fondosmil.com/fondo/547.jpg" width="1052" height="25" ></center>

    <center><h1><strong>PROGRAMACIÓN WEB</strong></h1></center>
    <div class="container-fluid"><center><img id="logouni" src="<?= base_url('assets/docs/assets/img/Programacion.jpeg')?>" width="1052" height="320"></center>
    <a class="navbar-brand" href="#" style="font-family: Raleway, sans-serif;font-size: 100px;width: 112px;"></a>

    <p align="center"><br />PHP, es el más conocido y usado de los lenguajes de programación Web de servidor. ASP y JSP, son dos lenguajes de programación Web que actualmente esta siendo muy usados. Y MySQL, como lenguaje de programación para
        manejar bases de datos.<br /><br /></p>
        <center>
      <img src="https://fondosmil.com/fondo/547.jpg" width="1052" height="25" ></center>

    <center><h1><strong>ADMINISTRACIÓN DE PROYECTOS DE TI</strong></h1></center> 
    <div class="content-header"><div class="row mb-2"><div class="col-sm-12"><center><img id="logouni" src="<?= base_url('assets/docs/assets/img/Administracion.jpeg')?> "width="1052" height="320"></center>
    <a class="navbar-brand" href="#" style="font-family: Raleway, sans-serif;font-size: 212px;width: 158px;"></a>
    
    <p align="center">El director de gestión de proyectos TI debe tener en cuenta factores como el alcance del proyecto, su cronograma, sus costes, su calidad, la gestión de recursos humanos, comunicación, riesgos, adquisiciones, partes
        interesadas o integración del proyecto.<br /><br /></p>
        <center>
      <img src="https://fondosmil.com/fondo/547.jpg" width="1052" height="25" ></center>
    
    <center><h1><strong>ENGLISH VII</strong></h1></center>
    <div class="container-fluid"><center><img id="logouni" src="<?= base_url('assets/docs/assets/img/Ingles.jpeg')?>" width="1052" height="320"></center>
    <a class="navbar-brand" href="#" style="font-family: Raleway, sans-serif;font-size: 212px;width: 158px;"></a>

    <p align="center"><br />El inglés es el idioma de la comunicación internacional, del comercio y las finanzas. El inglés es una lengua franca en muchos rincones del planeta y el idioma oficial de muchas Organizaciones Internacionales
        como la Unión Europea, Naciones Unidas o la Unesco.<br /><br /></p>

        <center>
      <img src="https://fondosmil.com/fondo/547.jpg" width="1052" height="25" ></center>

    <center><h1><strong>SISTEMAS INTELIGENTES</strong></h1></center>
    <div class="container-fluid"><center><img id="logouni" src="<?= base_url('assets/docs/assets/img/sistemas.jpeg')?>" width="1052" height="320"></center>
    <a class="navbar-brand" href="#" style="font-family: Raleway, sans-serif;font-size: 212px;width: 158px;"></a>
    
    <p align="center">Un sistema inteligente es un programa de computación que reúne características y comportamientos asimilables al de la inteligencia humana o animal. La expresión &quot;<strong>sistema inteligente</strong>&quot; se usa a veces para sistemas inteligentes incompletos,
        por ejemplo para una casa inteligente o un sistema experto.<br /><br /></p>

        <center>
      <img src="https://fondosmil.com/fondo/547.jpg" width="1052" height="25" ></center>

    <center><h1><strong>TECNOLOGÍA Y APLICACIONES DE INTERNET</strong></h1></center>
    <div class="container-fluid"><center><img id="logouni" src="<?= base_url('assets/docs/assets/img/Aplicaciones.jpeg')?>" width="1052" height="320"></center>
    <a class="navbar-brand" href="#" style="font-family: Raleway, sans-serif;font-size: 212px;width: 158px;"></a>

    <p align="center">Tecnologías de gestión y control. Aplicaciones para la identificación, la percepción, la posición, rastreo y distribución. La tecnología RFID. Tecnología GPS. El Cloud Computing o
        Nube. La Plataforma de Servicios de Información.<br /><br /></p>
    
        <center>
      <img src="https://fondosmil.com/fondo/547.jpg" width="1052" height="25" ></center>


    <center><h1><strong>TECNOLOGÍA DE VIRTUALIZACIÓN</strong></h1></center>
    <div class="container-fluid"><center><img id="logouni" src="<?= base_url('assets/docs/assets/img/Tecnologias.jpeg')?>" width="1052" height="320"></ceneter>
    <a class="navbar-brand" href="#" style="font-family: Raleway, sans-serif;font-size: 212px;width: 158px;"></a>

    <p align="center">La virtualización utiliza el software para imitar las características del hardware y crear un sistema informático virtual. Esto permite a las organizaciones de TI ejecutar más de un sistema virtual, y múltiples sistemas operativos
        y aplicaciones, en un solo servidor.<br /><br /></p>
    
        <center>
      <img src="https://fondosmil.com/fondo/547.jpg" width="1052" height="25" ></center>

    <center><h1><strong>GESTIÓN DE DESARROLLO DE SOFTWARE</strong></h1></center>
    <div class="container-fluid"><center><img id="logouni" src="<?= base_url('assets/docs/assets/img/Gestion de desarrollo.jpeg')?>" width="1052" height="320"></center>
    <a class="navbar-brand" href="#" style="font-family: Raleway, sans-serif;font-size: 1100px;width: 25px;"></a>

    <p align="center">Una sola plataforma en la nube para consolidar herramientas fragmentadas y sistemas legacy. Cuando el trabajo fluye puedes dedicar más tiempo a enfocarte en lo que realmente importa. TI estratégico y veloz.  Mejores prácticas.<br
        /><br /></p>
    <div class="container"><input type="hidden" /></div>
</body>

</html>