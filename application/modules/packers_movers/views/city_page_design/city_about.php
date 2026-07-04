<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
include 'city_content.php';
include 'city_map_content.php';
?>

<section class="pm-city-details-section py-5">
  <div class="container">
    
    <!-- About Row 1: Layered Image Card & Creative Content -->
    <div class="row align-items-center mb-5 pb-lg-4">
      
      <div class="col-lg-6">
        <div class="pm-about-layered-wrapper position-relative px-3 py-3">
          <div class="pm-about-layered-border position-absolute rounded-4"></div>
          <div class="pm-city-about-img-frame position-relative overflow-hidden rounded-4 shadow-sm bg-white">
            <img loading="lazy" src="<?= base_url('assets/images/home_modules/industrial.jpg') ?>" class="w-100 h-100 object-fit-cover d-block" alt="<?= $company3 ?>">
          </div>
          <div class="pm-about-floating-badge bg-white rounded-3 shadow-sm p-3 d-flex align-items-center gap-3 position-absolute">
            <span class="pm-badge-dot-live d-flex align-items-center justify-content-center rounded-circle"><span class="pm-dot-pulse"></span></span>
            <div>
              <small class="text-muted d-block uppercase-text fw-bold pm-badge-label">Local Status</small>
              <strong class="text-dark pm-badge-val">Active Shifting Crew</strong>
            </div>
          </div>
        </div>
      </div>

      <!-- Creative Content Column -->
      <div class="col-lg-6">
        <div class="pm-city-about-content">
          <span class="pm-city-accent-label fw-bold text-danger mb-2 d-block">— EXPERT RELOCATION —</span>
          <h2 class="pm-city-section-title mb-3">Professional Relocation Services in <?= $city ?></h2>
          <div class="pm-city-accent-bar mb-4"></div>
          
          <div class="pm-city-prose mb-4">
            <?= $htmlcontent ?>
          </div>

        </div>
      </div>
      <div class="col-12">
        <?= $htmlcontent1 ?>
      </div>
    </div>

    <!-- About Row 2: Injected via city_map.php -->
    <?php include 'city_map.php'; ?>

    <!-- About Row 3: Intercity Routes list -->
    <?php include 'from_to_list.php'; ?>
  </div>

  <!-- Process Steps -->
  <?php include 'city_process.php'; ?>

  <!-- Testimonials Slide Row -->
  <?php include 'city_reviews.php'; ?>

  <!-- FAQ Accordion Row -->
  <?php include 'city_faq.php'; ?>

  <!-- Shifting Help CTA Banner Wrapper -->
  <div class="container">
    <div class="pm-city-help-banner text-white rounded-4 p-4 p-md-5 mb-5 shadow-sm text-center position-relative overflow-hidden mt-5">
      <i class="bi bi-headset position-absolute pm-banner-watermark-icon"></i>
      <h3 class="fw-bold mt-2">Need Professional Shifting Assistance in <?= htmlspecialchars($city) ?>?</h3>
      <p class="text-white-50 col-lg-6 mx-auto mb-4">Get a free consultation from our local relocation experts. We are available 24/7 to plan your move.</p>
      <div class="d-flex flex-wrap justify-content-center gap-3">
        <a href="<?= $indore_phonehtml ?>" class="btn btn-warning px-4 py-2 fw-bold text-dark rounded-pill pm-banner-btn-call">
          <i class="bi bi-telephone-fill me-2"></i> Indore Office: <?= htmlspecialchars($indore_phone) ?>
        </a>
        <a href="<?= $indore_phonehtml1 ?>" class="btn btn-warning px-4 py-2 fw-bold text-dark rounded-pill pm-banner-btn-call">
          <i class="bi bi-telephone-fill me-2"></i> Indore Support: <?= htmlspecialchars($indore_phone1) ?>
        </a>
        <a href="<?= $bhopal_phonehtml ?>" class="btn btn-warning px-4 py-2 fw-bold text-dark rounded-pill pm-banner-btn-call">
          <i class="bi bi-telephone-fill me-2"></i> Bhopal Office: <?= htmlspecialchars($bhopal_phone) ?>
        </a>
      </div>
    </div>
  </div>
</section>
