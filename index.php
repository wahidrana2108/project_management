<?php
    include("includes/header.php")
?>


<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Welcome to Project Management!</h1>
        <p class="lead">Organize your projects, tasks, and teams effectively.</p>
        <a class="btn btn-primary btn-lg" href="create_project.php">Create a Project</a>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h2>Key Features</h2>
            <ul>
                <li>Project creation and management</li>
                <li>Task assignment and tracking</li>
                <li>Collaboration tools</li>
                <li>Progress tracking and reporting</li>
                <li>File sharing and version control</li>
            </ul>
        </div>

        <div class="col-md-6">
            <h2>Get Started</h2>
            
            <?php
                if(!isset($_SESSION['username'])){
                    echo "<p>Sign in to begin monitor your projects, or contact the administrator for a manager account.</p>";
                    echo "<a class='btn btn-success' href='login.php'>Log In</a>";
                }
                else{
                    echo "<p>Ensure that you log out before closing the tab for security purposes.</p>";
                    echo "<a class='btn btn-secondary' href='logout.php'>Log Out</a>";
                }
            ?>
            
        </div>
    </div>
</div>


<?php
    include("includes/footer.php")
?>
