<?php
/**
 * Template Name: Privacy Policy Page
 *
 * Ureña Roofing Contractor LLC — Privacy Policy
 * Navbar y footer vienen de header.php / footer.php.
 *
 * NOTA: texto estándar/genérico adaptado a lo que el sitio realmente recolecta
 * (formulario de contacto, cookie de idioma, EmailJS, reCAPTCHA, Google Maps).
 * No reemplaza asesoría legal — recomendado que un abogado lo revise antes de publicar.
 */

get_header(); ?>

<main class="ur-legal bg-white text-[#14131F] overflow-hidden">

  <?php
    $updated = 'Pending — to be confirmed before launch';
  ?>

  <!-- ============================================================ -->
  <!-- HERO                                                          -->
  <!-- ============================================================ -->
  <section class="ur-legal-hero relative isolate overflow-hidden py-16 text-white lg:py-20">
    <div class="ur-legal-hero__texture" aria-hidden="true"></div>
    <div class="relative mx-auto max-w-3xl px-4 text-center">
      <p class="ur-eyebrow ur-eyebrow--light ur-fade-in-0">Legal</p>
      <h1 class="ur-fade-in-0 mt-4 text-3xl font-black uppercase leading-[1.05] tracking-[-0.01em] md:text-5xl">Privacy Policy</h1>
      <p class="ur-fade-in-0 mt-4 text-sm text-white/65">Last updated: <?php echo esc_html($updated); ?></p>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- CONTENT                                                       -->
  <!-- ============================================================ -->
  <section class="relative py-16 lg:py-20">
    <div class="ur-reveal-up mx-auto max-w-3xl px-4">

      <p class="ur-legal-lead">
        <span data-en="Urena Roofing Contractor LLC" data-es="Ureña Roofing Contractor LLC">Urena Roofing Contractor LLC</span> ("<span data-en="Urena Roofing" data-es="Ureña Roofing">Urena Roofing</span>," "we," "us," or "our") respects your privacy.
        This Privacy Policy explains what information we collect through this website, how we use it,
        and the choices you have.
      </p>

      <h2>1. Information We Collect</h2>
      <p>When you use our free estimate or contact form, we collect the information you provide directly, which may include:</p>
      <ul>
        <li>Full name</li>
        <li>Phone number</li>
        <li>Email address</li>
        <li>Property ZIP code or city</li>
        <li>Service needed and any message you include</li>
      </ul>
      <p>We do not require you to create an account, and we do not knowingly collect payment information through this website.</p>

      <h2>2. How We Use Your Information</h2>
      <p>We use the information you submit to:</p>
      <ul>
        <li>Respond to your request for a free estimate or general inquiry</li>
        <li>Schedule inspections, follow up on projects, and provide customer service</li>
        <li>Improve our services and this website</li>
      </ul>
      <p>We do not sell your personal information to third parties.</p>

      <h2>3. Cookies</h2>
      <p>
        This site uses a small number of cookies. In particular, we use a cookie
        (<code>ur_lang</code>) to remember your preferred language (English or Spanish) between
        visits. This cookie does not identify you personally.
      </p>

      <h2>4. Third-Party Services</h2>
      <p>This website relies on a small number of third-party services to operate, each with their own privacy practices:</p>
      <ul>
        <li><strong>EmailJS</strong> — delivers the contact/estimate form submissions to our team by email.</li>
        <li><strong>Google reCAPTCHA</strong> — helps protect our forms from spam and abuse. Use of reCAPTCHA is subject to the <a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">Google Privacy Policy</a> and <a href="https://policies.google.com/terms" target="_blank" rel="noopener noreferrer">Google Terms of Service</a>.</li>
        <li><strong>Google Maps</strong> — used to display our office location and service area maps.</li>
        <li><strong>Google Business Profile reviews</strong> — used to display customer reviews on this site.</li>
      </ul>
      <p>We do not control how these third parties process data and encourage you to review their respective privacy policies.</p>

      <h2>5. How We Share Information</h2>
      <p>
        We do not share your personal information with third parties except: (a) with service
        providers who help us operate this website and respond to your requests (such as those
        listed above), (b) if required by law, or (c) with your consent.
      </p>

      <h2>6. Data Security</h2>
      <p>
        We take reasonable measures to protect the information submitted through this website.
        However, no method of transmission over the internet is completely secure, and we cannot
        guarantee absolute security.
      </p>

      <h2>7. Your Choices</h2>
      <p>
        You may contact us at any time to request that we correct or delete personal information
        you have submitted to us. You can also disable cookies through your browser settings, though
        some features of this site (such as the language toggle) may not function properly as a result.
      </p>

      <h2>8. Children's Privacy</h2>
      <p>This website is not directed to children under 13, and we do not knowingly collect information from children.</p>

      <h2>9. Changes to This Policy</h2>
      <p>We may update this Privacy Policy from time to time. The "Last updated" date above reflects the most recent changes.</p>

      <h2>10. Contact Us</h2>
      <p>If you have questions about this Privacy Policy, contact us:</p>
      <ul class="ur-legal-contact">
        <li><span data-en="Urena Roofing Contractor LLC" data-es="Ureña Roofing Contractor LLC">Urena Roofing Contractor LLC</span></li>
        <li>3648 Cypress Creek Pkwy Ste 225, Houston, TX 77068, United States</li>
        <li>Phone: <a href="tel:+18327392842">(832) 739-2842</a> / <a href="tel:+13464046431">(346) 404-6431</a></li>
        <li>Email: <a href="mailto:info@urenaroofing.com">info@urenaroofing.com</a></li>
      </ul>

      <div class="ur-legal-note">
        This page is a general template and does not constitute legal advice. We recommend having
        it reviewed by a qualified attorney before publishing.
      </div>

    </div>
  </section>

