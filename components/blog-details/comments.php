<?php
// Handle form submission
$cmt_msg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_comment'])) {
    
    $blog_id = intval($_POST['blog_id']);
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $comment = $conn->real_escape_string($_POST['comment']);

    // Insert as unapproved (is_approved = 0 default)
    $stmt = $conn->prepare("INSERT INTO blog_comments (blog_id, name, email, comment) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $blog_id, $name, $email, $comment);
    
    if ($stmt->execute()) {
        $cmt_msg = "<div class='alert alert-success mt-4'>Thank you! Your comment is awaiting moderation before it goes live.</div>";
    } else {
        $cmt_msg = "<div class='alert alert-danger mt-4'>Sorry, there was an error submitting your comment.</div>";
    }
    $stmt->close();
}
?>

<div class="blog-comments mt-5">
    <h3 class="fw-bold mb-4 font-outfit border-bottom pb-2">Discussion Thread</h3>
    
    <!-- Render Approved Comments -->
    <div class="comments-list mb-5">
        <?php
        $cid = $blog['id'];
        $fetch_cmts = "SELECT * FROM blog_comments WHERE blog_id = $cid AND is_approved = 1 ORDER BY created_at ASC";
        $cmts_res = $conn->query($fetch_cmts);
        
        if ($cmts_res->num_rows > 0) {
            while($c = $cmts_res->fetch_assoc()) {
                $cdate = date('F j, Y \a\t g:i A', strtotime($c['created_at']));
                $avatar_letter = strtoupper(substr($c['name'], 0, 1));
                
                echo '
                <div class="d-flex mb-4 pb-4 border-bottom">
                    <div class="flex-shrink-0">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold fs-5" style="width: 50px; height: 50px;">
                            '.$avatar_letter.'
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="mb-1 fw-bold text-dark">'.htmlspecialchars($c['name']).' <small class="text-muted fw-normal ms-2" style="font-size: 0.8rem;">'.$cdate.'</small></h6>
                        <p class="text-secondary mb-0">'.nl2br(htmlspecialchars($c['comment'])).'</p>
                    </div>
                </div>';
            }
        } else {
            echo '<p class="text-muted fst-italic">Be the first to leave a comment on this post!</p>';
        }
        ?>
    </div>

    <!-- Comment Form -->
    <div class="card bg-light border-0 rounded-4 shadow-sm p-4 p-md-5">
        <h4 class="fw-bold font-outfit mb-2">Leave a Reply</h4>
        <p class="text-muted small mb-4">Your email address will not be published. Required fields are marked *</p>
        
        <form action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]); ?>" method="POST">
            <input type="hidden" name="blog_id" value="<?php echo $blog['id']; ?>">
            
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-bold text-secondary small">Full Name *</label>
                    <input type="text" name="name" class="form-control form-control-lg bg-white" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold text-secondary small">Email Address *</label>
                    <input type="email" name="email" class="form-control form-control-lg bg-white" required>
                </div>
                <div class="col-12">
                    <label class="form-label fw-bold text-secondary small">Your Comment *</label>
                    <textarea name="comment" class="form-control bg-white" rows="5" required></textarea>
                </div>
                <div class="col-12 mt-4">
                    <button type="submit" name="submit_comment" class="btn btn-primary btn-lg rounded-pill px-5 fw-bold shadow-sm">Post Comment</button>
                </div>
            </div>
        </form>
        <?php echo $cmt_msg; ?>
    </div>
</div>
