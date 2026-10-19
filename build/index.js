/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/scripts/ExampleReactComponent.js"
/*!**********************************************!*\
  !*** ./src/scripts/ExampleReactComponent.js ***!
  \**********************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


function ExampleReactComponent() {
  const [clickCount, setClickCount] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(0);
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    className: "bg-gradient-to-r from-blue-500 to-indigo-600 text-white p-4 rounded-md",
    onClick: () => setClickCount(prev => prev + 1),
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h1", {
      className: "text-xl",
      children: "Hello from React!"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
      className: "text-sm",
      children: ["You have clicked on this component", " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        className: "text-yellow-200 font-bold",
        children: clickCount
      }), " times."]
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (ExampleReactComponent);

/***/ },

/***/ "./src/scripts/GafBadge.js"
/*!*********************************!*\
  !*** ./src/scripts/GafBadge.js ***!
  \*********************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_dom__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-dom */ "react-dom/client");
/* harmony import */ var react_dom__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_dom__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__);



const GAF_PROFILE_URL = "https://www.gaf.com/en-us/roofing-contractors/residential/usa/tx/houston/urena-roofing-contractor-llc-1132678";
const GAF_LOGO_URL = "/wp-content/uploads/2026/08/LOGO-VECTOR-GAF.png";
const GAF_PRESIDENTS_CLUB_LOGO_URL = "/wp-content/uploads/2026/08/MASTER_ELITE_GAF_VECTORES.png";

