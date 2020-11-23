<?php
require '../db/DataBase.php';

$error = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $user = isset($_POST['user']) ? $_POST['user'] : null;
  $user = filter_var($user, FILTER_SANITIZE_STRING);
  $user = trim(stream_filter_append($user, 'string.tolower'));

  $email = isset($_POST['email']) ? $_POST['email'] : null;
  $email = trim($email);
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);

  $password = isset($_POST['email']) ? $_POST['email'] : null;
  $password = hash('sha512', $password);

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
}
?>

<?php require 'head.html' ?>

    <main id="formulary">
      <article>
        <form action="formulario.html.php" method="post">
          <fieldset>
            <?php if (isset($error) && $error == true): ?>
            <p class="error">Los datos introducidos no son v&aacute;lidos</p>
            <?php endif; ?>
            <input type="text" name="user" placeholder="Usuario">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Contrase&ntilde;a">
          </fieldset>

          <button id="subscribe" type="submit" onclick="submit()">Suscribirse</button>
        </form>
      </article>
    </main>

<?php require 'foot.html' ?>
