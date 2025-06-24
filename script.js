window.addEventListener('scroll', function () {
  const marquee = document.getElementById('marquee');
  const text = marquee.querySelector('.marquee-text');
  const rect = marquee.getBoundingClientRect();

  if (rect.top < window.innerHeight && rect.bottom > 0) {
    text.style.animationPlayState = 'running';
  } else {
    text.style.animationPlayState = 'paused';
  }
});


 const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl =>
    new bootstrap.Tooltip(tooltipTriggerEl)
  );