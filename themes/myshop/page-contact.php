<?php
/**
 * Template Name: Contact – Adidas Style
 * Description: Trang liên hệ kiểu Adidas: hero, khối trợ giúp, kênh liên hệ, form, map, store finder.
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header(); ?>

<style>
/* ------ Adidas-ish Contact Page ------ */
.ad-hero{position:relative;min-height:36rem;display:flex;align-items:flex-end;background:#000 url('<?php echo esc_url( get_theme_file_uri("assets/img/contact-hero.jpg") ); ?>') center/cover no-repeat;color:#fff}
.ad-hero .ad-hero__inner{width:100%;padding:4rem 1.25rem}
.ad-hero h1{font-size:clamp(32px,5vw,56px);text-transform:uppercase;letter-spacing:.02em;margin:0}
.ad-hero p{max-width:760px;opacity:.9;margin-top:.5rem}

.ad-breadcrumb{font-size:.875rem;margin:1rem 0;color:#666}
.ad-breadcrumb a{color:#666;text-decoration:none}
.ad-section{padding:3rem 0}
.ad-section h2{font-size:clamp(22px,3vw,32px);text-transform:uppercase;margin-bottom:1.25rem}
.ad-grid{display:grid;gap:1rem}
@media(min-width:768px){.ad-grid-3{grid-template-columns:repeat(3,1fr)}.ad-grid-2{grid-template-columns:repeat(2,1fr)}}

.ad-card{background:#fff;border:1px solid #eee;border-radius:16px;padding:1.25rem;transition:transform .15s ease, box-shadow .15s ease}
.ad-card:hover{transform:translateY(-2px);box-shadow:0 8px 24px rgba(0,0,0,.06)}
.ad-card h3{font-size:1.125rem;text-transform:uppercase;margin:0 0 .5rem}
.ad-card p{color:#555;margin:0 0 .75rem}
.ad-btn{display:inline-block;padding:.75rem 1.25rem;border-radius:999px;border:1px solid #111;text-decoration:none;text-transform:uppercase;font-weight:600}
.ad-btn--dark{background:#111;color:#fff;border-color:#111}
.ad-btn--ghost{background:transparent;color:#111}
.ad-badge{display:inline-block;font-size:.75rem;border:1px solid #ddd;padding:.25rem .6rem;border-radius:999px;margin-left:.5rem}

.ad-help .ad-card{display:flex;gap:1rem;align-items:flex-start}
.ad-help .ad-ico{width:40px;height:40px;border-radius:50%;background:#f3f3f3;display:grid;place-items:center;font-weight:700}

.ad-contact .ad-card ul{margin:0;padding-left:1rem;color:#555}
.ad-contact .ad-meta{font-size:.875rem;color:#666;margin-top:.25rem}

.ad-form{background:#fafafa;border-radius:16px;padding:1.25rem;border:1px solid #eee}
.ad-form label{display:block;font-size:.875rem;text-transform:uppercase;margin:.75rem 0 .25rem}
.ad-form input,.ad-form select,.ad-form textarea{width:100%;padding:.75rem;border:1px solid #ddd;border-radius:12px;background:#fff}
.ad-form .ad-row{display:grid;gap:1rem}
@media(min-width:768px){.ad-form .ad-row{grid-template-columns:repeat(2,1fr)}}
.ad-form .ad-disclaimer{font-size:.8125rem;color:#666;margin-top:.5rem}

.ad-map iframe{width:100%;min-height:360px;border:0;border-radius:16px}
.ad-cta{display:flex;gap:.75rem;flex-wrap:wrap}

:root{color-scheme:light only}
body .entry-content{max-width:100%}
.container-narrow{max-width:1120px;margin:0 auto;padding:0 16px}
</style>

<main id="primary" class="site-main">

  <!-- breadcrumb -->
  <div class="container-narrow">
    <nav class="ad-breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url('/') ); ?>">Trang chủ</a> / <span>Liên hệ</span>
    </nav>
  </div>

  <!-- hero -->
  <section class="ad-hero" role="img" aria-label="Contact hero">
    <div class="container-narrow ad-hero__inner">
      <h1>Liên hệ & Hỗ trợ</h1>
      <p>Chúng tôi luôn sẵn sàng trợ giúp về đơn hàng, đổi trả, bảo hành, và thông tin cửa hàng.</p>
      <div class="ad-cta" style="margin-top:1rem">
        <a class="ad-btn ad-btn--dark" href="#contact-form">Gửi yêu cầu</a>
        <a class="ad-btn ad-btn--ghost" href="#help-topics">Xem chủ đề trợ giúp</a>
      </div>
    </div>
  </section>

  <div class="container-narrow">

    <!-- help topics -->
    <section id="help-topics" class="ad-section ad-help">
      <h2>Chủ đề phổ biến</h2>
      <div class="ad-grid ad-grid-3">
        <article class="ad-card">
          <div class="ad-ico">↻</div>
          <div>
            <h3>Đổi & Trả hàng</h3>
            <p>Điều kiện, quy trình và thời gian hoàn tiền.</p>
            <a class="ad-btn ad-btn--ghost" href="/returns">Xem chi tiết</a>
          </div>
        </article>
        <article class="ad-card">
          <div class="ad-ico">✈</div>
          <div>
            <h3>Theo dõi đơn hàng</h3>
            <p>Nhập mã đặt hàng để theo dõi trạng thái giao hàng.</p>
            <a class="ad-btn ad-btn--ghost" href="/order-tracking">Theo dõi</a>
          </div>
        </article>
        <article class="ad-card">
          <div class="ad-ico">🏬</div>
          <div>
            <h3>Tìm cửa hàng</h3>
            <p>Tìm cửa hàng gần bạn, kiểm tra tồn kho.</p>
            <a class="ad-btn ad-btn--ghost" href="/store-finder">Mở bản đồ</a>
          </div>
        </article>
      </div>
    </section>

    <!-- contact channels -->
    <section class="ad-section ad-contact">
      <h2>Kênh liên hệ</h2>
      <div class="ad-grid ad-grid-3">
        <article class="ad-card">
          <h3>Chat trực tuyến <span class="ad-badge">Khuyên dùng</span></h3>
          <p>Phản hồi nhanh trong giờ hành chính.</p>
          <div class="ad-meta">T2–T6: 9:00–18:00</div>
          <a class="ad-btn ad-btn--dark" href="/live-chat">Bắt đầu chat</a>
        </article>
        <article class="ad-card">
          <h3>Gọi điện</h3>
          <p>Hotline hỗ trợ đặt hàng và đổi trả.</p>
          <div class="ad-meta">1900 0000 (cước phí tiêu chuẩn)</div>
          <a class="ad-btn ad-btn--ghost" href="tel:19000000">Gọi ngay</a>
        </article>
        <article class="ad-card">
          <h3>Email</h3>
          <p>Gửi yêu cầu và nhận phản hồi qua email.</p>
          <div class="ad-meta">Trong vòng 24–48h</div>
          <a class="ad-btn ad-btn--ghost" href="#contact-form">Gửi biểu mẫu</a>
        </article>
      </div>
    </section>

    <!-- form -->
    <section id="contact-form" class="ad-section">
      <h2>Gửi yêu cầu hỗ trợ</h2>
      <div class="ad-form">
        <?php
        // Nếu dùng Contact Form 7: thay 123 bằng ID form của bạn
        if ( shortcode_exists('contact-form-7') ) {
          echo do_shortcode('[contact-form-7 id="123" title="Contact – Adidas"]');
        } else {
          // Fallback: form HTML post về admin-post.php (cần thêm handler nếu muốn dùng fallback)
          ?>
          <form method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
            <input type="hidden" name="action" value="adidas_contact_fallback">
            <div class="ad-row">
              <div>
                <label>Họ và tên</label>
                <input type="text" name="name" required>
              </div>
              <div>
                <label>Email</label>
                <input type="email" name="email" required>
              </div>
            </div>
            <div class="ad-row">
              <div>
                <label>Mã đơn hàng (nếu có)</label>
                <input type="text" name="order">
              </div>
              <div>
                <label>Chủ đề</label>
                <select name="topic" required>
                  <option value="">-- Chọn chủ đề --</option>
                  <option>Đơn hàng & vận chuyển</option>
                  <option>Đổi trả & hoàn tiền</option>
                  <option>Bảo hành & chất lượng</option>
                  <option>Khác</option>
                </select>
              </div>
            </div>
            <label>Nội dung</label>
            <textarea name="message" rows="6" required></textarea>
            <label style="display:flex;gap:.5rem;align-items:flex-start">
              <input type="checkbox" name="consent" required>
              <span>Tôi đồng ý để cửa hàng liên hệ lại qua email/điện thoại và xử lý thông tin theo chính sách bảo mật.</span>
            </label>
            <div style="margin-top:1rem">
              <button class="ad-btn ad-btn--dark" type="submit">Gửi yêu cầu</button>
            </div>
            <p class="ad-disclaimer">Bạn sẽ nhận email xác nhận sau khi gửi biểu mẫu.</p>
          </form>
        <?php } ?>
      </div>
    </section>

    <!-- map + store finder -->
    <section class="ad-section ad-map">
      <h2>Cửa hàng gần bạn</h2>
      <p>Tìm cửa hàng, kiểm tra giờ mở cửa và số điện thoại liên hệ.</p>
      <div class="ad-cta" style="margin-bottom:1rem">
        <a class="ad-btn ad-btn--dark" href="/store-finder">Mở Store Finder</a>
        <a class="ad-btn ad-btn--ghost" href="/faq">Xem Câu hỏi thường gặp</a>
      </div>
      <iframe
        loading="lazy"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0!2d106.7!3d10.77!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2z"
        allowfullscreen
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

  </div>
</main>

<?php get_footer();
