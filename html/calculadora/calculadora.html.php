<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>BEST © Arturo B. Mart&iacute;n</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Rock+Salt&family=Dancing+Script:wght@700&family=Julius+Sans+One&family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="master.css">
    <script src="https://kit.fontawesome.com/e6dc47c4f5.js" crossorigin="anonymous"></script>
    <script src="/includes/jquery/jquery-3.5.1.min.js"></script>
  </head>
  <body>

  <header>
    <article class="logo-head">
      <h2>The Best</h2>
    </article>

    <article>
      <a class="author" href="../index.html.php">Arturo B. Mart&iacute;n</a>
    </article>

    <article id="navigator">
      <section id="sections">
        <button type="button" onclick="showMenu()">
          <i class="fas fa-times"></i>
        </button>

        <a href="../calculadora/calculadora.html.php">Calculadora</a>
        <a href="../formulario.html.php">Formularios</a>
        <a href="../colores/index.html">Colores</a>
        <a href="../entrar.html.php">Opciones</a>
      </section>
      <section id="menu" class="hidden">
        <button type="button" onclick="showMenu()">
          <i id="showMenu" class="fas fa-bars"></i>
        </button>
      </section>
    </article>
  </header>

    <main>
      <article id="calculator">
        <input id="operation" type="text" value="">

        <div id="tokens">
          <section id="numbers">
            <button type="button" onclick="addNumber(1)">1</button>
            <button type="button" onclick="addNumber(2)">2</button>
            <button type="button" onclick="addNumber(3)">3</button>
            <button type="button" onclick="addNumber(4)">4</button>
            <button type="button" onclick="addNumber(5)">5</button>
            <button type="button" onclick="addNumber(6)">6</button>
            <button type="button" onclick="addNumber(7)">7</button>
            <button type="button" onclick="addNumber(8)">8</button>
            <button type="button" onclick="addNumber(9)">9</button>
            <button type="button" onclick="addNumber(0)">0</button>
          </section>
          <section id="symbols">
            <button type="button" onclick="addToken('+')"><i class="fas fa-plus"></i></button>
            <button type="button" onclick="addToken('-')"><i class="fas fa-minus"></i></button>
            <button type="button" onclick="addToken('*')"><i class="fas fa-times"></i></button>
            <button type="button" onclick="addToken('/')"><i class="fas fa-divide"></i></button>
          </section>
          <section id="calculate">
            <button type="button" onclick="Erase()"><i class="fas fa-backspace"></i></button>
            <button type="button" onclick="Calculate()"><i class="fa fa-equals"></i></button>
          </section>
        </div>
      </article>

    </main>

    <?php require '../foot.html' ?>
    <script src="master.js" type="text/javascript"></script>
  </body>
</html>
