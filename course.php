<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--
        - primary meta tag
    -->
    <title>LCG | Courses</title>
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
    <link rel="stylesheet" href="./assets/css/course.css" />
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
          - #COURSE
        -->
        <section class="section about" id="about" aria-label="course">
          <div class="container">
            <figure class="about-banner">
              <img
                src="./assets/img/course-banner.jpg"
                alt="course banner"
                width="470"
                height="538"
                loading="lazy"
                class="w-100"
              />
            </figure>

            <div class="about-content">
              <h2 class="h2 section-title">Meet Our Courses</h2>

              <p class="section-text">Categories</p>

              <ul class="course-list">
                <li class="couse-item">
                  <ion-icon name="add"></ion-icon>

                  <span class="span">Basic Science And Humanities</span>
                </li>

                <li class="couse-item">
                  <ion-icon name="add"></ion-icon>

                  <span class="span">Computer Science And Technology</span>
                </li>

                <li class="couse-item">
                  <ion-icon name="add"></ion-icon>

                  <span class="span">Mechanical Engineering</span>
                </li>

                <li class="couse-item">
                  <ion-icon name="add"></ion-icon>

                  <span class="span">Electrical Engineering</span>
                </li>

                <li class="couse-item">
                  <ion-icon name="add"></ion-icon>

                  <span class="span">Civil Engineering</span>
                </li>
              </ul>
            </div>
          </div>
        </section>

        <section class="section course">
          <div class="container">
            <ul class="course-list">
              <li>
                <div class="course-card">
                  <figure
                    class="card-banner img-holder"
                    style="--width: 1180; --height: 800"
                  >
                    <img
                      src="./assets/img/course/Electrical-Engineering.jpg"
                      width="1180"
                      height="800"
                      loading="lazy"
                      alt="electrical engineering"
                      class="img-cover"
                    />
                  </figure>

                  <div class="card-content">
                    <h3 class="h3 card-title">
                      Electrical Engineering
                    </h3>

                    <p class="card-text">
                      Electrical engineering is a field that usually deals with the study and application of electricity, electrical machines, electromagnetism, power production and power distribution etc.
                    </p>
                  </div>
                </div>
              </li>

              <li>
                <div class="course-card">
                  <figure
                    class="card-banner img-holder"
                    style="--width: 1180; --height: 800"
                  >
                    <img
                      src="./assets/img/course/Computer-Science-Technology.jpg"
                      width="1180"
                      height="800"
                      loading="lazy"
                      alt="Computer Science and Technology"
                      class="img-cover"
                    />
                  </figure>

                  <div class="card-content">
                    <h3 class="h3 card-title">
                      Computer Science and Technology
                    </h3>

                    <p class="card-text">
                      Computer Science Technology is a three-year course that prepares students to work as entry-level software developers in small, medium or large enterprises. Our students gain experience in creating state-of-the-art software systems through theoretical and practical coursework in this department.
                    </p>
                  </div>
                </div>
              </li>

              <li>
                <div class="course-card">
                  <figure
                    class="card-banner img-holder"
                    style="--width: 1180; --height: 800"
                  >
                    <img
                      src="./assets/img/course/Mechanical-Engineering.jpg"
                      width="1180"
                      height="800"
                      loading="lazy"
                      alt="Mechanical Engineering"
                      class="img-cover"
                    />
                  </figure>

                  <div class="card-content">
                    <h3 class="h3 card-title">
                      Mechanical Engineering
                    </h3>

                    <p class="card-text">
                      The Department of Mechanical Engineering has traversed the path of knowledge dissemination and generation. The Department gives priority to update the Mechanical Engineering education, primarily driven by the dynamics of technological advances and sustainable development and the curriculum is revised on a continuous basis with active involvement of industry, alumni, research organizations and other stakeholders.
                    </p>
                  </div>
                </div>
              </li>

              <li>
                <div class="course-card">
                  <figure
                    class="card-banner img-holder"
                    style="--width: 1180; --height: 800"
                  >
                    <img
                      src="./assets/img/course/science-humanities.jpg"
                      width="1180"
                      height="800"
                      loading="lazy"
                      alt="Science and Humanities"
                      class="img-cover"
                    />
                  </figure>

                  <div class="card-content">
                    <h3 class="h3 card-title">
                      Science and Humanities
                    </h3>

                    <p class="card-text">
                      The Basic Science and Humanities Department of this prestigious institution has faculties with their vast knowledge in both theoretical and practical aspects in the subjects like Engineering Physics, Engineering Chemistry, Engineering Mathematics, English Language and Communication etc. It provides training in communication skills, personality development, group discussions etc. Separate labs have been set up for students to gather practical knowledge.
                    </p>
                  </div>
                </div>
              </li>

              <li>
                <div class="course-card">
                  <figure
                    class="card-banner img-holder"
                    style="--width: 1180; --height: 800"
                  >
                    <img
                      src="./assets/img/course/Civil-Engineering.jpg"
                      width="1180"
                      height="800"
                      loading="lazy"
                      alt="Civil Engineering"
                      class="img-cover"
                    />
                  </figure>

                  <div class="card-content">
                    <h3 class="h3 card-title">
                      Civil Engineering
                    </h3>

                    <p class="card-text">
                      The Department of Civil Engineering is one of the oldest engineering department, pulls out all stops to create outstanding engineers in building, road, bridges and dam construction – with advanced teaching techniques and learning aids. The department is well established with all the resources and well-equipped state of the art laboratory which includes Concrete Lab, Bitumen lab, AutoCAD lab, Survey lab, Geotechnical lab, Fluid lab, Environment lab etc to facilitate the teaching-learning process through which students gain the theoretical knowledge and practical applications.
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>

        <!--
          - #FOOTER
        -->
         <?php include 'footer.php'; ?>

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
  </body>
</html>
