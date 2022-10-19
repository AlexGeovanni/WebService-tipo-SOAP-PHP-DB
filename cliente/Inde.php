<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    section{
        width: 60%;
        margin:auto;
        margin-bottom:50px;
    }
    label{
        font-weight:bold;
        font-family:arial;
    }
    h1{
        font-family:arial;
        border-bottom:1px  solid;
        width: 400px;
    }
    .boton{
        padding:8px 40px;
        background: #084de1;
        color:#ffff;
        cursor:pointer;
    }
    .boton:hover{
        color: #084de1;
        background:#eaeaea;
    }
</style>
<body>
    <section>
        <h1>Ingresa datos ala BD</h1>
        <form action="Creadato.php" method="POST">
            <label for="marca">Marca</label>
            <input type="text" name="marca" id="marca" placeholder="Marca">

            <label for="sabor">Sabor</label>
            <input type="text" name="sabor"  id="sabor" placeholder="Sabor"><br><br>

            <label for="tamaño">Tamaño</label>
            <input type="text" name="tamaño"  id="tamaño" placeholder="Tamaño">

            <label for="precio">Precio</label>
            <input type="text" name="precio"  id="precio" placeholder="Precio"><br><br>

            <input class="boton"  type="submit" value="Ingresar" >
        </form>
    </section>

    <section>
        <h1>Elimina un dato de la base de datos</h1>
        <form action="Creadato.php" method="POST">
            <label for="Id">Id</label>
            <input type="text" name="Id" id="Id" placeholder="ingresa id"><br><br>
            <input class="boton"  type="submit" value="Eliminar" >
        </form>
    </section>

    <section>
        <h1>Actualiza datos de la BD</h1>
        <form action="Actualiza.php" method="POST">
            <!-- <label for="marca">Marca</label>
            <input type="text" name="marca" id="marca" placeholder="Marca"><br><br>

            <label for="sabor">Sabor</label>
            <input type="text" name="sabor"  id="sabor" placeholder="Sabor"><br><br>

            <label for="tamaño">Tamaño</label>
            <input type="text" name="tamaño"  id="tamaño" placeholder="Tamaño"><br><br> -->

            <label for="Id">Id</label>
            <input type="text" name="Id" id="Id" placeholder="ingresa id"><br><br> 

            <label for="precio">Precio</label>
            <input type="text" name="precio"  id="precio" placeholder="Precio"><br><br>

            <input class="boton" type="submit" value="Actualizar" >
        </form>
    </section>
</body>
</html>