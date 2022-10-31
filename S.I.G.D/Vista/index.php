
          <?php
  include ('../Controlador/login.php'); 
  
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" >
    <link rel="stylesheet" href="./css/css_personalizado.css">
    <link rel="icons" href="./img/logo.png">
    <title>S.I.G.D - Inicio</title>
</head>
<body>
    
      <!-- NAVBAR -->

       <nav class="navbar navbar-expand-lg  navbar-dark  " >


      <img class="navbar-brand logo-navbar" src="./img/logo.png" alt="">

        <a class="navbar-brand d-flex justify-content-start m-3 " href="./Index.php">S.I.G.D</a>


      

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon"></span> -->
          <img class="collapse-icon d-flex justify-content-center " src="./icons/navbarcollapse.png" alt="">
        </button>

     
        <div></div> 

          
        <div class="collapse navbar-collapse  " id="navbarNavDropdown">


         

          <ul class="navbar-nav ml-5 d-flex justify-content-end">


            <li class="nav-item d-flex ">

              <a class="nav-link " href="./index.php">Inicio </a>

            </li>
            <li class="nav-item">

              <a class="nav-link" href="./html/deportes.html">Deportes</a>
            </li>

           
            

           

            

          
          </ul>

          <div class="col-xl-6 "> 


          

            <form class="  ml-4 d-flex justify-space-between col-md-10  " action="../frontend/html/datojugador.html" method="post">
             <input class="form-control mr-2" type="search" name="busqueda" placeholder="Ingresar cedula para ver estadisticas del jugador" aria-label="Search" required>
             
             <div class="boton-buscar"> 
 
             <button class="btn btn-dark" type="submit" name="enviar">Buscar</button>
             </div>
           </form>
           </div>


            </div>
          

        
        
        


       </nav>

      <!-- BIENVENIDA CON LOGIN O REGISTRO -->

       <div class="home-banner">

      <div class="content ">

    
      <div class="d-flex btn-container flex-column">

        <h1>Bienvenido al S.I.G.D</h1>
        <p>¡Inicie sesión para acceder al sistema!</p>



        <div class="form-container">

<form action="" method="post">
   <h3>Iniciar Sesion</h3>
   <?php
   if(isset($error)){
      foreach($error as $error){
         echo '<span class="error-msg">'.$error.'</span>';
      };
   };
   ?>
   <input type="email" name="email" required placeholder="Ingresar email">
   <input type="password" name="password" required placeholder="Ingresar contraseña">
   <input type="submit" name="submit" value="Iniciar sesion" class="form-btn">
   <p>No tienes cuenta? Registrarse ahora</p>
</form>

</div>


<div class="form-container">

   <form action="../Controlador/registro.php" method="post">
      <h3>Registrarse</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Ingrese su nombre">
      <input type="email" name="email" required placeholder="Ingrese su email">
      <input type="password" name="password" required placeholder="Ingrese su contraseña">
      <input type="password" name="cpassword" required placeholder="Confirme su contraseña">
      <select name="user_type">
         <option value="user">usuario</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>Ya tiene una cuenta? Inicia sesion!</a></p>
   </form>

