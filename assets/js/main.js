// Smooth Scroll on click
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        
        document.querySelector(this.getAttribute('href')).scrollIntoView ({
            behavior: 'smooth',
            block: 'start'
        });
        
    });
});

// Fix second nav top on scroll
window.onscroll = function fixedScroll() {secNavScroll()};

var header = document.getElementById("second-nav");
var sticky = header.offsetTop;

function secNavScroll() {
  if (window.pageYOffset > sticky) {
    header.classList.add("fixed-top");
  } else {
    header.classList.remove("fixed-top");
  }
}
