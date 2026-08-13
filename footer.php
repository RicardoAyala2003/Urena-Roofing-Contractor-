<?php
  $img       = '/wp-content/uploads/2026/08/';
  $logo_navy = $img . '1440-urena-roofing-navy-blue-logo-crop.png';

  $ur_icon = function ($name) {
    $paths = [
      'phone'    => '<path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2C9.4 21 3 14.6 3 6a2 2 0 0 1 2-2z"/>',
      'mail'     => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/>',
      'pin'      => '<path d="M12 22s7-6.7 7-12.4A7 7 0 1 0 5 9.6C5 15.3 12 22 12 22z"/><circle cx="12" cy="9.5" r="2.4"/>',
      'arrow-up' => '<path d="M12 19V5"/><path d="m5 12 7-7 7 7"/>',
    ];
    return '<svg class="ur-footer-ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . ($paths[$name] ?? '') . '</svg>';
  };

  // Íconos de marca — mismos trazos oficiales y colores que en header.php.
  $ur_brand_icon = function ($name) {
    $brands = [
      'facebook'  => ['vb' => 24, 'color' => '#1877F2', 'd' => 'M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z'],
      'instagram' => ['vb' => 24, 'color' => '#E1306C', 'd' => 'M12 2.16c3.2 0 3.58.01 4.85.07 1.17.05 1.8.25 2.23.41.56.22.96.48 1.38.9.42.42.68.82.9 1.38.16.42.36 1.06.41 2.23.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.05 1.17-.25 1.8-.41 2.23-.22.56-.48.96-.9 1.38-.42.42-.82.68-1.38.9-.42.16-1.06.36-2.23.41-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-1.17-.05-1.8-.25-2.23-.41a3.72 3.72 0 01-1.38-.9 3.72 3.72 0 01-.9-1.38c-.16-.42-.36-1.06-.41-2.23C2.17 15.58 2.16 15.2 2.16 12s.01-3.58.07-4.85c.05-1.17.25-1.8.41-2.23.22-.56.48-.96.9-1.38.42-.42.82-.68 1.38-.9.42-.16 1.06-.36 2.23-.41C8.42 2.17 8.8 2.16 12 2.16M12 0C8.74 0 8.33.01 7.05.07 5.78.13 4.9.33 4.14.63a5.88 5.88 0 00-2.13 1.38A5.88 5.88 0 00.63 4.14C.33 4.9.13 5.78.07 7.05.01 8.33 0 8.74 0 12s.01 3.67.07 4.95c.06 1.27.26 2.15.56 2.91.31.79.73 1.46 1.38 2.13a5.88 5.88 0 002.13 1.38c.76.3 1.64.5 2.91.56C8.33 23.99 8.74 24 12 24s3.67-.01 4.95-.07c1.27-.06 2.15-.26 2.91-.56a5.88 5.88 0 002.13-1.38 5.88 5.88 0 001.38-2.13c.3-.76.5-1.64.56-2.91.06-1.28.07-1.69.07-4.95s-.01-3.67-.07-4.95c-.06-1.27-.26-2.15-.56-2.91a5.88 5.88 0 00-1.38-2.13A5.88 5.88 0 0019.86.63C19.1.33 18.22.13 16.95.07 15.67.01 15.26 0 12 0zm0 5.84a6.16 6.16 0 100 12.32 6.16 6.16 0 000-12.32zm0 10.16a4 4 0 110-8 4 4 0 010 8zm6.4-11.85a1.44 1.44 0 100 2.88 1.44 1.44 0 000-2.88z'],
      'tiktok'    => ['vb' => 24, 'color' => '#25F4EE', 'd' => 'M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5.8 20.1a6.34 6.34 0 0 0 10.86-4.43V8.36a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1.84-.4z'],
      'linkedin'  => ['vb' => 24, 'color' => '#0A66C2', 'd' => 'M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 1 1 0-4.124 2.062 2.062 0 0 1 0 4.124zM7.114 20.452H3.558V9h3.556v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z'],
      'gmb'       => ['vb' => 30, 'color' => '#4285F4', 'd' => 'M11.166 20.194c.806.577 2.809 1.923 3.222 2.358.412.435.023 1.099.023 1.099l.618.252c.137-.298.962-1.397 1.511-2.084.496-.62.926-1.706.941-2.503.047-2.572-3.367-3.794-4.949-5.237-.778-.71-.16-1.122-.16-1.122l-.527-.343C9.808 14.926 7.662 17.686 11.166 20.194zM12.922 11.605c1.969 1.74 5.435 3.548 5.679 4.717.318 1.523-.412 2.382-.412 2.382l.394.321c.213-.304.451-.591.67-.891.892-1.222 1.752-2.463 2.629-3.695 2.004-2.818 1.254-5.49-1.765-7.648-1.537-1.098-3.032-2.26-4.584-3.339-.871-.733-.275-2.107-.275-2.107l-.367-.32c0 0-3.286 3.984-3.573 5.588C11.045 8.148 10.953 9.865 12.922 11.605zM23 27L22.341 25 7.659 25 7 27 11.19 27 11.822 29 18.217 29 18.816 27z'],
    ];
    $b = $brands[$name] ?? null;
    if (!$b) return '';
    return '<svg class="ur-footer-ic ur-footer-ic--brand" viewBox="0 0 ' . $b['vb'] . ' ' . $b['vb'] . '" fill="currentColor" aria-hidden="true" style="--brand:' . $b['color'] . '"><path d="' . $b['d'] . '"/></svg>';
  };

  $ur_services_menu = [
    ['label' => 'Residential Roof Replacement', 'label_es' => 'Reemplazo de Techo Residencial',            'link' => '/services/residential-roof-replacement'],
    ['label' => 'Storm & Hail Damage Repair',    'label_es' => 'Reparación de Daños por Tormenta y Granizo', 'link' => '/services/storm-hail-damage-repair'],
    ['label' => 'Roof Maintenance & Inspections','label_es' => 'Mantenimiento e Inspecciones de Techo',      'link' => '/services/roof-maintenance-inspections'],
    // Temporalmente oculto a pedido del cliente — no borrar, solo descomentar para reactivar.
    // ['label' => 'Commercial & Flat Roofing',      'label_es' => 'Techado Comercial y Plano',                 'link' => '/services/commercial-flat-roofing'],
    ['label' => 'HOA Roofing Programs',           'label_es' => 'Programas de Techado para HOA',             'link' => '/services/hoa-roofing-programs'],
  ];

  $ur_quick_links = [
    ['label' => 'Home',          'label_es' => 'Inicio',           'link' => '/'],
    ['label' => 'About',         'label_es' => 'Nosotros',         'link' => '/about'],
    ['label' => 'Services',      'label_es' => 'Servicios',        'link' => '/services'],
    ['label' => 'Service Areas', 'label_es' => 'Áreas de Servicio', 'link' => '/service-areas'],
    ['label' => 'Contact',       'label_es' => 'Contacto',         'link' => '/contact'],
  ];

  $ur_licenses = [
    ['en' => 'General Cleaning License', 'es' => 'Licencia General de Limpieza'],
    ['en' => 'Liability Insurance',      'es' => 'Seguro de Responsabilidad Civil'],
    ['en' => "Workers' Compensation",    'es' => 'Compensación para Trabajadores'],
  ];
