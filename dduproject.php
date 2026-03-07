<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--
        - primary meta tag
    -->
    <title>LCG | DDU - KGY</title>
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

    <!--<main>-->
    <!--  <article>-->
        <!-- ANTI RAGGING-->
    <!--    -->
        <section class="section about" id="about" aria-label="about">
          <div class="container">
            <figure class="about-banner">
              <img
                src="./assets/img/logo/ddu.png"
                alt="anti ragging banner"
                width="470"
                height="538"
                loading="lazy"
                class="w-100"
              />
            </figure>

            <div class="about-content">
              <p class="section-subtitle">Our Projects under DDU-GKY</p>

              <h5 class="h5 section-title">(Sanction Order No. : PBSSD/PJ/DDUGKY/SO-0119/2022/3677)</h5>
              <h4 class="h4 section-title">PIA Name : Laksman Chandra Ghosh Memorial Society</h4>
                <br>
              <p class="section-text">
                <span class="span"><h4>Trade of Training:</h4></span>
                <span class="span"><b>Four Wheeler Service Assistant</b></span>
                <span class="span"><b>Quality Seed Grower</b></span>
                <br>
                <span class="span" style="color: var(--red)">
                  Overview :
                </span>
                <p>
                    The Deen Dayal Upadhyaya Grameen Kaushalya Yojana (DDU-GKY) is a skill training and placement program launched by the Ministry of Rural Development, 
                    Government of India, on September 25, 2014. This initiative aims to empower rural youth with employable skills, providing them sustainable employment opportunities. <br>
                    <br>
                    <b>Age Group:</b> Targets rural youth between 15 to 35 years old from poor families.<br>
                    <b>Skill Training:</b> Offers industry-relevant training in sectors like agriculture, construction, retail, and hospitality.<br>
                    <b>Placement Support:</b> Connects beneficiaries with potential employers and provides placement support.<br>
                    <b>Post-Placement Support:</b> Offers mentorship, counseling, and access to resources to help beneficiaries settle into new jobs.<br>

                </p>
                <br>
                <p>
                    <b>Benefits:</b>
                    <ul>
                        <li>Free Skill Training</li>
                        <li>Placement Opportunities</li>
                        <li>Financial Support</li>
                        <li>Career Progression</li>
                    </ul>
                    <br>
                    <h4><b>Eligibility:</b></h4>
                        <ul>
                            <li><b>Indian Citizenship:</b> Applicants must be Indian citizens.</li>
                            <li><b>Age:</b> Between 15 to 35 years old (upper age limit relaxed to 45 years for special groups).</li>
                            <li><b>Income:</b> Belong to poor families, with priority given to BPL families, MGNREGA worker families, and others.</li>
                        </ul>
                        
                </p>
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
