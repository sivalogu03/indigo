<?php
$location = isset($_GET['location']) ? sanitize_text_field($_GET['location']) : 'kundalahalli';
$page_title = "Best Interior Designer in " . ucwords(str_replace('-', ' ', $location)) . " | Indigo Interiors";
$page_desc = "Indigo Interiors offers premium interior design services in " . ucwords(str_replace('-', ' ', $location)) . ". Explore our design solutions and contact us for a free consultation.";
include 'includes/header.php';
?>

<!-- Page Header -->
<?php include 'components/locations-details/page-header.php'; ?>

<!-- Intro Section -->
<?php include 'components/locations-details/intro-section.php'; ?>

<!-- Services Grid -->
<?php include 'components/locations-details/services-grid.php'; ?>

<!-- Location Info -->
<?php include 'components/locations-details/location-info.php'; ?>

<!-- Key Designs Links -->
<?php include 'components/locations-details/key-designs-links.php'; ?>

<!-- Contact Form -->
<?php include 'components/locations-details/contact-form.php'; ?>

<!-- CTA Section -->
<?php include 'components/service-detailes/cta-section.php'; ?>

<?php include 'includes/footer.php'; ?>