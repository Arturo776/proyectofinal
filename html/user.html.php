<?php

/* Comprobar si hay una sesión establecida
*/
session_start();

if (!isset($_SESSION["user"]))
{
  header ('Location: /');
}

?>

<?php require 'head.html.php' ?>

    <main id="user_options">
      <article>
        <h2>¡Bienvenido!, como ves el formulario funciona <i class="fas fa-smile-face"></i></h2>
      </article>
      <article>
        <h3>Espero que te agrade la est&eacute;tica y la funcionalidad de este sitio web.</h3>
        <section id="logout-container">
          <a id="logout" href="/html/logout.php">Cerrar sesi&oacute;n</a>
        </section>
      </article>
    </main>

<?php require 'foot.html' ?>
