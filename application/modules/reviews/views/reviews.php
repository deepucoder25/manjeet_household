<main class="main">
    <?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'Our Reviews', 'breadcrumb_icon' => 'bi-star-fill', 'breadcrumb_current' => 'Reviews')); ?>

    <div class="reviews-service-page reviews-feature-content-section">
        <div ng-app="reviewsApp" ng-controller="reviewsctrl">
            <br />
            <div class="container">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 pb-2 mb-3" class="reviews-header-wrap">
                    <h3 class="m-0" class="reviews-header-title">
                        <i class="bi bi-chat-left-quote me-2"></i>Customer Experiences
                    </h3>
                    <button class="btn btn-primary rounded-pill px-4 shadow-sm" class="reviews-write-btn" data-bs-toggle="modal" data-bs-target="#reviewModal">
                        <i class="bi bi-pencil-square me-1"></i> Write a Review
                    </button>
                    <div class="reviews-header-line"></div>
                </div>

                <div class="reviews-single-reviewr mt-4 pb-4">
                    <?php
                    if ($reviews->num_rows() == 0) {
                        echo "<p class='no-reviews-text'>No reviews yet...</p>";
                    } else {
                        foreach ($reviews->result() as $r) {
                            $pdate = explode(" ", $r->posted_date)[0];
                            $size = strlen(explode("@", $r->email)[0]) - 4;
                            $lem = substr($r->email, -12);
                            $fem = substr($r->email, 0, 4);
                            $st = str_repeat("*", $size);
                            $em = $fem . $st . $lem;
                    ?>
                            <div class="reviews-single-review">
                                <div class="reviews-review-content" itemprop="review" itemscope itemtype="https://schema.org/Review">
                                    <meta itemprop="name" content="<?= $r->r_title ?>" />
                                    <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                                        <meta itemprop="name" content="<?= $company3 ?>" />
                                    </div>

                                    <div class="reviews-review-rating">
                                        <?php for ($i = 0; $i < $r->stars; $i++) { ?>
                                            <i class="bi bi-star-fill"></i>
                                        <?php } ?>
                                        <span class="d-none reviews-rating-value" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                            <span itemprop="ratingValue"><?= $r->stars ?></span> stars
                                        </span>
                                    </div>

                                    <p itemprop="reviewBody">"<?=$r->r_desc?>"</p>

                                    <div class="reviews-review-author">
                                        <div class="reviews-review-avatar"><?= strtoupper(substr($r->name, 0, 1)) ?></div>
                                        <div>
                                            <strong itemprop="author" itemscope itemtype="https://schema.org/Person">
                                                <span itemprop="name"><?= $r->name ?></span>
                                            </strong>
                                            <small><?= $em ?></small>
                                            <meta itemprop="datePublished" content="<?= $pdate ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                    <div class="mt-4 w-100 d-flex justify-content-center">
                        <div class="pagination">
                            <?php echo $this->pagination->create_links() ?>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>

</main>

