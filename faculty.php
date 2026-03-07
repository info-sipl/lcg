<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--
        - primary meta tag
    -->
    <title>LCG | Our Faculty</title>
    <meta name="title" content="LCG Institute of Polytechnic" />
    <meta
      name="description"
      content="LCG Institute of Polytechnic:Empowering Innovators with Industry-Relevant Education, Experienced Faculty, and Modern Facilities. Discover Our Diploma Programs for a Bright Future."
    />
kha
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
    <link rel="stylesheet" href="./assets/css/faculty.css" />
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
          - #FACULTY
        -->
        <section class="section about" id="about" aria-label="faculty">
          <div class="container">
            <figure class="about-banner">
              <img
                src="./assets/img/faculty-banner.jpg"
                alt="anti ragging banner"
                width="470"
                height="538"
                loading="lazy"
                class="w-100"
              />
            </figure>

            <div class="about-content">
              <p class="section-subtitle">OUR FACULTY</p>

              <h2 class="h2 section-title">Best Expert Lecturer</h2>
            </div>
          </div>
        </section>

       

        <?php include "admin/dbconnection.php";

$sql = "SELECT * FROM faculty
        WHERE status = 1 AND department = 'BASIC SCIENCE AND HUMANITIES'
        ORDER BY created_at DESC";

$result = $conn->query($sql);
?>

<section class="section faculty" id="faculty" aria-label="faculty" style="padding-block-start:0">
  <div class="container">

    <p class="section-subtitle text-center">Meet Our Teachers</p>
    <h2 class="h2 section-title text-center">BASIC SCIENCE AND HUMANITIES</h2>

    <ul class="has-scrollbar">

    <?php while ($row = $result->fetch_assoc()): ?>
      <li class="scrollbar-item">
        <div class="faculty-card">

          <div class="card-banner img-holder" style="width:260px; height:320px;">
            <img src="./assets/img/faculty/<?php echo htmlspecialchars($row['image']); ?>"
                 class="img-cover"
                 loading="lazy"
                 alt="<?php echo htmlspecialchars($row['name']); ?>">
          </div>

          <h3 class="h3">
            <span class="card-title">
              <?php echo htmlspecialchars($row['name']); ?>
            </span>
          </h3>

          <p class="card-subtitle"><?php echo htmlspecialchars($row['designation']); ?></p>

          <div class="text-wrapper">
            <p class="card-text text-center">
              <?php echo nl2br(htmlspecialchars($row['qualification'])); ?>
            </p>
            <p class="card-text text-center">
              <b>Experience :</b> <?php echo htmlspecialchars($row['experience']); ?>
            </p>
          </div>

          <ul class="card-social-list">
            <?php if (!empty($row['email'])): ?>
            <li>
              <a href="mailto:<?php echo htmlspecialchars($row['email']); ?>" class="card-social-link">
                <ion-icon name="mail"></ion-icon>
              </a>
            </li>
            <?php endif; ?>
          </ul>

        </div>
      </li>
    <?php endwhile; ?>

    </ul>
  </div>
</section>




        <!--
          - #CIVIL ENGINEERING
        -->
        

        <?php
include "admin/dbconnection.php";

$sql = "SELECT * FROM faculty
        WHERE status = 1 AND department = 'CIVIL ENGINEERING'
        ORDER BY created_at DESC";

$result = $conn->query($sql);
?>

<section class="section faculty" id="faculty" aria-label="faculty" style="padding-block-start:0">
  <div class="container">

    <!-- <p class="section-subtitle text-center">Meet Our Teachers</p> -->
    <h2 class="h2 section-title text-center">CIVIL ENGINEERING</h2>

    <ul class="has-scrollbar">

    <?php while ($row = $result->fetch_assoc()): ?>
      <li class="scrollbar-item">
        <div class="faculty-card">

          <div class="card-banner img-holder" style="width:260px; height:320px;">
            <img src="./assets/img/faculty/<?php echo htmlspecialchars($row['image']); ?>"
                 class="img-cover"
                 loading="lazy"
                 alt="<?php echo htmlspecialchars($row['name']); ?>">
          </div>

          <h3 class="h3">
            <span class="card-title">
              <?php echo htmlspecialchars($row['name']); ?>
            </span>
          </h3>

          <p class="card-subtitle"><?php echo htmlspecialchars($row['designation']); ?></p>

          <div class="text-wrapper">
            <p class="card-text text-center">
              <?php echo nl2br(htmlspecialchars($row['qualification'])); ?>
            </p>
            <p class="card-text text-center">
              <b>Experience :</b> <?php echo htmlspecialchars($row['experience']); ?>
            </p>
          </div>

          <ul class="card-social-list">
            <?php if (!empty($row['email'])): ?>
            <li>
              <a href="mailto:<?php echo htmlspecialchars($row['email']); ?>" class="card-social-link">
                <ion-icon name="mail"></ion-icon>
              </a>
            </li>
            <?php endif; ?>
          </ul>

        </div>
      </li>
    <?php endwhile; ?>

    </ul>
  </div>
</section>

        <!--
          - #ELECTRICAL ENGINEERING
        -->
       <?php
include "admin/dbconnection.php";

$sql = "SELECT * FROM faculty
        WHERE status = 1 AND department = 'ELECTRICAL ENGINEERING'
        ORDER BY created_at DESC";

$result = $conn->query($sql);
?>

