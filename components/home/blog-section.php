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
            // Static blog posts data
            $blogs = [
                [
                    'id' => 1,
                    'title' => 'Creating the Perfect Living Room Space',
                    'slug' => 'perfect-living-room',
                    'excerpt' => 'Transform your living room into a cozy haven with our expert design tips...',
                    'date' => '2, Apr, 2026',
                    'image' => 'featured-1.jpg'
                ],
                [
                    'id' => 2,
                    'title' => '2026 Kitchen Design Trends',
                    'slug' => 'kitchen-design-trends',
                    'excerpt' => 'Explore the latest kitchen design trends including smart storage solutions...',
                    'date' => '28, Mar, 2026',
                    'image' => 'featured-2.jpg'
                ],
                [
                    'id' => 3,
                    'title' => 'Maximizing Small Spaces',
                    'slug' => 'small-space-design',
                    'excerpt' => 'Learn proven techniques to make small rooms feel spacious and inviting...',
                    'date' => '20, Mar, 2026',
                    'image' => 'featured-3.jpg'
                ],
                [
                    'id' => 4,
                    'title' => 'Color Psychology in Interiors',
                    'slug' => 'color-psychology',
                    'excerpt' => 'Understand how different colors influence mood and perception in spaces...',
                    'date' => '15, Mar, 2026',
                    'image' => 'featured-1.jpg'
                ]
            ];

            foreach ($blogs as $blog):
            ?>
                <div class="col-lg-3 col-md-6">
                    <div style="border: 1px solid #b5b5b5; border-radius: 10px; padding:10px;" class="post-item wow fadeInUp h-100 shadow-sm">
                        <div class="post-featured-image">
                            <figure class="mb-0">
                                <a href="blog-details.php?id=<?php echo $blog['id']; ?>" class="image-anime" data-cursor-text="View">
                                    <img src="assets/images/blogs/<?php echo $blog['image']; ?>" alt="<?php echo $blog['title']; ?>" class="img-fluid rounded">
                                </a>
                            </figure>
                            <p style="font-size:12px; color:red; font-style: italic; padding:10px 0px; margin-bottom:0;">
                                <i class="fa-regular fa-clock"></i> <?php echo $blog['date']; ?> &nbsp;&nbsp;&nbsp;
                                <i class="fa-regular fa-user"></i> Admin
                            </p>
                        </div>
                        <div class="post-item-body">
                            <div class="post-item-content">
                                 <h3 style="font-size: 18px; margin-bottom: 15px;">
                                    <a href="blog-details.php?id=<?php echo $blog['id']; ?>" class="text-dark text-decoration-none">
                                        <?php echo $blog['title']; ?>
                                    </a>
                                 </h3>
                            </div>

                            <div class="post-item-btn">
                                <a href="blog-details.php?id=<?php echo $blog['id']; ?>" class="post-btn btn btn-link p-0 text-danger text-uppercase font-weight-bold" style="font-size: 13px;">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php 
                endforeach;
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