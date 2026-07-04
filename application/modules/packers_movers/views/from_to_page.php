<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

$origin = htmlspecialchars($from_city);
$destination = htmlspecialchars($city);
$company = htmlspecialchars($company3);
?>

<?php 
$this->load->view('template/breadcrumb', array(
    'breadcrumb_title' => "Packers and Movers From $origin to $destination",
    'breadcrumb_icon' => 'bi-truck',
    'breadcrumb_parent_name' => $origin,
    'breadcrumb_parent_url' => site_url(strtolower(str_replace(' ', '-', $origin)) . '-packers-movers-madhya-pradesh'),
    'breadcrumb_current' => "From $origin to $destination"
)); 
?>

<!-- Main Page Body -->
<section class="pm-ft-main-section">
  <div class="container">
    <div class="row g-4">
      
      <!-- Left Content Column -->
      <div class="col-lg-8">
        <div class="pm-ft-card pm-ft-body">
          
          <h2 class="pm-ft-heading">Premium Relocation Services from <?= $origin ?> to <?= $destination ?></h2>
          <p>Are you planning a relocation from <?= $origin ?> to <?= $destination ?>? <strong><?= $company ?></strong> is a trusted and certified name in the packing and moving industry, offering professional long-distance relocation solutions. We specialize in household shifting, office relocation, vehicle transportation, and storage services tailored to suit your timeline and budget.</p>
          
          <p>Long-distance moves require expertise, careful planning, and reliable transport carriers. Our experienced crew takes complete responsibility of your valuables, ensuring they are packed with high-quality packing materials and transported safely to <?= $destination ?> without any hassle.</p>

          <h3 class="pm-ft-heading mt-5">Our Specialized Intercity Services</h3>
          <div class="pm-ft-features-grid">
            <div class="pm-ft-feature-item">
              <div class="pm-ft-feature-icon d-flex align-items-center justify-content-center">
                <i class="bi bi-house-door"></i>
              </div>
              <h4 class="pm-ft-feature-title">Household Goods Shifting</h4>
              <p class="pm-ft-feature-desc">Complete home shifting using 3-layer premium packing, bubble wraps, and heavy-duty cartons for maximum safety.</p>
            </div>
            
            <div class="pm-ft-feature-item">
              <div class="pm-ft-feature-icon d-flex align-items-center justify-content-center">
                <i class="bi bi-truck-flatbed"></i>
              </div>
              <h4 class="pm-ft-feature-title">Car & Bike Transportation</h4>
              <p class="pm-ft-feature-desc">Safe transit of your two-wheelers and cars in specialized closed vehicle containers with real-time updates.</p>
            </div>
            
            <div class="pm-ft-feature-item">
              <div class="pm-ft-feature-icon d-flex align-items-center justify-content-center">
                <i class="bi bi-briefcase"></i>
              </div>
              <h4 class="pm-ft-feature-title">Office & Commercial Shifting</h4>
              <p class="pm-ft-feature-desc">Secure packing and transit of corporate computers, archives, and furniture with minimal operational downtime.</p>
            </div>
            
            <div class="pm-ft-feature-item">
              <div class="pm-ft-feature-icon d-flex align-items-center justify-content-center">
                <i class="bi bi-shield-check"></i>
              </div>
              <h4 class="pm-ft-feature-title">Transit Goods Insurance</h4>
              <p class="pm-ft-feature-desc">Comprehensive transit insurance coverage options to ensure complete peace of mind during long-distance transits.</p>
            </div>
          </div>

          <h3 class="pm-ft-heading mt-5">Why Choose <?= $company ?>?</h3>
          <ul class="pm-ft-checklist mt-3">
            <li><strong>Verified Professionals:</strong> Fully licensed and background-verified packing and moving team.</li>
            <li><strong>Premium Packing:</strong> 3-Layer bubble wrap, custom crates for glasswares, and robust cartons.</li>
            <li><strong>Transparent Pricing:</strong> No hidden costs, upfront honest quotations for <?= $origin ?> to <?= $destination ?> routes.</li>
            <li><strong>Safe Carrier Fleet:</strong> Closed-body trucks and container carriers to protect against rain, dust, and transit damages.</li>
            <li><strong>24/7 Support:</strong> Round-the-clock updates and customer support during transit.</li>
          </ul>

          <h3 class="pm-ft-heading mt-5">Our Systematic Shifting Process</h3>
          <div class="pm-ft-timeline">
            <div class="pm-ft-timeline-step">
              <span class="pm-ft-timeline-node"></span>
              <h5 class="pm-ft-timeline-title">1. Quote & Survey</h5>
              <p class="pm-ft-timeline-desc">Submit your moving details. We provide a quick phone estimation or virtual video survey to determine exact cargo volume.</p>
            </div>
            <div class="pm-ft-timeline-step">
              <span class="pm-ft-timeline-node"></span>
              <h5 class="pm-ft-timeline-title">2. Safe 3-Layer Packing</h5>
              <p class="pm-ft-timeline-desc">On moving day, our team wraps all fragile products, electronics, and furniture at your origin in <?= $origin ?> using premium multi-layer wraps.</p>
            </div>
            <div class="pm-ft-timeline-step">
              <span class="pm-ft-timeline-node"></span>
              <h5 class="pm-ft-timeline-title">3. Secure Loading & Transit</h5>
              <p class="pm-ft-timeline-desc">Goods are systematically loaded into GPS-enabled closed-body container trucks and dispatched safely via major national highways.</p>
            </div>
            <div class="pm-ft-timeline-step">
              <span class="pm-ft-timeline-node"></span>
              <h5 class="pm-ft-timeline-title">4. Delivery at <?= $destination ?></h5>
              <p class="pm-ft-timeline-desc">We reach your new doorstep in <?= $destination ?> to perform unload, unpack, and place the household goods as per your instructions.</p>
            </div>
          </div>

          <h3 class="pm-ft-heading mt-5">Frequently Asked Questions</h3>
          <div class="pm-ft-faq-container">
            
            <div class="pm-ft-faq-item">
              <button class="pm-ft-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                How much does it cost to shift household goods from <?= $origin ?> to <?= $destination ?>?
                <i class="bi bi-chevron-down"></i>
              </button>
              <div id="faq1" class="collapse" data-bs-parent=".pm-ft-faq-container">
                <div class="pm-ft-faq-answer">
                  The shifting cost depends on various factors such as the total volume of goods, the type of carrier selected (shared vs. dedicated truck), loading floor heights, and the actual distance from <?= $origin ?> to <?= $destination ?>. Please request a free quote to get an exact custom price.
                </div>
              </div>
            </div>

            <div class="pm-ft-faq-item">
              <button class="pm-ft-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                How many days will it take to transport items from <?= $origin ?> to <?= $destination ?>?
                <i class="bi bi-chevron-down"></i>
              </button>
              <div id="faq2" class="collapse" data-bs-parent=".pm-ft-faq-container">
                <div class="pm-ft-faq-answer">
                  Typically, long-distance intercity transits take around 3 to 6 business days depending on road conditions and exact distance. We ensure timely dispatch and keep you updated throughout the journey.
                </div>
              </div>
            </div>

            <div class="pm-ft-faq-item">
              <button class="pm-ft-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                Do you provide insurance on household goods during transit?
                <i class="bi bi-chevron-down"></i>
              </button>
              <div id="faq3" class="collapse" data-bs-parent=".pm-ft-faq-container">
                <div class="pm-ft-faq-answer">
                  Yes, we offer comprehensive transit insurance cover for household shifting, vehicle transport, and high-value cargo to protect your assets against unexpected accidental damages.
                </div>
              </div>
            </div>
            
          </div>
          
          <!-- Intercity From-To Routes Widget -->
          <?php include 'city_page_design/from_to_list.php'; ?>

        </div>
      </div>
      
      <!-- Right Sidebar Column -->
      <div class="col-lg-4">
        <div class="pm-ft-sidebar">
          
          <!-- Quote Form Widget -->
            <?php $this->load->view('contacts/quoteform.php'); ?>
          
          <!-- Contact Details Widget -->
          <div class="pm-ft-sidebar-widget pm-ft-cta-box text-start">
            <h4 class="widget-title">Need Immediate Help?</h4>
            <p class="text-white-50 small mb-4">Feel free to contact our branch office representatives for immediate pricing, tracking, and customized relocation solutions.</p>
            
            <div class="d-flex flex-column gap-3">
              <a href="<?= $indore_phonehtml ?>" class="pm-ft-phone-btn">
                <i class="bi bi-telephone-fill"></i> Indore Office: <?= $indore_phone ?>
              </a>
              <a href="<?= $indore_phonehtml1 ?>" class="pm-ft-phone-btn">
                <i class="bi bi-telephone-fill"></i> Indore Support: <?= $indore_phone1 ?>
              </a>
              <a href="<?= $bhopal_phonehtml ?>" class="pm-ft-phone-btn">
                <i class="bi bi-telephone-fill"></i> Bhopal Office: <?= $bhopal_phone ?>
              </a>
            </div>
          </div>
          
          <!-- Trust Badge Widget -->
          <div class="pm-ft-sidebar-widget text-start">
            <h4 class="widget-title">Reliable Relocation</h4>
            <div class="d-flex flex-column gap-3">
              <div class="d-flex align-items-start gap-3">
                <i class="bi bi-patch-check-fill text-danger fs-4"></i>
                <div>
                  <h6 class="fw-bold mb-1">ISO 9001:2015 Certified</h6>
                  <small class="text-muted">International standards for high-quality packaging and moving services.</small>
                </div>
              </div>
              <div class="d-flex align-items-start gap-3">
                <i class="bi bi-shield-fill-check text-danger fs-4"></i>
                <div>
                  <h6 class="fw-bold mb-1">Secure GPS Tracking</h6>
                  <small class="text-muted">Real-time tracking of container fleets on national highways.</small>
                </div>
              </div>
              <div class="d-flex align-items-start gap-3">
                <i class="bi bi-award-fill text-danger fs-4"></i>
                <div>
                  <h6 class="fw-bold mb-1">100% Satisfaction</h6>
                  <small class="text-muted">Over 10,000+ happy domestic relocation stories delivered safely.</small>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      
    </div>
  </div>
</section>
