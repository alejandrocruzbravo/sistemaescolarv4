
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">

    <title>SchoolSystem - Login</title>
</head>
<body>
<nav class="navbar is-primary">
  <img src="img/logo.PNG" width="500px" height="500px">
</nav>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="columns is-mobile">
    <div class="column is-three-fifths is-offset-one-fifth">
      <div class="container">
        <div class="notification is-primary">
          <h2 align="center" class="subtitle is-2"><img align="center" src="img/nombre.svg" width="50px" height="50px">INICIO DE SESIÓN</h2>

          <form action="database/login.php" method="post" >
            <div class="field">
              <label class="label">Usuario</label>
              <div class="control">
                <input class="input is-primary" name="usuario" type="text" placeholder="Ingresa tu nombre de usuario">
              </div>
            </div>
            <div class="field">
              <label class="label">Contraseña</label>
              <div class="control">
                <input class="input is-primary" name="password" type="password" placeholder="password">
              </div>
            </div>
            <br>
            <div class="buttons">
                <input type="submit" class="button is-success" value="ACCEDER">
              </div>
          </form>

        </div>
      </div>
    </div>
  </div>
  <?php require 'partials/footer.html'; ?>
</body>
</html>