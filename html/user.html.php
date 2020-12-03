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
        <h2 class="orange-background">¡Bienvenido!, como ves el formulario funciona <i class="fas fa-smile-face"></i></h2>
      </article>
      <article>
        <h2>Espero que te agrade la est&eacute;tica y funcionalidad de este sitio web.</h2>
      </article>
    </main>

<?php require 'foot.html' ?>
