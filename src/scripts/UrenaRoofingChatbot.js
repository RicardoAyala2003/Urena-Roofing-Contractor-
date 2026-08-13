import React, { useState, useRef, useEffect, useMemo } from "react";

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
const BotIcon = ({ className }) => (
  <svg className={className} viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.7" strokeLinecap="round" strokeLinejoin="round">
    <path d="M12 3C8.134 3 5 6.134 5 10v2.2c0 .53-.21 1.04-.586 1.414L3 15h18l-1.414-1.386A2 2 0 0 1 19 12.2V10c0-3.866-3.134-7-7-7Z" />
    <path d="M9 18c.4 1.2 1.5 2 3 2s2.6-.8 3-2" />
    <circle cx="9.25" cy="10.25" r="1" fill="currentColor" />
    <circle cx="14.75" cy="10.25" r="1" fill="currentColor" />
  </svg>
);

const CloseIcon = ({ className }) => (
  <svg className={className} viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.9" strokeLinecap="round">
    <path d="M6 6L18 18" />
    <path d="M18 6L6 18" />
  </svg>
);

const SendIcon = ({ className }) => (
  <svg className={className} viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.8" strokeLinecap="round" strokeLinejoin="round">
    <path d="M21 3L10 14" />
    <path d="M21 3L14 21L10 14L3 10L21 3Z" />
  </svg>
);

const PhoneIcon = ({ className }) => (
  <svg className={className} viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.7" strokeLinecap="round" strokeLinejoin="round">
    <path d="M21 16.2V19a2 2 0 0 1-2.18 2A19.8 19.8 0 0 1 3 5.18 2 2 0 0 1 5 3h2.8a2 2 0 0 1 2 1.72l.38 2.66a2 2 0 0 1-.58 1.72l-1.2 1.2a16 16 0 0 0 5.4 5.4l1.2-1.2a2 2 0 0 1 1.72-.58l2.66.38A2 2 0 0 1 21 16.2Z" />
  </svg>
);

// ========== FUNCIONES DEL BOT ==========
function createBotMessage(text, links = []) {
  return { id: Date.now() + Math.random(), text, sender: "bot", timestamp: new Date(), links };
}

