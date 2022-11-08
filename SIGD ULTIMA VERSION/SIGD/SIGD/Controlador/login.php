<?php

@include 'db.php';

session_start();

if(isset($_POST['submit'])){

   
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = ($_POST['password']);
   

   $select = " SELECT * FROM Usuario WHERE Email = '$email' && Contrasenia = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'Admin'){

         $_SESSION['user_name'] = $row['Nombre'];
         $_SESSION['user_type'] = $row['user_type'];
         header('location:../Vista/html/Admin/admin.php');

      }elseif($row['user_type'] == 'Usuario'){

         $_SESSION['user_name'] = $row['Nombre'];
         $_SESSION['user_type'] = $row['user_type'];
         header('location:../Vista/html/Usuario/usuario.php');

      }elseif($row['user_type'] == 'Administrativo'){

         $_SESSION['user_name'] = $row['Nombre'];
         $_SESSION['user_type'] = $row['user_type'];
         header('location:../Vista/html/Administrativo/administrativo.php');

      }elseif($row['user_type'] == 'Jugador'){

         $_SESSION['user_name'] = $row['Nombre'];
         $_SESSION['user_type'] = $row['user_type'];
         header('location:../Vista/html/Jugador/jugador.php');

      }elseif($row['user_type'] == 'Analista'){

         $_SESSION['user_name'] = $row['Nombre'];
         $_SESSION['user_type'] = $row['user_type'];
         header('location:../Vista/html/Analista/analista.php');

      }elseif($row['user_type'] == 'Juez'){

         $_SESSION['user_name'] = $row['Nombre'];
         $_SESSION['user_type'] = $row['user_type'];
         header('location:../Vista/html/Juez/juez.php');

      }elseif($row['user_type'] == 'DirectorT'){

         $_SESSION['user_name'] = $row['Nombre'];
         $_SESSION['user_type'] = $row['user_type'];
         header('location:../Vista/html/DirectorT/directorTecnico.php');

      }

      
     
   }else{
      $error[] = 'Datos incorrectos!';
   }

};
?>