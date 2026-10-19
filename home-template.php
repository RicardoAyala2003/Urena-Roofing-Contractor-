<?php
/**
 * Template Name: Home Template
 *
 * Ureña Roofing Contractor LLC — Homepage
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="ur-home bg-[#EEF1F5] text-[#14131F] overflow-hidden">

  <?php
    // ------------------------------------------------------------
    // ASSETS — rutas relativas desde /wp-content/... (WP local)
    // ------------------------------------------------------------
    $img = '/wp-content/uploads/2026/08/';

    $assets = [
      'hero_image'      => $img . 'DJI_0489-scaled.jpg',
      'logo_navy'       => $img . '1440-urena-roofing-navy-blue-logo-crop.png',
      'logo_gold_mark'  => $img . '1440-urena-roofing-gold-logomark-scaled.png',
      'crew_action'     => $img . 'Copia-de-dji_fly_20250827_155028_0380_1756387289500_photo-scaled.jpg',
      'team_photo'      => $img . 'Copia-de-FOTOS-CON-EL-PRESIDENCIAL-1-scaled.png',

      'svc_residential' => $img . 'Copia-de-DJI_20260610190636_0019_D-scaled.jpg',
      'svc_storm'       => $img . 'IMG-20250218-WA0015.jpg',
      'svc_maintenance' => $img . 'Copia-de-DJI_20260610064949_0032_D-scaled.jpg',
      'svc_commercial'  => $img . 'Copia-de-DJI_20260610064620_0008_D-scaled.jpg',
      'svc_hoa'         => $img . 'Copia-de-IMG-20250902-WA0046.jpg',

      'ba1_before'      => $img . 'Copia-de-DJI_20260610074419_0015_D-scaled.jpg',
      'ba1_after'       => $img . 'IMG-20250218-WA0048.jpg',
      'ba2_before'      => $img . 'IMG-20250218-WA0015.jpg',
      'ba2_after'       => $img . 'Copia-de-DJI_20260610190636_0019_D-scaled.jpg',
      'ba3_before'      => $img . 'IMG-20250218-WA0038.jpg',
      'ba3_after'       => $img . 'Copia-de-DJI_20260610190743_0027_D-scaled.jpg',
    ];

    // ------------------------------------------------------------
    // ICONOS — sets de stroke-icons inline (sin dependencias)
    // ------------------------------------------------------------
    $icons = [
      'shield'    => '<path d="M12 3 5 6v6c0 5 3 8.5 7 9 4-.5 7-4 7-9V6z"/><path d="m9 12 2 2 4-4"/>',
      'hardhat'   => '<path d="M4 18h16"/><path d="M6 18a6 6 0 0 1 12 0"/><rect x="10" y="4" width="4" height="4" rx="1"/><path d="M12 8v2"/>',
      'file-check'=> '<path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8z"/><path d="M14 3v5h5"/><path d="m9.5 15 1.8 1.8L15 13"/>',
      'search'    => '<circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3"/>',
      'pin'       => '<path d="M12 22s7-6.7 7-12.4A7 7 0 1 0 5 9.6C5 15.3 12 22 12 22z"/><circle cx="12" cy="9.5" r="2.4"/>',
      'camera'    => '<path d="M4 8h3l2-2h6l2 2h3v11H4z"/><circle cx="12" cy="13.5" r="3.4"/>',
      'file-text' => '<path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8z"/><path d="M14 3v5h5"/><path d="M9 13h6"/><path d="M9 17h4"/>',
      'zap'       => '<path d="M12 2 4 14h6l-1 8 9-13h-6z"/>',
      'handshake' => '<path d="m3 12 4-4 4 3 4-4 6 6"/><path d="m21 13-3 3-2-2"/><path d="m9 11 3.5 3.5a1.5 1.5 0 0 1-2 2.2L7 13"/>',
      'home'      => '<path d="M4 11 12 4l8 7"/><path d="M6 10v10h12V10"/>',
      'cloud'     => '<path d="M7 18a4 4 0 0 1-1-7.9A5 5 0 0 1 15.9 8 4.5 4.5 0 0 1 17 18z"/><path d="m10 20 1.5-3"/><path d="m14 20 1.5-3"/>',
      'clipboard' => '<rect x="6" y="4" width="12" height="17" rx="2"/><path d="M9 4V3a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1"/><path d="m9 13 2 2 4-4"/>',
      'building'  => '<rect x="5" y="3" width="14" height="18"/><path d="M9 8h1M14 8h1M9 12h1M14 12h1M9 16h1M14 16h1"/>',
      'users'     => '<circle cx="9" cy="8" r="3"/><path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"/><circle cx="17" cy="9" r="2.4"/><path d="M15.5 14a4.6 4.6 0 0 1 5.5 4.5"/>',
      'arrow'     => '<path d="M5 12h14"/><path d="m13 6 6 6-6 6"/>',
      'phone'     => '<path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2C9.4 21 3 14.6 3 6a2 2 0 0 1 2-2z"/>',
      'plus'      => '<path d="M12 5v14"/><path d="M5 12h14"/>',
      'credit-card' => '<rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/><path d="M6 15h4"/>',
    ];
    $icon = function ($name, $extra_class = '') use ($icons) {
      $paths = $icons[$name] ?? '';
      return '<svg class="ur-ic ' . esc_attr($extra_class) . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $paths . '</svg>';
    };

    // ------------------------------------------------------------
    // DATA — servicios, trust bar, why-bullets, áreas, reseñas
    // ------------------------------------------------------------
    $trust_items = [
      ['icon' => 'shield',     'label' => 'Licensed & Insured', 'label_es' => 'Con Licencia y Asegurados', 'label_vi' => 'Có Giấy Phép & Bảo Hiểm'],
      ['icon' => 'hardhat',    'label' => "Workers' Comp Covered", 'label_es' => 'Compensación Laboral Cubierta', 'label_vi' => 'Được Bảo Hiểm Bồi Thường Lao Động'],
      ['icon' => 'file-check', 'label' => 'HB2102 Compliant', 'label_es' => 'Cumple con HB2102', 'label_vi' => 'Tuân Thủ HB2102'],
      ['icon' => 'search',     'label' => 'Free Inspections', 'label_es' => 'Inspecciones Gratuitas', 'label_vi' => 'Kiểm Tra Miễn Phí'],
      ['icon' => 'pin',        'label' => 'Locally Owned · Houston, TX', 'label_es' => 'Empresa Local · Houston, TX', 'label_vi' => 'Doanh Nghiệp Địa Phương · Houston, TX'],
    ];

    $why_bullets = [
      ['icon' => 'handshake', 'title' => 'Insurance Claim Assistance', 'title_es' => 'Asistencia con Reclamos de Seguro', 'title_vi' => 'Hỗ Trợ Yêu Cầu Bồi Thường Bảo Hiểm', 'copy' => 'We guide you through the process, step by step.', 'copy_es' => 'Te guiamos en el proceso, paso a paso.', 'copy_vi' => 'Chúng tôi đồng hành cùng bạn qua từng bước của quy trình.'],
      ['icon' => 'camera',    'title' => 'Before & After Photo Documentation', 'title_es' => 'Documentación Fotográfica de Antes y Después', 'title_vi' => 'Tài Liệu Hình Ảnh Trước & Sau', 'copy' => 'Full visual proof of every job.', 'copy_es' => 'Prueba visual completa de cada trabajo.', 'copy_vi' => 'Bằng chứng hình ảnh đầy đủ cho mọi công trình.'],
      ['icon' => 'file-text', 'title' => 'Clear, Written Warranties', 'title_es' => 'Garantías Claras y por Escrito', 'title_vi' => 'Bảo Hành Rõ Ràng, Bằng Văn Bản', 'copy' => 'No surprises, no fine print games.', 'copy_es' => 'Sin sorpresas, sin letra chica.', 'copy_vi' => 'Không bất ngờ, không mánh khóe trong điều khoản nhỏ.'],
      ['icon' => 'zap',       'title' => 'Fast Emergency Response', 'title_es' => 'Respuesta Rápida de Emergencia', 'title_vi' => 'Phản Ứng Khẩn Cấp Nhanh Chóng', 'copy' => "Storm damage doesn't wait, and neither do we.", 'copy_es' => 'Los daños por tormenta no esperan, y nosotros tampoco.', 'copy_vi' => 'Thiệt hại do bão không chờ đợi, và chúng tôi cũng vậy.'],
    ];

    $services = [
      ['icon' => 'home',     'title' => 'Residential Roof Replacement', 'title_es' => 'Reemplazo de Techo Residencial', 'title_vi' => 'Thay Mái Nhà Ở', 'copy' => 'Full roof replacements built to protect your home for decades.', 'copy_es' => 'Reemplazos completos de techo, hechos para proteger tu hogar por décadas.', 'copy_vi' => 'Thay mái toàn diện, được thi công để bảo vệ ngôi nhà của bạn trong nhiều thập kỷ.', 'image' => $assets['svc_residential'], 'link' => '/services/residential-roof-replacement'],
      ['icon' => 'cloud',    'title' => 'Storm & Hail Damage Repair', 'title_es' => 'Reparación de Daños por Tormenta y Granizo', 'title_vi' => 'Sửa Chữa Hư Hỏng Do Bão & Mưa Đá', 'copy' => "Fast, insurance-ready repairs after Houston's toughest storms.", 'copy_es' => 'Reparaciones rápidas y listas para el seguro después de las peores tormentas de Houston.', 'copy_vi' => 'Sửa chữa nhanh chóng, sẵn sàng hồ sơ bảo hiểm sau những cơn bão khắc nghiệt nhất của Houston.', 'image' => $assets['svc_storm'], 'link' => '/services/storm-hail-damage-repair'],
      ['icon' => 'clipboard','title' => 'Roof Maintenance & Inspections', 'title_es' => 'Mantenimiento e Inspecciones de Techo', 'title_vi' => 'Bảo Trì & Kiểm Tra Mái Nhà', 'copy' => 'Preventive care that catches small problems before they become big ones.', 'copy_es' => 'Cuidado preventivo que detecta problemas pequeños antes de que se agranden.', 'copy_vi' => 'Chăm sóc phòng ngừa giúp phát hiện sớm những vấn đề nhỏ trước khi trở thành vấn đề lớn.', 'image' => $assets['svc_maintenance'], 'link' => '/services/roof-maintenance-inspections'],
      // Temporalmente oculto a pedido del cliente — no borrar, solo descomentar para reactivar.
      // ['icon' => 'building', 'title' => 'Commercial & Flat Roofing', 'title_es' => 'Techado Comercial y Plano', 'title_vi' => 'Mái Nhà Thương Mại & Mái Bằng', 'copy' => 'Reliable roofing solutions for businesses and flat-roof properties.', 'copy_es' => 'Soluciones de techado confiables para negocios y propiedades de techo plano.', 'copy_vi' => 'Giải pháp mái nhà đáng tin cậy cho doanh nghiệp và các công trình mái bằng.', 'image' => $assets['svc_commercial'], 'link' => '/services/commercial-flat-roofing'],
      ['icon' => 'users',    'title' => 'HOA Roofing Programs', 'title_es' => 'Programas de Techado para HOA', 'title_vi' => 'Chương Trình Mái Nhà cho HOA', 'copy' => 'Scheduled inspections and maintenance contracts built for communities.', 'copy_es' => 'Inspecciones programadas y contratos de mantenimiento para comunidades.', 'copy_vi' => 'Lịch kiểm tra định kỳ và hợp đồng bảo trì được thiết kế cho cộng đồng dân cư.', 'image' => $assets['svc_hoa'], 'link' => '/services/hoa-roofing-programs'],
    ];

    // Nombres de zonas — no requieren traducción (nombres propios de lugares).
    // Derivado de la lista real de ZIP codes de cobertura, agrupado por condado.
    $areas = [
      // Harris County
      'Houston', 'Humble', 'Kingwood', 'Atascocita', 'Spring', 'Tomball',
      'Cypress', 'Hockley', 'Katy', 'La Porte', 'Pasadena', 'Baytown',
      'Channelview', 'Crosby',
      // Fort Bend County
      'Richmond', 'Fulshear', 'Missouri City', 'Rosenberg', 'Sugar Land', 'Fresno',
      // Montgomery County
      'Montgomery', 'Magnolia', 'The Woodlands',
      // Brazoria County
      'Alvin', 'Angleton', 'Manvel', 'Pearland', 'Rosharon',
      // Galveston County
      'Dickinson', 'Friendswood', 'Galveston', 'Hitchcock', 'La Marque', 'Texas City',
      // Otros ZIPs de la lista de cobertura
      'Toms River', 'Homestead', 'Fort Worth', 'Palacios',
    ];

    $service_options = [
      ['en' => 'Residential Roof Replacement', 'es' => 'Reemplazo de Techo Residencial', 'vi' => 'Thay Mái Nhà Ở'],
      ['en' => 'Storm & Hail Damage Repair', 'es' => 'Reparación de Daños por Tormenta y Granizo', 'vi' => 'Sửa Chữa Hư Hỏng Do Bão & Mưa Đá'],
      ['en' => 'Roof Maintenance & Inspections', 'es' => 'Mantenimiento e Inspecciones de Techo', 'vi' => 'Bảo Trì & Kiểm Tra Mái Nhà'],
      // ['en' => 'Commercial & Flat Roofing', 'es' => 'Techado Comercial y Plano', 'vi' => 'Mái Nhà Thương Mại & Mái Bằng'], // Temporalmente oculto a pedido del cliente.
      ['en' => 'HOA Roofing Programs', 'es' => 'Programas de Techado para HOA', 'vi' => 'Chương Trình Mái Nhà cho HOA'],
      ['en' => 'Not Sure Yet', 'es' => 'Aún No Estoy Seguro', 'vi' => 'Chưa Chắc Chắn'],
    ];

    $before_after = [
      ['before' => $assets['ba1_before'], 'after' => $assets['ba1_after'], 'label' => 'Full Tear-Off & Replacement', 'label_es' => 'Demolición Total y Reemplazo', 'label_vi' => 'Dỡ Bỏ Toàn Bộ & Thay Mới', 'zip' => '77008'],
      ['before' => $assets['ba2_before'], 'after' => $assets['ba2_after'], 'label' => 'Storm Damage Repair',        'label_es' => 'Reparación de Daños por Tormenta', 'label_vi' => 'Sửa Chữa Hư Hỏng Do Bão', 'zip' => '77059'],
      ['before' => $assets['ba3_before'], 'after' => $assets['ba3_after'], 'label' => 'Residential Reroof',         'label_es' => 'Retechado Residencial', 'label_vi' => 'Lợp Lại Mái Nhà Ở', 'zip' => '77479'],
    ];

    $home_faqs = [
      ['q' => 'Do you offer free roof inspections and estimates?', 'q_es' => '¿Ofrecen inspecciones y estimados de techo gratuitos?', 'q_vi' => 'Quý vị có cung cấp dịch vụ kiểm tra mái nhà và báo giá miễn phí không?', 'a' => 'Yes. We provide free inspections and estimates for residential, commercial, and HOA properties across the Greater Houston area, with no obligation.', 'a_es' => 'Sí. Ofrecemos inspecciones y estimados gratuitos para propiedades residenciales, comerciales y de HOA en toda el área metropolitana de Houston, sin ningún compromiso.', 'a_vi' => 'Có. Chúng tôi cung cấp dịch vụ kiểm tra và báo giá miễn phí cho các bất động sản nhà ở, thương mại và HOA trên khắp khu vực Houston, không ràng buộc bất kỳ nghĩa vụ nào.'],
      ['q' => 'How much does a roof replacement or repair cost?', 'q_es' => '¿Cuánto cuesta un reemplazo o reparación de techo?', 'q_vi' => 'Chi phí thay mái hoặc sửa mái nhà là bao nhiêu?', 'a' => 'Cost depends on your roof\'s size, materials, and the scope of work needed. We provide a free, itemized estimate after a full inspection, so you know exactly what you\'re paying for before any work begins.', 'a_es' => 'El costo depende del tamaño de tu techo, los materiales y el alcance del trabajo necesario. Te damos un estimado gratuito y detallado después de una inspección completa, para que sepas exactamente por qué estás pagando antes de que comience cualquier trabajo.', 'a_vi' => 'Chi phí phụ thuộc vào kích thước mái nhà, vật liệu sử dụng và phạm vi công việc cần thực hiện. Chúng tôi cung cấp báo giá chi tiết miễn phí sau khi kiểm tra toàn diện, để quý vị biết chính xác mình đang trả tiền cho những gì trước khi công việc bắt đầu.'],
      ['q' => 'Do you work with my insurance company on storm or hail damage claims?', 'q_es' => '¿Trabajan con mi compañía de seguros en reclamos por daños de tormenta o granizo?', 'q_vi' => 'Quý vị có làm việc với công ty bảo hiểm của tôi về các yêu cầu bồi thường thiệt hại do bão hoặc mưa đá không?', 'a' => 'Yes. We guide homeowners through the insurance claim process step by step and provide full before-and-after photo documentation to support your claim.', 'a_es' => 'Sí. Guiamos a los propietarios a través del proceso de reclamo de seguro paso a paso y proporcionamos documentación fotográfica completa de antes y después para respaldar tu reclamo.', 'a_vi' => 'Có. Chúng tôi hướng dẫn chủ nhà qua từng bước của quy trình yêu cầu bồi thường bảo hiểm và cung cấp đầy đủ tài liệu hình ảnh trước và sau để hỗ trợ hồ sơ của quý vị.'],
      ['q' => 'Is it legal for a contractor to waive my insurance deductible?', 'q_es' => '¿Es legal que un contratista me exima del deducible del seguro?', 'q_vi' => 'Việc nhà thầu miễn khoản khấu trừ bảo hiểm của tôi có hợp pháp không?', 'a' => 'No. Under Texas law (HB2102), it\'s illegal for a roofing contractor to offer to waive, pay, or rebate your insurance deductible. Urena Roofing Contractor operates in full compliance with HB2102.', 'a_es' => 'No. Bajo la ley de Texas (HB2102), es ilegal que un contratista de techos ofrezca eximir, pagar o reembolsar tu deducible del seguro. Ureña Roofing Contractor opera en total cumplimiento con HB2102.', 'a_vi' => 'Không. Theo luật Texas (HB2102), việc nhà thầu lợp mái đề nghị miễn, thanh toán hoặc hoàn lại khoản khấu trừ bảo hiểm của quý vị là bất hợp pháp. Urena Roofing Contractor hoạt động tuân thủ đầy đủ HB2102.'],
      ['q' => 'Are you licensed and insured?', 'q_es' => '¿Tienen licencia y seguro?', 'q_vi' => 'Quý vị có giấy phép và bảo hiểm không?', 'a' => 'Yes. We hold a General Cleaning License, full Liability Insurance, and Workers\' Compensation coverage, so every project is protected from start to finish.', 'a_es' => 'Sí. Contamos con Licencia General de Limpieza, Seguro de Responsabilidad Civil completo, y cobertura de Compensación para Trabajadores, así que cada proyecto está protegido de principio a fin.', 'a_vi' => 'Có. Chúng tôi có Giấy Phép Vệ Sinh Tổng Quát, Bảo Hiểm Trách Nhiệm đầy đủ, và Bảo Hiểm Bồi Thường cho Người Lao Động, vì vậy mọi dự án đều được bảo vệ từ đầu đến cuối.'],
      ['q' => 'How quickly can you respond after storm or hail damage?', 'q_es' => '¿Qué tan rápido pueden responder después de daños por tormenta o granizo?', 'q_vi' => 'Quý vị có thể phản hồi nhanh như thế nào sau khi xảy ra thiệt hại do bão hoặc mưa đá?', 'a' => 'Storm damage doesn\'t wait, and neither do we. We offer fast emergency response for storm and hail damage across the Greater Houston area.', 'a_es' => 'Los daños por tormenta no esperan, y nosotros tampoco. Ofrecemos respuesta de emergencia rápida ante daños por tormenta y granizo en toda el área de Houston.', 'a_vi' => 'Thiệt hại do bão không chờ đợi, và chúng tôi cũng vậy. Chúng tôi cung cấp dịch vụ phản ứng khẩn cấp nhanh chóng cho thiệt hại do bão và mưa đá trên khắp khu vực Houston.'],
      ['q' => 'What areas do you serve?', 'q_es' => '¿Qué áreas atienden?', 'q_vi' => 'Quý vị phục vụ những khu vực nào?', 'a' => 'We proudly serve homeowners, HOAs, and businesses throughout the Greater Houston area, including Bellaire, Houston Heights, Memorial, Sugar Land, Clear Lake, Katy, Cypress, Fulshear, Richmond, West University, and surrounding communities.', 'a_es' => 'Atendemos con orgullo a propietarios, HOAs y negocios en toda el área metropolitana de Houston, incluyendo Bellaire, Houston Heights, Memorial, Sugar Land, Clear Lake, Katy, Cypress, Fulshear, Richmond, West University y comunidades cercanas.', 'a_vi' => 'Chúng tôi tự hào phục vụ các chủ nhà, HOA và doanh nghiệp trên khắp khu vực Houston, bao gồm Bellaire, Houston Heights, Memorial, Sugar Land, Clear Lake, Katy, Cypress, Fulshear, Richmond, West University và các cộng đồng lân cận.', 'download' => ['label' => 'Download Our Brochure (PDF)', 'label_es' => 'Descarga Nuestro Folleto (PDF)', 'label_vi' => 'Tải Xuống Brochure Của Chúng Tôi (PDF)', 'href' => $img . 'UrenaRoofinBrochure_compressed-1.pdf']],
      ['q' => 'Do you offer warranties on your work?', 'q_es' => '¿Ofrecen garantía en su trabajo?', 'q_vi' => 'Quý vị có bảo hành cho công việc của mình không?', 'a' => 'Yes. Every project comes with a clear, written warranty. No surprises, no fine print.', 'a_es' => 'Sí. Cada proyecto incluye una garantía clara y por escrito. Sin sorpresas, sin letra chica.', 'a_vi' => 'Có. Mọi dự án đều đi kèm với bảo hành rõ ràng, bằng văn bản. Không bất ngờ, không điều khoản nhỏ ẩn giấu.'],
      ['q' => 'Do you handle commercial and HOA roofing?', 'q_es' => '¿Manejan techos comerciales y de HOA?', 'q_vi' => 'Quý vị có nhận thi công mái nhà thương mại và HOA không?', 'a' => 'Yes. Alongside residential roofing, we provide commercial and flat roofing services, plus scheduled inspection and maintenance programs built for HOAs and communities.', 'a_es' => 'Sí. Además de techos residenciales, ofrecemos servicios de techado comercial y plano, además de programas de inspección y mantenimiento programados para HOAs y comunidades.', 'a_vi' => 'Có. Bên cạnh mái nhà ở, chúng tôi còn cung cấp dịch vụ mái nhà thương mại và mái bằng, cùng với các chương trình kiểm tra và bảo trì định kỳ được thiết kế riêng cho HOA và cộng đồng dân cư.'],
    ];

    $insurance_partners = [
      $img . 'logo-7.png',
      $img . 'logo-6.png',
      $img . 'logo-5.png',
      $img . 'logo-4.png',
      $img . 'logo-3.png',
      $img . 'logo-2.png',
      $img . 'logo-1.png',
      $img . 'logo-0.png',
    ];

    // ------------------------------------------------------------
    // ESTIMATE FORM — Name, Phone, Email, Service, ZIP
    // $form_source identifica en el correo de cuál de los dos forms vino el lead.
    // ------------------------------------------------------------
    $render_estimate_form = function ($form_id, $form_source = '') use ($service_options) {
      $name_id = "{$form_id}_name"; $phone_id = "{$form_id}_phone"; $email_id = "{$form_id}_email";
      $service_id = "{$form_id}_service"; $zip_id = "{$form_id}_zip"; $policy_id = "{$form_id}_policy";
      $submit_id = "{$form_id}_submit"; $success_id = "{$form_id}_success"; $error_id = "{$form_id}_error";
      $honey_id = "{$form_id}_ref";
      ob_start(); ?>
      <div class="ur-formcard">
        <span class="ur-hud-corner ur-hud-corner--tl" aria-hidden="true"></span>
        <span class="ur-hud-corner ur-hud-corner--br" aria-hidden="true"></span>
        <form
          id="<?php echo esc_attr($form_id); ?>"
          class="ur-estimate-form js-ur-email-form"
          method="post" action="#"
          data-success-id="<?php echo esc_attr($success_id); ?>"
          data-error-id="<?php echo esc_attr($error_id); ?>"
          data-policy-id="<?php echo esc_attr($policy_id); ?>"
          data-submit-id="<?php echo esc_attr($submit_id); ?>"
          data-form-source="<?php echo esc_attr($form_source); ?>"
        >
          <span class="ur-estimate-form__readout" data-en="REQUEST · FREE ESTIMATE" data-es="SOLICITA · ESTIMADO GRATIS" data-vi="YÊU CẦU · BÁO GIÁ MIỄN PHÍ">REQUEST · FREE ESTIMATE</span>
          <h3 class="ur-estimate-form__title" data-en="Get Your Free Roofing Estimate" data-es="Obtén tu Estimado de Techo Gratis" data-vi="Nhận Báo Giá Mái Nhà Miễn Phí Của Bạn">Get Your Free Roofing Estimate</h3>
          <p class="ur-estimate-form__trust" data-en="Licensed &amp; Insured &middot; HB2102 Compliant &middot; Response within 24h" data-es="Con Licencia y Asegurados &middot; Cumple con HB2102 &middot; Respuesta en 24h" data-vi="Có Giấy Phép & Bảo Hiểm &middot; Tuân Thủ HB2102 &middot; Phản Hồi Trong 24h">Licensed &amp; Insured &middot; HB2102 Compliant &middot; Response within 24h</p>

          <div class="ur-estimate-form__grid">
            <div class="ur-estimate-form__field">
              <label for="<?php echo esc_attr($name_id); ?>"><span data-en="Full Name *" data-es="Nombre Completo *" data-vi="Họ và Tên *">Full Name *</span></label>
              <input id="<?php echo esc_attr($name_id); ?>" type="text" name="full_name" placeholder="Your full name" required>
            </div>
            <div class="ur-estimate-form__field">
              <label for="<?php echo esc_attr($phone_id); ?>"><span data-en="Phone Number *" data-es="Número de Teléfono *" data-vi="Số Điện Thoại *">Phone Number *</span></label>
              <input id="<?php echo esc_attr($phone_id); ?>" type="tel" name="phone" placeholder="(832) 739-2842" required>
            </div>
            <div class="ur-estimate-form__field">
              <label for="<?php echo esc_attr($email_id); ?>"><span data-en="Email Address *" data-es="Correo Electrónico *" data-vi="Địa Chỉ Email *">Email Address *</span></label>
              <input id="<?php echo esc_attr($email_id); ?>" type="email" name="email" placeholder="you@example.com" required>
            </div>
            <div class="ur-estimate-form__field">
              <label for="<?php echo esc_attr($zip_id); ?>"><span data-en="Property ZIP *" data-es="Código Postal *" data-vi="Mã ZIP Bất Động Sản *">Property ZIP *</span></label>
              <input id="<?php echo esc_attr($zip_id); ?>" type="text" name="zip" placeholder="77008" inputmode="numeric" maxlength="5" required>
            </div>
            <div class="ur-estimate-form__field ur-estimate-form__field--full">
              <label for="<?php echo esc_attr($service_id); ?>"><span data-en="Service Needed *" data-es="Servicio Requerido *" data-vi="Dịch Vụ Cần Thiết *">Service Needed *</span></label>
              <select id="<?php echo esc_attr($service_id); ?>" name="service" required>
                <option value="" data-en="Select a service" data-es="Selecciona un servicio" data-vi="Chọn một dịch vụ">Select a service</option>
                <?php foreach ($service_options as $option) : ?>
                  <option value="<?php echo esc_attr($option['en']); ?>" data-en="<?php echo esc_attr($option['en']); ?>" data-es="<?php echo esc_attr($option['es']); ?>" data-vi="<?php echo esc_attr($option['vi']); ?>"><?php echo esc_html($option['en']); ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div id="<?php echo esc_attr($success_id); ?>" class="ur-form-message ur-form-message--success" aria-live="polite"></div>
          <div id="<?php echo esc_attr($error_id); ?>" class="ur-form-message ur-form-message--error" aria-live="polite"></div>

          <!-- Honeypot anti-spam — invisible para personas, visible para bots.
               El name evita palabras como "company" u "organization": el
               autocompletado de Chrome las reconoce y rellena el campo solo,
               aunque esté oculto, disparando el bloqueo con usuarios reales. -->
          <div class="ur-estimate-form__honeypot" aria-hidden="true">
            <label for="<?php echo esc_attr($honey_id); ?>">Reference Code</label>
            <input id="<?php echo esc_attr($honey_id); ?>" type="text" name="ur_ref_code" tabindex="-1" autocomplete="off">
          </div>

          <label class="ur-estimate-form__check">
            <input id="<?php echo esc_attr($policy_id); ?>" type="checkbox" required>
            <span data-en='I agree to the &lt;a href="/privacy-policy"&gt;Privacy Policy&lt;/a&gt; and &lt;a href="/terms-of-service"&gt;Terms of Service&lt;/a&gt;.' data-es='Acepto la &lt;a href="/privacy-policy"&gt;Política de Privacidad&lt;/a&gt; y los &lt;a href="/terms-of-service"&gt;Términos de Servicio&lt;/a&gt;.' data-vi='Tôi đồng ý với &lt;a href="/privacy-policy"&gt;Chính Sách Bảo Mật&lt;/a&gt; và &lt;a href="/terms-of-service"&gt;Điều Khoản Dịch Vụ&lt;/a&gt;.'>I agree to the <a href="/privacy-policy">Privacy Policy</a> and <a href="/terms-of-service">Terms of Service</a>.</span>
          </label>

          <button id="<?php echo esc_attr($submit_id); ?>" type="submit" class="ur-btn ur-btn-gold ur-magnetic ur-estimate-form__submit">
            <span data-en="Send Request" data-es="Enviar Solicitud" data-vi="Gửi Yêu Cầu">Send Request</span>
          </button>
        </form>
      </div>
      <?php
      return ob_get_clean();
    };
  ?>

  <!-- ============================================================ -->
  <!-- HERO                                                          -->
  <!-- ============================================================ -->
  <section class="ur-hero relative min-h-[720px] w-full overflow-hidden lg:min-h-[860px]">
    <img
      class="ur-hero__video absolute inset-0 h-full w-full object-cover"
      src="<?php echo esc_url($assets['hero_image']); ?>"
      alt="Aerial view of a Urena Roofing crew installing a new roof in Houston, TX"
      data-en-alt="Aerial view of a Urena Roofing crew installing a new roof in Houston, TX"
      data-es-alt="Vista aérea de un equipo de Ureña Roofing instalando un techo nuevo en Houston, TX"
      data-vi-alt="Cảnh trên không của đội thi công Urena Roofing đang lắp mái nhà mới tại Houston, TX"
    >
    <div class="ur-hero__scrim absolute inset-0"></div>
    <div class="ur-hero__vignette absolute inset-0" aria-hidden="true"></div>

    <span class="ur-hud-corner ur-hud-corner--tl ur-hud-corner--xl" aria-hidden="true"></span>
    <span class="ur-hud-corner ur-hud-corner--tr ur-hud-corner--xl" aria-hidden="true"></span>
    <span class="ur-hud-corner ur-hud-corner--bl ur-hud-corner--xl" aria-hidden="true"></span>
    <span class="ur-hud-corner ur-hud-corner--br ur-hud-corner--xl" aria-hidden="true"></span>

    <span class="ur-hero__telemetry ur-hero__telemetry--tr" aria-hidden="true" data-en="29.7604° N · 95.3698° W<br>AERIAL ROOF SCAN · ACTIVE" data-es="29.7604° N · 95.3698° W<br>ESCANEO AÉREO DE TECHO · ACTIVO" data-vi="29.7604° N · 95.3698° W<br>QUÉT MÁI NHÀ TRÊN KHÔNG · ĐANG HOẠT ĐỘNG">29.7604° N · 95.3698° W<br>AERIAL ROOF SCAN · ACTIVE</span>
    <span class="ur-hero__telemetry ur-hero__telemetry--bl" aria-hidden="true" data-en="SYS.STATUS: OPERATIONAL<br>HOUSTON, TX · GREATER METRO" data-es="ESTADO: OPERATIVO<br>HOUSTON, TX · ÁREA METRO" data-vi="TRẠNG THÁI HỆ THỐNG: HOẠT ĐỘNG<br>HOUSTON, TX · KHU VỰC ĐÔ THỊ">SYS.STATUS: OPERATIONAL<br>HOUSTON, TX · GREATER METRO</span>

    <div class="relative z-10 mx-auto grid min-h-[720px] max-w-7xl items-center gap-10 px-4 py-24 lg:min-h-[860px] lg:grid-cols-[1.15fr_0.85fr] lg:gap-14">
      <div>
      <span class="ur-readout ur-fade-in-0">
        <span class="ur-readout__dot"></span><span data-en="LICENSED &amp; INSURED &middot; HB2102 COMPLIANT" data-es="CON LICENCIA Y ASEGURADOS &middot; CUMPLE CON HB2102" data-vi="CÓ GIẤY PHÉP & BẢO HIỂM &middot; TUÂN THỦ HB2102">LICENSED &amp; INSURED &middot; HB2102 COMPLIANT</span>
      </span>

      <h1 class="mt-5 max-w-3xl text-5xl font-black uppercase leading-[0.95] tracking-[-0.01em] text-white md:text-7xl" data-en="Roofing with Authority" data-es="Autoridad en Techos" data-vi="Uy Tín Ngành Mái Nhà">
        <?php
          $hero_words = explode(' ', 'Roofing with Authority');
          foreach ($hero_words as $i => $word) : ?>
            <span class="ur-word"><span class="ur-word__inner" style="--i:<?php echo (int) $i; ?>"><?php echo esc_html($word); ?></span></span><?php echo ' '; ?>
          <?php endforeach; ?>
      </h1>

      <p class="ur-fade-in-2 mt-6 max-w-xl text-base leading-7 text-white/80 md:text-lg" data-en="Houston's trusted roofing contractor for residential, commercial, and storm damage repair. Licensed, insured, and fully compliant with Texas roofing law." data-es="El contratista de techos de confianza en Houston para reparaciones residenciales, comerciales y de daños por tormenta. Con licencia, asegurados, y en total cumplimiento con la ley de techado de Texas." data-vi="Nhà thầu lợp mái đáng tin cậy tại Houston cho các công trình nhà ở, thương mại và sửa chữa thiệt hại do bão. Có giấy phép, bảo hiểm, và tuân thủ đầy đủ luật lợp mái của Texas.">
        Houston's trusted roofing contractor for residential, commercial, and storm damage repair.
        Licensed, insured, and fully compliant with Texas roofing law.
      </p>

      <div class="ur-fade-in-3 mt-9 flex flex-col gap-4 sm:flex-row">
        <a href="#ur-estimate" class="ur-btn ur-btn-gold ur-magnetic inline-flex items-center justify-center gap-2 px-8 py-4 text-sm font-black uppercase tracking-[0.12em]">
          <span data-en="Get a Free Estimate" data-es="Obtén un Estimado Gratis" data-vi="Nhận Báo Giá Miễn Phí">Get a Free Estimate</span>
        </a>
        <a href="tel:+18327392842" class="ur-btn ur-btn-outline ur-magnetic inline-flex items-center justify-center gap-2 px-8 py-4 text-sm font-black uppercase tracking-[0.12em] text-white">
          <?php echo $icon('phone', 'h-4 w-4'); ?><span data-en="Call Now: (832) 739-2842" data-es="Llama Ahora: (832) 739-2842" data-vi="Gọi Ngay: (832) 739-2842">Call Now: (832) 739-2842</span>
        </a>
      </div>
      </div>

      <div class="ur-fade-in-3">
        <?php echo $render_estimate_form('ur-home-hero-form', 'Homepage — Hero Form'); ?>
      </div>
    </div>

    <a href="#services" class="ur-hero__scrollcue" aria-label="Scroll to services">
      <span data-en="SCROLL" data-es="DESLIZAR" data-vi="CUỘN XUỐNG">SCROLL</span>
      <span class="ur-hero__scrollcue-line" aria-hidden="true"></span>
    </a>
  </section>

  <!-- ============================================================ -->
  <!-- TRUST BAR                                                     -->
  <!-- ============================================================ -->
  <section class="ur-trustbar relative">
    <div class="ur-trustbar__texture" aria-hidden="true"></div>
    <div class="ur-trustbar__track">
      <?php for ($i = 0; $i < 2; $i++) : ?>
        <div class="ur-trustbar__group" <?php echo $i === 1 ? 'aria-hidden="true"' : ''; ?>>
          <?php foreach ($trust_items as $t) : ?>
            <span class="ur-trustbar__item"><?php echo $icon($t['icon'], 'h-4 w-4'); ?><span data-en="<?php echo esc_attr($t['label']); ?>" data-es="<?php echo esc_attr($t['label_es']); ?>" data-vi="<?php echo esc_attr($t['label_vi']); ?>"><?php echo esc_html($t['label']); ?></span></span>
            <span class="ur-trustbar__dot" aria-hidden="true"></span>
          <?php endforeach; ?>
        </div>
      <?php endfor; ?>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- WHY HOMEOWNERS TRUST                                          -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden bg-[#EEF1F5] py-20 lg:py-28">
    <div class="ur-blueprint-texture" aria-hidden="true"></div>

    <div class="relative mx-auto grid max-w-7xl gap-14 px-4 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
      <div class="ur-reveal-left">
        <p class="ur-eyebrow" data-en="Why Homeowners Trust Urena Roofing" data-es="Por Qué los Propietarios Confían en Ureña Roofing" data-vi="Vì Sao Chủ Nhà Tin Tưởng Urena Roofing">Why Homeowners Trust Urena Roofing</p>
        <h2 class="mt-4 max-w-xl text-3xl font-black uppercase leading-[1.02] tracking-[-0.01em] text-[#12103A] md:text-5xl" data-en="Protecting Your Roof, Your Budget, and Your Peace of Mind" data-es="Protegiendo tu Techo, tu Presupuesto y tu Tranquilidad" data-vi="Bảo Vệ Mái Nhà, Ngân Sách và Sự An Tâm Của Bạn">
          Protecting Your Roof, Your Budget, and Your Peace of Mind
        </h2>
        <p class="mt-6 max-w-xl text-base leading-8 text-[#5B5F6B]" data-en="Roofing scams are on the rise across Texas. Urena Roofing Contractor operates in full compliance with Texas law (HB2102), which means we never waive or absorb your insurance deductible, a practice that's not only unprofessional, it's illegal. We back every project with clear documentation, transparent pricing, and real accountability." data-es="Las estafas de techado van en aumento en todo Texas. Ureña Roofing Contractor opera en total cumplimiento con la ley de Texas (HB2102), lo que significa que nunca eximimos ni absorbemos tu deducible de seguro, una práctica que no solo es poco profesional, sino ilegal. Respaldamos cada proyecto con documentación clara, precios transparentes y responsabilidad real." data-vi="Các vụ lừa đảo trong ngành lợp mái đang gia tăng trên khắp Texas. Urena Roofing Contractor hoạt động tuân thủ đầy đủ luật Texas (HB2102), nghĩa là chúng tôi không bao giờ miễn hoặc gánh chịu khoản khấu trừ bảo hiểm của quý vị — một hành vi không chỉ thiếu chuyên nghiệp mà còn bất hợp pháp. Chúng tôi đảm bảo cho mọi dự án bằng tài liệu rõ ràng, giá cả minh bạch và trách nhiệm thực sự.">
          Roofing scams are on the rise across Texas. Urena Roofing Contractor operates in full compliance
          with Texas law (HB2102), which means we never waive or absorb your insurance deductible, a
          practice that's not only unprofessional, it's illegal. We back every project with clear
          documentation, transparent pricing, and real accountability.
        </p>

        <div class="mt-10 grid gap-x-8 gap-y-1 sm:grid-cols-2">
          <?php foreach ($why_bullets as $bi => $b) : ?>
            <div class="ur-reveal-stagger ur-why-bullet">
              <span class="ur-why-bullet__num"><?php echo esc_html(str_pad($bi + 1, 2, '0', STR_PAD_LEFT)); ?></span>
              <span class="ur-why-bullet__icon"><?php echo $icon($b['icon'], 'h-5 w-5'); ?></span>
              <h3 class="mt-3 text-sm font-black uppercase tracking-[0.02em] text-[#12103A]"><span data-en="<?php echo esc_attr($b['title']); ?>" data-es="<?php echo esc_attr($b['title_es']); ?>" data-vi="<?php echo esc_attr($b['title_vi']); ?>"><?php echo esc_html($b['title']); ?></span></h3>
              <p class="mt-1.5 text-[14px] leading-6 text-[#5B5F6B]"><span data-en="<?php echo esc_attr($b['copy']); ?>" data-es="<?php echo esc_attr($b['copy_es']); ?>" data-vi="<?php echo esc_attr($b['copy_vi']); ?>"><?php echo esc_html($b['copy']); ?></span></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="ur-reveal-right ur-photo-stack">
        <span class="ur-photo-stack__backdrop" aria-hidden="true"></span>
        <div class="ur-photo-frame ur-tilt group">
          <span class="ur-hud-corner ur-hud-corner--tl" aria-hidden="true"></span>
          <span class="ur-hud-corner ur-hud-corner--br" aria-hidden="true"></span>
          <img src="<?php echo esc_url($assets['crew_action']); ?>" alt="Urena Roofing crew on a residential roof job in Houston, TX" data-en-alt="Urena Roofing crew on a residential roof job in Houston, TX" data-es-alt="Ureña Roofing crew on a residential roof job in Houston, TX" data-vi-alt="Urena Roofing crew on a residential roof job in Houston, TX" class="h-full w-full object-cover transition duration-700 group-hover:scale-105" loading="lazy">
          <span class="ur-readout ur-photo-frame__tag">
            <span class="ur-readout__dot"></span><span data-en="ON-SITE &middot; HOUSTON, TX" data-es="EN OBRA &middot; HOUSTON, TX" data-vi="TẠI CÔNG TRÌNH &middot; HOUSTON, TX">ON-SITE &middot; HOUSTON, TX</span>
          </span>
        </div>
        <div class="ur-photo-stack__badge">
          <span class="ur-photo-stack__badge-icon"><?php echo $icon('shield', 'h-5 w-5'); ?></span>
          <span>
            <span class="ur-photo-stack__badge-label">HB2102</span>
            <span class="ur-photo-stack__badge-sub" data-en="Compliant Contractor" data-es="Contratista Cumplido" data-vi="Nhà Thầu Tuân Thủ">Compliant Contractor</span>
          </span>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- INSURANCE PARTNERS                                            -->
  <!-- ============================================================ -->
  <section class="ur-insurance relative isolate overflow-hidden py-20 lg:py-28">

    <div class="relative z-10 mx-auto max-w-6xl px-4">
      <div class="ur-reveal-up text-center">
        <p class="ur-eyebrow" data-en="Insurance Partners" data-es="Aseguradoras Aliadas" data-vi="Đối Tác Bảo Hiểm">Insurance Partners</p>
        <h2 class="mt-4 text-2xl font-black uppercase leading-[1.05] tracking-[-0.01em] text-[#12103A] md:text-4xl" data-en="Insurance Agencies We Work Alongside" data-es="Aseguradoras con las que Trabajamos" data-vi="Các Công Ty Bảo Hiểm Chúng Tôi Hợp Tác">
          Insurance Agencies We Work Alongside
        </h2>
        <p class="mx-auto mt-4 max-w-xl text-base leading-7 text-[#5B5F6B]" data-en="We coordinate directly with major carriers to keep your storm or hail damage claim documented, accurate, and moving." data-es="Coordinamos directamente con las principales aseguradoras para mantener tu reclamo de daños por tormenta o granizo documentado, preciso y avanzando." data-vi="Chúng tôi phối hợp trực tiếp với các công ty bảo hiểm lớn để đảm bảo hồ sơ yêu cầu bồi thường thiệt hại do bão hoặc mưa đá của quý vị được ghi nhận đầy đủ, chính xác và xử lý nhanh chóng.">
          We coordinate directly with major carriers to keep your storm or hail damage claim documented, accurate, and moving.
        </p>
      </div>

      <div class="ur-insurance-grid js-ur-insurance-grid mt-14">
        <?php foreach ($insurance_partners as $li => $logo) : ?>
          <div class="js-ur-flip-card ur-insurance-card" style="--flip-delay:<?php echo esc_attr($li * 70); ?>ms">
            <img src="<?php echo esc_url($logo); ?>" alt="Insurance partner logo" loading="lazy">
          </div>
        <?php endforeach; ?>
        <div class="js-ur-flip-card ur-insurance-card ur-insurance-card--more" style="--flip-delay:<?php echo esc_attr(count($insurance_partners) * 70); ?>ms"><span data-en="And More&hellip;" data-es="Y Más&hellip;" data-vi="Và Nhiều Hơn Nữa&hellip;">And More&hellip;</span></div>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- FINANCING CTA — cinta angosta, link externo a GoodLeap        -->
  <!-- ============================================================ -->
  <section class="ur-financing relative isolate overflow-hidden">
    <span class="ur-financing__shine" aria-hidden="true"></span>
    <div class="mx-auto flex max-w-6xl flex-wrap items-center justify-center gap-4 px-8 py-7 text-center sm:justify-between sm:px-12 sm:text-left lg:px-16">
      <div class="ur-reveal-left flex items-center gap-3">
        <span class="ur-financing__icon relative flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-full bg-[#12103A]/10 text-[#12103A]"><?php echo $icon('credit-card', 'h-5 w-5'); ?></span>
        <div>
          <p class="text-sm font-black uppercase tracking-[0.06em] text-[#12103A]" data-en="Financing Available" data-es="Financiamiento Disponible" data-vi="Có Hỗ Trợ Tài Chính">Financing Available</p>
          <p class="text-sm text-[#12103A]/80" data-en="Flexible payment plans for your roofing project. Get pre-qualified in minutes with GoodLeap." data-es="Planes de pago flexibles para tu proyecto de techado — precalifica en minutos con GoodLeap." data-vi="Các gói thanh toán linh hoạt cho dự án lợp mái của quý vị — đủ điều kiện sơ bộ chỉ trong vài phút với GoodLeap.">Flexible payment plans for your roofing project. Get pre-qualified in minutes with GoodLeap.</p>
        </div>
      </div>
      <a href="https://www.goodleap.dev/urenaroofingandcontractorllc/2962df91-70cc-4688-84c4-0f55df0135c6" target="_blank" rel="noopener noreferrer" class="ur-financing__cta ur-reveal-right ur-btn ur-btn-dark ur-magnetic inline-flex flex-shrink-0 items-center justify-center gap-2 px-6 py-3 text-sm font-black uppercase tracking-[0.1em] text-white">
        <span data-en="Apply for Financing" data-es="Solicitar Financiamiento" data-vi="Đăng Ký Tài Trợ">Apply for Financing</span> <?php echo $icon('arrow', 'h-4 w-4'); ?>
      </a>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- OUR SERVICES                                                  -->
  <!-- ============================================================ -->
  <section id="services" class="ur-services relative overflow-hidden bg-white py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-4">
      <div class="ur-reveal-up max-w-2xl">
        <p class="ur-eyebrow" data-en="Our Services" data-es="Nuestros Servicios" data-vi="Dịch Vụ Của Chúng Tôi">Our Services</p>
        <h2 class="mt-4 text-3xl font-black uppercase leading-[1.02] tracking-[-0.01em] text-[#12103A] md:text-5xl" data-en="Roofing Services Built for Every Need" data-es="Servicios de Techado para Cada Necesidad" data-vi="Dịch Vụ Lợp Mái Cho Mọi Nhu Cầu">
          Roofing Services Built for Every Need
        </h2>
        <p class="mt-5 text-base leading-7 text-[#5B5F6B]" data-en="From storm repairs to full replacements, we handle residential, commercial, and HOA roofing with the same commitment to quality." data-es="Desde reparaciones por tormenta hasta reemplazos completos, manejamos techado residencial, comercial y de HOA con el mismo compromiso de calidad." data-vi="Từ sửa chữa thiệt hại do bão đến thay mái toàn bộ, chúng tôi đảm nhận các công trình mái nhà ở, thương mại và HOA với cùng một cam kết về chất lượng.">
          From storm repairs to full replacements, we handle residential, commercial, and HOA roofing
          with the same commitment to quality.
        </p>
      </div>

      <div class="js-ur-svc-carousel ur-svc-carousel mt-14">
        <div class="ur-svc-carousel__stage">
          <?php foreach ($services as $i => $s) : ?>
            <article class="js-ur-svc-slide ur-svc-slide" data-index="<?php echo (int) $i; ?>">
              <div class="ur-svc-card group relative">
                <div class="ur-svc-card__media relative h-[240px] overflow-hidden">
                  <img src="<?php echo esc_url($s['image']); ?>" alt="<?php echo esc_attr($s['title']); ?> — Urena Roofing Contractor" data-en-alt="<?php echo esc_attr($s['title']); ?> — Urena Roofing Contractor" data-es-alt="<?php echo esc_attr($s['title_es']); ?> — Ureña Roofing Contractor" data-vi-alt="<?php echo esc_attr($s['title_vi']); ?> — Urena Roofing Contractor" class="h-full w-full object-cover transition duration-700 group-hover:scale-[1.06]" loading="lazy">
                  <span class="ur-svc-card__icon"><?php echo $icon($s['icon'], 'h-5 w-5'); ?></span>
                </div>
                <div class="p-6 md:p-7">
                  <h3 class="text-lg font-black uppercase tracking-[-0.005em] text-[#12103A] md:text-xl"><span data-en="<?php echo esc_attr($s['title']); ?>" data-es="<?php echo esc_attr($s['title_es']); ?>" data-vi="<?php echo esc_attr($s['title_vi']); ?>"><?php echo esc_html($s['title']); ?></span></h3>
                  <p class="mt-2 text-[14px] leading-6 text-[#5B5F6B]"><span data-en="<?php echo esc_attr($s['copy']); ?>" data-es="<?php echo esc_attr($s['copy_es']); ?>" data-vi="<?php echo esc_attr($s['copy_vi']); ?>"><?php echo esc_html($s['copy']); ?></span></p>
                  <a href="<?php echo esc_url($s['link']); ?>" class="ur-svc-card__link mt-4 inline-flex items-center gap-1.5 text-xs font-black uppercase tracking-[0.1em] text-[#12103A]">
                    <span data-en="Learn More" data-es="Ver Más" data-vi="Xem Thêm">Learn More</span> <?php echo $icon('arrow', 'h-3.5 w-3.5'); ?>
                  </a>
                </div>
              </div>
            </article>
          <?php endforeach; ?>
        </div>

        <div class="ur-svc-carousel__controls">
          <button type="button" class="js-ur-svc-prev ur-svc-carousel__nav" aria-label="Previous service">
            <?php echo $icon('arrow', 'h-4 w-4 rotate-180'); ?>
          </button>
          <div class="js-ur-svc-dots ur-svc-carousel__dots">
            <?php foreach ($services as $i => $s) : ?>
              <button type="button" class="js-ur-svc-dot ur-svc-carousel__dot" data-index="<?php echo (int) $i; ?>" aria-label="Go to <?php echo esc_attr($s['title']); ?>"></button>
            <?php endforeach; ?>
          </div>
          <button type="button" class="js-ur-svc-next ur-svc-carousel__nav" aria-label="Next service">
            <?php echo $icon('arrow', 'h-4 w-4'); ?>
          </button>
        </div>
      </div>

      <div class="ur-reveal-up mt-12 text-center">
        <a href="/services" class="ur-btn ur-btn-dark ur-magnetic inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.12em] text-white">
          <span data-en="View All Services" data-es="Ver Todos los Servicios" data-vi="Xem Tất Cả Dịch Vụ">View All Services</span>
        </a>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- SERVICE AREAS                                                 -->
  <!-- ============================================================ -->
  <section class="ur-areas relative overflow-hidden py-24 text-white lg:py-32">
    <div class="ur-radar" aria-hidden="true">
      <span class="ur-radar__ring ur-radar__ring--1"></span>
      <span class="ur-radar__ring ur-radar__ring--2"></span>
      <span class="ur-radar__ring ur-radar__ring--3"></span>
      <span class="ur-radar__sweep"></span>
    </div>

    <div class="relative mx-auto max-w-5xl px-4 text-center">
      <p class="ur-eyebrow ur-eyebrow--light" data-en="Service Areas" data-es="Áreas de Servicio" data-vi="Khu Vực Phục Vụ">Service Areas</p>
      <h2 class="ur-reveal-up mt-4 text-3xl font-black uppercase leading-[1.02] tracking-[-0.01em] md:text-5xl" data-en="Serving Houston and Surrounding Communities" data-es="Sirviendo a Houston y Comunidades Cercanas" data-vi="Phục Vụ Houston và Các Cộng Đồng Lân Cận">
        Serving Houston and Surrounding Communities
      </h2>
      <p class="ur-reveal-up mx-auto mt-6 max-w-2xl text-base leading-7 text-white/75" data-en="We proudly serve homeowners, HOAs, and businesses across the Greater Houston area, including the communities below and everywhere in between." data-es="Atendemos con orgullo a propietarios, HOAs y negocios en toda el área metropolitana de Houston, incluyendo las comunidades a continuación y todo lo que hay en medio." data-vi="Chúng tôi tự hào phục vụ các chủ nhà, HOA và doanh nghiệp trên khắp khu vực Houston, bao gồm các cộng đồng bên dưới và mọi nơi xung quanh.">
        We proudly serve homeowners, HOAs, and businesses across the Greater Houston area,
        including the communities below and everywhere in between.
      </p>

      <div class="ur-reveal-up mt-10 flex flex-wrap items-center justify-center gap-3">
        <?php foreach ($areas as $i => $area) : ?>
          <span class="ur-reveal-stagger ur-area-chip"><?php echo esc_html($area); ?></span>
        <?php endforeach; ?>
      </div>

      <div class="ur-reveal-up mt-11">
        <a href="/service-areas" class="ur-btn ur-btn-gold ur-magnetic inline-flex items-center justify-center gap-2 px-8 py-4 text-sm font-black uppercase tracking-[0.12em]">
          <span data-en="See All Service Areas" data-es="Ver Todas las Áreas de Servicio" data-vi="Xem Tất Cả Khu Vực Phục Vụ">See All Service Areas</span>
        </a>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- GALLERY — BEFORE & AFTER                                      -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden bg-[#EEF1F5] py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-4">
      <div class="ur-reveal-up max-w-2xl">
        <p class="ur-eyebrow" data-en="Gallery" data-es="Galería" data-vi="Thư Viện Ảnh">Gallery</p>
        <h2 class="mt-4 text-3xl font-black uppercase leading-[1.02] tracking-[-0.01em] text-[#12103A] md:text-5xl" data-en="Real Roofs. Real Results." data-es="Techos Reales. Resultados Reales." data-vi="Mái Nhà Thật. Kết Quả Thật.">
          Real Roofs. Real Results.
        </h2>
        <p class="mt-5 text-base leading-7 text-[#5B5F6B]" data-en="Drag the slider to see the transformation." data-es="Arrastra el control para ver la transformación." data-vi="Kéo thanh trượt để xem sự thay đổi.">Drag the slider to see the transformation.</p>
      </div>

      <div class="mt-12 grid gap-6 md:grid-cols-3">
        <?php foreach ($before_after as $ba) : ?>
          <div class="ur-reveal-stagger">
            <div class="ur-compare" style="--pos:50%;">
              <img src="<?php echo esc_url($ba['after']); ?>" alt="After — <?php echo esc_attr($ba['label']); ?>" class="ur-compare__img ur-compare__after" loading="lazy">
              <img src="<?php echo esc_url($ba['before']); ?>" alt="Before — <?php echo esc_attr($ba['label']); ?>" class="ur-compare__img ur-compare__before" loading="lazy">
              <span class="ur-compare__tag ur-compare__tag--before" data-en="BEFORE" data-es="ANTES" data-vi="TRƯỚC">BEFORE</span>
              <span class="ur-compare__tag ur-compare__tag--after" data-en="AFTER" data-es="DESPUÉS" data-vi="SAU">AFTER</span>
              <span class="ur-compare__handle js-ur-compare-handle" aria-hidden="true"><?php echo $icon('arrow', 'h-3 w-3'); ?></span>
              <input type="range" min="0" max="100" value="50" class="ur-compare__range js-ur-compare-range" aria-label="Compare before and after — <?php echo esc_attr($ba['label']); ?>">
            </div>
            <div class="mt-3 flex items-center justify-between">
              <h3 class="text-sm font-black uppercase tracking-[0.02em] text-[#12103A]"><span data-en="<?php echo esc_attr($ba['label']); ?>" data-es="<?php echo esc_attr($ba['label_es']); ?>" data-vi="<?php echo esc_attr($ba['label_vi']); ?>"><?php echo esc_html($ba['label']); ?></span></h3>
              <span class="ur-mono-tag">ZIP <?php echo esc_html($ba['zip']); ?></span>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- TESTIMONIALS                                                  -->
  <!-- ============================================================ -->
  <section class="ur-testimonials-section relative overflow-hidden bg-white py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-4">
      <div class="ur-reveal-up max-w-2xl">
        <p class="ur-eyebrow" data-en="Testimonials" data-es="Testimonios" data-vi="Đánh Giá Khách Hàng">Testimonials</p>
        <h2 class="mt-4 text-3xl font-black uppercase leading-[1.02] tracking-[-0.01em] text-[#12103A] md:text-5xl" data-en="What Our Clients Say" data-es="Lo Que Dicen Nuestros Clientes" data-vi="Khách Hàng Nói Gì Về Chúng Tôi">
          What Our Clients Say
        </h2>
      </div>

      <div class="ur-reveal-up mt-10">
        <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- FAQ                                                           -->
  <!-- ============================================================ -->
  <section id="faq" class="relative overflow-hidden bg-[#EEF1F5] py-20 lg:py-28">
    <div class="mx-auto max-w-4xl px-4">
      <div class="ur-reveal-up text-center">
        <p class="ur-eyebrow" data-en="FAQ" data-es="Preguntas Frecuentes" data-vi="Câu Hỏi Thường Gặp">FAQ</p>
        <h2 class="mt-4 text-3xl font-black uppercase leading-[1.02] tracking-[-0.01em] text-[#12103A] md:text-5xl" data-en="Frequently Asked Questions" data-es="Preguntas Frecuentes" data-vi="Các Câu Hỏi Thường Gặp">
          Frequently Asked Questions
        </h2>
        <p class="mt-5 text-base leading-7 text-[#5B5F6B]" data-en="Straight answers about pricing, insurance claims, timelines, and coverage." data-es="Respuestas claras sobre precios, reclamos de seguro, tiempos y cobertura." data-vi="Câu trả lời rõ ràng về giá cả, yêu cầu bồi thường bảo hiểm, thời gian thực hiện và phạm vi bảo hiểm.">
          Straight answers about pricing, insurance claims, timelines, and coverage.
        </p>
      </div>

      <div class="js-ur-faq ur-reveal-up mx-auto mt-12 max-w-3xl space-y-3">
        <?php foreach ($home_faqs as $faq) : ?>
          <div class="ur-faq-item">
            <button type="button" class="js-ur-faq-trigger ur-faq-item__trigger">
              <span class="ur-faq-item__icon"><?php echo $icon('plus', 'h-4 w-4'); ?></span>
              <span data-en="<?php echo esc_attr($faq['q']); ?>" data-es="<?php echo esc_attr($faq['q_es']); ?>" data-vi="<?php echo esc_attr($faq['q_vi']); ?>"><?php echo esc_html($faq['q']); ?></span>
            </button>
            <div class="ur-faq-item__panel">
              <p><span data-en="<?php echo esc_attr($faq['a']); ?>" data-es="<?php echo esc_attr($faq['a_es']); ?>" data-vi="<?php echo esc_attr($faq['a_vi']); ?>"><?php echo esc_html($faq['a']); ?></span></p>
              <?php if (!empty($faq['download'])) : ?>
                <a href="<?php echo esc_url($faq['download']['href']); ?>" download class="ur-faq-item__download"><?php echo $icon('arrow', 'h-3.5 w-3.5'); ?><span data-en="<?php echo esc_attr($faq['download']['label']); ?>" data-es="<?php echo esc_attr($faq['download']['label_es']); ?>" data-vi="<?php echo esc_attr($faq['download']['label_vi']); ?>"><?php echo esc_html($faq['download']['label']); ?></span></a>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php
    $faq_schema = ['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => []];
    foreach ($home_faqs as $faq) {
      $faq_schema['mainEntity'][] = [
        '@type' => 'Question',
        'name' => $faq['q'],
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq['a']],
      ];
    }
  ?>
  <script type="application/ld+json"><?php echo wp_json_encode($faq_schema); ?></script>

  <!-- ============================================================ -->
  <!-- FINAL CTA / CONTACT PREVIEW                                   -->
  <!-- ============================================================ -->
  <section id="ur-estimate" class="ur-final-cta relative isolate overflow-hidden py-20 text-white lg:py-28">
    <div class="relative mx-auto grid max-w-7xl gap-12 px-4 lg:grid-cols-[0.9fr_1.1fr] lg:items-center">
      <div class="ur-reveal-left lg:max-w-lg">
        <p class="ur-eyebrow ur-eyebrow--light" data-en="Get Started" data-es="Comienza Ahora" data-vi="Bắt Đầu Ngay">Get Started</p>
        <h2 class="mt-4 text-3xl font-black uppercase leading-[1.02] tracking-[-0.01em] md:text-5xl" data-en="Get Your Free Roofing Estimate Today" data-es="Obtén tu Estimado de Techo Gratis Hoy" data-vi="Nhận Báo Giá Mái Nhà Miễn Phí Ngay Hôm Nay">
          Get Your Free Roofing Estimate Today
        </h2>
        <p class="mt-6 max-w-md text-base leading-8 text-white/75" data-en="Whether it's storm damage, a full replacement, or a maintenance plan for your HOA, our team is ready to help." data-es="Ya sea daño por tormenta, un reemplazo completo, o un plan de mantenimiento para tu HOA, nuestro equipo está listo para ayudar." data-vi="Dù là thiệt hại do bão, thay mái toàn bộ, hay kế hoạch bảo trì cho HOA của quý vị, đội ngũ của chúng tôi luôn sẵn sàng hỗ trợ.">
          Whether it's storm damage, a full replacement, or a maintenance plan for your HOA,
          our team is ready to help.
        </p>
        <div class="mt-9 flex flex-wrap items-center gap-3">
          <a href="tel:+18327392842" class="ur-btn ur-btn-outline ur-magnetic inline-flex items-center justify-center gap-2 px-6 py-4 text-sm font-black uppercase tracking-[0.12em] text-white">
            <?php echo $icon('phone', 'h-4 w-4'); ?><span>(832) 739-2842</span>
          </a>
          <a href="mailto:info@urenaroofing.com" class="text-sm font-bold text-white/70 underline underline-offset-4">info@urenaroofing.com</a>
        </div>
      </div>
      <div class="ur-reveal-right"><?php echo $render_estimate_form('ur-home-final-form', 'Homepage — Final CTA Form'); ?></div>
    </div>
  </section>

</main>

<style>
  /* ================================================================
     FONTS — Big Shoulders Display (títulos, industrial) + Public Sans (cuerpo)
     ================================================================ */
  @import url('https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@600;700;800;900&family=Public+Sans:wght@400;500;600;700;800&family=IBM+Plex+Mono:wght@500;600&display=swap');

  /* El badge flotante de reCAPTCHA v3 y el botón del chatbot comparten la
     esquina inferior derecha — lo subimos para que no se tapen. Reposicionar
     con CSS está permitido por Google siempre que el badge siga visible. */
  .grecaptcha-badge { bottom: 88px !important; }
  @media (max-width: 640px) {
    .grecaptcha-badge { bottom: 92px !important; }
  }

  .ur-home {
    --ur-navy:#12103A; --ur-navy-2:#221D5C; --ur-gold:#F6BE15; --ur-gold-deep:#C9910A;
    --ur-mist:#EEF1F5; --ur-ink:#14131F; --ur-slate:#5B5F6B; --ur-line: rgba(20,19,31,.1);
    --ur-radius:10px; --ur-radius-sm:6px;
    font-family:'Public Sans','Segoe UI',Arial,sans-serif;
  }
  .ur-home h1,.ur-home h2,.ur-home h3,.ur-home h4{ font-family:'Big Shoulders Display','Arial Narrow',sans-serif; }
  .ur-home a,.ur-home button,.ur-home input,.ur-home select,.ur-home textarea{ font-family:inherit; }
  .ur-home a:focus-visible,.ur-home button:focus-visible,.ur-home input:focus-visible,
  .ur-home select:focus-visible,.ur-home textarea:focus-visible{ outline:2px solid var(--ur-gold); outline-offset:3px; }
  .ur-ic{ display:block; }

  /* ---- HUD readout tag — motivo de firma (telemetría de dron / inspección) ---- */
  .ur-readout{
    position:relative; z-index:10; display:inline-flex; align-items:center; gap:.55rem;
    font-family:'IBM Plex Mono',monospace; font-size:.7rem; font-weight:600; letter-spacing:.14em;
    color:var(--ur-gold); background:rgba(18,16,58,.45); border:1px solid rgba(246,190,21,.35);
    padding:.5rem .9rem; border-radius:var(--ur-radius-sm); backdrop-filter:blur(6px);
  }
  .ur-readout__dot{ width:6px; height:6px; border-radius:999px; background:var(--ur-gold); flex:0 0 auto; animation:urBlink 1.8s ease-in-out infinite; }
  @keyframes urBlink{ 0%,100%{ opacity:1; box-shadow:0 0 0 0 rgba(246,190,21,.5);} 50%{ opacity:.4; box-shadow:0 0 0 5px rgba(246,190,21,0);} }

  .ur-mono-tag{ font-family:'IBM Plex Mono',monospace; font-size:.68rem; font-weight:600; letter-spacing:.08em; color:var(--ur-slate); }

  /* ---- HUD corner brackets ---- */
  .ur-hud-corner{ position:absolute; z-index:10; width:22px; height:22px; opacity:0; transform:scale(.6); transition:opacity .6s ease, transform .6s cubic-bezier(.16,1,.3,1); pointer-events:none; }
  .ur-hud-corner.is-visible,.ur-hero .ur-hud-corner{ opacity:1; transform:scale(1); }
  .ur-hud-corner--xl{ width:34px; height:34px; }
  .ur-hud-corner--tl{ top:22px; left:22px; border-top:2px solid var(--ur-gold); border-left:2px solid var(--ur-gold); transition-delay:.1s; }
  .ur-hud-corner--tr{ top:22px; right:22px; border-top:2px solid var(--ur-gold); border-right:2px solid var(--ur-gold); transition-delay:.22s; }
  .ur-hud-corner--bl{ bottom:22px; left:22px; border-bottom:2px solid var(--ur-gold); border-left:2px solid var(--ur-gold); transition-delay:.34s; }
  .ur-hud-corner--br{ bottom:22px; right:22px; border-bottom:2px solid var(--ur-gold); border-right:2px solid var(--ur-gold); transition-delay:.46s; }

  /* ---- Roofline transitions — corte de esquina en clip-path, no overlay ----
     Cada sección que ENTRA recorta una esquina superior chica (nunca una franja
     completa), revelando el mist de <main> detrás — mismo mecanismo que ya
     funciona limpio en Service Areas. Nunca se pinta un color plano encima del
     propio fondo de otra sección, así que no hay huecos ni desajustes de tono. */
  .ur-services{ clip-path: polygon(0 4%, 100% 0, 100% 100%, 0 100%); }
  @media (max-width:768px){ .ur-services{ clip-path: polygon(0 2%, 100% 0, 100% 100%, 0 100%); } }

  /* ---- Hero ---- */
  .ur-hero__scrim{ background:linear-gradient(180deg, rgba(18,16,58,.5) 0%, rgba(18,16,58,.68) 55%, rgba(18,16,58,.92) 100%); }
  .ur-hero__vignette{ background:radial-gradient(120% 90% at 18% 45%, rgba(18,16,58,0) 0%, rgba(18,16,58,.45) 78%, rgba(18,16,58,.7) 100%); pointer-events:none; }
  .ur-hero__video{ animation:urHeroZoom 16s ease-out forwards; transform-origin:center; }
  @keyframes urHeroZoom{ from{ transform:scale(1.1);} to{ transform:scale(1);} }

  .ur-hero__telemetry{
    position:absolute; z-index:10; display:none; font-family:'IBM Plex Mono',monospace; font-size:.65rem;
    font-weight:600; letter-spacing:.08em; line-height:1.6; color:rgba(255,255,255,.55); text-align:right;
  }
  .ur-hero__telemetry--tr{ top:64px; right:64px; text-align:right; }
  .ur-hero__telemetry--bl{ bottom:64px; left:64px; text-align:left; }
  @media (min-width:1024px){ .ur-hero__telemetry{ display:block; } }

  .ur-hero__scrollcue{
    position:absolute; z-index:10; left:50%; bottom:28px; transform:translateX(-50%);
    display:none; flex-direction:column; align-items:center; gap:.6rem;
    font-family:'IBM Plex Mono',monospace; font-size:.62rem; font-weight:700; letter-spacing:.22em;
    color:rgba(255,255,255,.6); text-decoration:none; transition:color .2s ease;
  }
  .ur-hero__scrollcue:hover{ color:var(--ur-gold); }
  .ur-hero__scrollcue-line{ width:1px; height:34px; background:linear-gradient(180deg, rgba(255,255,255,.7), transparent); animation:urScrollCue 1.8s ease-in-out infinite; }
  @keyframes urScrollCue{ 0%{ transform:scaleY(0); transform-origin:top; opacity:0;} 40%{ transform:scaleY(1); transform-origin:top; opacity:1;} 60%{ transform:scaleY(1); transform-origin:bottom; opacity:1;} 100%{ transform:scaleY(0); transform-origin:bottom; opacity:0;} }
  @media (min-width:640px){ .ur-hero__scrollcue{ display:flex; } }

  .ur-word{ display:inline-block; overflow:hidden; vertical-align:top; }
  .ur-word__inner{ display:inline-block; transform:translateY(115%); opacity:0; animation:urWordUp .9s cubic-bezier(.16,1,.3,1) forwards; animation-delay:calc(var(--i) * 90ms + 150ms); }
  @keyframes urWordUp{ to{ transform:translateY(0); opacity:1; } }
  .ur-fade-in-0,.ur-fade-in-2,.ur-fade-in-3{ opacity:0; transform:translateY(16px); animation:urFadeUp .9s cubic-bezier(.16,1,.3,1) forwards; }
  .ur-fade-in-0{ animation-delay:.05s; } .ur-fade-in-2{ animation-delay:.75s; } .ur-fade-in-3{ animation-delay:.95s; }
  @keyframes urFadeUp{ to{ opacity:1; transform:translateY(0); } }

  /* ---- Buttons ---- */
  .ur-btn{ position:relative; border:1px solid transparent; border-radius:var(--ur-radius-sm); transition:box-shadow .25s ease,background-color .25s ease,color .25s ease,transform .25s ease; }
  .ur-btn span{ position:relative; z-index:1; }
  .ur-btn-gold{ background:var(--ur-gold); color:var(--ur-navy); box-shadow:0 16px 34px rgba(246,190,21,.28); }
  .ur-btn-gold:hover{ background:var(--ur-gold-deep); }
  .ur-btn-dark{ background:var(--ur-navy); box-shadow:0 16px 34px rgba(18,16,58,.24); }
  .ur-btn-dark:hover{ background:var(--ur-navy-2); }
  .ur-btn-outline{ background:rgba(255,255,255,.06); border-color:rgba(255,255,255,.28); backdrop-filter:blur(6px); }
  .ur-btn-outline:hover{ background:#fff; color:var(--ur-navy); }
  .ur-magnetic{ will-change:transform; }

  /* ---- Trust bar — ticker infinito ---- */
  .ur-trustbar{
    position:relative; isolation:isolate; overflow:hidden; background:var(--ur-navy);
    padding:19px 0; border-top:1px solid rgba(246,190,21,.35); border-bottom:1px solid rgba(246,190,21,.35);
  }
  .ur-trustbar__texture{
    position:absolute; inset:0; z-index:0; pointer-events:none; opacity:.5;
    background-image:
      linear-gradient(rgba(255,255,255,.06) 1px, transparent 1px),
      linear-gradient(90deg, rgba(255,255,255,.06) 1px, transparent 1px);
    background-size: 34px 34px;
    mask-image: radial-gradient(ellipse 70% 140% at 50% 50%, black 0%, transparent 85%);
  }
  .ur-trustbar__track{ position:relative; z-index:1; display:flex; width:max-content; animation:urMarquee 26s linear infinite; }
  .ur-trustbar__group{ display:flex; align-items:center; flex-shrink:0; gap:2.5rem; padding:0 2.5rem; }
  .ur-trustbar__item{ display:inline-flex; align-items:center; gap:.6rem; white-space:nowrap; font-size:.82rem; font-weight:700; letter-spacing:.03em; color:#fff; }
  .ur-trustbar__item .ur-ic{ color:var(--ur-gold); }
  .ur-trustbar__dot{ width:4px; height:4px; flex-shrink:0; border-radius:999px; background:var(--ur-gold); opacity:.55; }
  .ur-trustbar:hover .ur-trustbar__track{ animation-play-state:paused; }
  @keyframes urMarquee{ 0%{ transform:translateX(0);} 100%{ transform:translateX(-50%);} }

  /* ---- Eyebrow ---- */
  .ur-eyebrow{ font-family:'IBM Plex Mono',monospace; font-size:.72rem; font-weight:600; letter-spacing:.18em; text-transform:uppercase; color:var(--ur-gold-deep); }
  .ur-eyebrow--light{ color:var(--ur-gold); }

  /* ---- Blueprint texture (Why section) ---- */
  .ur-blueprint-texture{
    position:absolute; inset:0; pointer-events:none; z-index:0; opacity:.5;
    background-image:
      linear-gradient(rgba(18,16,58,.05) 1px, transparent 1px),
      linear-gradient(90deg, rgba(18,16,58,.05) 1px, transparent 1px);
    background-size: 42px 42px;
    mask-image: radial-gradient(ellipse 60% 60% at 20% 30%, black 0%, transparent 70%);
  }

  /* ---- Why bullets — spec-sheet rows con acento lateral animado ---- */
  .ur-why-bullet{
    position:relative; padding:1.1rem 1.5rem 1.1rem 1.35rem; border-left:2px solid var(--ur-line);
    transition:transform .35s cubic-bezier(.16,1,.3,1);
  }
  .ur-why-bullet::before{
    content:''; position:absolute; left:-2px; top:0; bottom:0; width:2px; background:var(--ur-gold);
    transform:scaleY(0); transform-origin:top; transition:transform .45s cubic-bezier(.16,1,.3,1);
  }
  .ur-why-bullet:hover{ transform:translateX(5px); }
  .ur-why-bullet:hover::before{ transform:scaleY(1); }
  .ur-why-bullet__num{
    position:absolute; top:1.05rem; right:1.1rem; font-family:'IBM Plex Mono',monospace; font-size:.68rem;
    font-weight:700; color:var(--ur-line); transition:color .35s ease;
  }
  .ur-why-bullet:hover .ur-why-bullet__num{ color:var(--ur-gold-deep); }
  .ur-why-bullet__icon{ display:inline-flex; align-items:center; justify-content:center; width:38px; height:38px; background:rgba(18,16,58,.06); color:var(--ur-navy); border-radius:var(--ur-radius-sm); transition:background-color .35s ease, color .35s ease; }
  .ur-why-bullet:hover .ur-why-bullet__icon{ background:var(--ur-gold); color:var(--ur-navy); }

  /* ---- Photo stack — frame con backdrop desfasado + badge flotante + tilt 3D ---- */
  .ur-photo-stack{ position:relative; }
  .ur-photo-stack__backdrop{
    position:absolute; inset:0; z-index:0; transform:translate(18px,18px);
    border:2px solid var(--ur-gold); border-radius:var(--ur-radius); pointer-events:none;
  }
  .ur-photo-frame{ position:relative; z-index:1; aspect-ratio:4/3.1; overflow:hidden; border-radius:var(--ur-radius); box-shadow:0 30px 60px rgba(18,16,58,.18); }
  .ur-photo-frame__tag{ position:absolute; left:16px; bottom:16px; }
  .ur-photo-stack__badge{
    position:absolute; z-index:2; left:-1.1rem; bottom:-1.5rem; display:flex; align-items:center; gap:.8rem;
    background:#fff; padding:.9rem 1.2rem; box-shadow:0 22px 44px rgba(18,16,58,.18); border:1px solid var(--ur-line);
    border-left:3px solid var(--ur-gold); border-radius:var(--ur-radius-sm);
  }
  .ur-photo-stack__badge-icon{ display:inline-flex; align-items:center; justify-content:center; width:36px; height:36px; background:var(--ur-mist); color:var(--ur-navy); flex-shrink:0; border-radius:var(--ur-radius-sm); }
  .ur-photo-stack__badge-label{ display:block; font-family:'IBM Plex Mono',monospace; font-size:.7rem; font-weight:800; letter-spacing:.06em; color:var(--ur-navy); }
  .ur-photo-stack__badge-sub{ display:block; margin-top:.1rem; font-size:.74rem; color:var(--ur-slate); white-space:nowrap; }
  @media (max-width:480px){ .ur-photo-stack__badge{ left:.5rem; bottom:-1.1rem; padding:.7rem .9rem; gap:.6rem; } .ur-photo-stack__badge-sub{ white-space:normal; } }

  /* ---- Service cards (contenido interno de cada slide del carousel) ---- */
  .ur-svc-card{ background:#fff; border:1px solid var(--ur-line); border-radius:var(--ur-radius); box-shadow:0 10px 26px rgba(18,16,58,.05); height:100%; display:flex; flex-direction:column; overflow:hidden; }
  .ur-svc-card__media{ border-radius:var(--ur-radius) var(--ur-radius) 0 0; }
  .ur-svc-card__icon{
    position:absolute; top:14px; right:14px; display:inline-flex; align-items:center; justify-content:center;
    width:36px; height:36px; background:var(--ur-gold); color:var(--ur-navy); border-radius:var(--ur-radius-sm);
    box-shadow:0 10px 20px rgba(18,16,58,.28);
  }
  .ur-svc-card__link{ transition:gap .25s ease, color .25s ease; }
  .ur-svc-slide.is-active .ur-svc-card:hover .ur-svc-card__link{ gap:.55rem; color:var(--ur-gold-deep); }

  /* ---- 3D tilt (usado por la foto de Why Homeowners Trust) ---- */
  .ur-tilt{
    transform-style:preserve-3d; will-change:transform;
    transform:perspective(800px) rotateX(0deg) rotateY(0deg);
    transition:transform .35s cubic-bezier(.16,1,.3,1);
  }

  /* ---- Services — carousel coverflow: activa al centro, laterales asomando con blur/escala ---- */
  .ur-svc-carousel{ position:relative; }
  .ur-svc-carousel__stage{
    position:relative; height:460px; overflow:hidden; margin:0 -1rem; padding:0 1rem;
  }
  .ur-svc-slide{
    position:absolute; top:0; left:50%; width:min(78vw,400px); height:100%;
    transition:transform .55s cubic-bezier(.16,1,.3,1), opacity .55s ease, filter .5s ease;
    will-change:transform,opacity,filter;
  }
  .ur-svc-slide:not(.is-active){ cursor:pointer; }
  @media (min-width:768px){ .ur-svc-carousel__stage{ height:420px; } .ur-svc-slide{ width:380px; } }

  .ur-svc-carousel__controls{ margin-top:1.75rem; display:flex; align-items:center; justify-content:center; gap:1.5rem; }
  .ur-svc-carousel__nav{
    display:inline-flex; align-items:center; justify-content:center; width:42px; height:42px; flex-shrink:0;
    border:1px solid var(--ur-line); color:var(--ur-navy); background:#fff; cursor:pointer; border-radius:var(--ur-radius-sm);
    transition:background-color .25s ease, color .25s ease, transform .2s ease, border-color .25s ease;
  }
  .ur-svc-carousel__nav:hover{ background:var(--ur-navy); color:#fff; border-color:var(--ur-navy); }
  .ur-svc-carousel__nav:active{ transform:scale(.92); }
  .ur-svc-carousel__dots{ display:flex; align-items:center; gap:.5rem; }
  .ur-svc-carousel__dot{ width:8px; height:8px; border-radius:999px; background:var(--ur-line); border:none; cursor:pointer; padding:0; transition:background-color .25s ease, transform .25s ease, width .25s ease; }
  .ur-svc-carousel__dot.is-active{ background:var(--ur-gold-deep); width:22px; border-radius:999px; }

  @media (prefers-reduced-motion: reduce){ .ur-svc-slide{ transition:none; } }
  @media (prefers-reduced-motion: reduce){
    .ur-svc-carousel__stage{ height:auto!important; overflow:visible!important; display:flex!important; flex-direction:column; gap:1.5rem; margin:0; padding:0; }
    .ur-svc-slide{ position:static!important; width:100%!important; left:auto!important; display:block!important; }
    .ur-svc-carousel__controls{ display:none!important; }
  }

  /* ---- Service Areas — silueta en ángulo propia (clip-path), no overlay que tape el radar ----
     Recorte solo en las esquinas: arriba se recorta la derecha (el navy queda "más alto"
     a la izquierda), abajo se recorta la izquierda (el navy queda "más alto" a la derecha) —
     mismo lenguaje de pitch de techo, espejado, y sin tocar el centro donde vive el radar. */
  .ur-areas{
    background:radial-gradient(120% 100% at 50% 0%, var(--ur-navy-2) 0%, var(--ur-navy) 60%);
    clip-path: polygon(0 0, 100% 5%, 100% 95%, 0 100%);
  }
  @media (max-width:768px){ .ur-areas{ clip-path: polygon(0 0, 100% 2.5%, 100% 97.5%, 0 100%); } }
  .ur-radar{ position:absolute; top:50%; left:50%; width:900px; height:900px; transform:translate(-50%,-50%); pointer-events:none; }
  .ur-radar__ring{ position:absolute; inset:0; margin:auto; border:1px solid rgba(246,190,21,.14); border-radius:50%; }
  .ur-radar__ring--1{ width:30%; height:30%; } .ur-radar__ring--2{ width:60%; height:60%; } .ur-radar__ring--3{ width:100%; height:100%; }
  .ur-radar__sweep{
    position:absolute; inset:0; border-radius:50%;
    background:conic-gradient(from 0deg, transparent 0deg, rgba(246,190,21,.22) 35deg, transparent 95deg);
    animation:urRadarSpin 7s linear infinite;
  }
  @keyframes urRadarSpin{ to{ transform:rotate(360deg); } }
  .ur-area-chip{
    display:inline-flex; align-items:center; font-family:'IBM Plex Mono',monospace; font-size:.78rem; font-weight:600;
    letter-spacing:.03em; color:#fff; background:rgba(255,255,255,.06); border:1px solid rgba(255,255,255,.16);
    padding:.55rem 1.1rem; border-radius:var(--ur-radius-sm);
    transition:border-color .25s ease, background-color .25s ease, transform .25s ease;
  }
  .ur-area-chip:hover{ border-color:var(--ur-gold); background:rgba(246,190,21,.1); transform:translateY(-2px); }

  /* ---- Before/After compare slider ---- */
  .ur-compare{ position:relative; aspect-ratio:6/5; overflow:hidden; border-radius:var(--ur-radius); box-shadow:0 20px 44px rgba(18,16,58,.12); --pos:50; }
  .ur-compare__img{ position:absolute; inset:0; display:block; width:100%; height:100%; object-fit:cover; user-select:none; -webkit-user-drag:none; }
  .ur-compare__after{ z-index:1; }
  .ur-compare__before{ z-index:2; clip-path: inset(0 calc(100% - (var(--pos) * 1%)) 0 0); }
  .ur-compare__tag{
    position:absolute; top:14px; z-index:2; font-family:'IBM Plex Mono',monospace; font-size:.66rem; font-weight:700;
    letter-spacing:.1em; padding:.3rem .6rem; color:#fff; background:rgba(18,16,58,.55); backdrop-filter:blur(4px);
    border-radius:var(--ur-radius-sm);
  }
  .ur-compare__tag--before{ left:14px; }
  .ur-compare__tag--after{ right:14px; background:rgba(246,190,21,.9); color:var(--ur-navy); }
  .ur-compare{ cursor:ew-resize; touch-action:none; }
  .ur-compare__handle{
    position:absolute; top:0; bottom:0; left:calc(var(--pos) * 1%); width:3px; background:var(--ur-gold); z-index:4;
    transform:translateX(-50%); box-shadow:0 0 0 6px rgba(246,190,21,.18);
    display:flex; align-items:center; justify-content:center; color:var(--ur-navy);
  }
  .ur-compare__handle::after{
    content:''; position:absolute; top:50%; left:50%; width:34px; height:34px; border-radius:999px;
    background:var(--ur-gold); transform:translate(-50%,-50%); transition:transform .2s ease;
  }
  .ur-compare.is-dragging .ur-compare__handle::after{ transform:translate(-50%,-50%) scale(1.12); }
  .ur-compare__handle svg{ position:relative; z-index:1; }
  .ur-compare__range{
    position:absolute; inset:0; display:block; width:100%; height:100%; margin:0; padding:0; opacity:0;
    cursor:ew-resize; z-index:5; touch-action:none; pointer-events:none; -webkit-appearance:none; appearance:none;
  }
  .ur-compare__range:focus-visible ~ .ur-compare__handle{ outline:2px solid var(--ur-gold); outline-offset:4px; }

  /* ---- Final CTA ---- */
  .ur-final-cta{
    background:var(--ur-navy-2);
    clip-path: polygon(0 0, 100% 4%, 100% 100%, 0 100%);
  }
  @media (max-width:768px){ .ur-final-cta{ clip-path: polygon(0 0, 100% 2%, 100% 100%, 0 100%); } }
  .ur-formcard{ position:relative; }
  .ur-estimate-form{ position:relative; border:1px solid rgba(255,255,255,.14); background:rgba(255,255,255,.06); border-radius:var(--ur-radius); box-shadow:0 24px 60px rgba(0,0,0,.24); padding:1.75rem; border-top:3px solid var(--ur-gold); backdrop-filter:blur(8px); }
  .ur-estimate-form__readout{ font-family:'IBM Plex Mono',monospace; font-size:.66rem; font-weight:700; letter-spacing:.14em; color:var(--ur-gold); }
  .ur-estimate-form__title{ margin:.6rem 0 0; font-size:1.4rem; font-weight:800; line-height:1.1; letter-spacing:-.01em; color:#fff; font-family:'Big Shoulders Display',sans-serif; text-transform:uppercase; }
  .ur-estimate-form__trust{ margin-top:.6rem; margin-bottom:1.1rem; font-size:.72rem; font-weight:700; letter-spacing:.04em; color:rgba(255,255,255,.6); }
  .ur-estimate-form__grid{ display:grid; gap:.9rem; grid-template-columns:1fr; }
  .ur-estimate-form__field{ display:grid; gap:.4rem; } .ur-estimate-form__field--full{ grid-column:1/-1; }
  .ur-estimate-form__field label{ font-size:.68rem; font-weight:700; letter-spacing:.06em; text-transform:uppercase; color:rgba(255,255,255,.72); }
  .ur-estimate-form__field input,.ur-estimate-form__field select{ width:100%; min-height:50px; border:1px solid rgba(255,255,255,.16); background:rgba(255,255,255,.07); border-radius:var(--ur-radius-sm); padding:.9rem 1rem; font-size:.95rem; color:#fff; outline:none; transition:border-color .2s ease,box-shadow .2s ease; }
  .ur-estimate-form__field input::placeholder{ color:rgba(255,255,255,.5); }
  .ur-estimate-form__field input:focus,.ur-estimate-form__field select:focus{ border-color:var(--ur-gold); box-shadow:0 0 0 3px rgba(246,190,21,.2); }
  .ur-estimate-form__field select option{ color:#12103A; }
  .ur-form-message{ display:none; margin-top:.75rem; padding:.9rem 1rem; border:1px solid transparent; border-radius:var(--ur-radius-sm); font-size:.82rem; line-height:1.6; }
  .ur-form-message.is-visible{ display:block; }
  .ur-form-message--success{ background:rgba(246,190,21,.14); border-color:rgba(246,190,21,.3); color:#fdeec0; }
  .ur-form-message--error{ background:rgba(200,60,60,.14); border-color:rgba(200,60,60,.3); color:#ffd7d7; }
  /* Honeypot — oculto de forma accesible (no display:none, que algunos filtros
     anti-bot ignoran). Solo los bots que llenan todo el DOM caen acá. */
  .ur-estimate-form__honeypot{ position:absolute; left:-9999px; width:1px; height:1px; overflow:hidden; }
  .ur-estimate-form__check{ display:flex; gap:.7rem; margin-top:1rem; font-size:.76rem; line-height:1.6; color:rgba(255,255,255,.72); }
  .ur-estimate-form__check input{ margin-top:.15rem; accent-color:var(--ur-gold); }
  .ur-estimate-form__check a{ color:var(--ur-gold); text-decoration:underline; }
  .ur-estimate-form__submit{ width:100%; margin-top:1.1rem; min-height:54px; }
  @media (min-width:640px){ .ur-estimate-form__grid{ grid-template-columns:1fr 1fr; } }

  /* ---- Insurance Partners — banda clara, logos "flotando" sin card, fondo fijo tipo parallax ---- */
  .ur-insurance{ background:var(--ur-mist); }
  .ur-insurance::before{
    content:''; position:absolute; inset:0; z-index:0; pointer-events:none;
    background-image:
      radial-gradient(circle 240px at 96% 12%, rgba(246,190,21,.18), transparent 70%),
      radial-gradient(circle 240px at 4% 12%, rgba(246,190,21,.18), transparent 70%),
      radial-gradient(rgba(18,16,58,.16) 1.5px, transparent 1.5px),
      linear-gradient(rgba(18,16,58,.07) 1px, transparent 1px),
      linear-gradient(90deg, rgba(18,16,58,.07) 1px, transparent 1px);
    background-size: auto, auto, 38px 38px, 38px 38px, 38px 38px;
    background-attachment: fixed, fixed, fixed, fixed, fixed;
    mask-image: radial-gradient(ellipse 95% 90% at 50% 55%, black 0%, transparent 85%);
  }
  @media (prefers-reduced-motion: reduce){ .ur-insurance::before{ background-attachment:scroll; } }

  .ur-insurance-grid{ display:grid; grid-template-columns:repeat(2,1fr); gap:1.25rem; perspective:1400px; }
  @media (min-width:640px){ .ur-insurance-grid{ grid-template-columns:repeat(3,1fr); gap:1.5rem; } }
  @media (min-width:1024px){ .ur-insurance-grid{ grid-template-columns:repeat(5,1fr); gap:1.75rem; } }
  .ur-insurance-card{
    position:relative; display:flex; align-items:center; justify-content:center; height:88px; padding:.5rem;
    background:none; border:none; box-shadow:none;
    transition:transform .35s cubic-bezier(.16,1,.3,1);
    opacity:0; transform:rotateX(-90deg) translateY(-14px); transform-origin:center top;
  }
  .js-ur-flip-card.is-visible{ animation:urFlipIn .65s cubic-bezier(.2,.9,.3,1.15) forwards; animation-delay:var(--flip-delay,0ms); }
  @keyframes urFlipIn{
    0%{ opacity:0; transform:rotateX(-90deg) translateY(-14px); }
    60%{ opacity:1; transform:rotateX(14deg) translateY(2px); }
    100%{ opacity:1; transform:rotateX(0deg) translateY(0); }
  }
  .ur-insurance-card:hover{ transform:translateY(-4px) scale(1.05) !important; }
  .ur-insurance-card img{
    max-width:100%; max-height:100%; width:auto; height:auto; object-fit:contain;
    filter:grayscale(1); opacity:.55; transition:filter .35s ease, opacity .35s ease;
  }
  .ur-insurance-card:hover img{ filter:grayscale(0); opacity:1; }
  .ur-insurance-card--more{
    font-family:'Big Shoulders Display',sans-serif; font-weight:800; text-transform:uppercase;
    font-size:1.05rem; line-height:1.15; letter-spacing:-0.01em; color:var(--ur-slate); text-align:center;
    border:1px dashed var(--ur-line); border-radius:var(--ur-radius); transition:color .35s ease, border-color .35s ease;
  }
  .ur-insurance-card--more:hover{ color:var(--ur-gold-deep) !important; border-color:var(--ur-gold-deep) !important; transform:translateY(-4px) !important; }

  /* ---- Financing CTA — banda tipo listón, mismo lenguaje diagonal que el
     resto de las secciones (roofline transitions) en vez de un rectángulo
     plano; el corte revela el mist de <main>, igual que hacen las demás. ---- */
  .ur-financing{
    background:linear-gradient(100deg, var(--ur-gold) 0%, #ffcf3d 50%, var(--ur-gold) 100%);
    clip-path: polygon(0 16%, 100% 0, 100% 84%, 0 100%);
  }
  @media (max-width:768px){ .ur-financing{ clip-path: polygon(0 8%, 100% 0, 100% 92%, 0 100%); } }

  .ur-financing__shine{
    position:absolute; inset:0; z-index:0; pointer-events:none;
    background:linear-gradient(115deg, transparent 35%, rgba(255,255,255,.65) 50%, transparent 65%);
    background-size:250% 100%; background-position:130% 0;
    animation:urFinancingShine 7s ease-in-out infinite;
  }
  @keyframes urFinancingShine{
    0%, 40%{ background-position:130% 0; }
    65%, 100%{ background-position:-30% 0; }
  }

  .ur-financing__icon::after{
    content:''; position:absolute; inset:-5px; z-index:-1; border-radius:9999px;
    border:1.5px solid rgba(18,16,58,.4); animation:urFinancingPulse 2.4s ease-out infinite;
  }
  @keyframes urFinancingPulse{
    0%{ transform:scale(.82); opacity:.85; }
    70%{ transform:scale(1.4); opacity:0; }
    100%{ transform:scale(1.4); opacity:0; }
  }

  .ur-financing .ur-btn-dark:hover{ background:var(--ur-navy-2); }
  .ur-financing__cta svg{ transition:transform .3s cubic-bezier(.16,1,.3,1); }
  .ur-financing__cta:hover svg{ transform:translateX(4px); }

  @media (prefers-reduced-motion: reduce){
    .ur-financing__shine, .ur-financing__icon::after{ animation:none !important; opacity:0 !important; }
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
  .ur-faq-item.is-open .ur-faq-item__panel{ max-height:290px; }
  .ur-faq-item__panel p{ padding:0 1.4rem 1.3rem 3rem; font-size:.86rem; line-height:1.65; color:var(--ur-slate); }
  .ur-faq-item__download{
    display:inline-flex; align-items:center; gap:.4rem; margin:-.4rem 1.4rem 1.2rem 3rem;
    font-size:.76rem; font-weight:800; text-transform:uppercase; letter-spacing:.05em; color:var(--ur-navy);
    text-decoration:none; transition:gap .25s ease, color .25s ease;
  }
  .ur-faq-item__download:hover{ gap:.6rem; color:var(--ur-gold-deep); }

  /* ---- Reveal on scroll ---- */
  .ur-reveal-up,.ur-reveal-left,.ur-reveal-right,.ur-reveal-stagger{ opacity:0; will-change:opacity,transform; transition:opacity .9s cubic-bezier(.16,1,.3,1),transform .9s cubic-bezier(.16,1,.3,1); }
  .ur-reveal-up{ transform:translateY(36px); } .ur-reveal-left{ transform:translateX(-40px); }
  .ur-reveal-right{ transform:translateX(40px); } .ur-reveal-stagger{ transform:translateY(28px); }
  .ur-reveal-up.is-visible,.ur-reveal-left.is-visible,.ur-reveal-right.is-visible,.ur-reveal-stagger.is-visible{ opacity:1; transform:translate(0,0); }

  @media (max-width:768px){
    .ur-hero h1{ font-size:2.6rem; }
    .ur-trustbar__group{ gap:1.5rem; padding:0 1.5rem; }
  }

  @media (prefers-reduced-motion: reduce){
    .ur-reveal-up,.ur-reveal-left,.ur-reveal-right,.ur-reveal-stagger,.ur-word__inner,.ur-fade-in-0,.ur-fade-in-2,
    .ur-fade-in-3,.ur-btn,.ur-trustbar__track,.ur-readout__dot,.ur-radar__sweep,.ur-hud-corner,.ur-tilt,
    .ur-hero__video,.ur-hero__scrollcue-line,.ur-faq-item__icon,.ur-faq-item__panel,
    .js-ur-flip-card,.ur-svc-slide{
      opacity:1!important; transform:none!important; transition:none!important; animation:none!important; filter:none!important;
    }
  }
</style>

<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LeD-oItAAAAACAqiZtBj6hFg2tIWL2bMkByXVsN" async defer></script>

<script>
  document.addEventListener("DOMContentLoaded", function () {

    /* ---------- Reveal on scroll (incluye HUD corners) ---------- */
    try {
      const revealItems = document.querySelectorAll(".ur-reveal-up,.ur-reveal-left,.ur-reveal-right,.ur-reveal-stagger,.js-ur-flip-card,.ur-photo-frame .ur-hud-corner");
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

    /* ---------- Tilt cards ---------- */
    try {
      document.querySelectorAll(".ur-tilt").forEach((card) => {
        card.addEventListener("mousemove", (e) => {
          const r = card.getBoundingClientRect();
          const px = (e.clientX - r.left) / r.width - 0.5;
          const py = (e.clientY - r.top) / r.height - 0.5;
          card.style.transform = `perspective(800px) rotateX(${(-py * 7).toFixed(2)}deg) rotateY(${(px * 7).toFixed(2)}deg)`;
        });
        card.addEventListener("mouseleave", () => { card.style.transform = "perspective(800px) rotateX(0deg) rotateY(0deg)"; });
      });
    } catch (err) { console.error("ur-tilt init failed:", err); }

    /* ---------- Before / After compare sliders (drag + touch + teclado) ---------- */
    try {
      document.querySelectorAll(".ur-compare").forEach((compare) => {
        const range = compare.querySelector(".js-ur-compare-range");
        if (!range) return;

        const setPos = (val) => {
          const clamped = Math.min(100, Math.max(0, val));
          compare.style.setProperty("--pos", clamped);
          range.value = clamped;
        };

        const posFromClientX = (clientX) => {
          const r = compare.getBoundingClientRect();
          return ((clientX - r.left) / r.width) * 100;
        };

        // Teclado: el range sigue siendo focuseable con Tab, flechas cambian --pos
        range.addEventListener("input", () => setPos(Number(range.value)));

        // Mouse / touch: arrastre libre en cualquier punto del recuadro
        let dragging = false;
        const startDrag = (e) => {
          dragging = true;
          compare.classList.add("is-dragging");
          setPos(posFromClientX(e.clientX));
          compare.setPointerCapture(e.pointerId);
          range.focus({ preventScroll: true });
        };
        const moveDrag = (e) => { if (dragging) setPos(posFromClientX(e.clientX)); };
        const endDrag = () => { dragging = false; compare.classList.remove("is-dragging"); };

        compare.addEventListener("pointerdown", startDrag);
        compare.addEventListener("pointermove", moveDrag);
        compare.addEventListener("pointerup", endDrag);
        compare.addEventListener("pointercancel", endDrag);

        setPos(Number(range.value));
      });
    } catch (err) { console.error("ur-compare init failed:", err); }

    /* ---------- Services: carousel coverflow ---------- */
    try {
      const carousel = document.querySelector(".js-ur-svc-carousel");
      if (carousel) {
        const slides = Array.from(carousel.querySelectorAll(".js-ur-svc-slide"));
        const dots = Array.from(carousel.querySelectorAll(".js-ur-svc-dot"));
        const len = slides.length;
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
          const spacing = (slides[0]?.offsetWidth || 340) * 0.6;
          slides.forEach((slide, i) => {
            const off = signedOffset(i);
            const abs = Math.abs(off);
            const visible = abs <= 2;
            slide.style.display = visible ? "block" : "none";
            const x = off * spacing;
            const scale = abs === 0 ? 1 : abs === 1 ? 0.86 : 0.74;
            const rot = off === 0 ? 0 : off > 0 ? -14 : 14;
            const opacity = abs === 0 ? 1 : abs === 1 ? 0.55 : 0;
            const blur = abs === 0 ? 0 : 2;
            slide.style.transform = `translateX(calc(-50% + ${x}px)) scale(${scale}) rotateY(${rot}deg)`;
            slide.style.opacity = String(opacity);
            slide.style.filter = `blur(${blur}px)`;
            slide.style.zIndex = String(100 - abs);
            slide.classList.toggle("is-active", off === 0);
          });
          dots.forEach((dot, i) => dot.classList.toggle("is-active", i === active));
        }

        function setActive(i) { active = wrap(i); layout(); }
        function next() { setActive(active + 1); }
        function prev() { setActive(active - 1); }

        slides.forEach((slide) => {
          slide.addEventListener("click", (e) => {
            if (!slide.classList.contains("is-active")) {
              e.preventDefault();
              setActive(Number(slide.dataset.index));
            }
          });
        });
        dots.forEach((dot) => dot.addEventListener("click", () => setActive(Number(dot.dataset.index))));
        carousel.querySelector(".js-ur-svc-prev")?.addEventListener("click", prev);
        carousel.querySelector(".js-ur-svc-next")?.addEventListener("click", next);

        // swipe / drag sobre el stage
        let startX = 0, dragging = false;
        const stage = carousel.querySelector(".ur-svc-carousel__stage");
        stage.addEventListener("pointerdown", (e) => { dragging = true; startX = e.clientX; });
        stage.addEventListener("pointerup", (e) => {
          if (!dragging) return;
          dragging = false;
          const delta = e.clientX - startX;
          if (delta > 50) prev();
          else if (delta < -50) next();
        });

        carousel.addEventListener("mouseenter", () => { hovering = true; });
        carousel.addEventListener("mouseleave", () => { hovering = false; });

        window.addEventListener("resize", layout);
        layout();

        if (!reducedMotion) {
          setInterval(() => { if (!hovering) next(); }, 4200);
        }
      }
    } catch (err) { console.error("ur-svc-carousel init failed:", err); }

    /* ---------- FAQ accordion ---------- */
    try {
      document.querySelectorAll(".js-ur-faq-trigger").forEach((trigger) => {
        trigger.addEventListener("click", () => {
          trigger.closest(".ur-faq-item").classList.toggle("is-open");
        });
      });
    } catch (err) { console.error("ur-faq init failed:", err); }

    /* ---------- Estimate form: honeypot + reCAPTCHA v3 (invisible) + EmailJS ---------- */
    try {
      const UR_RECAPTCHA_SITE_KEY   = "6LeD-oItAAAAACAqiZtBj6hFg2tIWL2bMkByXVsN";
      const UR_EMAILJS_PUBLIC_KEY   = "GSl400mSRcgCbwoel";
      const UR_EMAILJS_SERVICE_ID   = "service_e0oer3q";
      const UR_EMAILJS_TEMPLATE_ID  = "template_p11az02";  // notificación interna a Ureña
      const UR_EMAILJS_AUTOREPLY_ID = "template_apl73z5";  // confirmación al cliente

      if (window.emailjs) emailjs.init({ publicKey: UR_EMAILJS_PUBLIC_KEY });

      document.querySelectorAll(".js-ur-email-form").forEach((form) => {
        const successBox  = document.getElementById(form.dataset.successId);
        const errorBox    = document.getElementById(form.dataset.errorId);
        const policyCheck = document.getElementById(form.dataset.policyId);
        const submitBtn   = document.getElementById(form.dataset.submitId);
        const honeypot    = form.querySelector('input[name="ur_ref_code"]');
        if (!successBox || !errorBox || !policyCheck || !submitBtn) return;

        const resetMessages = () => { [successBox, errorBox].forEach((b) => { b.textContent = ""; b.classList.remove("is-visible"); }); };
        const showSuccess = (msg) => { successBox.textContent = msg; successBox.classList.add("is-visible"); };
        const showError   = (msg) => { errorBox.textContent = msg; errorBox.classList.add("is-visible"); };

        form.addEventListener("submit", function (e) {
          e.preventDefault();
          resetMessages();
          // t(en, es, vi): elige el texto según el idioma activo en <html lang="...">.
          const lang = document.documentElement.lang;
          const t = (en, es, vi) => (lang === "es" ? es : lang === "vi" ? vi : en);

          // Honeypot: si un bot llenó el campo oculto, se descarta el envío en
          // silencio (le mostramos el mismo mensaje de éxito para no delatarlo).
          if (honeypot && honeypot.value.trim() !== "") {
            form.reset();
            return showSuccess(t(
              "Thank you. Your request has been sent successfully. We'll be in touch soon.",
              "Gracias. Tu solicitud ha sido enviada exitosamente. Nos pondremos en contacto pronto.",
              "Cảm ơn bạn. Yêu cầu của bạn đã được gửi thành công. Chúng tôi sẽ sớm liên hệ với bạn."
            ));
          }

          if (!policyCheck.checked) {
            return showError(t(
              "Please accept the Privacy Policy and Terms of Service before submitting.",
              "Por favor acepta la Política de Privacidad y los Términos de Servicio antes de enviar.",
              "Vui lòng đồng ý với Chính Sách Bảo Mật và Điều Khoản Dịch Vụ trước khi gửi."
            ));
          }

          if (!form.checkValidity()) return form.reportValidity();

          if (typeof grecaptcha === "undefined") {
            return showError(t(
              "reCAPTCHA failed to load. Please refresh the page and try again.",
              "El reCAPTCHA no se pudo cargar. Por favor recarga la página e intenta de nuevo.",
              "reCAPTCHA không tải được. Vui lòng làm mới trang và thử lại."
            ));
          }

          if (!window.emailjs) {
            return showError(t(
              "The form is still loading. Please wait a moment and try again.",
              "El formulario aún está cargando. Espera un momento e intenta de nuevo.",
              "Biểu mẫu vẫn đang tải. Vui lòng đợi một chút và thử lại."
            ));
          }

          submitBtn.disabled = true;
          const originalText = submitBtn.innerHTML;
          submitBtn.innerHTML = `<span>${t("Sending...", "Enviando...", "Đang gửi...")}</span>`;
          const restoreBtn = () => { submitBtn.disabled = false; submitBtn.innerHTML = originalText; };

          grecaptcha.ready(function () {
            grecaptcha.execute(UR_RECAPTCHA_SITE_KEY, { action: "estimate_request" }).then(function (token) {

              const formData = {
                name:         form.querySelector('input[name="full_name"]').value.trim(),
                phone:        form.querySelector('input[name="phone"]').value.trim(),
                email:        form.querySelector('input[name="email"]').value.trim(),
                zip:          form.querySelector('input[name="zip"]').value.trim(),
                service:      form.querySelector('select[name="service"]').value,
                form_source:  form.dataset.formSource || "Homepage",
                page_url:     window.location.href,
                consent:      policyCheck.checked ? t("Yes", "Sí", "Có") : "No",
                submitted_at: new Date().toLocaleString("en-US", { timeZone: "America/Chicago", dateStyle: "medium", timeStyle: "short" }) + " (Houston time)",
                // El template de EmailJS siempre referencia {{message}}; estos
                // forms no piden notas, así que va vacío y la fila sale sin valor.
                message: "",
                "g-recaptcha-response": token
              };

              // 1) Notificación interna a Ureña. Este es el envío que importa:
              //    si falla, el usuario ve error y puede reintentar.
              emailjs.send(UR_EMAILJS_SERVICE_ID, UR_EMAILJS_TEMPLATE_ID, formData)
                .then(() => {
                  form.reset();
                  showSuccess(t(
                    "Thank you. Your request has been sent successfully. We'll be in touch soon.",
                    "Gracias. Tu solicitud ha sido enviada exitosamente. Nos pondremos en contacto pronto.",
                    "Cảm ơn bạn. Yêu cầu của bạn đã được gửi thành công. Chúng tôi sẽ sớm liên hệ với bạn."
                  ));

                  // 2) Auto-reply de confirmación al cliente. Va en su propio
                  //    catch a propósito: si este falla, el lead YA llegó a la
                  //    empresa, así que no tiene sentido mostrarle un error al
                  //    usuario ni empujarlo a reenviar (eso duplicaría el lead).
                  emailjs.send(UR_EMAILJS_SERVICE_ID, UR_EMAILJS_AUTOREPLY_ID, {
                    name:    formData.name,
                    email:   formData.email,   // el template usa {{email}} como destinatario
                    service: formData.service,
                    zip:     formData.zip
                  }).catch((autoErr) => console.warn("Auto-reply no enviado:", autoErr));
                })
                .catch(() => showError(t(
                  "Something went wrong while sending your request. Please try again or call us at (832) 739-2842.",
                  "Algo salió mal al enviar tu solicitud. Por favor intenta de nuevo o llámanos al (832) 739-2842.",
                  "Đã xảy ra lỗi khi gửi yêu cầu của bạn. Vui lòng thử lại hoặc gọi cho chúng tôi theo số (832) 739-2842."
                )))
                .finally(restoreBtn);

            }).catch(function () {
              showError(t(
                "reCAPTCHA verification failed. Please refresh the page and try again.",
                "La verificación reCAPTCHA falló. Por favor recarga la página e intenta de nuevo.",
                "Xác minh reCAPTCHA không thành công. Vui lòng làm mới trang và thử lại."
              ));
              restoreBtn();
            });
          });
        });
      });
    } catch (err) { console.error("ur-estimate-form init failed:", err); }
  });
</script>

<?php get_footer(); ?>