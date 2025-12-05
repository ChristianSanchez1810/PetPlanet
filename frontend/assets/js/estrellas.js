const totalStars = 100;

const contenedor = document.getElementById("estrellas");

for (let i = 0; i < totalStars; i++) {
  const star = document.createElement("div");
  star.classList.add("star");

  star.style.top = Math.random() * 100 + "%";
  star.style.left = Math.random() * 100 + "%";

  const size = Math.random() * 3 + 2;
  star.style.width = size + "px";
  star.style.height = size + "px";

  star.style.animationDuration = Math.random() * 1 + 1 + "s";

  contenedor.appendChild(star);
}
