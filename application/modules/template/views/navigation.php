<body>
  <?php
  $megaWhatsappLink = !empty($whatsapphtml) ? $whatsapphtml : '#';

  $ci =& get_instance();
  $class = strtolower($ci->router->fetch_class());
  $method = strtolower($ci->router->fetch_method());
  $segment1 = $ci->uri->segment(1);

  // Determine active tab
  $active_tab = '';
  if (empty($segment1) || $segment1 === 'home' || $class === 'home') {
      $active_tab = 'home';
  } elseif ($class === 'about' || in_array($segment1, ['about-us', 'why-choose-us', 'faqs', 'testimonials'])) {
      $active_tab = 'about';
  } elseif ($class === 'services' || in_array($segment1, ['our-services', 'home-shifting', 'office-relocation', 'car-transportation', 'bike-transportation', 'warehouse-and-storage', 'domestic-relocation', 'international-shifting', 'corporate-shifting', 'intercity-shifting', 'local-shifting', 'logistic-services', 'pet-relocation', 'home-relocation', 'storage-services', 'car-transportation-service'])) {
      $active_tab = 'services';
  } elseif ($class === 'packers_movers' || $segment1 === 'our-branches') {
      $active_tab = 'locations';
  } elseif ($class === 'blog' || $segment1 === 'blog') {
      $active_tab = 'blog';
  } elseif ($class === 'contacts' || $segment1 === 'contact-us') {
      $active_tab = 'contact';
  }
  ?>

  <?php
  $is_home = (empty($segment1) || $segment1 === 'home' || $class === 'home');
  ?>

  <!-- Main Sticky Header -->
  <header class="main-header <?= $is_home ? 'header-on-slider' : '' ?>" id="mainHeader">
    <div class="container d-flex align-items-center justify-content-between">
      <!-- Brand Logo -->
      <a href="<?= site_url() ?>" class="brand-wrap">
        <img src="<?= base_url() ?>assets/images/logo/logo.png" alt="<?= $company3 ?> Packers and Movers" class="brand-logo" loading="lazy">
      </a>

      <!-- Header Action Buttons -->
      <div class="d-flex align-items-center gap-2 gap-sm-3">
        <!-- Call Us Anytime (Hidden as per desktop layout requirement) -->
        <div class="header-phone-callout d-none align-items-center gap-2">
          <div class="header-phone-icon">
            <i class="bi bi-telephone-fill"></i>
          </div>
          <div class="header-phone-text">
            <span>Call Us Anytime</span>
            <a href="tel:<?= !empty($indore_phonehtml) ? str_replace('tel:', '', $indore_phonehtml) : '+919893701992' ?>">
              <?= !empty($indore_phone) ? $indore_phone : '+91 98937 01992' ?>
            </a>
          </div>
        </div>

        <!-- Get a Quote Button (Visible on both desktop & mobile) -->
        <a href="#" class="btn-quote d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal">
          <i class="bi bi-file-earmark-text d-none d-sm-inline-block"></i>
          <span>Get a Quote</span>
        </a>

        <!-- Hamburger for Mobile & Desktop -->
        <button class="hamburger d-flex" id="openMenu" aria-label="Open navigation menu">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </header>

  <!-- Full Screen Mega Menu (overlay menu when clicking hamburger) -->
  <nav class="mega-overlay" id="megaMenu" aria-label="Main navigation">
    <div class="mega-modal-card container-fluid">
      <button class="mega-close" id="closeMenu" aria-label="Close navigation menu">
        <i class="bi bi-x"></i>
      </button>

      <div class="row w-100 g-0">
        <!-- Column 1: Leftmost Sidebar -->
        <aside class="col-12 col-lg-3 mega-sidebar">
          <!-- Logo -->
          <a href="<?= site_url() ?>" class="sidebar-logo-wrap">
            <img src="<?= base_url() ?>assets/images/logo/logo.png" alt="<?= !empty($company3) ? $company3 : 'Manjeet Packers' ?> Logo" class="sidebar-logo" loading="lazy">
          </a>
          <p class="sidebar-tagline">Safe. Secure. On Time. Every Time.</p>
          <hr class="sidebar-divider">
          <p class="sidebar-description">
            Reliable packing, moving and logistics solutions for homes, offices & industries across India.
          </p>

          <!-- Sidebar Contact Numbers -->
          <div class="sidebar-stats row g-3">
            <div class="col-6 col-md-4 col-lg-12">
              <div class="sidebar-stat-item">
                <div class="sidebar-stat-icon"><i class="bi bi-telephone"></i></div>
                <div class="sidebar-stat-text">
                  <strong>Indore Office</strong>
                  <a href="<?= $indore_phonehtml ?>" class="sidebar-phone-link">
                    <?= $indore_phone ?>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-12">
              <div class="sidebar-stat-item">
                <div class="sidebar-stat-icon"><i class="bi bi-telephone-plus"></i></div>
                <div class="sidebar-stat-text">
                  <strong>Indore Support</strong>
                  <a href="<?= $indore_phonehtml1 ?>" class="sidebar-phone-link">
                    <?= $indore_phone1 ?>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 col-lg-12">
              <div class="sidebar-stat-item">
                <div class="sidebar-stat-icon"><i class="bi bi-telephone"></i></div>
                <div class="sidebar-stat-text">
                  <strong>Bhopal Office</strong>
                  <a href="<?= $bhopal_phonehtml ?>" class="sidebar-phone-link">
                    <?= $bhopal_phone ?>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Sidebar Footer -->
          <div class="sidebar-footer">
            <strong>ISO 9001:2015 Certified</strong>
            <span>Door To Door Delivery</span>
            <i class="bi bi-patch-check map-faint-bg"></i>
          </div>
        </aside>

        <!-- Column 2: COMPANY -->
        <div class="col-6 col-lg-3 mega-column">
          <div class="mega-column-title">
            <i class="bi bi-building"></i>
            <span>COMPANY</span>
          </div>
          <ul class="mega-links-list">
            <li><a href="<?= site_url('about-us') ?>"><i class="bi bi-person"></i> About Us</a></li>
            <li><a href="<?= site_url('our-branches') ?>"><i class="bi bi-geo-alt"></i> Our Cities</a></li>
            <li><a href="<?= site_url('testimonials') ?>"><i class="bi bi-chat-left-quote"></i> Testimonials</a></li>
            <li><a href="<?= site_url('blog') ?>"><i class="bi bi-file-earmark-text"></i> Blog</a></li>
            <li><a href="<?= site_url('reviews') ?>"><i class="bi bi-chat-left-heart"></i> Reviews</a></li>
            <li><a href="<?= site_url('contact-us') ?>"><i class="bi bi-telephone"></i> Contact Us</a></li>
          </ul>
        </div>

        <!-- Column 3: SERVICES -->
        <div class="col-6 col-lg-3 mega-column">
          <div class="mega-column-title">
            <i class="bi bi-truck"></i>
            <span>SERVICES</span>
          </div>
          <ul class="mega-links-list">
            <li><a href="<?= site_url('our-services') ?>"><i class="bi bi-box"></i> Packing &amp; Unpacking</a></li>
            <li><a href="<?= site_url('our-services') ?>"><i class="bi bi-arrow-down-up"></i> Loading &amp; Unloading</a></li>
            <li><a href="<?= site_url('home-shifting') ?>"><i class="bi bi-house"></i> Household Shifting</a></li>
            <li><a href="<?= site_url('office-relocation') ?>"><i class="bi bi-building"></i> Office Shifting</a></li>
            <li><a href="<?= site_url('corporate-shifting') ?>"><i class="bi bi-briefcase"></i> Industrial Shifting</a></li>
            <li><a href="<?= site_url('home-shifting') ?>"><i class="bi bi-geo-alt"></i> Local Shifting</a></li>
            <li><a href="<?= site_url('car-transportation') ?>"><i class="bi bi-car-front"></i> Car Transportation</a></li>
            <li><a href="<?= site_url('domestic-relocation') ?>"><i class="bi bi-shield-check"></i> General Insurance</a></li>
          </ul>
        </div>

        <!-- Column 4: SUPPORT & TOOLS -->
        <div class="col-6 col-lg-3 mega-column">
          <div class="mega-column-title">
            <i class="bi bi-headset"></i>
            <span>SUPPORT &amp; TOOLS</span>
          </div>
          <ul class="mega-links-list">
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#qteModal"><i class="bi bi-file-earmark-medical"></i> Get a Free Quote</a></li>
            <li><a href="<?= site_url('faqs') ?>"><i class="bi bi-lightbulb"></i> Moving Tips</a></li>
            <li><a href="<?= site_url('faqs') ?>"><i class="bi bi-question-circle"></i> FAQ's</a></li>
            <li><a href="<?= site_url('terms-and-conditions') ?>"><i class="bi bi-file-earmark-ruled"></i> Terms &amp; Conditions</a></li>
            <li><a href="<?= site_url('privacy-policy') ?>"><i class="bi bi-shield-lock"></i> Privacy Policy</a></li>
          </ul>
        </div>
      </div>


      </div>
    </div>
  </nav>

  <script>
    const openMenu = document.getElementById('openMenu');
    const closeMenu = document.getElementById('closeMenu');
    const megaMenu = document.getElementById('megaMenu');
    const body = document.body;
    const mainHeader = document.getElementById('mainHeader');

    openMenu.addEventListener('click', () => {
      megaMenu.classList.add('active');
      body.classList.add('menu-open');
    });

    closeMenu.addEventListener('click', () => {
      megaMenu.classList.remove('active');
      body.classList.remove('menu-open');
    });

    // Close overlay when clicking elements triggering modals (e.g. Get a Quote)
    megaMenu.querySelectorAll('[data-bs-toggle="modal"]').forEach(btn => {
      btn.addEventListener('click', () => {
        megaMenu.classList.remove('active');
        body.classList.remove('menu-open');
      });
    });

    // Close menu when clicking on backdrop overlay
    megaMenu.addEventListener('click', (e) => {
      if (e.target === megaMenu) {
        megaMenu.classList.remove('active');
        body.classList.remove('menu-open');
      }
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        megaMenu.classList.remove('active');
        body.classList.remove('menu-open');
      }
    });

    window.addEventListener('scroll', () => {
      mainHeader.classList.toggle('scrolled', window.scrollY > 20);
    });
  </script>
