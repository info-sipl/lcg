<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--
        - primary meta tag
    -->
    <title>LCG Institute of Polytechnic</title>
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
  </head>
  <body>
      <?php include_once "includes/highlights.php"; ?>

    <!--
      - #HEADER
    -->
    <header class="header">
      <div class="header-top">
        <div class="container">
          <ul class="contact-list">
            <li class="contact-item">
              <ion-icon name="mail"></ion-icon>

              <a href="mailto:lcgpolytechnic@gmail.com" class="contact-link">
                lcgms16@gmail.com
              </a>
            </li>

            <li class="contact-item">
              <ion-icon name="call"></ion-icon>

              <a href="tel:+919475887799" class="contact-link">
                +91-9475887799
              </a>

              <!--<a href="tel:+917479043848" class="contact-link">-->
              <!--  +91-7479043848-->
              <!--</a>-->
            </li>
          </ul>

          <ul class="social-list">
            <li class="social-item">
              <a
                href="https://www.facebook.com/LCGIP/"
                target="_blank"
                class="social-link"
              >
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="header-bottom" data-header>
        <div class="container">
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a href="./main_society.php" style="color: red; text-decoration: none;">
                    <h2 style="font-weight: bold;">LAKSMAN CHANDRA GHOSH MEMORIAL SOCIETY</h2>
                </a>        
              <a class="navbar-brand" href="./index.php">
                <img
                  src="./assets/img/logo/logo.png"
                  width="180"
                  alt="LCG Polytechnic"
                />
              </a>
              
              <button
                class="navbar-toggle"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
              >
                <ion-icon name="menu-sharp" class="menu-icon"></ion-icon>

                <ion-icon name="close-sharp" class="close-icon"></ion-icon>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="./index.php">
                      Home
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="./about.php">About Us</a>
                  </li>

                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Administration
                    </a>

                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="./society.php">
                          Society Members
                        </a>
                      </li>    
                        
                      <li>
                        <a class="dropdown-item" href="./student-welfare.php">
                          Student Welfare Committee - 2024
                        </a>
                      </li>

                      <li>
                        <a class="dropdown-item" href="./anti-ragging.php">
                          Anti Ragging Committee - 2024
                        </a>
                      </li>

                      <li>
                        <a
                          class="dropdown-item"
                          href="./internal-complaint.php"
                        >
                          Internal Complaint Commitee - 2024
                        </a>
                      </li>

                      <li>
                        <a
                          class="dropdown-item"
                          href="./grievance-redemption.php"
                        >
                          Grievance Redemption Committee - 2024
                        </a>
                      </li>

                      <li>
                        <a class="dropdown-item" href="./women-helpline.php">
                          Women Helpline
                        </a>
                      </li>
                      
                      <li>
                        <a class="dropdown-item" href="./ddu.php">
                          Our Projects
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Academic
                    </a>

                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="./faculty.php">
                          Our Faculty
                        </a>
                      </li>

                      <li>
                        <a
                          class="dropdown-item"
                          href="./academic-calender.php"
                        >
                          Academic Calender
                        </a>
                      </li>

                      <li>
                        <a class="dropdown-item" href="./syllabus.php">
                          Syllabus
                        </a>
                      </li>

                      <li>
                        <a class="dropdown-item" href="./holiday-list.php">
                          Holiday List
                        </a>
                      </li>

                      <li>
                        <a
                          class="dropdown-item"
                          href="./approval-institute.php"
                        >
                          Approval of our Institute
                        </a>
                      </li>

                      <li>
                        <a class="dropdown-item" href="./gallery.php">
                          Gallery
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="./course.php">Courses</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="./admission.php"> Admission </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="./facility.php"> Facility </a>
                  </li>

                  <!--<li class="nav-item">-->
                  <!--  <a class="nav-link" href="./contact.html"> Contact Us</a>-->
                  <!--</li>-->
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
      

      <!-- <div class="header-notice">
        <div class="container">
          <div class="notice-content">
            <p class="notice-title">Highlights</p>

            <marquee class="notice-text">
                
             OUR ON-GOING PROJECTS UNDER <strong>DDU-GKY & UTKARSH BANGLA</strong> - 
              <a
                href="./ddu.html"
                target="_blank"
                style="color: red"
              >
                Click Here
              </a>
               &nbsp;&nbsp;|&nbsp;&nbsp; 
              <strong>SCHOLARSHIP ALERT | E-Kalyan</strong>
               <a
                href="https://ekalyan.cgg.gov.in/"
                target="_blank"
                style="color: red"
              >
                Click Here
              </a>
            </marquee>
            
           
          </div>
        </div>
      </div> -->
    </header>

    <main>
      <article>
        <!--
          - #HERO
        -->
        <section class="section hero" id="hero" aria-label="hero">
          <div
            id="carouselExampleAutoplaying"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active has-after">
                <img
                  src="./assets/img/carousel/carousel-1.jpg"
                  width="1360"
                  height="765"
                  class="d-block w-100"
                  alt="carousel-img"
                />

                <div class="carousel-text">
                  <p class="section-subtitle has-after">Welcome To LAKSMAN CHANDRA GHOSH MEMORIAL SOCIETY</p>
                  <h3 style="color: white; padding-left: 50px; padding-right: 50px; box-sizing: border-box; width: 100%;">
                    As the Secretary of LCG Institute Of Polytechnic, I am honored to welcome all students, parents, and partners to our vibrant learning community. 
                  We are dedicated to delivering top-tier technical education, underpinned by modern infrastructure, hands-on projects, and industry-aligned curricula. 
                  Our experienced faculty and supportive environment empower students to thrive both intellectually and personally. 
                  We strive to shape not only skilled engineers but also responsible, innovative citizens ready to contribute to society. 
                  I invite you to join us in this journey of excellence, integrity, and lifelong growth. </h3>
                  <br>
                  <p style="color: white; text-align: center; font-size: 5vw;">Debabrata Ghosh - Secretary</p>
                </div>
              </div>

              <div class="carousel-item has-after">
                <img
                  src="./assets/img/carousel/carousel-2.jpg"
                  width="1360"
                  height="765"
                  class="d-block w-100"
                  alt="carousel-img"
                />

                <div class="carousel-text">
                  <p class="section-subtitle">Welcome To LAKSMAN CHANDRA GHOSH MEMORIAL SOCIETY</p>
                  <h1 class="h1 section-title">Best Education We Provide</h1>
                </div>
              </div>

              <div class="carousel-item has-after">
                <img
                  src="./assets/img/carousel/carousel-3.jpg"
                  width="1360"
                  height="765"
                  class="d-block w-100"
                  alt="carousel-img"
                />

                <div class="carousel-text">
                  <p class="section-subtitle">Welcome To LAKSMAN CHANDRA GHOSH MEMORIAL SOCIETY</p>
                  <h1 class="h1 section-title">Best Placement We Provide</h1>
                </div>
              </div>
            </div>

            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleAutoplaying"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>

            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleAutoplaying"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <div
            class="alert alert-warning alert-dismissible fade show"
            role="alert"
          >
            <div class="container">
              <!--<strong>Current !</strong> Odd semester payment on 15.09.2023.-->
              <!--<a href="./academic-calender.html">Click here</a>-->
            </div>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="alert"
              aria-label="Close"
            ></button>
          </div>
        </section>

        <!--
          - #SERVICE
        -->
        <section class="section service" id="service" aria-label="service">
          <div class="container">
            <p class="section-subtitle text-center">Our Services</p>

            <h2 class="h2 section-title text-center">What We Provide</h2>

            <ul class="service-list">
              <li>
                <div class="service-card">
                  <div class="card-icon">
                    <ion-icon name="library"></ion-icon>
                  </div>

                  <div>
                    <h3 class="h3 card-title">
                      The Basic Science and humanities
                    </h3>

                    <p class="card-text">
                      The Basic Science and Humanities Department of this
                      prestigious institution has faculties with their vast
                      knowledge in both theoretical and practical aspects.
                    </p>
                  </div>
                </div>
              </li>

              <li>
                <div class="service-card">
                  <div class="card-icon">
                    <ion-icon name="desktop"></ion-icon>
                  </div>

                  <div>
                    <h3 class="h3 card-title">
                      Computer Science and Technology
                    </h3>

                    <p class="card-text">
                      Computer Science Technology is a three-year course that
                      prepares students to work as entry-level software
                      developers in small, medium or large enterprises.
                    </p>
                  </div>
                </div>
              </li>

              <li>
                <div class="service-card">
                  <div class="card-icon">
                    <ion-icon name="hardware-chip"></ion-icon>
                  </div>

                  <div>
                    <h3 class="h3 card-title">Electrical Engineering</h3>

                    <p class="card-text">
                      Computer Science & Technology is a 3-year course that
                      prepares students to work as entry-level software
                      developers in small, medium or large enterprises.
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        
        <!-- Project -->
        
        <!--<section class="section approval" id="approval" aria-label="approval">-->
        <!--  <div class="container">-->
        <!--    <p class="section-subtitle text-center">Our Projects</p>-->

        <!--    <h2 class="h2 section-title text-center">-->
        <!--      Deen Dayal Upadhyaya Grameen Kaushalya Yojana-->
        <!--    </h2>-->

        <!--    <ul class="approval-list">-->
        <!--      <li>-->
        <!--        <div class="approval-card">-->
        <!--          <div class="card-icon">-->
        <!--            <img-->
        <!--              src="./assets/img/logo/ddu.png"-->
        <!--              width="200"-->
        <!--              height="200"-->
        <!--              alt=""-->
        <!--            />-->
        <!--          </div>-->

        <!--          <div>-->
        <!--            <p class="card-text text-center">-->
        <!--              The Deen Dayal Upadhyaya Grameen Kaushalya Yojana (DDU-GKY) is a skill training and placement program launched by the Ministry of Rural Development, -->
        <!--              Government of India, on September 25, 2014. This initiative aims to empower rural youth with employable skills, providing them sustainable employment opportunities.-->
        <!--            </p>-->

                    <!--<h3 class="h3 card-title text-center">-->
                    <!--<span class="span"><a href="./assets/pdf/EOA Report 2025-26.PDF" target="_blank">EOA-Report: 2025-26</a></span>-->
                      
                    <!--      Download PDF <ion-icon name="download"></ion-icon>-->
                     
                    <!--</h3>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--      </li>-->
        <!--    </ul>-->
        <!--  </div>-->
        <!--</section>-->
        
        <!--<section class="section approval" id="approval" aria-label="approval">-->
        <!--  <div class="container">-->
            <!--<p class="section-subtitle text-center">Our Approval</p>-->

        <!--    <h2 class="h2 section-title text-center">-->
        <!--      Utkarsh Bangla - Govt. of West Bengal-->
        <!--    </h2>-->

        <!--    <ul class="approval-list">-->
        <!--      <li>-->
        <!--        <div class="approval-card">-->
        <!--          <div class="card-icon">-->
        <!--            <img-->
        <!--              src="./assets/img/logo/ub.png"-->
        <!--              width="200"-->
        <!--              height="200"-->
        <!--              alt=""-->
        <!--            />-->
        <!--          </div>-->

                  <!--<div>-->
                  <!--  <p class="card-text text-center">-->
                  <!--    AICTE APROVAL PROCESS 2024-2025 LETTER | Extension of-->
                  <!--    Approval (EoA) All India Council for Technical Education-->
                  <!--    (A Statutory body under the Ministry of Education, Govt.-->
                  <!--    of India)-->
                  <!--  </p>-->

                  <!--  <h3 class="h3 card-title text-center">-->
                  <!--  <span class="span"><a href="./assets/pdf/EOA Report 2025-26.PDF" target="_blank">EOA-Report: 2025-26</a></span>-->
                      
                          <!--Download PDF <ion-icon name="download"></ion-icon>-->
                     
                  <!--  </h3>-->
                  <!--</div>-->
        <!--        </div>-->
        <!--      </li>-->
        <!--    </ul>-->
        <!--  </div>-->
        <!--</section>-->
                
        <!---->

        <!--
          - #APPROVAL
        -->
        <section class="section approval" id="approval" aria-label="approval">
          <div class="container">
            <p class="section-subtitle text-center">Our Approval</p>

            <h2 class="h2 section-title text-center">
              Approval Of Our Institute
            </h2>

            <ul class="approval-list">
              <li>
                <div class="approval-card">
                  <div class="card-icon">
                    <img
                      src="./assets/img/logo/aicte.png"
                      width="150"
                      height="150"
                      alt=""
                    />
                  </div>

                  <div>
                    <p class="card-text text-center">
                      AICTE APROVAL PROCESS 2024-2025 LETTER | Extension of
                      Approval (EoA) All India Council for Technical Education
                      (A Statutory body under the Ministry of Education, Govt.
                      of India)
                    </p>

                    <h3 class="h3 card-title text-center">
                    <span class="span"><a href="./assets/pdf/EOA Report 2025-26.PDF" target="_blank">EOA-Report: 2025-26</a></span>
                      
                          <!--Download PDF <ion-icon name="download"></ion-icon>-->
                     
                    </h3>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>

        <!--
          - #AFFILIATION
        -->
        <section
          class="section affiliation"
          id="affiliation"
          aria-label="affiliation"
        >
          <div class="container">
            <p class="section-subtitle text-center">Our Affiliation</p>

            <h2 class="h2 section-title text-center">Meet Our Affiliations</h2>

            <ul class="affiliation-list">
              <li>
                <div class="affiliation-card">
                  <div class="card-icon">
                    <img
                      src="./assets/img/logo/bopt.png"
                      width="150"
                      height="150"
                      alt="bopt"
                    />
                  </div>

                  <h3 class="h3 card-title text-center">
                    Board Of Practical Training
                  </h3>
                </div>
              </li>

              <li>
                <div class="affiliation-card">
                  <div class="card-icon">
                    <img
                      src="./assets/img/logo/aicte.png"
                      width="150"
                      height="150"
                      alt=""
                    />
                  </div>

                  <h3 class="h3 card-title text-center">
                    All India Council For Technical Education
                  </h3>
                </div>
              </li>

              <li>
                <div class="affiliation-card">
                  <div class="card-icon">
                    <img
                      src="./assets/img/logo/wbscte.png"
                      width="150"
                      height="150"
                      alt="wbscte"
                    />
                  </div>

                  <h3 class="h3 card-title text-center">
                    West Bengal State Council Of Technical & Vocational
                    Education & Skill Development
                  </h3>
                </div>
              </li>
            </ul>
          </div>
        </section>

        <!--
          - #ABOUT
        -->
        <section class="section about" id="about" aria-label="about">
          <div class="container">
            <figure class="about-banner">
              <img
                src="./assets/img/about-banner.jpeg"
                alt="about banner"
                width="470"
                height="538"
                loading="lazy"
                class="w-100"
              />
            </figure>

            <div class="about-content">
              <p class="section-subtitle">About Us</p>

              <h2 class="h2 section-title">We Care For Your Learning</h2>

              <p class="section-text">
                The Polytechnic Education in our State was introduced
                immediately after independence. To look after the academic
                activities of polytechnic education, ‘State Council for
                Engineering & Technical Education’ was set-up as a Government
                outfit by an executive order. The Council was a part of the
                Chief Inspectorate of Technical Education and subsequently of
                the Directorate of Technical Education. West Bengal State
                Council of Technical and Vocational Education and Skill
                Development was formed as a Statutory Body under the West Bengal
                Act XXVI of 2013. LCG Institute of Polytechnic is one of the
                prestigious institutions of West Bengal which has been carrying
                its glory since the establishment of this college. LCG
                Polytechnic College came into existence in 2016 due to the
                missionary zeal of the visionary. LCG Institute of Polytechnic
                is situated at Lambodarpur, which is Five (5 KM) away from Suri
                town. It is situated on the road of Suri-Rampurhat of Birbhum
                District.
              </p>

              <a href="./about.html" class="btn">Read more</a>
            </div>
          </div>
        </section>

        <!--
          - #ABOUT COUNTER
        -->
        <section
          class="section about-counter"
          id="counter"
          aria-label="about counter"
        >
          <div class="container">
            <ul class="counter-list">
              <li>
                <div class="counter-card">
                  <div class="card-icon">
                    <ion-icon name="library"></ion-icon>
                  </div>

                  <h2
                    class="h2 counter counter-title text-center"
                    target="18"
                    data-counter
                  >
                    0
                  </h2>

                  <p class="card-subtitle text-center">Subjects</p>
                </div>
              </li>

              <li>
                <div class="counter-card">
                  <div class="card-icon">
                    <ion-icon name="person"></ion-icon>
                  </div>

                  <h2
                    class="h2 counter-title text-center"
                    target="3500"
                    data-counter
                  >
                    0
                  </h2>

                  <p class="card-subtitle text-center">Students</p>
                </div>
              </li>

              <li>
                <div class="counter-card">
                  <div class="card-icon">
                    <ion-icon name="flask"></ion-icon>
                  </div>

                  <h2
                    class="h2 counter-title text-center"
                    target="12"
                    data-counter
                  >
                    0
                  </h2>

                  <p class="card-subtitle text-center">Mordern Lab</p>
                </div>
              </li>

              <li>
                <div class="counter-card">
                  <div class="card-icon">
                    <ion-icon name="school"></ion-icon>
                  </div>

                  <h2
                    class="h2 counter-title text-center"
                    target="50"
                    data-counter
                  >
                    0
                  </h2>

                  <p class="card-subtitle text-center">Teacher</p>
                </div>
              </li>
            </ul>
          </div>
        </section>

        <!--
          - #FACULTY
        -->
        <section class="section faculty" id="faculty" aria-label="faculty">
          <div class="container">
            <p class="section-subtitle text-center">Our Faculty</p>

            <h2 class="h2 section-title text-center">Best Expert Lecturer</h2>

            <ul class="has-scrollbar">
              <li class="scrollbar-item">
                <div class="faculty-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 460; --height: 500"
                  >
                    <img
                      src="./assets/img/faculty/teacher-1.jpeg"
                      width="460"
                      height="500"
                      loading="lazy"
                      alt="Manab Kumer Ghosh"
                      class="img-cover"
                    />
                  </div>

                  <h3 class="h3">
                    <a href="./faculty.html" class="card-title">
                      Manab Kumer <br />Ghosh
                    </a>
                  </h3>

                  <p class="card-subtitle">Lecturer</p>

                  <ul class="card-social-list">
                    <li>
                      <a
                        href="mailto:manab.kgec@gmail.com"
                        class="card-social-link"
                      >
                        <ion-icon name="mail"></ion-icon>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="scrollbar-item">
                <div class="faculty-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 460; --height: 500"
                  >
                    <img
                      src="./assets/img/faculty/teacher-2.jpeg"
                      width="460"
                      height="500"
                      loading="lazy"
                      alt="Jyotirmoy Ghosh"
                      class="img-cover"
                    />
                  </div>

                  <h3 class="h3">
                    <a href="./faculty.html" class="card-title">
                      Jyotirmoy <br />Ghosh
                    </a>
                  </h3>

                  <p class="card-subtitle">Lecturer</p>

                  <ul class="card-social-list">
                    <li>
                      <a
                        href="mailto:jyotirmoy.ghosh362@gmail.com"
                        class="card-social-link"
                      >
                        <ion-icon name="mail"></ion-icon>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="scrollbar-item">
                <div class="faculty-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 460; --height: 500"
                  >
                    <img
                      src="./assets/img/faculty/teacher-3.jpeg"
                      width="460"
                      height="500"
                      loading="lazy"
                      alt="Snehashis Ghosh"
                      class="img-cover"
                    />
                  </div>

                  <h3 class="h3">
                    <a href="./faculty.html" class="card-title">
                      Snehashis <br />Ghosh
                    </a>
                  </h3>

                  <p class="card-subtitle">Lecturer</p>

                  <ul class="card-social-list">
                    <li>
                      <a
                        href="mailto:snehashisghosh86@gmail.com"
                        class="card-social-link"
                      >
                        <ion-icon name="mail"></ion-icon>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="scrollbar-item">
                <div class="faculty-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 460; --height: 500"
                  >
                    <img
                      src="./assets/img/faculty/AntaraMondal.jpg"
                      width="460"
                      height="500"
                      loading="lazy"
                      alt="Antara Mondal"
                      class="img-cover"
                    />
                  </div>

                  <h3 class="h3">
                    <a href="./faculty.html" class="card-title">
                      Antara <br />Mondal
                    </a>
                  </h3>

                  <p class="card-subtitle">Lecturer</p>

                  <ul class="card-social-list">
                    <li>
                      <a href="mailto:info@lcginstitute.com" class="card-social-link">
                        <ion-icon name="mail"></ion-icon>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="scrollbar-item">
                <div class="faculty-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 460; --height: 500"
                  >
                    <img
                      src="./assets/img/faculty/teacher-5.jpg"
                      width="460"
                      height="500"
                      loading="lazy"
                      alt="Bhaskar Das"
                      class="img-cover"
                    />
                  </div>

                  <h3 class="h3">
                    <a href="./faculty.html" class="card-title">
                      Bhaskar <br />Das
                    </a>
                  </h3>

                  <p class="card-subtitle">Lecturer</p>

                  <ul class="card-social-list">
                    <li>
                      <a href="bhaskar94das@gmail.com" class="card-social-link">
                        <ion-icon name="mail"></ion-icon>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>


                <li class="scrollbar-item">
                <div class="faculty-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 460; --height: 500"
                  >
                    <img
                      src="./assets/img/faculty/teacher-6.jpg"
                      width="460"
                      height="500"
                      loading="lazy"
                      alt="Kiranmoy Sen"
                      class="img-cover"
                    />
                  </div>

                  <h3 class="h3">
                    <a href="./faculty.html" class="card-title">
                      Kiranmoy <br />Sen
                    </a>
                  </h3>

                  <p class="card-subtitle">Lecturer</p>

                  <ul class="card-social-list">
                    <li>
                      <a
                        href="mailto:kiranmoysen1999@gmail.com"
                        class="card-social-link"
                      >
                        <ion-icon name="mail"></ion-icon>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              

              <li class="scrollbar-item">
                <div class="faculty-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 460; --height: 500"
                  >
                    <img
                      src="./assets/img/faculty/ArindamSen.jpg"
                      width="460"
                      height="500"
                      loading="lazy"
                      alt="Arindam Sen"
                      class="img-cover"
                    />
                  </div>

                  <h3 class="h3">
                    <a href="./faculty.html" class="card-title">
                      Arindam <br />Sen
                    </a>
                  </h3>

                  <p class="card-subtitle">Lecturer</p>

                  <ul class="card-social-list">
                    <li>
                      <a
                        href="mailto:info@lcginstitute.com"
                        class="card-social-link"
                      >
                        <ion-icon name="mail"></ion-icon>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="scrollbar-item">
                <div class="faculty-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 460; --height: 500"
                  >
                    <img
                      src="./assets/img/faculty/teacher-7.jpg"
                      width="460"
                      height="500"
                      loading="lazy"
                      alt="Zahir Abbas"
                      class="img-cover"
                    />
                  </div>

                  <h3 class="h3">
                    <a href="./faculty.html" class="card-title">
                      Zahir <br />Abbas
                    </a>
                  </h3>

                  <p class="card-subtitle">Lecturer</p>

                  <ul class="card-social-list">
                    <li>
                      <a href="zahirbcrec@gmail.com" class="card-social-link">
                        <ion-icon name="mail"></ion-icon>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="scrollbar-item">
                <div class="faculty-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 460; --height: 500"
                  >
                    <img
                      src="./assets/img/faculty/teacher-8.jpg"
                      width="460"
                      height="500"
                      loading="lazy"
                      alt="Pronay Mondal"
                      class="img-cover"
                    />
                  </div>

                  <h3 class="h3">
                    <a href="./faculty.html" class="card-title">
                      Pronay <br />Mondal
                    </a>
                  </h3>

                  <p class="card-subtitle">Lecturer (HOD)</p>

                  <ul class="card-social-list">
                    <li>
                      <a
                        href="pronaymondal1993@gmail.com"
                        class="card-social-link"
                      >
                        <ion-icon name="mail"></ion-icon>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="scrollbar-item">
                <div class="faculty-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 460; --height: 500"
                  >
                    <img
                      src="./assets/img/faculty/teacher-9.jpg"
                      width="460"
                      height="500"
                      loading="lazy"
                      alt="Ankita Chatterjee"
                      class="img-cover"
                    />
                  </div>

                  <h3 class="h3">
                    <a href="./faculty.html" class="card-title">
                      Ankita <br />Chatterjee
                    </a>
                  </h3>

                  <p class="card-subtitle">Lecturer</p>

                  <ul class="card-social-list">
                    <li>
                      <a
                        href="chatterjeeanki@gmail.com"
                        class="card-social-link"
                      >
                        <ion-icon name="mail"></ion-icon>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="scrollbar-item">
                <div class="faculty-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 460; --height: 500"
                  >
                    <img
                      src="./assets/img/faculty/teacher-10.jpg"
                      width="460"
                      height="500"
                      loading="lazy"
                      alt="Pratip Choudhury"
                      class="img-cover"
                    />
                  </div>

                  <h3 class="h3">
                    <a href="./faculty.html" class="card-title">
                      Pratip <br />Choudhury
                    </a>
                  </h3>

                  <p class="card-subtitle">Lecturer</p>

                  <ul class="card-social-list">
                    <li>
                      <a href="#" class="card-social-link">
                        <ion-icon name="mail"></ion-icon>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="scrollbar-item">
                <div class="faculty-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 460; --height: 500"
                  >
                    <img
                      src="./assets/img/faculty/teacher-11.jpg"
                      width="460"
                      height="500"
                      loading="lazy"
                      alt="Sourav Das"
                      class="img-cover"
                    />
                  </div>

                  <h3 class="h3">
                    <a href="./faculty.html" class="card-title">
                      Sourav <br />Das
                    </a>
                  </h3>

                  <p class="card-subtitle">Lecturer</p>

                  <ul class="card-social-list">
                    <li>
                      <a href="#" class="card-social-link">
                        <ion-icon name="mail"></ion-icon>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="scrollbar-item">
                <div class="faculty-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 460; --height: 500"
                  >
                    <img
                      src="./assets/img/faculty/teacher-12.jpg"
                      width="460"
                      height="500"
                      loading="lazy"
                      alt="Anshuman Chakraborty"
                      class="img-cover"
                    />
                  </div>

                  <h3 class="h3">
                    <a href="./faculty.html" class="card-title">
                      Anshuman <br />Chakraborty
                    </a>
                  </h3>

                  <p class="card-subtitle">Lecturer</p>

                  <ul class="card-social-list">
                    <li>
                      <a href="#" class="card-social-link">
                        <ion-icon name="mail"></ion-icon>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="scrollbar-item">
                <div class="faculty-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 460; --height: 500"
                  >
                    <img
                      src="./assets/img/faculty/teacher-13.jpg"
                      width="460"
                      height="500"
                      loading="lazy"
                      alt="Jagannath Pal"
                      class="img-cover"
                    />
                  </div>

                  <h3 class="h3">
                    <a href="./faculty.html" class="card-title">
                      Jagannath <br />Pal
                    </a>
                  </h3>

                  <p class="card-subtitle">Lecturer</p>

                  <ul class="card-social-list">
                    <li>
                      <a href="#" class="card-social-link">
                        <ion-icon name="mail"></ion-icon>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="scrollbar-item">
                <div class="faculty-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 460; --height: 500"
                  >
                    <img
                      src="./assets/img/faculty/teacher-14.jpg"
                      width="460"
                      height="500"
                      loading="lazy"
                      alt="Ranabir Saha"
                      class="img-cover"
                    />
                  </div>

                  <h3 class="h3">
                    <a href="./faculty.html" class="card-title">
                      Ranabir <br>Saha
                    </a>
                  </h3>

                  <p class="card-subtitle">Lecturer</p>

                  <ul class="card-social-list">
                    <li>
                      <a href="ranabirsaha06@gmail.com" class="card-social-link">
                        <ion-icon name="mail"></ion-icon>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="scrollbar-item">
                <div class="faculty-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 460; --height: 500"
                  >
                    <img
                      src="./assets/img/faculty/MahanPramanik.jpg"
                      width="460"
                      height="500"
                      loading="lazy"
                      alt="Mahan Pramanik"
                      class="img-cover"
                    />
                  </div>

                  <h3 class="h3">
                    <a href="./faculty.html" class="card-title">
                      Mahan <br>Pramanik
                    </a>
                  </h3>

                  <p class="card-subtitle">Lecturer</p>

                  <ul class="card-social-list">
                    <li>
                      <a href="mailto:info@lcginstitute.com" class="card-social-link">
                        <ion-icon name="mail"></ion-icon>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </section>

        <!--
          - #ADMISSION
        -->
        <section
          class="section admission"
          id="admission"
          aria-label="admission"
        >
          <div class="container">
            <figure class="admission-banner">
              <img
                src="./assets/img/admission-banner.jpg"
                width="1056"
                height="1076"
                loading="lazy"
                alt="admission banner"
                class="w-100"
              />
            </figure>

            <div class="admission-content">
              <p class="section-subtitle">Admission</p>

              <h2 class="h2 section-title">
                We Are Open And Welcoming Students
              </h2>

              <!-- active until scrollY 7684 -->
              <div>
                <!-- Button trigger modal -->
                <button
                  type="button"
                  class="btn"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal"
                  data-admission-btn
                >
                  Admission Open
                </button>

                <!-- Modal -->
                <div
                  class="modal fade"
                  id="exampleModal"
                  tabindex="-1"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                          LCG Polytechnic Admission 2024
                        </h1>

                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>

                      <div class="modal-body">
                        <form>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">First name</label>
                              <input
                                type="text"
                                class="form-control"
                                id="inputEmail4"
                                placeholder="Name"
                              />
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">Last name</label>
                              <input
                                type="text"
                                class="form-control"
                                id="inputPassword4"
                                placeholder="last name"
                              />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input
                              type="text"
                              class="form-control"
                              id="inputAddress"
                              placeholder="1234 Main St"
                            />
                          </div>
                          <div class="form-group">
                            <label for="inputAddress2">Address 2</label>
                            <input
                              type="text"
                              class="form-control"
                              id="inputAddress2"
                              placeholder="Apartment, studio, or floor"
                            />
                          </div>
                          <div class="form-group">
                            <label for="inputAddress2">Contact Number</label>
                            <input
                              type="text"
                              class="form-control"
                              id="inputAddress2"
                              placeholder="+91 9876543210"
                            />
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputCity">City</label>
                              <input
                                type="text"
                                class="form-control"
                                id="inputCity"
                              />
                            </div>
                            <div class="form-group col-md-4">
                              <label for="inputState">State</label>
                              <select id="inputState" class="form-control">
                                <option selected="">Choose...</option>
                                <option>West Bengal</option>
                              </select>
                            </div>
                            <div class="form-group col-md-2">
                              <label for="inputZip">Zip</label>
                              <input
                                type="text"
                                class="form-control"
                                id="inputZip"
                              />
                            </div>
                          </div>
                        </form>
                      </div>

                      <div class="modal-footer">
                        <button
                          type="button"
                          class="btn btn-secondary"
                          data-bs-dismiss="modal"
                        >
                          Close
                        </button>
                        <button type="button" class="btn btn-primary">
                          Save changes
                        </button>
                      </div>
                    </div>
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
                  <a href="info@lcginstitute.com" class="footer-link">
                   info@lcginstitute.com
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="footer-bottom">
            <div class="container">
              <p class="copyright">
                &copy; 2023 All Rights Reserved by
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

                <!--<li>-->
                <!--  <a-->
                <!--    href="https://www.instagram.com/sikharthyinfotech"-->
                <!--    target="_blank"-->
                <!--    class="social-link"-->
                <!--  >-->
                <!--    <ion-icon name="logo-instagram"></ion-icon>-->
                <!--  </a>-->
                <!--</li>-->

                <!--<li>-->
                <!--  <a-->
                <!--    href="https://www.linkedin.com/company/sikharthy-infotech-pvt-ltd"-->
                <!--    target="_blank"-->
                <!--    class="social-link"-->
                <!--  >-->
                <!--    <ion-icon name="logo-linkedin"></ion-icon>-->
                <!--  </a>-->
                <!--</li>-->
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

        <!--
          - #ADMISSION BTN
        -->
        <a
          href="#"
          class="admission-btn"
          data-bs-toggle="modal"
          data-bs-target="#exampleModal"
        >
          Admission Open
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

    <!-- PopUP for Admission Query -->

    <!-- Admission Enquiry 2026 Auto Popup -->
        <div class="modal fade" id="admission2026Modal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              
              <div class="modal-header">
                <h5 class="modal-title">Admission Enquiry 2026</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>

              <div class="modal-body">
                <form action="admission-enquiry.php" method="POST">
                  
                  <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control" required>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control" required>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Contact Number</label>
                    <input type="tel" name="contact" class="form-control" required>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Your Query</label>
                    <textarea name="query" class="form-control" rows="3" required></textarea>
                  </div>

                  <button type="submit" class="btn btn-primary w-100">
                    Submit Enquiry
                  </button>

                </form>
              </div>

            </div>
          </div>
        </div>
      <!-- Pop Up End -->

      
      <script>
      window.addEventListener("load", function () {
        var myModal = new bootstrap.Modal(document.getElementById('admission2026Modal'));
        myModal.show();
      });
    </script>

  </body>
</html>