<section class="section faculty" id="faculty" aria-label="faculty" style="padding-block-start:0">
  <div class="container">

    <!-- <p class="section-subtitle text-center">Meet Our Teachers</p> -->
    <h2 class="h2 section-title text-center">ELECTRICAL ENGINEERING</h2>

    <ul class="has-scrollbar">

    <?php while ($row = $result->fetch_assoc()): ?>
      <li class="scrollbar-item">
        <div class="faculty-card">

          <div class="card-banner img-holder" style="width:260px; height:320px;">
            <img src="./assets/img/faculty/<?php echo htmlspecialchars($row['image']); ?>"
                 class="img-cover"
                 loading="lazy"
                 alt="<?php echo htmlspecialchars($row['name']); ?>">
          </div>

          <h3 class="h3">
            <span class="card-title">
              <?php echo htmlspecialchars($row['name']); ?>
            </span>
          </h3>

          <p class="card-subtitle"><?php echo htmlspecialchars($row['designation']); ?></p>

          <div class="text-wrapper">
            <p class="card-text text-center">
              <?php echo nl2br(htmlspecialchars($row['qualification'])); ?>
            </p>
            <p class="card-text text-center">
              <b>Experience :</b> <?php echo htmlspecialchars($row['experience']); ?>
            </p>
          </div>

          <ul class="card-social-list">
            <?php if (!empty($row['email'])): ?>
            <li>
              <a href="mailto:<?php echo htmlspecialchars($row['email']); ?>" class="card-social-link">
                <ion-icon name="mail"></ion-icon>
              </a>
            </li>
            <?php endif; ?>
          </ul>

        </div>
      </li>
    <?php endwhile; ?>

    </ul>
  </div>
</section>


        <!--
          - #MECHANICAL ENGINEERING
        -->
        <?php
include "admin/dbconnection.php";

$sql = "SELECT * FROM faculty
        WHERE status = 1 AND department = 'MECHANICAL ENGINEERING'
        ORDER BY created_at DESC";

$result = $conn->query($sql);
?>

<section class="section faculty" id="faculty" aria-label="faculty" style="padding-block-start:0">
  <div class="container">

    <!-- <p class="section-subtitle text-center">Meet Our Teachers</p> -->
    <h2 class="h2 section-title text-center">MECHANICAL ENGINEERING</h2>

    <ul class="has-scrollbar">

    <?php while ($row = $result->fetch_assoc()): ?>
      <li class="scrollbar-item">
        <div class="faculty-card">

          <div class="card-banner img-holder" style="width:260px; height:320px;">
            <img src="./assets/img/faculty/<?php echo htmlspecialchars($row['image']); ?>"
                 class="img-cover"
                 loading="lazy"
                 alt="<?php echo htmlspecialchars($row['name']); ?>">
          </div>

          <h3 class="h3">
            <span class="card-title">
              <?php echo htmlspecialchars($row['name']); ?>
            </span>
          </h3>

          <p class="card-subtitle"><?php echo htmlspecialchars($row['designation']); ?></p>

          <div class="text-wrapper">
            <p class="card-text text-center">
              <?php echo nl2br(htmlspecialchars($row['qualification'])); ?>
            </p>
            <p class="card-text text-center">
              <b>Experience :</b> <?php echo htmlspecialchars($row['experience']); ?>
            </p>
          </div>

          <ul class="card-social-list">
            <?php if (!empty($row['email'])): ?>
            <li>
              <a href="mailto:<?php echo htmlspecialchars($row['email']); ?>" class="card-social-link">
                <ion-icon name="mail"></ion-icon>
              </a>
            </li>
            <?php endif; ?>
          </ul>

        </div>
      </li>
    <?php endwhile; ?>

    </ul>
  </div>
</section>

        <!--
          - #COMPUTER SCIENCE AND TECHNOLOGY
        -->
                <?php
include "admin/dbconnection.php";

$sql = "SELECT * FROM faculty
        WHERE status = 1 AND department = 'COMPUTER SCIENCE AND TECHNOLOGY'
        ORDER BY created_at DESC";

$result = $conn->query($sql);
?>

<section class="section faculty" id="faculty" aria-label="faculty" style="padding-block-start:0">
  <div class="container">

    <!-- <p class="section-subtitle text-center">Meet Our Teachers</p> -->
    <h2 class="h2 section-title text-center">COMPUTER SCIENCE AND TECHNOLOGY</h2>

    <ul class="has-scrollbar">

    <?php while ($row = $result->fetch_assoc()): ?>
      <li class="scrollbar-item">
        <div class="faculty-card">

          <div class="card-banner img-holder" style="width:260px; height:320px;">
            <img src="./assets/img/faculty/<?php echo htmlspecialchars($row['image']); ?>"
                 class="img-cover"
                 loading="lazy"
                 alt="<?php echo htmlspecialchars($row['name']); ?>">
          </div>

          <h3 class="h3">
            <span class="card-title">
              <?php echo htmlspecialchars($row['name']); ?>
            </span>
          </h3>

          <p class="card-subtitle"><?php echo htmlspecialchars($row['designation']); ?></p>

          <div class="text-wrapper">
            <p class="card-text text-center">
              <?php echo nl2br(htmlspecialchars($row['qualification'])); ?>
            </p>
            <p class="card-text text-center">
              <b>Experience :</b> <?php echo htmlspecialchars($row['experience']); ?>
            </p>
          </div>

          <ul class="card-social-list">
            <?php if (!empty($row['email'])): ?>
            <li>
              <a href="mailto:<?php echo htmlspecialchars($row['email']); ?>" class="card-social-link">
                <ion-icon name="mail"></ion-icon>
              </a>
            </li>
            <?php endif; ?>
          </ul>

        </div>
      </li>
    <?php endwhile; ?>

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
