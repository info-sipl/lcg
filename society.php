<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--
        - primary meta tag
    -->
    <title>LCG | Our Society</title>
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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> 

    <style>
     article{
        margin-bottom:20px;
        }

        .section.about{
        padding-top:30px;
        padding-bottom:40px;
        }
    </style>

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
      <?php include_once "includes/highlights.php"; ?>

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
        <section class="section about" id="about">
            <div class="container-fluid">

            <div class="row align-items-center">

            <div class="col-md-5">
              <figure class="about-banner">
                <img
                  src="./assets/img/logo/society.png"
                  alt="anti ragging banner"
                  class="img-fluid"
                />
              </figure>
            </div>

            <div class="col-md-7">
              <div class="about-content">
                <h2 class="h2 section-title">
                  LAKSMAN CHANDRA GHOSH MEMORIAL SOCIETY
                </h2>

                <p class="section-subtitle">
                  OUR SOCIETY STRUCTURE
                </p>
              </div>
            </div>

          </div>
        </div>
            </section>



            <!-- MEMBERS -->

            <section class="section members my-3">

            <div class="container">

            <div class="accordion accordion-flush" id="accordionFlushExample">

            <!-- PRESIDENT -->

            <div class="accordion-item">

            <h2 class="accordion-header">

            <button class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsePresident">

            President

            </button>

            </h2>

            <div id="collapsePresident"
            class="accordion-collapse collapse"
            data-bs-parent="#accordionFlushExample">

            <div class="accordion-body">

            <ol class="list-group list-group-numbered">

            <li class="list-group-item">
            MALAY PIT
            </li>

            </ol>

            </div>
            </div>
            </div>



            <!-- SECRETARY -->

            <div class="accordion-item">

            <h2 class="accordion-header">

            <button class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapseSecretary">

            Secretary

            </button>

            </h2>

            <div id="collapseSecretary"
            class="accordion-collapse collapse"
            data-bs-parent="#accordionFlushExample">

            <div class="accordion-body">

            <ol class="list-group list-group-numbered">

            <li class="list-group-item">
            DEBABRATA GHOSH
            </li>

            </ol>

            </div>
            </div>
            </div>



            <!-- TREASURER -->

            <div class="accordion-item">

            <h2 class="accordion-header">

            <button class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapseTreasurer">

            Treasurer

            </button>

            </h2>

            <div id="collapseTreasurer"
            class="accordion-collapse collapse"
            data-bs-parent="#accordionFlushExample">

            <div class="accordion-body">

            <ol class="list-group list-group-numbered">

            <li class="list-group-item">
            AJAY KUMAR MANDAL
            </li>

            </ol>

            </div>
            </div>
            </div>



            <!-- MEMBERS -->

            <div class="accordion-item">

            <h2 class="accordion-header">

            <button class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapseMembers">

            Member

            </button>

            </h2>

            <div id="collapseMembers"
            class="accordion-collapse collapse"
            data-bs-parent="#accordionFlushExample">

            <div class="accordion-body">

            <ol class="list-group list-group-numbered">

            <li class="list-group-item">SK OMAR ALI</li>
            <li class="list-group-item">CHAMPA PIT</li>
            <li class="list-group-item">FERDOUSI ANWAR</li>
            <li class="list-group-item">RUPALI GHOSH</li>
            <li class="list-group-item">SANTI KUMAR GHOSH</li>
            <li class="list-group-item">MONALISA MONDAL</li>
            <li class="list-group-item">MAINAK GHOSH</li>
            <li class="list-group-item">SWATI GHOSH MONDAL</li>
            <li class="list-group-item">ANANYA GHOSH</li>

            </ol>

            </div>
            </div>
            </div>


            </div>
            </div>

            </section>
        <!--
          - #FOOTER
        -->
        <footer class="footer">
          <div class="footer-top section">
            <div class="container">
              <div class="footer-brand">
                <a href="./index.html" class="logo">
                  <img
                    src="./assets/img/logo/footer-logo.png"
                    width="180"
                    alt="LCG Polytechnic"
                  />
                </a>

                <ul class="footer-list">
                  <li>
                    <p class="footer-list-title">Visitors</p>
                  </li>

                  <li class="footer-item">
                    <div class="item-icon">
                      <ion-icon name="rocket"></ion-icon>
                    </div>

                    <p class="item-text" data-visitor>0</p>
                  </li>

                  <li class="footer-item">
                    <div class="item-icon">
                      <ion-icon name="timer"></ion-icon>
                    </div>

                    <div class="item-text">
                      <div id="currentDateTime"></div>
                    </div>
                  </li>
                </ul>
              </div>

              <ul class="footer-list">
                <li>
                  <p class="footer-list-title">Quick Links</p>
                </li>

                <li>
                  <a href="" class="footer-link">
                    <ion-icon name="add"></ion-icon>

                    <span class="span">Know More College</span>
                  </a>
                </li>

                <li>
                  <a href="" class="footer-link">
                    <ion-icon name="add"></ion-icon>

                    <span class="span">President's Message</span>
                  </a>
                </li>

                <li>
                  <a href="" class="footer-link">
                    <ion-icon name="add"></ion-icon>

                    <span class="span">Principal's Message</span>
                  </a>
                </li>

                <li>
                  <a href="" class="footer-link">
                    <ion-icon name="add"></ion-icon>

                    <span class="span">Our Vision & Mission</span>
                  </a>
                </li>
              </ul>

              <ul class="footer-list">
                <li>
                  <p class="footer-list-title">Useful Links</p>
                </li>

                <li>
                  <a href="" class="footer-link">
                    <ion-icon name="add"></ion-icon>

                    <span class="span">AICTE INDIA</span>
                  </a>
                </li>

                <li>
                  <a href="" class="footer-link">
                    <ion-icon name="add"></ion-icon>

                    <span class="span">WBSCT & VE & SD</span>
                  </a>
                </li>

                <li>
                  <a href="" class="footer-link">
                    <ion-icon name="add"></ion-icon>

                    <span class="span">NATIONAL SCHOLARSHIP</span>
                  </a>
                </li>

                <li>
                  <a href="" class="footer-link">
                    <ion-icon name="add"></ion-icon>

                    <span class="span">Aikyashree Scholarship</span>
                  </a>
                </li>

                <li>
                  <a href="" class="footer-link">
                    <ion-icon name="add"></ion-icon>

                    <span class="span">SC ,ST & OBC Scholarship</span>
                  </a>
                </li>
              </ul>

              <ul class="footer-list">
                <li>
                  <p class="footer-list-title">Contact Us</p>
                </li>

                <li class="footer-item">
                  <div class="item-icon">
                    <ion-icon name="location"></ion-icon>
                  </div>

                  <address class="item-text">
                    Lambodarpur, Suri, Birbhum,<br />
                    West Bengal pin - 731101
                  </address>
                </li>

                <li class="footer-item">
                  <div class="item-icon">
                    <ion-icon name="call"></ion-icon>
                  </div>

                  <a href="tel:+919475887799" class="footer-link">
                    +91-9475887799
                  </a>
                </li>

                <li class="footer-item">
                  <div class="item-icon">
                    <ion-icon name="mail"></ion-icon>
                  </div>

                  <a href="mailto:lcgpolytechnic@gmail.com" class="footer-link">
                    lcgpolytechnic@gmail.com
                  </a>
                  <label> | </label>
              <a href="mailto:info@lcginstitute.com" class="contact-link">
               info@lcginstitute.com
              </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="footer-bottom">
            <div class="container">
              <p class="copyright">
                &copy;   2023 All Rights Reserved by
                <a href="https://www.siplhub.com/" target="_blank">
                  Sikharthy Infotech Pvt. Ltd.
                </a>
              </p>

              <ul class="social-list">
                <li>
                  <a
                    href="https://www.facebook.com/LCGIP/"
                    target="_blank"
                    class="social-link"
                  >
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>

                <!-- <li>
                  <a
                    href="https://www.instagram.com/sikharthyinfotech"
                    target="_blank"
                    class="social-link"
                  >
                    <ion-icon name="logo-instagram"></ion-icon>
                  </a>
                </li>

                <li>
                  <a
                    href="https://www.linkedin.com/company/sikharthy-infotech-pvt-ltd"
                    target="_blank"
                    class="social-link"
                  >
                    <ion-icon name="logo-linkedin"></ion-icon>
                  </a>
                </li> -->
              </ul>
            </div>
          </div>
        </footer>

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

    <!-- Body JS -->
        `<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


      <script>

      /* Sequential animation */

      document.addEventListener("DOMContentLoaded",function(){

      const items=document.querySelectorAll(".members .accordion-item");

      items.forEach((item,index)=>{

      setTimeout(()=>{

      if(index%2===0){
      item.classList.add("left-show");
      }
      else{
      item.classList.add("right-show");
      }

      },index*400);

      });

      });

      </script>


  </body>
</html>
