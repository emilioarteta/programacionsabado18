<!DOCTYPE html>
<html>
<head>
	<title>Mi primera página</title>
	  
  	<meta name="description" content="Cursos de programacion y diseño en Ciudad del este- Paraguay">
    <meta name="keywords" content="programacion, Cursos, diseño, ciudad del este"> 
    <?php include 'includes/head.php'; ?>
</head>
<body>
	<?php include 'includes/header.php'; ?>
<main>
   <section class="main-header">
      <div class="container">
        <h1>Título de Curso</h1> 
        <h2>Descripción corta del curso</h2>     
      </div>      
   </section>
   <section class="contenido">
   <div class="container">
   <div class="col-md-3">
   	<h3>Detalles</h3>
        <div class="media">
              <div class="media-left">                
              </div>
              <div class="media-body">
                <h4 class="media-heading">Precio</h4>
                <span>550.000 Gs</span>                
              </div>
        </div>
        <div class="media">
              <div class="media-left">                
              </div>
              <div class="media-body">
                <h4 class="media-heading">Duración</h4>
                <span>3 meses</span>                
              </div>
        </div>
        <div class="media">
              <div class="media-left">                
              </div>
              <div class="media-body">
                <h4 class="media-heading">Días</h4>
                <span>Lunes a Viernes</span>                
              </div>
        </div>
   </div>
   </div>
   </section>
</main>
    <?php include 'includes/footer.php';?>
    <?php include 'includes/script.php';?>
 </body>
</html>