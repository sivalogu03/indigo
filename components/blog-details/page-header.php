<?php
// Establish safe image path or fallback generic pattern if no blog image is defined
$banner_img = (!empty($blog['upload_image'])) ? '/findi/assets/images/blogs/' . $blog['upload_image'] : '/findi/assets/images/page-header-bg.jpg';
$title = (!empty($blog['title'])) ? htmlspecialchars($blog['title']) : 'Blog Details';
$cat_name = (!empty($blog['category_name'])) ? htmlspecialchars($blog['category_name']) : 'General';
?>

<div class="page-header bg-dark position-relative d-flex align-items-center justify-content-center" style="min-height: 400px; background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)), url('<?php echo $banner_img; ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container text-center text-white position-relative" style="z-index: 2;">
        
        <!-- Animated Taxonomy Breadcrumb -->
        <nav aria-label="breadcrumb" class="d-flex justify-content-center mb-3">
            <ol class="breadcrumb bg-transparent p-0 m-0 wow fadeInUp" data-wow-delay="0.1s">
                <li class="breadcrumb-item"><a href="/findi/" class="text-white text-decoration-none opacity-75">Home</a></li>
                <li class="breadcrumb-item"><a href="/findi/blog.php" class="text-white text-decoration-none opacity-75">Blog</a></li>
                <li class="breadcrumb-item text-primary fw-bold" aria-current="page"><?php echo $cat_name; ?></li>
            </ol>
        </nav>
        
        <!-- Article Header -->
        <h1 class="display-4 fw-bold font-outfit mb-3 wow fadeInUp" data-wow-delay="0.3s" style="letter-spacing: -1px; text-shadow: 2px 2px 8px rgba(0,0,0,0.5);">
            <?php echo $title; ?>
        </h1>
        
        <!-- Meta Details overlay -->
        <div class="d-flex align-items-center justify-content-center gap-4 mt-4 wow fadeInUp" data-wow-delay="0.5s">
            <div class="text-light opacity-75 border-end pe-4">
                <i class="far fa-user me-2 text-primary"></i> 
                <span><?php echo !empty($blog['author']) ? htmlspecialchars($blog['author']) : 'Indigo Admin'; ?></span>
            </div>
            <div class="text-light opacity-75">
                <i class="far fa-calendar-alt me-2 text-primary"></i> 
                <span><?php echo !empty($blog['publish_date']) ? date('F j, Y', strtotime($blog['publish_date'])) : date('F j, Y'); ?></span>
            </div>
        </div>

    </div>
</div>
