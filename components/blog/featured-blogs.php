<!-- Featured Blogs Start -->
<div class="featured-blogs-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp">Editor's Picks</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Featured <span>Articles</span></h2>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">Discover our most popular and trending interior design articles.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="featured-blog-card wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-image">
                        <img src="assets/images/blogs/featured-1.jpg" alt="Living Room Design Tips">
                        <div class="blog-category">Design Tips</div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="date">Apr 02, 2026</span>
                            <span class="author">By Indigo Team</span>
                        </div>
                        <h4>Creating the Perfect Living Room Space</h4>
                        <p>Transform your living room into a cozy haven with our expert design tips and tricks for maximizing comfort and style.</p>
                        <a href="blog-details.php?id=1" class="read-more">Read Article <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="featured-blog-card wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-image">
                        <img src="assets/images/blogs/featured-2.jpg" alt="Kitchen Design Trends">
                        <div class="blog-category">Trends</div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="date">Mar 28, 2026</span>
                            <span class="author">By Indigo Team</span>
                        </div>
                        <h4>2026 Kitchen Design Trends to Watch</h4>
                        <p>Explore the latest kitchen design trends including smart storage, sustainable materials, and modern aesthetics that's taking over.</p>
                        <a href="blog-details.php?id=2" class="read-more">Read Article <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="featured-blog-card wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-image">
                        <img src="assets/images/blogs/featured-3.jpg" alt="Small Space Design">
                        <div class="blog-category">Solutions</div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="date">Mar 20, 2026</span>
                            <span class="author">By Indigo Team</span>
                        </div>
                        <h4>Maximizing Small Spaces: Smart Design Solutions</h4>
                        <p>Learn proven techniques to make small rooms feel spacious with smart furniture, colors, and lighting strategies.</p>
                        <a href="blog-details.php?id=3" class="read-more">Read Article <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured Blogs End -->

<style>
.featured-blogs-section {
    background-color: #f9f9f9;
}

.featured-blog-card {
    background-color: white;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.featured-blog-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.blog-image {
    position: relative;
    overflow: hidden;
    height: 220px;
}

.blog-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.featured-blog-card:hover .blog-image img {
    transform: scale(1.05);
}

.blog-category {
    position: absolute;
    top: 15px;
    right: 15px;
    background-color: #ff6b35;
    color: white;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
}

.blog-content {
    padding: 25px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.blog-meta {
    display: flex;
    gap: 15px;
    font-size: 12px;
    color: #999;
    margin-bottom: 15px;
    padding-bottom: 15px;
    border-bottom: 1px solid #e9e9e9;
}

.blog-meta span {
    display: flex;
    align-items: center;
}

.featured-blog-card h4 {
    font-size: 18px;
    font-weight: 700;
    color: #2a2a2a;
    margin: 0 0 12px 0;
    line-height: 1.4;
}

.blog-content p {
    font-size: 14px;
    color: #666;
    line-height: 1.6;
    margin-bottom: 15px;
    flex-grow: 1;
}

.read-more {
    display: inline-flex;
    align-items: center;
    color: #ff6b35;
    text-decoration: none;
    font-weight: 600;
    font-size: 13px;
    transition: all 0.3s ease;
}

.read-more:hover {
    gap: 8px;
}

.read-more i {
    transition: transform 0.3s ease;
}

.featured-blog-card:hover .read-more i {
    transform: translateX(4px);
}
</style>
