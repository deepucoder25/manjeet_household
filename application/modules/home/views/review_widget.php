<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

$reviews = [
    [
        'name' => 'Rohit Sharma',
        'route' => 'Gurugram to Pune',
        'text' => 'Manjeet Packers made our home shifting experience so easy and stress-free. Their team was punctual, polite, and handled everything with great care.',
        'rating' => 5
    ],
    [
        'name' => 'Priya Mehta',
        'route' => 'Delhi to Bangalore',
        'text' => 'From packing to delivery, everything was perfect! Our items reached on time and in excellent condition. Highly recommended!',
        'rating' => 5
    ],
    [
        'name' => 'Amit Verma',
        'route' => 'Noida to Mumbai',
        'text' => 'Very professional and reliable service. The team packed our office equipment securely and completed the move without any hassle.',
        'rating' => 5
    ],
    [
        'name' => 'Neha Kapoor',
        'route' => 'Gurugram to Jaipur',
        'text' => 'Excellent service and great support from the entire team. They treated our belongings like their own. Will definitely choose them again!',
        'rating' => 5
    ],
    [
        'name' => 'Rajesh Kumar',
        'route' => 'Indore to Bhopal',
        'text' => 'Very smooth and stress-free relocation. The packing was high quality, and the delivery was on time. Highly professional team!',
        'rating' => 5
    ]
];
?>

