
<!-- Review Form Modal -->
<div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 contact-review-modal-content">
            <div class="modal-header border-0 pb-0 px-4 pt-4">
                <h3 class="modal-title contact-review-modal-title" id="reviewModalLabel">Share Your Experience</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form action="<?= site_url('reviews/submit') ?>" method="POST">
                    <div class="mb-3">
                        <label class="contact-review-form-label">Your Full Name</label>
                        <input type="text" name="name" class="form-control contact-review-form-control" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label class="contact-review-form-label">Your Email</label>
                        <input type="email" name="email" class="form-control contact-review-form-control" placeholder="Enter your email address" required>
                    </div>
                    <div class="mb-3">
                        <label class="contact-review-form-label">Your City</label>
                        <input type="text" name="city" class="form-control contact-review-form-control" placeholder="e.g. Lucknow" value="<?= isset($city) ? $city : '' ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="contact-review-form-label">Your Rating</label>
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="contact-rating-select mb-0" id="star-rating">
                                <i class="bi bi-star-fill contact-rating-item active" data-value="1"></i>
                                <i class="bi bi-star-fill contact-rating-item active" data-value="2"></i>
                                <i class="bi bi-star-fill contact-rating-item active" data-value="3"></i>
                                <i class="bi bi-star-fill contact-rating-item active" data-value="4"></i>
                                <i class="bi bi-star-fill contact-rating-item active" data-value="5"></i>
                            </div>
                            <div class="d-flex align-items-center gap-2 contact-review-rating-wrap">
                                <div id="rating-emoji" class="contact-review-emoji">😍</div>
                                <div><span id="rating-number" class="contact-review-number">5</span><span class="contact-review-total">/5</span></div>
                            </div>
                        </div>
                        <input type="hidden" name="rating" id="rating-input" value="5">
                    </div>
                    <div class="mb-3">
                        <label class="contact-review-form-label">Your Message</label>
                        <textarea name="review" class="form-control contact-review-form-control" rows="4" placeholder="Write your feedback here..." required></textarea>
                    </div>
                    <button type="submit" class="contact-btn-submit-review mt-3">Submit Review</button>
                </form>
                <p class="text-muted small mt-3 text-center mb-0">
                    <i class="bi bi-info-circle me-1"></i> Reviews are subject to approval by our team.
                </p>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const emojis = {
        1: '😠',
        2: '😞',
        3: '😐',
        4: '🙂',
        5: '😍'
    };
    const emojiDisplay = document.getElementById('rating-emoji');
    const numberDisplay = document.getElementById('rating-number');
    
    document.querySelectorAll('.contact-rating-item').forEach(star => {
        star.addEventListener('click', function() {
            const value = this.getAttribute('data-value');
            document.getElementById('rating-input').value = value;
            emojiDisplay.textContent = emojis[value];
            numberDisplay.textContent = value;
            
            document.querySelectorAll('.contact-rating-item').forEach(s => {
                if (s.getAttribute('data-value') <= value) {
                    s.classList.add('active');
                    s.classList.replace('bi-star', 'bi-star-fill');
                } else {
                    s.classList.remove('active');
                    s.classList.replace('bi-star-fill', 'bi-star');
                }
            });
        });
    });
});
</script>
