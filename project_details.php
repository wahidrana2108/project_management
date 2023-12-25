<!-- navbar starting -->
<?php
    include("includes/header.php")
?>
<!-- navbar end -->
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Project Details</h1>
            <p class="lead">View and manage project information.</p>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h2>Project Overview</h2>
                <p>Project Name: <span id="project-name">Placeholder Project</span></p>
                <p>Description: <span id="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></p>
                <p>Deadline: <span id="project-deadline">December 31, 2023</span></p>
                <p>Budget: <span id="project-budget">$10,000</span></p>
                <p>Status: <span id="project-status">In Progress</span></p>
            </div>
            <div class="col-md-4">
                <h2>Project Team</h2>
                <ul id="project-team">
                    <li>John Doe (Project Manager)</li>
                    <li>Jane Smith (Developer)</li>
                    <li>Peter Brown (Designer)</li>
                </ul>
            </div>
        </div>

        <h2>Tasks</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Task Name</th>
                    <th>Assigned To</th>
                    <th>Status</th>
                    <th>Due Date</th>
                </tr>
            </thead>
            <tbody id="task-list">
                <tr>
                    <td>Task 1</td>
                    <td>Jane Smith</td>
                    <td>In Progress</td>
                    <td>2023-12-28</td>
                </tr>
                <tr>
                    <td>Task 2</td>
                    <td>Peter Brown</td>
                    <td>Completed</td>
                    <td>2023-12-25</td>
                </tr>
            </tbody>
        </table>

        <div class="btn-group">
            <a href="#" class="btn btn-primary">Edit Project</a>
            <a href="#" class="btn btn-success">Add Task</a>
        </div>
    </div>

<!-- footer starting -->
<?php
    include("includes/footer.php")
?>
<!-- footer end -->
