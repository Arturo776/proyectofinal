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

    <main id="user_options">
      <article>
        <h2>¡Bienvenido!, como ves el formulario funciona <i class="fas fa-smile-face"></i></h2>
      </article>
      <article>
        <h2>Aqu&iacute; puedes cambiar ciertas cosas de la p&aacute;gina para que te resulte m&aacute;s c&oacute;modo navegar por ella:</h2>
      </article>
    </main>

<?php require 'foot.html' ?>
