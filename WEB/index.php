<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Attendance Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header text-center pt-2">
        <h1>Student Attendance Form</h1>
    </div>
    <div class="container">
        <form action="attendance.php" method="post" class="p-4 rounded" style="background-color: #000000; color: #ffffff;">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" class="form-control bg-dark text-white" required>
            </div>
            <div class="form-group">
                <label>Gender</label>
                <div class="form-check">
                    <input type="radio" name="gender" value="Male" class="form-check-input" required>
                    <label class="form-check-label">Male</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" value="Female" class="form-check-input">
                    <label class="form-check-label">Female</label>
                </div>
            </div>
            <div class="form-group">
                <label for="class">Class</label>
                <input type="text" name="class" class="form-control bg-dark text-white" required>
            </div>
            <div class="form-group">
                <label for="year">Year</label>
                <select name="year" class="form-control bg-dark text-white" required>
                    <option value="">Select Year</option>
                    <option value="1">First Year</option>
                    <option value="2">Second Year</option>
                    <option value="3">Third Year</option>
                    <option value="4">Fourth Year</option>
                </select>
            </div>
            <div class="form-group">
                <label for="semester">Semester</label>
                <select name="semester" class="form-control bg-dark text-white" required>
                    <option value="">Select Semester</option>
                    <option value="1">First</option>
                    <option value="2">Second</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control bg-dark text-white" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control bg-dark text-white" required>
                    <option value="">Select Status</option>
                    <option value="present">Present</option>
                    <option value="leave">Leave</option>
                    <option value="absent">Absent</option>
                    <option value="late">Late</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success btn-block">Submit</button>
        </form>
    </div>
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
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>