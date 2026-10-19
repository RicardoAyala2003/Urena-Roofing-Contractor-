<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@600;700;800;900&family=Public+Sans:wght@400;500;600;700;800&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class('ur-site'); ?>>

    <?php
      $img       = '/wp-content/uploads/2026/08/';
      $logo_navy = $img . '1440-urena-roofing-navy-blue-logo-crop.png';

      // Íconos de línea (nav, contacto) — stroke-based, viewBox 24x24 fijo.
      $ur_nav_icon = function ($name) {
        $paths = [
          'chevron' => '<path d="m6 9 6 6 6-6"/>',
          'phone'   => '<path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2C9.4 21 3 14.6 3 6a2 2 0 0 1 2-2z"/>',
          'mail'    => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/>',
          'pin'     => '<path d="M12 22s7-6.7 7-12.4A7 7 0 1 0 5 9.6C5 15.3 12 22 12 22z"/><circle cx="12" cy="9.5" r="2.4"/>',
          'menu'    => '<path d="M4 7h16"/><path d="M4 12h16"/><path d="M4 17h16"/>',
          'x'       => '<path d="M18 6 6 18"/><path d="M6 6l12 12"/>',
          'arrow'   => '<path d="M5 12h14"/><path d="m13 6 6 6-6 6"/>',
        ];
        return '<svg class="ur-nav-ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . ($paths[$name] ?? '') . '</svg>';
      };

      // Íconos de marca (redes/directorios) — trazos oficiales simplificados,
      // cada uno con su viewBox real y un color de marca para el hover.
      $ur_brand_icon = function ($name) {
        $brands = [
          'facebook'  => ['vb' => 24, 'color' => '#1877F2', 'd' => 'M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z'],
          'instagram' => ['vb' => 24, 'color' => '#E1306C', 'd' => 'M12 2.16c3.2 0 3.58.01 4.85.07 1.17.05 1.8.25 2.23.41.56.22.96.48 1.38.9.42.42.68.82.9 1.38.16.42.36 1.06.41 2.23.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.05 1.17-.25 1.8-.41 2.23-.22.56-.48.96-.9 1.38-.42.42-.82.68-1.38.9-.42.16-1.06.36-2.23.41-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-1.17-.05-1.8-.25-2.23-.41a3.72 3.72 0 01-1.38-.9 3.72 3.72 0 01-.9-1.38c-.16-.42-.36-1.06-.41-2.23C2.17 15.58 2.16 15.2 2.16 12s.01-3.58.07-4.85c.05-1.17.25-1.8.41-2.23.22-.56.48-.96.9-1.38.42-.42.82-.68 1.38-.9.42-.16 1.06-.36 2.23-.41C8.42 2.17 8.8 2.16 12 2.16M12 0C8.74 0 8.33.01 7.05.07 5.78.13 4.9.33 4.14.63a5.88 5.88 0 00-2.13 1.38A5.88 5.88 0 00.63 4.14C.33 4.9.13 5.78.07 7.05.01 8.33 0 8.74 0 12s.01 3.67.07 4.95c.06 1.27.26 2.15.56 2.91.31.79.73 1.46 1.38 2.13a5.88 5.88 0 002.13 1.38c.76.3 1.64.5 2.91.56C8.33 23.99 8.74 24 12 24s3.67-.01 4.95-.07c1.27-.06 2.15-.26 2.91-.56a5.88 5.88 0 002.13-1.38 5.88 5.88 0 001.38-2.13c.3-.76.5-1.64.56-2.91.06-1.28.07-1.69.07-4.95s-.01-3.67-.07-4.95c-.06-1.27-.26-2.15-.56-2.91a5.88 5.88 0 00-1.38-2.13A5.88 5.88 0 0019.86.63C19.1.33 18.22.13 16.95.07 15.67.01 15.26 0 12 0zm0 5.84a6.16 6.16 0 100 12.32 6.16 6.16 0 000-12.32zm0 10.16a4 4 0 110-8 4 4 0 010 8zm6.4-11.85a1.44 1.44 0 100 2.88 1.44 1.44 0 000-2.88z'],
          'tiktok'    => ['vb' => 24, 'color' => '#25F4EE', 'd' => 'M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5.8 20.1a6.34 6.34 0 0 0 10.86-4.43V8.36a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1.84-.4z'],
          'linkedin'  => ['vb' => 24, 'color' => '#0A66C2', 'd' => 'M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 1 1 0-4.124 2.062 2.062 0 0 1 0 4.124zM7.114 20.452H3.558V9h3.556v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z'],
          'bbb'       => ['vb' => 50, 'color' => '#3B6BC4', 'd' => 'M 9.2832031 4 C 7.488935 4 5.9052102 5.2051958 5.4277344 6.9355469 L 2 19.365234 L 2 19.5 C 2 23.078268 4.9217323 26 8.5 26 C 10.813035 26 12.845511 24.77516 13.998047 22.945312 C 15.146939 24.778014 17.180833 26 19.5 26 C 21.819167 26 23.853061 24.778014 25.001953 22.945312 C 26.154489 24.77516 28.186965 26 30.5 26 C 32.813993 26 34.847721 24.77447 36 22.943359 C 37.152279 24.77447 39.186007 26 41.5 26 C 45.078268 26 48 23.078268 48 19.5 L 48 19.365234 L 44.570312 6.9355469 C 44.092963 5.2056548 42.509782 4 40.714844 4 L 9.2832031 4 z M 9.2832031 6 L 14.851562 6 L 13.197266 18 L 4.4511719 18 L 7.3554688 7.46875 C 7.5959929 6.597101 8.3794712 6 9.2832031 6 z M 26 6 L 33.128906 6 L 34.783203 18 L 26 18 L 26 6 z M 15 18 L 24 18 L 24 19.5 C 24 19.668891 24.012611 19.834272 24.025391 20 L 15 20 L 15 19.5 L 15 18 z M 36.802734 18 L 45.548828 18 L 45.984375 19.580078 C 45.981749 19.724009 45.951091 19.859765 45.935547 20 L 37.050781 20 C 37.032383 19.833631 37 19.67153 37 19.5 L 37 19.431641 L 36.802734 18 z M 4.0644531 20 L 12.949219 20 C 12.699714 22.256206 10.826202 24 8.5 24 C 6.175282 24 4.3143567 22.254621 4.0644531 20 z M 26.099609 20 L 34.900391 20 C 34.642986 22.247621 32.820142 24 30.5 24 C 28.179858 24 26.357014 22.247621 26.099609 20 z M 14 25.974609 C 12.517 27.235609 10.599 28 8.5 28 C 6.845 28 5.306 27.519172 4 26.701172 L 4 43 C 4 44.654 5.346 46 7 46 L 43 46 C 44.654 46 46 44.654 46 43 L 46 26.701172 C 44.694 27.519172 43.155 28 41.5 28 C 39.401 28 37.483 27.235609 36 25.974609 C 34.517 27.235609 32.599 28 30.5 28 C 28.401 28 26.483 27.235609 25 25.974609 C 23.517 27.235609 21.599 28 19.5 28 C 17.401 28 15.483 27.235609 14 25.974609 z M 35.5 29 C 37.546 29 39.372453 29.952547 40.564453 31.435547 L 39.132812 32.867188 C 38.314813 31.740187 36.996 31 35.5 31 C 33.019 31 31 33.019 31 35.5 C 31 37.981 33.019 40 35.5 40 C 37.453 40 39.102609 38.742 39.724609 37 L 36 37 L 36 35 L 41.974609 35 C 41.986609 35.166 42 35.331 42 35.5 C 42 39.084 39.084 42 35.5 42 C 31.916 42 29 39.084 29 35.5 C 29 31.916 31.916 29 35.5 29 z'],
          'gmb'       => ['vb' => 30, 'color' => '#4285F4', 'd' => 'M11.166 20.194c.806.577 2.809 1.923 3.222 2.358.412.435.023 1.099.023 1.099l.618.252c.137-.298.962-1.397 1.511-2.084.496-.62.926-1.706.941-2.503.047-2.572-3.367-3.794-4.949-5.237-.778-.71-.16-1.122-.16-1.122l-.527-.343C9.808 14.926 7.662 17.686 11.166 20.194zM12.922 11.605c1.969 1.74 5.435 3.548 5.679 4.717.318 1.523-.412 2.382-.412 2.382l.394.321c.213-.304.451-.591.67-.891.892-1.222 1.752-2.463 2.629-3.695 2.004-2.818 1.254-5.49-1.765-7.648-1.537-1.098-3.032-2.26-4.584-3.339-.871-.733-.275-2.107-.275-2.107l-.367-.32c0 0-3.286 3.984-3.573 5.588C11.045 8.148 10.953 9.865 12.922 11.605zM23 27L22.341 25 7.659 25 7 27 11.19 27 11.822 29 18.217 29 18.816 27z'],
        ];
        $b = $brands[$name] ?? null;
        if (!$b) return '';
        return '<svg class="ur-nav-ic ur-nav-ic--brand" viewBox="0 0 ' . $b['vb'] . ' ' . $b['vb'] . '" fill="currentColor" aria-hidden="true" style="--brand:' . $b['color'] . '"><path d="' . $b['d'] . '"/></svg>';
      };

      $ur_services_menu = [
        ['label' => 'Residential Roof Replacement', 'label_es' => 'Reemplazo de Techo Residencial',            'label_vi' => 'Thay Mái Nhà Ở',                  'link' => '/services/residential-roof-replacement'],
        ['label' => 'Storm & Hail Damage Repair',    'label_es' => 'Reparación de Daños por Tormenta y Granizo', 'label_vi' => 'Sửa Chữa Hư Hỏng Do Bão & Mưa Đá', 'link' => '/services/storm-hail-damage-repair'],
        ['label' => 'Roof Maintenance & Inspections','label_es' => 'Mantenimiento e Inspecciones de Techo',      'label_vi' => 'Bảo Trì & Kiểm Tra Mái Nhà',       'link' => '/services/roof-maintenance-inspections'],
        // Temporalmente oculto a pedido del cliente — no borrar, solo descomentar para reactivar.
        // ['label' => 'Commercial & Flat Roofing',      'label_es' => 'Techado Comercial y Plano',                 'label_vi' => 'Mái Nhà Thương Mại & Mái Bằng',    'link' => '/services/commercial-flat-roofing'],
        ['label' => 'HOA Roofing Programs',           'label_es' => 'Programas de Techado para HOA',             'label_vi' => 'Chương Trình Mái Nhà cho HOA',     'link' => '/services/hoa-roofing-programs'],
      ];
    ?>

    <header class="ur-nav js-ur-nav" data-state="top">
      <div class="ur-topbar">
        <div class="ur-topbar__inner">
          <div class="ur-topbar__contact">
            <a href="tel:+18327392842" class="ur-topbar__item">
              <?php echo $ur_nav_icon('phone'); ?><span>(832) 739-2842</span>
            </a>
            <a href="mailto:info@urenaroofing.com" class="ur-topbar__item">
              <?php echo $ur_nav_icon('mail'); ?><span>info@urenaroofing.com</span>
            </a>
          </div>

          <div class="ur-topbar__location">
            <?php echo $ur_nav_icon('pin'); ?><span>Houston, TX &middot; Cypress Creek Pkwy</span>
          </div>

          <div class="ur-topbar__social">
            <a href="https://www.facebook.com/UrenaRoofingHouston" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><?php echo $ur_brand_icon('facebook'); ?></a>
            <a href="<?php echo esc_url('https://www.instagram.com/urena.roofing/?hl=es'); ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><?php echo $ur_brand_icon('instagram'); ?></a>
            <a href="<?php echo esc_url('https://www.tiktok.com/@urena.roofing?_r=1&_t=ZP-98lutt21xsc'); ?>" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><?php echo $ur_brand_icon('tiktok'); ?></a>
            <a href="https://www.linkedin.com/company/urenaroofing-contractorllc/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><?php echo $ur_brand_icon('linkedin'); ?></a>
            <a href="https://www.bbb.org/us/tx/houston/profile/roofing-contractors/urena-roofing-contractor-llc-0915-90064966" target="_blank" rel="noopener noreferrer" aria-label="Better Business Bureau"><?php echo $ur_brand_icon('bbb'); ?></a>
            <a href="<?php echo esc_url('https://www.google.com/maps/place//@29.9960413,-95.4851544,17z/data=!3m1!4b1!4m3!3m2!1s0x8640c598e8eb037f:0x356cbf4a13651a2!12e1?entry=ttu&g_ep=EgoyMDI2MDgwNS4xIKXMDSoASAFQAw%3D%3D'); ?>" target="_blank" rel="noopener noreferrer" aria-label="Google Maps"><?php echo $ur_brand_icon('gmb'); ?></a>
          </div>
        </div>
      </div>

      <div class="ur-nav__bar">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="ur-nav__logo" aria-label="Urena Roofing Contractor, Home" data-en-aria="Urena Roofing Contractor, Home" data-es-aria="Ureña Roofing Contractor, Home" data-vi-aria="Urena Roofing Contractor, Home">
          <img src="<?php echo esc_url($logo_navy); ?>" alt="Urena Roofing Contractor LLC" data-en-alt="Urena Roofing Contractor LLC" data-es-alt="Ureña Roofing Contractor LLC" data-vi-alt="Urena Roofing Contractor LLC">
        </a>

        <!-- Desktop menu -->
        <nav class="ur-nav__menu" aria-label="Primary">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="ur-nav__link"><span data-en="Home" data-es="Inicio" data-vi="Trang Chủ">Home</span></a>
          <a href="<?php echo esc_url(home_url('/about')); ?>" class="ur-nav__link"><span data-en="About" data-es="Nosotros" data-vi="Giới Thiệu">About</span></a>

          <div class="ur-nav__dropdown js-ur-dropdown">
            <button type="button" class="ur-nav__link ur-nav__link--dropdown js-ur-dropdown-trigger" aria-expanded="false">
              <span data-en="Services" data-es="Servicios" data-vi="Dịch Vụ">Services</span> <?php echo $ur_nav_icon('chevron'); ?>
            </button>
            <div class="ur-nav__panel">
              <a href="<?php echo esc_url(home_url('/services')); ?>" class="ur-nav__panel-all"><span data-en="All Services" data-es="Todos los Servicios" data-vi="Tất Cả Dịch Vụ">All Services</span> <?php echo $ur_nav_icon('arrow'); ?></a>
              <ul>
                <?php foreach ($ur_services_menu as $s) : ?>
                  <li><a href="<?php echo esc_url(home_url($s['link'])); ?>"><span data-en="<?php echo esc_attr($s['label']); ?>" data-es="<?php echo esc_attr($s['label_es']); ?>" data-vi="<?php echo esc_attr($s['label_vi']); ?>"><?php echo esc_html($s['label']); ?></span></a></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>

          <a href="<?php echo esc_url(home_url('/service-areas')); ?>" class="ur-nav__link"><span data-en="Service Areas" data-es="Áreas de Servicio" data-vi="Khu Vực Phục Vụ">Service Areas</span></a>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="ur-nav__link"><span data-en="Contact" data-es="Contacto" data-vi="Liên Hệ">Contact</span></a>
        </nav>

        <!-- Right cluster -->
        <div class="ur-nav__actions">
          <!-- Selector EN/ES/VI: guarda cookie + clase en <html>, y swapea el texto de todo lo que
               tenga atributos data-en/data-es/data-vi (ver initLanguageToggle en navbar.js). -->
          <div class="ur-nav__lang" role="group" aria-label="Switch language">
            <button type="button" class="ur-nav__lang-btn js-ur-lang-btn is-active" data-lang="en">EN</button><span class="ur-nav__lang-sep">/</span><button type="button" class="ur-nav__lang-btn js-ur-lang-btn" data-lang="es">ES</button><span class="ur-nav__lang-sep">/</span><button type="button" class="ur-nav__lang-btn js-ur-lang-btn" data-lang="vi">VI</button>
          </div>

          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="ur-nav__cta"><span data-en="Get Free Estimate" data-es="Estimado Gratis" data-vi="Nhận Báo Giá Miễn Phí">Get Free Estimate</span></a>

          <button type="button" class="ur-nav__burger js-ur-menu-toggle" aria-label="Open menu" aria-expanded="false">
            <?php echo $ur_nav_icon('menu'); ?>
          </button>
        </div>
      </div>
    </header>

    <!-- Mobile menu -->
    <div class="ur-mnav js-ur-mnav" aria-hidden="true">
      <div class="ur-mnav__backdrop js-ur-menu-close"></div>
      <div class="ur-mnav__panel">
        <div class="ur-mnav__top">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="ur-nav__logo">
            <img src="<?php echo esc_url($logo_navy); ?>" alt="Urena Roofing Contractor LLC" data-en-alt="Urena Roofing Contractor LLC" data-es-alt="Ureña Roofing Contractor LLC" data-vi-alt="Urena Roofing Contractor LLC">
          </a>
          <button type="button" class="ur-mnav__close js-ur-menu-close" aria-label="Close menu">
            <?php echo $ur_nav_icon('x'); ?>
          </button>
        </div>

        <nav class="ur-mnav__links" aria-label="Mobile">
          <a href="<?php echo esc_url(home_url('/')); ?>"><span data-en="Home" data-es="Inicio" data-vi="Trang Chủ">Home</span></a>
          <a href="<?php echo esc_url(home_url('/about')); ?>"><span data-en="About" data-es="Nosotros" data-vi="Giới Thiệu">About</span></a>

          <div class="ur-mnav__group">
            <button type="button" class="js-ur-mdropdown-trigger" aria-expanded="false">
              <span data-en="Services" data-es="Servicios" data-vi="Dịch Vụ">Services</span> <?php echo $ur_nav_icon('chevron'); ?>
            </button>
            <div class="ur-mnav__subpanel">
              <a href="<?php echo esc_url(home_url('/services')); ?>" class="ur-mnav__subpanel-all"><span data-en="All Services" data-es="Todos los Servicios" data-vi="Tất Cả Dịch Vụ">All Services</span></a>
              <?php foreach ($ur_services_menu as $s) : ?>
                <a href="<?php echo esc_url(home_url($s['link'])); ?>"><span data-en="<?php echo esc_attr($s['label']); ?>" data-es="<?php echo esc_attr($s['label_es']); ?>" data-vi="<?php echo esc_attr($s['label_vi']); ?>"><?php echo esc_html($s['label']); ?></span></a>
              <?php endforeach; ?>
            </div>
          </div>

          <a href="<?php echo esc_url(home_url('/service-areas')); ?>"><span data-en="Service Areas" data-es="Áreas de Servicio" data-vi="Khu Vực Phục Vụ">Service Areas</span></a>
          <a href="<?php echo esc_url(home_url('/contact')); ?>"><span data-en="Contact" data-es="Contacto" data-vi="Liên Hệ">Contact</span></a>
        </nav>

        <div class="ur-mnav__footer">
          <!-- Mismo selector de idioma que el desktop — antes el menú mobile no
               tenía forma de cambiar de idioma. -->
          <div class="ur-mnav__lang" role="group" aria-label="Switch language">
            <button type="button" class="ur-nav__lang-btn js-ur-lang-btn is-active" data-lang="en">EN</button><span class="ur-nav__lang-sep">/</span><button type="button" class="ur-nav__lang-btn js-ur-lang-btn" data-lang="es">ES</button><span class="ur-nav__lang-sep">/</span><button type="button" class="ur-nav__lang-btn js-ur-lang-btn" data-lang="vi">VI</button>
          </div>
          <a href="tel:+18327392842" class="ur-mnav__call">
            <?php echo $ur_nav_icon('phone'); ?><span data-en="Call (832) 739-2842" data-es="Llamar (832) 739-2842" data-vi="Gọi (832) 739-2842">Call (832) 739-2842</span>
          </a>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="ur-nav__cta ur-nav__cta--block"><span data-en="Get Free Estimate" data-es="Estimado Gratis" data-vi="Nhận Báo Giá Miễn Phí">Get Free Estimate</span></a>
        </div>
      </div>
    </div>

    <!-- Spacer para compensar el navbar fixed -->
    <div class="ur-nav__spacer" aria-hidden="true"></div>