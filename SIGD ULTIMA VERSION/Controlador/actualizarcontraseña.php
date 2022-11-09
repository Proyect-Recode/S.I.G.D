<?php

@include 'db.php';

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $contraseñaNueva = mysqli_real_escape_string($conn, $_POST['npassword']);
   $contraseñaActual = mysqli_real_escape_string($conn, $_POST['apassword']);
   
   

   $select = " SELECT * FROM Usuario WHERE Email = '$email' && Contrasenia = '$contraseñaActual' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) < 0){

      $error[] = 'El usuario ya existe!';

   }else{

      if($pass != $cpass){
         $error[] = 'Las contraseñas no coinciden!';
      }else{
         $insert = "INSERT INTO Usuario (CI, Nombre, Apellido, Email, Contrasenia, user_type) VALUES('$ci','$name','$apellido','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:../Vista/html/Admin/admin.php');
      }
   }

};


?>