<section class="reviews-section-new py-5">
  <div class="container">
    
    <!-- Section Header -->
    <div class="services-header-new text-center mb-5">
      <div class="services-pill-badge d-inline-flex align-items-center gap-2 mb-3">
        <span class="pill-line"></span>
        <span class="pill-text text-danger fw-bold">TESTIMONIALS</span>
        <span class="pill-line"></span>
      </div>
      <h2 class="services-main-title fw-bold text-dark">
        WHAT OUR <span class="text-danger position-relative d-inline-block">CLIENTS<span class="title-accent-line-new"></span></span> SAY
      </h2>
      <p class="services-subtitle text-dark mx-auto mt-3">
        Real stories from real people who trusted Manjeet House Hold Packers & Movers for their relocation needs.
      </p>
    </div>

    <!-- Swappable Testimonials Slider -->
    <div class="testimonial-slider-container-new">
      <div class="testimonial-viewport-new">
        <div class="testimonial-track-new" id="testimonial-track-new">
          <?php foreach ($reviews as $idx => $review): ?>
            <div class="testimonial-card-new">
              
              <!-- Card Header Row (Avatar on Left, Stars on Right) -->
              <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="testimonial-avatar-letter-new avatar-gradient-<?= $idx ?>"><?= substr($review['name'], 0, 1) ?></div>
                <div class="testimonial-star-rating-new">
                  <?php 
                  $rating = $review['rating'] ?? 5;
                  for ($i = 1; $i <= 5; $i++) {
                      if ($i <= $rating) {
                          echo '<i class="bi bi-star-fill"></i>';
                      } else {
                          echo '<i class="bi bi-star"></i>';
                      }
                  }
                  ?>
                </div>
              </div>

              <!-- Quote Decoration -->
              <div class="testimonial-quote-wrap">“</div>

              <!-- Content Text -->
              <p class="testimonial-text-new italic"><?= $review['text'] ?></p>

              <!-- Bottom Author details -->
              <div class="mt-auto">
                <span class="testimonial-line-new"></span>
                <h6 class="testimonial-author-name-new fw-bold mb-1"><?= $review['name'] ?></h6>
                <span class="testimonial-route-new small d-block"><?= $review['route'] ?></span>
              </div>

            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Pagination Controls (Dots with Left and Right Arrows) -->
      <div class="testimonial-controls-wrap-new">
        <button type="button" class="testimonial-arrow-new" id="testimonial-prev-btn" aria-label="Previous slide">
          <i class="bi bi-chevron-left"></i>
        </button>
        
        <div class="testimonial-dots-wrap-new">
          <span class="testimonial-dot-new active" data-index="0"></span>
          <span class="testimonial-dot-new" data-index="1"></span>
          <span class="testimonial-dot-new" data-index="2"></span>
          <span class="testimonial-dot-new" data-index="3"></span>
          <span class="testimonial-dot-new" data-index="4"></span>
        </div>

        <button type="button" class="testimonial-arrow-new" id="testimonial-next-btn" aria-label="Next slide">
          <i class="bi bi-chevron-right"></i>
        </button>
      </div>
    </div>

    <!-- Bottom Stats Strip -->
    <div class="reviews-stats-bar-new mt-5 p-4 mx-auto" style="max-width: 1140px;">
      <div class="row g-4 align-items-center justify-content-between">
        
        <!-- Stat Item 1 -->
        <div class="col-3">
          <div class="stat-item-wrap-new">
            <div class="stat-icon-circle-new">
              <i class="bi bi-shield-check"></i>
            </div>
            <div class="stat-text-box-new">
              <h4 class="stat-number-new fw-bold mb-1"><?= $happyClients?></h4>
              <p class="stat-label-new mb-0">Happy Customers</p>
            </div>
          </div>
        </div>

        <!-- Stat Item 2 -->
        <div class="col-3">
          <div class="stat-item-wrap-new">
            <div class="stat-icon-circle-new">
              <i class="bi bi-truck"></i>
            </div>
            <div class="stat-text-box-new">
              <h4 class="stat-number-new fw-bold mb-1"><?= $successfulMoves ?></h4>
              <p class="stat-label-new mb-0">Successful Moves</p>
            </div>
          </div>
        </div>

        <!-- Stat Item 3 -->
        <div class="col-3">
          <div class="stat-item-wrap-new">
            <div class="stat-icon-circle-new">
              <i class="bi bi-box-seam"></i>
            </div>
            <div class="stat-text-box-new">
              <h4 class="stat-number-new fw-bold mb-1"><?= $statesCovered?></h4>
              <p class="stat-label-new mb-0">States Covered</p>
            </div>
          </div>
        </div>

        <!-- Stat Item 4 -->
        <div class="col-3">
          <div class="stat-item-wrap-new">
            <div class="stat-icon-circle-new">
              <i class="bi bi-people"></i>
            </div>
            <div class="stat-text-box-new">
              <h4 class="stat-number-new fw-bold mb-1"><?= $secureShifting ?></h4>
              <p class="stat-label-new mb-0">Secure Shifting</p>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- Minimal JS Reviews Slider utilizing CSS Scroll Snap -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const viewport = document.querySelector('.testimonial-viewport-new');
    const track = document.getElementById('testimonial-track-new');
    const dots = document.querySelectorAll('.testimonial-dot-new');
    const prevBtn = document.getElementById('testimonial-prev-btn');
    const nextBtn = document.getElementById('testimonial-next-btn');

    function getCardWidth() {
        return track.children[0].offsetWidth + 20; // width + gap
    }

    function scrollToIndex(idx) {
        viewport.scrollTo({ left: idx * getCardWidth(), behavior: 'smooth' });
    }

    // Dot click listeners
    dots.forEach((dot, idx) => {
        dot.addEventListener('click', () => scrollToIndex(idx));
    });

    // Arrow click listeners
    if (prevBtn) prevBtn.addEventListener('click', () => {
        const idx = Math.max(0, Math.round(viewport.scrollLeft / getCardWidth()) - 1);
        scrollToIndex(idx);
    });
    if (nextBtn) nextBtn.addEventListener('click', () => {
        const idx = Math.round(viewport.scrollLeft / getCardWidth()) + 1;
        scrollToIndex(idx);
    });

    // Update active indicators on viewport scroll
    viewport.addEventListener('scroll', () => {
        const cardWidth = getCardWidth();
        const index = Math.round(viewport.scrollLeft / cardWidth);
        
        dots.forEach((dot, idx) => {
            dot.classList.toggle('active', idx === index);
        });

        if (prevBtn && nextBtn) {
            const maxScrollLeft = viewport.scrollWidth - viewport.clientWidth;
            prevBtn.style.opacity = viewport.scrollLeft <= 5 ? '0.4' : '1';
            prevBtn.style.pointerEvents = viewport.scrollLeft <= 5 ? 'none' : 'auto';
            nextBtn.style.opacity = viewport.scrollLeft >= maxScrollLeft - 5 ? '0.4' : '1';
            nextBtn.style.pointerEvents = viewport.scrollLeft >= maxScrollLeft - 5 ? 'none' : 'auto';
        }
    });
});
</script>