</div>





       </div>

       </div>


       </div>
  

      <!-- PARTIDOS YA JUGADOS -->


        <section class="product"> 
  <h2 class="product-category">Partidos ya jugados</h2>
  <button class="pre-btn"><img src="./img/arrow.png" alt=""></button>
  <button class="nxt-btn"><img src="./img/arrow.png" alt=""></button>
  <div class="product-container">

      <div class="product-card">

          <div class="product-image">
            <div class="container-fluid d-flex  ">


              <div class="columna1">
            
            
              <div class="match-item m-4">
            
                <div class="container-match">
                  <!-- code here -->
                  <div class="match">
            
                    <div class="match-header">
            
                      <div class="match-status">Ya jugado</div>
            
            
                    </div>
                    <div class="match-content">
                      <div class="column">
                        <div class="team team--home">
                          <div class="team-logo">
                            <img src="./img/LOGOPeñarol.png" alt=""/>
                          </div>
                          <h2 class="team-name">Peñarol</h2>
                        </div>
                      </div>
                      <div class="column">
                        <div class="match-details">
                          <div class="match-date">
                            10 Sep a las <strong>19:00 hs</strong>
                          </div>
                          <div class="match-score">
                            <span class="match-score-number match-score-number--leading">1</span>
                            <span class="match-score-divider">:</span>
                            <span class="match-score-number">0</span>
                          </div>
                          <div class="match-time-lapsed">
                            00:00:00
                          </div>
            
                          <div class="match-referee">
            
                            Referee: 
            
                            <strong>Pepito</strong>
            
            
                          </div>
            
                          <a class="match-view" href="./html/partido.html">Ver partido</a>
                        </div>
                      </div>
                      <div class="column">
                        <div class="team team--away">
                          <div class="team-logo">
                            <img src="./img/LOGONacional.png" alt=""/>
                          </div>
                          <h2 class="team-name">Nacional</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                </div>
      
      
      
          </div>
          
        </div>
          </div>
          
      </div>

      <div class="product-card">

        <div class="product-image">
          <div class="container-fluid d-flex  ">


            <div class="columna1">
          
          
            <div class="match-item m-4">
          
              <div class="container-match">
                <!-- code here -->
                <div class="match">
          
                  <div class="match-header">
          
                    <div class="match-status">Ya jugado</div>
          
          
                  </div>
                  <div class="match-content">
                    <div class="column">
                      <div class="team team--home">
                        <div class="team-logo">
                          <img src="./img/LOGOPeñarol.png" alt="" />
                        </div>
                        <h2 class="team-name">Peñarol</h2>
                      </div>
                    </div>
                    <div class="column">
                      <div class="match-details">
                        <div class="match-date">
                          10 Sep a las <strong>19:00 hs</strong>
                        </div>
                        <div class="match-score">
                          <span class="match-score-number match-score-number--leading">1</span>
                          <span class="match-score-divider">:</span>
                          <span class="match-score-number">0</span>
                        </div>
                        <div class="match-time-lapsed">
                          00:00:00
                        </div>
          
                        <div class="match-referee">
          
                          Referee: 
          
                          <strong>Pepito</strong>
          
          
                        </div>
          
                        <a class="match-view" href="./html/partido.html">Ver partido</a>
                      </div>
                    </div>
                    <div class="column">
                      <div class="team team--away">
                        <div class="team-logo">
                          <img src="./img/LOGONacional.png" alt="" />
                        </div>
                        <h2 class="team-name">Nacional</h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          
              </div>
    
    
    
        </div>
        
      </div>
        </div>
        
      </div>

      <div class="product-card">

      <div class="product-image">
        <div class="container-fluid d-flex  ">


          <div class="columna1">
        
        
          <div class="match-item m-4">
        
            <div class="container-match">
              <!-- code here -->
              <div class="match">
        
                <div class="match-header">
        
                  <div class="match-status">Ya jugado</div>
        
        
                </div>
                <div class="match-content">
                  <div class="column">
                    <div class="team team--home">
                      <div class="team-logo">
                        <img src="./img/LOGOPeñarol.png" alt="" />
                      </div>
                      <h2 class="team-name">Peñarol</h2>
                    </div>
                  </div>
                  <div class="column">
                    <div class="match-details">
                      <div class="match-date">
                        10 Sep a las <strong>19:00 hs</strong>
                      </div>
                      <div class="match-score">
                        <span class="match-score-number match-score-number--leading">1</span>
                        <span class="match-score-divider">:</span>
                        <span class="match-score-number">0</span>
                      </div>
                      <div class="match-time-lapsed">
                        00:00:00
                      </div>
        
                      <div class="match-referee">
        
                        Referee: 
        
                        <strong>Pepito</strong>
        
        
                      </div>
        
                      <a class="match-view" href="./html/partido.html">Ver partido</a>
                    </div>
                  </div>
                  <div class="column">
                    <div class="team team--away">
                      <div class="team-logo">
                        <img src="./img/LOGONacional.png" alt=""/>
                      </div>
                      <h2 class="team-name">Nacional</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
            </div>
  
  
  
      </div>
      
    </div>
      </div>
      
      </div>

      
      <div class="product-card">

    <div class="product-image">
      <div class="container-fluid d-flex  ">


        <div class="columna1">
      
      
        <div class="match-item m-4">
      
          <div class="container-match">
            <!-- code here -->
            <div class="match">
      
              <div class="match-header">
      
                <div class="match-status">Ya jugado</div>
      
      
              </div>
              <div class="match-content">
                <div class="column">
                  <div class="team team--home">
                    <div class="team-logo">
                      <img src="./img/LOGOPeñarol.png" alt=""/>
                    </div>
                    <h2 class="team-name">Peñarol</h2>
                  </div>
                </div>
                <div class="column">
                  <div class="match-details">
                    <div class="match-date">
                      10 Sep a las <strong>19:00 hs</strong>
                    </div>
                    <div class="match-score">
                      <span class="match-score-number match-score-number--leading">1</span>
                      <span class="match-score-divider">:</span>
                      <span class="match-score-number">0</span>
                    </div>
                    <div class="match-time-lapsed">
                      00:00:00
                    </div>
      
                    <div class="match-referee">
      
                      Referee: 
      
                      <strong>Pepito</strong>
      
      
                    </div>
      
                    <a class="match-view" href="./html/partido.html">Ver partido</a>
                  </div>
                </div>
                <div class="column">
                  <div class="team team--away">
                    <div class="team-logo">
                      <img src="./img/LOGONacional.png" alt=""/>
                    </div>
                    <h2 class="team-name">Nacional</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
          </div>



    </div>
    
  </div>
    </div>
    
      </div>
      
      
     
      
      
  </div>
        </section>


       
      <!-- FOOTER -->

        <footer class="footer "> 
            
          <div class="container-fluid d-flex align-items-center justify-content-center mt-4 ">
          <h1 class="footer_txt ">Copyright © RECODE 2022</h1>
          </div>
        
        </footer>


      <!-- BOOTSTRAP SCRIPTS -->


        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
     
      <!-- JS -->

        <script src="./js/usermenu.js"></script>
        <script src="./js/carousel.js"></script>


















</body>
</html>
