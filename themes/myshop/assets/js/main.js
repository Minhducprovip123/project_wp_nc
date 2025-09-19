// Minimal JS placeholder
(function() {
    const doc = document;
    doc.addEventListener('DOMContentLoaded', function() {
        // Add a body class when JS is enabled
        doc.body.classList.add('js-enabled');
        

        // Simple hero slider
        const slides = Array.from(doc.querySelectorAll('.hero-slide'));
        const prevBtn = doc.querySelector('.hero-nav.prev');
        const nextBtn = doc.querySelector('.hero-nav.next');
        let idx = 0;
        function show(i){
            slides.forEach((s, n) => s.classList.toggle('current', n === i));
        }
        function next(){ idx = (idx + 1) % slides.length; show(idx); }
        function prev(){ idx = (idx - 1 + slides.length) % slides.length; show(idx); }
        if (slides.length) {
            let timer = setInterval(next, 5000);
            nextBtn && nextBtn.addEventListener('click', () => { next(); reset(); });
            prevBtn && prevBtn.addEventListener('click', () => { prev(); reset(); });
            function reset(){ clearInterval(timer); timer = setInterval(next, 5000); }
        }

        // Quick add to cart functionality
        const quickAddBtns = Array.from(doc.querySelectorAll('.quick-add-btn'));
        quickAddBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const productId = btn.dataset.productId;
                // Simple alert for now - you can integrate with actual cart system later
                alert(`Đã thêm sản phẩm ID ${productId} vào giỏ hàng!`);

        $(document).ready(function(){
  $('.banner-carousel').slick({
    autoplay: true,       // Tự động chạy
    autoplaySpeed: 3000,  // Thời gian chuyển slide (3 giây)
    arrows: true,         // Hiện mũi tên trái/phải
    dots: true,           // Hiện chấm tròn điều hướng
    infinite: true,       // Chạy vòng lặp
    speed: 600,           // Tốc độ chuyển slide
    fade: false,          // Nếu muốn hiệu ứng mờ thay vì trượt thì để true
    cssEase: 'linear'
    

  });
  
});

        

            });
        });
    });
})();
jQuery(document).ready(function($){

  // Banner slider
  if ($('.banner-carousel').length) {
    $('.banner-carousel').slick({
      autoplay: true,
      autoplaySpeed: 3000,
      arrows: true,
      dots: true,
      infinite: true,
      speed: 600,
      fade: false,
      cssEase: 'linear'
    });
  }

  // Product slider
  if ($('.product-carousel').length) {
    $('.product-carousel').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: true,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 3000,
      responsive: [
        {
          breakpoint: 992,
          settings: { slidesToShow: 2 }
        },
        {
          breakpoint: 576,
          settings: { slidesToShow: 1 }
        }
      ]
    });
  }

});
document.addEventListener("DOMContentLoaded", function() {
  const tabs = document.querySelectorAll(".product-tabs li");
  const products = document.querySelectorAll(".product-item");

  tabs.forEach(tab => {
    tab.addEventListener("click", function() {
      // bỏ active cũ
      tabs.forEach(t => t.classList.remove("active"));
      this.classList.add("active");

      let filter = this.getAttribute("data-filter");

      products.forEach(product => {
        if (filter === "all") {
          product.style.display = "block";
        } else if (product.classList.contains(filter)) {
          product.style.display = "block";
        } else {
          product.style.display = "none";
        }
      });
    });
  });
});
document.addEventListener("DOMContentLoaded", function() {
    const header = document.querySelector(".site-header"); // đổi lại đúng class
    if (!header) {
        console.error("Không tìm thấy .site-header trong HTML");
        return;
    }

    window.addEventListener("scroll", function() {
        if (window.scrollY > 50) {
            header.classList.add("shrink");
        } else {
            header.classList.remove("shrink");
        }
    });
});


jQuery(document).ready(function($){
    $('.slider').slick({
        dots: true,
        arrows: true,
        infinite: true,
        speed: 600,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        adaptiveHeight: true
    });
});


