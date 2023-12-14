<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <?php
				include "./config/database.php";
               $sel = mysqli_query($conn,"SELECT * FROM image");

			   if($row = mysqli_fetch_assoc($sel)){
				?>
<!-- <img src="../img/<?php echo $row['file']?>" > -->
<link rel="shortcut icon" type="x-con" href="./img/<?php  echo $row['file']?>">
				<?php
			   }

				?>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <div class="form-container">
        <h2 id="form-title">Faculty Form</h2>
        <form id="faculty-form" action="./controller/class.controller.php" method="post">
            <div class="form-group">
                <label for="admin-username">Username:</label>
                <input type="text" id="admin-username" name="username" required>
            </div>
            <div class="form-group">
                <label for="admin-password">Password:</label>
                <input type="password" id="admin-password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit" name="facultyform">Login as Faculty</button>
            </div>
            
        </form>
       

        <form id="student-form" action="./controller/class.controller.php" method="post" style="display:none;">
            <div class="form-group">
                <label for="student-username">Username:</label>
                <input type="text" id="student-username" name="username" required>
            </div>
            <div class="form-group">
                <label for="student-password">Password:</label>
                <input type="password" id="student-password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit" name="studentform">Login as Student</button>
            </div>
        </form>

        <div class="form-toggle">
            <button onclick="toggleForm()">Switch Role</button>
        </div>
    </div>

    <script>
        function toggleForm() {
            var adminForm = document.getElementById("faculty-form");
            var studentForm = document.getElementById("student-form");
            var formTitle = document.getElementById("form-title");

            if (adminForm.style.display === "none") {
                adminForm.style.display = "block";
                studentForm.style.display = "none";
                formTitle.innerText = "Faculty Form";
            } else {
                adminForm.style.display = "none";
                studentForm.style.display = "block";
                formTitle.innerText = "Student Form";
            }
        }
    </script>
</body>
</html>
