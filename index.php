<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <!-- Material icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Nose</title>
  </head>
  <body>
    <nav>
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo center">Logo</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="">Buscar usuario</a></li>
        <li class="active"><a href="">Cosa2</a></li>
      </ul>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="active"><a href="">Usuario</a></li>
        <li><a href="">Cerrar sesion</a></li>
      </ul>
    </div>
  </nav>
    <div class="row">
      <div class="col s1">Frase Chida</div>
      <div class="col s6 offset-s6">
        <form class="col s12" action="index.html" method="post">
          <div class="input-field col s6">
            <input type="text" id="usuario" class="validate">
              <label for="usuario">Nombre De Usuario</label>
          </div>
          <div class="input-field col s6">
            <input type="text" id="pass" class="validate">
              <label for="pass">Contraseña</label>
          </div>
          <div class="input-field col s7">
            <input type="text" id="mail">
              <label for="mail">Correo Electronico</label>
          </div>
          <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
          </button>
        </form>
      </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/materialize.min.js"></script>
  </body>
</html>
