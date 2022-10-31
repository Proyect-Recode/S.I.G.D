<?php

include_once('db.php');

if(isset($_GET['enviar'])){
    $cedula = $_GET['busqueda'];

    $consulta = $conectar->query("SELECT* FROM pepito WHERE fulanito = '$cedula'");

    while ($row= $consulta->fetch_array()) {
        echo $row['porque'].'<br>';
    }
}

