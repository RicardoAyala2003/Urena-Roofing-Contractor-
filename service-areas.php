<?php
/**
 * Template Name: Service Areas Page
 *
 * Ureña Roofing Contractor LLC — Service Areas
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="ur-areas-page bg-white text-[#14131F] overflow-hidden">

  <?php
    // ------------------------------------------------------------
    // ICONOS
    // ------------------------------------------------------------
    $icons = [
      'pin'       => '<path d="M12 22s7-6.7 7-12.4A7 7 0 1 0 5 9.6C5 15.3 12 22 12 22z"/><circle cx="12" cy="9.5" r="2.4"/>',
      'home'      => '<path d="M4 11 12 4l8 7"/><path d="M6 10v10h12V10"/>',
      'users'     => '<circle cx="9" cy="8" r="3"/><path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"/><circle cx="17" cy="9" r="2.4"/><path d="M15.5 14a4.6 4.6 0 0 1 5.5 4.5"/>',
      'cloud'     => '<path d="M7 18a4 4 0 0 1-1-7.9A5 5 0 0 1 15.9 8 4.5 4.5 0 0 1 17 18z"/><path d="m10 20 1.5-3"/><path d="m14 20 1.5-3"/>',
      'building'  => '<rect x="5" y="3" width="14" height="18"/><path d="M9 8h1M14 8h1M9 12h1M14 12h1M9 16h1M14 16h1"/>',
      'church'    => '<path d="M12 2v6"/><path d="M9 5h6"/><path d="M6 22V11l6-4 6 4v11"/><path d="M10 22v-6h4v6"/>',
      'arrow'     => '<path d="M5 12h14"/><path d="m13 6 6 6-6 6"/>',
      'external'  => '<path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><path d="M15 3h6v6"/><path d="M10 14 21 3"/>',
      'plus'      => '<path d="M12 5v14"/><path d="M5 12h14"/>',
    ];
    $icon = function ($name, $extra_class = '') use ($icons) {
      $paths = $icons[$name] ?? '';
      return '<svg class="ur-ic ' . esc_attr($extra_class) . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $paths . '</svg>';
    };

    // ------------------------------------------------------------
    // MAPS LINK — arma la búsqueda real de Google Maps por zona
    // ------------------------------------------------------------
    $maps_link = function ($query) {
      return 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode($query);
    };

    // ------------------------------------------------------------
    // DATA — 3 bloques, cada zona con su copy exacto del brief
    // ------------------------------------------------------------
    $blocks = [
      [
        'key'   => 'premium',
        'label' => 'Premium Areas',
        'label_es' => 'Áreas Premium',
        'label_vi' => 'Khu Vực Cao Cấp',
        'intro' => 'Established, high-value neighborhoods where homeowners expect precision, premium materials, and long-term warranties.',
        'intro_es' => 'Vecindarios consolidados y de alto valor donde los propietarios esperan precisión, materiales premium y garantías a largo plazo.',
        'intro_vi' => 'Những khu dân cư lâu đời, giá trị cao, nơi chủ nhà kỳ vọng sự chính xác, vật liệu cao cấp và bảo hành dài hạn.',
        'areas' => [
          ['name' => 'Bellaire',        'zip' => '77401', 'tag' => 'Residential', 'tag_es' => 'Residencial', 'tag_vi' => 'Nhà Ở', 'icon' => 'home',  'copy' => 'Premium roofing with guaranteed craftsmanship and energy-efficient materials.', 'copy_es' => 'Techado premium con mano de obra garantizada y materiales de eficiencia energética.', 'copy_vi' => 'Mái nhà cao cấp với tay nghề được bảo đảm và vật liệu tiết kiệm năng lượng.'],
          ['name' => 'West University', 'zip' => '77005', 'tag' => 'Residential', 'tag_es' => 'Residencial', 'tag_vi' => 'Nhà Ở', 'icon' => 'home',  'copy' => 'Excellence and precision: zero interruptions, complete documentation.', 'copy_es' => 'Excelencia y precisión: cero interrupciones, documentación completa.', 'copy_vi' => 'Chất lượng xuất sắc và chính xác: không gián đoạn, hồ sơ đầy đủ.'],
          ['name' => 'Memorial',        'zip' => '77024', 'tag' => 'Residential', 'tag_es' => 'Residencial', 'tag_vi' => 'Nhà Ở', 'icon' => 'home',  'copy' => 'Precision roofing solutions for discerning homeowners.', 'copy_es' => 'Soluciones de techado de precisión para propietarios exigentes.', 'copy_vi' => 'Giải pháp lợp mái chính xác dành cho những chủ nhà khó tính.'],
          ['name' => 'Houston Heights', 'zip' => '77008', 'tag' => 'Residential', 'tag_es' => 'Residencial', 'tag_vi' => 'Nhà Ở', 'icon' => 'home',  'copy' => 'Beautiful, design-forward roofing. See our before & after transformations.', 'copy_es' => 'Techado hermoso y de vanguardia en diseño. Mira nuestras transformaciones de antes y después.', 'copy_vi' => 'Mái nhà đẹp, thiết kế hiện đại. Xem những chuyển đổi trước và sau của chúng tôi.'],
          ['name' => 'Sugar Land',      'zip' => '77479', 'tag' => 'HOA',         'tag_es' => 'HOA',         'tag_vi' => 'HOA', 'icon' => 'users', 'copy' => 'Professional, dependable roofing for growing communities and HOAs.', 'copy_es' => 'Techado profesional y confiable para comunidades en crecimiento y HOAs.', 'copy_vi' => 'Dịch vụ lợp mái chuyên nghiệp, đáng tin cậy cho các cộng đồng đang phát triển và HOA.'],
        ],
      ],
      [
        'key'   => 'storm',
        'label' => 'Storm-Prone Areas',
        'label_es' => 'Áreas Propensas a Tormentas',
        'label_vi' => 'Khu Vực Dễ Bị Bão',
        'intro' => 'Communities most affected by severe weather, where fast, insurance-ready response matters most.',
        'intro_es' => 'Comunidades más afectadas por el clima severo, donde la respuesta rápida y lista para el seguro es más importante.',
        'intro_vi' => 'Những cộng đồng chịu ảnh hưởng nặng nề nhất từ thời tiết khắc nghiệt, nơi phản ứng nhanh và sẵn sàng hỗ trợ bảo hiểm là quan trọng nhất.',
        'areas' => [
          ['name' => 'Clear Lake',    'zip' => '77059', 'display' => null, 'tag' => 'Storm Response', 'tag_es' => 'Respuesta a Tormentas', 'tag_vi' => 'Ứng Phó Bão', 'icon' => 'cloud', 'copy' => 'Storm-resistant roofing and rapid emergency response for growing families.', 'copy_es' => 'Techado resistente a tormentas y respuesta rápida de emergencia para familias en crecimiento.', 'copy_vi' => 'Mái nhà chống chịu bão và phản ứng khẩn cấp nhanh chóng cho các gia đình đang phát triển.'],
          ['name' => '77084 / 77095', 'zip' => null,     'display' => '77084', 'tag' => 'Storm Response', 'tag_es' => 'Respuesta a Tormentas', 'tag_vi' => 'Ứng Phó Bão', 'icon' => 'cloud', 'copy' => 'Fair pricing, fast turnaround, and roofing solutions your neighbors trust.', 'copy_es' => 'Precios justos, tiempos rápidos, y soluciones de techado en las que confían tus vecinos.', 'copy_vi' => 'Giá cả hợp lý, thời gian hoàn thành nhanh, và giải pháp lợp mái được hàng xóm của bạn tin tưởng.'],
          ['name' => 'Spring / Klein','zip' => null,     'display' => 'Spring', 'tag' => 'Storm Response', 'tag_es' => 'Respuesta a Tormentas', 'tag_vi' => 'Ứng Phó Bão', 'icon' => 'cloud', 'copy' => 'Reliable hail and wind damage repair, backed by insurance claim support.', 'copy_es' => 'Reparación confiable de daños por granizo y viento, respaldada por apoyo en reclamos de seguro.', 'copy_vi' => 'Sửa chữa đáng tin cậy các hư hỏng do mưa đá và gió, được hỗ trợ bởi dịch vụ xử lý yêu cầu bồi thường bảo hiểm.'],
        ],
      ],
      [
        'key'   => 'growing',
        'label' => 'Growing Communities',
        'label_es' => 'Comunidades en Crecimiento',
        'label_vi' => 'Cộng Đồng Đang Phát Triển',
        'intro' => 'Expanding suburbs where new construction and preventive maintenance go hand in hand.',
        'intro_es' => 'Suburbios en expansión donde la construcción nueva y el mantenimiento preventivo van de la mano.',
        'intro_vi' => 'Các vùng ngoại ô đang mở rộng, nơi xây dựng mới và bảo trì phòng ngừa luôn song hành.',
        'areas' => [
          ['name' => 'Katy',     'zip' => null, 'tag' => 'Residential', 'tag_es' => 'Residencial', 'tag_vi' => 'Nhà Ở', 'icon' => 'home', 'copy' => "New roofs and long-term maintenance for Houston's fastest-growing suburb.", 'copy_es' => 'Techos nuevos y mantenimiento a largo plazo para el suburbio de más rápido crecimiento de Houston.', 'copy_vi' => 'Mái nhà mới và bảo trì dài hạn cho khu ngoại ô phát triển nhanh nhất Houston.'],
          ['name' => 'Cypress',  'zip' => null, 'tag' => 'Residential', 'tag_es' => 'Residencial', 'tag_vi' => 'Nhà Ở', 'icon' => 'home', 'copy' => 'Trusted roofing for new and growing neighborhoods.', 'copy_es' => 'Techado de confianza para vecindarios nuevos y en crecimiento.', 'copy_vi' => 'Dịch vụ lợp mái đáng tin cậy cho các khu dân cư mới và đang phát triển.'],
          ['name' => 'Fulshear', 'zip' => null, 'tag' => 'Residential', 'tag_es' => 'Residencial', 'tag_vi' => 'Nhà Ở', 'icon' => 'home', 'copy' => 'Building trust roof by roof as Fulshear grows.', 'copy_es' => 'Construyendo confianza techo a techo mientras Fulshear crece.', 'copy_vi' => 'Xây dựng niềm tin từng mái nhà một khi Fulshear ngày càng phát triển.'],
          ['name' => 'Richmond', 'zip' => null, 'tag' => 'Residential', 'tag_es' => 'Residencial', 'tag_vi' => 'Nhà Ở', 'icon' => 'home', 'copy' => 'Dependable roofing solutions for new and established homes alike.', 'copy_es' => 'Soluciones de techado confiables tanto para casas nuevas como establecidas.', 'copy_vi' => 'Giải pháp lợp mái đáng tin cậy cho cả nhà mới lẫn nhà đã xây dựng lâu năm.'],
        ],
      ],
    ];

    $sa_faqs = [
      ['q' => 'What if my neighborhood isn\'t listed above?', 'q_es' => '¿Qué pasa si mi vecindario no está en la lista de arriba?', 'q_vi' => 'Nếu khu dân cư của tôi không có trong danh sách trên thì sao?', 'a' => 'We probably still cover it. Contact us with your address or ZIP code and we\'ll confirm coverage right away.', 'a_es' => 'Probablemente igual lo cubrimos. Contáctanos con tu dirección o código postal y confirmaremos la cobertura de inmediato.', 'a_vi' => 'Rất có thể chúng tôi vẫn phục vụ khu vực đó. Hãy liên hệ với chúng tôi kèm địa chỉ hoặc mã ZIP, chúng tôi sẽ xác nhận phạm vi phục vụ ngay lập tức.'],
      ['q' => 'Do you serve HOAs and multifamily communities, not just single homes?', 'q_es' => '¿Atienden a HOAs y comunidades multifamiliares, no solo casas individuales?', 'q_vi' => 'Quý công ty có phục vụ HOA và các cộng đồng đa hộ gia đình, không chỉ nhà ở riêng lẻ không?', 'a' => 'Yes. We work with HOA boards, property managers, and church administrators throughout Houston on scheduled inspections and maintenance contracts, not just individual homeowners.', 'a_es' => 'Sí. Trabajamos con juntas de HOA, administradores de propiedades y administradores de iglesias en todo Houston en inspecciones programadas y contratos de mantenimiento, no solo con propietarios individuales.', 'a_vi' => 'Có. Chúng tôi hợp tác với ban quản trị HOA, quản lý bất động sản và quản lý nhà thờ trên khắp Houston để thực hiện các đợt kiểm tra định kỳ và hợp đồng bảo trì, không chỉ với các chủ nhà cá nhân.'],
      ['q' => 'Can I see photos of work you\'ve done near me?', 'q_es' => '¿Puedo ver fotos de trabajos que hayan hecho cerca de mí?', 'q_vi' => 'Tôi có thể xem hình ảnh các công trình quý công ty đã thực hiện gần khu vực của tôi không?', 'a' => 'Yes. Check out our before-and-after gallery on the homepage for real project photos from across Houston-area neighborhoods.', 'a_es' => 'Sí. Consulta nuestra galería de antes y después en la página principal para ver fotos reales de proyectos en vecindarios de toda el área de Houston.', 'a_vi' => 'Có. Hãy xem thư viện ảnh trước và sau trên trang chủ để thấy hình ảnh thực tế các dự án tại các khu dân cư khắp khu vực Houston.'],
    ];

    // Mapa de todos los pines para el hero (nombre + posición aproximada, decorativo)
    $hero_pins = [
      ['label' => 'HOUSTON HEIGHTS', 'top' => '18%', 'left' => '46%', 'delay' => '0s'],
      ['label' => 'MEMORIAL',        'top' => '30%', 'left' => '30%', 'delay' => '.3s'],
      ['label' => 'SUGAR LAND',      'top' => '68%', 'left' => '38%', 'delay' => '.6s'],
      ['label' => 'CLEAR LAKE',      'top' => '78%', 'left' => '62%', 'delay' => '.9s'],
      ['label' => 'KATY',            'top' => '40%', 'left' => '14%', 'delay' => '1.2s'],
      ['label' => 'CYPRESS',         'top' => '16%', 'left' => '20%', 'delay' => '1.5s'],
    ];
  ?>

  <!-- ============================================================ -->
  <!-- HERO — mapa estilizado en vez de foto                        -->
  <!-- ============================================================ -->
  <section class="ur-sa-hero relative isolate flex min-h-[520px] items-center overflow-hidden text-white lg:min-h-[600px]">
    <div class="ur-radar" aria-hidden="true">
      <span class="ur-radar__ring ur-radar__ring--1"></span>
      <span class="ur-radar__ring ur-radar__ring--2"></span>
      <span class="ur-radar__ring ur-radar__ring--3"></span>
      <span class="ur-radar__sweep"></span>
    </div>

    <div class="ur-sa-hero__pins" aria-hidden="true">
      <?php foreach ($hero_pins as $p) : ?>
        <span class="ur-sa-hero__pin" style="top:<?php echo esc_attr($p['top']); ?>; left:<?php echo esc_attr($p['left']); ?>; --d:<?php echo esc_attr($p['delay']); ?>;">
          <span class="ur-sa-hero__pin-dot"></span>
          <span class="ur-sa-hero__pin-label"><?php echo esc_html($p['label']); ?></span>
        </span>
      <?php endforeach; ?>
    </div>

    <div class="relative z-10 mx-auto max-w-3xl px-4 text-center">
      <p class="ur-eyebrow ur-eyebrow--light ur-fade-in-0" data-en="Service Areas" data-es="Áreas de Servicio" data-vi="Khu Vực Phục Vụ">Service Areas</p>
      <h1 class="mt-5 text-4xl font-black uppercase leading-[0.98] tracking-[-0.01em] md:text-6xl" data-en="Roofing Services Across Greater Houston" data-es="Servicios de Techado en Toda el Área de Houston" data-vi="Dịch Vụ Lợp Mái Khắp Khu Vực Houston">
        <?php
          $hero_words = explode(' ', 'Roofing Services Across Greater Houston');
          foreach ($hero_words as $i => $word) : ?>
            <span class="ur-word"><span class="ur-word__inner" style="--i:<?php echo (int) $i; ?>"><?php echo esc_html($word); ?></span></span><?php echo ' '; ?>
          <?php endforeach; ?>
      </h1>
      <p class="ur-fade-in-2 mx-auto mt-6 max-w-2xl text-base leading-7 text-white/78 md:text-lg" data-en="From premium neighborhoods to storm-affected communities, Urena Roofing Contractor proudly serves homeowners, HOAs, and businesses throughout the Houston metro area." data-es="Desde vecindarios premium hasta comunidades afectadas por tormentas, Ureña Roofing Contractor atiende con orgullo a propietarios, HOAs y negocios en toda el área metropolitana de Houston." data-vi="Từ các khu dân cư cao cấp đến các cộng đồng chịu ảnh hưởng bởi bão, Urena Roofing Contractor tự hào phục vụ chủ nhà, HOA và doanh nghiệp trên khắp khu vực đô thị Houston.">
        From premium neighborhoods to storm-affected communities, Urena Roofing Contractor proudly
        serves homeowners, HOAs, and businesses throughout the Houston metro area.
      </p>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- ZONAS — tab switcher, un solo bloque en vez de secciones apiladas -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden bg-white py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="ur-reveal-up max-w-2xl">
        <p class="ur-eyebrow" data-en="Service Areas" data-es="Áreas de Servicio" data-vi="Khu Vực Phục Vụ">Service Areas</p>
        <h2 class="mt-3 text-2xl font-black uppercase leading-[1.05] tracking-[-0.01em] text-[#12103A] md:text-4xl" data-en="Explore Coverage By Area" data-es="Explora la Cobertura por Área" data-vi="Khám Phá Phạm Vi Phục Vụ Theo Khu Vực">Explore Coverage By Area</h2>
        <p class="mt-4 text-base leading-7 text-[#5B5F6B]" data-en="Three ways we show up for Houston. Pick a category to see the neighborhoods inside it." data-es="Tres formas en que estamos presentes en Houston. Elige una categoría para ver los vecindarios que incluye." data-vi="Ba cách chúng tôi hiện diện tại Houston. Chọn một hạng mục để xem các khu dân cư trong đó.">Three ways we show up for Houston. Pick a category to see the neighborhoods inside it.</p>
      </div>

      <div class="ur-sa-tabs js-ur-sa-tabs ur-reveal-up mt-10" role="tablist" aria-label="Service area categories" style="grid-template-columns:repeat(<?php echo count($blocks); ?>,1fr)">
        <span class="ur-sa-tabs__indicator js-ur-sa-indicator" aria-hidden="true" style="width:calc(100% / <?php echo count($blocks); ?>)"></span>
        <?php foreach ($blocks as $bi => $block) : ?>
          <button
            type="button"
            class="ur-sa-tabs__tab js-ur-sa-tab<?php echo $bi === 0 ? ' is-active' : ''; ?>"
            role="tab"
            id="ur-sa-tab-<?php echo esc_attr($block['key']); ?>"
            aria-controls="ur-sa-panel-<?php echo esc_attr($block['key']); ?>"
            aria-selected="<?php echo $bi === 0 ? 'true' : 'false'; ?>"
            tabindex="<?php echo $bi === 0 ? '0' : '-1'; ?>"
            data-index="<?php echo (int) $bi; ?>"
          >
            <span class="ur-sa-tabs__num"><?php echo esc_html(str_pad($bi + 1, 2, '0', STR_PAD_LEFT)); ?></span>
            <span class="ur-sa-tabs__label" data-en="<?php echo esc_attr($block['label']); ?>" data-es="<?php echo esc_attr($block['label_es']); ?>" data-vi="<?php echo esc_attr($block['label_vi']); ?>"><?php echo esc_html($block['label']); ?></span>
            <span class="ur-sa-tabs__count"><?php echo count($block['areas']); ?></span>
          </button>
        <?php endforeach; ?>
      </div>

      <?php foreach ($blocks as $bi => $block) : ?>
        <div
          class="ur-sa-panel js-ur-sa-panel"
          id="ur-sa-panel-<?php echo esc_attr($block['key']); ?>"
          role="tabpanel"
          aria-labelledby="ur-sa-tab-<?php echo esc_attr($block['key']); ?>"
          <?php echo $bi !== 0 ? 'hidden' : ''; ?>
        >
          <p class="ur-sa-panel__intro"><span data-en="<?php echo esc_attr($block['intro']); ?>" data-es="<?php echo esc_attr($block['intro_es']); ?>" data-vi="<?php echo esc_attr($block['intro_vi']); ?>"><?php echo esc_html($block['intro']); ?></span></p>

          <div class="ur-sa-panel__grid<?php echo count($block['areas']) === 4 ? ' ur-sa-panel__grid--pair' : ''; ?>">
            <?php foreach ($block['areas'] as $area) :
              $short_name    = $area['display'] ?? $area['name'];
              $address_label = $area['zip'] ? 'ZIP ' . $area['zip'] : strtoupper($short_name);
              $maps_query    = $area['zip'] ? ($area['name'] . ' ' . $area['zip'] . ', TX') : ($short_name . ', TX');
              $map_embed_src = 'https://maps.google.com/maps?q=' . rawurlencode($maps_query) . '&z=12&output=embed';
            ?>
              <a
                href="<?php echo esc_url($maps_link($maps_query)); ?>"
                target="_blank" rel="noopener noreferrer"
                class="ur-reveal-stagger ur-area-card group"
              >
                <div class="ur-area-card__map-frame">
                  <iframe class="ur-area-card__map" src="<?php echo esc_url($map_embed_src); ?>" loading="lazy" tabindex="-1" aria-hidden="true"></iframe>
                  <span class="ur-area-card__pin" aria-hidden="true"></span>
                  <span class="ur-area-card__frame-tick ur-area-card__frame-tick--tl" aria-hidden="true"></span>
                  <span class="ur-area-card__frame-tick ur-area-card__frame-tick--br" aria-hidden="true"></span>
                </div>

                <div class="ur-area-card__body">
                  <span class="ur-area-card__tag"><?php echo $icon($area['icon'], 'h-3.5 w-3.5'); ?><span data-en="<?php echo esc_attr($area['tag']); ?>" data-es="<?php echo esc_attr($area['tag_es']); ?>" data-vi="<?php echo esc_attr($area['tag_vi']); ?>"><?php echo esc_html($area['tag']); ?></span> &middot; <?php echo esc_html($address_label); ?></span>
                  <h3 class="ur-area-card__name"><?php echo esc_html($area['name']); ?></h3>
                  <p class="ur-area-card__copy"><span data-en="<?php echo esc_attr($area['copy']); ?>" data-es="<?php echo esc_attr($area['copy_es']); ?>" data-vi="<?php echo esc_attr($area['copy_vi']); ?>"><?php echo esc_html($area['copy']); ?></span></p>
                  <span class="ur-area-card__cta"><span data-en="View on Google Maps" data-es="Ver en Google Maps" data-vi="Xem trên Google Maps">View on Google Maps</span> <?php echo $icon('external', 'h-3.5 w-3.5'); ?></span>
                </div>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- HOAs, CHURCHES & MULTIFAMILY                                  -->
  <!-- ============================================================ -->
  <section class="ur-sa-b2b relative isolate overflow-hidden py-20 text-white lg:py-24">
    <div class="relative mx-auto grid max-w-6xl gap-10 px-4 lg:grid-cols-[auto_1fr] lg:items-center">
      <div class="ur-reveal-left flex items-center gap-3">
        <span class="ur-sa-b2b__icon"><?php echo $icon('building', 'h-6 w-6'); ?></span>
        <span class="ur-sa-b2b__icon"><?php echo $icon('church', 'h-6 w-6'); ?></span>
        <span class="ur-sa-b2b__icon"><?php echo $icon('users', 'h-6 w-6'); ?></span>
      </div>
      <div class="ur-reveal-right">
        <p class="ur-eyebrow ur-eyebrow--light" data-en="B2B &amp; Communities" data-es="B2B y Comunidades" data-vi="B2B &amp; Cộng Đồng">B2B &amp; Communities</p>
        <h2 class="mt-3 text-2xl font-black uppercase leading-[1.05] tracking-[-0.01em] md:text-4xl" data-en="Serving HOAs, Churches, and Multifamily Communities" data-es="Atendemos HOAs, Iglesias y Comunidades Multifamiliares" data-vi="Phục Vụ HOA, Nhà Thờ và Cộng Đồng Đa Hộ Gia Đình">
          Serving HOAs, Churches, and Multifamily Communities
        </h2>
        <p class="mt-4 max-w-2xl text-base leading-7 text-white/78" data-en="We work with HOA boards, church administrators, and property managers across Houston to provide scheduled inspections, maintenance contracts, and fast, documented repairs, with zero surprises." data-es="Trabajamos con juntas de HOA, administradores de iglesias y administradores de propiedades en todo Houston para ofrecer inspecciones programadas, contratos de mantenimiento y reparaciones rápidas y documentadas, sin sorpresas." data-vi="Chúng tôi hợp tác với ban quản trị HOA, quản lý nhà thờ và quản lý bất động sản trên khắp Houston để cung cấp các đợt kiểm tra định kỳ, hợp đồng bảo trì, và sửa chữa nhanh chóng, có hồ sơ đầy đủ, không phát sinh bất ngờ.">
          We work with HOA boards, church administrators, and property managers across Houston to
          provide scheduled inspections, maintenance contracts, and fast, documented repairs,
          with zero surprises.
        </p>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- FAQ                                                           -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden bg-[#EEF1F5] py-20 lg:py-24">
    <div class="mx-auto max-w-3xl px-4">
      <div class="ur-reveal-up text-center">
        <p class="ur-eyebrow" data-en="FAQ" data-es="Preguntas Frecuentes" data-vi="Câu Hỏi Thường Gặp">FAQ</p>
        <h2 class="mt-3 text-2xl font-black uppercase leading-[1.05] tracking-[-0.01em] text-[#12103A] md:text-4xl" data-en="Coverage Questions" data-es="Preguntas Sobre Cobertura" data-vi="Câu Hỏi Về Phạm Vi Phục Vụ">Coverage Questions</h2>
      </div>

      <div class="js-ur-faq ur-reveal-up mt-10 space-y-3">
        <?php foreach ($sa_faqs as $faq) : ?>
          <div class="ur-faq-item">
            <button type="button" class="js-ur-faq-trigger ur-faq-item__trigger">
              <span class="ur-faq-item__icon"><?php echo $icon('plus', 'h-4 w-4'); ?></span>
              <span data-en="<?php echo esc_attr($faq['q']); ?>" data-es="<?php echo esc_attr($faq['q_es']); ?>" data-vi="<?php echo esc_attr($faq['q_vi']); ?>"><?php echo esc_html($faq['q']); ?></span>
            </button>
            <div class="ur-faq-item__panel">
              <p><span data-en="<?php echo esc_attr($faq['a']); ?>" data-es="<?php echo esc_attr($faq['a_es']); ?>" data-vi="<?php echo esc_attr($faq['a_vi']); ?>"><?php echo esc_html($faq['a']); ?></span></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php
    $faq_schema = ['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => []];
    foreach ($sa_faqs as $faq) {
      $faq_schema['mainEntity'][] = [
        '@type' => 'Question',
        'name' => $faq['q'],
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq['a']],
      ];
    }
  ?>
  <script type="application/ld+json"><?php echo wp_json_encode($faq_schema); ?></script>

  <!-- ============================================================ -->
  <!-- CTA DE CIERRE                                                 -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden bg-white py-20 text-center lg:py-24">
    <div class="relative mx-auto max-w-2xl px-4">
      <h2 class="ur-reveal-up text-3xl font-black uppercase leading-[1.05] tracking-[-0.01em] text-[#12103A] md:text-5xl" data-en="Don't See Your Area Listed? We Probably Still Cover It." data-es="¿No Ves tu Área en la Lista? Probablemente Igual la Cubrimos." data-vi="Không Thấy Khu Vực Của Bạn Trong Danh Sách? Có Thể Chúng Tôi Vẫn Phục Vụ.">
        Don't See Your Area Listed? We Probably Still Cover It.
      </h2>
      <div class="ur-reveal-up mt-9">
        <a href="/contact" class="ur-btn ur-btn-dark ur-magnetic inline-flex items-center justify-center gap-2 px-8 py-4 text-sm font-black uppercase tracking-[0.12em] text-white">
          <span data-en="Contact Us to Confirm Coverage" data-es="Contáctanos para Confirmar Cobertura" data-vi="Liên Hệ Để Xác Nhận Phạm Vi Phục Vụ">Contact Us to Confirm Coverage</span> <?php echo $icon('arrow', 'h-4 w-4'); ?>
        </a>
      </div>
    </div>
  </section>

</main>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@600;700;800;900&family=Public+Sans:wght@400;500;600;700;800&family=IBM+Plex+Mono:wght@500;600&display=swap');

  .ur-areas-page {
    --ur-navy:#12103A; --ur-navy-2:#221D5C; --ur-gold:#F6BE15; --ur-gold-deep:#C9910A;
    --ur-mist:#EEF1F5; --ur-ink:#14131F; --ur-slate:#5B5F6B; --ur-line: rgba(20,19,31,.1);
    --ur-radius:10px; --ur-radius-sm:6px;
    font-family:'Public Sans','Segoe UI',Arial,sans-serif;
  }
  .ur-areas-page h1,.ur-areas-page h2,.ur-areas-page h3{ font-family:'Big Shoulders Display','Arial Narrow',sans-serif; }
  .ur-areas-page a:focus-visible,.ur-areas-page button:focus-visible{ outline:2px solid var(--ur-gold); outline-offset:3px; }
  .ur-ic{ display:block; }

  .ur-eyebrow{ font-family:'IBM Plex Mono',monospace; font-size:.72rem; font-weight:600; letter-spacing:.18em; text-transform:uppercase; color:var(--ur-gold-deep); }
  .ur-eyebrow--light{ color:var(--ur-gold); }

  .ur-word{ display:inline-block; overflow:hidden; vertical-align:top; }
  .ur-word__inner{ display:inline-block; transform:translateY(115%); opacity:0; animation:urWordUp .9s cubic-bezier(.16,1,.3,1) forwards; animation-delay:calc(var(--i) * 80ms + 150ms); }
  @keyframes urWordUp{ to{ transform:translateY(0); opacity:1; } }
  .ur-fade-in-0,.ur-fade-in-2{ opacity:0; transform:translateY(16px); animation:urFadeUp .9s cubic-bezier(.16,1,.3,1) forwards; }
  .ur-fade-in-0{ animation-delay:.05s; } .ur-fade-in-2{ animation-delay:.7s; }
  @keyframes urFadeUp{ to{ opacity:1; transform:translateY(0); } }

  /* ---- Hero — radar + pines flotantes de las zonas ---- */
  .ur-sa-hero{ background:radial-gradient(120% 100% at 50% 0%, var(--ur-navy-2) 0%, var(--ur-navy) 60%); clip-path: polygon(0 0, 100% 0, 100% 96%, 0 100%); }
  .ur-radar{ position:absolute; top:50%; left:50%; width:900px; height:900px; transform:translate(-50%,-50%); pointer-events:none; }
  .ur-radar__ring{ position:absolute; inset:0; margin:auto; border:1px solid rgba(246,190,21,.14); border-radius:50%; }
  .ur-radar__ring--1{ width:30%; height:30%; } .ur-radar__ring--2{ width:60%; height:60%; } .ur-radar__ring--3{ width:100%; height:100%; }
  .ur-radar__sweep{
    position:absolute; inset:0; border-radius:50%;
    background:conic-gradient(from 0deg, transparent 0deg, rgba(246,190,21,.2) 35deg, transparent 95deg);
    animation:urRadarSpin 8s linear infinite;
  }
  @keyframes urRadarSpin{ to{ transform:rotate(360deg); } }

  .ur-sa-hero__pins{ position:absolute; inset:0; z-index:1; display:none; }
  .ur-sa-hero__pin{ position:absolute; display:flex; flex-direction:column; align-items:center; gap:.35rem; opacity:0; animation:urPinDrop .6s cubic-bezier(.22,1.5,.36,1) forwards; animation-delay:var(--d); }
  @keyframes urPinDrop{ 0%{ opacity:0; transform:translateY(-14px) scale(.6); } 100%{ opacity:1; transform:translateY(0) scale(1); } }
  .ur-sa-hero__pin-dot{ position:relative; width:8px; height:8px; border-radius:999px; background:var(--ur-gold); }
  .ur-sa-hero__pin-dot::after{
    content:''; position:absolute; inset:-6px; border-radius:999px; border:1px solid var(--ur-gold);
    opacity:0; animation:urPinPing 2.6s ease-out infinite; animation-delay:var(--d);
  }
  @keyframes urPinPing{ 0%{ opacity:.7; transform:scale(.6); } 100%{ opacity:0; transform:scale(2.2); } }
  .ur-sa-hero__pin-label{ font-family:'IBM Plex Mono',monospace; font-size:.6rem; font-weight:600; letter-spacing:.06em; color:rgba(255,255,255,.55); white-space:nowrap; }
  @media (min-width:1024px){ .ur-sa-hero__pins{ display:block; } }

  /* ---- Buttons ---- */
  .ur-btn{ position:relative; border:1px solid transparent; border-radius:var(--ur-radius-sm); transition:box-shadow .25s ease,background-color .25s ease,color .25s ease; }
  .ur-btn span{ position:relative; z-index:1; }
  .ur-btn-dark{ background:var(--ur-navy); box-shadow:0 16px 34px rgba(18,16,58,.24); }
  .ur-btn-dark:hover{ background:var(--ur-navy-2); }
  .ur-magnetic{ will-change:transform; }

  /* ---- Service area tabs — segmented control con indicador deslizante ---- */
  .ur-sa-tabs{
    position:relative; display:grid; gap:2px; background:var(--ur-mist); border:1px solid var(--ur-line); padding:6px;
    border-radius:var(--ur-radius);
  }
  .ur-sa-tabs__indicator{
    position:absolute; top:6px; bottom:6px; left:6px; z-index:0; border-radius:var(--ur-radius-sm);
    background:var(--ur-navy); transition:transform .45s cubic-bezier(.16,1,.3,1);
  }
  .ur-sa-tabs__tab{
    position:relative; z-index:1; display:flex; align-items:center; justify-content:center; gap:.5rem;
    padding:1rem .75rem; background:none; border:none; cursor:pointer; text-align:center;
    font-family:'IBM Plex Mono',monospace; font-size:.72rem; font-weight:700; letter-spacing:.05em;
    text-transform:uppercase; color:var(--ur-slate); transition:color .35s ease;
  }
  .ur-sa-tabs__tab.is-active{ color:#fff; }
  .ur-sa-tabs__num{ opacity:.55; }
  .ur-sa-tabs__count{
    display:inline-flex; align-items:center; justify-content:center; min-width:20px; height:20px; padding:0 5px;
    background:var(--ur-line); color:var(--ur-slate); font-size:.64rem; border-radius:var(--ur-radius-sm);
    transition:background-color .35s ease, color .35s ease;
  }
  .ur-sa-tabs__tab.is-active .ur-sa-tabs__count{ background:rgba(255,255,255,.16); color:#fff; }
  @media (max-width:640px){ .ur-sa-tabs__num{ display:none; } .ur-sa-tabs__tab{ font-size:.64rem; padding:.85rem .4rem; gap:.35rem; } }

  /* ---- Panels — crossfade suave al cambiar de tab ---- */
  .ur-sa-panel{ transition:opacity .4s cubic-bezier(.16,1,.3,1), transform .4s cubic-bezier(.16,1,.3,1); }
  .ur-sa-panel[hidden]{ display:none; }
  .ur-sa-panel.is-leaving{ opacity:0; transform:translateY(-10px); }
  .ur-sa-panel.is-entering{ opacity:0; transform:translateY(10px); }
  .ur-sa-panel__intro{ margin-top:1.75rem; max-width:52ch; font-size:14.5px; line-height:1.7; color:var(--ur-slate); }
  .ur-sa-panel__grid{ margin-top:2rem; display:grid; gap:1.5rem; grid-template-columns:1fr; }
  @media (min-width:640px){ .ur-sa-panel__grid{ grid-template-columns:repeat(2,1fr); } }
  @media (min-width:1024px){ .ur-sa-panel__grid{ grid-template-columns:repeat(3,1fr); } }
  /* Paneles con exactamente 4 zonas: 2x2 en vez de 3+1 huérfano */
  @media (min-width:1024px){ .ur-sa-panel__grid--pair{ grid-template-columns:repeat(2,1fr); max-width:820px; margin-left:auto; margin-right:auto; } }

  /* ---- Area cards — mapa real a tamaño completo, con acentos tipo instrumento de navegación ---- */
  .ur-area-card{
    position:relative; display:flex; flex-direction:column; overflow:hidden; border-radius:var(--ur-radius);
    background:#fff; border:1px solid var(--ur-line); border-top:3px solid var(--ur-gold);
    text-decoration:none; color:inherit;
    transition:transform .3s cubic-bezier(.16,1,.3,1), border-color .3s ease, box-shadow .3s ease;
  }
  .ur-area-card:hover{ transform:translateY(-6px); border-color:var(--ur-gold); box-shadow:0 26px 50px rgba(18,16,58,.14); }

  .ur-area-card__map-frame{ position:relative; height:196px; overflow:hidden; background:var(--ur-navy); }
  .ur-area-card__map{
    position:absolute; inset:0; width:100%; height:100%; border:0; pointer-events:none;
    transform:scale(1.2); transform-origin:center; transition:transform .6s cubic-bezier(.16,1,.3,1);
  }
  .ur-area-card:hover .ur-area-card__map{ transform:scale(1.3); }
  .ur-area-card__pin{
    position:absolute; z-index:2; top:50%; left:50%; width:13px; height:13px; margin:-6.5px 0 0 -6.5px;
    border-radius:999px; background:var(--ur-gold); box-shadow:0 2px 10px rgba(18,16,58,.5);
  }
  .ur-area-card__pin::after{
    content:''; position:absolute; inset:-9px; border-radius:999px; border:1px solid var(--ur-gold);
    opacity:0; animation:urPinPing 2.6s ease-out infinite;
  }
  .ur-area-card__frame-tick{ position:absolute; z-index:2; width:16px; height:16px; pointer-events:none; }
  .ur-area-card__frame-tick--tl{ top:10px; left:10px; border-top:2px solid var(--ur-gold); border-left:2px solid var(--ur-gold); }
  .ur-area-card__frame-tick--br{ bottom:10px; right:10px; border-bottom:2px solid var(--ur-gold); border-right:2px solid var(--ur-gold); }
  @media (max-width:640px){ .ur-area-card__map-frame{ height:168px; } }

  .ur-area-card__body{ position:relative; padding:1.5rem 1.6rem 1.6rem; display:flex; flex-direction:column; flex:1; }
  .ur-area-card__tag{
    display:inline-flex; align-items:center; gap:.4rem; font-family:'IBM Plex Mono',monospace;
    font-size:.62rem; font-weight:700; letter-spacing:.05em; text-transform:uppercase; color:var(--ur-gold-deep);
  }
  .ur-area-card__name{ margin:.5rem 0 0; font-size:1.5rem; font-weight:800; text-transform:uppercase; letter-spacing:-0.005em; color:var(--ur-navy); }
  .ur-area-card__copy{ margin:.5rem 0 0; font-size:13.5px; line-height:1.6; color:var(--ur-slate); flex:1; }
  .ur-area-card__cta{
    display:inline-flex; align-items:center; gap:.4rem; margin-top:1.1rem; font-size:.72rem; font-weight:800;
    text-transform:uppercase; letter-spacing:.08em; color:var(--ur-navy); transition:gap .25s ease, color .25s ease;
  }
  .ur-area-card:hover .ur-area-card__cta{ gap:.6rem; color:var(--ur-gold-deep); }

  /* ---- HOA / B2B band ---- */
  .ur-sa-b2b{ background:radial-gradient(120% 100% at 50% 0%, var(--ur-navy-2) 0%, var(--ur-navy) 65%); clip-path: polygon(0 4%, 100% 0, 100% 100%, 0 100%); }
  .ur-sa-b2b__icon{
    display:inline-flex; align-items:center; justify-content:center; width:52px; height:52px;
    background:rgba(255,255,255,.06); border:1px solid rgba(255,255,255,.14); color:var(--ur-gold);
    border-radius:var(--ur-radius-sm);
  }

  /* ---- FAQ accordion ---- */
  .ur-faq-item{ border:1px solid var(--ur-line); background:#fff; border-radius:var(--ur-radius); overflow:hidden; }
  .ur-faq-item__trigger{
    display:flex; width:100%; align-items:center; gap:.9rem; padding:1.1rem 1.4rem; text-align:left;
    background:none; border:none; cursor:pointer; color:var(--ur-navy); font-size:.92rem; font-weight:700;
  }
  .ur-faq-item__icon{
    flex-shrink:0; display:inline-flex; align-items:center; justify-content:center; width:26px; height:26px;
    border:1px solid var(--ur-line); color:var(--ur-gold-deep); transition:transform .35s cubic-bezier(.16,1,.3,1);
    border-radius:var(--ur-radius-sm);
  }
  .ur-faq-item.is-open .ur-faq-item__icon{ transform:rotate(45deg); background:var(--ur-gold); color:var(--ur-navy); border-color:var(--ur-gold); }
  .ur-faq-item__panel{ max-height:0; overflow:hidden; transition:max-height .45s cubic-bezier(.16,1,.3,1); }
  .ur-faq-item.is-open .ur-faq-item__panel{ max-height:200px; }
  .ur-faq-item__panel p{ padding:0 1.4rem 1.3rem 3rem; font-size:.86rem; line-height:1.65; color:var(--ur-slate); }

  /* ---- Reveal on scroll ---- */
  .ur-reveal-up,.ur-reveal-left,.ur-reveal-right,.ur-reveal-stagger{ opacity:0; will-change:opacity,transform; transition:opacity .9s cubic-bezier(.16,1,.3,1),transform .9s cubic-bezier(.16,1,.3,1); }
  .ur-reveal-up{ transform:translateY(36px); } .ur-reveal-left{ transform:translateX(-40px); }
  .ur-reveal-right{ transform:translateX(40px); } .ur-reveal-stagger{ transform:translateY(28px); }
  .ur-reveal-up.is-visible,.ur-reveal-left.is-visible,.ur-reveal-right.is-visible,.ur-reveal-stagger.is-visible{ opacity:1; transform:translate(0,0); }

  @media (max-width:768px){
    .ur-sa-hero h1{ font-size:2.3rem; }
    .ur-sa-hero,.ur-sa-b2b{ clip-path:none; }
  }

  @media (prefers-reduced-motion: reduce){
    .ur-reveal-up,.ur-reveal-left,.ur-reveal-right,.ur-reveal-stagger,.ur-word__inner,.ur-fade-in-0,.ur-fade-in-2,
    .ur-btn,.ur-radar__sweep,.ur-sa-hero__pin,.ur-sa-hero__pin-dot::after,.ur-area-card__map,.ur-area-card__cta,
    .ur-area-card__pin::after,.ur-sa-tabs__indicator,.ur-sa-panel,.ur-faq-item__icon,.ur-faq-item__panel{
      opacity:1!important; transform:none!important; transition:none!important; animation:none!important;
    }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {

    /* ---------- Reveal on scroll ---------- */
    try {
      const revealItems = document.querySelectorAll(".ur-reveal-up,.ur-reveal-left,.ur-reveal-right,.ur-reveal-stagger");
      const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, idx) => {
          if (entry.isIntersecting) {
            const delay = entry.target.classList.contains("ur-reveal-stagger") ? (idx % 6) * 70 : 0;
            setTimeout(() => entry.target.classList.add("is-visible"), delay);
            revealObserver.unobserve(entry.target);
          }
        });
      }, { threshold: 0.12 });
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

    /* ---------- FAQ accordion ---------- */
    try {
      document.querySelectorAll(".js-ur-faq-trigger").forEach((trigger) => {
        trigger.addEventListener("click", () => {
          trigger.closest(".ur-faq-item").classList.toggle("is-open");
        });
      });
    } catch (err) { console.error("ur-faq init failed:", err); }

    /* ---------- Service area tabs ---------- */
    try {
      const tabRoot = document.querySelector(".js-ur-sa-tabs");
      if (tabRoot) {
        const tabs = Array.from(tabRoot.querySelectorAll(".js-ur-sa-tab"));
        const indicator = tabRoot.querySelector(".js-ur-sa-indicator");
        const panels = Array.from(document.querySelectorAll(".js-ur-sa-panel"));
        let active = tabs.findIndex((t) => t.classList.contains("is-active"));
        if (active < 0) active = 0;
        let switching = false;

        const revealPanelCards = (panel) => {
          panel.querySelectorAll(".ur-reveal-stagger").forEach((card, i) => {
            card.style.transitionDelay = `${i * 55}ms`;
            card.classList.remove("is-visible");
            void card.offsetWidth;
            card.classList.add("is-visible");
          });
        };

        const setActive = (index) => {
          if (index === active || switching) return;
          switching = true;

          tabs[active].classList.remove("is-active");
          tabs[active].setAttribute("aria-selected", "false");
          tabs[active].setAttribute("tabindex", "-1");
          tabs[index].classList.add("is-active");
          tabs[index].setAttribute("aria-selected", "true");
          tabs[index].setAttribute("tabindex", "0");
          if (indicator) indicator.style.transform = `translateX(${index * 100}%)`;

          const oldPanel = panels[active];
          const newPanel = panels[index];
          oldPanel.classList.add("is-leaving");

          window.setTimeout(() => {
            oldPanel.hidden = true;
            oldPanel.classList.remove("is-leaving");
            newPanel.hidden = false;
            newPanel.classList.add("is-entering");
            void newPanel.offsetWidth;
            newPanel.classList.remove("is-entering");
            revealPanelCards(newPanel);
            active = index;
            switching = false;
          }, 260);
        };

        tabs.forEach((tab) => {
          tab.addEventListener("click", () => setActive(Number(tab.dataset.index)));
        });

        tabRoot.addEventListener("keydown", (e) => {
          if (!["ArrowLeft", "ArrowRight", "Home", "End"].includes(e.key)) return;
          e.preventDefault();
          let next = active;
          if (e.key === "ArrowLeft") next = (active - 1 + tabs.length) % tabs.length;
          if (e.key === "ArrowRight") next = (active + 1) % tabs.length;
          if (e.key === "Home") next = 0;
          if (e.key === "End") next = tabs.length - 1;
          setActive(next);
          tabs[next].focus();
        });
      }
    } catch (err) { console.error("ur-sa-tabs init failed:", err); }
  });
</script>

<?php get_footer(); ?>