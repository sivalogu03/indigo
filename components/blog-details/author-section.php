<!-- Author Section Start -->
<div class="author-section-area py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="author-card">
                    <div class="author-header">
                        <img src="assets/images/team/team-1.jpg" alt="Author" class="author-image">
                        <div class="author-info">
                            <h4 class="author-name">Priya Sharma</h4>
                            <p class="author-title">Senior Interior Designer & Design Blogger</p>
                            <div class="author-social">
                                <a href="javascript:void(0)" class="social-link" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                                <a href="javascript:void(0)" class="social-link" title="Instagram"><i class="fab fa-instagram"></i></a>
                                <a href="javascript:void(0)" class="social-link" title="Email"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="author-bio">
                        <p>Priya is a passionate interior designer with 12+ years of experience in creating beautiful and functional spaces. She specializes in modern residential design and loves sharing her expertise through engaging blog posts and design tips. When she's not designing, you'll find her exploring new design trends or spending time with her family.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Author Section End -->

<style>
.author-section-area {
    background-color: #f9f9f9;
}

.author-card {
    background-color: white;
    border-radius: 8px;
    padding: 40px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.author-header {
    display: flex;
    align-items: center;
    gap: 25px;
    margin-bottom: 25px;
}

.author-image {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid #ff6b35;
}

.author-info {
    flex-grow: 1;
}

.author-name {
    font-size: 20px;
    font-weight: 700;
    color: #2a2a2a;
    margin: 0 0 5px 0;
}

.author-title {
    font-size: 13px;
    color: #999;
    margin: 0 0 12px 0;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.author-social {
    display: flex;
    gap: 10px;
}

.social-link {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    background-color: #f0f0f0;
    border-radius: 50%;
    color: #666;
    transition: all 0.3s ease;
    text-decoration: none;
    font-size: 13px;
}

.social-link:hover {
    background-color: #ff6b35;
    color: white;
}

.author-bio {
    border-top: 1px solid #e9e9e9;
    padding-top: 25px;
}

.author-bio p {
    font-size: 14px;
    line-height: 1.8;
    color: #666;
    margin: 0;
}

@media (max-width: 768px) {
    .author-card {
        padding: 25px;
    }

    .author-header {
        flex-direction: column;
        text-align: center;
    }

    .author-social {
        justify-content: center;
    }
}
</style>
