<?php
    include("includes/header.php");
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }

    $sql = "SELECT * FROM projects";
    $result = mysqli_query($conn, $sql);
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">Active Projects</h1>
                <p class="lead">All the projects at a single place.</p>
            </div>

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name']; ?></h5>
                        <p class="card-text"><?php echo $row['description']; ?></p>
                        <div class="progress mb-2">
                            <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $row['percentage_completed']; ?>%" aria-valuenow="<?php echo $row['percentage_completed']; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $row['percentage_completed']; ?>%</div>
                        </div>
                        <p class="text-muted">Status: <?php echo $row['status']; ?></p>
                        <a href="project_details.php?id=<?php echo $row['project_id']; ?>" class="btn btn-primary">View Project Details</a>
                    </div>
                </div>
            <?php
            }
            ?>

            <div class="text-right">
                <button type="button" class="btn btn-outline-secondary">Filter</button>
                <button type="button" class="btn btn-outline-secondary">Sort</button>
            </div>
        </div>
    </div>
</div>

<?php
    include("includes/footer.php");
?>
