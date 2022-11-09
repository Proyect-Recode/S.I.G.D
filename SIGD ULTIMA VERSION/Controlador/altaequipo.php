<?php

@include 'db.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['team_name']);
   $deporte = mysqli_real_escape_string($conn, $_POST['sport_type']);

   $select = " SELECT * FROM Equipo WHERE Nombre = '$name' && team_type = '$deporte' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) < 0){

      $error[] = 'El usuario ya existe!';

   }else{

      
         $insert = "INSERT INTO Equipo (Nombre, team_type) VALUES('$name','$deporte')";
         mysqli_query($conn, $insert);
         header('location:../Vista/html/Admin/admin.php');
      }
   };


?>