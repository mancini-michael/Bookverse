    <!-- Login Form -->
    <div class="login d-flex justify-content-center flex-column">
        <div class="text-center text-white my-3">
            <h1 class="m-0">Bookverse</h1>
            <span>La tua libreria virtuale</span>
        </div>

        <?php

        if (isset($_GET["mail"])) {
            echo "<div class=\"container alert alert-danger text-center\">
                    Email errata.
                  </div>";
        }

        ?>

        <?php

        if (isset($_GET["passw"])) {
            echo "<div class=\"container alert alert-danger text-center\">
                    Password errata.
                  </div>";
        }

        ?>

        <form action="../php/login.php" class="form-check text-center" name="dati" onsubmit="return validateLogin();" method="POST">
            <div class="d-flex justify-content-center align-items-center flex-column mb-auto">
                <input type="email" name="inputEmail" placeholder="Email" size="28" />
                <input type="password" class="my-2" name="inputPassword" placeholder="Password" size="28" />
                <input type="submit" class="btn btn-primary mb-2" name="loginButton" value="Login" />
                <span class="mb-2">
                    Non sei registrato?
                    <a href="../views/registration.php">Registrati</a>
                </span>
            </div>
        </form>
    </div>
    <!--/ Login Form  -->