/* Navbar Listener */
$(".navbar-collapse a").click(() => {
  $(".navbar-collapse").collapse("hide");
});

/* Comment Section */
$("#comment-btn").click(() => {
  const email = $("#email").val();
  const description = $("#description").val();

  /* Check if title or description are null and alert user */
  if (!email || description === "") {
    $("#comment")
      .addClass("text-center alert alert-danger")
      .html("Aggiungi un'email e un commento!");
    return;
  }

  $.ajax({
    url: "../php/send-comment.php",
    type: "post",
    data: { email, description },
    success: (result) => {
      if (!result) {
        $("#comment")
          .removeClass("alert-success")
          .addClass("text-center alert alert-danger")
          .html("Errore nell'invio del commento.");
      } else {
        $("#comment")
          .removeClass("alert-danger")
          .addClass("text-center alert alert-success")
          .html("Commento inviato correttamente.");
      }
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
