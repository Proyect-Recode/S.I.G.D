<?php

@include 'db.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = ($_POST['password']);
   $cpass = ($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM pruebausuarios WHERE email = '$email' && clave = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['nombre'];
         header('location:../Vista/html/admin.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['nombre'];
         header('location:../Vista/html/administrativo.php');

      }
     
   }else{
      $error[] = 'Datos incorrectos!';
   }

};
?>