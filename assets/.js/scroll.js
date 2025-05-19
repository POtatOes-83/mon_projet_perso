// Scroll fluide vers la section
document.addEventListener("DOMContentLoaded", function () {
  const btn = document.getElementById("btn-scroll");
  const section = document.getElementById("visites");

  if (btn && section) {
    btn.addEventListener("click", function () {
      section.scrollIntoView({ behavior: "smooth" });
    });
  }

  // Animation de fade-in lors de l'apparition
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.3 });

  const fadeElements = document.querySelectorAll('.fade-in');
  fadeElements.forEach(el => observer.observe(el));
});
