<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--
        - primary meta tag
    -->
    <title>LCG | Facility</title>
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
    <link rel="stylesheet" href="./assets/css/facility.css" />
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

      <div class="header-notice">
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
      </div>
    </header>

    <main>
      <article>
        <!--
          - #FACILITES
        -->
        <section class="section about" id="about" aria-label="about">
          <div class="container">
            <figure class="about-banner">
              <img
                src="./assets/img/carousel/carousel-1.jpg"
                alt="gallery banner"
                width="470"
                height="538"
                loading="lazy"
                class="w-100"
              />
            </figure>

            <div class="about-content">
              <h2 class="h2 section-title">Our Facilities</h2>
            </div>
          </div>
        </section>

        <section class="section facility" id="facility" aria-label="facility">
          <div class="container">
            <p class="section-subtitle text-center">Facilities</p>

            <h2 class="h2 section-title text-center">What We Provide</h2>

            <ul class="service-list">
              <li>
                <div class="service-card">
                  <div class="card-icon">
                    <ion-icon name="bed"></ion-icon>
                  </div>

                  <div>
                    <h3 class="h3 card-title">Hostel Facilities</h3>

                    <p class="card-text">
                      The College has separate hostel facilities for boys, girls
                      and teachers. It is equipped with all modern amenities.
                      Hostel rooms are very spacious & well furnished. It has
                      been monitored by Security personnel 24×7. The beautiful
                      green campus of the hostel makes their every morning
                      wishful and evenings memorable.
                    </p>
                  </div>
                </div>
              </li>

              <li>
                <div class="service-card">
                  <div class="card-icon">
                    <ion-icon name="car"></ion-icon>
                  </div>

                  <div>
                    <h3 class="h3 card-title">Transportations</h3>

                    <p class="card-text">
                      Transport for daily commuting is generally one of the
                      worries of parents. To enable students to free themselves
                      from the worries of the transportation, we have made
                      arrangements for College buses for students as well as
                      staff. We ensure a hassle free and safe transport facility
                      to our staffs and students. This transport facility is
                      also used for various educational purposes like field
                      trips, industrial visits etc.
                    </p>
                  </div>
                </div>
              </li>

              <li>
                <div class="service-card">
                  <div class="card-icon">
                    <ion-icon name="wifi"></ion-icon>
                  </div>

                  <div>
                    <h3 class="h3 card-title">Free Wi-Fi Campus</h3>

                    <p class="card-text">
                      As MHRD has asked all higher education institutions to
                      contact telecom services providers (TSP) or Internet
                      Service Providers (ISP) who will provide free WiFi
                      services in the campus. … Each of the institutes can use
                      WiFi facility to a minimum of two devices such as a laptop
                      or Smartphone concurrently. Our institute provides the
                      free wifi facility in the campus for all faculties, staffs
                      and students.
                    </p>
                  </div>
                </div>
              </li>

              <li>
                <div class="service-card">
                  <div class="card-icon">
                    <ion-icon name="football"></ion-icon>
                  </div>

                  <div>
                    <h3 class="h3 card-title">Play Grounds</h3>

                    <p class="card-text">
                      Sports and Games are a regular part of our institute. The
                      college playground is always bubbling with outdoor
                      activities like cricket, football, volley ball, badminton
                      etc. We encourage our students to participate in various
                      sports.
                    </p>
                  </div>
                </div>
              </li>

              <li>
                <div class="service-card">
                  <div class="card-icon">
                    <ion-icon name="moon"></ion-icon>
                  </div>

                  <div>
                    <h3 class="h3 card-title">Night Class</h3>

                    <p class="card-text">
                      As we know that night class is an learning class that
                      holds classes in the evening or at night to accommodate
                      people who work during the day, our institute provides
                      night coaching classes for the students so that they can
                      enhance themselves with some extra knowledge.
                    </p>
                  </div>
                </div>
              </li>

              <li>
                <div class="service-card">
                  <div class="card-icon">
                    <ion-icon name="cafe"></ion-icon>
                  </div>

                  <div>
                    <h3 class="h3 card-title">Cafeteria</h3>

                    <p class="card-text">
                      Our cafeteria is effectively functioning to satisfy the
                      needs of students and staff with a variety of delicious
                      food items at affordable rates. Adequate seating
                      facilities are provided to accommodate students and staff
                      even during peak time. The authorities take personal care
                      in maintaining the quality of food served in the canteen.
                    </p>
                  </div>
                </div>
              </li>

              <li>
                <div class="service-card">
                  <div class="card-icon">
                    <ion-icon name="people"></ion-icon>
                  </div>

                  <div>
                    <h3 class="h3 card-title">Conference Hall</h3>

                    <p class="card-text">
                      LCG Institute of Polytechnic has a well equipped
                      conference hall. It is also a venue for various workshops
                      and seminars. The hall is spacious & well ventilated. It
                      also provides ample opportunity for our staff and students
                      to exhibit their talents in cultural activities. It is a
                      twin edged experience where sharing of views & ideas takes
                      place thereafter formulating the concepts which have
                      global acceptance.
                    </p>
                  </div>
                </div>
              </li>

              <li>
                <div class="service-card">
                  <div class="card-icon">
                    <ion-icon name="medkit"></ion-icon>
                  </div>

                  <div>
                    <h3 class="h3 card-title">Medical facilities</h3>

                    <p class="card-text">
                      Medical Facilities are well available for 24×7 for all our
                      students and staff as the location of LCG Institute of
                      Polytechnic is very close to the Super Specialty Hospital
                      in Suri within walkable distance from the college campus.
                      We also organize Regular health check up in the campus
                      with active support from hospitals.
                    </p>
                  </div>
                </div>
              </li>

              <li>
                <div class="service-card">
                  <div class="card-icon">
                    <ion-icon name="book"></ion-icon>
                  </div>

                  <div>
                    <h3 class="h3 card-title">Library</h3>

                    <p class="card-text">
                      The Library of LCG Institute of Polytechnic aims at
                      providing access to its printed resources such as books
                      and journals for the faculties, students and members. The
                      college library is spacious, well-ventilated, adequately
                      furnished and has uninterrupted power supply. The college
                      library is a connecting link between teaching and learning
                      as well as place which supplements its resources what is
                      beyond scope of class room. College libraries play an
                      important role in the educational history of both the
                      students as well as the faculty members.
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
                &copy; 2024 All Rights Reserved by
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
  </body>
</html>
