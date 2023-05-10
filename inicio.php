<?php include("template/cabecera.php"); ?>


<div class="col-md-12">
  <style>
    
    div.jumbotron {

      background-image: url("imagenes/medicina-fondo.jpg");
      background-repeat: no-repeat;
      background-size: cover;

    }

    h1.display-2 {

      color: #5641EF;
      font-size: 50px;
      font-family:Georgia, 'Times New Roman', Times, serif;

    }

    p.lead1 {
      background: #7DD99D;
      color: black;
      font-size: 20px;
      font-family: Georgia, 'Times New Roman', Times, serif;
    }

    p.lead {
      font-size: 20px;
      font-family: Georgia, 'Times New Roman', Times, serif;
      transition: width 2s;
    }
    .btn  {
      border-radius: 50px;
      width: 500px;
      transition: width 2s;
    }
    .btn:hover{
      transition: width 2s;
    }
  </style>

  <center>
  <div class="col-md-1"></div>
  <div class="col-md-10">
      <h1 class="display-2">BIENVENIDO AL SISTEMA</h1>

      <p class="lead1">El hospital de clinicas aplico la tecnologia RFID para poder mantener un control eficiente sobre sus activos fijos, de tal manera nos ponemos a la altura de la inovaciocion tecnologica.</p>
     </center>
  <hr class="my-2">
  <div class="col-md-1"></div></div>
    <div class="col-md-1"></div>
<div class="col-md-5">
  <p><strong>Secciones:</strong></p>
  <p class="lead">
    <a class="btn btn" style="background: #E2EF41;"href="seccion/activosfijos.php" role="button"><strong>ACTIVOS FIJOS</strong></a>
  </p>
  <br>
  <p class="lead">
    <a class="btn btn-success " style="background:#23B01F;" href="seccion/registrar.php" role="button"><strong>REGISTRAR ACTIVOS</strong></a>
  </p><br>
  <p class="lead">
    <a class="btn btn-danger " style="background:#C72641;" href="" role="button"><strong>REGISTRAR ACTIVOS</strong></a>
  </p>
  <br>
  <p class="lead">
    <a class="btn btn-primary " style="background:#AD4BC4;"  href="" role="button"><strong>ACTIVOS FIJOS</strong></a>
  </p>
</div>

<div class="col-md-5">
  <img src="imagenes/inicios.PNG" alt="" class="img-fluid">
</div><div class="col-md-1"></div>



<?php include("template/pie.php"); ?>