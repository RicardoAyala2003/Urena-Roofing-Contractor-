/**
 * navbar.js — Ureña Roofing Contractor
 * Maneja: navbar sticky/scrolled, mega-menu de Services (desktop + mobile),
 * menú mobile (hamburguesa), y el selector de idioma EN/ES/VI (cookie).
 */

function initStickyNav() {
  const nav = document.querySelector(".js-ur-nav");
  if (!nav) return;

  let lastY = window.scrollY;
  let ticking = false;

  function update() {
    const y = window.scrollY;
    nav.dataset.state = y > 12 ? "scrolled" : "top";
    lastY = y;
    ticking = false;
  }

  window.addEventListener(
    "scroll",
    () => {
      if (!ticking) {
        requestAnimationFrame(update);
        ticking = true;
      }
    },
    { passive: true }
  );
  update();
}

function initDesktopDropdown() {
  const dropdown = document.querySelector(".js-ur-dropdown");
  const trigger = document.querySelector(".js-ur-dropdown-trigger");
  if (!dropdown || !trigger) return;

  const close = () => {
    dropdown.classList.remove("is-open");
    trigger.setAttribute("aria-expanded", "false");
  };
  const open = () => {
    dropdown.classList.add("is-open");
    trigger.setAttribute("aria-expanded", "true");
  };

  trigger.addEventListener("click", (e) => {
    e.stopPropagation();
    dropdown.classList.contains("is-open") ? close() : open();
  });

  document.addEventListener("click", (e) => {
    if (!dropdown.contains(e.target)) close();
  });
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") close();
  });
}

function initMobileMenu() {
  const mnav = document.querySelector(".js-ur-mnav");
  const openBtn = document.querySelector(".js-ur-menu-toggle");
  const closeEls = document.querySelectorAll(".js-ur-menu-close");
  if (!mnav || !openBtn) return;

  const openMenu = () => {
    mnav.classList.add("is-open");
    mnav.setAttribute("aria-hidden", "false");
    openBtn.setAttribute("aria-expanded", "true");
    document.body.style.overflow = "hidden";
  };
  const closeMenu = () => {
    mnav.classList.remove("is-open");
    mnav.setAttribute("aria-hidden", "true");
    openBtn.setAttribute("aria-expanded", "false");
    document.body.style.overflow = "";
  };

  openBtn.addEventListener("click", openMenu);
  closeEls.forEach((el) => el.addEventListener("click", closeMenu));
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && mnav.classList.contains("is-open")) closeMenu();
  });

  // Sub-dropdown de Services dentro del menú mobile
  const mTrigger = document.querySelector(".js-ur-mdropdown-trigger");
  if (mTrigger) {
    mTrigger.addEventListener("click", () => {
      const group = mTrigger.closest(".ur-mnav__group");
      const isOpen = group.classList.toggle("is-open");
      mTrigger.setAttribute("aria-expanded", String(isOpen));
    });
  }
}

/**
 * Selector de idioma EN/ES/VI — guarda la preferencia en cookie (365 días),
 * refleja el estado visual de los botones (desktop + mobile, ambos comparten
 * la clase js-ur-lang-btn), y swapea el texto de cualquier elemento con
 * atributos data-en/data-es/data-vi.
 */
function pickLangText(lang, en, es, vi) {
  if (lang === "es") return es;
  if (lang === "vi") return vi;
  return en;
}

function applyTranslations(lang) {
  document.querySelectorAll("[data-en]").forEach((el) => {
    const text = pickLangText(lang, el.dataset.en, el.dataset.es, el.dataset.vi);
    if (text) el.innerHTML = text;
  });
  // Igual que arriba pero para atributos (alt, aria-label) que no aceptan
  // HTML — se usan para cosas como "Urena"/"Ureña" en logos e íconos.
  document.querySelectorAll("[data-en-alt]").forEach((el) => {
    const text = pickLangText(lang, el.dataset.enAlt, el.dataset.esAlt, el.dataset.viAlt);
    if (text) el.setAttribute("alt", text);
  });
  document.querySelectorAll("[data-en-aria]").forEach((el) => {
    const text = pickLangText(lang, el.dataset.enAria, el.dataset.esAria, el.dataset.viAria);
    if (text) el.setAttribute("aria-label", text);
  });
}

function initLanguageToggle() {
  // Puede haber más de una instancia en el DOM (barra desktop + drawer mobile);
  // todas comparten esta clase y cada botón lleva su idioma en data-lang.
  const buttons = document.querySelectorAll(".js-ur-lang-btn");
  if (!buttons.length) return;

  const getCookie = (name) => {
    const match = document.cookie.match(new RegExp("(?:^|; )" + name + "=([^;]*)"));
    return match ? decodeURIComponent(match[1]) : null;
  };
  const setCookie = (name, value) => {
    const days = 365;
    const expires = new Date(Date.now() + days * 864e5).toUTCString();
    document.cookie = `${name}=${encodeURIComponent(value)}; expires=${expires}; path=/; SameSite=Lax`;
  };

  const applyState = (lang) => {
    document.documentElement.setAttribute("data-lang", lang);
    document.documentElement.lang = lang;
    buttons.forEach((btn) => btn.classList.toggle("is-active", btn.dataset.lang === lang));
    applyTranslations(lang);
  };

  const current = getCookie("ur_lang") || "en";
  applyState(current);

  buttons.forEach((btn) => {
    btn.addEventListener("click", () => {
      const lang = btn.dataset.lang;
      setCookie("ur_lang", lang);
      applyState(lang);
    });
  });
}

export function initNavbar() {
  initStickyNav();
  initDesktopDropdown();
  initMobileMenu();
  initLanguageToggle();
}