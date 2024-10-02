<?php
$pageTitle = "Home";
include('partials/header.php');
?>

<div class="container my-5">
    <main class="text-center">
        <img src="/assets/images/abu_sayed_by_kousik_sarkar.png" alt="Logo">
        <h1 class="mb-4">Welcome to Freedom's Archive</h1>
        <p class="lead">Explore the history of the July Revolution and discover key events that shaped the movement.</p>
    </main>

    <section class="my-5">
        <h2 class="styled-heading mb-4">Featured Articles</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <a href="article.php?id=1" class="text-decoration-none">
                    <div class="card shadow-sm">
                        <img src="assets/images/august5c.JPG" class="card-img-top" alt="Featured Article 1">
                        <div class="card-body">
                            <h5 class="card-title">The Impact of the July Revolution</h5>
                            <p class="card-text">A comprehensive look at how the revolution changed society.</p>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col-md-4 mb-4">
                <a href="article.php?id=2" class="text-decoration-none">
                    <div class="card shadow-sm">
                        <img src="assets/images/Abu-Sayed-scaled.jpeg" class="card-img-top" alt="Featured Article 2">
                        <div class="card-body">
                            <h5 class="card-title">Key Figures in the Revolution</h5>
                            <p class="card-text">Meet the leaders who shaped the July Revolution.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 mb-4">
                <a href="article.php?id=3" class="text-decoration-none">
                    <div class="card shadow-sm">
                        <img src="assets/images/timeline.jpg" class="card-img-top" alt="Featured Article 3">
                        <div class="card-body">
                            <h5 class="card-title">Timeline of Events</h5>
                            <p class="card-text">A detailed timeline of the events leading up to the revolution.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="my-5">
        <h2 class="styled-heading mb-4">Gallery Preview</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <img src="assets/images/One_point_movement_of_Bangladesh_in_Shaheed_Minar_16.jpeg" class="img-fluid" alt="Gallery Image 1">
            </div>
            <div class="col-md-4 mb-4">
                <img src="assets/images/image2.jpeg" class="img-fluid" alt="Gallery Image 2">
            </div>
            <div class="col-md-4 mb-4">
                <img src="assets/images/1620px-One_point_movement_of_Bangladesh_in_DU_33.jpeg" class="img-fluid" alt="Gallery Image 3">
            </div>
        </div>
    </section>

    <section class="my-5">
        <h2 class="styled-heading mb-4">Contribute Your Story</h2>
        <p class="lead">Have a story, image, or video related to the July Revolution? We want to hear from you!</p>
        <a href="/submit-content.php" class="btn btn-secondary btn-lg">Submit Your Content</a>
    </section>

    <section class="my-5">
        <h2 class="styled-heading mb-4">Latest Updates</h2>
        <div class="list-group">
            <a href="article.php?id=4" class="list-group-item list-group-item-action">
                <h5 class="mb-1">New Insights on the Revolution</h5>
                <small>Posted on July 20, 2023</small>
            </a>
            <a href="article.php?id=5" class="list-group-item list-group-item-action">
                <h5 class="mb-1">Community Event: Remembering the Revolution</h5>
                <small>Posted on July 18, 2023</small>
            </a>
        </div>
    </section>
</div>

<?php include('partials/footer.php'); ?>
