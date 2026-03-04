<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--
        - primary meta tag
    -->
    <title>LCG | About</title>
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
  </head>
 
  <body>
    

    <!--
      - #HEADER
    -->
      <!-- ===== PAGE LOADER START ===== -->
      <!-- <div id="page-loader">
        <div class="loader-content">
          <img src="./assets/img/logo/logo.png" alt="LCG Logo" class="loader-logo">
        </div>
      </div> -->
      <!-- ===== PAGE LOADER END ===== -->

    <!--
      - #HEADER
    -->
  
      <?php include 'menu.php'; ?>
      <?php include_once "includes/highlights.php"; ?>
    <main>
      
    <article>

        <!--
          - #ABOUT
        -->
        <section class="section about" id="about" aria-label="about">
          <div class="container">
            <figure class="about-banner">
              <img
                src="./assets/img/about-banner-2.jpg"
                alt="about banner"
                width="470"
                height="538"
                loading="lazy"
                class="w-100"
              />
            </figure>

            <div class="about-content">
              <p class="section-subtitle">About Us</p>

              <h2 class="h2 section-title">Brief Profile Of LCG Polytechnic</h2>

              <p class="section-text">
                The Polytechnic Education in our State was introduced immediately after independence. To look after the academic activities of polytechnic education, ‘State Council for Engineering & Technical Education’ was set-up as a Government outfit by an executive order. The Council was a part of the Chief Inspectorate of Technical Education and subsequently of the Directorate of Technical Education. West Bengal State Council of Technical and Vocational Education and Skill Development was formed as a Statutory Body under the West Bengal Act XXVI of 2013. LCG Institute of Polytechnic is one of the prestigious institutions of West Bengal which has been carrying its glory since the establishment of this college. LCG Polytechnic College came into existence in 2016 due to the missionary zeal of the visionary. LCG Institute of Polytechnic is situated at Lambodarpur, which is Five (5 KM) away from Suri town. It is situated on the road of Suri-Rampurhat of Birbhum District.
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

        <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
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

    <!-- JS Script -->

      <script>

          document.addEventListener("DOMContentLoaded", function(){

          const aboutSection = document.querySelector(".about-animate");
          const image = document.querySelector(".zoom-rotate");
          const content = document.querySelector(".slide-content");
          const texts = document.querySelectorAll(".text-reveal");

          function runAboutAnimation(){

          image.classList.add("active");
          content.classList.add("active");

          texts.forEach((el,index)=>{
          setTimeout(()=>{
          el.classList.add("active");
          },200 * index);
          });

          }

          /* Run animation on page load */
          runAboutAnimation();


          /* Scroll animation */

          const observer = new IntersectionObserver((entries)=>{

          entries.forEach(entry=>{

          if(entry.isIntersecting){

          runAboutAnimation();

          }else{

          image.classList.remove("active");
          content.classList.remove("active");

          texts.forEach(el=>{
          el.classList.remove("active");
          });

          }

          });

          },{threshold:0.35});

          observer.observe(aboutSection);

          });

    </script>
  </body>
</html>
