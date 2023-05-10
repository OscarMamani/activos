<?php

use JetBrains\PhpStorm\Deprecated;

include("../template/cabecera.php"); ?>

<?php
include("../config/bd.php");


?>

<style>
    body {
        background-color: #9EDAF9;
        background-repeat: no-repeat;
        background-size: cover;

    }

    #imagenes_edit {
        height: 320px;
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

    #titulo {
        color: #215EF5;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        text-align: center;
        font-size: 25px;

    }
</style>

<h1 class="page-title" id="titulo">NUESTROS ACTIVOS FIJOS
    <a href="registrar.php" class="btn btn-success float-left">Registrar Nuevo</a>
</h1>

<div class="col-md-12">
    <div class="container">
        <h2 id="Dermatologia">Dermatologia</h2>
        <div class="row">
            <?php
            /*conectar a la base de datos para mostrar*/
            $sentenciaSQL = $conexion->prepare("SELECT IMAGEN FROM equipos WHERE ID=:ID");
            $sentenciaSQL->bindParam(':ID', $txtID);
            $sentenciaSQL->execute();
            $equipo = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

            $sentenciaSQL = $conexion->prepare("SELECT * FROM equipos WHERE AREA ='Dermatologia'");
            $sentenciaSQL->execute();
            $listaequipos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
            rsort($listaequipos);
            foreach ($listaequipos as $equipo) { ?>
                <div class="col-md-4">

                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">
                                <b>Tipo: </b> <?php echo $equipo['TIPO']; ?> <br>
                                <b>Detalles: </b> <?php echo $equipo['ESPECIFICACIONES']; ?><br>
                                <b>Precio de Adquisicion: </b> <?php echo $equipo['PRECIO']; ?> <br>
                                <b>Area designada: </b> <?php echo $equipo['AREA']; ?><br>
                                <b>Fecha de Ingreso: </b> <?php echo $equipo['FECHA_INGRESO']; ?><br>
                                <b>Observaciones: </b> <?php echo $equipo['OBSERVACIONES']; ?><br>
                                <b>Depreciacion Anual: </b><?php

                                                            $tipo = $equipo['TIPO'];
                                                            $Precio = $equipo['PRECIO'];
                                                            $Resultado = 0;

                                                            if ($tipo == 'Maquina') {
                                                                $ResultadoF = number_format($Resultado = (($Precio - 0.125) / 8), 2);
                                                                echo ($ResultadoF);
                                                            } else if ($tipo == 'Equipo de computación') {
                                                                $ResultadoN = number_format($Resultado = (($Precio - 0.1) / 10), 2);
                                                                echo ($ResultadoN);
                                                            } else if ($tipo == 'Enseres de oficina') {
                                                                $ResultadoM = number_format($Resultado = (($Precio - 0.1) / 10), 2);
                                                                echo ($ResultadoM);
                                                            } else {
                                                                echo ('aun faltas');
                                                            }

                                                            ?>
                            </p>
                        </div>
                    </div> <br>
                </div><?php }  ?>

        </div>
    </div>
</div>




