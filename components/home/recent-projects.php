<div class="our-project py-5">
    <div class="container">
        <div class="row section-row align-items-center mb-4">
            <div class="col-lg-8">
                <div class="section-title">
                    <h3 class="wow fadeInUp">Indigo Interiors</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Recent Complete <span>Project</span></h2>
                </div>
            </div>
        </div>

        <div class="row project-item-boxes g-4">
            <?php
            include 'admin/includes/db_connect.php'; 
            
            // Fetch latest 6 projects from database
            $result = $conn->query("SELECT * FROM projects ORDER BY created_at DESC LIMIT 6");

            if ($result->num_rows > 0):
                while($row = $result->fetch_assoc()): 
            ?>
            <div class="col-md-4">
                <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="project-image">
                        <div class="project-featured-image">
                            <figure class="image-anime">
                                <img src="assets/images/projects/<?php echo $row['banner_image']; ?>" alt="Project Image">
                            </figure>
                        </div>
                        <div class="project-btn">
                            <a href="project-detail.php?id=<?php echo $row['id']; ?>">
                                <img src="assets/images/arrow-white.svg" alt="View">
                            </a>
                        </div>
                    </div>     
                    
                    <div class="project-content">
                        <h2><a href="project-detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['project_title']; ?></a></h2>
                        <br>
                        <h3><?php echo $row['project_location']; ?></h3>
                        <h3><?php echo $row['unit_type']; ?></h3>
                    </div>
                </div>
            </div>
            <?php 
                endwhile; 
            else:
                echo "<p class='text-center'>No projects found.</p>";
            endif; 
            ?>
        </div>

        <div class="container mt-5 text-center">
            <a href="recent-projects.php" class="btn-default">View All Projects</a>
        </div>
    </div>
</div>