<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--
        - primary meta tag
    -->
    <title>LCG | Admission</title>
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
    <link rel="stylesheet" href="./assets/css/admission.css" />
  </head>
  <body>
    <!--
      - #HEADER
    -->
      <?php include 'menu.php'; ?>
      <?php include_once "includes/highlights.php"; ?>

    <main>
      <article>
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
        </section>

        <section class="section fee" id="fee" aria-label="fee">
          <div class="container">
            <h2 class="h2 section-title text-center">Fee Structure</h2>

            <ul class="fee-list">
              <li>
                <div class="fee-card">
                  <div>
                    <h3 class="h3 card-title text-center">
                      Important Information For Admission
                    </h3>

                    <p class="card-text text-center">
                      Candidates should enclose two sets of attested copies of
                      the following documents.
                    </p>

                    <ol class="content-list">
                      <li>
                        Madhyamik Registration Card , Admit Card,Marksheet
                      </li>

                      <li>
                        Aadhar card
                      </li>

                      <li>
                        Transfer Certificate (Original)
                      </li>

                      <li>
                        School leaving Certificate / character certificate
                      </li>

                      <li>
                        Caste and Valid Certificate for SC / ST / OBC
                      </li>

                      <li>
                        JEXPO/VOCLET Admit card, Rank card (If Applicable)
                      </li>

                      <li>
                        Original Migration Certificate (if applicable)
                      </li>

                      <li>
                        Six passport size & Six stamp size colour photographs
                      </li>
                    </ol>

                    <p class="card-text text-center">
                        <strong>Candidate Must Bring The Above Document In Original for The Verification At The Time Of Admission</strong>
                      </p>
                  </div>
                </div>
              </li>

              <li>
                <div class="fee-card">
                  <div>
                    <h3 class="h3 card-title text-center">
                      Lateral Entry Scheme - 2nd Year
                    </h3>

                    <p class="card-text text-center">
                      Students who are appearing (10+2) Vocational Examination
                      in the stream of “Engineering & Technology” will be
                      admitted in the 2nd year with various disciplines after
                      counseling of the merit listed applicants, passing in
                      VOCLET -2020 examination conducted by West Bengal State
                      Council of Technical Education.
                    </p>
                  </div>
                </div>
              </li>

              <li>
                <div class="fee-card">
                  <div>
                    <h3 class="h3 card-title text-center">
                      Management Quota – For Spot Admission
                    </h3>

                    <p class="card-text text-center">
                      The candidate should pass Matric or its Equivalent
                      Examination with having minimum 35% marks in aggregate &
                      any Rank in JEXPO-2020 or 45% (without rounding up)
                      Physical Science and Mathematics taken together.
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