// Estructurado como lista para poder sumar más certificaciones más adelante
// sin tocar el resto del componente.
const CERTIFICATIONS = [{
  label: "GAF Certified Contractor",
  image: GAF_LOGO_URL,
  link: GAF_PROFILE_URL
}, {
  label: "GAF President's Club Award",
  image: GAF_PRESIDENTS_CLUB_LOGO_URL,
  link: GAF_PROFILE_URL
}];
function ShieldIcon({
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("svg", {
    className: className,
    viewBox: "0 0 24 24",
    fill: "none",
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("path", {
      d: "M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z",
      stroke: "currentColor",
      strokeWidth: "1.8",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("path", {
      d: "M9 12l2 2 4-4",
      stroke: "currentColor",
      strokeWidth: "1.8",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    })]
  });
}
function MinusIcon({
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("svg", {
    className: className,
    viewBox: "0 0 24 24",
    fill: "none",
    "aria-hidden": "true",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("path", {
      d: "M5 12h14",
      stroke: "currentColor",
      strokeWidth: "2.2",
      strokeLinecap: "round"
    })
  });
}
function ExternalLinkIcon({
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("svg", {
    className: className,
    viewBox: "0 0 24 24",
    fill: "none",
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("path", {
      d: "M14 5H19V10",
      stroke: "currentColor",
      strokeWidth: "1.7",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("path", {
      d: "M10 14L19 5",
      stroke: "currentColor",
      strokeWidth: "1.7",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("path", {
      d: "M19 14V18a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1H10",
      stroke: "currentColor",
      strokeWidth: "1.7",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    })]
  });
}
function CloseIcon({
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("svg", {
    className: className,
    viewBox: "0 0 24 24",
    fill: "none",
    "aria-hidden": "true",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("path", {
      d: "M6 6l12 12M18 6 6 18",
      stroke: "currentColor",
      strokeWidth: "2",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    })
  });
}
function GafBadge() {
  const [isOpen, setIsOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [hoveredIndex, setHoveredIndex] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(null);
  const [lightboxIndex, setLightboxIndex] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(null);
  const closeTimer = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);

  // Pequeño margen antes de cerrar la vista previa: sin esto, mover el mouse
  // de la fila hacia el panel de preview la cierra a mitad de camino porque
  // el mouseleave de la fila dispara antes de que el mouseenter del panel llegue.
  const openPreview = i => {
    if (closeTimer.current) {
      clearTimeout(closeTimer.current);
      closeTimer.current = null;
    }
    setHoveredIndex(i);
  };
  const scheduleClosePreview = () => {
    closeTimer.current = setTimeout(() => setHoveredIndex(null), 150);
  };
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    if (lightboxIndex === null) return;
    const onKeyDown = e => {
      if (e.key === "Escape") setLightboxIndex(null);
    };
    window.addEventListener("keydown", onKeyDown);
    return () => window.removeEventListener("keydown", onKeyDown);
  }, [lightboxIndex]);
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
    className: "ur-gaf-mobile-shift fixed left-0 top-[42%] z-[850] -translate-y-1/2",
    style: {
      fontFamily: "'Public Sans', 'Segoe UI', Arial, sans-serif"
    },
    children: [!isOpen && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("button", {
      type: "button",
      onClick: () => setIsOpen(true),
      "aria-label": "View certifications",
      className: "flex flex-col items-center gap-2.5 rounded-r-[10px] bg-[#12103A] px-2.5 py-4 text-[#F6BE15] shadow-[6px_8px_24px_rgba(18,16,58,0.24)] transition-all hover:bg-[#221D5C] hover:pr-3.5",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(ShieldIcon, {
        className: "h-[19px] w-[19px] flex-shrink-0"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
        className: "text-[0.66rem] font-bold uppercase tracking-[0.16em]",
        style: {
          writingMode: "vertical-rl",
          transform: "rotate(180deg)",
          fontFamily: "'IBM Plex Mono', monospace"
        },
        children: "Certifications"
      })]
    }), isOpen && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
      className: "relative",
      children: [hoveredIndex !== null && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
        onMouseEnter: () => openPreview(hoveredIndex),
        onMouseLeave: scheduleClosePreview,
        className: "absolute left-full top-1/2 -translate-y-1/2 ml-3 w-[300px] rounded-[10px] border border-[#12103A]/10 bg-white p-4 text-center shadow-[10px_16px_40px_rgba(18,16,58,0.28)] animate-[urGafFade_.18s_ease_both]",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("button", {
          type: "button",
          onClick: () => setLightboxIndex(hoveredIndex),
          "aria-label": `Enlarge ${CERTIFICATIONS[hoveredIndex].label}`,
          className: "flex w-full cursor-pointer items-center justify-center rounded-[8px] border-0 bg-white p-2 transition hover:opacity-80",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("img", {
            src: CERTIFICATIONS[hoveredIndex].image,
            alt: CERTIFICATIONS[hoveredIndex].label,
            className: "h-[268px] w-[268px] object-contain"
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("button", {
          type: "button",
          onClick: () => setLightboxIndex(hoveredIndex),
          className: "mt-3 cursor-pointer border-0 bg-transparent p-0 text-[0.72rem] font-bold uppercase tracking-[0.08em] text-[#5B5F6B] underline decoration-dotted underline-offset-4 transition hover:text-[#C9910A]",
          children: "Click to enlarge"
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
        className: "w-[250px] rounded-r-[10px] border border-[#12103A]/10 bg-white p-3.5 shadow-[6px_14px_40px_rgba(18,16,58,0.22)] animate-[urGafIn_.22s_ease_both]",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
          className: "flex items-center justify-between pb-2.5",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
            className: "text-[0.64rem] font-bold uppercase tracking-[0.14em] text-[#C9910A]",
            style: {
              fontFamily: "'IBM Plex Mono', monospace"
            },
            children: "Certifications"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("button", {
            type: "button",
            onClick: () => setIsOpen(false),
            "aria-label": "Minimize",
            className: "flex h-6 w-6 items-center justify-center rounded-[6px] bg-[#EEF1F5] text-[#12103A] transition hover:bg-[#12103A]/10",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(MinusIcon, {
              className: "h-3.5 w-3.5"
            })
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("ul", {
          className: "flex flex-col gap-2",
          children: CERTIFICATIONS.map((cert, i) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("li", {
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("a", {
              href: cert.link,
              target: "_blank",
              rel: "noopener noreferrer",
              onMouseEnter: () => openPreview(i),
              onMouseLeave: scheduleClosePreview,
              onFocus: () => openPreview(i),
              onBlur: scheduleClosePreview,
              className: "flex items-center gap-2.5 rounded-[8px] border border-[#12103A]/10 px-3 py-2.5 text-inherit no-underline transition hover:border-[#C9910A] hover:bg-[#EEF1F5]",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
                className: "flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-[#EEF1F5] text-[#C9910A]",
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(ShieldIcon, {
                  className: "h-4 w-4"
                })
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
                className: "flex-1 text-[0.8rem] font-bold text-[#12103A]",
                children: cert.label
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
                className: "flex-shrink-0 text-[#5B5F6B] opacity-70",
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(ExternalLinkIcon, {
                  className: "h-3.5 w-3.5"
                })
              })]
            })
          }, cert.label))
        })]
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("style", {
      children: `
				@keyframes urGafIn { from { opacity: 0; transform: translateX(-10px); } to { opacity: 1; transform: translateX(0); } }
				@keyframes urGafFade { from { opacity: 0; transform: translateX(-6px); } to { opacity: 1; transform: translateX(0); } }
				@keyframes urGafLightboxIn { from { opacity: 0; } to { opacity: 1; } }
				@keyframes urGafLightboxZoom { from { opacity: 0; transform: scale(.96); } to { opacity: 1; transform: scale(1); } }
				@media (max-width: 640px) {
					.ur-gaf-mobile-shift { top: auto !important; bottom: 96px !important; transform: none !important; }
				}
			`
    }), lightboxIndex !== null && (0,react_dom__WEBPACK_IMPORTED_MODULE_1__.createPortal)(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
      role: "dialog",
      "aria-modal": "true",
      "aria-label": CERTIFICATIONS[lightboxIndex].label,
      onClick: () => setLightboxIndex(null),
      className: "fixed inset-0 z-[10000] flex items-center justify-center bg-[#0B0A24]/80 p-6",
      style: {
        animation: "urGafLightboxIn .18s ease both"
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("button", {
        type: "button",
        onClick: () => setLightboxIndex(null),
        "aria-label": "Close",
        className: "absolute right-5 top-5 flex h-10 w-10 items-center justify-center rounded-full bg-white/10 text-white transition hover:bg-white/20",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(CloseIcon, {
          className: "h-5 w-5"
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
        onClick: e => e.stopPropagation(),
        className: "max-h-[85vh] max-w-[90vw] rounded-[14px] bg-white p-6 shadow-[0_30px_80px_rgba(0,0,0,0.4)]",
        style: {
          animation: "urGafLightboxZoom .22s cubic-bezier(.16,1,.3,1) both"
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("img", {
          src: CERTIFICATIONS[lightboxIndex].image,
          alt: CERTIFICATIONS[lightboxIndex].label,
          className: "max-h-[70vh] max-w-full object-contain"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("p", {
          className: "mt-4 text-center text-sm font-bold uppercase tracking-[0.1em] text-[#12103A]",
          children: CERTIFICATIONS[lightboxIndex].label
        })]
      })]
    }), document.body)]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (GafBadge);

/***/ },

/***/ "./src/scripts/Person.js"
/*!*******************************!*\
  !*** ./src/scripts/Person.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
class Person {
  constructor(name) {
    this.name = name;
    this.greet();
  }
  greet() {
    console.log(`Hello, my name is ${this.name}.`);
  }
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Person);

/***/ },

/***/ "./src/scripts/UrenaRoofingChatbot.js"
/*!********************************************!*\
  !*** ./src/scripts/UrenaRoofingChatbot.js ***!
  \********************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


// ========== CONSTANTES ==========

const PHONE_DISPLAY = "(832) 739-2842";
const PHONE_LINK = "tel:+18327392842";
const EMAIL_DISPLAY = "info@urenaroofing.com";
const EMAIL_LINK = "mailto:info@urenaroofing.com";
const ESTIMATE_LINK = "/contact";
const ABOUT_LINK = "/about";
const SERVICE_AREAS_LINK = "/service-areas";
const SERVICES_LINK = "/services";
const BROCHURE_LINK = "/wp-content/uploads/2026/08/UrenaRoofinBrochure_compressed-1.pdf";

// ========== ICONOS ==========
const BotIcon = ({
  className
}) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  className: className,
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "1.7",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M12 3C8.134 3 5 6.134 5 10v2.2c0 .53-.21 1.04-.586 1.414L3 15h18l-1.414-1.386A2 2 0 0 1 19 12.2V10c0-3.866-3.134-7-7-7Z"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M9 18c.4 1.2 1.5 2 3 2s2.6-.8 3-2"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
    cx: "9.25",
    cy: "10.25",
    r: "1",
    fill: "currentColor"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
    cx: "14.75",
    cy: "10.25",
    r: "1",
    fill: "currentColor"
  })]
});
const CloseIcon = ({
  className
}) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  className: className,
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "1.9",
  strokeLinecap: "round",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M6 6L18 18"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M18 6L6 18"
  })]
});
const SendIcon = ({
  className
}) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  className: className,
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "1.8",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M21 3L10 14"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M21 3L14 21L10 14L3 10L21 3Z"
  })]
});
const PhoneIcon = ({
  className
}) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  className: className,
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "1.7",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M21 16.2V19a2 2 0 0 1-2.18 2A19.8 19.8 0 0 1 3 5.18 2 2 0 0 1 5 3h2.8a2 2 0 0 1 2 1.72l.38 2.66a2 2 0 0 1-.58 1.72l-1.2 1.2a16 16 0 0 0 5.4 5.4l1.2-1.2a2 2 0 0 1 1.72-.58l2.66.38A2 2 0 0 1 21 16.2Z"
  })
});

// ========== FUNCIONES DEL BOT ==========
function createBotMessage(text, links = []) {
  return {
    id: Date.now() + Math.random(),
    text,
    sender: "bot",
    timestamp: new Date(),
    links
  };
}
function getBotResponse(input) {
  const lower = input.toLowerCase();

  // Residential Roof Replacement
  if (lower.includes("residential") || lower.includes("roof replacement") || lower.includes("new roof") || lower.includes("re-roof")) {
    return createBotMessage("Residential roof replacement is one of the biggest investments in your home. Urena Roofing handles full tear-off and replacement using premium, storm-resistant materials. We provide complete before/after photo documentation and written warranties on materials and workmanship.", [{
      label: "Learn More",
      href: `${SERVICES_LINK}/residential-roof-replacement`
    }, {
      label: "Get Free Estimate",
      href: ESTIMATE_LINK
    }]);
  }

  // Storm & Hail Damage
  if (lower.includes("storm") || lower.includes("hail") || lower.includes("hurricane") || lower.includes("wind") || lower.includes("damage") || lower.includes("insurance claim") || lower.includes("emergency")) {
    return createBotMessage("Storm and hail damage repair is our specialty. Houston's storms don't wait — and neither do we. We provide emergency roof damage assessment, full documentation for insurance claims, and HB2102-compliant processes that protect your deductible, your rights, and your home.", [{
      label: "Call Now",
      href: PHONE_LINK
    }, {
      label: "Get Free Estimate",
      href: ESTIMATE_LINK
    }]);
  }

  // Roof Maintenance & Inspections
  if (lower.includes("maintenance") || lower.includes("inspection") || lower.includes("preventive") || lower.includes("preventative") || lower.includes("check") || lower.includes("maintain")) {
    return createBotMessage("Preventive care is the best way to extend your roof's life. We offer scheduled annual or seasonal inspections with detailed photo reports after every visit, plus minor repair and sealing services. Perfect for homeowners and HOAs alike.", [{
      label: "Learn More",
      href: `${SERVICES_LINK}/roof-maintenance-inspections`
    }, {
      label: "Get Free Estimate",
      href: ESTIMATE_LINK
    }]);
  }

  // Commercial & Flat Roofing
  if (lower.includes("commercial") || lower.includes("flat roof") || lower.includes("business") || lower.includes("office") || lower.includes("retail") || lower.includes("low-slope")) {
    return createBotMessage("Commercial and flat roofing requires specialized expertise. We provide low-disruption, reliable roofing solutions for businesses, offices, and flat-roof properties with commercial-grade materials built for durability. We coordinate scheduling around your business operations.", [{
      label: "Learn More",
      href: `${SERVICES_LINK}/commercial-flat-roofing`
    }, {
      label: "Get Free Estimate",
      href: ESTIMATE_LINK
    }]);
  }

  // HOA Roofing Programs
  if (lower.includes("hoa") || lower.includes("community") || lower.includes("homeowner association") || lower.includes("board") || lower.includes("maintenance contract")) {
    return createBotMessage("We offer scheduled inspections, clear reporting, and dependable service built for communities of 50 to 300+ homes. Annual maintenance contracts include photo-documented reporting for HOA boards and priority response for storm-related claims.", [{
      label: "Learn More",
      href: `${SERVICES_LINK}/hoa-roofing-programs`
    }, {
      label: "Get Free Estimate",
      href: ESTIMATE_LINK
    }]);
  }

  // HB2102 / Legal
  if (lower.includes("hb2102") || lower.includes("hb 2102") || lower.includes("deductible") || lower.includes("legal") || lower.includes("illegal") || lower.includes("compliance") || lower.includes("rights") || lower.includes("texas law")) {
    return createBotMessage("Texas law (HB2102) requires homeowners to pay their own insurance deductible on roofing claims — and it's illegal for a contractor to offer to waive or 'forgive' that deductible. Urena Roofing operates in full compliance with HB2102, protecting your roof, your budget, and your legal standing.", [{
      label: "Learn More About HB2102",
      href: ABOUT_LINK
    }, {
      label: "Get Free Estimate",
      href: ESTIMATE_LINK
    }]);
  }

  // Licenses & Insurance
  if (lower.includes("licensed") || lower.includes("insured") || lower.includes("bonded") || lower.includes("license") || lower.includes("insurance") || lower.includes("workers comp") || lower.includes("liability")) {
    return createBotMessage("Urena Roofing Contractor is fully licensed and insured. We operate with a General Cleaning License, full Liability Insurance, and Workers' Compensation coverage — so every project is protected, start to finish. We're also fully HB2102 compliant.", [{
      label: "About Us",
      href: ABOUT_LINK
    }, {
      label: "Get Free Estimate",
      href: ESTIMATE_LINK
    }]);
  }

  // Service Areas
  if (lower.includes("areas") || lower.includes("service area") || lower.includes("location") || lower.includes("locations") || lower.includes("bellaire") || lower.includes("sugar land") || lower.includes("katy") || lower.includes("cypress") || lower.includes("memorial") || lower.includes("heights") || lower.includes("clear lake") || lower.includes("fulshear") || lower.includes("richmond") || lower.includes("west university") || lower.includes("spring") || lower.includes("klein")) {
    return createBotMessage("We proudly serve homeowners, HOAs, and businesses across the Greater Houston area — including Bellaire, Houston Heights, Memorial, Sugar Land, Clear Lake, Katy, Cypress, Fulshear, Richmond, West University, Spring, and Klein. Don't see your area? We probably still cover it — just ask!", [{
      label: "View All Service Areas",
      href: SERVICE_AREAS_LINK
    }, {
      label: "Download Brochure",
      href: BROCHURE_LINK,
      download: true
    }, {
      label: "Get Free Estimate",
      href: ESTIMATE_LINK
    }]);
  }

  // Estimate / Quote
  if (lower.includes("estimate") || lower.includes("quote") || lower.includes("consultation") || lower.includes("free estimate") || lower.includes("cost") || lower.includes("price") || lower.includes("budget")) {
    return createBotMessage("You can request a free estimate through our contact page. Whether it's storm damage, a full replacement, or a maintenance plan for your HOA — our team is ready to help. We provide clear written proposals with scope, timeline, and transparent pricing.", [{
      label: "Get Free Estimate",
      href: ESTIMATE_LINK
    }, {
      label: "Call Now",
      href: PHONE_LINK
    }]);
  }

  // Contact / Phone / Email
  if (lower.includes("contact") || lower.includes("phone") || lower.includes("email") || lower.includes("call") || lower.includes("reach")) {
    return createBotMessage(`You can reach us by phone at ${PHONE_DISPLAY} or (346) 404-6431, email us at ${EMAIL_DISPLAY}, or submit a request through our contact page. Our office is located at 3648 Cypress Creek Pkwy Ste 225, Houston, TX 77068.`, [{
      label: "Contact Us",
      href: ESTIMATE_LINK
    }, {
      label: "Call Now",
      href: PHONE_LINK
    }]);
  }

  // Brochure / PDF Download
  if (lower.includes("brochure") || lower.includes("pdf") || lower.includes("download")) {
    return createBotMessage("Here's our brochure — a quick overview of our services, licensing, and service areas. Free to download.", [{
      label: "Download Brochure (PDF)",
      href: BROCHURE_LINK,
      download: true
    }, {
      label: "Get Free Estimate",
      href: ESTIMATE_LINK
    }]);
  }

  // Gallery / Before & After
  if (lower.includes("gallery") || lower.includes("before") || lower.includes("after") || lower.includes("projects") || lower.includes("work") || lower.includes("photos") || lower.includes("pictures") || lower.includes("real roofs")) {
    return createBotMessage("You can see real projects and real results — our before and after transformations show exactly what we deliver. We provide full visual proof of every job with photo documentation.", [{
      label: "View Our Work",
      href: "/gallery"
    }, {
      label: "Get Free Estimate",
      href: ESTIMATE_LINK
    }]);
  }

  // Testimonials / Reviews
  if (lower.includes("testimonial") || lower.includes("review") || lower.includes("client") || lower.includes("what clients say") || lower.includes("feedback")) {
    return createBotMessage("We're proud of the trust our clients place in us. While we're currently gathering our latest reviews, you can always reach out directly to hear about our work from homeowners and HOA boards across Houston.", [{
      label: "Get Free Estimate",
      href: ESTIMATE_LINK
    }, {
      label: "Call Now",
      href: PHONE_LINK
    }]);
  }

  // About / Company
  if (lower.includes("about") || lower.includes("company") || lower.includes("founded") || lower.includes("experience") || lower.includes("background")) {
    return createBotMessage("Urena Roofing Contractor LLC is a licensed, insured roofing company proudly serving Houston homeowners, businesses, and communities. We're built on trust, backed by experience — founded to bring honest, professional roofing services to the Houston community, one roof at a time.", [{
      label: "Learn More About Us",
      href: ABOUT_LINK
    }, {
      label: "Get Free Estimate",
      href: ESTIMATE_LINK
    }]);
  }

  // Default
  return createBotMessage("Hi — I'm the Urena Roofing assistant. I can help with residential roof replacement, storm & hail damage repair, roof maintenance & inspections, commercial & flat roofing, HOA programs, HB2102 compliance, service areas, licensing, and free estimates.", [{
    label: "Get Free Estimate",
    href: ESTIMATE_LINK
  }, {
    label: "Call Now",
    href: PHONE_LINK
  }]);
}

// ========== COMPONENTE PRINCIPAL ==========
function UrenaRoofingChatbot() {
  const [isOpen, setIsOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [inputMessage, setInputMessage] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)("");
  const [messages, setMessages] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)([]);
  const [isTyping, setIsTyping] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const messagesEndRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  const quickActions = (0,react__WEBPACK_IMPORTED_MODULE_0__.useMemo)(() => [{
    text: "Residential Roofing",
    icon: "🏠"
  }, {
    text: "Storm & Hail Damage",
    icon: "⛈️"
  }, {
    text: "Free Estimate",
    icon: "📋"
  }, {
    text: "HB2102 Compliance",
    icon: "⚖️"
  }, {
    text: "Service Areas",
    icon: "📍"
  }, {
    text: "HOA Programs",
    icon: "🏘️"
  }, {
    text: "Download Brochure",
    icon: "📄"
  }], []);

  // Mensaje de bienvenida al abrir
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    if (messages.length === 0) {
      setMessages([{
        id: 1,
        text: "Hi, I'm the Urena Roofing assistant. I can help with residential roofing, storm damage, maintenance, HOA programs, HB2102 compliance, service areas, and requesting a free estimate.",
        sender: "bot",
        timestamp: new Date(),
        links: [{
          label: "Get Free Estimate",
          href: ESTIMATE_LINK
        }, {
          label: "Call Now",
          href: PHONE_LINK
        }]
      }]);
    }
  }, []);
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    messagesEndRef.current?.scrollIntoView({
      behavior: "smooth"
    });
  }, [messages, isTyping]);
  const handleSend = e => {
    e.preventDefault();
    if (!inputMessage.trim()) return;
    const userMsg = {
      id: Date.now(),
      text: inputMessage,
      sender: "user",
      timestamp: new Date()
    };
    setMessages(prev => [...prev, userMsg]);
    setInputMessage("");
    setIsTyping(true);
    setTimeout(() => {
      const botResponse = getBotResponse(inputMessage);
      setMessages(prev => [...prev, botResponse]);
      setIsTyping(false);
    }, 700);
  };
  const handleQuickAction = text => {
    setInputMessage(text);
    // Si quieres que envíe automáticamente al hacer clic, descomenta:
    // setTimeout(() => handleSend({ preventDefault: () => {} }), 300);
  };
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    className: "fixed bottom-4 right-4 z-[9999] sm:bottom-5 sm:right-5",
    children: [isOpen && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "mb-3 flex h-[31rem] w-[calc(100vw-1.25rem)] max-w-[22rem] flex-col overflow-hidden rounded-2xl bg-white shadow-2xl sm:h-[33rem]",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "bg-[#192F44] px-4 py-3 text-white",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "flex items-center justify-between",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            className: "flex items-center gap-3",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              className: "flex h-10 w-10 items-center justify-center rounded-full bg-white/10",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(BotIcon, {
                className: "h-5 w-5"
              })
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                className: "text-[10px] font-bold uppercase tracking-widest text-[#F5A623]",
                children: "Urena Roofing"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                className: "text-sm font-bold",
                children: "Urena Roofing Assistant"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                className: "text-[10px] font-semibold uppercase tracking-wider text-[#CFE0DA]",
                children: "Licensed & Insured"
              })]
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            onClick: () => setIsOpen(false),
            className: "rounded-full p-1 hover:bg-white/10",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(CloseIcon, {
              className: "h-5 w-5"
            })
          })]
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "flex-1 overflow-y-auto bg-[#f8f7f2] p-4",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "space-y-3",
          children: [messages.map(msg => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: `flex ${msg.sender === "user" ? "justify-end" : "justify-start"}`,
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              className: `max-w-[85%] rounded-2xl px-3 py-2 text-sm ${msg.sender === "user" ? "bg-[#192F44] text-white" : "bg-white text-[#192F44] shadow-sm"}`,
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                children: msg.text
              }), msg.links && msg.links.length > 0 && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                className: "mt-2 flex flex-wrap gap-1.5",
                children: msg.links.map((link, i) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                  href: link.href,
                  download: link.download || undefined,
                  className: "rounded-full border border-[#192F44]/10 bg-[#f0efe8] px-2 py-0.5 text-[10px] font-bold text-[#236476] hover:bg-[#F5A623] hover:text-white",
                  children: link.label
                }, i))
              })]
            })
          }, msg.id)), isTyping && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "flex justify-start",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              className: "rounded-2xl bg-white px-3 py-2 shadow-sm",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                className: "animate-pulse",
                children: "..."
              })
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            ref: messagesEndRef
          })]
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "border-t border-[#192F44]/10 bg-white px-4 py-2",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
          className: "text-[10px] font-bold uppercase tracking-wider text-[#236476]",
          children: "Quick help"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "mt-1 flex flex-wrap gap-1.5",
          children: quickActions.map(action => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
            onClick: () => handleQuickAction(action.text),
            className: "rounded-full border border-[#192F44]/10 bg-[#f8f7f2] px-2.5 py-1 text-[10px] font-bold text-[#192F44] hover:bg-[#F5A623] hover:text-white",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              className: "mr-1",
              children: action.icon
            }), action.text]
          }, action.text))
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "border-t border-[#192F44]/10 bg-white p-3",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("form", {
          onSubmit: handleSend,
          className: "flex items-center gap-2",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
            type: "text",
            value: inputMessage,
            onChange: e => setInputMessage(e.target.value),
            placeholder: "Ask about roofing...",
            className: "flex-1 rounded-full border border-[#192F44]/20 bg-[#f8f7f2] px-3 py-2 text-sm outline-none focus:border-[#F5A623]"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            type: "submit",
            disabled: !inputMessage.trim(),
            className: "rounded-full bg-[#F5A623] p-2 text-white shadow-md hover:bg-[#d4941f] disabled:opacity-50",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(SendIcon, {
              className: "h-4 w-4"
            })
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "mt-2 flex items-center justify-between text-[10px] text-[#192F44]/60",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
            href: PHONE_LINK,
            className: "flex items-center gap-1 hover:text-[#236476]",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(PhoneIcon, {
              className: "h-3 w-3"
            }), " ", PHONE_DISPLAY]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: EMAIL_LINK,
            className: "hover:text-[#236476]",
            children: EMAIL_DISPLAY
          })]
        })]
      })]
    }), !isOpen ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
      onClick: () => setIsOpen(true),
      className: "group relative flex h-14 w-14 items-center justify-center rounded-full border-2 border-[#F5A623] bg-[#192F44] text-white shadow-[0_8px_30px_rgba(25,47,68,0.35)] transition-all hover:scale-105 hover:shadow-[0_12px_40px_rgba(25,47,68,0.45)]",
      "aria-label": "Open chat",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        className: "absolute inset-0 rounded-full border-2 border-[#F5A623] animate-ping opacity-75"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        className: "absolute inset-0 rounded-full border-2 border-[#F5A623] opacity-50"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(BotIcon, {
        className: "relative h-6 w-6"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("span", {
        className: "absolute -right-0.5 -top-0.5 flex h-3.5 w-3.5",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
          className: "absolute inline-flex h-full w-full animate-ping rounded-full bg-[#F5A623] opacity-75"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
          className: "relative inline-flex h-3.5 w-3.5 rounded-full bg-[#F5A623]"
        })]
      })]
    }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
      onClick: () => setIsOpen(false),
      className: "flex h-14 w-14 items-center justify-center rounded-full bg-[#192F44] text-white shadow-lg transition-all hover:scale-105",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(CloseIcon, {
        className: "h-6 w-6"
      })
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (UrenaRoofingChatbot);

/***/ },

/***/ "./src/scripts/footer.js"
/*!*******************************!*\
  !*** ./src/scripts/footer.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   initFooter: () => (/* binding */ initFooter)
/* harmony export */ });
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
  window.addEventListener("scroll", toggleVisibility, {
    passive: true
  });
  toggleVisibility();
  btn.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });
}
function initFooterYear() {
  const el = document.querySelector(".js-ur-footer-year");
  if (!el) return;
  el.textContent = String(new Date().getFullYear());
}
function initFooter() {
  //initBackToTop();
  initFooterYear();
}

/***/ },

/***/ "./src/scripts/navbar.js"
/*!*******************************!*\
  !*** ./src/scripts/navbar.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   initNavbar: () => (/* binding */ initNavbar)
/* harmony export */ });
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
  window.addEventListener("scroll", () => {
    if (!ticking) {
      requestAnimationFrame(update);
      ticking = true;
    }
  }, {
    passive: true
  });
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
  trigger.addEventListener("click", e => {
    e.stopPropagation();
    dropdown.classList.contains("is-open") ? close() : open();
  });
  document.addEventListener("click", e => {
    if (!dropdown.contains(e.target)) close();
  });
  document.addEventListener("keydown", e => {
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
  closeEls.forEach(el => el.addEventListener("click", closeMenu));
  document.addEventListener("keydown", e => {
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
  document.querySelectorAll("[data-en]").forEach(el => {
    const text = pickLangText(lang, el.dataset.en, el.dataset.es, el.dataset.vi);
    if (text) el.innerHTML = text;
  });
  // Igual que arriba pero para atributos (alt, aria-label) que no aceptan
  // HTML — se usan para cosas como "Urena"/"Ureña" en logos e íconos.
  document.querySelectorAll("[data-en-alt]").forEach(el => {
    const text = pickLangText(lang, el.dataset.enAlt, el.dataset.esAlt, el.dataset.viAlt);
    if (text) el.setAttribute("alt", text);
  });
  document.querySelectorAll("[data-en-aria]").forEach(el => {
    const text = pickLangText(lang, el.dataset.enAria, el.dataset.esAria, el.dataset.viAria);
    if (text) el.setAttribute("aria-label", text);
  });
}
function initLanguageToggle() {
  // Puede haber más de una instancia en el DOM (barra desktop + drawer mobile);
  // todas comparten esta clase y cada botón lleva su idioma en data-lang.
  const buttons = document.querySelectorAll(".js-ur-lang-btn");
  if (!buttons.length) return;
  const getCookie = name => {
    const match = document.cookie.match(new RegExp("(?:^|; )" + name + "=([^;]*)"));
    return match ? decodeURIComponent(match[1]) : null;
  };
  const setCookie = (name, value) => {
    const days = 365;
    const expires = new Date(Date.now() + days * 864e5).toUTCString();
    document.cookie = `${name}=${encodeURIComponent(value)}; expires=${expires}; path=/; SameSite=Lax`;
  };
  const applyState = lang => {
    document.documentElement.setAttribute("data-lang", lang);
    document.documentElement.lang = lang;
    buttons.forEach(btn => btn.classList.toggle("is-active", btn.dataset.lang === lang));
    applyTranslations(lang);
  };
  const current = getCookie("ur_lang") || "en";
  applyState(current);
  buttons.forEach(btn => {
    btn.addEventListener("click", () => {
      const lang = btn.dataset.lang;
      setCookie("ur_lang", lang);
      applyState(lang);
    });
  });
}
function initNavbar() {
  initStickyNav();
  initDesktopDropdown();
  initMobileMenu();
  initLanguageToggle();
}

/***/ },

/***/ "react"
/*!************************!*\
  !*** external "React" ***!
  \************************/
(module) {

module.exports = window["React"];

/***/ },

/***/ "react-dom/client"
/*!***************************!*\
  !*** external "ReactDOM" ***!
  \***************************/
(module) {

module.exports = window["ReactDOM"];

/***/ },

/***/ "react/jsx-runtime"
/*!**********************************!*\
  !*** external "ReactJSXRuntime" ***!
  \**********************************/
(module) {

module.exports = window["ReactJSXRuntime"];

/***/ }

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	const __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		const cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		const module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		if (!(moduleId in __webpack_modules__)) {
/******/ 			delete __webpack_module_cache__[moduleId];
/******/ 			const e = new Error("Cannot find module '" + moduleId + "'");
/******/ 			e.code = 'MODULE_NOT_FOUND';
/******/ 			throw e;
/******/ 		}
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			const getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter/value functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			if(Array.isArray(definition)) {
/******/ 				var i = 0;
/******/ 				while(i < definition.length) {
/******/ 					var key = definition[i++];
/******/ 					var binding = definition[i++];
/******/ 					if(!__webpack_require__.o(exports, key)) {
/******/ 						if(binding === 0) {
/******/ 							Object.defineProperty(exports, key, { enumerable: true, value: definition[i++] });
/******/ 						} else {
/******/ 							Object.defineProperty(exports, key, { enumerable: true, get: binding });
/******/ 						}
/******/ 					} else if(binding === 0) { i++; }
/******/ 				}
/******/ 			} else {
/******/ 				for(var key in definition) {
/******/ 					if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 						Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 					}
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.hasOwn(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
let __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
(() => {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _scripts_Person__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./scripts/Person */ "./src/scripts/Person.js");
/* harmony import */ var _scripts_ExampleReactComponent__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./scripts/ExampleReactComponent */ "./src/scripts/ExampleReactComponent.js");
/* harmony import */ var _scripts_navbar__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./scripts/navbar */ "./src/scripts/navbar.js");
/* harmony import */ var _scripts_footer__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./scripts/footer */ "./src/scripts/footer.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! react-dom/client */ "react-dom/client");
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(react_dom_client__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _scripts_UrenaRoofingChatbot__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./scripts/UrenaRoofingChatbot */ "./src/scripts/UrenaRoofingChatbot.js");
/* harmony import */ var _scripts_GafBadge__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./scripts/GafBadge */ "./src/scripts/GafBadge.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__);







// 👇 Importamos el chatbot


// 👇 Importamos el badge de GAF


const person1 = new _scripts_Person__WEBPACK_IMPORTED_MODULE_0__["default"]("Brad");
if (document.querySelector("#render-react-example-here")) {
  const root = react_dom_client__WEBPACK_IMPORTED_MODULE_5___default().createRoot(document.querySelector("#render-react-example-here"));
  root.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_scripts_ExampleReactComponent__WEBPACK_IMPORTED_MODULE_1__["default"], {}));
}
document.addEventListener("DOMContentLoaded", () => {
  ;(0,_scripts_navbar__WEBPACK_IMPORTED_MODULE_2__.initNavbar)();
  (0,_scripts_footer__WEBPACK_IMPORTED_MODULE_3__.initFooter)();

  // 👇 Renderizamos el chatbot en todo el sitio
  let chatbotContainer = document.getElementById("urenas-chatbot");
  if (!chatbotContainer) {
    chatbotContainer = document.createElement("div");
    chatbotContainer.id = "urenas-chatbot";
    document.body.appendChild(chatbotContainer);
  }
  const chatbotRoot = react_dom_client__WEBPACK_IMPORTED_MODULE_5___default().createRoot(chatbotContainer);
  chatbotRoot.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_scripts_UrenaRoofingChatbot__WEBPACK_IMPORTED_MODULE_6__["default"], {}));

  // 👇 Renderizamos el badge de GAF en todo el sitio
  let gafBadgeContainer = document.getElementById("urena-gaf-badge");
  if (!gafBadgeContainer) {
    gafBadgeContainer = document.createElement("div");
    gafBadgeContainer.id = "urena-gaf-badge";
    document.body.appendChild(gafBadgeContainer);
  }
  const gafBadgeRoot = react_dom_client__WEBPACK_IMPORTED_MODULE_5___default().createRoot(gafBadgeContainer);
  gafBadgeRoot.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_scripts_GafBadge__WEBPACK_IMPORTED_MODULE_7__["default"], {}));
});
})();

/******/ })()
;
//# sourceMappingURL=index.js.map