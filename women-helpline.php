<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--
        - primary meta tag
    -->
    <title>LCG | Women Helpline</title>
    <meta name="title" content="LCG Institute of Polytechnic" />
    <meta
      name="description"
      content="LCG Institute of Polytechnic:Empowering Innovators with Industry-Relevant Education, Experienced Faculty, and Modern Facilities. Discover Our Diploma Programs for a Bright Future."
    />

    <!--
        - favicon
    -->
    <link
      rel="shortcut icon"
      href="./assets/img/fav.png"
      type="image/xml+png"
    />

    <!--
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&family=Roboto:wght@500;700&display=swap"
      rel="stylesheet"
    />

    <!--
        - bootstrap css link
    -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />

    <!--
      - reset css link
    -->
    <link rel="stylesheet" href="./assets/css/reset.css" />

    <!--
      - custom css link
    -->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/anti-ragging.css" />
  </head>
  <body>
    <!--
      - #HEADER
    -->
      <?php include 'menu.php'; ?>
      <?php include_once "includes/highlights.php"; ?>

    <main>
      <article>
        <!--
          - #ANTI RAGGING
        -->
        <section class="section about" id="about" aria-label="about">
          <div class="container">
            <figure class="about-banner">
              <img
                src="./assets/img/helpline-banner.jpg"
                alt="anti ragging banner"
                width="470"
                height="538"
                loading="lazy"
                class="w-100"
              />
            </figure>

            <div class="about-content">
              <p class="section-subtitle">Women Helpline</p>

              <h2 class="h2 section-title">Mrs.Tumpa Roy</h2>

              <p class="section-text">
                <span class="span">Staff of LCG Institute of Polytechnic</span>
                <span class="span">Suri-1, Birbhum, 731101</span>
                <span class="span" style="color: var(--red)">
                  Mobile Number :
                  <a href="tel:+918388882991" style="display: inline-block">
                    +91-8388882991
                  </a>
                </span>
              </p>
            </div>
          </div>
        </section>

        <!--
          - #FOOTER
        -->
        <?php include 'footer.php'; ?>

        <!--
          - #BACK TO TOP
        -->

        <a
          href="#top"
          class="back-top-btn"
          aria-label="back to top"
          data-back-top-btn
        >
          <ion-icon name="caret-up"></ion-icon>
        </a>
      </article>
    </main>

    <!--
        - bootstrap js link
    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!--
        - ion-icon link
    -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>

    <!--
      - custom js link
    -->
    <script src="./assets/js/script.js"></script>
  </body>
</html>
