<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'Customer Reviews', 'breadcrumb_icon' => 'bi-star-fill')); ?>

<section class="reviews-section py-5 mb-5 pb-5">
    <div class="container">
        <div class="row">

            <!-- Main Content Area -->
            <div class="col-lg-8">
                <div class="reviews-main-content">
                    
                    <!-- Stats / Overview Banner Card -->
                    <div class="reviews-stats-card p-4 rounded-4 shadow-sm border mb-4 d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-3 bg-white">
                        <div class="d-flex align-items-center gap-3">
                            <div class="reviews-score-big text-center px-3 py-2 rounded-3">
                                <span class="fw-black text-danger d-block lh-1 mb-1"><?= $ratingValue ?></span>
                                <span class="text-muted small">out of 5</span>
                            </div>
                            <div>
                                <h3 class="fw-bold mb-1 text-dark">Client Experiences</h3>
                                <p class="text-muted mb-0">Based on <?= $ratingCount ?> verified shifting feedback ratings.</p>
                                <div class="reviews-summary-stars mt-1 text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="button" class="btn btn-danger rounded-pill px-4 py-2 fw-bold shadow-sm write-review-trigger-btn" data-bs-toggle="modal" data-bs-target="#reviewModal">
                                <i class="bi bi-pencil-square me-2"></i> Write a Review
                            </button>
                        </div>
                    </div>

                    <!-- Reviews List Grid -->
                    <div class="reviews-list-wrapper">
                        <?php if ($reviews->num_rows() == 0): ?>
                            <div class="text-center py-5 rounded-4 bg-light border border-dashed">
                                <i class="bi bi-chat-left-dots text-muted display-4 d-block mb-3"></i>
                                <h4 class="text-dark fw-bold">No verified reviews yet</h4>
                                <p class="text-muted mb-0">Be the first to share your relocation experience with us!</p>
                            </div>
                        <?php else: ?>
                            <div class="row">
                                <?php 
                                foreach ($reviews->result() as $r): 
                                    $pdate = explode(" ", $r->posted_date)[0];
                                    
                                    // Mask email address safely
                                    $email_parts = explode("@", $r->email);
                                    if (count($email_parts) == 2) {
                                        $username = $email_parts[0];
                                        $domain = $email_parts[1];
                                        $masked_user = (strlen($username) > 4) 
                                            ? substr($username, 0, 3) . str_repeat('*', strlen($username) - 3) 
                                            : substr($username, 0, 1) . str_repeat('*', strlen($username) - 1);
                                        $em = $masked_user . '@' . $domain;
                                    } else {
                                        $em = $r->email;
                                    }
                                ?>
                                <div class="col-12">
                                    <div class="review-item-card p-4 rounded-4 shadow-sm border bg-white" itemprop="review" itemscope itemtype="https://schema.org/Review">
                                        <meta itemprop="name" content="<?= htmlspecialchars($r->r_title) ?>" />
                                        <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                                            <meta itemprop="name" content="<?= $company3 ?>" />
                                        </div>

                                        <!-- Header Block: Avatar, Name, Stars -->
                                        <div class="d-flex justify-content-between align-items-start flex-wrap gap-3 mb-3">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="review-avatar rounded-circle d-flex align-items-center justify-content-center text-white fw-bold">
                                                    <?= strtoupper(substr($r->name, 0, 1)) ?>
                                                </div>
                                                <div>
                                                    <h3 class="fw-bold text-dark mb-0" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                                        <span itemprop="name"><?= htmlspecialchars($r->name) ?></span>
                                                    </h3>
                                                    <small class="text-muted"><?= htmlspecialchars($em) ?></small>
                                                </div>
                                            </div>
                                            <div class="review-meta text-end">
                                                <div class="review-stars-wrap mb-1">
                                                    <?php for ($i = 0; $i < 5; $i++): ?>
                                                        <i class="bi <?= $i < $r->stars ? 'bi-star-fill text-warning' : 'bi-star text-muted' ?>"></i>
                                                    <?php endfor; ?>
                                                </div>
                                                <small class="text-muted text-uppercase fw-semibold" itemprop="datePublished" content="<?= $pdate ?>"><?= date('M d, Y', strtotime($pdate)) ?></small>
                                            </div>
                                        </div>

                                        <!-- Review Body Block -->
                                        <div class="review-body-block">
                                            <?php if (!empty($r->r_title)): ?>
                                                <h4 class="fw-bold text-dark mb-2"><?= htmlspecialchars($r->r_title) ?></h4>
                                            <?php endif; ?>
                                            <p itemprop="reviewBody" class="text-muted leading-relaxed">
                                                "<?= htmlspecialchars($r->r_desc) ?>"
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <!-- Pagination Block -->
                            <div class="mt-5 d-flex justify-content-center">
                                <nav aria-label="Reviews navigation">
                                    <?= $this->pagination->create_links() ?>
                                </nav>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
            </div>

            <!-- Sidebar Column -->
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'reviews']); ?>
            </div>

        </div>
    </div>
</section>
