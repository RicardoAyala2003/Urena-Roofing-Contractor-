<?php
/**
 * Template Name: Services Page
 *
 * Ureña Roofing Contractor LLC — Services (hub)
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="ur-svcs bg-white text-[#14131F] overflow-hidden">

  <?php
    // ------------------------------------------------------------
    // ASSETS
    // ------------------------------------------------------------
    $img = '/wp-content/uploads/2026/08/';

    // ------------------------------------------------------------
    // ICONOS
    // ------------------------------------------------------------
    $icons = [
      'home'      => '<path d="M4 11 12 4l8 7"/><path d="M6 10v10h12V10"/>',
      'cloud'     => '<path d="M7 18a4 4 0 0 1-1-7.9A5 5 0 0 1 15.9 8 4.5 4.5 0 0 1 17 18z"/><path d="m10 20 1.5-3"/><path d="m14 20 1.5-3"/>',
      'clipboard' => '<rect x="6" y="4" width="12" height="17" rx="2"/><path d="M9 4V3a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1"/><path d="m9 13 2 2 4-4"/>',
      'building'  => '<rect x="5" y="3" width="14" height="18"/><path d="M9 8h1M14 8h1M9 12h1M14 12h1M9 16h1M14 16h1"/>',
      'users'     => '<circle cx="9" cy="8" r="3"/><path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"/><circle cx="17" cy="9" r="2.4"/><path d="M15.5 14a4.6 4.6 0 0 1 5.5 4.5"/>',
      'arrow'     => '<path d="M5 12h14"/><path d="m13 6 6 6-6 6"/>',
    ];
    $icon = function ($name, $extra_class = '') use ($icons) {
      $paths = $icons[$name] ?? '';
      return '<svg class="ur-ic ' . esc_attr($extra_class) . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $paths . '</svg>';
    };

    // ------------------------------------------------------------
    // DATA — copy exacto del brief
    // ------------------------------------------------------------
    $services = [
      [
        'icon'  => 'home',
        'title' => 'Residential Roof Replacement',
        'title_es' => 'Reemplazo de Techo Residencial',
        'copy'  => 'Full roof replacements built to protect your home for decades, using premium, storm-resistant materials.',
        'copy_es' => 'Reemplazos completos de techo, hechos para proteger tu hogar por décadas, usando materiales premium resistentes a tormentas.',
        'image' => $img . 'Copia-de-DJI_20260610190636_0019_D-scaled.jpg',
        'link'  => '/services/residential-roof-replacement',
      ],
      [
        'icon'  => 'cloud',
        'title' => 'Storm & Hail Damage Repair',
        'title_es' => 'Reparación de Daños por Tormenta y Granizo',
        'copy'  => "Fast, insurance-ready repairs after Houston's toughest storms — fully HB2102 compliant.",
        'copy_es' => 'Reparaciones rápidas y listas para el seguro después de las peores tormentas de Houston — en total cumplimiento con HB2102.',
        'image' => $img . 'IMG-20250218-WA0015.jpg',
        'link'  => '/services/storm-hail-damage-repair',
      ],
      [
        'icon'  => 'clipboard',
        'title' => 'Roof Maintenance & Inspections',
        'title_es' => 'Mantenimiento e Inspecciones de Techo',
        'copy'  => 'Preventive care and scheduled inspections that catch small problems before they become costly ones.',
        'copy_es' => 'Cuidado preventivo e inspecciones programadas que detectan problemas pequeños antes de que se vuelvan costosos.',
        'image' => $img . 'Copia-de-DJI_20260610064949_0032_D-scaled.jpg',
        'link'  => '/services/roof-maintenance-inspections',
      ],
      // Temporalmente oculto a pedido del cliente — no borrar, solo descomentar para reactivar.
      // [
      //   'icon'  => 'building',
      //   'title' => 'Commercial & Flat Roofing',
      //   'title_es' => 'Techado Comercial y Plano',
      //   'copy'  => 'Reliable, low-disruption roofing solutions for businesses, offices, and flat-roof properties.',
      //   'copy_es' => 'Soluciones de techado confiables y de bajo impacto para negocios, oficinas y propiedades de techo plano.',
      //   'image' => $img . 'Copia-de-DJI_20260610064620_0008_D-scaled.jpg',
      //   'link'  => '/services/commercial-flat-roofing',
      // ],
      [
        'icon'  => 'users',
        'title' => 'HOA Roofing Maintenance Programs',
        'title_es' => 'Programas de Mantenimiento de Techado para HOA',
        'copy'  => 'Scheduled inspections, documented reporting, and maintenance contracts built for communities of any size.',
        'copy_es' => 'Inspecciones programadas, reportes documentados y contratos de mantenimiento para comunidades de cualquier tamaño.',
        'image' => $img . 'Copia-de-IMG-20250902-WA0046.jpg',
        'link'  => '/services/hoa-roofing-programs',
      ],
    ];
  ?>

  <!-- ============================================================ -->
  <!-- HERO / INTRO                                                  -->
  <!-- ============================================================ -->
  <section class="ur-svcs-hero relative isolate overflow-hidden py-20 text-white lg:py-28">
    <div class="ur-svcs-hero__texture" aria-hidden="true"></div>
    <span class="ur-hud-corner ur-hud-corner--tl" aria-hidden="true"></span>
    <span class="ur-hud-corner ur-hud-corner--br" aria-hidden="true"></span>

    <div class="relative mx-auto max-w-3xl px-4 text-center">
      <p class="ur-eyebrow ur-eyebrow--light ur-fade-in-0"><span data-en="Our Services" data-es="Nuestros Servicios">Our Services</span></p>
      <h1 class="mt-5 text-4xl font-black uppercase leading-[0.98] tracking-[-0.01em] md:text-6xl" data-en="Professional Roofing Services in Houston, TX" data-es="Servicios de Techado Profesionales en Houston, TX">
        <?php
          $hero_words = explode(' ', 'Professional Roofing Services in Houston, TX');
          foreach ($hero_words as $i => $word) : ?>
            <span class="ur-word"><span class="ur-word__inner" style="--i:<?php echo (int) $i; ?>"><?php echo esc_html($word); ?></span></span><?php echo ' '; ?>
          <?php endforeach; ?>
      </h1>
      <p class="ur-fade-in-2 mx-auto mt-6 max-w-2xl text-base leading-7 text-white/78 md:text-lg" data-en="Every project — residential, commercial, or HOA — is handled with the same commitment to quality, documentation, and legal compliance." data-es="Cada proyecto —residencial, comercial o de HOA— se maneja con el mismo compromiso a la calidad, documentación y cumplimiento legal.">
        Every project — residential, commercial, or HOA — is handled with the same commitment to
        quality, documentation, and legal compliance.
      </p>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- SERVICES GRID                                                 -->
  <!-- ============================================================ -->
  <section class="relative bg-white py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <?php foreach ($services as $i => $s) : ?>
          <a href="<?php echo esc_url($s['link']); ?>" class="ur-reveal-stagger ur-svc-card group">
            <div class="ur-svc-card__media relative h-[210px] overflow-hidden">
              <img src="<?php echo esc_url($s['image']); ?>" alt="<?php echo esc_attr($s['title']); ?> — Urena Roofing Contractor" data-en-alt="<?php echo esc_attr($s['title']); ?> — Urena Roofing Contractor" data-es-alt="<?php echo esc_attr($s['title_es']); ?> — Ureña Roofing Contractor" class="h-full w-full object-cover transition duration-700 group-hover:scale-[1.07]" loading="lazy">
              <span class="ur-svc-card__icon"><?php echo $icon($s['icon'], 'h-5 w-5'); ?></span>
            </div>
            <div class="p-6">
              <h3 class="text-lg font-black uppercase tracking-[-0.005em] text-[#12103A]"><span data-en="<?php echo esc_attr($s['title']); ?>" data-es="<?php echo esc_attr($s['title_es']); ?>"><?php echo esc_html($s['title']); ?></span></h3>
              <p class="mt-2 text-[14px] leading-6 text-[#5B5F6B]"><span data-en="<?php echo esc_attr($s['copy']); ?>" data-es="<?php echo esc_attr($s['copy_es']); ?>"><?php echo esc_html($s['copy']); ?></span></p>
              <span class="ur-svc-card__link mt-4 inline-flex items-center gap-1.5 text-xs font-black uppercase tracking-[0.1em] text-[#12103A]">
                <span data-en="Learn More" data-es="Ver Más">Learn More</span> <?php echo $icon('arrow', 'h-3.5 w-3.5'); ?>
              </span>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- CTA DE CIERRE                                                 -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden bg-[#EEF1F5] py-16 text-center">
    <div class="ur-reveal-up mx-auto max-w-xl px-4">
      <p class="text-base leading-7 text-[#5B5F6B]"><span data-en="Not sure which service fits your project?" data-es="¿No sabes qué servicio se ajusta a tu proyecto?">Not sure which service fits your project?</span></p>
      <a href="/contact" class="ur-btn ur-btn-dark ur-magnetic mt-5 inline-flex items-center justify-center gap-2 px-7 py-4 text-sm font-black uppercase tracking-[0.12em] text-white">
        <span data-en="Get a Free Estimate" data-es="Obtén un Estimado Gratis">Get a Free Estimate</span> <?php echo $icon('arrow', 'h-4 w-4'); ?>
      </a>
    </div>
  </section>

</main>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@600;700;800;900&family=Public+Sans:wght@400;500;600;700;800&family=IBM+Plex+Mono:wght@500;600&display=swap');

  .ur-svcs {
    --ur-navy:#12103A; --ur-navy-2:#221D5C; --ur-gold:#F6BE15; --ur-gold-deep:#C9910A;
    --ur-mist:#EEF1F5; --ur-ink:#14131F; --ur-slate:#5B5F6B; --ur-line: rgba(20,19,31,.1);
    --ur-radius:10px; --ur-radius-sm:6px;
    font-family:'Public Sans','Segoe UI',Arial,sans-serif;
  }
  .ur-svcs h1,.ur-svcs h2,.ur-svcs h3{ font-family:'Big Shoulders Display','Arial Narrow',sans-serif; }
  .ur-svcs a:focus-visible,.ur-svcs button:focus-visible{ outline:2px solid var(--ur-gold-deep); outline-offset:3px; }
  .ur-ic{ display:block; }

  .ur-eyebrow{ font-family:'IBM Plex Mono',monospace; font-size:.72rem; font-weight:600; letter-spacing:.18em; text-transform:uppercase; color:var(--ur-gold-deep); }
  .ur-eyebrow--light{ color:var(--ur-gold); }

  /* ---- Hero (compacto, banda navy con textura, sin foto) ---- */
  .ur-svcs-hero{
    background:radial-gradient(120% 100% at 50% 0%, var(--ur-navy-2) 0%, var(--ur-navy) 65%);
    clip-path: polygon(0 0, 100% 0, 100% 94%, 0 100%);
  }
  @media (max-width:768px){ .ur-svcs-hero{ clip-path:none; } }
  .ur-svcs-hero__texture{
    position:absolute; inset:0; pointer-events:none; opacity:.5;
    background-image:
      linear-gradient(rgba(255,255,255,.05) 1px, transparent 1px),
      linear-gradient(90deg, rgba(255,255,255,.05) 1px, transparent 1px);
    background-size: 40px 40px;
    mask-image: radial-gradient(ellipse 70% 90% at 50% 20%, black 0%, transparent 75%);
  }

  .ur-hud-corner{ position:absolute; z-index:10; width:26px; height:26px; border-color:var(--ur-gold); opacity:.9; }
  .ur-hud-corner--tl{ top:20px; left:20px; border-top:2px solid; border-left:2px solid; }
  .ur-hud-corner--br{ bottom:20px; right:20px; border-bottom:2px solid; border-right:2px solid; }

  .ur-word{ display:inline-block; overflow:hidden; vertical-align:top; }
  .ur-word__inner{ display:inline-block; transform:translateY(115%); opacity:0; animation:urWordUp .9s cubic-bezier(.16,1,.3,1) forwards; animation-delay:calc(var(--i) * 70ms + 150ms); }
  @keyframes urWordUp{ to{ transform:translateY(0); opacity:1; } }
  .ur-fade-in-0,.ur-fade-in-2{ opacity:0; transform:translateY(16px); animation:urFadeUp .9s cubic-bezier(.16,1,.3,1) forwards; }
  .ur-fade-in-0{ animation-delay:.05s; } .ur-fade-in-2{ animation-delay:.7s; }
  @keyframes urFadeUp{ to{ opacity:1; transform:translateY(0); } }

  /* ---- Service cards ---- */
  .ur-svc-card{
    display:block; background:#fff; border:1px solid var(--ur-line); border-radius:var(--ur-radius);
    box-shadow:0 10px 26px rgba(18,16,58,.05); text-decoration:none; color:inherit; overflow:hidden;
    transition:box-shadow .3s ease, border-color .3s ease, transform .3s cubic-bezier(.16,1,.3,1);
  }
  .ur-svc-card:hover{ border-color:var(--ur-gold); box-shadow:0 24px 48px rgba(18,16,58,.14); transform:translateY(-4px); }
  .ur-svc-card__icon{
    position:absolute; top:14px; right:14px; display:inline-flex; align-items:center; justify-content:center;
    width:36px; height:36px; background:var(--ur-gold); color:var(--ur-navy); border-radius:var(--ur-radius-sm);
    box-shadow:0 10px 20px rgba(18,16,58,.28);
  }
  .ur-svc-card__link{ transition:gap .25s ease, color .25s ease; }
  .ur-svc-card:hover .ur-svc-card__link{ gap:.55rem; color:var(--ur-gold-deep); }

  /* ---- Buttons ---- */
  .ur-btn{ position:relative; border:1px solid transparent; border-radius:var(--ur-radius-sm); transition:box-shadow .25s ease,background-color .25s ease,color .25s ease; }
  .ur-btn span{ position:relative; z-index:1; }
  .ur-btn-dark{ background:var(--ur-navy); box-shadow:0 16px 34px rgba(18,16,58,.24); }
  .ur-btn-dark:hover{ background:var(--ur-navy-2); }
  .ur-magnetic{ will-change:transform; }

  /* ---- Reveal on scroll ---- */
  .ur-reveal-up,.ur-reveal-stagger{ opacity:0; will-change:opacity,transform; transition:opacity .8s cubic-bezier(.16,1,.3,1),transform .8s cubic-bezier(.16,1,.3,1); }
  .ur-reveal-up{ transform:translateY(30px); } .ur-reveal-stagger{ transform:translateY(24px); }
  .ur-reveal-up.is-visible,.ur-reveal-stagger.is-visible{ opacity:1; transform:translate(0,0); }

  @media (max-width:768px){ .ur-svcs-hero h1{ font-size:2.3rem; } }

  @media (prefers-reduced-motion: reduce){
    .ur-reveal-up,.ur-reveal-stagger,.ur-word__inner,.ur-fade-in-0,.ur-fade-in-2,.ur-btn,.ur-svc-card{
      opacity:1!important; transform:none!important; transition:none!important; animation:none!important;
    }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    try {
      const revealItems = document.querySelectorAll(".ur-reveal-up,.ur-reveal-stagger");
      const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, idx) => {
          if (entry.isIntersecting) {
            const delay = entry.target.classList.contains("ur-reveal-stagger") ? (idx % 6) * 70 : 0;
            setTimeout(() => entry.target.classList.add("is-visible"), delay);
            revealObserver.unobserve(entry.target);
          }
        });
      }, { threshold: 0.15 });
      revealItems.forEach((item) => revealObserver.observe(item));
    } catch (err) { console.error("ur-reveal init failed:", err); }

    try {
      document.querySelectorAll(".ur-magnetic").forEach((btn) => {
        btn.addEventListener("mousemove", (e) => {
          const r = btn.getBoundingClientRect();
          const x = (e.clientX - r.left - r.width / 2) * 0.3;
          const y = (e.clientY - r.top - r.height / 2) * 0.3;
          btn.style.transform = `translate(${x}px, ${y}px)`;
        });
        btn.addEventListener("mouseleave", () => { btn.style.transform = "translate(0,0)"; });
      });
    } catch (err) { console.error("ur-magnetic init failed:", err); }
  });
</script>

<?php get_footer(); ?>