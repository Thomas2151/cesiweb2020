//affichage du panel dans le menu sur mobile
    var app3 = new Vue({
      el: '#app-3',
      data: {
        seen: false
      }
    })

//bouton haut
fleche = document.getElementById("flecheHaut");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
    fleche.style.display = "block";
  } else {
    fleche.style.display = "none";
  }
}


function topFunction() {
  document.body.scrollTop = 0; // Pour Safari
  document.documentElement.scrollTop =0; // Les autres

}


//code accordion
  var acc = document.getElementsByClassName("accordion");
  var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {

    this.classList.toggle("active");
  });
}