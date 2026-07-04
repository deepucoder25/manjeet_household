<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$steps = [
    [
        'number' => '01',
        'title' => 'Get in Touch',
        'desc' => 'Reach out to us via call, email or form. Share your moving details with our team.',
        'icon' => '<div class="d-flex align-items-center justify-content-center"><i class="bi bi-telephone-fill text-danger fs-3"></i><i class="bi bi-soundwave text-dark fs-4 ms-1"></i></div>'
    ],
    [
        'number' => '02',
        'title' => 'Receive a Free Quotation',
        'desc' => 'We analyze your relocation requirements and provide transparent and obligation-free quotations.',
        'icon' => '<div class="position-relative d-inline-block"><i class="bi bi-file-earmark text-dark fs-2"></i><span class="position-absolute start-50 top-50 translate-middle fw-bold text-danger" style="font-size: 13px; margin-top: 3px; margin-left: 0.5px;">₹</span></div>'
    ],
    [
        'number' => '03',
        'title' => 'Plan Your Move',
        'desc' => 'We schedule your move at a convenient time and plan every detail for a smooth experience.',
        'icon' => '<div class="position-relative d-inline-block"><i class="bi bi-calendar3 text-dark fs-2"></i><i class="bi bi-check-lg text-danger position-absolute start-50 top-50 translate-middle fw-bold" style="font-size: 18px; margin-top: 4px;"></i></div>'
    ],
    [
        'number' => '04',
        'title' => 'Packing & Loading',
        'desc' => 'Our professionals pack your belongings using quality packing materials and load them.',
        'icon' => '<div class="position-relative d-inline-block"><i class="bi bi-box-seam text-dark fs-2"></i></div>'
    ],
    [
        'number' => '05',
        'title' => 'Safe Transportation',
        'desc' => 'Transportation of your belongings happens through a planned route using suitable vehicles.',
        'icon' => '<div class="d-flex align-items-center justify-content-center position-relative"><span class="text-danger fw-bold lh-1 me-1" style="font-size: 16px; letter-spacing: -1.5px; margin-top: -2px;">=</span><i class="bi bi-truck text-dark fs-2"></i></div>'
    ],
    [
        'number' => '06',
        'title' => 'Delivery & Placement',
        'desc' => 'Unloading your items and placing them according to your instructions.',
        'icon' => '<div class="d-flex align-items-center justify-content-center"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7" stroke="var(--primary-red)" /><path d="M9 22V12h6v10M5 12v10h14V12" stroke="#1e293b" /></svg></div>'
    ]
];
?>

<section class="process-section-new py-5">
  <div class="container">

    <div class="services-header-new text-center mb-5">
      <div class="services-pill-badge d-inline-flex align-items-center gap-2 mb-3">
        <span class="pill-line"></span>
        <span class="pill-text text-danger fw-bold">OUR PROCESS</span>
        <span class="pill-line"></span>
      </div>
      <h2 class="services-main-title fw-bold text-dark">
        A SIMPLE PROCESS FOR <span class="text-danger">A SMOOTH MOVE</span>
      </h2>
      <p class="services-subtitle text-muted mx-auto mt-3">
        Please call us, WhatsApp or contact us via the website and tell us about your relocation requirements.
      </p>
    </div>

    <div class="row g-4 process-timeline-row position-relative mt-2 justify-content-center">
      <?php foreach ($steps as $step): ?>
        <div class="col-lg-2 col-md-6 col-6 d-flex process-step-col position-relative">
          <div class="process-step-wrap w-100 d-flex flex-column align-items-center text-center">

            <div class="process-circle-outer-wrap mb-4">
              <div class="process-circle-inner d-flex align-items-center justify-content-center">
                <?= $step['icon'] ?>
              </div>
              <div class="process-step-number-badge"><?= $step['number'] ?></div>
            </div>

            <div class="process-step-card flex-grow-1 p-4 w-100 d-flex flex-column align-items-center">
              <h5 class="process-step-title fw-bold text-dark mb-2"><?= $step['title'] ?></h5>
              <span class="process-step-line mb-3"></span>
              <p class="process-step-desc text-muted mb-0 small"><?= $step['desc'] ?></p>
            </div>

          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

