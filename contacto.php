<!DOCTYPE html>
<html>
<!-- INICIO DEL HEAD -->
<head>
  <title>Mi primera página</title>
    <meta name="description" content="Cursos de programacion y diseño en Ciudad del este- Paraguay">
    <meta name="keywords" content="programacion, Cursos, diseño, ciudad del este"> 
    <?php include 'includes/head.php'; ?>
</head>
<!-- /FIN DEL HEAD -->
<body>
  <!-- INICIO DEL HEADER -->
  <?php include 'includes/header.php'; ?> 
  <!-- /FIN DEL HEADER -->
  <!-- INICIO DEL MAIN -->
   <main>
    <section class="main-header">
      <div class="container">
        <h1>Contacto</h1> 
        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</h2>     
      </div>      
   </section>

   <section class="contenido">
      <div class="container">
        <div class="col-md-3">
          <h3>Informaciones</h3>
          
          <div class="media">
              <div class="media-left">                
              </div>
              <div class="media-body">
                <h4 class="media-heading">Telefono</h4>
                <span>0983112965</span>                
              </div>
          </div>

          <div class="media">
              <div class="media-left">                
              </div>
              <div class="media-body">
                <h4 class="media-heading">Email</h4>
                <span>email@mipagina.com</span>                
              </div>
          </div>

          <div class="media">
              <div class="media-left">                
              </div>
              <div class="media-body">
                <h4 class="media-heading">Direccion</h4>
                <span>Avda. San Blas. Km 3 1/2 Ciudad del Este</span>                
              </div>
          </div>


        </div>

        <div class="col-md-9">
           <h3>Formulario de Contacto</h3>
           <form>
             <input type="text" name="nombre" class="form-control" placeholder="Nombre">

             <input type="text" name="apellido" class="form-control" placeholder="Apellido">

             <input type="text" name="asunto" class="form-control" placeholder="Asunto">

             <input type="text" name="telefono" class="form-control" placeholder="Telefono">

             <label>Mensaje</label>
             <textarea name="mensaje" class="form-control"></textarea>

             <button type="submit" name="enviar" class="btn btn-success">Enviar Mensaje</button>

           </form>
        </div>

      </div>     
   </section> 
   <SECTION>
     <DIV CLASS="container-FLUID">
      <DIV CLASS="ROW">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3600.8698889331054!2d-54.63178548498416!3d-25.50938548375189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f685bd8c314873%3A0xb12fbfc9747b41e3!2sCapacit!5e0!3m2!1ses-419!2spy!4v1546711392685" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>
        </iframe>
      </DIV>
    </DIV>
   </SECTION>
   </main>
   <!-- /FIN DEL CONTENIDO -->
   <!-- INICIO DEL FOOTER -->
  <?php include 'includes/footer.php';?>
  <!-- /FIN DEL FOOTER -->
    <?php include 'includes/script.php';?>
</body>
</html>