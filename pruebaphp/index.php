<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba</title>
    <link rel="stylesheet" href="estilos.css">

</head>
<body>
    <header>
        <nav>
            <div>
                <ul>
                    <li>Proposito</li>
                    <li>Inicio</li>
                    <li>Muestra</li>
                </ul>
            </div>
        </nav>  
    </header>  

    <main>
    <?php 

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
?>
    </main>

            <div>
                <p><?php echo "Hola, bienvenido <b> $nombre </b>" . "<b> $apellido </b> disfrute su estadia."; ?></p>
            </div>
        <div class="formulario">

            <h5 class="texto">Nombre</h5>    
            <form action="index.php" method="post">
            <input type="text" class="nombrelap" name="nombre" placehoolder="nombre">
            <br/>
            <h5 class="texto">Apellido</h5>         
            <input type="text" class="apellidolap" name="apellido" placeholder="Apellido" >
            <br/>
            <input type="submit"value="Enviar">
            </form>
            

        </div>
        
</body>
</html>
