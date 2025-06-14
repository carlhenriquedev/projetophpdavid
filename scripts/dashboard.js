function scrollCarousel(direction, button) {
  const carousel = button.parentElement.querySelector('.cards-carousel');
  const scrollAmount = 300;

  if (direction === 'left') {
    carousel.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
  } else {
    carousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
  }
}

document.addEventListener("DOMContentLoaded", () => {
  const carousels = document.querySelectorAll(".cards-carousel");

  carousels.forEach(carousel => {
    let isDown = false;
    let startX;
    let scrollLeft;

    carousel.addEventListener("mousedown", (e) => {
      isDown = true;
      carousel.classList.add("dragging");
      startX = e.pageX - carousel.offsetLeft;
      scrollLeft = carousel.scrollLeft;
    });

    carousel.addEventListener("mouseleave", () => {
      isDown = false;
      carousel.classList.remove("dragging");
    });

    carousel.addEventListener("mouseup", () => {
      isDown = false;
      carousel.classList.remove("dragging");
    });

    carousel.addEventListener("mousemove", (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - carousel.offsetLeft;
      const walk = (x - startX) * 1.5; // Velocidade do arrasto
      carousel.scrollLeft = scrollLeft - walk;
    });
  });
});

const botoes = document.querySelectorAll('.vote-btn');

    botoes.forEach(btn => {
      btn.addEventListener('click', () => {
        const categoria = btn.dataset.categoria;
        const valor = btn.dataset.valor;

        const radioId = `${categoria}-${valor}`;
        const radio = document.getElementById(radioId);
        if (radio) {
          radio.checked = true;
        }

        botoes.forEach(b => {
          if (b.dataset.categoria === categoria) {
            b.classList.remove('selected');
            b.textContent = 'Selecionar';
          }
        });

        btn.classList.add('selected');
        btn.textContent = 'Selecionado';
      });
    });