?>

<footer class="ur-footer">
  <span class="ur-footer__corner ur-footer__corner--tl" aria-hidden="true"></span>
  <span class="ur-footer__corner ur-footer__corner--tr" aria-hidden="true"></span>

  <div class="ur-footer__top">
    <div class="ur-footer__grid">

      <!-- Columna 1: Logo + tagline + redes -->
      <div class="ur-footer__col">
        <img src="<?php echo esc_url($logo_navy); ?>" alt="Urena Roofing Contractor LLC" data-en-alt="Urena Roofing Contractor LLC" data-es-alt="Ureña Roofing Contractor LLC" class="ur-footer__logo">
        <p class="ur-footer__tagline"><span data-en="Built Right. Built to Last." data-es="Construido Bien. Hecho para Durar.">Built Right. Built to Last.</span></p>
        <div class="ur-footer__social">
          <a href="https://www.facebook.com/UrenaRoofingHouston" target="_blank" rel="noopener noreferrer" class="ur-footer__social-chip" aria-label="Facebook"><?php echo $ur_brand_icon('facebook'); ?></a>
          <a href="<?php echo esc_url('https://www.instagram.com/urena.roofing/?hl=es'); ?>" target="_blank" rel="noopener noreferrer" class="ur-footer__social-chip" aria-label="Instagram"><?php echo $ur_brand_icon('instagram'); ?></a>
          <a href="<?php echo esc_url('https://www.tiktok.com/@urena.roofing?_r=1&_t=ZP-98lutt21xsc'); ?>" target="_blank" rel="noopener noreferrer" class="ur-footer__social-chip" aria-label="TikTok"><?php echo $ur_brand_icon('tiktok'); ?></a>
          <a href="https://www.linkedin.com/company/urenaroofing-contractorllc/" target="_blank" rel="noopener noreferrer" class="ur-footer__social-chip" aria-label="LinkedIn"><?php echo $ur_brand_icon('linkedin'); ?></a>
          <a href="<?php echo esc_url('https://www.google.com/maps/place//@29.9960413,-95.4851544,17z/data=!3m1!4b1!4m3!3m2!1s0x8640c598e8eb037f:0x356cbf4a13651a2!12e1?entry=ttu&g_ep=EgoyMDI2MDgwNS4xIKXMDSoASAFQAw%3D%3D'); ?>" target="_blank" rel="noopener noreferrer" class="ur-footer__social-chip" aria-label="Google Maps"><?php echo $ur_brand_icon('gmb'); ?></a>
        </div>
      </div>

      <!-- Columna 2: Quick Links -->
      <div class="ur-footer__col">
        <p class="ur-footer__heading"><span data-en="Quick Links" data-es="Enlaces Rápidos">Quick Links</span></p>
        <ul class="ur-footer__list">
          <?php foreach ($ur_quick_links as $l) : ?>
            <li><a href="<?php echo esc_url(home_url($l['link'])); ?>"><span data-en="<?php echo esc_attr($l['label']); ?>" data-es="<?php echo esc_attr($l['label_es']); ?>"><?php echo esc_html($l['label']); ?></span></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Columna 3: Services -->
      <div class="ur-footer__col">
        <p class="ur-footer__heading"><span data-en="Services" data-es="Servicios">Services</span></p>
        <ul class="ur-footer__list">
          <?php foreach ($ur_services_menu as $s) : ?>
            <li><a href="<?php echo esc_url(home_url($s['link'])); ?>"><span data-en="<?php echo esc_attr($s['label']); ?>" data-es="<?php echo esc_attr($s['label_es']); ?>"><?php echo esc_html($s['label']); ?></span></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Columna 4: Contact info -->
      <div class="ur-footer__col">
        <p class="ur-footer__heading"><span data-en="Contact" data-es="Contacto">Contact</span></p>
        <ul class="ur-footer__contact">
          <li>
            <?php echo $ur_icon('phone'); ?>
            <span><a href="tel:+18327392842">(832) 739-2842</a><br><a href="tel:+13464046431">(346) 404-6431</a></span>
          </li>
          <li>
            <?php echo $ur_icon('mail'); ?>
            <span><a href="mailto:info@urenaroofing.com">info@urenaroofing.com</a></span>
          </li>
          <li>
            <?php echo $ur_icon('pin'); ?>
            <span>3648 Cypress Creek Pkwy Ste 225<br>Houston, TX 77068, United States</span>
          </li>
        </ul>
        <ul class="ur-footer__licenses">
          <?php foreach ($ur_licenses as $lic) : ?>
            <li><span data-en="<?php echo esc_attr($lic['en']); ?>" data-es="<?php echo esc_attr($lic['es']); ?>"><?php echo esc_html($lic['en']); ?></span></li>
          <?php endforeach; ?>
        </ul>
      </div>

    </div>
  </div>

  <div class="ur-footer__bottom">
    <div class="ur-footer__bottom-inner">
      <p>&copy; <span class="js-ur-footer-year">2026</span> <span data-en="Urena Roofing Contractor LLC." data-es="Ureña Roofing Contractor LLC.">Urena Roofing Contractor LLC.</span> <span data-en="All rights reserved." data-es="Todos los derechos reservados.">All rights reserved.</span></p>
      <div class="ur-footer__bottom-links">
        <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>"><span data-en="Privacy Policy" data-es="Política de Privacidad">Privacy Policy</span></a>
        <span>|</span>
        <a href="<?php echo esc_url(home_url('/terms-of-service')); ?>"><span data-en="Terms of Service" data-es="Términos de Servicio">Terms of Service</span></a>
      </div>
    </div>
  </div>

  <button type="button" class="ur-footer__totop js-ur-back-to-top" aria-label="Back to top">
    <?php echo $ur_icon('arrow-up'); ?>
  </button>
</footer>

<?php wp_footer(); ?>
</body>
</html>