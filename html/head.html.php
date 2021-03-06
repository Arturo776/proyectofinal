<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>BEST © Arturo B. Mart&iacute;n</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Rock+Salt&family=Dancing+Script:wght@700&family=Julius+Sans+One&family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/includes/css/master.css">
    <script src="https://kit.fontawesome.com/e6dc47c4f5.js" crossorigin="anonymous"></script>
    <script src="/includes/jquery/jquery-3.5.1.min.js"></script>
  </head>
  <body>

  <header>
    <article class="logo-head">
      <h2>The Best</h2>
    </article>

    <article>
      <a class="author" href="/">Arturo B. Mart&iacute;n</a>
    </article>

    <article id="navigator">
      <section id="sections">
        <button type="button" onclick="showMenu()">
          <i class="fas fa-times"></i>
        </button>

        <a href="/html/calculadora/calculadora.html.php">Calculadora</a>
        <a href="/html/formulario.html.php">Formularios</a>
        <a href="/html/colores/index.html">Colores</a>
        <?php echo (isset($_SESSION["user"])) ? '<a href="/html/logout.php">Cerrar sesi&oacute;n</a>' : ''; ?>
      </section>
      <section id="menu" class="hidden">
        <button type="button" onclick="showMenu()">
          <i id="showMenu" class="fas fa-bars"></i>
        </button>
      </section>
    </article>
  </header>
