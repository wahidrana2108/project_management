<?php
    include("includes/header.php");

    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }

    $projectId = isset($_GET['id']) ? $_GET['id'] : null;

    if (!$projectId || !is_numeric($projectId)) {
        die("Invalid project ID");
    }

    $projectSql = "SELECT * FROM projects WHERE project_id = $projectId";
    $projectResult = mysqli_query($conn, $projectSql);

    if ($projectResult) {
        $projectData = mysqli_fetch_assoc($projectResult);
    } else {
        die("Error fetching project details: " . mysqli_error($conn));
    }

    $teamSql = "SELECT * FROM team_members WHERE project_id = $projectId";
    $teamResult = mysqli_query($conn, $teamSql);

    if ($teamResult) {
        $teamMembers = array();
        while ($row = mysqli_fetch_assoc($teamResult)) {
            $teamMembers[] = $row['member_name'];
        }
    } else {
        die("Error fetching team members: " . mysqli_error($conn));
    }

    $taskSql = "SELECT * FROM tasks WHERE project_id = $projectId";
    $taskResult = mysqli_query($conn, $taskSql);

    if ($taskResult) {
        $tasks = array();
        while ($row = mysqli_fetch_assoc($taskResult)) {
            $tasks[] = $row;
        }
    } else {
        die("Error fetching tasks: " . mysqli_error($conn));
    }
?>

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Project Details</h1>
        <p class="lead">View and manage project information.</p>
    </div>

    <div class="row">
        <div class="col-md-8">
            <h2>Project Overview</h2>
            <p>Project Name: <span id="project-name"><?php echo $projectData['name']; ?></span></p>
            <p>Description: <span id="project-description"><?php echo $projectData['description']; ?></span></p>
            <p>Deadline: <span id="project-deadline"><?php echo $projectData['deadline']; ?></span></p>
            <p>Budget: <span id="project-budget"><?php echo $projectData['budget']; ?></span></p>
            <p>Status: <span id="project-status"><?php echo $projectData['status']; ?></span></p>
        </div>
        <div class="col-md-4">
            <h2>Project Team</h2>
            <ul id="project-team">
                <?php foreach ($teamMembers as $member) : ?>
                    <li><?php echo $member; ?></li>
                <?php endforeach; ?>
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
            <?php foreach ($tasks as $task) : ?>
                <tr>
                    <td><?php echo $task['task_name']; ?></td>
                    <td><?php echo $task['assigned_to']; ?></td>
                    <td><?php echo $task['status']; ?></td>
                    <td><?php echo $task['due_date']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="btn-group">
        <a href="#" class="btn btn-primary">Edit Project</a>
        <a href="#" class="btn btn-success">Add Task</a>
    </div>
</div>

<?php
    include("includes/footer.php");
?>
