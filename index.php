<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Bookverse</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/index.css" />
</head>

<body>

  <?php include("components/navbar.php"); ?>

  <!-- Welcome -->
  <div class="welcome d-flex justify-content-center flex-column">
    <div class="text-center text-white mt-auto">
      <h1 class="m-0 w-100">Bookverse</h1>
      <span>La tua libreria virtuale</span>
    </div>
    <div class="text-center mt-auto">
      <a class="btn btn-primary welcome-btn" href="./login.php">Accedi</a>
      <a class="btn btn-info welcome-btn" href="./registration.php">
        Registrati
      </a>
    </div>
    <div class="text-center mt-auto mb-1">
      <a href="#content">
        <i class="fa-solid fa-chevron-down"></i>
      </a>
    </div>
  </div>
  <!--/ Welcome  -->

  <!-- Content -->
  <div class="content bg-black" id="content">

    <!-- Our Service -->
    <div class="text-center text-white mx-5 py-5">
      <h1 class="m-0">I nostri servizi</h1>
      <span>
        Bookverse è la tua libreria personale, sempre disponibile e in
        continuo miglioramento.
        <br />
        Inizia effettuando la
        <a class="link-info" href="registration.php">registrazione</a> alla
        libreria ed effettua l'
        <a class="link-info" href="login.php"> accesso </a>
        per iniziare ad acquistare i tuoi libri preferiti!
      </span>
    </div>

    <div class="row m-0">
      <div class="col-md text-center mx-md-5 mx-auto my-2">
        <div class="catalog mx-auto w-50"></div>
        <div class="text-center my-2">
          <span class="text-white">Sfoglia il catalogo</span>
          <br />
          <a href="./catalog.php" class="btn btn-primary my-2">Catalogo</a>
        </div>
      </div>
      <div class="col-md text-center mx-md-5 mx-auto my-2">
        <div class="history mx-auto w-50"></div>
        <div class="text-center my-2">
          <span class="text-white">Visualizza i tuoi acquisti</span>
          <br />
          <a href="./history.php" class="btn btn-primary my-2">Acquisti</a>
        </div>
      </div>
      <div class="col-md text-center mx-md-5 mx-auto my-2">
        <div class="contact mx-auto w-50"></div>
        <div class="text-center my-2">
          <span class="text-white">Non trovi quello che cerchi?</span>
          <br />
          <a href="./contacts.php" class="btn btn-primary my-2">Contattaci</a>
        </div>
      </div>
    </div>
    <!--/ Our Service  -->

        <!-- About Us -->
        <div class="text-center text-white mx-5" id="AboutUs">
            <h1 class="m-0">Chi siamo</h1>
            <span>
                Nato dall'idea di portare nel mondo virtuale le librerie, Bookverse è
                il progetto pratico per Linguaggi e Tecnologie per il Web del corso di
                laurea in Ingegneria Informatica e Automatica. 
                <br />
                Ideato e realizzato da: 
            </span>
            <div class="container-md row text-center mt-3 mb-3 mx-auto">
                <div class="col-md mt-md-5 mb-3 h-100">
                    <div class="picture d-flex justify-content-center align-items-center mx-auto mb-2">
                        <h1 class="m-0">M</h1>
                    </div>
                    <span>Michael Mancini</span>
                    <span class="matricola">1884654</span>
                </div>
                <div class="col-md mt-md-5 mb-3 h-100">
                    <div class="picture d-flex justify-content-center align-items-center mx-auto mb-2">
                        <h1 class="m-0">L</h1>
                    </div>
                    <span>Lorenzo Gizzi</span>
                    <span class="matricola">1907374</span>
                </div>
            </div>
        </div>
        <!--/ About Us -->

    <!-- Our Social -->
    <div class="text-center text-white mx-5 pb-3">
      <h1 class="m-0 w-100">La tua opinione è importante!</h1>
      <span>
        Tramite un messaggio anonimo facci sapere come poter migliorare il servizio!
      </span>

      <!-- Comment Section -->
      <div class="container-md w-md-50 text-start bg-dark rounded-3 my-3 py-3">

        <div class="w-50 mx-auto" id="messages"></div>

        <form id="comment-form">
          <div class="my-2">
            <label for="text" class="form-label m-0">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci un titolo..." />
          </div>
          <div class="mb-2">
            <label for="description" class="form-label m-0">
              Descrizione
            </label>
            <br />
            <textarea name="description" class="form-control" id="description" rows="10" placeholder="Aggiungi una descrizione..."></textarea>
          </div>
          <div class="text-center pt-3">
            <button type="submit" class="btn btn-primary">Invia</button>
          </div>
        </form>
      </div>
      <!--/ Comment Section -->

      <div class="container text-center mt-3">
        <a class="navbar-brand mx-2" href="mailto:info@bookverse.com">
          <i class="fa-solid fa-envelope"></i>
        </a>
        <a class="navbar-brand mx-2" href="#Facebook">
          <i class="fa-brands fa-facebook"></i>
        </a>
        <a class="navbar-brand mx-2" href="#Twitter">
          <i class="fa-brands fa-twitter"></i>
        </a>
      </div>
    </div>
    <!--/ Our Social -->

  </div>
  <!--/ Content -->

  <?php include("components/footer.php"); ?>

  <?php include("components/arrow.php"); ?>

  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Font Awesome JavaScript -->
  <script src="https://kit.fontawesome.com/f461cd1aac.js" crossorigin="anonymous"></script>

  <!-- Jquery JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Index JavaScript -->
  <script src="assets/js/index.js"></script>
</body>

</html>