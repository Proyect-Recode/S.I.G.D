<?php
    include_once 'db.php';

    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset();

        session_destroy();
    }

    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            
            case 1:
            header('location: ../Vista/html/admin.php');
            break;
            exit();
            
            case 2:
            header('location: ../Vista/html/administrativo.php');
            break;
            exit();
            
        
            case 3:
            header('location: ../Vista/html/analista.php');
            break;
            exit();
            
        
            case 4:
            header('location: ../Vista/html/directortec.php');
            break;
            exit();
            
        
            case 5:
            header('location: ../Vista/html/juez.php');
            break;
            exit();
            
        
        
            case 6:
            header('location: ../Vista/html/usuario.php');
            break;
            exit();
            default:
        
        }
    }


    if(isset($_POST['username']) && isset($_POST['contraseña'])){
        $username = $_POST['username'];
        $password = $_POST['contraseña'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT* FROM usuario WHERE username = :username AND contraseña = :contraseña');
        $query->execute(['username' => $username, 'contraseña' => $password]);

        $row = $query->fetch(PDO::FETCH_NUM);
        if($row == true){
            //validar rol
            $rol = $row[6];
            $_SESSION['rol'] = $rol;

            switch($_SESSION['rol']){
                case 1:
                    header('location: ../Vista/html/admin.php');
                    break;
                    exit();

                case 2:
                    header('location: usuario.php');
                    break;
                    exit();

                case 3:
                    header('location: ../Vista/html/admin.php');
                    break;
        
                    case 4:
                    header('location: usuario.php');
                    break;
                    exit();
                   
                    case 5:
                    header('location: ../Vista/html/admin.php');
                    break;
                    exit();

                    case 6:
                    header('location: usuario.php');
                    break;
                    exit();

                default:
            }
        }else {
            //no existe usuario
            echo "El usuario o la contraseña son incorrectos";
        }
    }



?>



