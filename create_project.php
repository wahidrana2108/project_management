<?php
include("includes/header.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $projectName = $_POST["project_name"];
    $projectDescription = $_POST["project_description"];
    $projectDeadline = $_POST["project_deadline"];
    $projectBudget = $_POST["budget"];
    $projectVisibility = $_POST["project_visibility"];
    $teamId = $_POST["team_id"];

    $sql = "INSERT INTO projects (name, description, deadline, budget, team_id, visibility) 
            VALUES ('$projectName', '$projectDescription', '$projectDeadline', '$projectBudget', '$teamId', '$projectVisibility')";

    if (mysqli_query($conn, $sql)) {
        echo "Project created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Create a New Project</h1>
        <p class="lead">Get started by defining your project details and team.</p>
    </div>

    <form action="create_project.php" method="post">
        <div class="row">
            <div class="col-md-6">
                <h2>Project Information</h2>
                <div class="form-group">
                    <label for="project-name">Project Name:</label>
                    <input type="text" class="form-control" id="project-name" name="project_name" placeholder="Enter project name" required>
                </div>
                <div class="form-group">
                    <label for="project-description">Description:</label>
                    <textarea class="form-control" id="project-description" name="project_description" rows="3" placeholder="Briefly describe your project"></textarea>
                </div>
                <div class="form-group">
                    <label for="project-deadline">Deadline:</label>
                    <input type="date" class="form-control" id="project-deadline" name="project_deadline">
                </div>
                <div class="form-group">
                    <label for="project-budget">Budget:</label>
                    <input type="text" class="form-control" id="project-budget" name="budget" placeholder="Enter project budget">
                </div>
            </div>
            <div class="col-md-6">
                <h2>Team and Visibility</h2>
                <div class="form-group">
                    <label for="project-visibility">Visibility:</label>
                    <select class="form-control" id="project-visibility" name="project_visibility">
                        <option value="public">Public</option>
                        <option value="private">Private</option>
                        <option value="team">Team Only</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="team-id">Team ID:</label>
                    <input type="text" class="form-control" id="team-id" name="team_id" placeholder="Enter team ID">
                </div>
                <button type="submit" class="btn btn-primary">Create Project</button>
            </div>
        </div>
    </form>
</div>

<?php
include("includes/footer.php");
?>