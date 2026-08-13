<?php
/**
 * Template Name: About Page
 *
 * Ureña Roofing Contractor LLC — About
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="ur-about bg-[#EEF1F5] text-[#14131F] overflow-hidden">

  <?php
    // ------------------------------------------------------------
    // ASSETS
    // ------------------------------------------------------------
    $img = '/wp-content/uploads/2026/08/';

    $assets = [
      'hero_bg'    => $img . '369.jpg',
      'team_photo' => $img . 'Copia-de-FOTOS-CON-EL-PRESIDENCIAL-1-scaled.png',
      'story_img'  => $img . 'Copia-de-DJI_20260610190735_0025_D-scaled.jpg',
      'cta_bg'     => $img . 'workers-on-blue.jpg',
    ];

    // ------------------------------------------------------------
    // ICONOS
    // ------------------------------------------------------------
    $icons = [
      'shield'    => '<path d="M12 3 5 6v6c0 5 3 8.5 7 9 4-.5 7-4 7-9V6z"/><path d="m9 12 2 2 4-4"/>',
      'hardhat'   => '<path d="M4 18h16"/><path d="M6 18a6 6 0 0 1 12 0"/><rect x="10" y="4" width="4" height="4" rx="1"/><path d="M12 8v2"/>',
      'file-check'=> '<path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8z"/><path d="M14 3v5h5"/><path d="m9.5 15 1.8 1.8L15 13"/>',
      'plus'      => '<path d="M12 5v14"/><path d="M5 12h14"/>',
      'expand'    => '<path d="M15 3h6v6"/><path d="M9 21H3v-6"/><path d="M21 3l-7 7"/><path d="M3 21l7-7"/>',
      'x'         => '<path d="M18 6 6 18"/><path d="M6 6l12 12"/>',
      'arrow'     => '<path d="M5 12h14"/><path d="m13 6 6 6-6 6"/>',
      'phone'     => '<path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2C9.4 21 3 14.6 3 6a2 2 0 0 1 2-2z"/>',
      'pin'       => '<path d="M12 22s7-6.7 7-12.4A7 7 0 1 0 5 9.6C5 15.3 12 22 12 22z"/><circle cx="12" cy="9.5" r="2.4"/>',
    ];
    $icon = function ($name, $extra_class = '') use ($icons) {
      $paths = $icons[$name] ?? '';
      return '<svg class="ur-ic ' . esc_attr($extra_class) . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $paths . '</svg>';
    };

    // ------------------------------------------------------------
    // DATA
    // ------------------------------------------------------------
    $licenses = [
      ['icon' => 'file-check', 'title' => 'General Cleaning License', 'title_es' => 'Licencia General de Limpieza', 'copy' => 'Registered and current, covering every job we take on.', 'copy_es' => 'Registrada y vigente, cubriendo cada trabajo que realizamos.', 'tilt' => '-3deg', 'ref' => 'GC-01'],
      ['icon' => 'shield',     'title' => 'Liability Insurance',      'title_es' => 'Seguro de Responsabilidad Civil', 'copy' => 'Full coverage protecting your property from start to finish.', 'copy_es' => 'Cobertura completa que protege tu propiedad de principio a fin.', 'tilt' => '2deg', 'ref' => 'LI-02'],
      ['icon' => 'hardhat',    'title' => "Workers' Compensation",    'title_es' => 'Compensación para Trabajadores', 'copy' => 'Every crew member on your roof is covered on the job.', 'copy_es' => 'Cada miembro de nuestro equipo en tu techo está cubierto en el trabajo.', 'tilt' => '-1.5deg', 'ref' => 'WC-03'],
    ];

    $hb2102_faqs = [
      ['q' => 'What is HB2102?', 'q_es' => '¿Qué es HB2102?', 'a' => 'A Texas law that makes it illegal for a roofing contractor to offer to waive, pay, or rebate a homeowner\'s insurance deductible, a practice sometimes used to win jobs quickly, at the homeowner\'s legal risk.', 'a_es' => 'Una ley de Texas que hace ilegal que un contratista de techos ofrezca eximir, pagar o reembolsar el deducible del seguro de un propietario, una práctica a veces usada para ganar trabajos rápidamente, a costa del riesgo legal del propietario.'],
      ['q' => 'Why does this matter to me?', 'q_es' => '¿Por qué esto me importa?', 'a' => 'If a contractor offers to "cover your deductible," they may be breaking the law, and you could be held responsible for insurance fraud alongside them. Working with an HB2102-compliant contractor protects you.', 'a_es' => 'Si un contratista te ofrece "cubrir tu deducible", puede estar violando la ley, y tú podrías ser responsable de fraude de seguro junto con él. Trabajar con un contratista que cumple con HB2102 te protege.'],
      ['q' => 'What is an insurance deductible, exactly?', 'q_es' => '¿Qué es exactamente un deducible de seguro?', 'a' => 'It\'s the amount you\'re required to pay out of pocket on a covered insurance claim before your policy pays the rest. Texas law requires homeowners to pay this themselves on roofing claims.', 'a_es' => 'Es la cantidad que debes pagar de tu bolsillo en un reclamo de seguro cubierto antes de que tu póliza pague el resto. La ley de Texas exige que los propietarios paguen esto ellos mismos en reclamos de techado.'],
      ['q' => 'How do I know if a contractor is HB2102-compliant?', 'q_es' => '¿Cómo sé si un contratista cumple con HB2102?', 'a' => 'A compliant contractor will never offer to waive, absorb, or rebate your deductible. Ask directly, and get every detail of your project and pricing in writing before signing a contract.', 'a_es' => 'Un contratista que cumple con la ley nunca te ofrecerá eximir, absorber o reembolsar tu deducible. Pregunta directamente, y obtén cada detalle de tu proyecto y precio por escrito antes de firmar un contrato.'],
      ['q' => 'What should I do if a contractor offers to cover my deductible?', 'q_es' => '¿Qué debo hacer si un contratista se ofrece a cubrir mi deducible?', 'a' => 'Treat it as a red flag. Choose a licensed, insured contractor that operates in full compliance with Texas law instead.', 'a_es' => 'Tómalo como una señal de alerta. En su lugar, elige un contratista con licencia y seguro que opere en total cumplimiento con la ley de Texas.'],
    ];

    $hero_credentials = [
      ['icon' => 'shield',     'label' => 'Licensed & Insured', 'label_es' => 'Con Licencia y Asegurados'],
      ['icon' => 'file-check', 'label' => 'HB2102 Compliant', 'label_es' => 'Cumple con HB2102'],
      ['icon' => 'pin',        'label' => 'Locally Owned — Houston, TX', 'label_es' => 'Empresa Local — Houston, TX'],
    ];
  ?>

  <!-- ============================================================ -->
  <!-- HERO / INTRO — texto anclado abajo, caras despejadas arriba   -->
  <!-- ============================================================ -->
  <section class="ur-about-hero relative flex min-h-[600px] w-full items-end overflow-hidden lg:min-h-[680px]">
    <img src="<?php echo esc_url($assets['hero_bg']); ?>" alt="The Urena Roofing Contractor team with GAF partners" data-en-alt="The Urena Roofing Contractor team with GAF partners" data-es-alt="The Ureña Roofing Contractor team with GAF partners" class="ur-parallax ur-parallax-bg absolute inset-0 w-full object-cover object-[50%_80%]" data-speed="0.05">
    <div class="ur-about-hero__scrim absolute inset-0"></div>
    <div class="ur-about-hero__vignette absolute inset-0" aria-hidden="true"></div>

    <span class="ur-hud-corner ur-hud-corner--tl ur-hud-corner--xl" aria-hidden="true"></span>
    <span class="ur-hud-corner ur-hud-corner--tr ur-hud-corner--xl" aria-hidden="true"></span>
    <span class="ur-hud-corner ur-hud-corner--bl ur-hud-corner--xl" aria-hidden="true"></span>
    <span class="ur-hud-corner ur-hud-corner--br ur-hud-corner--xl" aria-hidden="true"></span>

    <span class="ur-readout ur-about-hero__badge ur-fade-in-0">
      <span class="ur-readout__dot"></span><span data-en="Urena Roofing team" data-es="Equipo de Ureña Roofing">Urena Roofing team</span>
    </span>

    <div class="relative z-10 mx-auto w-full max-w-6xl px-4 pb-14 lg:pb-20">
      <div class="grid gap-10 lg:grid-cols-[1.1fr_0.9fr] lg:items-end">
        <div class="text-center lg:text-left">
          <p class="ur-eyebrow ur-eyebrow--light ur-fade-in-0" data-en="About Urena Roofing" data-es="Sobre Ureña Roofing">About Urena Roofing</p>
          <h1 class="mt-5 text-4xl font-black uppercase leading-[0.98] tracking-[-0.01em] text-white md:text-6xl" data-en="Built on Trust. Backed by Experience." data-es="Construido en Confianza. Respaldado por Experiencia.">
            <?php
              $hero_words = explode(' ', 'Built on Trust. Backed by Experience.');
              foreach ($hero_words as $i => $word) : ?>
                <span class="ur-word"><span class="ur-word__inner" style="--i:<?php echo (int) $i; ?>"><?php echo esc_html($word); ?></span></span><?php echo ' '; ?>
              <?php endforeach; ?>
          </h1>
          <p class="ur-fade-in-2 mx-auto mt-6 max-w-xl text-base leading-7 text-white/85 md:text-lg lg:mx-0" data-en="Urena Roofing Contractor LLC is a licensed, insured roofing company proudly serving Houston homeowners, businesses, and communities." data-es="Ureña Roofing Contractor LLC es una empresa de techado con licencia y seguro que atiende con orgullo a propietarios, negocios y comunidades de Houston.">
            Urena Roofing Contractor LLC is a licensed, insured roofing company proudly serving Houston
            homeowners, businesses, and communities.
          </p>
          <div class="ur-fade-in-2 mt-8 flex flex-wrap items-center justify-center gap-3 lg:justify-start">
            <a href="/contact" class="ur-btn ur-btn-gold ur-magnetic inline-flex items-center justify-center gap-2 px-7 py-3.5 text-sm font-black uppercase tracking-[0.12em]">
              <span data-en="Get in Touch" data-es="Ponte en Contacto">Get in Touch</span> <?php echo $icon('arrow', 'h-4 w-4'); ?>
            </a>
            <a href="tel:+18327392842" class="ur-btn ur-btn-outline ur-magnetic inline-flex items-center justify-center gap-2 px-6 py-3.5 text-sm font-black uppercase tracking-[0.12em] text-white">
              <?php echo $icon('phone', 'h-4 w-4'); ?><span>(832) 739-2842</span>
            </a>
          </div>
        </div>

        <div class="ur-fade-in-3 ur-hero-panel">
          <span class="ur-hero-panel__label" data-en="On File &amp; Verified" data-es="En Archivo y Verificado">On File &amp; Verified</span>
          <ul class="ur-hero-panel__list">
            <?php foreach ($hero_credentials as $c) : ?>
              <li>
                <span class="ur-hero-panel__icon"><?php echo $icon($c['icon'], 'h-4 w-4'); ?></span>
                <span data-en="<?php echo esc_attr($c['label']); ?>" data-es="<?php echo esc_attr($c['label_es']); ?>"><?php echo esc_html($c['label']); ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>

    <a href="#our-story" class="ur-about-hero__scrollcue" aria-label="Scroll to our story">
      <span data-en="SCROLL" data-es="DESLIZAR">SCROLL</span>
      <span class="ur-about-hero__scrollcue-line" aria-hidden="true"></span>
    </a>
  </section>

  <!-- ============================================================ -->
  <!-- OUR STORY — collage inclinado, no una foto plana               -->
  <!-- ============================================================ -->
  <section id="our-story" class="ur-our-story relative overflow-hidden bg-[#EEF1F5] py-24 lg:py-32">
    <div class="ur-blueprint-texture" aria-hidden="true"></div>

    <div class="relative mx-auto grid max-w-7xl gap-16 px-4 lg:grid-cols-[1fr_1.05fr] lg:items-center">
      <div class="ur-reveal-right order-2 lg:order-1">
        <p class="ur-eyebrow" data-en="Our Story" data-es="Nuestra Historia">Our Story</p>
        <h2 class="mt-4 max-w-lg text-3xl font-black uppercase leading-[1.02] tracking-[-0.01em] text-[#12103A] md:text-5xl" data-en="One Roof at a Time" data-es="Un Techo a la Vez">
          One Roof at a Time
        </h2>
        <p class="ur-story-lead mt-6 max-w-xl text-[19px] leading-8 text-[#12103A]" data-en="Founded to bring honest, professional roofing services to the Houston community, Urena Roofing Contractor has grown by putting transparency and quality first." data-es="Fundada para llevar servicios de techado honestos y profesionales a la comunidad de Houston, Ureña Roofing Contractor ha crecido poniendo la transparencia y la calidad primero.">
          Founded to bring honest, professional roofing services to the Houston community, Urena
          Roofing Contractor has grown by putting transparency and quality first.
        </p>
        <p class="mt-4 max-w-xl text-base leading-7 text-[#5B5F6B]" data-en="Every project carries the same standard, whether it's a single storm repair or a full community maintenance program." data-es="Cada proyecto lleva el mismo estándar, ya sea una sola reparación por tormenta o un programa completo de mantenimiento comunitario.">
          Every project carries the same standard, whether it's a single storm repair or a full
          community maintenance program.
        </p>
        <p class="ur-mono-tag mt-6 inline-block"><span data-en="CONTENT PENDING &middot; AWAITING FOUNDING YEAR, FOUNDER &amp; MISSION FROM CLIENT" data-es="CONTENIDO PENDIENTE &middot; A LA ESPERA DEL AÑO DE FUNDACIÓN, FUNDADOR Y MISIÓN DEL CLIENTE">CONTENT PENDING &middot; AWAITING FOUNDING YEAR, FOUNDER &amp; MISSION FROM CLIENT</span></p>
      </div>

      <div class="order-1 lg:order-2">
        <div class="ur-story-collage">
          <div class="ur-reveal-left ur-story-collage__main ur-tilt">
            <span class="ur-hud-corner ur-hud-corner--tl" aria-hidden="true"></span>
            <span class="ur-hud-corner ur-hud-corner--br" aria-hidden="true"></span>
            <img src="<?php echo esc_url($assets['story_img']); ?>" alt="A completed Urena Roofing project, Houston, TX" data-en-alt="A completed Urena Roofing project, Houston, TX" data-es-alt="A completed Ureña Roofing project, Houston, TX" class="h-full w-full object-cover" loading="lazy">
          </div>
          <button type="button" class="js-ur-lightbox-trigger ur-story-collage__accent ur-tilt" aria-label="View team photo larger">
            <img src="<?php echo esc_url($assets['team_photo']); ?>" alt="The Urena Roofing team" data-en-alt="The Urena Roofing team" data-es-alt="The Ureña Roofing team" class="h-full w-full object-cover" loading="lazy">
            <span class="ur-story-collage__accent-tag">THE TEAM</span>
            <span class="ur-story-collage__seal" aria-hidden="true">
              <span class="ur-story-collage__seal-ring"></span>
              <?php echo $icon('shield', 'h-5 w-5'); ?>
            </span>
            <span class="ur-story-collage__expand" aria-hidden="true"><?php echo $icon('expand', 'h-4 w-4'); ?></span>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- LICENSES & INSURANCE — sellos, no cajas parejas               -->
  <!-- ============================================================ -->
  <section class="ur-licenses relative overflow-hidden bg-white py-24 lg:py-32">
    <div class="ur-licenses__texture" aria-hidden="true"></div>
    <div class="relative mx-auto max-w-7xl px-4">
      <div class="ur-reveal-up mx-auto max-w-2xl text-center">
        <p class="ur-eyebrow" data-en="Credentials" data-es="Credenciales">Credentials</p>
        <h2 class="mt-4 text-3xl font-black uppercase leading-[1.02] tracking-[-0.01em] text-[#12103A] md:text-5xl" data-en="Fully Licensed &amp; Insured" data-es="Totalmente Licenciados y Asegurados">
          Fully Licensed &amp; Insured
        </h2>
        <p class="mt-5 text-base leading-7 text-[#5B5F6B]" data-en="We operate with a General Cleaning License, full Liability Insurance, and Workers' Compensation coverage, so every project is protected, start to finish." data-es="Operamos con Licencia General de Limpieza, Seguro de Responsabilidad Civil completo, y cobertura de Compensación para Trabajadores, así que cada proyecto está protegido de principio a fin.">
          We operate with a General Cleaning License, full Liability Insurance, and Workers'
          Compensation coverage, so every project is protected, start to finish.
        </p>
      </div>

      <div class="ur-license-row mt-20">
        <?php foreach ($licenses as $l) : ?>
          <div class="ur-reveal-stamp ur-license-card" style="--tilt:<?php echo esc_attr($l['tilt']); ?>;">
            <span class="ur-license-card__pulse" aria-hidden="true"></span>
            <div class="ur-license-card__head">
              <span class="ur-license-card__seal"><?php echo $icon($l['icon'], 'h-6 w-6'); ?></span>
              <span class="ur-license-card__verified"><?php echo $icon('file-check', 'h-3 w-3'); ?><span data-en="VERIFIED" data-es="VERIFICADO">VERIFIED</span></span>
            </div>
            <span class="ur-license-card__divider" aria-hidden="true"></span>
            <h3 class="text-base font-black uppercase tracking-[0.01em] text-[#12103A]"><span data-en="<?php echo esc_attr($l['title']); ?>" data-es="<?php echo esc_attr($l['title_es']); ?>"><?php echo esc_html($l['title']); ?></span></h3>
            <p class="mt-2 text-[14px] leading-6 text-[#5B5F6B]"><span data-en="<?php echo esc_attr($l['copy']); ?>" data-es="<?php echo esc_attr($l['copy_es']); ?>"><?php echo esc_html($l['copy']); ?></span></p>
            <span class="ur-license-card__ref">DOC &middot; <?php echo esc_html($l['ref']); ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- KNOW YOUR RIGHTS — HB2102, layout partido, marca de estatuto  -->
  <!-- ============================================================ -->
  <section class="ur-hb2102 relative isolate overflow-hidden py-24 text-white lg:py-32">
    <span class="ur-statute-mark" aria-hidden="true">&sect;</span>

    <div class="relative mx-auto grid max-w-7xl gap-14 px-4 lg:grid-cols-[1.05fr_0.95fr] lg:items-start">
      <div class="ur-reveal-left">
        <p class="ur-eyebrow ur-eyebrow--light" data-en="Know Your Rights" data-es="Conoce tus Derechos">Know Your Rights</p>
        <h2 class="mt-4 text-3xl font-black uppercase leading-[1.02] tracking-[-0.01em] md:text-5xl" data-en="Texas Roofing Law (HB2102)" data-es="Ley de Techado de Texas (HB2102)">
          Texas Roofing Law (HB2102)
        </h2>
        <p class="mt-6 max-w-xl text-base leading-8 text-white/78" data-en="Texas law requires homeowners to pay their own insurance deductible on roofing claims, and it's illegal for a contractor to offer to waive or &quot;forgive&quot; that deductible. This practice, sometimes used by unlicensed or informal roofers, can put homeowners at legal and financial risk. Urena Roofing Contractor operates in full compliance with HB2102, protecting your roof, your budget, and your legal standing." data-es="La ley de Texas exige que los propietarios paguen su propio deducible de seguro en reclamos de techado, y es ilegal que un contratista ofrezca eximir o &quot;perdonar&quot; ese deducible. Esta práctica, usada a veces por techadores sin licencia o informales, puede poner a los propietarios en riesgo legal y financiero. Ureña Roofing Contractor opera en total cumplimiento con HB2102, protegiendo tu techo, tu presupuesto y tu situación legal.">
          Texas law requires homeowners to pay their own insurance deductible on roofing claims,
          and it's illegal for a contractor to offer to waive or "forgive" that deductible. This
          practice, sometimes used by unlicensed or informal roofers, can put homeowners at legal and
          financial risk. Urena Roofing Contractor operates in full compliance with HB2102, protecting
          your roof, your budget, and your legal standing.
        </p>

        <blockquote class="ur-hb2102__quote" data-en="&ldquo;The company that protects your roof, your budget, and your compliance.&rdquo;" data-es="&ldquo;La empresa que protege tu techo, tu presupuesto y tu cumplimiento legal.&rdquo;">
          &ldquo;The company that protects your roof, your budget, and your compliance.&rdquo;
        </blockquote>
      </div>

      <div class="ur-reveal-right">
        <p class="ur-eyebrow ur-eyebrow--light" data-en="Quick FAQ" data-es="Preguntas Rápidas">Quick FAQ</p>
        <div class="js-ur-faq mt-5 space-y-3">
          <?php foreach ($hb2102_faqs as $i => $faq) : ?>
            <div class="ur-faq-item">
              <button type="button" class="js-ur-faq-trigger ur-faq-item__trigger">
                <span class="ur-faq-item__icon"><?php echo $icon('plus', 'h-4 w-4'); ?></span>
                <span data-en="<?php echo esc_attr($faq['q']); ?>" data-es="<?php echo esc_attr($faq['q_es']); ?>"><?php echo esc_html($faq['q']); ?></span>
              </button>
              <div class="ur-faq-item__panel">
                <p><span data-en="<?php echo esc_attr($faq['a']); ?>" data-es="<?php echo esc_attr($faq['a_es']); ?>"><?php echo esc_html($faq['a']); ?></span></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <?php
    $faq_schema = ['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => []];
    foreach ($hb2102_faqs as $faq) {
      $faq_schema['mainEntity'][] = [
        '@type' => 'Question',
        'name' => $faq['q'],
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq['a']],
      ];
    }
  ?>
  <script type="application/ld+json"><?php echo wp_json_encode($faq_schema); ?></script>

  <!-- ============================================================ -->
  <!-- CTA DE CIERRE — banda de foto, cierra el círculo con el hero  -->
  <!-- ============================================================ -->
  <section class="ur-about-cta relative isolate flex min-h-[420px] items-center overflow-hidden text-center lg:min-h-[480px]">
    <img src="<?php echo esc_url($assets['cta_bg']); ?>" alt="Urena Roofing crew at work on a Houston roof" data-en-alt="Urena Roofing crew at work on a Houston roof" data-es-alt="Ureña Roofing crew at work on a Houston roof" class="ur-parallax ur-parallax-bg absolute inset-0 w-full object-cover" data-speed="0.05">
    <div class="ur-about-cta__scrim absolute inset-0"></div>

    <div class="relative z-10 mx-auto max-w-2xl px-4">
      <p class="ur-eyebrow ur-eyebrow--light ur-reveal-up" data-en="Get Started" data-es="Comienza Ahora">Get Started</p>
      <h2 class="ur-reveal-up mt-4 text-3xl font-black uppercase leading-[1.05] tracking-[-0.01em] text-white md:text-5xl" data-en="Ready to Work With a Roofing Company You Can Trust?" data-es="¿Listo para Trabajar con una Empresa de Techado en la que Puedes Confiar?">
        Ready to Work With a Roofing Company You Can Trust?
      </h2>
      <div class="ur-reveal-up mt-9 flex flex-wrap items-center justify-center gap-3">
        <a href="/contact" class="ur-btn ur-btn-gold ur-magnetic inline-flex items-center justify-center gap-2 px-8 py-4 text-sm font-black uppercase tracking-[0.12em]">
          <span data-en="Get in Touch" data-es="Ponte en Contacto">Get in Touch</span> <?php echo $icon('arrow', 'h-4 w-4'); ?>
        </a>
        <a href="tel:+18327392842" class="ur-btn ur-btn-outline ur-magnetic inline-flex items-center justify-center gap-2 px-6 py-4 text-sm font-black uppercase tracking-[0.12em] text-white">
          <?php echo $icon('phone', 'h-4 w-4'); ?><span>(832) 739-2842</span>
        </a>
      </div>
    </div>
  </section>
  <!-- ============================================================ -->
  <!-- LIGHTBOX — foto del equipo en grande, con animación           -->
  <!-- ============================================================ -->
  <div class="js-ur-lightbox ur-lightbox" aria-hidden="true">
    <div class="js-ur-lightbox-close ur-lightbox__backdrop"></div>
    <div class="ur-lightbox__panel" role="dialog" aria-modal="true" aria-label="Team photo, larger view">
      <button type="button" class="js-ur-lightbox-close ur-lightbox__close" aria-label="Close">
        <?php echo $icon('x', 'h-5 w-5'); ?>
      </button>
      <img src="<?php echo esc_url($assets['team_photo']); ?>" alt="The Urena Roofing team" data-en-alt="The Urena Roofing team" data-es-alt="The Ureña Roofing team" class="ur-lightbox__img">
      <div class="ur-lightbox__caption">
        <p class="ur-lightbox__eyebrow" data-en="Licensed &amp; on-site" data-es="Con Licencia y en Obra">Licensed &amp; on-site</p>
        <p class="ur-lightbox__body" data-en="The crew behind every Urena Roofing project, from first inspection to final walkthrough." data-es="El equipo detrás de cada proyecto de Ureña Roofing, desde la primera inspección hasta el recorrido final.">The crew behind every Urena Roofing project, from first inspection to final walkthrough.</p>
      </div>
    </div>
  </div>

</main>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@600;700;800;900&family=Public+Sans:wght@400;500;600;700;800&family=IBM+Plex+Mono:wght@500;600&display=swap');

  .ur-about {
    --ur-navy:#12103A; --ur-navy-2:#221D5C; --ur-gold:#F6BE15; --ur-gold-deep:#C9910A;
    --ur-mist:#EEF1F5; --ur-ink:#14131F; --ur-slate:#5B5F6B; --ur-line: rgba(20,19,31,.1);
    --ur-radius:10px; --ur-radius-sm:6px;
    font-family:'Public Sans','Segoe UI',Arial,sans-serif;
  }
  .ur-about h1,.ur-about h2,.ur-about h3,.ur-about h4{ font-family:'Big Shoulders Display','Arial Narrow',sans-serif; }
  .ur-about a:focus-visible,.ur-about button:focus-visible{ outline:2px solid var(--ur-gold); outline-offset:3px; }
  .ur-ic{ display:block; }

  .ur-eyebrow{ font-family:'IBM Plex Mono',monospace; font-size:.72rem; font-weight:600; letter-spacing:.18em; text-transform:uppercase; color:var(--ur-gold-deep); }
  .ur-eyebrow--light{ color:var(--ur-gold); }
  .ur-mono-tag{ font-family:'IBM Plex Mono',monospace; font-size:.68rem; font-weight:600; letter-spacing:.05em; color:var(--ur-slate); background:rgba(20,19,31,.05); border:1px solid var(--ur-line); padding:.5rem .8rem; border-radius:var(--ur-radius-sm); }

  /* ---- HUD corners ---- */
  .ur-hud-corner{ position:absolute; z-index:10; width:22px; height:22px; opacity:0; transform:scale(.6); transition:opacity .6s ease, transform .6s cubic-bezier(.16,1,.3,1); pointer-events:none; }
  .ur-hud-corner.is-visible,.ur-about-hero .ur-hud-corner{ opacity:1; transform:scale(1); }
  .ur-hud-corner--xl{ width:34px; height:34px; }
  .ur-hud-corner--tl{ top:20px; left:20px; border-top:2px solid var(--ur-gold); border-left:2px solid var(--ur-gold); transition-delay:.1s; }
  .ur-hud-corner--tr{ top:20px; right:20px; border-top:2px solid var(--ur-gold); border-right:2px solid var(--ur-gold); transition-delay:.22s; }
  .ur-hud-corner--bl{ bottom:20px; left:20px; border-bottom:2px solid var(--ur-gold); border-left:2px solid var(--ur-gold); transition-delay:.34s; }
  .ur-hud-corner--br{ bottom:20px; right:20px; border-bottom:2px solid var(--ur-gold); border-right:2px solid var(--ur-gold); transition-delay:.46s; }

  /* ---- Parallax photo bands need a size buffer so translateY never exposes an edge ----
     Menos "zoom" que antes (era 145%/-22%) para que se vea más foto y no tan encimada
     la gente de adelante — sigue dejando margen de sobra para el parallax de 0.05. */
  .ur-parallax-bg{ height:122%; top:-11%; will-change:transform; }

  /* ---- Hero — degradé más suave para que se note la foto, oscurece solo lo justo detrás del texto ---- */
  .ur-about-hero__scrim{ background:linear-gradient(180deg, rgba(18,16,58,.04) 0%, rgba(18,16,58,.06) 40%, rgba(18,16,58,.5) 78%, rgba(18,16,58,.8) 100%); }
  .ur-about-hero__vignette{ background:radial-gradient(120% 90% at 50% 100%, rgba(18,16,58,0) 0%, rgba(18,16,58,.22) 72%, rgba(18,16,58,.42) 100%); pointer-events:none; }
  .ur-parallax-bg{ animation:urHeroZoom 20s ease-out forwards; }
  @keyframes urHeroZoom{ from{ scale:1.08; } to{ scale:1; } }

  .ur-readout{
    position:relative; z-index:10; display:inline-flex; align-items:center; gap:.55rem;
    font-family:'IBM Plex Mono',monospace; font-size:.66rem; font-weight:600; letter-spacing:.1em;
    color:rgba(255,255,255,.85); background:rgba(18,16,58,.4); border:1px solid rgba(246,190,21,.32);
    padding:.5rem .85rem; border-radius:var(--ur-radius-sm); backdrop-filter:blur(6px); text-transform:uppercase;
  }
  .ur-readout__dot{ width:6px; height:6px; border-radius:999px; background:var(--ur-gold); flex:0 0 auto; animation:urBlink 1.8s ease-in-out infinite; }
  @keyframes urBlink{ 0%,100%{ opacity:1; box-shadow:0 0 0 0 rgba(246,190,21,.5);} 50%{ opacity:.4; box-shadow:0 0 0 5px rgba(246,190,21,0);} }
  .ur-about-hero__badge{ position:absolute; top:20px; left:64px; z-index:10; }

  .ur-about-hero__scrollcue{
    position:absolute; z-index:10; left:50%; bottom:26px; transform:translateX(-50%);
    display:none; flex-direction:column; align-items:center; gap:.6rem;
    font-family:'IBM Plex Mono',monospace; font-size:.6rem; font-weight:700; letter-spacing:.22em;
    color:rgba(255,255,255,.6); text-decoration:none; transition:color .2s ease;
  }
  .ur-about-hero__scrollcue:hover{ color:var(--ur-gold); }
  .ur-about-hero__scrollcue-line{ width:1px; height:32px; background:linear-gradient(180deg, rgba(255,255,255,.7), transparent); animation:urScrollCue 1.8s ease-in-out infinite; }
  @keyframes urScrollCue{ 0%{ transform:scaleY(0); transform-origin:top; opacity:0;} 40%{ transform:scaleY(1); transform-origin:top; opacity:1;} 60%{ transform:scaleY(1); transform-origin:bottom; opacity:1;} 100%{ transform:scaleY(0); transform-origin:bottom; opacity:0;} }
  @media (min-width:640px){ .ur-about-hero__scrollcue{ display:flex; } }
  .ur-word{ display:inline-block; overflow:hidden; vertical-align:top; }
  .ur-word__inner{ display:inline-block; transform:translateY(115%); opacity:0; animation:urWordUp .9s cubic-bezier(.16,1,.3,1) forwards; animation-delay:calc(var(--i) * 90ms + 150ms); }
  @keyframes urWordUp{ to{ transform:translateY(0); opacity:1; } }
  .ur-fade-in-0,.ur-fade-in-2,.ur-fade-in-3{ opacity:0; transform:translateY(16px); animation:urFadeUp .9s cubic-bezier(.16,1,.3,1) forwards; }
  .ur-fade-in-0{ animation-delay:.05s; } .ur-fade-in-2{ animation-delay:.75s; } .ur-fade-in-3{ animation-delay:.95s; }
  @keyframes urFadeUp{ to{ opacity:1; transform:translateY(0); } }

  /* ---- Hero credential panel — reemplaza el bloque de texto centrado plano ---- */
  .ur-hero-panel{
    position:relative; background:rgba(18,16,58,.45); border:1px solid rgba(246,190,21,.28);
    backdrop-filter:blur(10px); padding:1.5rem 1.6rem; border-radius:var(--ur-radius);
    box-shadow:0 24px 50px rgba(0,0,0,.25);
  }
  .ur-hero-panel__label{
    display:block; font-family:'IBM Plex Mono',monospace; font-size:.62rem; font-weight:700; letter-spacing:.14em;
    text-transform:uppercase; color:var(--ur-gold); padding-bottom:.9rem; margin-bottom:.9rem;
    border-bottom:1px dashed rgba(246,190,21,.3);
  }
  .ur-hero-panel__list{ list-style:none; margin:0; padding:0; display:flex; flex-direction:column; gap:.85rem; }
  .ur-hero-panel__list li{ display:flex; align-items:center; gap:.7rem; font-size:.86rem; font-weight:700; color:#fff; }
  .ur-hero-panel__icon{
    flex-shrink:0; display:inline-flex; align-items:center; justify-content:center; width:30px; height:30px;
    background:rgba(246,190,21,.14); color:var(--ur-gold); border-radius:999px;
  }
  @media (max-width:1023px){ .ur-hero-panel{ max-width:360px; margin:0 auto; } }

  /* ---- Transiciones — clip-path solo donde ayuda al ritmo ---- */
  .ur-our-story{ clip-path: polygon(0 3%, 100% 0, 100% 100%, 0 100%); }
  .ur-licenses{ clip-path: polygon(0 0, 100% 2.5%, 100% 100%, 0 100%); }
  .ur-hb2102{
    background:radial-gradient(120% 100% at 50% 0%, var(--ur-navy-2) 0%, var(--ur-navy) 65%);
    clip-path: polygon(0 0, 100% 3%, 100% 100%, 0 100%);
  }
  @media (max-width:768px){
    .ur-our-story{ clip-path: polygon(0 1.5%, 100% 0, 100% 100%, 0 100%); }
    .ur-licenses{ clip-path: polygon(0 0, 100% 1.5%, 100% 100%, 0 100%); }
    .ur-hb2102{ clip-path: polygon(0 0, 100% 1.5%, 100% 100%, 0 100%); }
  }

  .ur-blueprint-texture{
    position:absolute; inset:0; pointer-events:none; z-index:0; opacity:.5;
    background-image:
      linear-gradient(rgba(18,16,58,.05) 1px, transparent 1px),
      linear-gradient(90deg, rgba(18,16,58,.05) 1px, transparent 1px);
    background-size: 42px 42px;
    mask-image: radial-gradient(ellipse 55% 55% at 15% 70%, black 0%, transparent 70%);
  }

  /* ---- Story photo collage — dos fotos, no una sola caja plana ---- */
  .ur-story-collage{ position:relative; max-width:500px; margin-inline:auto; }
  .ur-story-collage__main{ position:relative; aspect-ratio:4/3.3; overflow:hidden; box-shadow:0 30px 60px rgba(18,16,58,.18); border-radius:var(--ur-radius); }
  .ur-story-collage__accent{
    position:absolute; left:-48px; bottom:-64px; width:60%; aspect-ratio:5/4; overflow:hidden;
    border:6px solid var(--ur-gold); box-shadow:0 26px 52px rgba(18,16,58,.32); z-index:2;
    opacity:0; transform:scale(1.3) rotate(-7deg); border-radius:var(--ur-radius);
    display:block; padding:0; margin:0; background:none; font:inherit; text-align:inherit; cursor:pointer;
  }
  .ur-story-collage__accent:focus-visible{ outline:2px solid var(--ur-gold); outline-offset:4px; }
  .ur-story-collage__accent.is-visible{ animation:urAccentStamp .75s cubic-bezier(.22,1.5,.36,1) forwards; }
  @keyframes urAccentStamp{
    0%{ opacity:0; transform:scale(1.35) rotate(-9deg); }
    55%{ opacity:1; transform:scale(.96) rotate(2deg); }
    100%{ opacity:1; transform:scale(1) rotate(-2deg); }
  }
  .ur-story-collage__accent:hover{ transform:scale(1.02) rotate(0deg); }
  .ur-story-collage__accent-tag{
    position:absolute; left:12px; bottom:12px; font-family:'IBM Plex Mono',monospace; font-size:.64rem;
    font-weight:700; letter-spacing:.1em; color:#fff; background:rgba(18,16,58,.65); padding:.32rem .6rem;
    border-radius:var(--ur-radius-sm);
  }
  .ur-story-collage__seal{
    position:absolute; top:-16px; right:-16px; z-index:3; display:flex; align-items:center; justify-content:center;
    width:52px; height:52px; border-radius:999px; background:var(--ur-navy); color:var(--ur-gold);
    box-shadow:0 10px 24px rgba(18,16,58,.35);
  }
  .ur-story-collage__seal-ring{
    position:absolute; inset:-5px; border-radius:999px; border:2px dashed var(--ur-gold);
    animation:urSealSpin 12s linear infinite;
  }
  @keyframes urSealSpin{ to{ transform:rotate(360deg); } }
  @media (max-width:640px){ .ur-story-collage__accent{ left:-18px; bottom:-40px; width:56%; } .ur-story-collage__seal{ width:42px; height:42px; top:-12px; right:-12px; } }

  .ur-story-collage__expand{
    position:absolute; inset:0; z-index:3; display:flex; align-items:center; justify-content:center;
    background:rgba(18,16,58,0); color:#fff; opacity:0; transition:opacity .25s ease, background-color .25s ease;
  }
  .ur-story-collage__expand svg{
    width:34px; height:34px; padding:9px; border-radius:999px; background:rgba(246,190,21,.92); color:var(--ur-navy);
    transform:scale(.7); transition:transform .3s cubic-bezier(.16,1,.3,1);
  }
  .ur-story-collage__accent:hover .ur-story-collage__expand{ opacity:1; background:rgba(18,16,58,.28); }
  .ur-story-collage__accent:hover .ur-story-collage__expand svg{ transform:scale(1); }

  /* ---- Lightbox — click en la foto del equipo para verla en grande ---- */
  .ur-lightbox{
    position:fixed; inset:0; z-index:100; display:flex; align-items:center; justify-content:center;
    padding:5vh 20px; opacity:0; visibility:hidden; transition:opacity .3s ease, visibility 0s linear .3s;
  }
  .ur-lightbox.is-open{ opacity:1; visibility:visible; transition:opacity .3s ease; }
  .ur-lightbox__backdrop{ position:absolute; inset:0; background:rgba(18,16,58,.86); backdrop-filter:blur(4px); cursor:pointer; }
  .ur-lightbox__panel{
    position:relative; z-index:1; max-width:640px; width:100%; background:var(--ur-navy);
    border:1px solid rgba(246,190,21,.3); box-shadow:0 40px 90px rgba(0,0,0,.4); border-radius:var(--ur-radius);
    transform:scale(.88) translateY(18px); opacity:0; transition:transform .4s cubic-bezier(.16,1,.3,1), opacity .35s ease;
  }
  .ur-lightbox.is-open .ur-lightbox__panel{ transform:scale(1) translateY(0); opacity:1; transition-delay:.05s; }
  .ur-lightbox__img{ display:block; width:100%; max-height:70vh; object-fit:cover; border-radius:var(--ur-radius) var(--ur-radius) 0 0; }
  .ur-lightbox__close{
    position:absolute; top:-16px; right:-16px; z-index:2; display:flex; align-items:center; justify-content:center;
    width:40px; height:40px; border-radius:999px; background:var(--ur-gold); color:var(--ur-navy);
    border:none; cursor:pointer; box-shadow:0 10px 22px rgba(0,0,0,.28); transition:transform .2s ease;
  }
  .ur-lightbox__close:hover{ transform:scale(1.08) rotate(90deg); }
  .ur-lightbox__caption{ padding:1.5rem 1.75rem; }
  .ur-lightbox__eyebrow{ margin:0 0 .4rem; font-family:'IBM Plex Mono',monospace; font-size:.68rem; font-weight:700; letter-spacing:.14em; text-transform:uppercase; color:var(--ur-gold); }
  .ur-lightbox__body{ margin:0; font-size:.92rem; line-height:1.6; color:rgba(255,255,255,.85); }
  @media (max-width:640px){ .ur-lightbox__close{ top:-14px; right:0; } }

  /* ---- Buttons ---- */
  .ur-btn{ position:relative; border:1px solid transparent; transition:box-shadow .25s ease,background-color .25s ease,color .25s ease; border-radius:var(--ur-radius-sm); }
  .ur-btn span{ position:relative; z-index:1; }
  .ur-btn-gold{ background:var(--ur-gold); color:var(--ur-navy); box-shadow:0 16px 34px rgba(246,190,21,.28); }
  .ur-btn-gold:hover{ background:var(--ur-gold-deep); }
  .ur-btn-outline{ background:rgba(255,255,255,.06); border-color:rgba(255,255,255,.28); backdrop-filter:blur(6px); }
  .ur-btn-outline:hover{ background:#fff; color:var(--ur-navy); }
  .ur-magnetic{ will-change:transform; }
  .ur-tilt{ transform-style:preserve-3d; transition:transform .3s cubic-bezier(.16,1,.3,1); will-change:transform; }

  /* ---- License stamps — sello, no caja pareja ---- */
  .ur-licenses__texture{
    position:absolute; inset:0; pointer-events:none; z-index:0; opacity:.5;
    background-image:
      linear-gradient(rgba(18,16,58,.05) 1px, transparent 1px),
      linear-gradient(90deg, rgba(18,16,58,.05) 1px, transparent 1px);
    background-size: 42px 42px;
    mask-image: radial-gradient(ellipse 70% 55% at 50% 78%, black 0%, transparent 72%);
  }
  .ur-license-row{ display:flex; flex-wrap:wrap; justify-content:center; gap:2.75rem 2.25rem; }
  .ur-license-card{
    position:relative; width:270px; background:var(--ur-mist); border:1px solid var(--ur-line); padding:2.1rem 1.75rem;
    opacity:0; transform:scale(1.5) rotate(var(--tilt)); border-radius:var(--ur-radius);
    transition:transform .3s cubic-bezier(.16,1,.3,1), box-shadow .3s ease;
  }
  .ur-license-card.is-visible{ animation:urStampIn .6s cubic-bezier(.22,1.6,.36,1) forwards; }
  @keyframes urStampIn{
    0%{ opacity:0; transform:scale(1.6) rotate(var(--tilt)); }
    55%{ opacity:1; transform:scale(.93) rotate(var(--tilt)); }
    100%{ opacity:1; transform:scale(1) rotate(var(--tilt)); }
  }
  .ur-license-card:hover{ box-shadow:0 24px 46px rgba(18,16,58,.18); transform:scale(1.04) rotate(0deg) translateY(-5px); }
  .ur-license-card__head{ display:flex; align-items:center; justify-content:space-between; gap:.75rem; }
  .ur-license-card__seal{
    position:relative; display:inline-flex; align-items:center; justify-content:center; width:52px; height:52px;
    border-radius:999px; background:var(--ur-mist); color:var(--ur-navy);
  }
  .ur-license-card__seal::before{
    content:''; position:absolute; inset:-6px; border-radius:999px; border:2px dashed var(--ur-gold-deep);
    animation:urSealSpin 14s linear infinite;
  }
  .ur-license-card__seal::after{
    content:''; position:absolute; inset:-15px; z-index:-1; border-radius:999px; opacity:.7;
    background:repeating-radial-gradient(circle, rgba(201,145,10,.16) 0 1px, transparent 1px 5px);
  }
  .ur-license-card__pulse{
    position:absolute; top:2.1rem; left:1.75rem; width:52px; height:52px; border-radius:999px;
    border:2px solid var(--ur-gold); opacity:0; pointer-events:none;
  }
  .ur-license-card.is-visible .ur-license-card__pulse{ animation:urImpactPulse .7s ease-out .5s forwards; }
  @keyframes urImpactPulse{
    0%{ opacity:.7; transform:scale(.7); }
    100%{ opacity:0; transform:scale(2.1); }
  }
  .ur-license-card__divider{
    position:relative; display:block; margin:1.5rem -1.75rem 1.2rem; height:1px;
    background-image:repeating-linear-gradient(90deg, var(--ur-line) 0 6px, transparent 6px 12px);
  }
  .ur-license-card__divider::before,.ur-license-card__divider::after{
    content:''; position:absolute; top:50%; width:16px; height:16px; background:#fff;
    border-radius:999px; transform:translateY(-50%); border:1px solid var(--ur-line);
  }
  .ur-license-card__divider::before{ left:-8px; }
  .ur-license-card__divider::after{ right:-8px; }
  .ur-license-card__ref{
    display:block; margin-top:1rem; padding-top:.8rem; border-top:1px dashed var(--ur-line);
    font-family:'IBM Plex Mono',monospace; font-size:.62rem; font-weight:600; letter-spacing:.08em; color:var(--ur-slate);
  }
  .ur-license-card__verified{
    display:inline-flex; align-items:center; gap:.3rem; flex-shrink:0; font-family:'IBM Plex Mono',monospace; font-size:.6rem;
    font-weight:700; letter-spacing:.1em; color:var(--ur-gold-deep); border:1px solid var(--ur-gold-deep);
    padding:.2rem .45rem; border-radius:var(--ur-radius-sm);
  }

  /* ---- HB2102 — marca de estatuto de fondo + quote ---- */
  .ur-statute-mark{
    position:absolute; top:-4%; right:-3%; z-index:0; font-family:'Big Shoulders Display',sans-serif;
    font-weight:900; font-size:min(52vw,760px); line-height:1; color:var(--ur-gold); opacity:.05;
    pointer-events:none; user-select:none;
  }
  .ur-hb2102__quote{
    position:relative; margin:2.25rem 0 0; padding:1.5rem 0 0; border-top:1px solid rgba(246,190,21,.3);
    font-family:'Big Shoulders Display',sans-serif; font-weight:700; font-size:1.35rem; line-height:1.3;
    letter-spacing:-0.005em; color:var(--ur-gold); text-transform:uppercase;
  }

  /* ---- FAQ accordion ---- */
  .ur-faq-item{ border:1px solid rgba(255,255,255,.14); background:rgba(255,255,255,.04); border-radius:var(--ur-radius); overflow:hidden; }
  .ur-faq-item__trigger{
    display:flex; width:100%; align-items:center; gap:.9rem; padding:1.1rem 1.4rem; text-align:left;
    background:none; border:none; cursor:pointer; color:#fff; font-size:.92rem; font-weight:700;
  }
  .ur-faq-item__icon{
    flex-shrink:0; display:inline-flex; align-items:center; justify-content:center; width:26px; height:26px;
    border:1px solid rgba(255,255,255,.24); color:var(--ur-gold); transition:transform .35s cubic-bezier(.16,1,.3,1);
    border-radius:var(--ur-radius-sm);
  }
  .ur-faq-item.is-open .ur-faq-item__icon{ transform:rotate(45deg); background:var(--ur-gold); color:var(--ur-navy); border-color:var(--ur-gold); }
  .ur-faq-item__panel{ max-height:0; overflow:hidden; transition:max-height .45s cubic-bezier(.16,1,.3,1); }
  .ur-faq-item.is-open .ur-faq-item__panel{ max-height:200px; }
  .ur-faq-item__panel p{ padding:0 1.4rem 1.3rem 3rem; font-size:.86rem; line-height:1.65; color:rgba(255,255,255,.72); }

  /* ---- CTA — banda de foto que le hace bookend al hero ---- */
  .ur-about-cta__scrim{ background:linear-gradient(180deg, rgba(18,16,58,.55) 0%, rgba(18,16,58,.82) 100%); }

  /* ---- Reveal on scroll ---- */
  .ur-reveal-up,.ur-reveal-left,.ur-reveal-right{ opacity:0; will-change:opacity,transform; transition:opacity .9s cubic-bezier(.16,1,.3,1),transform .9s cubic-bezier(.16,1,.3,1); }
  .ur-reveal-up{ transform:translateY(36px); } .ur-reveal-left{ transform:translateX(-40px); } .ur-reveal-right{ transform:translateX(40px); }
  .ur-reveal-up.is-visible,.ur-reveal-left.is-visible,.ur-reveal-right.is-visible{ opacity:1; transform:translate(0,0); }

  @media (max-width:768px){
    .ur-about-hero h1{ font-size:2.3rem; }
    .ur-about-hero__badge{ left:20px; }
    .ur-hb2102__quote{ font-size:1.1rem; }
    .ur-statute-mark{ font-size:70vw; top:-2%; }
  }

  @media (prefers-reduced-motion: reduce){
    .ur-reveal-up,.ur-reveal-left,.ur-reveal-right,.ur-word__inner,.ur-fade-in-0,.ur-fade-in-2,
    .ur-btn,.ur-hud-corner,.ur-faq-item__icon,.ur-faq-item__panel,.ur-license-card,.ur-license-card__seal::before,.ur-license-card__pulse,.ur-story-collage__accent,.ur-story-collage__seal-ring,.ur-story-collage__expand,.ur-story-collage__expand svg,.ur-lightbox__panel,.ur-lightbox__close,.ur-tilt,
    .ur-parallax-bg,.ur-readout__dot,.ur-about-hero__scrollcue-line{
      opacity:1!important; transform:none!important; transition:none!important; animation:none!important;
    }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {

    /* ---------- Reveal on scroll (incluye HUD corners y sellos) ---------- */
    try {
      const revealItems = document.querySelectorAll(".ur-reveal-up,.ur-reveal-left,.ur-reveal-right,.ur-reveal-stamp,.ur-story-collage__accent,.ur-story-collage .ur-hud-corner,.ur-about-hero .ur-hud-corner");
      const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, idx) => {
          if (entry.isIntersecting) {
            const delay = entry.target.classList.contains("ur-reveal-stamp") ? (idx % 3) * 110 : 0;
            setTimeout(() => entry.target.classList.add("is-visible"), delay);
            revealObserver.unobserve(entry.target);
          }
        });
      }, { threshold: 0.15 });
      revealItems.forEach((item) => revealObserver.observe(item));
    } catch (err) { console.error("ur-reveal init failed:", err); }

    /* ---------- Magnetic buttons ---------- */
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

    /* ---------- Tilt (collage photos) ---------- */
    try {
      document.querySelectorAll(".ur-tilt").forEach((card) => {
        card.addEventListener("mousemove", (e) => {
          const r = card.getBoundingClientRect();
          const px = (e.clientX - r.left) / r.width - 0.5;
          const py = (e.clientY - r.top) / r.height - 0.5;
          card.style.transform = `perspective(700px) rotateX(${(-py * 5).toFixed(2)}deg) rotateY(${(px * 5).toFixed(2)}deg)`;
        });
        card.addEventListener("mouseleave", () => { card.style.transform = "perspective(700px) rotateX(0) rotateY(0)"; });
      });
    } catch (err) { console.error("ur-tilt init failed:", err); }

    /* ---------- Ambient parallax (hero + CTA photo) ---------- */
    try {
      const parallaxEls = document.querySelectorAll(".ur-parallax");
      let ticking = false;
      function updateParallax() {
        const vh = window.innerHeight;
        parallaxEls.forEach((el) => {
          const speed = parseFloat(el.dataset.speed || "0.1");
          const rect = el.getBoundingClientRect();
          const center = rect.top + rect.height / 2 - vh / 2;
          el.style.transform = `translateY(${(center * -speed).toFixed(1)}px)`;
        });
        ticking = false;
      }
      window.addEventListener("scroll", () => {
        if (!ticking) { requestAnimationFrame(updateParallax); ticking = true; }
      }, { passive: true });
      updateParallax();
    } catch (err) { console.error("ur-parallax init failed:", err); }

    /* ---------- FAQ accordion ---------- */
    try {
      document.querySelectorAll(".js-ur-faq-trigger").forEach((trigger) => {
        trigger.addEventListener("click", () => {
          const item = trigger.closest(".ur-faq-item");
          item.classList.toggle("is-open");
        });
      });
    } catch (err) { console.error("ur-faq init failed:", err); }

    /* ---------- Lightbox: foto del equipo en grande ---------- */
    try {
      const lightbox = document.querySelector(".js-ur-lightbox");
      const trigger = document.querySelector(".js-ur-lightbox-trigger");
      if (lightbox && trigger) {
        let lastFocused = null;

        const openLightbox = () => {
          lastFocused = document.activeElement;
          lightbox.classList.add("is-open");
          lightbox.setAttribute("aria-hidden", "false");
          document.body.style.overflow = "hidden";
          lightbox.querySelector(".js-ur-lightbox-close")?.focus();
        };
        const closeLightbox = () => {
          lightbox.classList.remove("is-open");
          lightbox.setAttribute("aria-hidden", "true");
          document.body.style.overflow = "";
          if (lastFocused) lastFocused.focus();
        };

        trigger.addEventListener("click", openLightbox);
        lightbox.querySelectorAll(".js-ur-lightbox-close").forEach((el) => el.addEventListener("click", closeLightbox));
        document.addEventListener("keydown", (e) => {
          if (e.key === "Escape" && lightbox.classList.contains("is-open")) closeLightbox();
        });
      }
    } catch (err) { console.error("ur-lightbox init failed:", err); }
  });
</script>

<?php get_footer(); ?>