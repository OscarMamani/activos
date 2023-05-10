<?php include("../template/cabecera.php"); ?>

<style>
    body {
        background-color: #9EDAF9;
        background-repeat: no-repeat;
        background-size: cover;

    }

    #imagenes_edit {
        height: 230px;
        object-fit: cover;
        border-radius: 28px;

    }

    .card {
        box-shadow: 0px 0px 25px #AFB6BF;
        background-color: #fff;
    }

    .navbar {
        background-color: #F0F0EE;
        color: #2EB099;
        border-radius: 18px;
    }

</style>
<form method="post" action="Unidades.php">
  
    <select name="nombre">
        <?php
        include("../config/bd.php");
        $sentenciaSQL = $conexion->prepare("SELECT DISTINCT AREA FROM equipos");
        $sentenciaSQL->execute();
        $value = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <option value="" disabled selected>Seleccione una Unidad</option>
        <?php foreach ($value as $val) { ?>
            <option value="<?php echo $val['AREA']; ?>"> <?php echo $val['AREA']; ?></option>
        <?php } ?>
    </select>
    <input type="submit" value="BUSCAR">
</form>



        <?php
        // Conexión a la base de datos
        $host = "localhost";
        $bd = "activos_bd";
        $usuario = "root";
        $contraseña = "";

        $conn = new mysqli($host, $usuario, $contraseña, $bd);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Obtener el valor seleccionado del select
        if (isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'];

            // Consulta para obtener los campos filtrados
            $sql = "SELECT * FROM equipos WHERE AREA = '$nombre'";
            $resultado = $conn->query($sql);

            // Mostrar los resultados en la página
            if ($resultado->num_rows > 0) {
                while ($fila = mysqli_fetch_assoc($resultado)) {


                    echo "<div class='col-md-4'>";
                    echo "<div class='card'>";
                    echo "<img src='../imagenes/" . $fila['IMAGEN'] . "' class='img rounded img-thumbnail' id='imagenes_edit'>";
                    echo "<div class='card-body'>";
                    echo "<p class='card-text text-center' style='color:#3789F4; text-transform: uppercase;'><b>". $fila["TIPO"] . "</b></p>";
                    echo "<p class='card-text'><b>Caracteristicas: </b>" . $fila["ESPECIFICACIONES"] . "</p>";
                    echo "<p class='card-text'><b>Precio: </b>" . $fila["PRECIO"] . "</p>";
                    echo "<p class='card-text'><b>Area designada: </b>" . $fila["AREA"] . "</p>";
                    echo "<p class='card-text'><b>Fecha de Adquisicion: </b>" . $fila["FECHA_INGRESO"] . "</p>";
                    echo "<p class='card-text'><b>Responsable: </b>" . $fila["OBSERVACIONES"] . "</p>";
                    echo "<p class='card-text'><b>Depreciacion Anual: </b>";
        
                    $tipo = $fila['TIPO'];
                    $Precio = $fila['PRECIO'];
                    $Resultado = 0;
        
                    if ($tipo == 'Maquina') {
                        $ResultadoF = number_format($Resultado = (($Precio - 0.125) / 8), 2);
                        echo ($ResultadoF);
                    } else if ($tipo == 'Equipo de computacion') {
                        $ResultadoN = number_format($Resultado = (($Precio - 0.1) / 10), 2);
                        echo ($ResultadoN);
                    } else if ($tipo == 'Enseres de oficina') {
                        $ResultadoM = number_format($Resultado = (($Precio - 0.05) / 20), 2);
                        echo ($ResultadoM);
                    }
        
                    echo "</p>";
                    echo "</div>";
                    echo "</div><br> ";
                    echo "</div>";
                }
            } else {
                echo "No se encontraron resultados.";
            }
        } else {
            echo "";
        }
        $conn->close();
        ?>
  


<?php include("../template/pie.php"); ?>