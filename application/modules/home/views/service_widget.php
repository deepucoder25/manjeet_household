<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$services = [
    [
        'number' => '01',
        'title' => 'Packing & Unpacking',
        'desc' => 'Premium multi-layer packing using high-quality bubble wraps and sturdy cartons to protect your delicate belongings during transit.',
        'link' => 'our-services',
        'image' => 'packing.jpg'
    ],
    [
        'number' => '02',
        'title' => 'Loading & Unloading',
        'desc' => 'Careful and structured handling of heavy goods, household items, and appliances by our trained experts to ensure zero damage.',
        'link' => 'our-services',
        'image' => 'loading.jpg'
    ],
    [
        'number' => '03',
        'title' => 'Household Shifting',
        'desc' => 'Safe, seamless, and stress-free home relocation solutions across India with complete loading, transport, and unloading support.',
        'link' => 'home-shifting',
        'image' => 'household.jpg'
    ],
    [
        'number' => '04',
        'title' => 'Office Relocation',
        'desc' => 'Efficient corporate shifting services tailored to minimize downtime, handling office furniture, servers, and sensitive documents with care.',
        'link' => 'office-relocation',
        'image' => 'office.jpg'
    ],
    [
        'number' => '05',
        'title' => 'Industrial Shifting',
        'desc' => 'Specialized moving services for heavy machinery, manufacturing equipment, and industrial raw materials with highly secure logistics.',
        'link' => 'corporate-shifting',
        'image' => 'industrial.jpg'
    ],
    [
        'number' => '06',
        'title' => 'Car Transportation',
        'desc' => 'Secure vehicle moving services across India using specialized closed car carriers and trailers to protect your car or bike.',
        'link' => 'car-transportation',
        'image' => 'car.jpg'
    ]
];
?>

<section class="services-section-new py-5">
  <div class="container">

    <div class="services-header-new text-center mb-5">
      <div class="services-pill-badge d-inline-flex align-items-center gap-2 mb-3">
        <span class="pill-line"></span>
        <i class="bi bi-box-seam text-danger"></i>
        <span class="pill-text text-danger fw-bold">OUR SERVICES</span>
        <span class="pill-line"></span>
      </div>
      <h2 class="services-main-title fw-bold text-dark">
        MOVING SOLUTIONS <span class="text-danger">THAT YOU CAN TRUST</span>
      </h2>
      <p class="services-subtitle text-muted mx-auto mt-3">
        From packing to delivery, we offer a complete range of moving and logistics services to make your relocation smooth and worry-free.
      </p>
    </div>

    <div class="row g-4 row-cols-2 row-cols-md-2 row-cols-lg-3 services-grid-new">
      <?php foreach ($services as $service): ?>
        <div class="col d-flex">
          <a href="<?= site_url($service['link']) ?>" class="service-card-wrap w-100 position-relative d-flex align-items-center text-decoration-none">

            <div class="service-img-circle-wrap">
              <div class="service-img-circle-inner">
                <img src="<?= base_url('assets/images/home_modules/' . $service['image']) ?>" alt="<?= $service['title'] ?>" class="service-circle-img" loading="lazy">
              </div>
            </div>

            <div class="service-card-box-new w-100">
              <div class="service-card-header d-flex align-items-center gap-2 mb-2">
                <span class="service-number-badge"><?= $service['number'] ?></span>
                <h5 class="service-card-title fw-bold m-0"><?= $service['title'] ?></h5>
              </div>
              <p class="service-card-desc text-muted mb-0"><?= $service['desc'] ?></p>
            </div>

          </a>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="cta-banner-card-new mt-5 position-relative">
      <div class="row g-0 align-items-stretch">
        <div class="col-lg-5 col-12 cta-left-side p-4 d-flex align-items-center">
          <div class="d-flex align-items-center gap-3">
            <div class="cta-icon-circle rounded-circle d-flex align-items-center justify-content-center bg-white text-danger">
              <i class="bi bi-telephone-fill fs-4"></i>
            </div>
            <div class="cta-text-wrap text-white">
              <h4 class="cta-title fw-bold mb-1">Need Help With Your Move?</h4>
              <p class="cta-subtitle mb-0 small opacity-90">Call us anytime for a free consultation.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-12 cta-right-side p-4 d-flex flex-wrap align-items-center justify-content-between position-relative">
          <div class="row g-3 align-items-start py-2 flex-grow-1">
            <div class="col-6">
              <div class="cta-phone-callout">
                <span class="cta-phone-label text-muted d-block small fw-bold">INDORE OFFICE</span>
                <a href="<?= $indore_phonehtml ?>" class="cta-phone-number fw-bold text-dark text-decoration-none d-block">
                  <?= $indore_phone ?>
                </a>
                <a href="<?= $indore_phonehtml1 ?>" class="cta-phone-number fw-bold text-dark text-decoration-none d-block">
                  <?= $indore_phone1 ?>
                </a>
              </div>
            </div>
            <div class="col-6">
              <div class="cta-phone-callout">
                <span class="cta-phone-label text-muted d-block small fw-bold">BHOPAL OFFICE</span>
                <a href="<?= $bhopal_phonehtml ?>" class="cta-phone-number fw-bold text-dark text-decoration-none d-block">
                  <?= $bhopal_phone ?>
                </a>
              </div>
            </div>
          </div>
          <div class="cta-btn-wrap py-2 z-index-2">
            <a href="#" class="btn btn-danger cta-action-btn d-inline-flex align-items-center gap-2 px-4 py-2" data-bs-toggle="modal" data-bs-target="#qteModal">
              <span>Get Free Quote</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

