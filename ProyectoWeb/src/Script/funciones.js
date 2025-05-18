document.addEventListener("DOMContentLoaded", function () {
    const boton = document.getElementById("toggleGaleriaBtn");
    const galeria = document.getElementById("galeriaImagenes");

    boton.addEventListener("click", function () {
        galeria.classList.toggle("d-none");

        boton.textContent = galeria.classList.contains("d-none")
            ? "Ver catalogo completo"
            : "Ocultar catalogo";
    });
});