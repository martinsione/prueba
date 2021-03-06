<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- CSS slick -->
    <link
      rel="stylesheet"
      type="text/css"
      href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />

    <!-- CSS Normalize -->
    <link rel="stylesheet" href="css/normalize.css" />

    <!-- CSS styles -->
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="/prueba/css/styles.css" />
    <title>Martin Sione Jr dev</title>
  </head>
  <body>
    <main>
      <!-- Home section -->
      <section id="home">
        <div id="home-wrapper">
          <div class="photo">
            <img src="img/gray-square.png" alt="" />
          </div>
          <div class="text-center">
            <h1>Martin<span>Sione</span></h1>
            <div class="badge">
              <h2>Web Developer</h2>
            </div>
            <!-- Cierra badge -->
          </div>
          <!-- Cierra text-center -->
          <div class="social">
            <a href="#" target="_blank">
              <i class="fa fa-linkedin-square" aria-hidden="true"></i>
            </a>
            <a href="https://www.github.com/martinsione" target="_blank">
              <i class="fa fa-github" aria-hidden="true"></i>
            </a>
          </div>
          <!-- Cierra social -->
          <div class="contact-block">
            <span class="location" title="Address">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              Paraná, Entre Rios, Argentina.
            </span>
            <span class="mail" title="Mail">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <a href="mailto:sionemartin@hotmail.com"
                >sionemartin@hotmail.com</a
              >
            </span>
          </div>
          <!-- Cierra contact-block -->
          <div class="btn">
            <a href="#" target="_blank">
              <i class="fa fa-download" aria-hidden="true"></i>
              Download CV
            </a>
          </div>
          <!-- Cierra btn -->
        </div>
      </section>
      <!-- Cierra Home section -->
      <!-- Wrapper -->
      <div id="wrapper">
        <!-- About section -->
        <section id="about">
          <article class="description">
            <h3>About Me</h3>
            <p>
              Adipisicing blanditiis neque neque assumenda maxime expedita,
              molestias. Facilis asperiores ea consequuntur sequi similique!
              Accusamus doloremque nihil dolores quisquam praesentium odit.
              Optio ducimus numquam nesciunt quod voluptates! Aperiam eos
              consequatur
            </p>
          </article>
          <article class="stack">
            <h3>Skills</h3>
            <p>
              Dolor lorem nisi omnis recusandae iste. Ut laboriosam deleniti
              rerum perferendis illo aut dicta Natus provident odio fugiat minus
              voluptatum Aliquam animi aliquid sit laudantium vitae rerum Ea
              blanditiis porro. Elit ipsam id vel optio aut illum? Perspiciatis
              iste beatae nihil omnis consectetur, sapiente, recusandae Sit
              animi ratione repudiandae corporis exercitationem. Fuga eaque sunt
              ipsam autem veniam sit. Rerum facilis
            </p>
          </article>
        </section>

        <!-- Cierra About section -->

        <!-- Work section -->
        <section id="portfolio">
          <article>
            <h3>Portfolio</h3>
            <div id="portfolio-img">
              <a href="#">
                <img src="img/portfolio-img.png" alt="" />
              </a>
              <a href="#">
                <img src="img/portfolio-img.png" alt="" />
              </a>
              <a href="#">
                <img src="img/portfolio-img.png" alt="" />
              </a>
            </div>
          </article>
        </section>

        <!-- Cierra Work section -->

        <!-- Contact section -->
        <section id="contact">
          <article>
            <h3>Contact</h3>
            <form action="enviar.php" method="post">
              <input
                type="text"
                name="name"
                placeholder="Full name"
                id="name"
                required
              />
              <input
                type="email"
                name="email"
                placeholder="Email"
                id="email"
                pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$"
                required
              />
              <div>
                <textarea
                  name="message"
                  id=""
                  placeholder="Your message"
                  required
                ></textarea>
              </div>
              <div class="submit-btn">
                <input type="submit" value="Enviar" />
              </div>
            </form>
          </article>
        </section>

        <!-- Cierra Contact section -->
      </div>
      <div style="clear: both"></div>

      <!-- JS slick -->
      <script
        type="text/javascript"
        src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
      ></script>
    </main>
  </body>
</html>
