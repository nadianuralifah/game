const img = document.getElementById("img");
let posx = parseInt(getComputedStyle(img).right, 10);

function jump() {
  if (parseInt(img.style.top) !== -50) {
    img.style.top = "-100px";
    setTimeout(() => {
      img.style.top = "10px";
    }, 900);
  }
}

function kekanan() {
  posx -= 10; // Mengurangi nilai untuk bergerak lebih cepat
  img.style.right = posx + "px"; // Mengatur posisi karakter ke kanan sejauh 'posx' piksel dari sisi kanan
}

function kekiri() {
  posx += 10; // Menambah nilai untuk bergerak lebih cepat
  img.style.right = posx + "px"; // Mengatur posisi karakter ke kiri sejauh 'posx' piksel dari sisi kanan
}

document.addEventListener("keydown", function (event) {
  event.preventDefault();
  const key = event.key;
  switch (key) {
    case "ArrowLeft":
      kekiri();
      break;
    case "ArrowRight":
      kekanan();
      break;
    case "ArrowUp":
      jump();
      break;
    case " ":
      jump();
      break;
    case "a":
      kekiri();
      break;
    case "d":
      kekanan();
      break;
    case "w":
      jump();
      break;
    case " ":
      jump();
      break;
  }
});