<div class="col-md-12">
    <div class="container">
        <h2 id="Dermatologia">Neurocirugia</h2>
        <div class="row">
            <?php
            /*conectar a la base de datos para mostrar*/
            $sentenciaSQL = $conexion->prepare("SELECT IMAGEN FROM equipos WHERE ID=:ID");
            $sentenciaSQL->bindParam(':ID', $txtID);
            $sentenciaSQL->execute();
            $equipo = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

            $sentenciaSQL = $conexion->prepare("SELECT * FROM equipos WHERE AREA ='Neurocirugia'");
            $sentenciaSQL->execute();
            $listaequipos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
            rsort($listaequipos);
            foreach ($listaequipos as $equipo) { ?>
                <div class="col-md-4">

                    <div class="card ">
                        <div class="card-body">
                            <p class="card-text">
                                <b>Tipo: </b> <?php echo $equipo['TIPO']; ?> <br>
                                <b>Detalles: </b> <?php echo $equipo['ESPECIFICACIONES']; ?><br>
                                <b>Precio de Adquisicion: </b> <?php echo $equipo['PRECIO']; ?> <br>
                                <b>Area designada: </b> <?php echo $equipo['AREA']; ?><br>
                                <b>Fecha de Ingreso: </b> <?php echo $equipo['FECHA_INGRESO']; ?><br>
                                <b>Observaciones: </b> <?php echo $equipo['OBSERVACIONES']; ?><br>
                                <b>Depreciacion Anual: </b><?php

                                                            $tipo = $equipo['TIPO'];
                                                            $Precio = $equipo['PRECIO'];
                                                            $Resultado = 0;

                                                            if ($tipo == 'Maquina') {
                                                                $ResultadoF = number_format($Resultado = (($Precio - 0.125) / 8), 2);
                                                                echo ($ResultadoF);
                                                            } else if ($tipo == 'Equipo de computación') {
                                                                $ResultadoN = number_format($Resultado = (($Precio - 0.1) / 10), 2);
                                                                echo ($ResultadoN);
                                                            } else if ($tipo == 'Enseres de oficina') {
                                                                $ResultadoM = number_format($Resultado = (($Precio - 0.1) / 10), 2);
                                                                echo ($ResultadoM);
                                                            } else {
                                                                echo ('aun faltas');
                                                            }

                                                            ?>
                            </p>
                        </div>
                    </div> <br>
                </div><?php }  ?>

        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="container">
        <h2 id="Dermatologia">Gastroenterologia</h2>
        <div class="row">
            <?php
            /*conectar a la base de datos para mostrar*/
            $sentenciaSQL = $conexion->prepare("SELECT IMAGEN FROM equipos WHERE ID=:ID");
            $sentenciaSQL->bindParam(':ID', $txtID);
            $sentenciaSQL->execute();
            $equipo = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

            $sentenciaSQL = $conexion->prepare("SELECT * FROM equipos WHERE AREA ='Gastroenterologia'");
            $sentenciaSQL->execute();
            $listaequipos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
            rsort($listaequipos);
            foreach ($listaequipos as $equipo) { ?>
                <div class="col-md-4">

                    <div class="card ">
                        <div class="card-body">
                            <p class="card-text">
                                <b>Tipo: </b> <?php echo $equipo['TIPO']; ?> <br>
                                <b>Detalles: </b> <?php echo $equipo['ESPECIFICACIONES']; ?><br>
                                <b>Precio de Adquisicion: </b> <?php echo $equipo['PRECIO']; ?> <br>
                                <b>Area designada: </b> <?php echo $equipo['AREA']; ?><br>
                                <b>Fecha de Ingreso: </b> <?php echo $equipo['FECHA_INGRESO']; ?><br>
                                <b>Observaciones: </b> <?php echo $equipo['OBSERVACIONES']; ?><br>
                                <b>Depreciacion Anual: </b><?php

                                                            $tipo = $equipo['TIPO'];
                                                            $Precio = $equipo['PRECIO'];
                                                            $Resultado = 0;

                                                            if ($tipo == 'Maquina') {
                                                                $ResultadoF = number_format($Resultado = (($Precio - 0.125) / 8), 2);
                                                                echo ($ResultadoF);
                                                            } else if ($tipo == 'Equipo de computación') {
                                                                $ResultadoN = number_format($Resultado = (($Precio - 0.1) / 10), 2);
                                                                echo ($ResultadoN);
                                                            } else if ($tipo == 'Enseres de oficina') {
                                                                $ResultadoM = number_format($Resultado = (($Precio - 0.1) / 10), 2);
                                                                echo ($ResultadoM);
                                                            } else {
                                                                echo ('aun faltas');
                                                            }

                                                            ?>
                            </p>
                        </div>
                    </div> <br>
                </div><?php }  ?>

        </div>
    </div>
</div>



<?php include("../template/pie.php"); ?>