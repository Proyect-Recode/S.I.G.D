<?php

@include 'db.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = ($_POST['password']);
   $cpass = ($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM pruebausuarios WHERE email = '$email' && clave = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'El usuario ya existe!';

   }else{

      if($pass != $cpass){
         $error[] = 'Las contraseñas no coinciden!';
      }else{
         $insert = "INSERT INTO pruebausuarios (nombre, email, clave, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:../Vista/index.php');
      }
   }

};


?>