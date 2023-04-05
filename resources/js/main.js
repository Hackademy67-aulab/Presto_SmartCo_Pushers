let checked = true

// Evento scroll navbar
let navbar = document.querySelector('.navbar')

window.addEventListener('scroll', () => {
    if(window.scrollY > 0){
        navbar.classList.add("glass")

    } else {
        navbar.classList.remove("glass")
    }
})
// Fine evento scroll navbar





// funzione apparizione contenuto allo scroll
function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        } else {
            reveals[i].classList.remove("active");
        }
    }
}

window.addEventListener("scroll", reveal);

// user
function toggleMinimize() {
    const buttonContainer = document.getElementById("button-container");
    buttonContainer.classList.toggle("minimized");
}
// fine user
// fine funzione apparizione contenuto allo scroll
