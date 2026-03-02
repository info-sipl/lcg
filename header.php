<?php
// header.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>LCG Polytechnic</title>

  <!-- ================= BOOTSTRAP CSS ================= -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Optional Custom CSS -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- Ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</head>
<body>

<header class="header">

  <!-- ================= TOP BAR ================= -->
  <div class="header-top bg-dark text-light py-2">
    <div class="container d-flex justify-content-between align-items-center flex-wrap">

      <div class="d-flex gap-3 flex-wrap">
        <a href="mailto:lcgms16@gmail.com" class="text-light text-decoration-none small">
          <ion-icon name="mail-outline"></ion-icon> lcgms16@gmail.com
        </a>

        <a href="tel:+919830721351" class="text-light text-decoration-none small">
          <ion-icon name="call-outline"></ion-icon> +91-9830721351
        </a>
      </div>

      <div>
        <a href="https://www.facebook.com/LCGIP/" target="_blank" class="text-light">
          <ion-icon name="logo-facebook"></ion-icon>
        </a>
      </div>

    </div>
  </div>

  <!-- ================= NAVBAR ================= -->
  <div class="header-bottom shadow-sm">
    <div class="container">

      <nav class="navbar navbar-expand-lg navbar-light bg-white">

        <a href="./main_society.php" class="text-danger fw-bold me-3 text-decoration-none d-none d-lg-block">
          LAKSMAN CHANDRA GHOSH MEMORIAL SOCIETY
        </a>

        <a class="navbar-brand" href="./index.php">
          <img src="./assets/img/logo/logo.png" width="160" class="img-fluid" alt="LCG Polytechnic">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#mainNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">

          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <a class="nav-link" href="./index.php">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="./about.php">About Us</a>
            </li>

            <!-- ADMINISTRATION -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown">
                Administration
              </a>

              <ul class="dropdown-menu">

                <li>
                  <a class="dropdown-item" href="./society.php">
                    Society Members
                  </a>
                </li>

                <!-- Committee Submenu -->
                <li class="dropdown-submenu position-relative">

                  <a class="dropdown-item dropdown-toggle" href="#">
                    Committee
                  </a>

                  <ul class="dropdown-menu position-absolute start-100 top-0">

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
                      <a class="dropdown-item" href="./internal-complaint.php">
                        Internal Complaint Committee - 2024
                      </a>
                    </li>

                    <li>
                      <a class="dropdown-item" href="./grievance-redemption.php">
                        Grievance Redemption Committee - 2024
                      </a>
                    </li>

                  </ul>

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

            <!-- ACADEMIC -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown">
                Academic
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./faculty.php">Our Faculty</a></li>
                <li><a class="dropdown-item" href="./academic-calender.php">Academic Calendar</a></li>
                <li><a class="dropdown-item" href="./syllabus.php">Syllabus</a></li>
                <li><a class="dropdown-item" href="./holiday-list.php">Holiday List</a></li>
                <li><a class="dropdown-item" href="./approval-institute.php">Approval</a></li>
                <li><a class="dropdown-item" href="./gallery.php">Gallery</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="./course.php">Courses</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="./admission.php">Admission</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="./facility.php">Facility</a>
            </li>

          </ul>

        </div>

      </nav>

    </div>
  </div>

</header>

<!-- Submenu CSS -->
<style>
.dropdown-submenu:hover > .dropdown-menu {
  display: block;
}

.dropdown-submenu .dropdown-menu {
  display: none;
  min-width: 250px;
}
</style>

<!-- ================= BOOTSTRAP JS ================= -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>