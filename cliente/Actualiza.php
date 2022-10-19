<?php
    $Id = $_POST['Id'];
    // $marca = $_POST['marca'];
    // $sabor = $_POST['sabor'];
    // $tamano = $_POST['tamaño'];
    $precio = $_POST['precio'];
    require_once("lib/nusoap.php");
    $Urlservice = new nusoap_client("http://localhost/ws_PHP_Nusoap/servidor/Bebidaws.php");
    $resultado = $Urlservice->call('ActualizaBebida',
    array('Id'=>$Id, 'precio'=>$precio));
    // 'Marca'=>$marca,'Sabor'=>$sabor,'Tamano'=>$tamano,
    echo "Actualizado",$resultado;


?>