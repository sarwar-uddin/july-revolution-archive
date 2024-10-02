<?php
$pageTitle = "Search";
include('partials/header.php'); 
?>

<div class="container my-5">
    <main>
        <section class="text-center">
            <h2 class="mb-4">Search for Events</h2>
            <p class="lead mb-4">Enter keywords to find articles, images, or videos related to the July Revolution.</p>

            <!-- Search Form -->
            <form class="d-flex justify-content-center mb-4" action="search-results.php" method="GET">
                <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search" name="query" required>
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
        </section>

        <section>
            <h3 class="mb-4 text-center">Search Results</h3>
            
            <!-- Sample Search Results (Dynamically generate this section based on actual search results) -->
            <div class="list-group">
                <a href="/article.php?id=1" class="list-group-item list-group-item-action">
                    <h5 class="mb-1">Example Result Title 1</h5>
                    <p class="mb-1">Description for the first result related to the search.</p>
                    <small>Posted on July 5, 2023</small>
                </a>

                <a href="/article.php?id=2" class="list-group-item list-group-item-action">
                    <h5 class="mb-1">Example Result Title 2</h5>
                    <p class="mb-1">Description for the second result related to the search.</p>
                    <small>Posted on July 6, 2023</small>
                </a>
                
                <!-- Add more search results here dynamically based on the search query -->
            </div>
        </section>
    </main>
</div>

<?php include('partials/footer.php'); ?>
