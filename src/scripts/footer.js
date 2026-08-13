/**
 * footer.js — Ureña Roofing Contractor
 * Maneja: botón "back to top" (aparece al scrollear, scroll suave),
 * y el año de copyright dinámico.
 */

function initBackToTop() {
  const btn = document.querySelector(".js-ur-back-to-top");
  if (!btn) return;

  const toggleVisibility = () => {
    btn.classList.toggle("is-visible", window.scrollY > 480);
  };
  window.addEventListener("scroll", toggleVisibility, { passive: true });
  toggleVisibility();

  btn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
}

function initFooterYear() {
  const el = document.querySelector(".js-ur-footer-year");
  if (!el) return;
  el.textContent = String(new Date().getFullYear());
}

export function initFooter() {
  //initBackToTop();
  initFooterYear();
}