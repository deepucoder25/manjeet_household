<div class="modal fade contact-custom-modal" id="qteModal" tabindex="-1" role="dialog" aria-labelledby="qteModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="contact-form-header">
                <span>Get a free quote</span>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onclick="setClose()">
                    <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
                </button>
            </div>
            <form id="quotemodal" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="resultquotemodal" onsubmit="return false;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="modal_name" class="visually-hidden">Your Name</label>
                            <div class="form-icon">
                                <i class="bi bi-person-badge"></i>
                                <input type="text" class="form-control" name="name" id="modal_name" placeholder="Your Name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="modal_phone" class="visually-hidden">Mobile Number</label>
                            <div class="form-icon">
                                <i class="bi bi-phone-vibrate"></i>
                                <input type="tel" class="form-control" name="phone" id="modal_phone" placeholder="Mobile Number">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="modal_email" class="visually-hidden">Your Email</label>
                            <div class="form-icon">
                                <i class="bi bi-envelope-at"></i>
                                <input type="text" class="form-control" name="email" id="modal_email" placeholder="Your Email">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="modal_mfrom" class="visually-hidden">From City</label>
                            <div class="form-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                                <input type="text" class="form-control" name="mfrom" id="modal_mfrom" placeholder="From City">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="modal_mto" class="visually-hidden">To City</label>
                            <div class="form-icon">
                                <i class="bi bi-map-fill"></i>
                                <input type="text" class="form-control" name="mto" id="modal_mto" placeholder="To City">
                            </div>
                        </div>
                    </div>
                </div>
           <div class="form-group">
                <label for="modal_message" class="visually-hidden">Describe your relocation needs</label>
                <div class="form-icon">
                    <i class="bi bi-chat-left-text"></i>
                    <textarea name="message" id="modal_message" cols="30" rows="5" class="form-control" placeholder="Describe your relocation needs..."></textarea>
                </div>
            </div>
                <div class="d-flex justify-content-center mt-2 contact-quote-gap">
                    <button id="submitbquotemodal" type="submit" class="theme-btn">Get My Free Quote <i class="bi bi-send-fill"></i></button>
                    <button onclick="document.getElementById('resultquotemodal').innerHTML = '';" type="reset" class="theme-btn">Clear Form</button>
                </div>
 
                <div id="resultquotemodal"></div>
            </form>
        </div>
    </div>
</div>