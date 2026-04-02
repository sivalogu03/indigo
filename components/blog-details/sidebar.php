<div class="blog-sidebar sticky-top" style="top: 100px; z-index: 10;">
    
    <!-- Search Box -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">
        <div class="card-body p-4">
            <h5 class="font-outfit fw-bold mb-3 border-bottom pb-2">Search Blogs</h5>
            <form action="blog.php" method="GET" class="input-group">
                <input type="text" name="search" class="form-control text-muted" placeholder="Type here..." required>
                <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>

    <!-- Categories Widget -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">
        <div class="card-body p-4">
            <h5 class="font-outfit fw-bold mb-3 border-bottom pb-2">Categories</h5>
            <ul class="list-unstyled mb-0">
                <?php
                $categories = [
                    ['id' => 1, 'name' => 'Design Tips'],
                    ['id' => 2, 'name' => 'Trends'],
                    ['id' => 3, 'name' => 'Solutions'],
                    ['id' => 4, 'name' => 'Styles'],
                    ['id' => 5, 'name' => 'Eco-Friendly']
                ];
                
                foreach ($categories as $c) {
                    echo '<li class="mb-2"><a href="blog.php?category='.$c['id'].'" class="text-decoration-none text-secondary d-flex justify-content-between align-items-center"><span><i class="fas fa-angle-right me-2 text-primary"></i>'.htmlspecialchars($c['name']).'</span></a></li>';
                }
                ?>
            </ul>
        </div>
    </div>

    <!-- Recent Posts Widget -->
    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-4">
            <h5 class="font-outfit fw-bold mb-3 border-bottom pb-2">Recent Posts</h5>
            <div class="recent-posts-list">
                <?php
                $current_id = isset($blog['id']) ? (int)$blog['id'] : 0;
                $recent = [];
                
                foreach ($all_blogs as $b) {
                    if ($b['id'] != $current_id) {
                        $recent[] = $b;
                    }
                }
                
                usort($recent, function($a, $b) {
                    return strtotime($b['publish_date']) - strtotime($a['publish_date']);
                });
                
                $recent = array_slice($recent, 0, 3);
                
                if (!empty($recent)) {
                    foreach ($recent as $r) {
                        $rdate = date('M d, Y', strtotime($r['publish_date']));
                        echo '
                        <div class="d-flex mb-3 align-items-center">
                            <img src="assets/images/blogs/'.$r['image'].'" alt="thumb" class="rounded-3 me-3" style="width: 70px; height: 70px; object-fit: cover;">
                            <div>
                                <h6 class="mb-1 lh-sm"><a href="blog-details.php?id='.$r['id'].'" class="text-dark text-decoration-none fw-bold" style="font-size: 0.95rem;">'.htmlspecialchars($r['title']).'</a></h6>
                                <small class="text-muted">'.$rdate.'</small>
                            </div>
                        </div>';
                    }
                } else {
                    echo '<p class="text-muted mb-0">No recent posts available.</p>';
                }
                ?>
            </div>
        </div>
    </div>

</div>
