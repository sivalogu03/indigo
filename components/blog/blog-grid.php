<section class="py-5 bg-light">
    <div class="container">
        
        <div class="row g-5">
            
            <!-- Left: Grid Layout (col-lg-8) -->
            <div class="col-lg-8">
                <div class="row g-4 mb-5">
                    <?php
                    // Static blog posts data
                    $allBlogs = [
                        [
                            'id' => 1,
                            'title' => 'Creating the Perfect Living Room Space',
                            'author' => 'Priya Sharma',
                            'date' => 'Apr 02, 2026',
                            'category' => 'Design Tips',
                            'image' => 'featured-1.jpg',
                            'excerpt' => 'Transform your living room into a cozy haven with our expert design tips and tricks for maximizing comfort and style...'
                        ],
                        [
                            'id' => 2,
                            'title' => '2026 Kitchen Design Trends',
                            'author' => 'Priya Sharma',
                            'date' => 'Mar 28, 2026',
                            'category' => 'Trends',
                            'image' => 'featured-2.jpg',
                            'excerpt' => 'Explore the latest kitchen design trends including smart storage, sustainable materials, and modern aesthetics that\'s taking over...'
                        ],
                        [
                            'id' => 3,
                            'title' => 'Maximizing Small Spaces: Smart Design Solutions',
                            'author' => 'Priya Sharma',
                            'date' => 'Mar 20, 2026',
                            'category' => 'Solutions',
                            'image' => 'featured-3.jpg',
                            'excerpt' => 'Learn proven techniques to make small rooms feel spacious with smart furniture, colors, and lighting strategies...'
                        ],
                        [
                            'id' => 4,
                            'title' => 'Color Psychology in Interior Design',
                            'author' => 'Priya Sharma',
                            'date' => 'Mar 15, 2026',
                            'category' => 'Design Tips',
                            'image' => 'featured-1.jpg',
                            'excerpt' => 'Understand how different colors influence mood and perception. Use color psychology to create spaces that feel exactly right...'
                        ],
                        [
                            'id' => 5,
                            'title' => 'Sustainable Interior Design Practices',
                            'author' => 'Priya Sharma',
                            'date' => 'Mar 10, 2026',
                            'category' => 'Eco-Friendly',
                            'image' => 'featured-2.jpg',
                            'excerpt' => 'Learn how to create beautiful and sustainable interiors using eco-friendly materials and practices...'
                        ],
                        [
                            'id' => 6,
                            'title' => 'Modern Minimalist Interior Design',
                            'author' => 'Priya Sharma',
                            'date' => 'Mar 05, 2026',
                            'category' => 'Styles',
                            'image' => 'featured-3.jpg',
                            'excerpt' => 'Discover the principles of minimalist design and how to create clean, uncluttered spaces that are both modern and functional...'
                        ]
                    ];

                    // Pagination setup
                    $limit = 6;
                    $page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
                    $offset = ($page - 1) * $limit;
                    $total = count($allBlogs);
                    $total_pages = ceil($total / $limit);
                    $blogs = array_slice($allBlogs, $offset, $limit);

                    foreach ($blogs as $blog):
                    ?>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm blog-card rounded-4 overflow-hidden">
                            <div class="position-relative">
                                <img src="assets/images/blogs/<?php echo $blog['image']; ?>" class="card-img-top blog-thumbnail" alt="<?php echo $blog['title']; ?>" style="height:220px; object-fit:cover;">
                                <div class="position-absolute top-0 end-0 bg-primary text-white px-3 py-1 m-3 rounded-pill small fw-bold"><?php echo $blog['category']; ?></div>
                            </div>
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between text-muted small mb-3">
                                    <span><i class="far fa-user me-1"></i> <?php echo $blog['author']; ?></span>
                                    <span><i class="far fa-calendar-alt me-1"></i> <?php echo $blog['date']; ?></span>
                                </div>
                                <h4 class="card-title fw-bold mb-3" style="font-size: 1.25rem;">
                                    <a href="blog-details.php?id=<?php echo $blog['id']; ?>" class="text-dark text-decoration-none"><?php echo $blog['title']; ?></a>
                                </h4>
                                <p class="card-text text-muted"><?php echo $blog['excerpt']; ?></p>
                            </div>
                            <div class="card-footer bg-white border-0 p-4 pt-0">
                                <a href="blog-details.php?id=<?php echo $blog['id']; ?>" class="btn btn-outline-primary stretched-link rounded-pill px-4">Read <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Pagination -->
                <?php if ($total_pages > 1): ?>
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <?php if($page > 1): ?>
                            <li class="page-item"><a class="page-link" href="?page=<?php echo ($page-1); ?>">Previous</a></li>
                        <?php else: ?>
                            <li class="page-item disabled"><span class="page-link">Previous</span></li>
                        <?php endif; ?>

                        <?php for($i = 1; $i <= $total_pages; $i++): ?>
                            <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                                <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                            </li>
                        <?php endfor; ?>

                        <?php if($page < $total_pages): ?>
                            <li class="page-item"><a class="page-link" href="?page=<?php echo ($page+1); ?>">Next</a></li>
                        <?php else: ?>
                            <li class="page-item disabled"><span class="page-link">Next</span></li>
                        <?php endif; ?>
                    </ul>
                </nav>
                <?php endif; ?>
            </div>

            <!-- Right: Render Sidebar Component using Native Path -->
            <div class="col-lg-4">
                <?php include 'components/blog-details/sidebar.php'; ?>
            </div>

        </div>
    </div>
</section>
