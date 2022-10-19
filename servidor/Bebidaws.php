<?php
    require_once ('lib/nusoap.php');
    require_once ("conexi.php");



    function insertaBebida($Marca,$Sabor,$Tamano,$precio){
        $conecta = new Conexion();
        $consulta = $conecta->prepare("INSERT INTO bebida(marca,sabor,tamaño,precio)
        VALUES(:Marca,:Sabor,:Tamano,:precio)");
        $consulta->bindParam(':Marca',$Marca, PDO::PARAM_STR);
        $consulta->bindParam(':Sabor',$Sabor, PDO::PARAM_STR);
        $consulta->bindParam(':Tamano',$Tamano, PDO::PARAM_STR);
        $consulta->bindParam(":precio",$precio,PDO::PARAM_INT);
        $consulta->execute(); // inserta a la base de datos
        $ulId = $conecta->lastInsertId();
        return join(",",array($ulId));
    }
    function ActualizaBebida($Id,$Precio){
        $conecta = new Conexion();
        $consulta = $conecta->prepare("UPDATE bebida SET precio = :precio WHERE id = :Id");
        // $consulta->bindParam(':Marca',$Marca, PDO::PARAM_STR);
        // $consulta->bindParam(':Sabor',$Sabor, PDO::PARAM_STR);
        // $consulta->bindParam(':Tamano',$Tamano, PDO::PARAM_STR);
        $consulta->bindParam(':Id',$Id, PDO::PARAM_INT);
        $consulta->bindParam(":precio",$Precio,PDO::PARAM_INT);
        $consulta->execute(); // inserta a la base de datos
        $ulId = $conecta->lastInsertId();
        return join(",",array($ulId));
    }

    function EliminaaBebida($Id){
        $conecta = new Conexion();
        $consulta = $conecta->prepare("DELETE FROM bebida WHERE id = :Id");
        $consulta->bindParam(':Id',$Id, PDO::PARAM_INT);
        $consulta->execute(); // inserta a la base de datos
        $ulId = $conecta->lastInsertId();
        return join(",",array($ulId));
    }
    
    function Verdatos(){
        $conecta = new Conexion();
        $consulta = $conecta->prepare("SELECT* FROM bedida");
        $consulta->execute(); // inserta a la base de datos
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        return $consulta->fetchAll(); 
    }



    $server = new soap_server();
    $server->configureWSDL('bebidasService','urn:bebidaService');
    $server->wsdl->schemaTargetNamespace='urn:bebidaService';
    $server->register(
        'insertaBebida',
        array('Marca'=>'xsd:string','Sabor'=>'xsd:string','Tamano'=>'xsd:string','precio'=>'xsd:integer'),
        array('return'=>'xsd:string'),
        'urn:bebidaService',
        'urn:bebidaService#insertaBebida',
        'rpc',
        'encoded',
        'insertar bebidas'
    );
    // Eliminar
    $server->register(
        'EliminaaBebida',
        array('Id'=>'xsd:integer'),
        array('return'=>'xsd:string'),
        'urn:bebidaService',
        'urn:bebidaService#insertaBebida',
        'rpc',
        'encoded',
        'insertar bebidas'
    );

    $server->register(
        'ActualizaBebida',
        // 'Marca'=>'xsd:string','Sabor'=>'xsd:string','Tamano'=>'xsd:string',
        array('Id'=>'xsd:integer','precio'=>'xsd:integer'),
        array('return'=>'xsd:string'),
        'urn:bebidaService',
        'urn:bebidaService#insertaBebida',
        'rpc',
        'encoded',
        'insertar bebidas'
    );



    
    $server->register(
        'Verdatos',
        array('Id'=>'xsd:integer','Marca'=>'xsd:string','Sabor'=>'xsd:string','Tamano'=>'xsd:string','precio'=>'xsd:integer'),
        array('return'=>'xsd:string'),
        'urn:bebidaService',
        'urn:bebidaService#insertaBebida',
        'rpc',
        'encoded',
        'insertar bebidas'
    );
    $post= file_get_contents('php://input');
    $server->service($post);

    
    
?>