
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}

function loadbuyaland() {
	window.open("Lands.php");
}

function loadSellaland() {
	window.open("SellALandPart1.php");
}


function loadland1(){
		window.open("land3.html");
}

function loadland2(){
		window.open("land2.html");
}

function loadland3(){
		window.open("land3.html");
}