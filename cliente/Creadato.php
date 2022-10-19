<?php
    $Id = $_POST['Id'];
    $marca = $_POST['marca'];
    $sabor = $_POST['sabor'];
    $tamano = $_POST['tamaño'];
    $precio = $_POST['precio'];
    require_once("lib/nusoap.php");
    $Urlservice = new nusoap_client("http://localhost/ws_PHP_Nusoap/servidor/Bebidaws.php");

    $inserta = $Urlservice->call('insertaBebida',
    array('Marca'=>$marca,'Sabor'=>$sabor,'Tamano'=>$tamano,'precio'=>$precio));
    echo 'Dato insertado',$inserta,'<br>';


    $elimina = $Urlservice->call('EliminaaBebida',
    array('Id'=>$Id));
    echo 'Dato eliminado',$elimina,'<br>';



    $Verdato = $Urlservice->Call('Verdatos',[]);
    
?>
