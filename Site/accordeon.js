    var app3 = new Vue({
      el: '#app-3',
      data: {
        seen: false
      }
    })

  var acc = document.getElementsByClassName("accordion");
  var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */

    


  });
}