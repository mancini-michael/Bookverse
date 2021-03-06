  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-body shadow rounded-3 m-2 p-2 w-auto">
      <div class="container-fluid">
          <a class="navbar-brand text-start m-0" href=<?php if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) echo "./";
                                                        else echo "./welcome.php" ?>>
              <i class="fa-solid fa-person-booth"></i>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav text-center mx-2">
                  <li class="nav-item">
                      <a class="nav-link active fw-bold" aria-current="page" href=<?php if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) echo "./";
                                                                                    else echo "./welcome.php" ?>>
                          Home
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active fw-bold" href="./catalog.php">Catalogo</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active fw-bold" href=<?php if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) echo "./#AboutUs";
                                                                else echo "./welcome.php#AboutUs" ?>>Chi Siamo</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active fw-bold" href="./contacts.php">Contatti</a>
                  </li>
              </ul>

              <?php if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) {
                    include("navbar-login.php");
                } else {
                    include("navbar-logout.php");
                }


                ?>

          </div>
      </div>
  </nav>
  <!--/ Navbar -->