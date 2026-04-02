<!-- Article Content Start -->
<div class="article-content-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Article Meta -->
                <div class="article-meta mb-4">
                    <div class="meta-item">
                        <span class="label">Published on</span>
                        <span class="value"><?php echo $blog['date']; ?></span>
                    </div>
                    <div class="meta-item">
                        <span class="label">Category</span>
                        <span class="value"><?php echo $blog['category']; ?></span>
                    </div>
                    <div class="meta-item">
                        <span class="label">Read Time</span>
                        <span class="value">5 min read</span>
                    </div>
                </div>

                <!-- Article Title -->
                <h1 class="article-title"><?php echo $blog['title']; ?></h1>

                <!-- Featured Image -->
                <div class="article-featured-image my-5">
                    <figure class="image-anime reveal">
                        <img src="assets/images/blogs/<?php echo $blog['image']; ?>" alt="<?php echo $blog['title']; ?>">
                    </figure>
                </div>

                <!-- Article Body -->
                <div class="article-body">
                    <?php echo $blog['content']; ?>
                </div>

                <!-- Share Section -->
                <div class="article-share mt-5 pt-5 border-top">
                    <h4 class="mb-3">Share This Article</h4>
                    <div class="share-buttons">
                        <a href="javascript:void(0)" class="share-btn" title="Share on LinkedIn">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="javascript:void(0)" class="share-btn" title="Share on Facebook">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="javascript:void(0)" class="share-btn" title="Share on Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="javascript:void(0)" class="share-btn" title="Share via Email">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="javascript:void(0)" class="share-btn" title="Copy Link">
                            <i class="fas fa-link"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Article Content End -->

<style>
.article-content-section {
    background-color: white;
}

.article-meta {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
    padding: 20px 0;
    border-bottom: 2px solid #f0f0f0;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 8px;
}

.meta-item .label {
    font-size: 12px;
    color: #999;
    text-transform: uppercase;
    font-weight: 600;
}

.meta-item .value {
    font-size: 14px;
    color: #2a2a2a;
    font-weight: 600;
}

.article-title {
    font-size: 42px;
    font-weight: 700;
    color: #2a2a2a;
    line-height: 1.3;
    margin: 30px 0;
}

.article-featured-image {
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.article-featured-image img {
    width: 100%;
    display: block;
}

.article-body {
    font-size: 16px;
    line-height: 1.8;
    color: #555;
}

.article-body p {
    margin-bottom: 20px;
}

.article-body p.lead {
    font-size: 18px;
    color: #666;
    font-weight: 500;
}

.article-body h2 {
    font-size: 28px;
    font-weight: 700;
    color: #2a2a2a;
    margin: 40px 0 20px 0;
}

.article-body h3 {
    font-size: 22px;
    font-weight: 700;
    color: #2a2a2a;
    margin: 30px 0 15px 0;
}

.article-list {
    list-style: none;
    padding: 0;
    margin: 20px 0;
}

.article-list li {
    padding-left: 25px;
    margin-bottom: 12px;
    position: relative;
}

.article-list li:before {
    content: "→";
    position: absolute;
    left: 0;
    color: #ff6b35;
    font-weight: bold;
}

.article-highlight {
    background-color: #f9f9f9;
    border-left: 4px solid #ff6b35;
    padding: 20px;
    border-radius: 4px;
    margin: 25px 0;
}

.article-highlight p,
.article-highlight ul {
    margin-bottom: 0;
}

.article-share {
    display: flex;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
}

.article-share h4 {
    margin: 0;
    font-size: 16px;
    font-weight: 700;
    color: #2a2a2a;
}

.share-buttons {
    display: flex;
    gap: 12px;
}

.share-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background-color: #f0f0f0;
    border-radius: 50%;
    color: #666;
    transition: all 0.3s ease;
    text-decoration: none;
}

.share-btn:hover {
    background-color: #ff6b35;
    color: white;
    transform: translateY(-3px);
}

@media (max-width: 768px) {
    .article-title {
        font-size: 32px;
    }

    .article-body {
        font-size: 15px;
    }

    .article-body h2 {
        font-size: 24px;
    }
}
</style>
