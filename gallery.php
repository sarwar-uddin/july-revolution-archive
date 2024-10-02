<?php
$pageTitle = "Gallery";
include('partials/header.php');
?>

<div class="container my-5">
    <main>
        <section class="text-center">
            <h2 class="mb-5">July Revolution Media Gallery</h2>
            <p class="lead mb-4">Explore photos, videos, and other media that document the events of the July Revolution.</p>
        </section>

        <!-- Gallery Grid -->
        <section class="row">
            <!-- Media Item 1: Image -->
            <div class="col-md-4 mb-4">
                <a href="assets/images/image1.jpeg" target="_blank" class="text-decoration-none">
                    <div class="card shadow-sm">
                        <img src="assets/images/image1.jpeg" class="card-img-top" alt="Event Image 1">
                        <div class="card-body">
                            <p class="card-text">People cheering after Hasina fled.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Media Item 2: Video -->
            <div class="col-md-4 mb-4">
                <a href="assets/videos/video1.mp4" target="_blank" class="text-decoration-none">
                    <div class="card shadow-sm">
                        <div class="embed-responsive embed-responsive-16by9">
                            <video controls class="embed-responsive-item">
                                <source src="assets/videos/video1.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Footage of people chasing the Police</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Media Item 3: Image -->
            <div class="col-md-4 mb-4">
                <a href="assets/images/image2.jpeg" target="_blank" class="text-decoration-none">
                    <div class="card shadow-sm">
                        <img src="assets/images/image2.jpeg" class="card-img-top" alt="Event Image 2">
                        <div class="card-body">
                            <p class="card-text">Protesters at Central Shaheed Minar</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>
    </main>
</div>

<?php include('partials/footer.php'); ?>
