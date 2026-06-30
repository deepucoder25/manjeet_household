<div class="modal fade" id="callMeBackModal" tabindex="-1" aria-labelledby="callMeBackModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content contact-modal-content">
      
      <!-- Modal Header with Close Button -->
      <div class="modal-header border-0 pb-0 contact-modal-header">
        <button type="button" class="btn-close contact-modal-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body px-4 pb-4 pt-1 text-center">
        <!-- Title matching user image -->
        <h2 class="mb-4 contact-modal-title">Call Me Back</h2>
        
        <form id="callMeBackForm" class="ajax-form" data-url="<?= site_url('contacts/call_back') ?>" data-result="resultcallbackmodal" onsubmit="return false;">
          
          <div class="mb-3">
            <input type="text" name="name" class="form-control contact-modal-input" placeholder="Enter Your Name">
          </div>
          
          <div class="mb-4">
            <input type="tel" name="phone" class="form-control contact-modal-input" placeholder="Enter 10 Digit Mobile No." pattern="[0-9]{10}" title="Please enter a valid 10-digit mobile number">
          </div>
          
          <button type="submit" class="btn w-100 contact-modal-btn">
            Submit
          </button>
          
          <div id="resultcallbackmodal" class="mt-3 text-center contact-modal-result"></div>
          
        </form>
      </div>
      
    </div>
  </div>
</div>
