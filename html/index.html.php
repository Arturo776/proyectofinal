<?php require 'head.html.php' ?>

    <main>
      <article id="about_me">
        <section>
          <button id="knowMore" type="button" onclick="aboutMe()">Saber m&aacute;s</button>
        </section>
        <section id="aboutMe" class="hidden">
          <div>
            <h2>Estudios</h2>
            <ul>
              <li>Desarrollo de Aplicaciones Web (2019-2021)</li>
              <li>Bachillerato de humanidades (2015-2019)</li>
            </ul>
          </div>
          <div>
            <h2>Aptitudes</h2>
            <ul>
              <li>T&iacute;tulo de ingl&eacute;s nivel B2</li>
              <li>Experiencia laboral en la empresa Hiniestic (2019-2021)</li>
            </ul>
          </div>
          <div>
            <h2>Objetivos</h2>
            <p>Uno de mis primeros objetivos es aprender Python (me he comprado un libro para empezar) y a manejar bases de datos no relacionales, adem&aacute;s de a usar distintos frameworks como Composer (que ya he usado en ocasiones). Todo lo que pueda resultarme &uacute;til me interesa.</p>
            <p>Me llama la atenci&oacute;n especialmente la maquetaci&oacute;n, el dise&ntilde;o y desarrollar aplicaciones. Quiero ser un buen programador y desarrollador web para poder dedicarme a esto como aut&oacute;nomo una vez haya adquirido la suficiente experiencia y reputaci&oacute;n. Me encantar&iacute;a ayudar al mundo con mi trabajo ofreciendo servicios novedosos a las personas, utilizando la programaci&oacute;n como una puerta para que personas en peor situaci&oacute;n que yo puedan mejorar su nivel de vida. Pero eso por ahora es un sueño.</p>
          </div>
          <div>
            <h2>Aspectos fuertes</h2>
            <ul>
              <li>Disfruto aprendiendo cosas nuevas</li>
              <li>Trabajador</li>
              <li>Incoporo lo aprendido en posteriores proyectos</li>
              <li>Me gusta seguir directrices</li>
            </ul>
          </div>
          <div>
            <h2>Aspectos a pulir</h2>
            <ul>
              <li>Me estresa no encontrarle utilidad a las cosas</li>
              <li>Tiendo a aburrirme si no comprendo algo</li>
              <li>Tardo un poco en acostumbrarme a cosas muy complejas</li>
              <li>Puedo perderme con directrices ambiguas</li>
            </ul>
          </div>
          <div id="hideAboutMe">
            <button id="hide_knowMore" onclick="aboutMe()">
              <i class="fas fa-arrow-up"></i>
            </button>
          </div>
        </section>
      </article>

      <article id="my_habilities">
        <section>
          <h2>CONOCIMIENTOS</h2>
        </section>
        <section>
          <div class="lightgreen">
            <h2>HTML/CSS, JS, JQuery</h2>
            <p>Dise&ntilde;o de p&aacute;ginas web din&aacute;micas, interactivas y <span class="cursive">responsive</span>.</p>
            <p>Cada d&iacute;a aprendo algo nuevo que aplicar a mis proyectos.</p>
          </div>

          <div class="lightblue">
            <h2>PHP, Java</h2>
            <p>Control del entorno servidor. Creaci&oacute;n de clases, objetos, controladores, etc.</p>
            <p>Se me da bien mirar la documentaci&oacute;n de cada lenguaje, por lo que aprender un nuevo lenguaje no me resulta dif&iacute;cil.</p>
          </div>

          <div class="orange">
            <h2>SQL</h2>
            <p>Sentencias CRUD, triggers, relaciones por claves for&aacute;neas, etc.</p>
            <p>Hasta ahora he trabajado con MySQL, SQLite3 y PHPMyAdmin.</p>
          </div>
        </section>
      </article>

      <article id="my_virtues">
        <section>
          <h2>PRINCIPIOS</h2>
        </section>
        <section>
          <div class="orange">
            <h2>Creatividad</h2>
            <p>Una p&aacute;gina web es m&aacute;s que una galer&iacute;a de contenido; debe tener, adem&aacute;s, l&oacute;gica est&eacute;tica y personalidad.</p><p>No tiene sentido diseñar y desarrollar un sitio web si no es atractivo en su presentaci&oacute;n, c&oacute;modo en su uso y f&aacute;cilmente distinguible de los dem&aacute;s.</p>
          </div>

          <div class="lightgreen">
            <h2>Sencillez</h2>
            <p>Muchos elementos sueltos en una pantalla pueden irritar a los visitantes de una p&aacute;gina.</p>
            <p>Hay que llevar a cabo una distribuci&oacute;n inteligente de los botones, enlaces y art&iacute;culos que la conforman para causar una buena sensaci&oacute;n y, a mayores, facilitar la navegaci&oacute;n y el disfrute de cada web que se desarrolle.</p>
          </div>

          <div class="lightblue">
            <h2>Utilidad</h2>
            <p>Lo m&aacute;s importante es, sin duda, suplir las necesidades tanto del cliente como del usuario.</p><p>Una web no tiene por qu&eacute; ser complicada, recargada y poco intuitiva para ser 'profesional' o 'pr&aacute;ctica'. Una navegaci&oacute;n r&aacute;pida y directa es lo m&aacute;s beneficioso para todas las partes.</p>
          </div>
        </section>
      </article>
    </main>

    <script type="text/javascript">
      $(document).ready(function(){
        $("#knowMore").click(function(){
          $("#aboutMe").slideToggle("slow")
        }),
        $("#hide_knowMore").click(function(){
          $("#aboutMe").slideToggle("slow")
        })
      });
    </script>

<?php require 'foot.html' ?>
