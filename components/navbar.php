  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-body shadow rounded-3 m-2 p-2">
      <div class="container-fluid">
          <a class="navbar-brand text-start m-0" href=<?php session_start();
                                                        if (!isset($_SESSION["loggedin"])) echo "./";
                                                        else echo "./welcome.php" ?>>
              <i class="fa-solid fa-person-booth"></i>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav text-center mx-2">
                  <li class="nav-item">
                      <a class="nav-link active fw-bold" aria-current="page" href=<?php session_start();
                                                                                    if (!isset($_SESSION["loggedin"])) echo "./";
                                                                                    else echo "./welcome.php" ?>>
                          Home
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active fw-bold" href="./catalog.php">Catalogo</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active fw-bold" href="./#AboutUs">Chi Siamo</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active fw-bold" href="./#Contacts">Contatti</a>
                  </li>
              </ul>

              <?php

                session_start();

                if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) {
                    include("navbar-login.php");
                } else {
                    include("navbar-logout.php");
                }


                ?>

          </div>
      </div>
  </nav>
  <!--/ Navbar -->