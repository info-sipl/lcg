<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--
        - primary meta tag
    -->
    <title>LCG | Academic Calender</title>
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
    <link rel="stylesheet" href="./assets/css/about.css" />
    <link rel="stylesheet" href="./assets/css/academic-calender.css" />
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
          - #NOTICE
        -->
        <section class="section about" id="about" aria-label="about">
          <div class="container">
            <figure class="about-banner">
              <img
                src="./assets/img/academic-banner.jpg"
                alt="academic banner"
                width="470"
                height="538"
                loading="lazy"
                class="w-100"
              />
            </figure>

            <div class="about-content">
              <h2 class="h2 section-title">Academic Calender</h2>
            </div>
          </div>
        </section>

        <section class="section notice" id="notice" aria-label="notice">
          <div class="container">
            <ul class="notice-list">
              <li>
                <div class="notice-card">
                  <h3 class="h3 card-title text-center">
                    Odd Semester Payment On 15.09.2024 :
                  </h3>

                  <a
                    href="./assets/pdf/odd-semester-payment-notice.pdf"
                    class="btn"
                    download
                  >
                    Download PDF

                    <ion-icon name="download"></ion-icon>
                  </a>
                </div>
              </li>

              <li>
                <div class="notice-card">
                  <h3 class="h3 card-title text-center">
                    3rd & 5th Semester classes of Diploma in Engineering &
                    Technology will commence from 07-08-2024 :
                  </h3>

                  <a
                    href="./assets/pdf/3rd-5th-sem-commence-notice.pdf"
                    class="btn"
                    download
                  >
                    Download PDF

                    <ion-icon name="download"></ion-icon>
                  </a>
                </div>
              </li>

              <li>
                <div class="notice-card">
                  <h3 class="h3 card-title text-center">
                    Draft Routine for Even Semester :
                  </h3>

                  <a
                    href="./assets/pdf/even-sem-routin.pdf"
                    class="btn"
                    download
                  >
                    Download PDF

                    <ion-icon name="download"></ion-icon>
                  </a>
                </div>
              </li>
            </ul>
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
