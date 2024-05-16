
/*IT20089436*/
/*header animation*/

	  window.addEventListener("scroll", function() {
  let mainHeader = document.getElementById("mainHeader");

  if (window.pageYOffset > 45) {
    mainHeader.classList.add("is-sticky");
  } else {
    mainHeader.classList.remove("is-sticky");
  }
});







