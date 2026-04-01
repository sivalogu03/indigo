<section class="py-5 bg-light">
    <div class="container">
        
        <div class="row g-5">
            
            <!-- Left: Grid Layout (col-lg-8) -->
            <div class="col-lg-8">
                <div class="row g-4 mb-5">
                    <?php
                    // Safe db connection path
                    include 'admin/includes/db_connect.php'; 

                    // Search or Category Filtering functionality automatically handled across the scope
                    $whereClause = "WHERE b.published_status = 'published' AND b.publish_date <= NOW()";
                    if(isset($_GET['search']) && !empty($_GET['search'])) {
                        $search = $conn->real_escape_string($_GET['search']);
                        $whereClause .= " AND (b.title LIKE '%$search%' OR b.content LIKE '%$search%')";
                    }
                    if(isset($_GET['category']) && intval($_GET['category']) > 0) {
                        $cat_filter = intval($_GET['category']);
                        $whereClause .= " AND b.category_id = $cat_filter";
                    }

                    // Pagination setup
                    $limit = 6;
                    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                    $offset = ($page - 1) * $limit;

                    // Query active blogs
                    $sql = "SELECT b.*, c.name as category_name 
                            FROM blogs b 
                            LEFT JOIN categories c ON b.category_id = c.id 
                            $whereClause 
                            ORDER BY b.publish_date DESC 
                            LIMIT $limit OFFSET $offset";
                            
                    $result = $conn->query($sql);

                    if ($result && $result->num_rows > 0) {
                        while($blog = $result->fetch_assoc()) {
                            $img_path = (!empty($blog['upload_image'])) ? 'assets/images/blogs/'.$blog['upload_image'] : 'assets/images/placeholder.jpg';
                            $alt = (!empty($blog['image_alt_text'])) ? htmlspecialchars($blog['image_alt_text']) : htmlspecialchars($blog['title']);
                            $date = date('M d, Y', strtotime($blog['publish_date']));
                            $cat = !empty($blog['category_name']) ? htmlspecialchars($blog['category_name']) : 'Insight';
                            
                            $clean_content = strip_tags($blog['content']);
                            $excerpt = substr($clean_content, 0, 100) . (strlen($clean_content) > 100 ? '...' : '');

                            echo '
                            <div class="col-md-6 mb-4">
                                <div class="card h-100 border-0 shadow-sm blog-card rounded-4 overflow-hidden">
                                    <div class="position-relative">
                                        <img src="'.$img_path.'" class="card-img-top blog-thumbnail" alt="'.$alt.'" style="height:220px; object-fit:cover;">
                                        <div class="position-absolute top-0 end-0 bg-primary text-white px-3 py-1 m-3 rounded-pill small fw-bold">'.$cat.'</div>
                                    </div>
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between text-muted small mb-3">
                                            <span><i class="far fa-user me-1"></i> '.htmlspecialchars($blog['author']).'</span>
                                            <span><i class="far fa-calendar-alt me-1"></i> '.$date.'</span>
                                        </div>
                                        <h4 class="card-title fw-bold mb-3" style="font-size: 1.25rem;">
                                            <a href="blog-details.php?slug='.htmlspecialchars($blog['slug']).'" class="text-dark text-decoration-none">'.htmlspecialchars($blog['title']).'</a>
                                        </h4>
                                        <p class="card-text text-muted">'.$excerpt.'</p>
                                    </div>
                                    <div class="card-footer bg-white border-0 p-4 pt-0">
                                        <a href="blog-details.php?slug='.htmlspecialchars($blog['slug']).'" class="btn btn-outline-primary stretched-link rounded-pill px-4">Read <i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>';
                        }
                    } else {
                        echo '<div class="col-12 text-center py-5">
                                <h4 class="text-muted">No matching articles found.</h4>
                              </div>';
                    }
                    ?>
                </div>

                <!-- Pagination Engine -->
                <?php
                $count_sql = "SELECT COUNT(id) FROM blogs b $whereClause";
                $count_res = $conn->query($count_sql);
                $total_rows = $count_res->fetch_row()[0];
                $total_pages = ceil($total_rows / $limit);

                if ($total_pages > 1) {
                    // Extract query parameters correctly to persist category and search filters over pagination
                    $params = $_GET;
                    unset($params['page']);
                    $queryString = !empty($params) ? '&' . http_build_query($params) : '';

                    echo '<nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">';
                    
                    if($page > 1) {
                        echo '<li class="page-item"><a class="page-link" href="?page='.($page-1).$queryString.'">Previous</a></li>';
                    } else {
                        echo '<li class="page-item disabled"><span class="page-link">Previous</span></li>';
                    }

                    for($i = 1; $i <= $total_pages; $i++) {
                        $active = ($i == $page) ? 'active' : '';
                        echo '<li class="page-item '.$active.'"><a class="page-link" href="?page='.$i.$queryString.'">'.$i.'</a></li>';
                    }

                    if($page < $total_pages) {
                        echo '<li class="page-item"><a class="page-link" href="?page='.($page+1).$queryString.'">Next</a></li>';
                    } else {
                        echo '<li class="page-item disabled"><span class="page-link">Next</span></li>';
                    }

                    echo '  </ul>
                          </nav>';
                }
                ?>
            </div>

            <!-- Right: Render Sidebar Component using Native Path -->
            <div class="col-lg-4">
                <?php include 'components/blog-details/sidebar.php'; ?>
            </div>

        </div>
    </div>
</section>
