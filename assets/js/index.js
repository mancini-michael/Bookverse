/* Arrow Listener */
window.addEventListener("scroll", () => {
  if (window.scrollY > 50) {
    if (!document.querySelector("#arrow").classList.contains("btnEntry")) {
      document.querySelector("#arrow").classList.remove("btnExit");
      document.querySelector("#arrow").classList.add("btnEntry");
      setTimeout(() => {
        document.querySelector("#arrow").style.display = "block";
      }, 150);
    }
  } else {
    if (!document.querySelector("#arrow").classList.contains("btnExit")) {
      document.querySelector("#arrow").classList.remove("btnEntry");
      document.querySelector("#arrow").classList.add("btnExit");
      setTimeout(() => {
        document.querySelector("#arrow").style.display = "none";
      }, 150);
    }
  }
});
