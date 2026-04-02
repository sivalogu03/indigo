<article class="blog-single-post pt-4">
    
    <div class="blog-content text-secondary lh-lg" style="font-size: 1.1rem;">
        <?php 
        // Display the rich text content directly
        echo $blog['content']; 
        ?>
    </div>

    <!-- Blog Tags -->
    <?php if (isset($blog['tags']) && !empty($blog['tags'])): ?>
        <div class="mt-4 blog-tags d-flex align-items-center flex-wrap">
            <i class="fas fa-tags text-primary me-2"></i>
            <?php foreach ($blog['tags'] as $tag): ?>
                <span class="badge bg-light text-dark border me-2 mb-2 p-2 px-3 fw-normal"><?php echo htmlspecialchars($tag); ?></span>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <!-- Share Socials (Open Graph integration matches this URL) -->
    <div class="mt-5 pt-4 border-top d-flex align-items-center">
        <strong class="me-3">Share this article:</strong>
        <?php $current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($current_url); ?>" target="_blank" class="btn btn-sm btn-outline-secondary rounded-circle me-2"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode($current_url); ?>&text=<?php echo urlencode($blog['title']); ?>" target="_blank" class="btn btn-sm btn-outline-secondary rounded-circle me-2"><i class="fab fa-twitter"></i></a>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode($current_url); ?>" target="_blank" class="btn btn-sm btn-outline-secondary rounded-circle"><i class="fab fa-linkedin-in"></i></a>
    </div>

    <!-- Previous and Next Navigation -->
    <?php
    $all_blogs_by_date = $all_blogs;
    usort($all_blogs_by_date, function($a, $b) {
        return strtotime($b['publish_date']) - strtotime($a['publish_date']);
    });
    
    $current_index = array_search($blog_id, array_column($all_blogs_by_date, 'id'));
    $prev_post = ($current_index < count($all_blogs_by_date) - 1) ? $all_blogs_by_date[$current_index + 1] : null;
    $next_post = ($current_index > 0) ? $all_blogs_by_date[$current_index - 1] : null;
    ?>
    <div class="d-flex justify-content-between align-items-center mt-5 p-4 bg-light rounded-4 shadow-sm border border-light">
        <div class="text-start" style="flex: 1;">
            <?php if($prev_post): ?>
                <span class="d-block text-muted small text-uppercase fw-bold mb-1">Previous</span>
                <a href="blog-details.php?id=<?php echo $prev_post['id']; ?>" class="text-dark text-decoration-none fw-bold" style="font-size: 1.1rem;">
                    <i class="fas fa-arrow-left me-2 text-primary"></i> <?php echo htmlspecialchars($prev_post['title']); ?>
                </a>
            <?php endif; ?>
        </div>
        <div class="text-end" style="flex: 1;">
            <?php if($next_post): ?>
                <span class="d-block text-muted small text-uppercase fw-bold mb-1">Next</span>
                <a href="blog-details.php?id=<?php echo $next_post['id']; ?>" class="text-dark text-decoration-none fw-bold" style="font-size: 1.1rem;">
                    <?php echo htmlspecialchars($next_post['title']); ?> <i class="fas fa-arrow-right ms-2 text-primary"></i>
                </a>
            <?php endif; ?>
        </div>
    </div>
</article>
