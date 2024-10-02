<?php
$pageTitle = "All Articles";  
include('partials/header.php'); 
?>

<div class="container my-5">
    <main>
        <h2 class="text-center mb-4">All Articles</h2>
        
        <!-- Sample Article List -->
        <div class="list-group">
            <a href="article.php" class="list-group-item list-group-item-action">
                <h5 class="mb-1">The July Revolution: A Turning Point</h5>
                <p class="mb-1">An in-depth look at the events that shaped the revolution.</p>
                <small>Published on August 5, 2024</small>
            </a>
            <a href="article.php?id=2" class="list-group-item list-group-item-action">
                <h5 class="mb-1">Key Figures of the July Revolution</h5>
                <p class="mb-1">Exploring the leaders who played pivotal roles during the movement.</p>
                <small>Published on August 10, 2024</small>
            </a>
            <a href="article.php?id=3" class="list-group-item list-group-item-action">
                <h5 class="mb-1">The Impact of the July Revolution</h5>
                <p class="mb-1">Analyzing the aftermath and legacy of the revolution.</p>
                <small>Published on August 15, 2024</small>
            </a>

        </div>
    </main>
</div>

<?php include('partials/footer.php'); ?>
