<main class="main pm-error-page">
  <?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => '404 Error', 'breadcrumb_icon' => 'bi-exclamation-triangle-fill')); ?>

  <section class="error_section py-5 text-center bg-light">
    <div class="container">
      <div class="pm-error-container col-md-8 col-lg-6 mx-auto bg-white p-5 rounded-4 shadow-sm">
        
        <div class="pm-error-gfx mb-4">
          <div class="pm-error-number">404</div>
          <div class="pm-error-icon-wrap">
             <i class="bi bi-box-seam-fill pm-error-box-icon"></i>
          </div>
        </div>

        <div class="error_content">
          <h2 class="fw-bold mb-3 text-dark">Page Not Found</h2>
          <p class="text-muted mb-4 lead fs-6">
            The page you are looking for might have been removed, had its name changed, or is temporarily unavailable. Let's get you back on track!
          </p>
          <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="<?= site_url() ?>" class="btn pm-error-home-btn px-4 py-2 rounded-pill font-weight-bold">
              <i class="bi bi-house-door-fill me-2"></i> Go Back To Home
            </a>
            <a href="<?= site_url('contact-us') ?>" class="btn pm-error-contact-btn px-4 py-2 rounded-pill font-weight-bold">
              <i class="bi bi-envelope-fill me-2"></i> Contact Support
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>
</main>