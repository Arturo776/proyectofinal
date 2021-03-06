<?php

/* Comprobar si hay una sesión establecida
*/
session_start();

if (isset($_SESSION["user"]))
{
  header ('Location: /');
}

/* Importar la clase 'DataBase' para conectarse y manejar la base de datos
*/
require '../db/DataBase.php';

/* Variable que guarda el éxito o error del formulario
*/
$error = false;

/* Recibir los datos del formulario una vez que se ha enviado
*/
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  // Guardar y limpiar los valores
  $user = isset($_POST['user']) ? $_POST['user'] : null;
  $user = filter_var($user, FILTER_SANITIZE_STRING);
  $user = trim(stream_filter_append($user, 'string.tolower'));

  $email = isset($_POST['email']) ? $_POST['email'] : null;
  $email = trim($email);
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);

  $password = isset($_POST['email']) ? $_POST['email'] : null;
  $password = hash('sha512', $password);

  // Registrar en la base de datos si se ha pulsado el botón 'subscribe'
  if (isset($_POST['subscribe']))
  {
    if (!empty($user)
      && !empty($email)
      && !empty($password))
    {
      $db = new DataBase('../db/users.sqlite3');
      $db->newUser($user, $email, $password);
    }
    else {
      $error = true;
    }

  // Establecer una sesión y redirigir a la página de usuario
  } elseif (isset($_POST['login']))
  {
    if (!empty($email)
      && !empty($password))
    {
      $db = new DataBase('../db/users.sqlite3');
      $user = $db->getUser($email, $password);
      if (!empty($user))
      {
        $_SESSION["user"] = $user;
        header("Location: user.html.php");
      }
      else {
        $error = true;
      }
    }
    else {
      $error = true;
    }
  }
}
?>

<?php require 'head.html.php' ?>

    <main id="formulary">
      <article>
        <form action="formulario.html.php" method="POST">
          <fieldset>
            <?php if (isset($error) && $error == true): ?>
            <p class="error">Los datos introducidos no son v&aacute;lidos</p>
            <?php endif; ?>
            <input type="text" name="user" placeholder="Usuario">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Contrase&ntilde;a">
          </fieldset>

          <button id="subscribe" name="subscribe" type="submit" onclick="submit()">Suscr&iacute;bete</button>
          <span class="color-white">o</span>
          <button id="login" name="login" type="submit" onclick="submit()">Entra</button>
        </form>
      </article>
      <article id="formulary_info">
        <p>¡Tranquilo!, los datos s&oacute;lo se almacenan para darle funcionalidad a este proyecto, no se comparten ni se publican ni se utilizan de ninguna manera</p>
      </article>
    </main>

<?php require 'foot.html' ?>
