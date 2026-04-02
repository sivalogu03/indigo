<!-- Related Articles Start -->
<div class="related-articles-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp">More Insights</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Related <span>Articles</span></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            // Get related articles from same category or just show 3 other articles
            $related = [];
            foreach ($all_blogs as $b) {
                if ($b['id'] != $blog['id']) {
                    $related[] = $b;
                }
            }
            
            // Prefer same category, then just show others
            $same_cat = array_filter($related, function($b) use ($blog) {
                return $b['category'] == $blog['category'];
            });
            
            if (count($same_cat) >= 3) {
                $related = array_slice($same_cat, 0, 3);
            } else {
                $related = array_slice($related, 0, 3);
            }
            
            $delay = 0.1;
            foreach ($related as $article):
            ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="related-article-card wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
                    <div class="card-image">
                        <img src="assets/images/blogs/<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>">
                        <span class="category-badge"><?php echo $article['category']; ?></span>
                    </div>
                    <div class="card-content">
                        <h4><?php echo htmlspecialchars($article['title']); ?></h4>
                        <p><?php echo htmlspecialchars($article['excerpt']); ?></p>
                        <a href="blog-details.php?id=<?php echo $article['id']; ?>" class="read-link">Read More →</a>
                    </div>
                </div>
            </div>
            <?php
            $delay += 0.1;
            endforeach;
            ?>
        </div>
    </div>
</div>
<!-- Related Articles End -->

<style>
.related-articles-section {
    background-color: white;
}

.related-article-card {
    background-color: white;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.related-article-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.card-image {
    position: relative;
    overflow: hidden;
    height: 200px;
}

.card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.related-article-card:hover .card-image img {
    transform: scale(1.05);
}

.category-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background-color: #ff6b35;
    color: white;
    padding: 5px 12px;
    border-radius: 15px;
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
}

.card-content {
    padding: 25px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.card-content h4 {
    font-size: 16px;
    font-weight: 700;
    color: #2a2a2a;
    margin: 0 0 12px 0;
    line-height: 1.4;
}

.card-content p {
    font-size: 13px;
    color: #666;
    line-height: 1.6;
    margin: 0 0 15px 0;
    flex-grow: 1;
}

.read-link {
    display: inline-flex;
    color: #ff6b35;
    text-decoration: none;
    font-weight: 600;
    font-size: 12px;
    transition: all 0.3s ease;
}

.read-link:hover {
    gap: 6px;
}
</style>
