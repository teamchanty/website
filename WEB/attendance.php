<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $class = $_POST['class'];
    $year = $_POST['year'];
    $semester = $_POST['semester'];
    $email = $_POST['email'];
    $status= $_POST['status'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background-color: #1a1a1a;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4 text-white">Attendance Details</h2>
        <div class="card" style="background-color: #000000; color: #ffffff; border: 1px solid #2a5298;">
            <div class="card-body">
                <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
                <p><strong>Gender:</strong> <?php echo htmlspecialchars($gender); ?></p>
                <p><strong>Class:</strong> <?php echo htmlspecialchars($class); ?></p>
                <p><strong>Year:</strong> <?php echo htmlspecialchars($year); ?></p>
                <p><strong>Semester:</strong> <?php echo htmlspecialchars($semester); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
                <p><strong>Status:</strong> <?php echo htmlspecialchars($status); ?></p>
            </div>
        </div>
        <div class="text-center mt-3">
            <a href="index.php" class="btn btn-outline-light">Back to Form</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <br> <br>  <br> <br> <br>
    <br>
    <br>
    <br>
    <footer class="text-center py-4 mt-4 text-white" style="background: linear-gradient(to right, #1e3c72, #2a5298);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="mb-3">Team Chanty</h5>
                    <p class="mb-2"><i class="fas fa-code"></i> Developed with <i class="fas fa-heart text-danger"></i> by Team Chanty</p>
                    <p class="mb-0">&copy; <?php echo date("Y"); ?> Team Chanty. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
<?php
} else {
    header("Location: index.php");
    exit();
}
?>
