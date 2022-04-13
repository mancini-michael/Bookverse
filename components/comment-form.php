<!-- Form -->
<div class="text-start bg-dark rounded-3 my-3 py-3" id="comment-form">


    <?php

    if (isset($_GET["send"])) {
        $status_comment = $_GET["send"];
        switch ($status_comment) {
            case "inviato":
                echo "<div class=\"container alert alert-success text-center\">
                        Messaggio inviato correttamente.
                      </div>";
                break;
            case "errore":
                echo "<div class=\"container alert alert-danger text-center\">
                        Errore nell'invio.
                      </div>";
                break;
        }
    }

    ?>


    <form action="../php/send-comment.php" method="post" class="m-3">
        <div class="my-2">
            <label for="email" class="form-label m-0">Indirizzo email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Inserisci la tua mail..." required />
        </div>
        <div class="mb-2">
            <label for="description" class="form-label m-0">
                Descrizione
            </label>
            <br />
            <textarea name="description" class="form-control" id="description" rows="10" placeholder="Aggiungi una descrizione..." required></textarea>
        </div>
        <div class="text-center pt-3">
            <button type="submit" class="btn btn-primary">Invia</button>
        </div>
    </form>
</div>
<!--/ Form -->