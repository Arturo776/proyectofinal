<?php
require '../db/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $user = isset($_POST['user']) ? $_POST['user'] : null;
  $email = isset($_POST['email']) ? $_POST['email'] : null;
  $password = isset($_POST['email']) ? $_POST['email'] : null;

  if (!empty($user)
    && !empty($email)
    && !empty($password))
  {
    $user = strtolower(htmlspecialchars(trim($user)));
    $email = trim($email);
    $password = hash('sha512', $password);

    newUser($user, $email, $password);
  }
  else {
    header('Location: ../index.php');
  }
}
?>

<?php require 'head.html' ?>

    <main id="formulary">
      <article>
        <form action="formulario.html.php" method="post">
          <fieldset>
            <input type="text" name="user" placeholder="Usuario">

            <input type="email" name="email" placeholder="Email">

            <input type="password" name="password" placeholder="Contrase&ntilde;a">
          </fieldset>

          <button id="subscribe" type="submit" onclick="submit()">Suscribirse</button>
        </form>
      </article>
    </main>

<?php require 'foot.html' ?>
