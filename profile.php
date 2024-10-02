<?php
$pageTitle = "User Profile";  
include('partials/header.php'); 
?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">User Profile</h2>
            
            <!-- Profile Picture -->
            <div class="text-center mb-4">
                <img src="assets/images/profile_picture.jpg" class="img-fluid rounded-circle" alt="Profile Picture" style="width: 150px; height: 150px; object-fit: cover;">
            </div>

            <!-- User Information Table -->
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">Full Name</th>
                        <td>John Doe</td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td>johndoe@example.com</td>
                    </tr>
                    <tr>
                        <th scope="row">Member Since</th>
                        <td>January 15, 2023</td>
                    </tr>
                    <tr>
                        <th scope="row">Bio</th>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non dolor finibus, interdum mi id, cursus massa.</td>
                    </tr>
                </tbody>
            </table>

            <!-- Edit Profile Button -->
            <div class="text-center mt-4">
                <a href="edit-profile.php" class="btn btn-primary">Edit Profile</a>
            </div>
        </div>
    </div>
</div>

<?php include('partials/footer.php'); ?>
