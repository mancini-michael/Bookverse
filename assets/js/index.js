/* Navbar */
$(".navbar-collapse a").click(() => {
  $(".navbar-collapse").collapse("hide");
});

/* Footer */
$("#footer").html(`&copy; ${new Date().getFullYear()} - Bookverse`);

/* Comment Section */
$("#comment-form").on("submit", async (event) => {
  event.preventDefault();

  const title = $("#title").val();
  const description = $("#description").val();

  /* Check if title or description are null and alert user */
  if (!title || description === "") {
    $("#messages")
      .addClass("text-center alert alert-danger")
      .html("Aggiungi un titolo e un commento!");
    return;
  }

  $.ajax({
    url: "../php/send-comment.php",
    type: "post",
    data: { title, description },
    success: (result) => {
      if (!result || result === "") {
        $("#messages")
          .removeClass("alert-success")
          .addClass("text-center alert alert-danger")
          .html("Errore nell'invio del commento.");
      } else {
        $("#messages")
          .removeClass("alert-danger")
          .addClass("text-center alert alert-success")
          .html("Commento inviato correttamente.");
      }
    },
  });
});

/* Perform Checkout */
$("#checkout").on("submit", async (event) => {
  event.preventDefault();

  const isbn = $("#isbn").html();
  const price = $("#price").html();

  $.ajax({
    url: "../php/transaction.php",
    type: "post",
    data: { isbn, price },
    success: (result) => {
      if (!result) {
        alert("Puoi aggiungere solo una copia del libro per acquisto!");
        return;
      }
      alert("Libro aggiunto correttamente al carrello");
    },
  });
});

/* Arrow Listener */
const arrow = document.querySelector("#arrow");

window.addEventListener("scroll", () => {
  if (window.scrollY > 50) {
    if (!arrow.classList.contains("btnEntry")) {
      arrow.classList.remove("btnExit");
      arrow.classList.add("btnEntry");
      setTimeout(() => {
        arrow.style.display = "block";
      }, 150);
    }
  } else {
    if (!arrow.classList.contains("btnExit")) {
      arrow.classList.remove("btnEntry");
      arrow.classList.add("btnExit");
      setTimeout(() => {
        arrow.style.display = "none";
      }, 150);
    }
  }
});
