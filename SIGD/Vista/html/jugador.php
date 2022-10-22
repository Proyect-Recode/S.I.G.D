

<?php

session_start();

if(!isset($_SESSION['rol'])){
    header('location: ./jugador.php');
}else {
    if($_SESSION['rol'] !=6){
        header('location: ../index.php');
    }
}
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


      <!-- MENU DE USUARIO -->

       <div class="action">
        <div class="profile" onclick="menuToggle();">
            <img src="./icons/user-image.png" alt="">
        </div>

        <div class="menu">
            <ul class="d-flex  flex-column">
               
              <li>
              
              </li>
              <li>   
              
              </li>

              </ul>
            
            <ul>
              <li>
                    <img class="icon-img" src="./icons/user.png" alt=""> 
                  <a href="./html/micuenta.html">Mi cuenta</a>
              </li>
      
              <li>
                   <img class="icon-img" src="./icons/equipo.png" alt="">
                  <a href="./html/miequipo.html">Mi Equipo</a>
              </li>
              <li>
                   <img class="icon-img" src="./icons/log-out.png" alt="">
                  <a href="">Cerrar Sesión</a>
              </li>
          </ul>
        </div>
       </div>
   
      <!-- BIENVENIDA CON LOGIN O REGISTRO -->

       <div class="home-banner">

      <div class="content ">

    
      <div class="d-flex btn-container flex-column">

        <h1>Bienvenido al S.I.G.D</h1>
        <p>¡Inicie sesión para acceder al sistema!</p>


              <!-- MODAL DE INICIO DE SESION -->
            
        <button class="signup-btn" type="button" data-toggle="modal" data-target="#Inicio"><span class="cover"></span>Iniciar Sesión</button>

         <!-- modal -->
         <div class="modal fade" id="Inicio">
          <div class="modal-dialog">
          <div class="modal-content">

         <!-- Modal Header -->
          <div class="modal-header">
           <h5 class="modal-title">Inicie Sesión:</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>

         <!-- Modal body -->
         <div class="modal-body">
   
          <form action="" method="POST">
         <?php
          include('./Controlador/login.php');
          
          if(isset($errorLogin)){
            echo $errorLogin;
          }  
          ?>  
        <div class="form-group">
            <label for="emailL">Email: </label>
            <input type="email" class="form-control" placeholder="" id="emailL" name="emailL" required>
          </div>
          <div class="form-group">
          <label for="pwdL">Contraseña: </label>
          <input type="password" class="form-control" placeholder="" id="pwdL" name="claveL" required>
          </div>
          <div class="form-group form-check">
          <label class="form-check-label">
          <input class="form-check-input" type="checkbox"> Recordarme
          </label>
          </div>

          <button type="submit" class="btn btn-primary" name="btningresar">Ingresar</button>
         </form>
          

          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
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
