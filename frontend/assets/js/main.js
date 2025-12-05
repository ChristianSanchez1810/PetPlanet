document.addEventListener("DOMContentLoaded", () => {
    
    const slides = document.querySelectorAll(".slide");
    const dots = document.querySelectorAll(".dot");
    const prevBtn = document.querySelector(".prev");
    const nextBtn = document.querySelector(".next");

    
    let indiceActivo = 0;

    function mostrarSlide(indice) {
        slides[indiceActivo].classList.remove("activa");
        dots[indiceActivo].classList.remove("activo");
        indiceActivo = indice;
        slides[indiceActivo].classList.add("activa");
        dots[indiceActivo].classList.add("activo");
    }
    function siguienteSlide() {
        let nuevoIndice = (indiceActivo + 1) % slides.length;
        mostrarSlide(nuevoIndice);
    }
    function anteriorSlide() {
        let nuevoIndice = (indiceActivo - 1 + slides.length) % slides.length;
        mostrarSlide(nuevoIndice);
    }
    nextBtn.addEventListener("click", () => {
        siguienteSlide();
    });
    prevBtn.addEventListener("click", () => {
        anteriorSlide();
    });
    dots.forEach((dot, indice) => {
        dot.addEventListener("click", () => {
            mostrarSlide(indice);
        });
    });
    setInterval(() => {
        siguienteSlide();
    }, 5000);
});