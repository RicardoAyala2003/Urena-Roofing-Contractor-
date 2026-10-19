<?php
/**
 * Template Name: Contact Page
 *
 * Ureña Roofing Contractor LLC — Contact
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="ur-contact bg-white text-[#14131F] overflow-hidden">

  <?php
    // ------------------------------------------------------------
    // ASSETS
    // ------------------------------------------------------------
    $img = '/wp-content/uploads/2026/08/';

    $assets = [
      'hero_bg'    => $img . 'Copia-de-dji_fly_20250827_155010_0375_1756387290764_photo-scaled.jpg',
      'stamp_gold' => $img . '1440-urena-roofing-gold-logomark-1024x1024.png',
      'stamp_dark' => $img . '1440-urena-roofing-black-logomark-1024x1024.png',
    ];

    // ------------------------------------------------------------
    // ICONOS
    // ------------------------------------------------------------
    $icons = [
      'phone'   => '<path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2C9.4 21 3 14.6 3 6a2 2 0 0 1 2-2z"/>',
      'mail'    => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/>',
      'pin'     => '<path d="M12 22s7-6.7 7-12.4A7 7 0 1 0 5 9.6C5 15.3 12 22 12 22z"/><circle cx="12" cy="9.5" r="2.4"/>',
      'clock'   => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3.5 2"/>',
      'arrow'   => '<path d="M5 12h14"/><path d="m13 6 6 6-6 6"/>',
      'plus'    => '<path d="M12 5v14"/><path d="M5 12h14"/>',
    ];
    $icon = function ($name, $extra_class = '') use ($icons) {
      $paths = $icons[$name] ?? '';
      return '<svg class="ur-ic ' . esc_attr($extra_class) . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $paths . '</svg>';
    };

    // ------------------------------------------------------------
    // DATA
    // ------------------------------------------------------------
    $service_options = [
      ['en' => 'Residential Roof Replacement', 'es' => 'Reemplazo de Techo Residencial', 'vi' => 'Thay Mái Nhà Ở'],
      ['en' => 'Storm & Hail Damage Repair', 'es' => 'Reparación de Daños por Tormenta y Granizo', 'vi' => 'Sửa Chữa Hư Hỏng Do Bão & Mưa Đá'],
      ['en' => 'Roof Maintenance & Inspections', 'es' => 'Mantenimiento e Inspecciones de Techo', 'vi' => 'Bảo Trì & Kiểm Tra Mái Nhà'],
      // ['en' => 'Commercial & Flat Roofing', 'es' => 'Techado Comercial y Plano', 'vi' => 'Mái Nhà Thương Mại & Mái Bằng'], // Temporalmente oculto a pedido del cliente.
      ['en' => 'HOA Roofing Programs', 'es' => 'Programas de Techado para HOA', 'vi' => 'Chương Trình Mái Nhà cho HOA'],
      ['en' => 'Not Sure Yet', 'es' => 'Aún No Estoy Seguro', 'vi' => 'Chưa Chắc Chắn'],
    ];

    $office_address = '3648 Cypress Creek Pkwy Ste 225, Houston, TX 77068, United States';
    $map_embed_src  = 'https://maps.google.com/maps?q=' . rawurlencode($office_address) . '&z=15&output=embed';
    $map_link       = 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode($office_address);

    $contact_faqs = [
      ['q' => 'How fast will someone respond after I submit the form?', 'q_es' => '¿Qué tan rápido responderán después de que envíe el formulario?', 'q_vi' => 'Chúng tôi sẽ phản hồi nhanh như thế nào sau khi tôi gửi biểu mẫu?', 'a' => 'We aim to respond within 24 hours, often sooner for storm and emergency calls.', 'a_es' => 'Nuestro objetivo es responder dentro de 24 horas, muchas veces antes para llamadas de tormenta y emergencias.', 'a_vi' => 'Chúng tôi cố gắng phản hồi trong vòng 24 giờ, thường sớm hơn đối với các cuộc gọi về bão hoặc khẩn cấp.'],
      ['q' => 'Is the estimate really free?', 'q_es' => '¿El estimado es realmente gratis?', 'q_vi' => 'Báo giá có thực sự miễn phí không?', 'a' => 'Yes. Every inspection and estimate is free, with no obligation to move forward.', 'a_es' => 'Sí. Cada inspección y estimado es gratuito, sin ninguna obligación de continuar.', 'a_vi' => 'Có. Mọi lần kiểm tra và báo giá đều miễn phí, không có bất kỳ ràng buộc nào phải tiếp tục.'],
      ['q' => 'Can I call instead of filling out the form?', 'q_es' => '¿Puedo llamar en lugar de llenar el formulario?', 'q_vi' => 'Tôi có thể gọi điện thay vì điền biểu mẫu không?', 'a' => 'Absolutely. Call or text us at (832) 739-2842, or email info@urenaroofing.com.', 'a_es' => 'Claro que sí. Llámanos o envíanos un mensaje de texto al (832) 739-2842, o escríbenos a info@urenaroofing.com.', 'a_vi' => 'Chắc chắn rồi. Hãy gọi hoặc nhắn tin cho chúng tôi theo số (832) 739-2842, hoặc gửi email đến info@urenaroofing.com.'],
      ['q' => 'Do you offer emergency service after a storm?', 'q_es' => '¿Ofrecen servicio de emergencia después de una tormenta?', 'q_vi' => 'Quý công ty có dịch vụ khẩn cấp sau bão không?', 'a' => 'Yes. Storm damage doesn\'t wait, and neither do we. Reach out any time and we\'ll prioritize your call.', 'a_es' => 'Sí. Los daños por tormenta no esperan, y nosotros tampoco. Contáctanos en cualquier momento y le daremos prioridad a tu llamada.', 'a_vi' => 'Có. Thiệt hại do bão không thể chờ đợi, và chúng tôi cũng vậy. Hãy liên hệ với chúng tôi bất cứ lúc nào, chúng tôi sẽ ưu tiên xử lý cuộc gọi của bạn.'],
    ];
  ?>

  <!-- ============================================================ -->
  <!-- HERO — fondo fijo (parallax de scroll), foto aérea real       -->
  <!-- ============================================================ -->
  <section class="ur-contact-hero relative isolate flex min-h-[440px] items-center overflow-hidden text-white lg:min-h-[500px]">
    <div class="ur-contact-hero__bg" style="background-image:url('<?php echo esc_url($assets['hero_bg']); ?>');"></div>
    <div class="ur-contact-hero__scrim absolute inset-0"></div>

    <div class="relative z-10 mx-auto max-w-3xl px-4 text-center">
      <p class="ur-eyebrow ur-eyebrow--light ur-fade-in-0" data-en="Contact" data-es="Contacto" data-vi="Liên Hệ">Contact</p>
      <h1 class="mt-5 text-4xl font-black uppercase leading-[0.98] tracking-[-0.01em] md:text-6xl" data-en="Let's Talk About Your Roof" data-es="Hablemos de tu Techo" data-vi="Cùng Trao Đổi Về Mái Nhà Của Bạn">
        <?php
          $hero_words = explode(' ', "Let's Talk About Your Roof");
          foreach ($hero_words as $i => $word) : ?>
            <span class="ur-word"><span class="ur-word__inner" style="--i:<?php echo (int) $i; ?>"><?php echo esc_html($word); ?></span></span><?php echo ' '; ?>
          <?php endforeach; ?>
      </h1>
      <p class="ur-fade-in-2 mx-auto mt-6 max-w-2xl text-base leading-7 text-white/82 md:text-lg" data-en="Whether it's an emergency repair or a new roof, our team is ready to help: call, message, or request a free estimate below." data-es="Ya sea una reparación de emergencia o un techo nuevo, nuestro equipo está listo para ayudarte: llama, envíanos un mensaje o solicita un estimado gratis abajo." data-vi="Dù là sửa chữa khẩn cấp hay lắp mái mới, đội ngũ của chúng tôi luôn sẵn sàng hỗ trợ: hãy gọi điện, nhắn tin, hoặc yêu cầu báo giá miễn phí bên dưới.">
        Whether it's an emergency repair or a new roof, our team is ready to help: call, message,
        or request a free estimate below.
      </p>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- CONTACT INFO + FORM                                           -->
  <!-- ============================================================ -->
  <section class="ur-contact-core relative overflow-hidden bg-[#EEF1F5] py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-4">
      <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:items-start">

        <!-- Contact info -->
        <div class="ur-reveal-left ur-contact-info">
          <div class="ur-contact-info__stamp" aria-hidden="true" style="background-image:url('<?php echo esc_url($assets['stamp_gold']); ?>');"></div>
          <div class="ur-contact-info__glow" aria-hidden="true"></div>
          <span class="ur-hud-corner ur-hud-corner--tl" aria-hidden="true"></span>
          <span class="ur-hud-corner ur-hud-corner--br" aria-hidden="true"></span>

          <div class="ur-contact-info__content">
            <p class="ur-eyebrow ur-eyebrow--light" data-en="Reach Us Directly" data-es="Contáctanos Directamente" data-vi="Liên Hệ Trực Tiếp">Reach Us Directly</p>
            <h2 class="mt-3 text-2xl font-black uppercase leading-[1.05] tracking-[-0.01em] text-white md:text-3xl" data-en="Get in Touch" data-es="Ponte en Contacto" data-vi="Liên Hệ Ngay">Get in Touch</h2>

            <ul class="mt-8 space-y-5">
              <li class="ur-reveal-stagger ur-contact-row">
                <span class="ur-contact-row__icon ur-contact-row__icon--pulse"><?php echo $icon('phone', 'h-5 w-5'); ?></span>
                <div>
                  <p class="ur-contact-row__label" data-en="Phone" data-es="Teléfono" data-vi="Điện Thoại">Phone</p>
                  <a href="tel:+18327392842" class="ur-contact-row__value">(832) 739-2842</a>
                  <a href="tel:+13464046431" class="ur-contact-row__value">(346) 404-6431</a>
                </div>
              </li>
              <li class="ur-reveal-stagger ur-contact-row">
                <span class="ur-contact-row__icon"><?php echo $icon('mail', 'h-5 w-5'); ?></span>
                <div>
                  <p class="ur-contact-row__label" data-en="Email" data-es="Correo Electrónico" data-vi="Email">Email</p>
                  <a href="mailto:info@urenaroofing.com" class="ur-contact-row__value">info@urenaroofing.com</a>
                </div>
              </li>
              <li class="ur-reveal-stagger ur-contact-row">
                <span class="ur-contact-row__icon"><?php echo $icon('pin', 'h-5 w-5'); ?></span>
                <div>
                  <p class="ur-contact-row__label" data-en="Office" data-es="Oficina" data-vi="Văn Phòng">Office</p>
                  <a href="<?php echo esc_url($map_link); ?>" target="_blank" rel="noopener noreferrer" class="ur-contact-row__value ur-contact-row__value--address">
                    3648 Cypress Creek Pkwy Ste 225<br>Houston, TX 77068, United States
                  </a>
                </div>
              </li>
              <li class="ur-reveal-stagger ur-contact-row">
                <span class="ur-contact-row__icon"><?php echo $icon('clock', 'h-5 w-5'); ?></span>
                <div>
                  <p class="ur-contact-row__label" data-en="Hours" data-es="Horario" data-vi="Giờ Làm Việc">Hours</p>
                  <span class="ur-mono-tag ur-mono-tag--light" data-en="PENDING &middot; CONFIRM WITH CLIENT" data-es="PENDIENTE &middot; CONFIRMAR CON EL CLIENTE" data-vi="ĐANG CHỜ &middot; XÁC NHẬN VỚI KHÁCH HÀNG">PENDING &middot; CONFIRM WITH CLIENT</span>
                </div>
              </li>
            </ul>
          </div>
        </div>

        <!-- Contact form -->
        <div class="ur-reveal-right">
          <div class="ur-formcard">
            <div class="ur-formcard__stamp" aria-hidden="true" style="background-image:url('<?php echo esc_url($assets['stamp_dark']); ?>');"></div>
            <span class="ur-hud-corner ur-hud-corner--tl" aria-hidden="true"></span>
            <span class="ur-hud-corner ur-hud-corner--br" aria-hidden="true"></span>
            <form
              id="ur-contact-form"
              class="ur-estimate-form js-ur-email-form"
              method="post" action="#"
              data-success-id="ur-contact-success"
              data-error-id="ur-contact-error"
              data-policy-id="ur-contact-policy"
              data-submit-id="ur-contact-submit"
              data-form-source="Contact Page"
            >
              <span class="ur-estimate-form__readout" data-en="REQUEST &middot; FREE ESTIMATE" data-es="SOLICITA &middot; ESTIMADO GRATIS" data-vi="YÊU CẦU &middot; BÁO GIÁ MIỄN PHÍ">REQUEST &middot; FREE ESTIMATE</span>
              <h3 class="ur-estimate-form__title" data-en="Request Your Free Estimate" data-es="Solicita tu Estimado Gratis" data-vi="Yêu Cầu Báo Giá Miễn Phí">Request Your Free Estimate</h3>

              <div class="ur-estimate-form__grid">
                <div class="ur-estimate-form__field">
                  <label for="ur-contact-name"><span data-en="Full Name *" data-es="Nombre Completo *" data-vi="Họ và Tên *">Full Name *</span></label>
                  <input id="ur-contact-name" type="text" name="full_name" placeholder="Your full name" required>
                </div>
                <div class="ur-estimate-form__field">
                  <label for="ur-contact-phone"><span data-en="Phone Number *" data-es="Número de Teléfono *" data-vi="Số Điện Thoại *">Phone Number *</span></label>
                  <input id="ur-contact-phone" type="tel" name="phone" placeholder="(832) 739-2842" required>
                </div>
                <div class="ur-estimate-form__field">
                  <label for="ur-contact-email"><span data-en="Email Address *" data-es="Correo Electrónico *" data-vi="Địa Chỉ Email *">Email Address *</span></label>
                  <input id="ur-contact-email" type="email" name="email" placeholder="you@example.com" required>
                </div>
                <div class="ur-estimate-form__field">
                  <label for="ur-contact-zip"><span data-en="Property ZIP / City *" data-es="Código Postal / Ciudad *" data-vi="Mã ZIP / Thành Phố *">Property ZIP / City *</span></label>
                  <input id="ur-contact-zip" type="text" name="zip" placeholder="77008 or Houston Heights" required>
                </div>
                <div class="ur-estimate-form__field ur-estimate-form__field--full">
                  <label for="ur-contact-service"><span data-en="Service Needed *" data-es="Servicio Requerido *" data-vi="Dịch Vụ Cần Thiết *">Service Needed *</span></label>
                  <select id="ur-contact-service" name="service" required>
                    <option value="" data-en="Select a service" data-es="Selecciona un servicio" data-vi="Chọn một dịch vụ">Select a service</option>
                    <?php foreach ($service_options as $option) : ?>
                      <option value="<?php echo esc_attr($option['en']); ?>" data-en="<?php echo esc_attr($option['en']); ?>" data-es="<?php echo esc_attr($option['es']); ?>" data-vi="<?php echo esc_attr($option['vi']); ?>"><?php echo esc_html($option['en']); ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="ur-estimate-form__field ur-estimate-form__field--full">
                  <label for="ur-contact-message"><span data-en="Message" data-es="Mensaje" data-vi="Tin Nhắn">Message</span></label>
                  <textarea id="ur-contact-message" name="message" rows="4" placeholder="Tell us a bit about the project..."></textarea>
                </div>
              </div>

              <div id="ur-contact-success" class="ur-form-message ur-form-message--success" aria-live="polite"></div>
              <div id="ur-contact-error" class="ur-form-message ur-form-message--error" aria-live="polite"></div>

              <!-- Honeypot anti-spam — invisible para personas, visible para bots.
                   El name evita palabras como "company" u "organization": el
                   autocompletado de Chrome las reconoce y rellena el campo solo,
                   aunque esté oculto, disparando el bloqueo con usuarios reales. -->
              <div class="ur-estimate-form__honeypot" aria-hidden="true">
                <label for="ur-contact-ref">Reference Code</label>
                <input id="ur-contact-ref" type="text" name="ur_ref_code" tabindex="-1" autocomplete="off">
              </div>

              <label class="ur-estimate-form__check">
                <input id="ur-contact-policy" type="checkbox" required>
                <span data-en='I agree to the &lt;a href="/privacy-policy"&gt;Privacy Policy&lt;/a&gt; and &lt;a href="/terms-of-service"&gt;Terms of Service&lt;/a&gt;.' data-es='Acepto la &lt;a href="/privacy-policy"&gt;Política de Privacidad&lt;/a&gt; y los &lt;a href="/terms-of-service"&gt;Términos de Servicio&lt;/a&gt;.' data-vi='Tôi đồng ý với &lt;a href="/privacy-policy"&gt;Chính Sách Bảo Mật&lt;/a&gt; và &lt;a href="/terms-of-service"&gt;Điều Khoản Dịch Vụ&lt;/a&gt;.'>I agree to the <a href="/privacy-policy">Privacy Policy</a> and <a href="/terms-of-service">Terms of Service</a>.</span>
              </label>

              <button id="ur-contact-submit" type="submit" class="ur-btn ur-btn-gold ur-magnetic ur-estimate-form__submit">
                <span data-en="Send Request" data-es="Enviar Solicitud" data-vi="Gửi Yêu Cầu">Send Request</span>
              </button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- MAP — embed real e interactivo de la oficina                  -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden bg-white py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="ur-reveal-up flex flex-wrap items-end justify-between gap-4">
        <div>
          <p class="ur-eyebrow" data-en="Find Us" data-es="Encuéntranos" data-vi="Tìm Chúng Tôi">Find Us</p>
          <h2 class="mt-3 text-2xl font-black uppercase leading-[1.05] tracking-[-0.01em] text-[#12103A] md:text-4xl" data-en="Our Office" data-es="Nuestra Oficina" data-vi="Văn Phòng Của Chúng Tôi">Our Office</h2>
        </div>
        <a href="<?php echo esc_url($map_link); ?>" target="_blank" rel="noopener noreferrer" class="ur-btn ur-btn-dark ur-magnetic inline-flex items-center justify-center gap-2 px-6 py-4 text-sm font-black uppercase tracking-[0.12em] text-white">
          <span data-en="Get Directions" data-es="Cómo Llegar" data-vi="Chỉ Đường">Get Directions</span> <?php echo $icon('arrow', 'h-4 w-4'); ?>
        </a>
      </div>

      <div class="ur-reveal-up ur-map-frame mt-8">
        <span class="ur-hud-corner ur-hud-corner--tl" aria-hidden="true"></span>
        <span class="ur-hud-corner ur-hud-corner--tr" aria-hidden="true"></span>
        <span class="ur-hud-corner ur-hud-corner--bl" aria-hidden="true"></span>
        <span class="ur-hud-corner ur-hud-corner--br" aria-hidden="true"></span>
        <iframe src="<?php echo esc_url($map_embed_src); ?>" loading="lazy" title="Urena Roofing Contractor office location"></iframe>
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
        <h2 class="mt-3 text-2xl font-black uppercase leading-[1.05] tracking-[-0.01em] text-[#12103A] md:text-4xl" data-en="Before You Reach Out" data-es="Antes de Contactarnos" data-vi="Trước Khi Liên Hệ">Before You Reach Out</h2>
      </div>

      <div class="js-ur-faq ur-reveal-up mt-10 space-y-3">
        <?php foreach ($contact_faqs as $faq) : ?>
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
    foreach ($contact_faqs as $faq) {
      $faq_schema['mainEntity'][] = [
        '@type' => 'Question',
        'name' => $faq['q'],
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq['a']],
      ];
    }
  ?>
  <script type="application/ld+json"><?php echo wp_json_encode($faq_schema); ?></script>

</main>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@600;700;800;900&family=Public+Sans:wght@400;500;600;700;800&family=IBM+Plex+Mono:wght@500;600&display=swap');

  /* El badge flotante de reCAPTCHA v3 y el botón del chatbot comparten la
     esquina inferior derecha — lo subimos para que no se tapen. Reposicionar
     con CSS está permitido por Google siempre que el badge siga visible. */
  .grecaptcha-badge { bottom: 88px !important; }
  @media (max-width: 640px) {
    .grecaptcha-badge { bottom: 92px !important; }
  }

  .ur-contact {
    --ur-navy:#12103A; --ur-navy-2:#221D5C; --ur-gold:#F6BE15; --ur-gold-deep:#C9910A;
    --ur-mist:#EEF1F5; --ur-ink:#14131F; --ur-slate:#5B5F6B; --ur-line: rgba(20,19,31,.1);
    --ur-radius:10px; --ur-radius-sm:6px;
    font-family:'Public Sans','Segoe UI',Arial,sans-serif;
  }
  .ur-contact h1,.ur-contact h2,.ur-contact h3{ font-family:'Big Shoulders Display','Arial Narrow',sans-serif; }
  .ur-contact a:focus-visible,.ur-contact button:focus-visible,.ur-contact input:focus-visible,.ur-contact select:focus-visible,.ur-contact textarea:focus-visible{ outline:2px solid var(--ur-gold); outline-offset:3px; }
  .ur-ic{ display:block; }

  .ur-eyebrow{ font-family:'IBM Plex Mono',monospace; font-size:.72rem; font-weight:600; letter-spacing:.18em; text-transform:uppercase; color:var(--ur-gold-deep); }
  .ur-eyebrow--light{ color:var(--ur-gold); }
  .ur-mono-tag{ font-family:'IBM Plex Mono',monospace; font-size:.66rem; font-weight:600; letter-spacing:.05em; color:var(--ur-slate); background:rgba(20,19,31,.05); border:1px solid var(--ur-line); padding:.35rem .6rem; display:inline-block; border-radius:var(--ur-radius-sm); }
  .ur-mono-tag--light{ color:var(--ur-gold); background:rgba(246,190,21,.1); border-color:rgba(246,190,21,.28); }

  /* ---- Hero — fondo fijo, se queda quieto mientras scrolleás encima ---- */
  .ur-contact-hero__bg{
    position:absolute; inset:0; background-size:cover; background-position:center;
    background-attachment:fixed; will-change:transform;
  }
  .ur-contact-hero__scrim{ background:linear-gradient(180deg, rgba(18,16,58,.62) 0%, rgba(18,16,58,.72) 55%, rgba(18,16,58,.88) 100%); }
  @media (max-width:1024px){ .ur-contact-hero__bg{ background-attachment:scroll; } }

  .ur-word{ display:inline-block; overflow:hidden; vertical-align:top; }
  .ur-word__inner{ display:inline-block; transform:translateY(115%); opacity:0; animation:urWordUp .9s cubic-bezier(.16,1,.3,1) forwards; animation-delay:calc(var(--i) * 80ms + 150ms); }
  @keyframes urWordUp{ to{ transform:translateY(0); opacity:1; } }
  .ur-fade-in-0,.ur-fade-in-2{ opacity:0; transform:translateY(16px); animation:urFadeUp .9s cubic-bezier(.16,1,.3,1) forwards; }
  .ur-fade-in-0{ animation-delay:.05s; } .ur-fade-in-2{ animation-delay:.7s; }
  @keyframes urFadeUp{ to{ opacity:1; transform:translateY(0); } }

  /* ---- HUD corners ---- */
  .ur-hud-corner{ position:absolute; z-index:10; width:24px; height:24px; opacity:0; transform:scale(.6); transition:opacity .6s ease, transform .6s cubic-bezier(.16,1,.3,1); pointer-events:none; }
  .ur-hud-corner.is-visible{ opacity:1; transform:scale(1); }
  .ur-hud-corner--tl{ top:-2px; left:-2px; border-top:2px solid var(--ur-gold); border-left:2px solid var(--ur-gold); transition-delay:.1s; }
  .ur-hud-corner--tr{ top:-2px; right:-2px; border-top:2px solid var(--ur-gold); border-right:2px solid var(--ur-gold); transition-delay:.22s; }
  .ur-hud-corner--bl{ bottom:-2px; left:-2px; border-bottom:2px solid var(--ur-gold); border-left:2px solid var(--ur-gold); transition-delay:.34s; }
  .ur-hud-corner--br{ bottom:-2px; right:-2px; border-bottom:2px solid var(--ur-gold); border-right:2px solid var(--ur-gold); transition-delay:.46s; }

  /* ---- Contact info — panel navy con estampado propio (mismo truco que el ejemplo) ---- */
  .ur-contact-info{
    position:relative; isolation:isolate; overflow:hidden;
    background:linear-gradient(180deg, var(--ur-navy-2) 0%, var(--ur-navy) 100%);
    box-shadow:0 30px 60px rgba(18,16,58,.22);
    border-radius:var(--ur-radius);
  }
  .ur-contact-info__stamp{
    position:absolute; inset:0; z-index:0; pointer-events:none; opacity:.14;
    background-repeat:no-repeat; background-position:120% 25%; background-size:340px;
    background-attachment:fixed;
  }
  .ur-contact-info__glow{
    position:absolute; inset:0; z-index:0; pointer-events:none;
    background:
      radial-gradient(circle at 0% 0%, rgba(246,190,21,.16), transparent 42%),
      radial-gradient(circle at 100% 100%, rgba(110,140,206,.14), transparent 38%);
  }
  .ur-contact-info__content{ position:relative; z-index:1; padding:2.75rem 2.25rem; }
  @media (max-width:1024px){ .ur-contact-info__stamp{ background-attachment:scroll; background-position:105% 10%; } }
  @media (max-width:640px){ .ur-contact-info__content{ padding:2.25rem 1.5rem; } .ur-contact-info__stamp{ background-size:240px; } }

  /* ---- Form card — mismo estampado de apoyo, fijo al fondo ---- */
  .ur-formcard{ position:relative; overflow:hidden; }
  .ur-formcard__stamp{
    position:absolute; inset:0; z-index:0; pointer-events:none; opacity:.05;
    background-repeat:no-repeat; background-position:105% 105%; background-size:300px;
    background-attachment:fixed;
  }
  .ur-estimate-form{ position:relative; z-index:1; }
  @media (max-width:1024px){ .ur-formcard__stamp{ background-attachment:scroll; } }
  @media (max-width:640px){ .ur-formcard__stamp{ background-size:200px; } }

  /* ---- Contact info rows ---- */
  .ur-contact-row{ display:flex; align-items:flex-start; gap:.9rem; }
  .ur-contact-row__icon{
    flex-shrink:0; display:inline-flex; align-items:center; justify-content:center; width:40px; height:40px;
    background:rgba(255,255,255,.08); border:1px solid rgba(255,255,255,.16); color:var(--ur-gold);
    border-radius:var(--ur-radius-sm);
  }
  .ur-contact-row__icon--pulse{ position:relative; }
  .ur-contact-row__icon--pulse::after{
    content:''; position:absolute; inset:-4px; border:1px solid var(--ur-gold); border-radius:var(--ur-radius-sm);
    opacity:0; animation:urRingPulse 2.8s ease-out infinite;
  }
  @keyframes urRingPulse{ 0%{ opacity:.55; transform:scale(.85); } 100%{ opacity:0; transform:scale(1.25); } }
  .ur-contact-row__label{ margin:0 0 .15rem; font-family:'IBM Plex Mono',monospace; font-size:.66rem; font-weight:700; letter-spacing:.08em; text-transform:uppercase; color:rgba(255,255,255,.5); }
  .ur-contact-row__value{ display:block; font-size:15px; font-weight:700; color:#fff; text-decoration:none; transition:color .2s ease; }
  .ur-contact-row__value:hover{ color:var(--ur-gold); }
  .ur-contact-row__value--address{ font-weight:600; line-height:1.5; color:rgba(255,255,255,.9); }

  /* ---- Buttons ---- */
  .ur-btn{ position:relative; border:1px solid transparent; border-radius:var(--ur-radius-sm); transition:box-shadow .25s ease,background-color .25s ease,color .25s ease; }
  .ur-btn span{ position:relative; z-index:1; }
  .ur-btn-gold{ background:var(--ur-gold); color:var(--ur-navy); box-shadow:0 16px 34px rgba(246,190,21,.28); }
  .ur-btn-gold:hover{ background:var(--ur-gold-deep); }
  .ur-btn-dark{ background:var(--ur-navy); box-shadow:0 16px 34px rgba(18,16,58,.24); }
  .ur-btn-dark:hover{ background:var(--ur-navy-2); }
  .ur-magnetic{ will-change:transform; }

  /* ---- Estimate form card (mismo lenguaje del Home) ---- */
  .ur-formcard{ position:relative; }
  .ur-estimate-form{ position:relative; border:1px solid var(--ur-line); background:#fff; box-shadow:0 24px 60px rgba(18,16,58,.1); padding:2rem; border-top:3px solid var(--ur-gold); border-radius:var(--ur-radius); }
  .ur-estimate-form__readout{ font-family:'IBM Plex Mono',monospace; font-size:.68rem; font-weight:700; letter-spacing:.14em; color:var(--ur-gold-deep); }
  .ur-estimate-form__title{ margin:.6rem 0 1.5rem; font-size:1.5rem; font-weight:800; line-height:1.1; letter-spacing:-.01em; color:var(--ur-navy); text-transform:uppercase; }
  .ur-estimate-form__grid{ display:grid; gap:1rem; grid-template-columns:1fr; }
  .ur-estimate-form__field{ display:grid; gap:.4rem; } .ur-estimate-form__field--full{ grid-column:1/-1; }
  .ur-estimate-form__field label{ font-size:.7rem; font-weight:700; letter-spacing:.06em; text-transform:uppercase; color:var(--ur-slate); }
  .ur-estimate-form__field input,.ur-estimate-form__field select,.ur-estimate-form__field textarea{
    width:100%; min-height:50px; border:1px solid var(--ur-line); background:var(--ur-mist); padding:.9rem 1rem;
    font-size:.95rem; font-family:inherit; color:var(--ur-ink); outline:none; resize:vertical;
    transition:border-color .2s ease,box-shadow .2s ease,background-color .2s ease;
    border-radius:var(--ur-radius-sm);
  }
  .ur-estimate-form__field input:focus,.ur-estimate-form__field select:focus,.ur-estimate-form__field textarea:focus{
    border-color:var(--ur-gold-deep); box-shadow:0 0 0 3px rgba(246,190,21,.18); background:#fff;
  }
  .ur-form-message{ display:none; margin-top:1rem; padding:.9rem 1rem; border:1px solid transparent; font-size:.82rem; line-height:1.6; border-radius:var(--ur-radius-sm); }
  .ur-form-message.is-visible{ display:block; }
  .ur-form-message--success{ background:rgba(246,190,21,.14); border-color:rgba(246,190,21,.35); color:#7a5c05; }
  .ur-form-message--error{ background:rgba(200,60,60,.08); border-color:rgba(200,60,60,.28); color:#a32d2d; }
  .ur-estimate-form__honeypot{ position:absolute; left:-9999px; width:1px; height:1px; overflow:hidden; }
  .ur-estimate-form__check{ display:flex; gap:.7rem; margin-top:1.1rem; font-size:.78rem; line-height:1.6; color:var(--ur-slate); }
  .ur-estimate-form__check input{ margin-top:.15rem; accent-color:var(--ur-gold-deep); }
  .ur-estimate-form__check a{ color:var(--ur-navy); text-decoration:underline; }
  .ur-estimate-form__submit{ width:100%; margin-top:1.2rem; min-height:54px; }
  @media (min-width:640px){ .ur-estimate-form__grid{ grid-template-columns:1fr 1fr; } }

  /* ---- Map frame ---- */
  .ur-map-frame{ position:relative; height:420px; border:1px solid var(--ur-line); box-shadow:0 24px 50px rgba(18,16,58,.1); border-radius:var(--ur-radius); overflow:hidden; }
  .ur-map-frame iframe{ width:100%; height:100%; border:0; display:block; filter:grayscale(.15); }

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
  .ur-reveal-right{ transform:translateX(40px); } .ur-reveal-stagger{ transform:translateY(24px); }
  .ur-reveal-up.is-visible,.ur-reveal-left.is-visible,.ur-reveal-right.is-visible,.ur-reveal-stagger.is-visible{ opacity:1; transform:translate(0,0); }

  @media (max-width:768px){
    .ur-contact-hero h1{ font-size:2.3rem; }
    .ur-map-frame{ height:320px; }
  }

  @media (prefers-reduced-motion: reduce){
    .ur-reveal-up,.ur-reveal-left,.ur-reveal-right,.ur-reveal-stagger,.ur-word__inner,.ur-fade-in-0,.ur-fade-in-2,
    .ur-btn,.ur-hud-corner,.ur-contact-row__icon--pulse::after,.ur-faq-item__icon,.ur-faq-item__panel{
      opacity:1!important; transform:none!important; transition:none!important; animation:none!important;
    }
    .ur-contact-hero__bg{ background-attachment:scroll!important; }
  }
</style>

<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LeD-oItAAAAACAqiZtBj6hFg2tIWL2bMkByXVsN" async defer></script>

<script>
  document.addEventListener("DOMContentLoaded", function () {

    /* ---------- Reveal on scroll (incluye HUD corners) ---------- */
    try {
      const revealItems = document.querySelectorAll(".ur-reveal-up,.ur-reveal-left,.ur-reveal-right,.ur-reveal-stagger,.ur-contact-info .ur-hud-corner,.ur-formcard .ur-hud-corner,.ur-map-frame .ur-hud-corner");
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

    /* ---------- FAQ accordion ---------- */
    try {
      document.querySelectorAll(".js-ur-faq-trigger").forEach((trigger) => {
        trigger.addEventListener("click", () => {
          trigger.closest(".ur-faq-item").classList.toggle("is-open");
        });
      });
    } catch (err) { console.error("ur-faq init failed:", err); }

    /* ---------- Contact form: honeypot + reCAPTCHA v3 (invisible) + EmailJS ---------- */
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
            grecaptcha.execute(UR_RECAPTCHA_SITE_KEY, { action: "contact_request" }).then(function (token) {

              const formData = {
                name:         form.querySelector('input[name="full_name"]').value.trim(),
                phone:        form.querySelector('input[name="phone"]').value.trim(),
                email:        form.querySelector('input[name="email"]').value.trim(),
                zip:          form.querySelector('input[name="zip"]').value.trim(),
                service:      form.querySelector('select[name="service"]').value,
                message:      form.querySelector('textarea[name="message"]')?.value.trim() || "",
                form_source:  form.dataset.formSource || "Contact Page",
                page_url:     window.location.href,
                consent:      policyCheck.checked ? t("Yes", "Sí", "Có") : "No",
                submitted_at: new Date().toLocaleString("en-US", { timeZone: "America/Chicago", dateStyle: "medium", timeStyle: "short" }) + " (Houston time)",
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
    } catch (err) { console.error("ur-contact-form init failed:", err); }
  });
</script>

<?php get_footer(); ?>