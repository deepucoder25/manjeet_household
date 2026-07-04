<div class="hero-quote-card-container">
  <!-- Card Header -->
  <div class="hero-quote-header">
    <h3 class="hero-quote-title">Get a <span class="accent-red-text">Free</span> Moving Quote</h3>
    <p class="hero-quote-subtitle">Fill in your details and get instant quote</p>
  </div>
  
  <div class="hero-quote-white-card">
    <!-- Card Body / Form -->
    <div class="card-body-form">
      <form id="quoteform" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="quoteformresults" onsubmit="return false;">
        <div class="row g-2">
          <!-- Name Input -->
          <div class="col-sm-6 col-6 form-group-custom">
            <label for="quote_name" class="visually-hidden">Full Name</label>
            <div class="input-wrap-custom">
              <i class="bi bi-person input-icon-custom"></i>
              <input type="text" name="name" id="quote_name" class="form-control-custom" placeholder="Full Name">
            </div>
          </div>
          
          <!-- Phone Input -->
          <div class="col-sm-6 col-6 form-group-custom">
            <label for="quote_phone" class="visually-hidden">Phone Number</label>
            <div class="input-wrap-custom">
              <i class="bi bi-telephone input-icon-custom"></i>
              <input type="tel" name="phone" id="quote_phone" class="form-control-custom" placeholder="Phone Number">
            </div>
          </div>
          
          <!-- Moving From -->
          <div class="col-sm-6 col-6 form-group-custom">
            <label for="quote_mfrom" class="visually-hidden">Moving From</label>
            <div class="input-wrap-custom">
              <i class="bi bi-geo-alt input-icon-custom"></i>
              <input type="text" name="mfrom" id="quote_mfrom" class="form-control-custom" value="<?= isset($from_city) ? htmlspecialchars($from_city) : @$city ?>" placeholder="Moving From">
            </div>
          </div>
          
          <!-- Moving To -->
          <div class="col-sm-6 col-6 form-group-custom">
            <label for="quote_mto" class="visually-hidden">Moving To</label>
            <div class="input-wrap-custom">
              <i class="bi bi-geo-alt input-icon-custom"></i>
              <input type="text" name="mto" id="quote_mto" class="form-control-custom" value="<?= isset($from_city) ? htmlspecialchars($city) : '' ?>" placeholder="Moving To">
            </div>
          </div>
          
          <!-- Moving Date -->
          <div class="col-12 form-group-custom">
            <label for="quote_mdate" class="visually-hidden">Moving Date</label>
            <div class="input-wrap-custom">
              <i class="bi bi-calendar input-icon-custom"></i>
              <input type="text" name="mdate" id="quote_mdate" class="form-control-custom" placeholder="Moving Date" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
            </div>
          </div>
          
          <!-- Select Service / Type of Move -->
          <div class="col-12 form-group-custom">
            <label for="quote_mtype" class="visually-hidden">Type of Move</label>
            <div class="input-wrap-custom select-wrap-custom">
              <i class="bi bi-box input-icon-custom"></i>
              <select name="mtype" id="quote_mtype" class="form-select-custom">
                <option value="" disabled selected>Type of Move</option>
                <option>Household Relocation</option>
                <option>Office Relocation</option>
                <option>Car/Bike Shifting</option>
                <option>Warehousing</option>
                <option>Packing & Unpacking</option>
              </select>
            </div>
          </div>
          
          <!-- Additional Details (Optional) -->
          <div class="col-12 form-group-custom">
            <label for="quote_comments" class="visually-hidden">Additional Details (Optional)</label>
            <div class="input-wrap-custom">
              <i class="bi bi-pencil input-icon-custom"></i>
              <input type="text" name="comments" id="quote_comments" class="form-control-custom" placeholder="Additional Details (Optional)">
            </div>
          </div>
          
          <!-- Submit Button -->
          <div class="col-12">
            <button type="submit" class="btn-submit-custom">
              <span>Get Free Quote</span>
              <span class="btn-circle-chevron"><i class="bi bi-chevron-right"></i></span>
            </button>
          </div>
        </div>
        
        <div id="quoteformresults"></div>
      </form>
    </div>
    
    <!-- Card Footer / Trust Security Tag -->
    <div class="card-footer-trust-sec">
      <i class="bi bi-lock"></i>
      <span>Your information is safe with us.</span>
    </div>
  </div>
</div>