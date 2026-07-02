<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// Auto-detect title and icon if not provided
if (!isset($breadcrumb_title) || empty($breadcrumb_title)) {
    if (isset($title)) {
        // Strip company name suffix if it exists
        $parts = explode('|', $title);
        $breadcrumb_title = trim($parts[0]);
    } else {
        $breadcrumb_title = 'Relocation';
    }
}

if (!isset($breadcrumb_icon) || empty($breadcrumb_icon)) {
    // Check view_file to choose an appropriate icon
    $vf = isset($view_file) ? $view_file : '';
    switch ($vf) {
        case 'packing_unpacking':
            $breadcrumb_icon = 'bi-box-seam';
            break;
        case 'loading_unloading':
            $breadcrumb_icon = 'bi-arrow-down-up';
            break;
        case 'home_shifting':
            $breadcrumb_icon = 'bi-house-heart-fill';
            break;
        case 'office':
            $breadcrumb_icon = 'bi-building-gear';
            break;
        case 'industrial_shifting':
            $breadcrumb_icon = 'bi-briefcase-fill';
            break;
        case 'local_shifting':
            $breadcrumb_icon = 'bi-geo-alt-fill';
            break;
        case 'car':
            $breadcrumb_icon = 'bi-car-front-fill';
            break;
        case 'bike':
            $breadcrumb_icon = 'bi-bicycle';
            break;
        case 'general_insurance':
            $breadcrumb_icon = 'bi-shield-check';
            break;
        case 'about':
            $breadcrumb_icon = 'bi-people-fill';
            break;
        case 'choose':
            $breadcrumb_icon = 'bi-patch-question-fill';
            break;
        case 'faqs':
            $breadcrumb_icon = 'bi-chat-left-text-fill';
            break;
        case 'moving_tips':
            $breadcrumb_icon = 'bi-lightbulb-fill';
            break;
        case 'testimonials':
            $breadcrumb_icon = 'bi-chat-quote-fill';
            break;
        case 'reviews':
            $breadcrumb_icon = 'bi-star-half';
            break;
        case 'photo-gallery':
            $breadcrumb_icon = 'bi-images';
            break;
        case 'video-gallery':
            $breadcrumb_icon = 'bi-play-circle-fill';
            break;
        case 'contacts':
            $breadcrumb_icon = 'bi-envelope-fill';
            break;
        case 'tracking':
            $breadcrumb_icon = 'bi-geo-fill';
            break;
        default:
            $breadcrumb_icon = 'bi-info-circle';
            break;
    }
}

if (!isset($breadcrumb_current) || empty($breadcrumb_current)) {
    $breadcrumb_current = $breadcrumb_title;
}

$bc_parent_name = isset($breadcrumb_parent_name) ? $breadcrumb_parent_name : 'Home';
$bc_parent_url = isset($breadcrumb_parent_url) ? $breadcrumb_parent_url : site_url();
?>

<section class="service-breadcrumbs text-center">
    <div class="container">
        <h1 class="bc-title-main text-uppercase text-white fw-bold"><?= $breadcrumb_title ?></h1>
        <div class="bc-divider-wrap d-flex align-items-center justify-content-center gap-3 my-3">
            <span class="bc-divider-line"></span>
            <div class="bc-icon-hexagon">
                <i class="bi bi-hexagon-fill hex-bg"></i>
                <i class="bi <?= $breadcrumb_icon ?> hex-icon"></i>
            </div>
            <span class="bc-divider-line"></span>
        </div>
        <div class="bc-capsule-container d-inline-flex align-items-center justify-content-between p-1 bg-white border border-danger shadow-sm">
            <div class="d-flex align-items-center gap-2">
                <a href="<?= site_url() ?>" class="bc-home-icon-wrap text-white">
                    <i class="bi bi-house-door-fill"></i>
                </a>
                <div class="bc-links d-flex align-items-center gap-2 text-dark font-weight-bold">
                    <a href="<?= site_url() ?>" class="text-decoration-none text-dark">Home</a>
                    <i class="bi bi-chevron-right text-muted small"></i>
                    
                    <?php if ($bc_parent_name !== 'Home' && $bc_parent_name !== 'home'): ?>
                        <a href="<?= $bc_parent_url ?>" class="text-decoration-none text-dark"><?= $bc_parent_name ?></a>
                        <i class="bi bi-chevron-right text-muted small"></i>
                    <?php endif; ?>
                </div>
            </div>
            <span class="bc-current-pill text-white bg-danger font-weight-bold"><?= $breadcrumb_current ?></span>
        </div>
    </div>
</section>
