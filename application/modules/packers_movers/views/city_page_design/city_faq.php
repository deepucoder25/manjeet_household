<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
$faqs = [
  ["q" => "What is the cost of hiring packers and movers in $city?",
   "a" => "₹3,500 is the starting point for local moving, based on the amount of goods to be moved, distance, manpower, and vehicle used."],
  ["q" => "Which vehicle will carry the household goods?",
   "a" => "For small shifts, the vehicle is either Tata Ace or pickup and for bigger consignment, the vehicle is a covered container truck using suitable highway routes."],
  ["q" => "Are there separate packers for the fragile articles?",
   "a" => "Glass items, electronic items, mirrors, and ornaments will have separate packing."],
  ["q" => "Do you maintain hygiene while packing the cargo?",
   "a" => "Yes, we use clean packing material and maintain cleanliness throughout the whole relocation process."],
];
?>

<!-- FAQ Standalone Container -->
<div class="container my-5 pm-faq-bootstrap-container">
  <div class="pm-city-faqs-card bg-white rounded-4 p-4 p-md-5 border border-light shadow-sm">
    
    <!-- Header -->
    <div class="pm-faq-header text-center mb-5">
      <span class="pm-faq-badge">— FAQS —</span>
      <h2 class="pm-faq-title fw-bold mt-2">
        FREQUENTLY ASKED <span class="text-danger">QUESTIONS</span>
      </h2>
      <p class="text-muted col-lg-7 mx-auto mb-0">
        Find answers to common questions about our moving services, process, and policies in <?= htmlspecialchars($city) ?>.
      </p>
    </div>

    <!-- Content split row -->
    <div class="row align-items-start">
      
      <!-- Left help card -->
      <div class="col-lg-4">
        <div class="pm-faq-help-card rounded-4 p-4 text-center bg-white border shadow-sm">
          <div class="pm-faq-help-icon mb-3 mx-auto d-flex align-items-center justify-content-center rounded-circle">
            <i class="bi bi-question-circle"></i>
          </div>
          <h4 class="fw-bold mb-2 text-dark">Still Have Questions?</h4>
          <p class="text-danger fw-bold mb-3">We're Here to Help!</p>
          <div class="pm-faq-card-divider mx-auto my-3"></div>
          <p class="text-muted small mb-4">Our support team is ready to assist you with any relocation queries you may have.</p>
          <div class="d-flex flex-column gap-3 pm-faq-phone-list">
            <!-- Bhopal Phone -->
            <?php if (!empty($bhopal_phone)): ?>
              <a href="<?= $bhopal_phonehtml ?>" class="btn btn-danger py-2 rounded-3 text-white fw-bold d-flex flex-column align-items-center justify-content-center pm-faq-call-btn pm-faq-item-button-border-none">
                <small class="text-white-50 mb-1 pm-faq-call-btn-label">Bhopal Office</small>
                <span class="pm-faq-call-btn-phone"><?= $bhopal_phone ?></span>
              </a>
            <?php endif; ?>

            <!-- Indore Phone -->
            <?php if (!empty($indore_phone)): ?>
              <a href="<?= $indore_phonehtml ?>" class="btn btn-danger py-2 rounded-3 text-white fw-bold d-flex flex-column align-items-center justify-content-center pm-faq-call-btn pm-faq-item-button-border-none">
                <small class="text-white-50 mb-1 pm-faq-call-btn-label">Indore Office</small>
                <span class="pm-faq-call-btn-phone"><?= $indore_phone ?></span>
              </a>
            <?php endif; ?>

            <!-- Indore Support -->
            <?php if (!empty($indore_phone1)): ?>
              <a href="<?= $indore_phonehtml1 ?>" class="btn btn-danger py-2 rounded-3 text-white fw-bold d-flex flex-column align-items-center justify-content-center pm-faq-call-btn pm-faq-item-button-border-none">
                <small class="text-white-50 mb-1 pm-faq-call-btn-label">Indore Support</small>
                <span class="pm-faq-call-btn-phone"><?= $indore_phone1 ?></span>
              </a>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <!-- Right accordion list -->
      <div class="col-lg-8">
        <div class="accordion pm-faq-accordion" id="cityFaqAccordion">
          <?php foreach ($faqs as $i => $faq): ?>
            <div class="pm-faq-item mb-3 bg-white rounded-3 shadow-sm border border-light">
              <button class="pm-faq-btn w-100 text-start d-flex align-items-center justify-content-between p-3 border-0 bg-transparent <?= $i === 0 ? '' : 'collapsed' ?>" 
                      type="button" 
                      data-bs-toggle="collapse" 
                      data-bs-target="#cfaq<?= $i ?>" 
                      aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>">
                <div class="d-flex align-items-center gap-3">
                  <span class="pm-faq-number fw-bold text-danger pm-faq-number-font-sz"><?= sprintf("%02d", $i + 1) ?></span>
                  <span class="pm-faq-divider pm-faq-item-divider"></span>
                  <span class="pm-faq-question fw-bold text-dark pm-faq-question-font-sz"><?= htmlspecialchars($faq['q']) ?></span>
                </div>
                <div class="pm-faq-arrow-icon">
                  <i class="bi bi-chevron-down"></i>
                </div>
              </button>
              <div id="cfaq<?= $i ?>" class="collapse <?= $i === 0 ? 'show' : '' ?>" data-bs-parent="#cityFaqAccordion">
                <div class="pm-faq-body p-3 pt-0 text-muted pm-faq-body-padding-override">
                  <?= htmlspecialchars($faq['a']) ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div><!-- /row -->

    <!-- Bottom trust bar -->
    <div class="pm-faq-trust-bar row mt-5 pt-4 border-top text-center justify-content-center">
      <div class="col-6 col-md-4 col-lg-2-4">
        <div class="pm-faq-trust-item">
          <i class="bi bi-shield-fill-check text-danger mb-2 fs-4"></i>
          <h5 class="fw-bold fs-6 mb-1 text-dark">Safe & Secure</h5>
          <p class="text-muted small mb-0">We handle your belongings with utmost care.</p>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-2-4">
        <div class="pm-faq-trust-item">
          <i class="bi bi-clock-fill text-danger mb-2 fs-4"></i>
          <h5 class="fw-bold fs-6 mb-1 text-dark">On-Time Delivery</h5>
          <p class="text-muted small mb-0">We value your time and deliver on schedule.</p>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-2-4">
        <div class="pm-faq-trust-item">
          <i class="bi bi-box-seam-fill text-danger mb-2 fs-4"></i>
          <h5 class="fw-bold fs-6 mb-1 text-dark">Quality Packing</h5>
          <p class="text-muted small mb-0">We use premium durable materials.</p>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-2-4">
        <div class="pm-faq-trust-item">
          <i class="bi bi-globe text-danger mb-2 fs-4"></i>
          <h5 class="fw-bold fs-6 mb-1 text-dark">Pan India Service</h5>
          <p class="text-muted small mb-0">Nationwide presence, local expertise.</p>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-2-4">
        <div class="pm-faq-trust-item">
          <i class="bi bi-headset text-danger mb-2 fs-4"></i>
          <h5 class="fw-bold fs-6 mb-1 text-dark">24/7 Support</h5>
          <p class="text-muted small mb-0">We are always available whenever you need.</p>
        </div>
      </div>
    </div>

  </div>
</div>