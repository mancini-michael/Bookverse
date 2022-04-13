    <!-- Registration Form -->
    <div class="registration d-flex justify-content-center flex-column">
        <div class="text-center text-white my-3">
            <h1 class="m-0">Bookverse</h1>
            <span>La tua libreria virtuale</span>
        </div>
        <form action="../php/registration.php" class="form-check text-center" name="dati" onsubmit="return validateRegistration();" method="POST">
            <div class="d-flex justify-content-center align-items-center flex-column">
                <input type="text" class="col m-2" name="inputNome" placeholder="Nome" size="28" />
                <input type="text" class="mb-2" name="inputCognome" placeholder="Cognome" size="28" />
                <input type="email" class="mb-2" name="inputEmail" placeholder="Email" size="28" />
                <input type="password" class="mb-2" name="inputPassword" placeholder="Password" size="28" />
                <input type="text" class="mb-2" name="inputIndirizzo" placeholder="Indirizzo" size="28" />
                <input type="text" class="mb-2" name="inputCitta" placeholder="Città" size="28" />
                <input type="number" class="mb-2" name="CAP" placeholder="CAP" size="28" />
                <div class="checkbox mb-2">
                    <input type="checkbox" class="mx-2" id="inputCheck" name="inputCheck" />
                    <label for="inputCheck">Acconsento all'invio dei miei dati</label>
                </div>
                <input type="submit" class="btn btn-primary mb-2" name="reg" value="Registrati" />
                <span class="mb-2">
                    Sei già un utente della libreria?
                    <a href="../login.php">Accedi</a>
                </span>
            </div>
        </form>
    </div>
    <!--/ Registration Form  -->