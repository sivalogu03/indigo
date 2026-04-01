<article class="blog-single-post pt-4">
    
    <div class="blog-content text-secondary lh-lg" style="font-size: 1.1rem;">
        <?php 
        // Display the rich text content directly
        echo $blog['content']; 
        ?>
    </div>

    <!-- Blog Tags -->
    <?php
    $blog_id = $blog['id'];
    $tag_sql = "SELECT t.name, t.slug FROM tags t JOIN blog_tags bt ON t.id = bt.tag_id WHERE bt.blog_id = $blog_id";
    $tags_res = $conn->query($tag_sql);
    
    if ($tags_res && $tags_res->num_rows > 0): 
    ?>
        <div class="mt-4 blog-tags d-flex align-items-center flex-wrap">
            <i class="fas fa-tags text-primary me-2"></i>
            <?php while ($t_row = $tags_res->fetch_assoc()): ?>
                <span class="badge bg-light text-dark border me-2 mb-2 p-2 px-3 fw-normal"><?php echo htmlspecialchars($t_row['name']); ?></span>
            <?php endwhile; ?>
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
    $current_date = $blog['publish_date'];
    
    // Fetch Previous Post
    $prev_sql = "SELECT title, slug FROM blogs WHERE published_status = 'published' AND publish_date < '$current_date' ORDER BY publish_date DESC LIMIT 1";
    $prev_res = $conn->query($prev_sql);
    $prev_post = ($prev_res && $prev_res->num_rows > 0) ? $prev_res->fetch_assoc() : null;

    // Fetch Next Post
    $next_sql = "SELECT title, slug FROM blogs WHERE published_status = 'published' AND publish_date > '$current_date' AND publish_date <= NOW() ORDER BY publish_date ASC LIMIT 1";
    $next_res = $conn->query($next_sql);
    $next_post = ($next_res && $next_res->num_rows > 0) ? $next_res->fetch_assoc() : null;
    ?>
    <div class="d-flex justify-content-between align-items-center mt-5 p-4 bg-light rounded-4 shadow-sm border border-light">
        <div class="text-start" style="flex: 1;">
            <?php if($prev_post): ?>
                <span class="d-block text-muted small text-uppercase fw-bold mb-1">Previous</span>
                <a href="blog-details.php?slug=<?php echo htmlspecialchars($prev_post['slug']); ?>" class="text-dark text-decoration-none fw-bold" style="font-size: 1.1rem;">
                    <i class="fas fa-arrow-left me-2 text-primary"></i> <?php echo htmlspecialchars($prev_post['title']); ?>
                </a>
            <?php endif; ?>
        </div>
        <div class="text-end" style="flex: 1;">
            <?php if($next_post): ?>
                <span class="d-block text-muted small text-uppercase fw-bold mb-1">Next</span>
                <a href="blog-details.php?slug=<?php echo htmlspecialchars($next_post['slug']); ?>" class="text-dark text-decoration-none fw-bold" style="font-size: 1.1rem;">
                    <?php echo htmlspecialchars($next_post['title']); ?> <i class="fas fa-arrow-right ms-2 text-primary"></i>
                </a>
            <?php endif; ?>
        </div>
    </div>
</article>
