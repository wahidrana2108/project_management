<!-- navbar starting -->
<?php
    include("includes/header.php");

?>
<!-- navbar end -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1 class="display-4">Active Projects</h1>
                    <p class="lead">All the projects at a single place.</p>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Project X</h5>
                        <p class="card-text">This is a sample project description.</p>
                        <div class="progress mb-2">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 5%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                        </div>
                        <p class="text-muted">Status: In Progress</p>
                        <a href="project_details.php" class="btn btn-primary">View Project Details</a>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Project Y</h5>
                        <p class="card-text">This is another sample project description.</p>
                        <div class="progress mb-2">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>
                        <p class="text-muted">Status: On Hold</p>
                        <a href="project-details.html" class="btn btn-primary">View Project Details</a>
                    </div>
                </div>

                <div class="text-right">
                    <button type="button" class="btn btn-outline-secondary">Filter</button>
                    <button type="button" class="btn btn-outline-secondary">Sort</button>
                </div>
            </div>
        </div>
    </div>

<!-- footer starting -->
<?php
    include("includes/footer.php")
?>
<!-- footer end -->
