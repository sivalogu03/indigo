<div class="our-blog py-5">
    <div class="container">
        <div class="row section-row align-items-center mb-4">
            <div class="col-lg-8">
                <div class="section-title">
                    <h3 class="wow fadeInUp">latest news</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Your guide to</span> Indigo interiors</h2>
                </div>
                </div>
        </div>

        <div class="row g-4">
            <?php
            // Include your database connection
            include 'admin/includes/db_connect.php'; 

            // Fetch the 4 latest blog posts
            $blog_sql = "SELECT * FROM blogs ORDER BY created_at DESC LIMIT 4";
            $blog_result = $conn->query($blog_sql);

            if ($blog_result->num_rows > 0):
                while($blog = $blog_result->fetch_assoc()): 
                    // Format the date (e.g., 17, Mar, 2026)
                    $date = date('j, M, Y', strtotime($blog['created_at']));
            ?>
                <div class="col-lg-3 col-md-6">
                    <div style="border: 1px solid #b5b5b5; border-radius: 10px; padding:10px;" class="post-item wow fadeInUp h-100 shadow-sm">
                        <div class="post-featured-image">
                            <figure class="mb-0">
                                <a href="blog-details.php?slug=<?php echo $blog['slug']; ?>" class="image-anime" data-cursor-text="View">
                                    <img src="assets/images/blogs/<?php echo $blog['upload_image']; ?>" alt="<?php echo $blog['title']; ?>" class="img-fluid rounded">
                                </a>
                            </figure>
                            <p style="font-size:12px; color:red; font-style: italic; padding:10px 0px; margin-bottom:0;">
                                <i class="fa-regular fa-clock"></i> <?php echo $date; ?> &nbsp;&nbsp;&nbsp;
                                <i class="fa-regular fa-user"></i> Admin
                            </p>
                        </div>
                        <div class="post-item-body">
                            <div class="post-item-content">
                                 <h3 style="font-size: 18px; margin-bottom: 15px;">
                                    <a href="blog-details.php?slug=<?php echo $blog['slug']; ?>" class="text-dark text-decoration-none">
                                        <?php echo $blog['title']; ?>
                                    </a>
                                 </h3>
                            </div>

                            <div class="post-item-btn">
                                <a href="blog-details.php?slug=<?php echo $blog['slug']; ?>" class="post-btn btn btn-link p-0 text-danger text-uppercase font-weight-bold" style="font-size: 13px;">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php 
                endwhile; 
            else:
                echo "<div class='col-12'><p class='text-center'>No blog posts found.</p></div>";
            endif; 
            ?>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12 text-center">
                <div class="our-blog-footer wow fadeInUp" data-wow-delay="0.6s">
                    <a href="blog.php" class="btn-default">See All Blogs</a>
                </div>
            </div>
        </div>
    </div>
</div>