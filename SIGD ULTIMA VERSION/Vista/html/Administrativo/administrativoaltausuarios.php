
<?php

@include '../../Controlador/db.php';

session_start();


?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" >
        <link rel="stylesheet" href="../../../Vista/css/css_personalizado.css">
        <link rel="icons" href="../../../../Vista/html/img/logo.png">
        <title>S.I.G.D - Administrativo Alta de usuarios</title>
    </head>
    <body>
    



    
  <nav class="navbar navbar-expand-lg  navbar-dark" >

    <img class="navbar-brand logo-navbar" src="../../img/logo.png" alt="">

    <a class="navbar-brand d-flex justify-content-start m-3 " href="../Administrativo/administrativo.php">S.I.G.D</a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <!-- <span class="navbar-toggler-icon"></span> -->
      <img class="collapse-icon d-flex justify-content-center " src="../../icons/navbarcollapse.png" alt="">
    </button>


     <div class="">

    </div>

    <div class="collapse navbar-collapse  " id="navbarNavDropdown">

      <ul class="navbar-nav ml-5 d-flex justify-content-end">


      <li class="nav-item d-flex ">

<a class="nav-link " href="../Administrativo/administrativo.php">Inicio </a>

</li>

<li class="nav-item">

<a class="nav-link" href="../Administrativo/administrativodeportes.php">Deportes</a>
</li>
      
      </ul>

      <div class="col-xl-6 "> 

        <form class="  ml-4 d-flex justify-space-between col-md-10  " action="../html/datojugador.html" method="post">
         <input class="form-control mr-2" type="search" name="busqueda" placeholder="Ingresar cedula para ver estadisticas del jugador" aria-label="Search" required>
         
         <div class="boton-buscar"> 

         <button class="btn btn-dark" type="submit" name="enviar">Buscar</button>
         </div>
       </form>
       </div>

      </div>


  </nav>


  <div class="action">
    <div class="profile" onclick="menuToggle();">
        <img src="../../icons/user-image.png" alt="">
    </div>

    <div class="menu">
        <ul class="d-flex  flex-column">
           
              <li>
                <span class="SpanProfile">Nombre : </span>
                <?php echo $_SESSION['user_name'] ?>
              </li>

              <li> 
                <span>Rol  : </span>  
                <?php echo $_SESSION['user_type'] ?>
              </li>

          </ul>
        
        <ul>
        <li>
              <img class="icon-img" src="../../icons/user.png" alt=""> 
                <a href="../Administrativo/administrativomicuenta.php">Mi cuenta</a>
          </li>
          <li>
               <img class="icon-img" src="../../icons/configuracion.png" alt=""> 
               <a href="../Administrativo/administrativoaltausuarios.php">Cargar Usuario</a>
          </li>
          <li>
               <img class="icon-img" src="../../icons/log-out.png" alt="">
              <a href="../../../Controlador/logout.php">Cerrar Sesión</a>
          </li>
      </ul>
    </div>
</div>



 
<div class="container-fluid d-flex contenido-general ">




<div class="Form_Container d-flex">



<form action="../../../Controlador/altausuarios.php" method="post" class="">

<div class="Form_Title">
<h1>Registro de usuario</h1>
</div>


   <?php
   if(isset($error)){
      foreach($error as $error){
         echo '<span class="error-msg">'.$error.'</span>';
      };
   };
   ?>

  <div class="input_registro d-flex justify-content-center">
    <input type="text" name="ci" required placeholder="Ingrese CI">
  </div >
  <div class="input_registro d-flex pt-3 justify-content-center">
   <input type="text" name="name" required placeholder="Ingrese Nombre">
   </div>
  <div class="input_registro d-flex pt-3 justify-content-center">
   <input type="text" name="apellido" required placeholder="Ingrese Apellido">
   </div>
  <div class="input_registro d-flex pt-3 justify-content-center">
   <input type="email" name="email" required placeholder="Ingrese Email">
  </div>
  <div class="input_registro d-flex pt-3 justify-content-center">
   <input type="password" name="password" required placeholder="Ingrese Contraseña">
  </div>
  <div class="input_registro d-flex pt-3 justify-content-center">
   <input type="password" name="cpassword" required placeholder="Confirme Contraseña">
  </div>

  <div class="input_registro d-flex pt-3 justify-content-center">
    <label for="TipoUsuario">Tipo: </label>
   <select name="user_type" id="TipoUsuario">
      <option value="Usuario">Usuario</option>
      <option value="Admin">Admin</option>
      <option value="Administrativo">Administrativo</option>
      <option value="DirectorT">DirectorT</option>
      <option value="Jugador">Jugador</option>
      <option value="Analista">Analista</option>
      <option value="Analista">Juez</option>
   </select>
  </div>

  <div class="input_registro d-flex pt-3">
   <input type="submit" name="submit" value="Registrar" class="form-btn ">
  </div>
</form>


</div>




</div>






<footer class="footer "> 
    
  <div class="container-fluid d-flex align-items-center justify-content-center mt-4 ">
  <h1 class="footer_txt ">Copyright © RECODE 2022</h1>
  </div>

</footer>





      <!-- BOOTSTRAP SCRIPTS -->


      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  
   <!-- JS -->

   <script src="../../js/usermenu.js"></script>
  
  

</body>
</html>