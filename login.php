<?php
$pageTitle = "Login"; 
include('partials/header.php');
?>

<main>
    <section>
        <h2>Login to Your Account</h2>
        <form action="login-handler.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
    </section>
</main>

<?php include('partials/footer.php'); ?>
