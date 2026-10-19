<?php
/**
 * Template Name: Terms of Service Page
 *
 * Ureña Roofing Contractor LLC — Terms of Service
 * Navbar y footer vienen de header.php / footer.php.
 *
 * NOTA: texto estándar/genérico. No reemplaza asesoría legal — recomendado
 * que un abogado lo revise antes de publicar.
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
      <h1 class="ur-fade-in-0 mt-4 text-3xl font-black uppercase leading-[1.05] tracking-[-0.01em] md:text-5xl">Terms of Service</h1>
      <p class="ur-fade-in-0 mt-4 text-sm text-white/65">Last updated: <?php echo esc_html($updated); ?></p>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- CONTENT                                                       -->
  <!-- ============================================================ -->
  <section class="relative py-16 lg:py-20">
    <div class="ur-reveal-up mx-auto max-w-3xl px-4">

      <p class="ur-legal-lead">
        These Terms of Service ("Terms") govern your use of this website, operated by <span data-en="Urena Roofing Contractor LLC" data-es="Ureña Roofing Contractor LLC" data-vi="Urena Roofing Contractor LLC">Urena Roofing
        Contractor LLC</span> ("<span data-en="Urena Roofing" data-es="Ureña Roofing" data-vi="Urena Roofing">Urena Roofing</span>," "we," "us," or "our"). By using this website, you agree to
        these Terms.
      </p>

      <h2>1. Use of This Website</h2>
      <p>
        This website is provided for informational purposes — to share information about our
        roofing services, service areas, and to let you request a free estimate. You agree to use
        this website only for lawful purposes and not to submit false or misleading information
        through our forms.
      </p>

      <h2>2. Not a Contract for Services</h2>
      <p>
        Information on this website, including pricing ranges, service descriptions, and estimate
        requests, does not constitute a binding contract. A roofing project begins only once both
        parties sign a written agreement outlining scope, materials, pricing, and timeline.
      </p>

      <h2>3. Free Estimates &amp; Inspections</h2>
      <p>
        Free estimates and inspections offered through this website are provided at our discretion
        and are subject to scheduling availability. Submitting a request does not guarantee
        acceptance of a project.
      </p>

      <h2>4. Texas Roofing Law (HB2102) Compliance</h2>
      <p>
        <span data-en="Urena Roofing Contractor" data-es="Ureña Roofing Contractor" data-vi="Urena Roofing Contractor">Urena Roofing Contractor</span> operates in full compliance with Texas House Bill 2102. We do not,
        and will not, offer to waive, pay, or rebate any portion of a homeowner's insurance
        deductible. Any representation on this website should be understood in that context.
      </p>

      <h2>5. Intellectual Property</h2>
      <p>
        The content on this website — including text, photos, graphics, and logos — is owned by
        <span data-en="Urena Roofing Contractor LLC" data-es="Ureña Roofing Contractor LLC" data-vi="Urena Roofing Contractor LLC">Urena Roofing Contractor LLC</span> or its licensors and is protected by applicable intellectual
        property laws. You may not reproduce or reuse this content without our written permission.
      </p>

      <h2>6. Third-Party Links &amp; Services</h2>
      <p>
        This website may link to or embed third-party services, such as Google Maps or a Google
        Business Profile review feed. We are not responsible for the content, accuracy, or privacy
        practices of third-party websites or services.
      </p>

      <h2>7. Disclaimer of Warranties</h2>
      <p>
        This website is provided "as is," without warranties of any kind, express or implied,
        including but not limited to accuracy, availability, or fitness for a particular purpose.
        Actual roofing services are covered separately by their own written warranty, provided at
        the time of contract.
      </p>

      <h2>8. Limitation of Liability</h2>
      <p>
        To the fullest extent permitted by law, <span data-en="Urena Roofing Contractor LLC" data-es="Ureña Roofing Contractor LLC" data-vi="Urena Roofing Contractor LLC">Urena Roofing Contractor LLC</span> will not be liable for
        any indirect, incidental, or consequential damages arising from your use of this website.
      </p>

      <h2>9. Governing Law</h2>
      <p>These Terms are governed by the laws of the State of Texas, without regard to conflict-of-law principles.</p>

      <h2>10. Changes to These Terms</h2>
      <p>We may update these Terms from time to time. The "Last updated" date above reflects the most recent changes.</p>

      <h2>11. Contact Us</h2>
      <p>Questions about these Terms can be directed to:</p>
      <ul class="ur-legal-contact">
        <li><span data-en="Urena Roofing Contractor LLC" data-es="Ureña Roofing Contractor LLC" data-vi="Urena Roofing Contractor LLC">Urena Roofing Contractor LLC</span></li>
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