</main>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@600;700;800;900&family=Public+Sans:wght@400;500;600;700;800&family=IBM+Plex+Mono:wght@500;600&display=swap');

  .ur-legal {
    --ur-navy:#12103A; --ur-navy-2:#221D5C; --ur-gold:#F6BE15; --ur-gold-deep:#C9910A;
    --ur-mist:#EEF1F5; --ur-ink:#14131F; --ur-slate:#5B5F6B; --ur-line: rgba(20,19,31,.1);
    --ur-radius:10px; --ur-radius-sm:6px;
    font-family:'Public Sans','Segoe UI',Arial,sans-serif;
  }
  .ur-legal h1,.ur-legal h2{ font-family:'Big Shoulders Display','Arial Narrow',sans-serif; }
  .ur-legal a{ color:var(--ur-navy); text-decoration:underline; text-underline-offset:2px; }
  .ur-legal a:hover{ color:var(--ur-gold-deep); }
  .ur-legal a:focus-visible{ outline:2px solid var(--ur-gold-deep); outline-offset:2px; }

  .ur-eyebrow{ font-family:'IBM Plex Mono',monospace; font-size:.72rem; font-weight:600; letter-spacing:.18em; text-transform:uppercase; color:var(--ur-gold-deep); }
  .ur-eyebrow--light{ color:var(--ur-gold); }

  .ur-legal-hero{ background:radial-gradient(120% 100% at 50% 0%, var(--ur-navy-2) 0%, var(--ur-navy) 65%); }
  .ur-legal-hero__texture{
    position:absolute; inset:0; pointer-events:none; opacity:.5;
    background-image:
      linear-gradient(rgba(255,255,255,.05) 1px, transparent 1px),
      linear-gradient(90deg, rgba(255,255,255,.05) 1px, transparent 1px);
    background-size: 38px 38px;
    mask-image: radial-gradient(ellipse 75% 90% at 50% 20%, black 0%, transparent 75%);
  }
  .ur-fade-in-0{ opacity:0; transform:translateY(14px); animation:urFadeUp .8s cubic-bezier(.16,1,.3,1) forwards; }
  @keyframes urFadeUp{ to{ opacity:1; transform:translateY(0); } }

  /* ---- Cuerpo legal — tipografía simple, legible, animación mínima (contenido serio) ---- */
  .ur-legal-lead{ font-size:1.05rem; line-height:1.8; color:var(--ur-ink); }
  .ur-legal h2{
    margin-top:2.5rem; margin-bottom:.9rem; font-size:1.4rem; font-weight:800; text-transform:uppercase;
    letter-spacing:-0.005em; color:var(--ur-navy); padding-bottom:.6rem; border-bottom:1px solid var(--ur-line);
  }
  .ur-legal p{ margin-top:.9rem; font-size:.98rem; line-height:1.8; color:var(--ur-slate); }
  .ur-legal ul{ margin-top:.9rem; padding-left:1.3rem; list-style:disc; color:var(--ur-slate); }
  .ur-legal ul li{ margin-top:.5rem; font-size:.98rem; line-height:1.7; }
  .ur-legal code{ background:var(--ur-mist); padding:.15rem .4rem; border-radius:4px; font-family:'IBM Plex Mono',monospace; font-size:.85em; color:var(--ur-navy); }
  .ur-legal-contact{ list-style:none !important; padding-left:0 !important; }
  .ur-legal-contact li{ font-weight:600; color:var(--ur-navy); }

  .ur-legal-note{
    margin-top:3rem; padding:1.2rem 1.4rem; background:var(--ur-mist); border-left:3px solid var(--ur-gold-deep);
    font-size:.85rem; line-height:1.7; color:var(--ur-slate); border-radius:0 var(--ur-radius-sm) var(--ur-radius-sm) 0;
  }

  .ur-reveal-up{ opacity:0; transform:translateY(24px); transition:opacity .8s cubic-bezier(.16,1,.3,1), transform .8s cubic-bezier(.16,1,.3,1); }
  .ur-reveal-up.is-visible{ opacity:1; transform:translate(0,0); }

  @media (prefers-reduced-motion: reduce){
    .ur-fade-in-0,.ur-reveal-up{ opacity:1!important; transform:none!important; transition:none!important; animation:none!important; }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    try {
      const items = document.querySelectorAll(".ur-reveal-up");
      const obs = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) { entry.target.classList.add("is-visible"); obs.unobserve(entry.target); }
        });
      }, { threshold: 0.1 });
      items.forEach((item) => obs.observe(item));
    } catch (err) { console.error("ur-legal reveal init failed:", err); }
  });
</script>

<?php get_footer(); ?>