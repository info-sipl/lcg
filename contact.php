<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--
        - primary meta tag
    -->
    <title>LCG | Contact</title>
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
      
    <?php include 'menu.php'; ?>
      <?php include_once "includes/highlights.php"; ?>

    <main>
      <article>
        <!--
          - #FACILITES
        -->
        <section class="section about" id="about" aria-label="about">
          <div class="container" style="align-items: flex-start">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14587.940126844118!2d87.49010768611821!3d23.925584112738136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f7582f131d75d5%3A0x15899e214af55317!2sLCG%20Institute%20of%20Polytechnic!5e0!3m2!1sen!2sin!4v1690730374386!5m2!1sen!2sin"
              width="470"
              height="500"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              class="about-banner"
            ></iframe>

            <div class="about-content">
              <h2 class="h2 section-title" style="margin-block: 30px">
                Contact Us
              </h2>

              <form>
                <div class="mb-3">
                  <label for="exampleInputName" class="form-label">
                    Your Name (required) <b style="color: var(--red)">*</b>
                  </label>

                  <input
                    type="name"
                    class="form-control"
                  />
                </div>

                <div class="mb-3">
                  <label for="exampleInputEmail" class="form-label">
                    Your Email (required) <b style="color: var(--red)">*</b>
                  </label>

                  <input
                    type="email"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                  />
                </div>

                <div class="mb-3">
                  <label for="exampleInputSubject" class="form-label"
                    >Subject</label
                  >
                  <input
                    class="form-control"
                  />
                </div>

                <div class="mb-3">
                  <label for="exampleInputSubject" class="form-label"
                    >Your Message</label
                  >
                  <textarea class="form-control" name="message" cols="30" rows="10"></textarea>
                </div>

                <button
                  type="submit"
                  class="btn-primary"
                  style="
                    background-image: var(--gradient-1);
                    padding: 15px 30px;
                    color: var(--white);
                    border-radius: var(--radius-4);
                    margin-block: 20px;
                  "
                >
                  Submit
                </button>
              </form>
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
