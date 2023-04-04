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