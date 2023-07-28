<!DOCTYPE html>
<html lang="es"><!-- para cambiar el idioma a la sintaxis-->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,700;1,300;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="./estilos CSS/estilosf.css">
<link rel="stylesheet" href="/esilos/normalize.css">

  <title>mi segunda pagina</title><!-- la etiqueta "title" sirve para darle titulo a la pagina-->
</head><!-- la etiqueta "head" sirve para guardar los meta datos-->
<body><!-- la etiqueta body sirve para iniciar el cuerpo de la pagina-->
  <div><!-- la etiqueta div sirve para dividir la seccion-->
    <header  class="contenido">
      <h1>empresa de reciclaje</h1><!-- la etiqueta h1 es para agregar un titulo a la pagina principal-->
      <a href="Index.html">
        <img src="/img/batman.jpg" alt="reciclaje"><!-- la etiqueta "img" sirve para insertar una imagen a la pagina-->
        </a>
      <div class="navegacion">
        <a href="manejo.html"target="_blank"> manejo de basura </a> <!-- la etiqueta "a" sirve para realizar un enlace-->
        <a href="residuos.html" target="_blank"> residuos peligrosos</a>
        <a href="quimicos.html" target="_blank"> residuos quimicos</a>
        <a href="pet.html" target="_blank"> manejo de pet</a>
      </div><!--cierre de div navegacion-->
    
    </header>
  </div>

    <main class="contenedor"> 
      <h1>formulario</h1>
      <form  action="conexion.php" method="post" class="formulario" >
         <fieldset>
          <legend>tu informacion es muy importante</legend>
        <div class="contenedor-campos"><!--abre -->
        <div class="campos">
          <label>no.</label>
          <input class="input-text" type="number" name="id" placeholder="ingrese numero">
        </div><!--cierre de clase campos-->
          <div class="campos">
          <label>nombre </label>
      <input class="input-text" type="text" name="nom" placeholder="tu nombre">

        </div><!--cierre de clase campos-->

        <div class="campos">
         <label >telefono</label>
         <input class="input-text" type="text" name="tel" placeholder="tu telefono">

        </div><!--cierre de calse campos telefono-->
        
        <div class="campos"><!--cierre clase campo correo-->
        <label >correo</label>       
        <input class="input-text" type="email" name="corr" placeholder="tu correo">
        </div>

        <div class="campos"><!--cierre clase campo correo-->
          <label>mensaje</label>
          <textarea class="input-text" name="mens">
          </textarea>
        </div>
       </div><!--cierre de clase contenedor-campos-->

        <div class="alinear-derecha flex">
          <button class="boton w-100" type="submit" name="register" value="enviar"> Enviar </button>
          <button class="boton w-100" type="submit" name="eliminar">Eliminar</button>

       </div><!--cierre clase-->
        
      </fieldset>
      </form>

    </main>

    <?php
        include("registro.php")
    ?>
  </body><!-- se cierra el cuerpo de la pagina-->
    <footer>
    <div class="redes"><a href="http://instagram.com/username"><img src="./imagnes/inst.png" width="45" height="45" alt="Instagram"></a>
    <a href="http://facebook.com/username"><img src="./imagnes/face.png" width="45" height="45" alt="Facebook"></a>
    <a href="http://youtube.com/user/username" ><img src="./imagnes/yt.png" width="45" height="45" alt="YouTube"></a>
    <a href="http://twitter.com/user/username" ><img src="./imagnes/twtt.png" width="45" height="45" alt="twitter"></a>
  </div>
        </div>
    </footer>
    



</html><!-- es el cierre de la pagina-->