function getBotResponse(input) {
  const lower = input.toLowerCase();

  // Residential Roof Replacement
  if (lower.includes("residential") || lower.includes("roof replacement") || lower.includes("new roof") || lower.includes("re-roof")) {
    return createBotMessage(
      "Residential roof replacement is one of the biggest investments in your home. Urena Roofing handles full tear-off and replacement using premium, storm-resistant materials. We provide complete before/after photo documentation and written warranties on materials and workmanship.",
      [{ label: "Learn More", href: `${SERVICES_LINK}/residential-roof-replacement` }, { label: "Get Free Estimate", href: ESTIMATE_LINK }]
    );
  }

  // Storm & Hail Damage
  if (lower.includes("storm") || lower.includes("hail") || lower.includes("hurricane") || lower.includes("wind") || lower.includes("damage") || lower.includes("insurance claim") || lower.includes("emergency")) {
    return createBotMessage(
      "Storm and hail damage repair is our specialty. Houston's storms don't wait — and neither do we. We provide emergency roof damage assessment, full documentation for insurance claims, and HB2102-compliant processes that protect your deductible, your rights, and your home.",
      [{ label: "Call Now", href: PHONE_LINK }, { label: "Get Free Estimate", href: ESTIMATE_LINK }]
    );
  }

  // Roof Maintenance & Inspections
  if (lower.includes("maintenance") || lower.includes("inspection") || lower.includes("preventive") || lower.includes("preventative") || lower.includes("check") || lower.includes("maintain")) {
    return createBotMessage(
      "Preventive care is the best way to extend your roof's life. We offer scheduled annual or seasonal inspections with detailed photo reports after every visit, plus minor repair and sealing services. Perfect for homeowners and HOAs alike.",
      [{ label: "Learn More", href: `${SERVICES_LINK}/roof-maintenance-inspections` }, { label: "Get Free Estimate", href: ESTIMATE_LINK }]
    );
  }

  // Commercial & Flat Roofing
  if (lower.includes("commercial") || lower.includes("flat roof") || lower.includes("business") || lower.includes("office") || lower.includes("retail") || lower.includes("low-slope")) {
    return createBotMessage(
      "Commercial and flat roofing requires specialized expertise. We provide low-disruption, reliable roofing solutions for businesses, offices, and flat-roof properties with commercial-grade materials built for durability. We coordinate scheduling around your business operations.",
      [{ label: "Learn More", href: `${SERVICES_LINK}/commercial-flat-roofing` }, { label: "Get Free Estimate", href: ESTIMATE_LINK }]
    );
  }

  // HOA Roofing Programs
  if (lower.includes("hoa") || lower.includes("community") || lower.includes("homeowner association") || lower.includes("board") || lower.includes("maintenance contract")) {
    return createBotMessage(
      "We offer scheduled inspections, clear reporting, and dependable service built for communities of 50 to 300+ homes. Annual maintenance contracts include photo-documented reporting for HOA boards and priority response for storm-related claims.",
      [{ label: "Learn More", href: `${SERVICES_LINK}/hoa-roofing-programs` }, { label: "Get Free Estimate", href: ESTIMATE_LINK }]
    );
  }

  // HB2102 / Legal
  if (lower.includes("hb2102") || lower.includes("hb 2102") || lower.includes("deductible") || lower.includes("legal") || lower.includes("illegal") || lower.includes("compliance") || lower.includes("rights") || lower.includes("texas law")) {
    return createBotMessage(
      "Texas law (HB2102) requires homeowners to pay their own insurance deductible on roofing claims — and it's illegal for a contractor to offer to waive or 'forgive' that deductible. Urena Roofing operates in full compliance with HB2102, protecting your roof, your budget, and your legal standing.",
      [{ label: "Learn More About HB2102", href: ABOUT_LINK }, { label: "Get Free Estimate", href: ESTIMATE_LINK }]
    );
  }

  // Licenses & Insurance
  if (lower.includes("licensed") || lower.includes("insured") || lower.includes("bonded") || lower.includes("license") || lower.includes("insurance") || lower.includes("workers comp") || lower.includes("liability")) {
    return createBotMessage(
      "Urena Roofing Contractor is fully licensed and insured. We operate with a General Cleaning License, full Liability Insurance, and Workers' Compensation coverage — so every project is protected, start to finish. We're also fully HB2102 compliant.",
      [{ label: "About Us", href: ABOUT_LINK }, { label: "Get Free Estimate", href: ESTIMATE_LINK }]
    );
  }

  // Service Areas
  if (lower.includes("areas") || lower.includes("service area") || lower.includes("location") || lower.includes("locations") || lower.includes("bellaire") || lower.includes("sugar land") || lower.includes("katy") || lower.includes("cypress") || lower.includes("memorial") || lower.includes("heights") || lower.includes("clear lake") || lower.includes("fulshear") || lower.includes("richmond") || lower.includes("west university") || lower.includes("spring") || lower.includes("klein")) {
    return createBotMessage(
      "We proudly serve homeowners, HOAs, and businesses across the Greater Houston area — including Bellaire, Houston Heights, Memorial, Sugar Land, Clear Lake, Katy, Cypress, Fulshear, Richmond, West University, Spring, and Klein. Don't see your area? We probably still cover it — just ask!",
      [{ label: "View All Service Areas", href: SERVICE_AREAS_LINK }, { label: "Download Brochure", href: BROCHURE_LINK, download: true }, { label: "Get Free Estimate", href: ESTIMATE_LINK }]
    );
  }

  // Estimate / Quote
  if (lower.includes("estimate") || lower.includes("quote") || lower.includes("consultation") || lower.includes("free estimate") || lower.includes("cost") || lower.includes("price") || lower.includes("budget")) {
    return createBotMessage(
      "You can request a free estimate through our contact page. Whether it's storm damage, a full replacement, or a maintenance plan for your HOA — our team is ready to help. We provide clear written proposals with scope, timeline, and transparent pricing.",
      [{ label: "Get Free Estimate", href: ESTIMATE_LINK }, { label: "Call Now", href: PHONE_LINK }]
    );
  }

  // Contact / Phone / Email
  if (lower.includes("contact") || lower.includes("phone") || lower.includes("email") || lower.includes("call") || lower.includes("reach")) {
    return createBotMessage(
      `You can reach us by phone at ${PHONE_DISPLAY} or (346) 404-6431, email us at ${EMAIL_DISPLAY}, or submit a request through our contact page. Our office is located at 3648 Cypress Creek Pkwy Ste 225, Houston, TX 77068.`,
      [{ label: "Contact Us", href: ESTIMATE_LINK }, { label: "Call Now", href: PHONE_LINK }]
    );
  }

  // Gallery / Before & After
  if (lower.includes("gallery") || lower.includes("before") || lower.includes("after") || lower.includes("projects") || lower.includes("work") || lower.includes("photos") || lower.includes("pictures") || lower.includes("real roofs")) {
    return createBotMessage(
      "You can see real projects and real results — our before and after transformations show exactly what we deliver. We provide full visual proof of every job with photo documentation.",
      [{ label: "View Our Work", href: "/gallery" }, { label: "Get Free Estimate", href: ESTIMATE_LINK }]
    );
  }

  // Testimonials / Reviews
  if (lower.includes("testimonial") || lower.includes("review") || lower.includes("client") || lower.includes("what clients say") || lower.includes("feedback")) {
    return createBotMessage(
      "We're proud of the trust our clients place in us. While we're currently gathering our latest reviews, you can always reach out directly to hear about our work from homeowners and HOA boards across Houston.",
      [{ label: "Get Free Estimate", href: ESTIMATE_LINK }, { label: "Call Now", href: PHONE_LINK }]
    );
  }

  // About / Company
  if (lower.includes("about") || lower.includes("company") || lower.includes("founded") || lower.includes("experience") || lower.includes("background")) {
    return createBotMessage(
      "Urena Roofing Contractor LLC is a licensed, insured roofing company proudly serving Houston homeowners, businesses, and communities. We're built on trust, backed by experience — founded to bring honest, professional roofing services to the Houston community, one roof at a time.",
      [{ label: "Learn More About Us", href: ABOUT_LINK }, { label: "Get Free Estimate", href: ESTIMATE_LINK }]
    );
  }

  // Default
  return createBotMessage(
    "Hi — I'm the Urena Roofing assistant. I can help with residential roof replacement, storm & hail damage repair, roof maintenance & inspections, commercial & flat roofing, HOA programs, HB2102 compliance, service areas, licensing, and free estimates.",
    [{ label: "Get Free Estimate", href: ESTIMATE_LINK }, { label: "Call Now", href: PHONE_LINK }]
  );
}

