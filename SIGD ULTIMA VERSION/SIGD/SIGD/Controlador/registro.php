<?php

@include 'db.php';

if(isset($_POST['submit'])){

   $ci = mysqli_real_escape_string($conn, $_POST['ci']);
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $apellido = mysqli_real_escape_string($conn, $_POST['apellido']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = ($_POST['password']);
   $cpass = ($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM Usuario WHERE Email = '$email' && Contrasenia = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) < 0){

      $error[] = 'El usuario ya existe!';

   }else{

      if($pass != $cpass){
         $error[] = 'Las contraseñas no coinciden!';
      }else{
         $insert = "INSERT INTO Usuario (CI, Nombre, Apellido, Email, Contrasenia, user_type) VALUES('$ci','$name','$apellido','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:../Vista/index.php');
      }
   }

};


?>