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
            // Static projects data
            $projects = [
                [
                    'id' => 1,
                    'title' => 'Modern Apartment Renovation',
                    'location' => 'Kundalahalli, Bangalore',
                    'type' => '3 BHK Apartment',
                    'image' => 'project-1.jpg'
                ],
                [
                    'id' => 2,
                    'title' => 'Luxury Villa Interior',
                    'location' => 'Whitefield, Bangalore',
                    'type' => 'Villa',
                    'image' => 'project-2.jpg'
                ],
                [
                    'id' => 3,
                    'title' => 'Commercial Office Space',
                    'location' => 'Koramangala, Bangalore',
                    'type' => 'Office',
                    'image' => 'project-3.jpg'
                ],
                [
                    'id' => 4,
                    'title' => 'Residential Complex Design',
                    'location' => 'Indiranagar, Bangalore',
                    'type' => '2 BHK Apartment',
                    'image' => 'project-1.jpg'
                ],
                [
                    'id' => 5,
                    'title' => 'Bedroom Interior Design',
                    'location' => 'Jayanagar, Bangalore',
                    'type' => 'Master Bedroom',
                    'image' => 'project-2.jpg'
                ],
                [
                    'id' => 6,
                    'title' => 'Kitchen Remodeling',
                    'location' => 'HSR Layout, Bangalore',
                    'type' => 'Modular Kitchen',
                    'image' => 'project-3.jpg'
                ]
            ];

            foreach ($projects as $project):
            ?>
            <div class="col-md-4">
                <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="project-image">
                        <div class="project-featured-image">
                            <figure class="image-anime">
                                <img src="assets/images/project/<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
                            </figure>
                        </div>
                        <div class="project-btn">
                            <a href="project-details.php?id=<?php echo $project['id']; ?>">
                                <img src="assets/images/arrow-white.svg" alt="View">
                            </a>
                        </div>
                    </div>     
                    
                    <div class="project-content">
                        <h2><a href="project-details.php?id=<?php echo $project['id']; ?>"><?php echo $project['title']; ?></a></h2>
                        <br>
                        <h3><?php echo $project['location']; ?></h3>
                        <h3><?php echo $project['type']; ?></h3>
                    </div>
                </div>
            </div>
            <?php 
                endforeach;
            ?>
        </div>

        <div class="container mt-5 text-center">
            <a href="recent-projects.php" class="btn-default">View All Projects</a>
        </div>
    </div>
</div>