// ========== COMPONENTE PRINCIPAL ==========
function UrenaRoofingChatbot() {
  const [isOpen, setIsOpen] = useState(false);
  const [inputMessage, setInputMessage] = useState("");
  const [messages, setMessages] = useState([]);
  const [isTyping, setIsTyping] = useState(false);
  const messagesEndRef = useRef(null);

  const quickActions = useMemo(() => [
    { text: "Residential Roofing", icon: "🏠" },
    { text: "Storm & Hail Damage", icon: "⛈️" },
    { text: "Free Estimate", icon: "📋" },
    { text: "HB2102 Compliance", icon: "⚖️" },
    { text: "Service Areas", icon: "📍" },
    { text: "HOA Programs", icon: "🏘️" },
  ], []);

  // Mensaje de bienvenida al abrir
  useEffect(() => {
    if (messages.length === 0) {
      setMessages([{
        id: 1,
        text: "Hi, I'm the Urena Roofing assistant. I can help with residential roofing, storm damage, maintenance, HOA programs, HB2102 compliance, service areas, and requesting a free estimate.",
        sender: "bot",
        timestamp: new Date(),
        links: [{ label: "Get Free Estimate", href: ESTIMATE_LINK }, { label: "Call Now", href: PHONE_LINK }]
      }]);
    }
  }, []);

  useEffect(() => {
    messagesEndRef.current?.scrollIntoView({ behavior: "smooth" });
  }, [messages, isTyping]);

  const handleSend = (e) => {
    e.preventDefault();
    if (!inputMessage.trim()) return;
    const userMsg = { id: Date.now(), text: inputMessage, sender: "user", timestamp: new Date() };
    setMessages(prev => [...prev, userMsg]);
    setInputMessage("");
    setIsTyping(true);
    setTimeout(() => {
      const botResponse = getBotResponse(inputMessage);
      setMessages(prev => [...prev, botResponse]);
      setIsTyping(false);
    }, 700);
  };

  const handleQuickAction = (text) => {
    setInputMessage(text);
    // Si quieres que envíe automáticamente al hacer clic, descomenta:
    // setTimeout(() => handleSend({ preventDefault: () => {} }), 300);
  };

  return (
    <div className="fixed bottom-4 right-4 z-[9999] sm:bottom-5 sm:right-5">
      {isOpen && (
        <div className="mb-3 flex h-[31rem] w-[calc(100vw-1.25rem)] max-w-[22rem] flex-col overflow-hidden rounded-2xl bg-white shadow-2xl sm:h-[33rem]">
          {/* ===== HEADER ===== */}
          <div className="bg-[#192F44] px-4 py-3 text-white">
            <div className="flex items-center justify-between">
              <div className="flex items-center gap-3">
                <div className="flex h-10 w-10 items-center justify-center rounded-full bg-white/10">
                  <BotIcon className="h-5 w-5" />
                </div>
                <div>
                  <p className="text-[10px] font-bold uppercase tracking-widest text-[#F5A623]">Urena Roofing</p>
                  <p className="text-sm font-bold">Urena Roofing Assistant</p>
                  <p className="text-[10px] font-semibold uppercase tracking-wider text-[#CFE0DA]">Licensed & Insured</p>
                </div>
              </div>
              <button onClick={() => setIsOpen(false)} className="rounded-full p-1 hover:bg-white/10">
                <CloseIcon className="h-5 w-5" />
              </button>
            </div>
          </div>

          {/* ===== CUERPO ===== */}
          <div className="flex-1 overflow-y-auto bg-[#f8f7f2] p-4">
            <div className="space-y-3">
              {messages.map((msg) => (
                <div key={msg.id} className={`flex ${msg.sender === "user" ? "justify-end" : "justify-start"}`}>
                  <div className={`max-w-[85%] rounded-2xl px-3 py-2 text-sm ${msg.sender === "user" ? "bg-[#192F44] text-white" : "bg-white text-[#192F44] shadow-sm"}`}>
                    <p>{msg.text}</p>
                    {msg.links && msg.links.length > 0 && (
                      <div className="mt-2 flex flex-wrap gap-1.5">
                        {msg.links.map((link, i) => (
                          <a
                            key={i}
                            href={link.href}
                            download={link.download || undefined}
                            className="rounded-full border border-[#192F44]/10 bg-[#f0efe8] px-2 py-0.5 text-[10px] font-bold text-[#236476] hover:bg-[#F5A623] hover:text-white"
                          >
                            {link.label}
                          </a>
                        ))}
                      </div>
                    )}
                  </div>
                </div>
              ))}
              {isTyping && (
                <div className="flex justify-start">
                  <div className="rounded-2xl bg-white px-3 py-2 shadow-sm">
                    <span className="animate-pulse">...</span>
                  </div>
                </div>
              )}
              <div ref={messagesEndRef} />
            </div>
          </div>

          {/* ===== QUICK ACTIONS ===== */}
          <div className="border-t border-[#192F44]/10 bg-white px-4 py-2">
            <p className="text-[10px] font-bold uppercase tracking-wider text-[#236476]">Quick help</p>
            <div className="mt-1 flex flex-wrap gap-1.5">
              {quickActions.map((action) => (
                <button
                  key={action.text}
                  onClick={() => handleQuickAction(action.text)}
                  className="rounded-full border border-[#192F44]/10 bg-[#f8f7f2] px-2.5 py-1 text-[10px] font-bold text-[#192F44] hover:bg-[#F5A623] hover:text-white"
                >
                  <span className="mr-1">{action.icon}</span>{action.text}
                </button>
              ))}
            </div>
          </div>

          {/* ===== INPUT Y FOOTER ===== */}
          <div className="border-t border-[#192F44]/10 bg-white p-3">
            <form onSubmit={handleSend} className="flex items-center gap-2">
              <input
                type="text"
                value={inputMessage}
                onChange={(e) => setInputMessage(e.target.value)}
                placeholder="Ask about roofing..."
                className="flex-1 rounded-full border border-[#192F44]/20 bg-[#f8f7f2] px-3 py-2 text-sm outline-none focus:border-[#F5A623]"
              />
              <button
                type="submit"
                disabled={!inputMessage.trim()}
                className="rounded-full bg-[#F5A623] p-2 text-white shadow-md hover:bg-[#d4941f] disabled:opacity-50"
              >
                <SendIcon className="h-4 w-4" />
              </button>
            </form>
            <div className="mt-2 flex items-center justify-between text-[10px] text-[#192F44]/60">
              <a href={PHONE_LINK} className="flex items-center gap-1 hover:text-[#236476]">
                <PhoneIcon className="h-3 w-3" /> {PHONE_DISPLAY}
              </a>
              <a href={EMAIL_LINK} className="hover:text-[#236476]">{EMAIL_DISPLAY}</a>
            </div>
          </div>
        </div>
      )}

      {/* ===== BOTÓN FLOTANTE (minimizado) - con badge AMARILLO ===== */}
      {!isOpen ? (
        <button
          onClick={() => setIsOpen(true)}
          className="group relative flex h-14 w-14 items-center justify-center rounded-full border-2 border-[#F5A623] bg-[#192F44] text-white shadow-[0_8px_30px_rgba(25,47,68,0.35)] transition-all hover:scale-105 hover:shadow-[0_12px_40px_rgba(25,47,68,0.45)]"
          aria-label="Open chat"
        >
          {/* Anillo pulsante */}
          <span className="absolute inset-0 rounded-full border-2 border-[#F5A623] animate-ping opacity-75"></span>
          <span className="absolute inset-0 rounded-full border-2 border-[#F5A623] opacity-50"></span>
          {/* Icono de robot */}
          <BotIcon className="relative h-6 w-6" />
          {/* Badge de "online" - ahora AMARILLO */}
          <span className="absolute -right-0.5 -top-0.5 flex h-3.5 w-3.5">
            <span className="absolute inline-flex h-full w-full animate-ping rounded-full bg-[#F5A623] opacity-75"></span>
            <span className="relative inline-flex h-3.5 w-3.5 rounded-full bg-[#F5A623]"></span>
          </span>
        </button>
      ) : (
        <button
          onClick={() => setIsOpen(false)}
          className="flex h-14 w-14 items-center justify-center rounded-full bg-[#192F44] text-white shadow-lg transition-all hover:scale-105"
        >
          <CloseIcon className="h-6 w-6" />
        </button>
      )}
    </div>
  );
}

export default UrenaRoofingChatbot;