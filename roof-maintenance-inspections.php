<?php
/**
 * Template Name: Service — Roof Maintenance & Inspections
 *
 * Ureña Roofing Contractor LLC — Servicio individual
 * Plantilla reutilizable: Hero / What's Included / Our Process / CTA.
 * Para los otros 2 servicios que faltan, duplicar este archivo y cambiar solo
 * $service (abajo) y las imágenes.
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="ur-service bg-white text-[#14131F] overflow-hidden">

  <?php
    // ------------------------------------------------------------
    // ASSETS
    // ------------------------------------------------------------
    $img = '/wp-content/uploads/2026/08/';

    // ------------------------------------------------------------
    // ICONOS
    // ------------------------------------------------------------
    $icons = [
      'check'     => '<path d="M20 6 9 17l-5-5"/>',
      'home'      => '<path d="M4 11 12 4l8 7"/><path d="M6 10v10h12V10"/>',
      'shield'    => '<path d="M12 3 5 6v6c0 5 3 8.5 7 9 4-.5 7-4 7-9V6z"/><path d="m9 12 2 2 4-4"/>',
      'camera'    => '<path d="M4 8h3l2-2h6l2 2h3v11H4z"/><circle cx="12" cy="13.5" r="3.4"/>',
      'file-text' => '<path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8z"/><path d="M14 3v5h5"/><path d="M9 13h6"/><path d="M9 17h4"/>',
      'arrow'     => '<path d="M5 12h14"/><path d="m13 6 6 6-6 6"/>',
      'x'         => '<path d="M18 6 6 18"/><path d="M6 6l12 12"/>',
      'phone'     => '<path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2C9.4 21 3 14.6 3 6a2 2 0 0 1 2-2z"/>',
    ];
    $icon = function ($name, $extra_class = '') use ($icons) {
      $paths = $icons[$name] ?? '';
      return '<svg class="ur-ic ' . esc_attr($extra_class) . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $paths . '</svg>';
    };

    // ------------------------------------------------------------
    // DATA — ÚNICO bloque que cambia entre los 5 servicios
    // ------------------------------------------------------------
    $service = [
      'eyebrow'    => 'Preventive Care', 'eyebrow_es' => 'Cuidado Preventivo', 'eyebrow_vi' => 'Chăm Sóc Phòng Ngừa',
      'headline'   => 'Roof Maintenance & Inspections', 'headline_es' => 'Mantenimiento e Inspecciones de Techo', 'headline_vi' => 'Bảo Trì & Kiểm Tra Mái Nhà',
      'subhead'    => 'Preventive care that extends the life of your roof and catches small issues before they become expensive repairs.',
      'subhead_es' => 'Cuidado preventivo que extiende la vida de tu techo y detecta problemas pequeños antes de que se conviertan en reparaciones costosas.',
      'subhead_vi' => 'Chăm sóc phòng ngừa giúp kéo dài tuổi thọ mái nhà của bạn và phát hiện sớm các vấn đề nhỏ trước khi chúng trở thành những sửa chữa tốn kém.',
      'hero_image' => $img . 'Copia-de-DJI_20260610064949_0032_D-scaled.jpg',
      'included_image' => $img . 'Copia-de-IMG-20250902-WA0046.jpg',

      'included' => [
        ['icon' => 'file-text', 'text' => 'Scheduled annual or seasonal inspections', 'text_es' => 'Inspecciones programadas anuales o de temporada', 'text_vi' => 'Kiểm tra định kỳ hàng năm hoặc theo mùa'],
        ['icon' => 'camera',    'text' => 'Detailed photo reports after every visit', 'text_es' => 'Informes fotográficos detallados después de cada visita', 'text_vi' => 'Báo cáo hình ảnh chi tiết sau mỗi lần kiểm tra'],
        ['icon' => 'shield',    'text' => 'Minor repair and sealing services', 'text_es' => 'Servicios de reparación menor y sellado', 'text_vi' => 'Dịch vụ sửa chữa nhỏ và trám kín'],
        ['icon' => 'home',      'text' => 'Maintenance plans for homeowners and HOAs', 'text_es' => 'Planes de mantenimiento para propietarios y HOAs', 'text_vi' => 'Gói bảo trì dành cho chủ nhà và HOA'],
      ],

      'process' => [
        ['title' => 'Schedule Your Inspection', 'title_es' => 'Programa tu Inspección', 'title_vi' => 'Đặt Lịch Kiểm Tra', 'text' => 'Pick a date that works for you, seasonal or one-time, on your schedule.', 'text_es' => 'Elige una fecha que te convenga, de temporada o única vez, según tu horario.', 'text_vi' => 'Chọn ngày phù hợp với bạn, theo mùa hoặc một lần, theo lịch trình của bạn.', 'image' => $img . 'inspections.jpg'],
        ['title' => 'Full Roof Assessment',      'title_es' => 'Evaluación Completa del Techo', 'title_vi' => 'Đánh Giá Toàn Bộ Mái Nhà', 'text' => 'A complete inspection with a detailed photo report of everything we find.', 'text_es' => 'Una inspección completa con un informe fotográfico detallado de todo lo que encontramos.', 'text_vi' => 'Một cuộc kiểm tra toàn diện với báo cáo hình ảnh chi tiết về mọi phát hiện.', 'image' => $img . 'IMG-20250218-WA0041.jpg'],
        ['title' => 'Recommendations & Repairs', 'title_es' => 'Recomendaciones y Reparaciones', 'title_vi' => 'Khuyến Nghị & Sửa Chữa', 'text' => 'Minor repairs and sealing handled on the spot, with clear notes on anything bigger.', 'text_es' => 'Reparaciones menores y sellado resueltos en el momento, con notas claras sobre cualquier problema mayor.', 'text_vi' => 'Sửa chữa nhỏ và trám kín được xử lý ngay tại chỗ, kèm ghi chú rõ ràng cho các vấn đề lớn hơn.', 'image' => $img . 'IMG-20250218-WA0038.jpg'],
        ['title' => 'Ongoing Maintenance Plan',  'title_es' => 'Plan de Mantenimiento Continuo', 'title_vi' => 'Kế Hoạch Bảo Trì Liên Tục', 'text' => 'A standing calendar keeps your roof, and your HOA, covered season after season.', 'text_es' => 'Un calendario permanente mantiene tu techo, y tu HOA, cubiertos temporada tras temporada.', 'text_vi' => 'Một lịch trình cố định giúp mái nhà của bạn, và HOA của bạn, luôn được bảo vệ qua từng mùa.', 'image' => $img . 'Copia-de-DJI_20260610064620_0008_D-scaled.jpg'],
      ],

      'gallery' => [
        $img . 'Copia-de-IMG-20250902-WA0069.jpg',
        $img . 'Copia-de-DJI_20260610190743_0027_D-scaled.jpg',
        $img . 'Copia-de-DJI_20260610190636_0019_D-scaled.jpg',
        $img . 'Copia-de-DJI_20260610074419_0015_D-scaled.jpg',
        $img . 'IMG-20250218-WA0006.jpg',
      ],

      'cta_headline' => 'Ready to get started? Request your free estimate today.',
      'cta_headline_es' => '¿Listo para comenzar? Solicita tu estimado gratis hoy.',
      'cta_headline_vi' => 'Sẵn sàng bắt đầu? Yêu cầu báo giá miễn phí ngay hôm nay.',
    ];
  ?>

  <!-- ============================================================ -->
  <!-- HERO                                                          -->
  <!-- ============================================================ -->
  <section class="ur-svc-hero relative isolate flex min-h-[460px] items-center overflow-hidden text-white lg:min-h-[540px]">
    <img src="<?php echo esc_url($service['hero_image']); ?>" alt="<?php echo esc_attr($service['headline']); ?> — Urena Roofing Contractor" data-en-alt="<?php echo esc_attr($service['headline']); ?> — Urena Roofing Contractor" data-es-alt="<?php echo esc_attr($service['headline']); ?> — Ureña Roofing Contractor" data-vi-alt="<?php echo esc_attr($service['headline_vi']); ?> — Urena Roofing Contractor" class="ur-hero-kb absolute inset-0 h-full w-full object-cover">
    <div class="ur-svc-hero__scrim absolute inset-0"></div>

    <span class="ur-hud-corner ur-hud-corner--tl ur-hud-corner--xl" aria-hidden="true"></span>
    <span class="ur-hud-corner ur-hud-corner--tr ur-hud-corner--xl" aria-hidden="true"></span>
    <span class="ur-hud-corner ur-hud-corner--bl ur-hud-corner--xl" aria-hidden="true"></span>
    <span class="ur-hud-corner ur-hud-corner--br ur-hud-corner--xl" aria-hidden="true"></span>

    <div class="relative z-10 mx-auto max-w-4xl px-4 text-center">
      <p class="ur-eyebrow ur-eyebrow--light ur-fade-in-0"><span data-en="<?php echo esc_attr($service['eyebrow']); ?>" data-es="<?php echo esc_attr($service['eyebrow_es']); ?>" data-vi="<?php echo esc_attr($service['eyebrow_vi']); ?>"><?php echo esc_html($service['eyebrow']); ?></span></p>
      <h1 class="mt-5 text-4xl font-black uppercase leading-[0.98] tracking-[-0.01em] md:text-6xl" data-en="<?php echo esc_attr($service['headline']); ?>" data-es="<?php echo esc_attr($service['headline_es']); ?>" data-vi="<?php echo esc_attr($service['headline_vi']); ?>">
        <?php
          $hero_words = explode(' ', $service['headline']);
          foreach ($hero_words as $i => $word) : ?>
            <span class="ur-word"><span class="ur-word__inner" style="--i:<?php echo (int) $i; ?>"><?php echo esc_html($word); ?></span></span><?php echo ' '; ?>
          <?php endforeach; ?>
      </h1>
      <p class="ur-fade-in-2 mx-auto mt-6 max-w-2xl text-base leading-7 text-white/85 md:text-lg" data-en="<?php echo esc_attr($service['subhead']); ?>" data-es="<?php echo esc_attr($service['subhead_es']); ?>" data-vi="<?php echo esc_attr($service['subhead_vi']); ?>">
        <?php echo esc_html($service['subhead']); ?>
      </p>
      <div class="ur-fade-in-3 mt-9">
        <a href="/contact" class="ur-btn ur-btn-gold ur-magnetic inline-flex items-center justify-center gap-2 px-8 py-4 text-sm font-black uppercase tracking-[0.12em]">
          <span data-en="Get Free Estimate" data-es="Obtén Estimado Gratis" data-vi="Nhận Báo Giá Miễn Phí">Get Free Estimate</span> <?php echo $icon('arrow', 'h-4 w-4'); ?>
        </a>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- WHAT'S INCLUDED                                               -->
  <!-- ============================================================ -->
  <section class="ur-svc-included relative overflow-hidden bg-[#EEF1F5] py-20 lg:py-28">
    <div class="ur-blueprint-texture" aria-hidden="true"></div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="ur-reveal-up max-w-2xl">
        <p class="ur-eyebrow" data-en="What's Included" data-es="Qué Incluye" data-vi="Những Gì Được Bao Gồm">What's Included</p>
        <h2 class="mt-4 text-3xl font-black uppercase leading-[1.02] tracking-[-0.01em] text-[#12103A] md:text-5xl" data-en="Everything Covered, Nothing Assumed" data-es="Todo Cubierto, Nada Asumido" data-vi="Bao Quát Toàn Diện, Không Bỏ Sót Chi Tiết">
          Everything Covered, Nothing Assumed
        </h2>
      </div>

      <div class="mt-14 grid gap-12 lg:grid-cols-[1fr_0.85fr] lg:items-center">
        <div class="grid gap-5 sm:grid-cols-2">
          <?php foreach ($service['included'] as $i => $item) : ?>
            <div class="ur-reveal-stagger ur-included-card">
              <span class="ur-included-card__check">
                <svg class="ur-checkmark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M20 6 9 17l-5-5"/>
                </svg>
              </span>
              <p class="ur-included-card__text"><span data-en="<?php echo esc_attr($item['text']); ?>" data-es="<?php echo esc_attr($item['text_es']); ?>" data-vi="<?php echo esc_attr($item['text_vi']); ?>"><?php echo esc_html($item['text']); ?></span></p>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="ur-reveal-right ur-included-photo ur-wipe">
          <span class="ur-hud-corner ur-hud-corner--tl" aria-hidden="true"></span>
          <span class="ur-hud-corner ur-hud-corner--br" aria-hidden="true"></span>
          <img src="<?php echo esc_url($service['included_image']); ?>" alt="A well-maintained Houston neighborhood roof, inspected by Urena Roofing Contractor" data-en-alt="A well-maintained Houston neighborhood roof, inspected by Urena Roofing Contractor" data-es-alt="A well-maintained Houston neighborhood roof, inspected by Ureña Roofing Contractor" data-vi-alt="Mái nhà khu dân cư Houston được bảo trì tốt, kiểm tra bởi Urena Roofing Contractor" class="ur-wipe__img h-full w-full object-cover" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- OUR PROCESS                                                   -->
  <!-- ============================================================ -->
  <section class="ur-svc-process relative overflow-hidden bg-white py-20 lg:py-28">
    <div class="mx-auto max-w-6xl px-4">
      <div class="ur-reveal-up mx-auto max-w-2xl text-center">
        <p class="ur-eyebrow" data-en="Our Process" data-es="Nuestro Proceso" data-vi="Quy Trình Của Chúng Tôi">Our Process</p>
        <h2 class="mt-4 text-3xl font-black uppercase leading-[1.02] tracking-[-0.01em] text-[#12103A] md:text-5xl" data-en="From First Call to Final Walkthrough" data-es="Desde la Primera Llamada Hasta el Recorrido Final" data-vi="Từ Cuộc Gọi Đầu Tiên Đến Bàn Giao Cuối Cùng">
          From First Call to Final Walkthrough
        </h2>
      </div>

      <div class="js-ur-process ur-process mt-20">
        <div class="ur-process__rail" aria-hidden="true">
          <span class="js-ur-process-fill ur-process__rail-fill"></span>
        </div>

        <?php foreach ($service['process'] as $i => $step) : ?>
          <div class="js-ur-process-step ur-process__step <?php echo $i % 2 === 1 ? 'ur-process__step--reverse' : ''; ?>">
            <div class="ur-process__photo ur-tilt">
              <img src="<?php echo esc_url($step['image']); ?>" alt="<?php echo esc_attr($step['title']); ?> — Urena Roofing Contractor" data-en-alt="<?php echo esc_attr($step['title']); ?> — Urena Roofing Contractor" data-es-alt="<?php echo esc_attr($step['title']); ?> — Ureña Roofing Contractor" data-vi-alt="<?php echo esc_attr($step['title_vi']); ?> — Urena Roofing Contractor" loading="lazy">
            </div>
            <div class="ur-process__copy">
              <span class="js-ur-process-marker ur-process__marker"><?php echo esc_html(str_pad($i + 1, 2, '0', STR_PAD_LEFT)); ?></span>
              <h3 class="ur-process__title"><span data-en="<?php echo esc_attr($step['title']); ?>" data-es="<?php echo esc_attr($step['title_es']); ?>" data-vi="<?php echo esc_attr($step['title_vi']); ?>"><?php echo esc_html($step['title']); ?></span></h3>
              <p class="ur-process__text"><span data-en="<?php echo esc_attr($step['text']); ?>" data-es="<?php echo esc_attr($step['text_es']); ?>" data-vi="<?php echo esc_attr($step['text_vi']); ?>"><?php echo esc_html($step['text']); ?></span></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- RECENT WORK — carousel tipo fan-stack                         -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden bg-[#EEF1F5] py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="ur-reveal-up max-w-2xl">
        <p class="ur-eyebrow" data-en="Recent Work" data-es="Trabajos Recientes" data-vi="Công Trình Gần Đây">Recent Work</p>
        <h2 class="mt-4 text-2xl font-black uppercase leading-[1.05] tracking-[-0.01em] text-[#12103A] md:text-4xl" data-en="Real Replacements, Real Houston Roofs" data-es="Reemplazos Reales, Techos Reales de Houston" data-vi="Công Trình Thật, Mái Nhà Thật Tại Houston">
          Real Replacements, Real Houston Roofs
        </h2>
      </div>

      <div class="ur-reveal-up js-ur-stack ur-stack mt-8">
        <div class="ur-stack__stage">
          <span class="ur-stack__spot" aria-hidden="true"></span>
          <?php foreach ($service['gallery'] as $i => $photo) : ?>
            <button type="button" class="js-ur-stack-card ur-stack__card" data-index="<?php echo (int) $i; ?>" aria-label="View project photo <?php echo (int) $i + 1; ?>">
              <img src="<?php echo esc_url($photo); ?>" alt="Roof maintenance and inspection project — Urena Roofing Contractor" data-en-alt="Roof maintenance and inspection project — Urena Roofing Contractor" data-es-alt="Roof maintenance and inspection project — Ureña Roofing Contractor" data-vi-alt="Dự án bảo trì và kiểm tra mái nhà — Urena Roofing Contractor" draggable="false" loading="lazy">
            </button>
          <?php endforeach; ?>
        </div>

        <div class="ur-stack__dots">
          <?php foreach ($service['gallery'] as $i => $photo) : ?>
            <button type="button" class="js-ur-stack-dot ur-stack__dot" data-index="<?php echo (int) $i; ?>" aria-label="Go to photo <?php echo (int) $i + 1; ?>"></button>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <div class="js-ur-stack-lightbox ur-lightbox" aria-hidden="true">
      <div class="js-ur-stack-lightbox-close ur-lightbox__backdrop"></div>
      <div class="ur-lightbox__panel" role="dialog" aria-modal="true" aria-label="Project photo, larger view">
        <button type="button" class="js-ur-stack-lightbox-close ur-lightbox__close" aria-label="Close">
          <?php echo $icon('x', 'h-5 w-5'); ?>
        </button>
        <img src="" alt="Roof maintenance and inspection project — Urena Roofing Contractor" data-en-alt="Roof maintenance and inspection project — Urena Roofing Contractor" data-es-alt="Roof maintenance and inspection project — Ureña Roofing Contractor" data-vi-alt="Dự án bảo trì và kiểm tra mái nhà — Urena Roofing Contractor" class="js-ur-stack-lightbox-img ur-lightbox__img">
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- CTA DE CIERRE                                                 -->
  <!-- ============================================================ -->
  <section class="ur-svc-cta relative isolate overflow-hidden py-20 text-center text-white lg:py-24">
    <div class="relative mx-auto max-w-2xl px-4">
      <h2 class="ur-reveal-up text-3xl font-black uppercase leading-[1.05] tracking-[-0.01em] md:text-5xl" data-en="<?php echo esc_attr($service['cta_headline']); ?>" data-es="<?php echo esc_attr($service['cta_headline_es']); ?>" data-vi="<?php echo esc_attr($service['cta_headline_vi']); ?>">
        <?php echo esc_html($service['cta_headline']); ?>
      </h2>
      <div class="ur-reveal-up mt-9 flex flex-wrap items-center justify-center gap-3">
        <a href="/contact" class="ur-btn ur-btn-gold ur-magnetic inline-flex items-center justify-center gap-2 px-8 py-4 text-sm font-black uppercase tracking-[0.12em]">
          <span data-en="Get Free Estimate" data-es="Obtén Estimado Gratis" data-vi="Nhận Báo Giá Miễn Phí">Get Free Estimate</span>
        </a>
        <a href="tel:+18327392842" class="ur-btn ur-btn-outline ur-magnetic inline-flex items-center justify-center gap-2 px-6 py-4 text-sm font-black uppercase tracking-[0.12em] text-white">
          <?php echo $icon('phone', 'h-4 w-4'); ?><span>(832) 739-2842</span>
        </a>
      </div>
    </div>
  </section>

</main>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@600;700;800;900&family=Public+Sans:wght@400;500;600;700;800&family=IBM+Plex+Mono:wght@500;600&display=swap');

  .ur-service {
    --ur-navy:#12103A; --ur-navy-2:#221D5C; --ur-gold:#F6BE15; --ur-gold-deep:#C9910A;
    --ur-mist:#EEF1F5; --ur-ink:#14131F; --ur-slate:#5B5F6B; --ur-line: rgba(20,19,31,.1);
    --ur-radius:10px; --ur-radius-sm:6px;
    font-family:'Public Sans','Segoe UI',Arial,sans-serif;
  }
  .ur-service h1,.ur-service h2,.ur-service h3{ font-family:'Big Shoulders Display','Arial Narrow',sans-serif; }
  .ur-service a:focus-visible,.ur-service button:focus-visible{ outline:2px solid var(--ur-gold-deep); outline-offset:3px; }
  .ur-ic{ display:block; }

  .ur-eyebrow{ font-family:'IBM Plex Mono',monospace; font-size:.72rem; font-weight:600; letter-spacing:.18em; text-transform:uppercase; color:var(--ur-gold-deep); }
  .ur-eyebrow--light{ color:var(--ur-gold); }

  /* ---- Hero ---- */
  .ur-svc-hero{ clip-path: polygon(0 0, 100% 0, 100% 95%, 0 100%); }
  .ur-svc-hero__scrim{ background:linear-gradient(180deg, rgba(18,16,58,.6) 0%, rgba(18,16,58,.72) 55%, rgba(18,16,58,.9) 100%); }
  @media (max-width:768px){ .ur-svc-hero{ clip-path:none; } }

  .ur-word{ display:inline-block; overflow:hidden; vertical-align:top; }
  .ur-word__inner{ display:inline-block; transform:translateY(115%); opacity:0; animation:urWordUp .9s cubic-bezier(.16,1,.3,1) forwards; animation-delay:calc(var(--i) * 80ms + 150ms); }
  @keyframes urWordUp{ to{ transform:translateY(0); opacity:1; } }
  .ur-fade-in-0,.ur-fade-in-2,.ur-fade-in-3{ opacity:0; transform:translateY(16px); animation:urFadeUp .9s cubic-bezier(.16,1,.3,1) forwards; }
  .ur-fade-in-0{ animation-delay:.05s; } .ur-fade-in-2{ animation-delay:.6s; } .ur-fade-in-3{ animation-delay:.85s; }
  @keyframes urFadeUp{ to{ opacity:1; transform:translateY(0); } }

  .ur-hero-kb{ animation:urHeroZoom 14s ease-out forwards; transform:scale(1.1); }
  @keyframes urHeroZoom{ to{ transform:scale(1); } }

  /* ---- HUD corners ---- */
  .ur-hud-corner{ position:absolute; z-index:10; width:22px; height:22px; opacity:0; transform:scale(.6); transition:opacity .6s ease, transform .6s cubic-bezier(.16,1,.3,1); pointer-events:none; }
  .ur-hud-corner--xl{ width:34px; height:34px; }
  .ur-svc-hero .ur-hud-corner{ opacity:1; transform:scale(1); }
  .ur-hud-corner--tl{ top:22px; left:22px; border-top:2px solid var(--ur-gold); border-left:2px solid var(--ur-gold); transition-delay:.1s; }
  .ur-hud-corner--tr{ top:22px; right:22px; border-top:2px solid var(--ur-gold); border-right:2px solid var(--ur-gold); transition-delay:.22s; }
  .ur-hud-corner--bl{ bottom:22px; left:22px; border-bottom:2px solid var(--ur-gold); border-left:2px solid var(--ur-gold); transition-delay:.34s; }
  .ur-hud-corner--br{ bottom:22px; right:22px; border-bottom:2px solid var(--ur-gold); border-right:2px solid var(--ur-gold); transition-delay:.46s; }

  /* ---- Buttons ---- */
  .ur-btn{ position:relative; border:1px solid transparent; border-radius:var(--ur-radius-sm); transition:box-shadow .25s ease,background-color .25s ease,color .25s ease; }
  .ur-btn span{ position:relative; z-index:1; }
  .ur-btn-gold{ background:var(--ur-gold); color:var(--ur-navy); box-shadow:0 16px 34px rgba(246,190,21,.28); }
  .ur-btn-gold:hover{ background:var(--ur-gold-deep); }
  .ur-btn-outline{ background:rgba(255,255,255,.06); border-color:rgba(255,255,255,.28); backdrop-filter:blur(6px); }
  .ur-btn-outline:hover{ background:#fff; color:var(--ur-navy); }
  .ur-magnetic{ will-change:transform; }

  .ur-blueprint-texture{
    position:absolute; inset:0; pointer-events:none; z-index:0; opacity:1;
    background-image:
      linear-gradient(rgba(18,16,58,.16) 1px, transparent 1px),
      linear-gradient(90deg, rgba(18,16,58,.16) 1px, transparent 1px);
    background-size: 42px 42px;
    mask-image: radial-gradient(ellipse 75% 85% at 88% 15%, black 0%, transparent 78%);
  }

  /* ---- What's Included — check-draw animation ---- */
  .ur-included-card{
    position:relative; display:flex; align-items:flex-start; gap:1rem; background:#fff;
    border:1px solid var(--ur-line); padding:1.5rem 1.6rem; overflow:hidden; border-radius:var(--ur-radius);
    transition:border-color .3s ease, box-shadow .3s ease, transform .3s cubic-bezier(.16,1,.3,1);
  }
  .ur-included-card:hover{ border-color:var(--ur-gold); box-shadow:0 18px 38px rgba(18,16,58,.1); transform:translateY(-3px); }
  .ur-included-card__check{
    flex-shrink:0; display:inline-flex; align-items:center; justify-content:center; width:34px; height:34px;
    border-radius:999px; background:var(--ur-gold); color:var(--ur-navy);
  }
  .ur-checkmark{ width:18px; height:18px; }
  .ur-checkmark path{
    stroke-dasharray:24; stroke-dashoffset:24; transition:stroke-dashoffset .5s cubic-bezier(.16,1,.3,1) .3s;
  }
  .ur-included-card.is-visible .ur-checkmark path{ stroke-dashoffset:0; }
  .ur-included-card__text{ font-size:15px; font-weight:600; line-height:1.55; color:var(--ur-navy); }
  .ur-included-photo{ position:relative; aspect-ratio:4/3.2; overflow:hidden; box-shadow:0 30px 60px rgba(18,16,58,.18); border-radius:var(--ur-radius); }

  /* ---- Our Process — timeline zigzag con foto por paso + riel de progreso real ---- */
  .ur-process{ position:relative; }
  .ur-process__rail{
    position:absolute; top:0; bottom:0; left:50%; width:3px; background:var(--ur-line);
    transform:translateX(-50%); z-index:0; display:none;
  }
  .ur-process__rail-fill{
    display:block; width:100%; height:0%; background:linear-gradient(180deg,var(--ur-gold),var(--ur-gold-deep));
    transition:height .1s linear;
  }
  .ur-process__step{
    position:relative; z-index:1; display:grid; gap:1.5rem; align-items:center;
    grid-template-columns:1fr; margin-bottom:3rem;
  }
  .ur-process__step:last-child{ margin-bottom:0; }
  .ur-process__photo{
    position:relative; aspect-ratio:4/2.9; overflow:hidden; box-shadow:0 24px 48px rgba(18,16,58,.16); border-radius:var(--ur-radius);
    opacity:0; transform:translateY(30px) scale(.97); transition:opacity .8s cubic-bezier(.16,1,.3,1), transform .8s cubic-bezier(.16,1,.3,1);
  }
  .ur-process__photo img{ width:100%; height:100%; object-fit:cover; transition:transform .6s cubic-bezier(.16,1,.3,1); }
  .ur-process__step:hover .ur-process__photo img{ transform:scale(1.06); }
  .ur-process__copy{ opacity:0; transform:translateY(20px); transition:opacity .8s cubic-bezier(.16,1,.3,1) .15s, transform .8s cubic-bezier(.16,1,.3,1) .15s; }
  .ur-process__step.is-visible .ur-process__photo{ opacity:1; transform:translateY(0) scale(1); }
  .ur-process__step.is-visible .ur-process__copy{ opacity:1; transform:translateY(0); }

  .ur-process__marker{
    position:relative; display:inline-flex; align-items:center; justify-content:center; width:44px; height:44px;
    background:var(--ur-mist); border:2px solid var(--ur-line); color:var(--ur-slate); border-radius:var(--ur-radius-sm);
    font-family:'IBM Plex Mono',monospace; font-weight:700; font-size:.85rem;
    transition:background-color .4s ease, border-color .4s ease, color .4s ease, transform .4s cubic-bezier(.16,1,.3,1);
  }
  .ur-process__marker.is-lit{ background:var(--ur-navy); border-color:var(--ur-gold); color:var(--ur-gold); transform:scale(1.12); }
  .ur-process__title{ margin:1rem 0 0; font-size:1.35rem; font-weight:800; text-transform:uppercase; letter-spacing:-0.005em; color:var(--ur-navy); font-family:'Big Shoulders Display',sans-serif; }
  .ur-process__text{ margin-top:.6rem; font-size:14.5px; line-height:1.7; color:var(--ur-slate); max-width:38ch; }

  @media (min-width:900px){
    .ur-process__rail{ display:block; }
    .ur-process__step{ grid-template-columns:1fr 60px 1fr; gap:0; margin-bottom:4rem; }
    .ur-process__photo{ grid-column:1; }
    .ur-process__marker{ grid-column:2; justify-self:center; }
    .ur-process__copy{ grid-column:3; padding-left:2.5rem; }
    .ur-process__step--reverse{ grid-template-columns:1fr 60px 1fr; }
    .ur-process__step--reverse .ur-process__photo{ grid-column:3; grid-row:1; }
    .ur-process__step--reverse .ur-process__marker{ grid-column:2; }
    .ur-process__step--reverse .ur-process__copy{ grid-column:1; grid-row:1; padding-left:0; padding-right:2.5rem; text-align:right; }
    .ur-process__step--reverse .ur-process__text{ margin-left:auto; }
  }

  /* ---- Image wipe — entrada tipo cortina para fotos sueltas ---- */
  .ur-wipe{ position:relative; }
  .ur-wipe__img{ clip-path:inset(0 100% 0 0); transform:scale(1.12); transition:clip-path 1.1s cubic-bezier(.65,0,.35,1) .1s, transform 1.3s cubic-bezier(.16,1,.3,1) .1s; }
  .ur-wipe.is-visible .ur-wipe__img{ clip-path:inset(0 0 0 0); transform:scale(1.02); }

  /* ---- Recent Work — carousel fan-stack (drag + click + dots) ---- */
  .ur-stack{ position:relative; }
  .ur-stack__stage{ position:relative; height:400px; perspective:1200px; }
  .ur-stack__spot{
    position:absolute; left:50%; bottom:6px; width:70%; height:36px; background:rgba(18,16,58,.16);
    filter:blur(18px); border-radius:999px; transform:translateX(-50%);
  }
  .ur-stack__card{
    position:absolute; left:50%; bottom:0; width:380px; height:320px; margin-left:-190px;
    border:4px solid #fff; border-radius:var(--ur-radius); overflow:hidden; background:var(--ur-mist); padding:0; cursor:pointer;
    box-shadow:0 20px 40px rgba(18,16,58,.22);
    transition:transform .5s cubic-bezier(.16,1,.3,1), box-shadow .4s ease, filter .4s ease;
    transform:
      translateX(var(--ur-stack-x,0px))
      translateY(var(--ur-stack-y,0px))
      rotate(var(--ur-stack-rot,0deg))
      scale(var(--ur-stack-scale,.9));
    filter:brightness(var(--ur-stack-bright,.75));
  }
  .ur-stack__card img{ width:100%; height:100%; object-fit:cover; -webkit-user-drag:none; }
  .ur-stack__card.is-active{ cursor:grab; box-shadow:0 30px 60px rgba(18,16,58,.32); }
  .ur-stack__card.is-active:active{ cursor:grabbing; }
  .ur-stack__card:focus-visible{ outline:2px solid var(--ur-gold-deep); outline-offset:3px; }

  .ur-stack__dots{ margin-top:1.75rem; display:flex; align-items:center; justify-content:center; gap:.5rem; }
  .ur-stack__dot{ width:8px; height:8px; border-radius:999px; background:var(--ur-line); border:none; cursor:pointer; padding:0; transition:background-color .25s ease, transform .25s ease; }
  .ur-stack__dot.is-active{ background:var(--ur-gold-deep); transform:scale(1.3); }

  @media (max-width:640px){
    .ur-stack__stage{ height:300px; }
    .ur-stack__card{ width:250px; height:210px; margin-left:-125px; }
  }

  /* ---- Lightbox del carousel — click en la card activa la agranda ---- */
  .ur-lightbox{
    position:fixed; inset:0; z-index:100; display:flex; align-items:center; justify-content:center;
    padding:5vh 20px; opacity:0; visibility:hidden; transition:opacity .3s ease, visibility 0s linear .3s;
  }
  .ur-lightbox.is-open{ opacity:1; visibility:visible; transition:opacity .3s ease; }
  .ur-lightbox__backdrop{ position:absolute; inset:0; background:rgba(18,16,58,.86); backdrop-filter:blur(4px); cursor:pointer; }
  .ur-lightbox__panel{
    position:relative; z-index:1; max-width:760px; width:100%; background:var(--ur-navy);
    border:1px solid rgba(246,190,21,.3); box-shadow:0 40px 90px rgba(0,0,0,.4); border-radius:var(--ur-radius);
    transform:scale(.88) translateY(18px); opacity:0; transition:transform .4s cubic-bezier(.16,1,.3,1), opacity .35s ease;
  }
  .ur-lightbox.is-open .ur-lightbox__panel{ transform:scale(1) translateY(0); opacity:1; transition-delay:.05s; }
  .ur-lightbox__img{ display:block; width:100%; max-height:78vh; object-fit:cover; border-radius:var(--ur-radius); }
  .ur-lightbox__close{
    position:absolute; top:-16px; right:-16px; z-index:2; display:flex; align-items:center; justify-content:center;
    width:40px; height:40px; border-radius:999px; background:var(--ur-gold); color:var(--ur-navy);
    border:none; cursor:pointer; box-shadow:0 10px 22px rgba(0,0,0,.28); transition:transform .2s ease;
  }
  .ur-lightbox__close:hover{ transform:scale(1.08) rotate(90deg); }
  @media (max-width:640px){ .ur-lightbox__close{ top:-14px; right:0; } }

  /* ---- CTA ---- */
  .ur-svc-cta{
    background:radial-gradient(120% 100% at 50% 0%, var(--ur-navy-2) 0%, var(--ur-navy) 65%);
    clip-path: polygon(0 5%, 100% 0, 100% 100%, 0 100%);
  }
  @media (max-width:768px){ .ur-svc-cta{ clip-path:none; } }

  /* ---- Reveal on scroll ---- */
  .ur-reveal-up,.ur-reveal-stagger{ opacity:0; will-change:opacity,transform; transition:opacity .9s cubic-bezier(.16,1,.3,1),transform .9s cubic-bezier(.16,1,.3,1); }
  .ur-reveal-up{ transform:translateY(36px); } .ur-reveal-stagger{ transform:translateY(28px); }
  .ur-reveal-up.is-visible,.ur-reveal-stagger.is-visible{ opacity:1; transform:translate(0,0); }

  @media (max-width:768px){ .ur-svc-hero h1{ font-size:2.3rem; } }

  @media (prefers-reduced-motion: reduce){
    .ur-reveal-up,.ur-reveal-stagger,.ur-word__inner,.ur-fade-in-0,.ur-fade-in-2,.ur-fade-in-3,
    .ur-btn,.ur-hud-corner,.ur-checkmark path,.ur-process__rail-fill,.ur-process__photo,.ur-process__copy,
    .ur-process__marker,.ur-process__photo img,.ur-tilt,.ur-wipe__img,.ur-hero-kb,.ur-stack__card,.ur-lightbox__panel,.ur-lightbox__close{
      opacity:1!important; transform:none!important; transition:none!important; animation:none!important;
    }
    .ur-checkmark path{ stroke-dashoffset:0!important; }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {

    /* ---------- Reveal on scroll ---------- */
    try {
      const revealItems = document.querySelectorAll(".ur-reveal-up,.ur-reveal-stagger,.ur-wipe");
      const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, idx) => {
          if (entry.isIntersecting) {
            const delay = entry.target.classList.contains("ur-reveal-stagger") ? (idx % 4) * 90 : 0;
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

    /* ---------- Process rail: progreso real ligado al scroll ---------- */
    try {
      const process = document.querySelector(".js-ur-process");
      const fill = document.querySelector(".js-ur-process-fill");
      const steps = document.querySelectorAll(".js-ur-process-step");
      const markers = document.querySelectorAll(".js-ur-process-marker");

      if (process && fill) {
        let ticking = false;
        function updateRail() {
          const rect = process.getBoundingClientRect();
          const vh = window.innerHeight;
          // progreso 0→1 desde que el tope del bloque entra en pantalla hasta que el fondo la deja
          const total = rect.height + vh * 0.5;
          const passed = vh * 0.75 - rect.top;
          const pct = Math.min(100, Math.max(0, (passed / total) * 100));
          fill.style.height = pct + "%";

          markers.forEach((marker) => {
            const mRect = marker.getBoundingClientRect();
            const markerPct = ((mRect.top + mRect.height / 2 - rect.top) / rect.height) * 100;
            marker.classList.toggle("is-lit", pct >= markerPct - 4);
          });
          ticking = false;
        }
        window.addEventListener("scroll", () => {
          if (!ticking) { requestAnimationFrame(updateRail); ticking = true; }
        }, { passive: true });
        updateRail();
      }

      if (steps.length) {
        const stepObserver = new IntersectionObserver((entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.classList.add("is-visible");
              stepObserver.unobserve(entry.target);
            }
          });
        }, { threshold: 0.3 });
        steps.forEach((s) => stepObserver.observe(s));
      }
    } catch (err) { console.error("ur-process init failed:", err); }

    /* ---------- Recent Work: carousel fan-stack ---------- */
    try {
      const stack = document.querySelector(".js-ur-stack");
      if (stack) {
        const cards = Array.from(stack.querySelectorAll(".js-ur-stack-card"));
        const dots = Array.from(stack.querySelectorAll(".js-ur-stack-dot"));
        const len = cards.length;
        const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
        let active = 0;
        let hovering = false;

        const wrap = (n) => ((n % len) + len) % len;
        const signedOffset = (i) => {
          const raw = i - active;
          const alt = raw > 0 ? raw - len : raw + len;
          return Math.abs(alt) < Math.abs(raw) ? alt : raw;
        };

        function layout() {
          cards.forEach((card, i) => {
            const off = signedOffset(i);
            const abs = Math.abs(off);
            const visible = abs <= 2;
            card.style.display = visible ? "block" : "none";
            card.style.setProperty("--ur-stack-x", off * 110 + "px");
            card.style.setProperty("--ur-stack-y", (abs * 10) + "px");
            card.style.setProperty("--ur-stack-rot", (off * 9) + "deg");
            card.style.setProperty("--ur-stack-scale", off === 0 ? "1" : "0.88");
            card.style.setProperty("--ur-stack-bright", off === 0 ? "1" : "0.72");
            card.style.zIndex = String(100 - abs);
            card.classList.toggle("is-active", off === 0);
          });
          dots.forEach((dot, i) => dot.classList.toggle("is-active", i === active));
        }

        function setActive(i) { active = wrap(i); layout(); }
        function next() { setActive(active + 1); }
        function prev() { setActive(active - 1); }

        cards.forEach((card) => {
          card.addEventListener("click", () => {
            const i = Number(card.dataset.index);
            if (i === active) {
              openLightbox(card.querySelector("img").src);
            } else {
              setActive(i);
            }
          });
          card.addEventListener("dblclick", (e) => {
            e.preventDefault();
            openLightbox(card.querySelector("img").src);
          });
        });
        dots.forEach((dot) => {
          dot.addEventListener("click", () => setActive(Number(dot.dataset.index)));
        });

        // Lightbox
        const lightbox = stack.querySelector(".js-ur-stack-lightbox");
        const lightboxImg = stack.querySelector(".js-ur-stack-lightbox-img");
        let lastFocused = null;
        function openLightbox(src) {
          lastFocused = document.activeElement;
          lightboxImg.src = src;
          lightbox.classList.add("is-open");
          lightbox.setAttribute("aria-hidden", "false");
          document.body.style.overflow = "hidden";
          lightbox.querySelector(".js-ur-stack-lightbox-close")?.focus();
        }
        function closeLightbox() {
          lightbox.classList.remove("is-open");
          lightbox.setAttribute("aria-hidden", "true");
          document.body.style.overflow = "";
          if (lastFocused) lastFocused.focus();
        }
        lightbox.querySelectorAll(".js-ur-stack-lightbox-close").forEach((el) => el.addEventListener("click", closeLightbox));
        document.addEventListener("keydown", (e) => {
          if (e.key === "Escape" && lightbox.classList.contains("is-open")) closeLightbox();
        });

        // swipe / drag en la card activa
        let startX = 0, dragging = false;
        stack.addEventListener("pointerdown", (e) => {
          if (!e.target.closest(".ur-stack__card.is-active")) return;
          dragging = true; startX = e.clientX;
        });
        stack.addEventListener("pointerup", (e) => {
          if (!dragging) return;
          dragging = false;
          const delta = e.clientX - startX;
          if (delta > 60) prev();
          else if (delta < -60) next();
        });

        stack.addEventListener("mouseenter", () => { hovering = true; });
        stack.addEventListener("mouseleave", () => { hovering = false; });

        layout();

        if (!reducedMotion) {
          setInterval(() => { if (!hovering) next(); }, 3200);
        }
      }
    } catch (err) { console.error("ur-stack init failed:", err); }
  });
</script>

<?php get_footer(); ?>