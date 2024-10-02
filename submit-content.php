<?php
$pageTitle = "Submit Content";  
include('partials/header.php'); 
?>

<div class="container my-5">
    <main>
        <section class="text-center">
            <h2 class="mb-4">Submit Your Content</h2>
            <p class="lead mb-4">Share your articles, images, or videos related to the July Revolution.</p>

            <!-- Submission Form -->
            <form action="/submit-handler.php" method="POST" enctype="multipart/form-data" class="col-md-6 mx-auto">
                <div class="mb-3">
                    <label for="title" class="form-label">Content Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4" placeholder="Provide a brief description" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="file" class="form-label">Upload Media (Images/Videos)</label>
                    <input type="file" class="form-control" id="file" name="file" accept="image/*,video/*" required>
                </div>

                <button type="submit" class="btn btn-primary btn-lg w-100">Submit</button>
            </form>
        </section>
    </main>
</div>

<?php include('partials/footer.php'); ?>
