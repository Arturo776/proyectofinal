<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>BEST © Arturo B. Mart&iacute;n</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Julius+Sans+One&family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/master.css">
    <script src="https://kit.fontawesome.com/e6dc47c4f5.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <header>
      <article>
        <p class="author">Arturo B. Mart&iacute;n</p>
      </article>

      <article id="sections">
        <a href="/html/calculadora/calculadora.html">Calculadora</a>
        <a href="#">Formularios</a>
        <a href="#">Opciones</a>
      </article>
    </header>

    <main>
      <article id="about_me">
        <section>
          <button onclick="aboutMe()">Sobre m&iacute;</button>
        </section>
        <section id="aboutMe" class="hidden">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </section>
      </article>

      <article id="my_habilities">
        <section class="lightgreen">
          <h2>HTML/CSS/JS</h2>
          <p>Dise&ntilde;o de p&aacute;ginas web din&aacute;micas, interactivas y <i>responsive</i>.</p>
        </section>

        <section class="lightblue">
          <h2>PHP</h2>
          <p>Control del entorno servidor. Creaci&oacute;n de clases, objetos, controladores, etc.</p>
        </section>

        <section class="orange">
          <h2>SQL</h2>
          <p>Sentencias CRUD, triggers, relaciones por claves for&aacute;neas, etc.</p>
        </section>
      </article>

      <article id="my_virtues">
        <section class="orange">
          <h2>Creatividad</h2>
          <p>Una p&aacute;gina web es m&aacute;s que una galer&iacute;a de contenido; debe tener, adem&aacute;s, l&oacute;gica est&eacute;tica y personalidad.</p><p>No tiene sentido diseñar y desarrollar un sitio web si no es atractivo en su presentaci&oacute;n, c&oacute;modo en su uso y f&aacute;cilmente distinguible de los dem&aacute;s.</p>
        </section>

        <section class="lightgreen">
          <h2>Sencillez</h2>
          <p>Muchos elementos sueltos en una pantalla pueden irritar a los visitantes de una p&aacute;gina.</p><p>Hay que llevar a cabo una distribuci&oacute;n inteligente de los botones, enlaces y art&iacute;culos que la conforman para causar una buena sensaci&oacute;n y, a mayores, facilitar la navegaci&oacute;n y el disfrute de cada web que se desarrolle.</p>
        </section>

        <section class="lightblue">
          <h2>Utilidad</h2>
          <p>Lo m&aacute;s importante es, sin duda, suplir las necesidades tanto del cliente como del usuario.</p><p>Una web no tiene por qu&eacute; ser complicada, recargada y poco intuitiva para ser 'profesional' o 'pr&aacute;ctica'. Una navegaci&oacute;n r&aacute;pida y directa es lo m&aacute;s beneficioso para todas las partes.</p>
        </section>
      </article>
    </main>

    <footer>
      <article class="logo">
        <h2>The Best</h2>
      </article>

      <article id="credits">

      </article>

      <article class="author">
        <p>Arturo B. Mart&iacute;n</p>
      </article>
    </footer>

    <script type="text/javascript">

      function aboutMe()
      {
        var aboutMe = document.getElementById("aboutMe");
        aboutMe.classList.toggle("hidden");
      }
    </script>
  </body>
</html>
