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
      
        <!-- ===== PAGE LOADER START ===== -->
      <div id="page-loader">
        <div class="loader-content">
          <img src="./assets/img/logo/logo.png" alt="LCG Logo" class="loader-logo">
        </div>
      </div>
      <!-- ===== PAGE LOADER END ===== -->

    <!--
      - #HEADER
    -->
    <!-- <header class="header">
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

              <a href="tel:+919830721351" class="contact-link">
                +91-9830721351
              </a>

       
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
      </div> -->

      <?php include 'menu.php'; ?>
      <?php include_once "includes/highlights.php"; ?>
     
       


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
                  <p class="section-subtitle has-after">Welcome To LCG INSTITUTE OF POLYTECHNIC</p>
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
                  <p class="section-subtitle">Welcome To LCG INSTITUTE OF POLYTECHNIC</p>
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
                  <p class="section-subtitle">Welcome To LCG INSTITUTE OF POLYTECHNIC</p>
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

          <!-- <div
            class="alert alert-warning alert-dismissible fade show"
            role="alert"
          > -->
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
    <p class="section-subtitle text-center service-title-reveal">Our Services</p>
    <h2 class="h2 section-title text-center service-title-reveal">
      What We Provide
    </h2>

    <ul class="service-list">

      <!-- Card 1 -->
      <li class="service-reveal">
        <div class="service-card">
          <div class="card-icon">
            <ion-icon name="library"></ion-icon>
          </div>
          <div>
            <h3 class="h3 card-title">The Basic Science and Humanities</h3>
            <p class="card-text">
              The Basic Science and Humanities Department of this prestigious institution has faculties with their vast knowledge in both theoretical and practical aspects.
            </p>
          </div>
        </div>
      </li>

      <!-- Card 2 -->
      <li class="service-reveal">
        <div class="service-card">
          <div class="card-icon">
            <ion-icon name="desktop"></ion-icon>
          </div>
          <div>
            <h3 class="h3 card-title">Computer Science and Technology</h3>
            <p class="card-text">
              Computer Science Technology is a three-year course that prepares students to work as entry-level software developers in small, medium or large enterprises.
            </p>
          </div>
        </div>
      </li>

      <!-- Card 3 -->
      <li class="service-reveal">
        <div class="service-card">
          <div class="card-icon">
            <ion-icon name="hardware-chip"></ion-icon>
          </div>
          <div>
            <h3 class="h3 card-title">Electrical Engineering</h3>
            <p class="card-text">
              Electrical Engineering prepares students with practical and theoretical skills required for modern industries and technical environments.
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
 <section class="section approval-split" id="approval" aria-label="approval">
  <div class="container">
    <div class="approval-flex">

      <!-- LEFT BLOCK -->
      <div class="approval-left">
        <div class="approval-card">
          <div class="card-icon text-center">
            <img
              src="./assets/img/logo/aicte.png"
              width="150"
              height="150"
              alt="AICTE Logo"
            />
          </div>

          <div>
            <p class="card-text text-center">
              AICTE APPROVAL PROCESS 2024-2025 LETTER | Extension of Approval (EoA)
              All India Council for Technical Education
              (A Statutory body under the Ministry of Education, Govt. of India)
            </p>

            <h3 class="h3 card-title text-center">
              <a href="./assets/pdf/EOA Report 2025-26.PDF" target="_blank">
                EOA-Report: 2025-26
              </a>
            </h3>
          </div>
        </div>
      </div>

      <!-- RIGHT BLOCK -->
      <div class="approval-right">
        <p class="section-subtitle">Our Approval</p>
        <h2 class="section-title">
          Approval Of Our Institute
        </h2>
      </div>

    </div>
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
    <p class="section-subtitle text-center affiliation-title">
      Our Affiliation
    </p>

    <h2 class="h2 section-title text-center affiliation-title">
      Meet Our Affiliations
    </h2>

    <ul class="affiliation-list">
      <li class="affiliation-reveal">
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

      <li class="affiliation-reveal">
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

      <li class="affiliation-reveal">
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
            West Bengal State Council Of Technical & Vocational Education & Skill Development
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

    <figure class="about-banner about-left-reveal">
      <img
        src="./assets/img/about-banner.jpeg"
        alt="about banner"
        width="470"
        height="538"
        loading="lazy"
        class="w-100"
      />
    </figure>

    <div class="about-content about-right-reveal" id="about-div">
      <p class="section-subtitle">About Us</p>

      <h2 class="h2 section-title">We Care For Your Learning</h2>

      <p class="section-text">
        The Polytechnic Education in our State was introduced immediately after independence...
      </p>

      <a href="./about.php" class="btn">Read more</a>
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

    <!-- Services Block Animation -->
     <script>
document.addEventListener("DOMContentLoaded", function () {

  const serviceElements = document.querySelectorAll(
    ".service-reveal, .service-title-reveal"
  );

  const serviceObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {

      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.classList.add("active");
        }, index * 150); // stagger effect
      } else {
        entry.target.classList.remove("active"); // re-animate on scroll up
      }

    });
  }, { threshold: 0.2 });

  serviceElements.forEach(el => {
    serviceObserver.observe(el);
  });

});
</script>

 <!-- Modern Approval Layout  -->

<script>
document.addEventListener("DOMContentLoaded", function () {

  const approvalItems = document.querySelectorAll(
    ".approval-left, .approval-right"
  );

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {

      if (entry.isIntersecting) {
        entry.target.classList.add("active");
      } else {
        entry.target.classList.remove("active");
        // allows animation again when scrolling back
      }

    });
  }, { threshold: 0.3 });

  approvalItems.forEach(item => observer.observe(item));

});
</script>


<!-- Page Loader -->

<script>
window.addEventListener("load", function () {
  const loader = document.getElementById("page-loader");

  setTimeout(function () {
    loader.classList.add("hide");
  }, 2000); // 2 seconds loading time
});
</script>

<!-- Affiliation Block Animation -->

<script>
document.addEventListener("DOMContentLoaded", function () {

  const titles = document.querySelectorAll(".affiliation-title");
  const cards = document.querySelectorAll(".affiliation-reveal");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {

      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.classList.add("active");
        }, index * 200); // stagger effect
      } else {
        entry.target.classList.remove("active"); // animate again on scroll up
      }

    });
  }, { threshold: 0.2 });

  titles.forEach(el => observer.observe(el));
  cards.forEach(el => observer.observe(el));

});
</script>

<!-- About Us -->
<script>
document.addEventListener("DOMContentLoaded", function () {

  const aboutElements = document.querySelectorAll(
    ".about-left-reveal, .about-right-reveal"
  );

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {

      if (entry.isIntersecting) {
        entry.target.classList.add("active");
      } else {
        entry.target.classList.remove("active"); 
        // Allows animation again on reverse scroll
      }

    });
  }, { threshold: 0.3 });

  aboutElements.forEach(el => observer.observe(el));

});
</script>

  </body>
</html>
