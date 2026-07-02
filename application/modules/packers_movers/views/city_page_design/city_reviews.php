<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Reviews Carousel Section -->
<div class="container my-5 pm-reviews-bootstrap-container">
  
  <div class="row align-items-stretch">
    
    <!-- LEFT: Relevant Keywords Checklist (col-lg-4) -->
    <div class="col-lg-4">
      <div class="pm-reviews-keywords-card rounded-4 p-4 bg-white border shadow-sm h-100 d-flex flex-column justify-content-between position-relative overflow-hidden">
        
        <!-- Faint BG Circle accents for premium visual styling -->
        <div class="position-absolute rounded-circle pm-reviews-bg-circle-1"></div>
        <div class="position-absolute rounded-circle pm-reviews-bg-circle-2"></div>
        
        <div class="position-relative z-1">
          <!-- Header Row with Icon and Title inline -->
          <div class="d-flex align-items-center gap-3 mb-4">
            <div class="pm-reviews-keywords-icon d-flex align-items-center justify-content-center rounded-circle text-white fw-bold flex-shrink-0 pm-reviews-keywords-icon-sz">
              <i class="bi bi-search"></i>
            </div>
            <div>
              <h3 class="pm-reviews-keywords-title fw-bold text-dark fs-5 mb-0 pm-reviews-keywords-title-sz">
                RELEVANT <span class="text-danger">KEYWORDS</span>
              </h3>
              <div class="pm-reviews-keywords-divider mt-1 pm-reviews-keywords-divider-sz"></div>
            </div>
          </div>
          
          <!-- Keywords Checklist -->
          <ul class="list-unstyled d-flex flex-column gap-3 pm-reviews-keyword-checklist mb-0">
            <li class="d-flex align-items-center gap-3">
              <span class="pm-checklist-chk-wrap d-flex align-items-center justify-content-center rounded-circle pm-checklist-chk-wrap-sz"><i class="bi bi-check-lg"></i></span>
              <span class="text-secondary fw-semibold pm-checklist-label-sz">Packers and Movers <?= htmlspecialchars($city) ?></span>
            </li>
            <li class="d-flex align-items-center gap-3">
              <span class="pm-checklist-chk-wrap d-flex align-items-center justify-content-center rounded-circle pm-checklist-chk-wrap-sz"><i class="bi bi-check-lg"></i></span>
              <span class="text-secondary fw-semibold pm-checklist-label-sz">Household Shifting <?= htmlspecialchars($city) ?></span>
            </li>
            <li class="d-flex align-items-center gap-3">
              <span class="pm-checklist-chk-wrap d-flex align-items-center justify-content-center rounded-circle pm-checklist-chk-wrap-sz"><i class="bi bi-check-lg"></i></span>
              <span class="text-secondary fw-semibold pm-checklist-label-sz">Local House Shifting</span>
            </li>
            <li class="d-flex align-items-center gap-3">
              <span class="pm-checklist-chk-wrap d-flex align-items-center justify-content-center rounded-circle pm-checklist-chk-wrap-sz"><i class="bi bi-check-lg"></i></span>
              <span class="text-secondary fw-semibold pm-checklist-label-sz">Office Shifting Service</span>
            </li>
            <li class="d-flex align-items-center gap-3">
              <span class="pm-checklist-chk-wrap d-flex align-items-center justify-content-center rounded-circle pm-checklist-chk-wrap-sz"><i class="bi bi-check-lg"></i></span>
              <span class="text-secondary fw-semibold pm-checklist-label-sz">Car &amp; Bike Transportation</span>
            </li>
            <li class="d-flex align-items-center gap-3">
              <span class="pm-checklist-chk-wrap d-flex align-items-center justify-content-center rounded-circle pm-checklist-chk-wrap-sz"><i class="bi bi-check-lg"></i></span>
              <span class="text-secondary fw-semibold pm-checklist-label-sz">Loading &amp; Unloading</span>
            </li>
            <li class="d-flex align-items-center gap-3">
              <span class="pm-checklist-chk-wrap d-flex align-items-center justify-content-center rounded-circle pm-checklist-chk-wrap-sz"><i class="bi bi-check-lg"></i></span>
              <span class="text-secondary fw-semibold pm-checklist-label-sz">Warehousing &amp; Storage</span>
            </li>
            <li class="d-flex align-items-center gap-3">
              <span class="pm-checklist-chk-wrap d-flex align-items-center justify-content-center rounded-circle pm-checklist-chk-wrap-sz"><i class="bi bi-check-lg"></i></span>
              <span class="text-secondary fw-semibold pm-checklist-label-sz">Domestic Home Relocation</span>
            </li>
          </ul>
        </div>

      </div>
    </div>

    <!-- RIGHT: Testimonials Slide Card (col-lg-8) -->
    <div class="col-lg-8">
      <div class="pm-reviews-slider-block rounded-4 p-4 p-md-5 bg-white border shadow-sm h-100 d-flex flex-column justify-content-between position-relative overflow-hidden">
        
        <!-- Large Quote Icon in Background watermark -->
        <i class="bi bi-quote position-absolute pm-reviews-watermark-quote"></i>
        
        <div>
          <!-- Header -->
          <div class="pm-reviews-slider-header text-start mb-4">
            <span class="text-danger fw-bold uppercase-text mb-1 d-block pm-reviews-slider-header-eyebrow">TESTIMONIALS</span>
            <div class="pm-reviews-slider-divider mb-3 pm-reviews-slider-divider-sz"></div>
            <h2 class="fw-bold text-dark fs-3 mb-2">What Our <span class="text-danger">Clients</span> Say</h2>
            <p class="text-muted small mb-0 col-lg-9">We take pride in delivering reliable shifting and packing services that our clients trust and recommend.</p>
          </div>

          <!-- Carousel Container Elements -->
          <div id="testimonialCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000">
            
            <!-- Carousel Box (only content changes, not the container card) -->
            <div class="pm-reviews-slider-box rounded-4 p-4 p-md-5 bg-white mt-4 pm-reviews-slider-box-style">
              <div class="carousel-inner">
                
                <?php
                $reviews = [
                  [
                    "name" => "Rohit Sharma",
                    "designation" => "Flat Shifting Client",
                    "company" => "Bhopal Resident",
                    "initial" => "R",
                    "stars" => 5,
                    "text" => "Shifted my flat inside $city. They arrived at 8 AM sharp and finished packing faster than expected. No damage to kitchen items."
                  ],
                  [
                    "name" => "Ananya Gupta",
                    "designation" => "IT Operations Coordinator",
                    "company" => "Bhopal Commercial Group",
                    "initial" => "A",
                    "stars" => 5,
                    "text" => "We moved office equipment during the weekend. The team coordinated with building security and handled everything properly. Great shifting experience!"
                  ],
                  [
                    "name" => "Sandeep Verma",
                    "designation" => "Business Consultant",
                    "company" => "Indore Enterprises",
                    "initial" => "S",
                    "stars" => 5,
                    "text" => "Booked them after searching Packers and Movers Near Me in $city. Pricing stayed exactly as discussed earlier. That transparent quoting is genuinely rare."
                  ],
                  [
                    "name" => "Priya Nair",
                    "designation" => "Senior Bank Officer",
                    "company" => "SBI Bhopal Branch",
                    "initial" => "P",
                    "stars" => 5,
                    "text" => "Genuinely helpful staff. My parents were stressed about furniture scratches, but packing quality was extremely good. Fully recommend!"
                  ]
                ];
                foreach ($reviews as $i => $rev):
                ?>
                  <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
                    <div class="d-flex gap-3 align-items-start mb-4">
                      <!-- Large red quote icon -->
                      <i class="bi bi-quote text-danger flex-shrink-0 lh-1 pm-testimonial-quote-icon-sz"></i>
                      <p class="text-secondary mb-0 pm-testimonial-text-sz">
                        <?= htmlspecialchars($rev['text']) ?>
                      </p>
                    </div>

                    <!-- Author & Ratings Split Row -->
                    <div class="d-flex flex-wrap align-items-center justify-content-between pt-3 border-top pm-testimonial-author-row-border">
                      
                      <!-- Author info -->
                      <div class="d-flex align-items-center gap-3">
                        <div class="pm-review-avatar rounded-circle d-flex align-items-center justify-content-center pm-testimonial-avatar-style">
                          <i class="bi bi-person-fill fs-4"></i>
                        </div>
                        <div class="text-start">
                          <strong class="text-dark d-block mb-1 pm-testimonial-author-name-sz"><?= htmlspecialchars($rev['name']) ?></strong>
                          <small class="text-muted pm-testimonial-author-desc-sz"><?= htmlspecialchars($rev['designation']) ?>, <span class="text-danger fw-semibold"><?= htmlspecialchars($rev['company']) ?></span></small>
                        </div>
                      </div>

                      <!-- Ratings -->
                      <div class="d-flex align-items-center gap-3 mt-3 mt-sm-0">
                        <span class="d-none d-sm-block pm-testimonial-ratings-divider"></span>
                        <div class="text-start">
                          <div class="text-danger mb-1 pm-testimonial-stars-sz">
                            <?php for ($s = 1; $s <= 5; $s++): ?>
                              <i class="bi bi-star-fill"></i>
                            <?php endfor; ?>
                          </div>
                          <div class="small fw-bold text-dark d-flex align-items-center gap-1 pm-testimonial-rating-num-sz">
                            <span class="text-danger">5.0</span>
                            <span class="text-muted fw-normal">| Verified Customer</span>
                            <i class="bi bi-patch-check-fill text-danger fs-5"></i>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                <?php endforeach; ?>

              </div>
            </div>

            <!-- Carousel navigation indicators & arrows -->
            <div class="d-flex align-items-center justify-content-center gap-3 mt-4 pm-carousel-controls-wrap">
              <button class="pm-carousel-control-btn d-flex align-items-center justify-content-center rounded-circle" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <i class="bi bi-arrow-left"></i>
              </button>
              
              <div class="carousel-indicators pm-carousel-dots position-static m-0 d-flex gap-2">
                <?php foreach ($reviews as $i => $rev): ?>
                  <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="<?= $i ?>" class="<?= $i === 0 ? 'active' : '' ?>" aria-label="Slide <?= $i+1 ?>"></button>
                <?php endforeach; ?>
              </div>

              <button class="pm-carousel-control-btn d-flex align-items-center justify-content-center rounded-circle" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <i class="bi bi-arrow-right"></i>
              </button>
            </div>

          </div>

        </div>

      </div>
    </div>

  </div><!-- /row -->

</div>