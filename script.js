function scrollCarousel(direction) {
    const carousel = document.querySelector('.cards-carousel');
    const scrollAmount = 300;

    if (direction === 'left') {
        carousel.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    } else {
        carousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    }
}

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
          }
        });

        btn.classList.add('selected');
      });
    });