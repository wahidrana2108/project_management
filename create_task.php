<?php
include("includes/header.php");

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Assuming you have a tasks table with columns: name, description, deadline, project_id
    $taskName = $_POST["task_name"];
    $taskDescription = $_POST["task_description"];
    $taskDeadline = $_POST["task_deadline"];
    $projectId = $_POST["project_id"];

    $sql = "INSERT INTO tasks (task_name, description, task_deadline, project_id) 
            VALUES ('$taskName', '$taskDescription', '$taskDeadline', '$projectId')";

    if (mysqli_query($conn, $sql)) {
        echo "Task created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Create a New Task</h1>
        <p class="lead">Define your task details and associated project.</p>
    </div>

    <form action="create_task.php" method="post">
        <div class="row">
            <div class="col-md-6">
                <h2>Task Information</h2>
                <div class="form-group">
                    <label for="task-name">Task Name:</label>
                    <input type="text" class="form-control" id="task-name" name="task_name" placeholder="Enter task name" required>
                </div>
                <div class="form-group">
                    <label for="task-description">Description:</label>
                    <textarea class="form-control" id="task-description" name="task_description" rows="3" placeholder="Briefly describe your task"></textarea>
                </div>
                <div class="form-group">
                    <label for="task-deadline">Deadline:</label>
                    <input type="date" class="form-control" id="task-deadline" name="task_deadline">
                </div>
            </div>
            <div class="col-md-6">
                <h2>Associated Project</h2>
                <div class="form-group">
                    <label for="project-id">Project ID:</label>
                    <input type="text" class="form-control" id="project-id" name="project_id" placeholder="Enter project ID">
                </div>
                <button type="submit" class="btn btn-primary">Create Task</button>
            </div>
        </div>
    </form>
</div>

<?php
include("includes/footer.php");
?>
