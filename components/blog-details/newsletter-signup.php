<!-- Newsletter Signup Section Start -->
<div class="newsletter-signup-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="newsletter-card">
                    <div class="newsletter-header text-center">
                        <h3>Get Design Tips Delivered</h3>
                        <p>Subscribe to our newsletter and get weekly interior design tips, trends, and inspiration directly in your inbox.</p>
                    </div>

                    <form id="newsletter-form" class="newsletter-form">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Enter your email address" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Subscribe Now</button>
                    </form>

                    <div class="newsletter-footer">
                        <p class="disclaimer">We respect your privacy. Unsubscribe at any time.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter Signup Section End -->

<style>
.newsletter-signup-section {
    background: linear-gradient(135deg, #ff6b35 0%, #ff8a5b 100%);
    color: white;
}

.newsletter-card {
    background-color: rgba(255, 255, 255, 0.95);
    border-radius: 12px;
    padding: 50px 40px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.1);
}

.newsletter-header {
    margin-bottom: 35px;
}

.newsletter-header h3 {
    font-size: 32px;
    font-weight: 700;
    color: #2a2a2a;
    margin: 0 0 15px 0;
}

.newsletter-header p {
    font-size: 15px;
    color: #666;
    line-height: 1.6;
    margin: 0;
}

.newsletter-form {
    display: flex;
    gap: 10px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.newsletter-form .form-group {
    flex-grow: 1;
    min-width: 250px;
    margin: 0;
}

.newsletter-form .form-control {
    width: 100%;
    padding: 14px 18px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 14px;
}

.newsletter-form .form-control:focus {
    border-color: #ff6b35;
    box-shadow: 0 0 0 0.2rem rgba(255, 107, 53, 0.25);
}

.newsletter-form .btn {
    background-color: #ff6b35;
    border: none;
    color: white;
    padding: 14px 30px;
    font-weight: 600;
    border-radius: 6px;
    cursor: pointer;
    transition: all 0.3s ease;
    white-space: nowrap;
}

.newsletter-form .btn:hover {
    background-color: #e55a23;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.15);
}

.newsletter-footer {
    text-align: center;
}

.disclaimer {
    font-size: 12px;
    color: #999;
    margin: 0;
}

@media (max-width: 768px) {
    .newsletter-card {
        padding: 30px 20px;
    }

    .newsletter-header h3 {
        font-size: 24px;
    }

    .newsletter-form {
        flex-direction: column;
    }

    .newsletter-form .form-group {
        min-width: auto;
    }

    .newsletter-form .btn {
        width: 100%;
    }
}
</style>
