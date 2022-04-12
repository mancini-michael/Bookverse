/* Navbar Listener */
const HideNavbar = () => {
  $(".navbar-collapse a").click(() => {
    $(".navbar-collapse").collapse("hide");
  });
};

HideNavbar();

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
