<!doctype html>
<html lang="en">
    <?=$this->load->view('includes/head', '', true) ?>
    <body>


            <!-- ========== Contenido ========== -->
            
           
        
           
            <div class="content-wrapper">
               <!-- Content Header (Page header) -->
               <div class="content-header">
                 <div class="container-fluid">
                   <div class="row mb-2">
                     <div class="col-sm-5">
			<div class="container">


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
<body>
  <!---<img src="universidad.png"---->
  <div class="box"></div>
  
   <div class="container">
     <div class="login-container">
       <div class="register">
         <h2>ACCESO AL SISTEMA</h2>
         
         <h3>UNIVERSIDAD POLITECNICA DE TLAXCALA</h3>
         <form action="">
           <input type="text" placeholder="Matrícula" class="nombre">
           
           <input type="password" placeholder="Contraseña" class="pass">
           	<!-- inicio de sesion -->
							<button type="submit" class="btn btn-danger">
								Iniciar sesion
							</button> 
              <!-- exit -->
							<button type="button" value="Página anterior" onClick="history.go(-1);" class="btn btn-primary">
								Salir
							</button>
               <!-- Form text -->
								<small class="form-text text-muted">
¿Olvidaste tu contraseña?						</small>
           
           
           
         </form>
       </div>
       <div class="login">
         <center><h2>¿No tienes una cuenta?</h2></center>
         <div class="login-items">
         <center>
      <img src="https://img.icons8.com/bubbles/452/cloud-account-login-male.png" width="105" height="105" ></center>
        <center> <a href="usuarios"><input type="button" class="btn btn-primary" value="Registrarse como alumno"></center>
         <center>
      <img src="https://i.pinimg.com/originals/d9/c8/4a/d9c84abcf4b69b73c59b1c28682f47cd.png" width="190" height="105" ></center>
         <center><a href="profesores"><input type="button" class="btn btn-primary" value="Registrarse como docente"></center>

      
         </div>
       </div>
     </div>
   </div>
</body>








            <?=$this->load->view('includes/base_js', '', true) ?>
    </body>
</html>
