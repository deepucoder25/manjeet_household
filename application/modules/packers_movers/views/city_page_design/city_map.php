<?php 
foreach ($cities as $ct) {
    if (@$ct['nm'] == $city) {
        $lat = $ct['lat'];
        $lon = $ct['lon'];
        $state_code = $ct['sc'];
        break;
    }
} 
?>

<!-- Row 2: Coverage Content & Creative Dashboard Google Map -->
<div class="row align-items-center mb-5 pm-map-row-container">
  
  <!-- Content Column -->
  <div class="col-lg-6 order-2 order-lg-1">
    <div class="pm-city-about-content">
      <span class="pm-city-accent-label fw-bold text-danger mb-2 d-block">— SYSTEMATIC SHIFTING —</span>
      <h3 class="pm-city-section-subtitle mb-3">Seamless Relocation Across <?= htmlspecialchars($city) ?> & State</h3>
      <div class="pm-city-accent-bar mb-4"></div>
      
      <div class="pm-city-prose mb-4">
        <?= $htmlcontent1 ?>
      </div>


    </div>
  </div>
  
  <!-- Creative Map Column -->
  <div class="col-lg-6 order-1 order-lg-2">
    <div class="pm-map-dashboard-card rounded-4 border overflow-hidden shadow-sm bg-white">
      <!-- Fake map dashboard header -->
      <div class="pm-map-header bg-light border-bottom px-3 py-2 d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center gap-2">
          <span class="pm-map-dot-pulse rounded-circle bg-danger"></span>
          <small class="fw-bold text-dark uppercase-text pm-map-header-text"><?= htmlspecialchars($city) ?> Shifting Network Map</small>
        </div>
        <div class="d-flex gap-1">
          <span class="rounded-circle bg-secondary opacity-25 pm-map-header-dot"></span>
          <span class="rounded-circle bg-secondary opacity-25 pm-map-header-dot"></span>
          <span class="rounded-circle bg-secondary opacity-25 pm-map-header-dot"></span>
        </div>
      </div>
      <!-- Google Map frame -->
      <div class="pm-city-map-frame position-relative">
        <?php if (!empty($lat) && !empty($lon)) { ?>
          <iframe
              width="100%"
              height="400"
              class="pm-city-map-iframe"
              loading="lazy"
              allowfullscreen
              src="https://www.google.com/maps?q=<?php echo $lat; ?>,<?php echo $lon; ?>&hl=en&z=12&output=embed">
          </iframe>
        <?php } ?>
      </div>
    </div>
  </div>

</div>