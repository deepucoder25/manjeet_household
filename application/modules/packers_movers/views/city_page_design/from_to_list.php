<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

// Only show on Indore and Bhopal pages, or if is_intercity is active
$show_intercity = (isset($city) && (strtolower($city) == 'indore' || strtolower($city) == 'bhopal' || isset($from_city)));

if ($show_intercity):
    $current_city = ucwords($city);
    $origin_city = isset($from_city) ? ucwords($from_city) : $current_city;
    
    // Define target cities
    $target_cities = [
        'Mumbai' => 'maharashtra',
        'Bangalore' => 'karnataka',
        'Pune' => 'maharashtra',
        'Delhi' => 'delhi',
        'Hyderabad' => 'telangana',
        'Ahmedabad' => 'gujarat',
        'Kolkata' => 'west-bengal',
        'Chennai' => 'tamil-nadu',
        'Jaipur' => 'rajasthan',
        'Raipur' => 'chhattisgarh'
    ];
    
    // Add Bhopal/Indore intercity connection
    if (strtolower($origin_city) == 'indore') {
        $target_cities = array_merge(['Bhopal' => 'madhya-pradesh'], $target_cities);
    } else {
        $target_cities = array_merge(['Indore' => 'madhya-pradesh'], $target_cities);
    }

    // Prepare target cities list
    $all_targets = array_keys($target_cities);
    $all_targets = array_filter($all_targets, function($v) use ($origin_city) {
        return strtolower($v) !== strtolower($origin_city);
    });
    $all_targets = array_values($all_targets);
?>

<div class="pm-intercity-card mt-5 p-4 rounded-4 border shadow-sm" id="intercityRoutesCard">
  
  <div class="pm-intercity-header mb-4 text-start">
    <span class="pm-intercity-badge mb-2">INTERCITY SERVICES</span>
    <h3 class="pm-intercity-title mt-2">Popular Shifting Services from <span class="pm-intercity-city-highlight"><?= $origin_city ?></span></h3>
    <p class="pm-intercity-desc text-muted mb-0">We provide safe, reliable, and premium packers and movers services from <?= $origin_city ?> to all major cities in India.</p>
  </div>
  
  <!-- Single Scrollable Container -->
  <div class="pm-intercity-scroll-container">
    <div class="pm-intercity-grid">
      <?php foreach ($all_targets as $target): 
          $from_slug = strtolower(str_replace(' ', '-', $origin_city));
          $to_slug = strtolower(str_replace(' ', '-', $target));
          $link_url = site_url("packers-and-movers-from-{$from_slug}-to-{$to_slug}");
      ?>
          <a href="<?= $link_url ?>" class="pm-intercity-route-card d-flex align-items-center gap-3 p-3 rounded-3 text-decoration-none" aria-label="Packers and Movers from <?= $origin_city ?> to <?= $target ?>">
              <div class="pm-route-icon-box rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-truck"></i>
              </div>
              <div class="pm-route-info text-start">
                  <strong class="pm-route-name">Packers &amp; Movers From <span style="color: var(--primary-red);"><?= $origin_city ?></span> To <?= $target ?></strong>
              </div>
              <i class="bi bi-chevron-right ms-auto pm-route-arrow"></i>
          </a>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<?php endif; ?>
