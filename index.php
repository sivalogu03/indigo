<?php
// 1. Define page-specific variables
$page_title = "Home | Indigo Interior - Best Designers in Bangalore";
$page_desc = "Transform your space with Indigo Interior. We specialize in luxury home, villa, and apartment interiors.";

// 2. Include the Header
include 'includes/header.php';
?>

<?php
include 'components/home/slider.php';
include 'components/home/about.php';
include 'components/home/design-solutions.php';
include 'components/home/testimonials.php';
include 'components/home/video-testimonials.php';
include 'components/home/work-process.php';
include 'components/home/why-choose-us.php';
// include 'components/home/recent-projects.php';
include 'components/home/our-services.php';
include 'components/home/our-team.php';
include 'components/home/our-skill.php';
// include 'components/home/blog-section.php';
include 'components/home/faqs.php';
?>

<?php include 'includes/footer.php'; ?>