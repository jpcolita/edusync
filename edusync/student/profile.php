<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<?php
				include "../config/database.php";
               $sel = mysqli_query($conn,"SELECT * FROM image");

			   if($row = mysqli_fetch_assoc($sel)){
				?>
<!-- <img src="../img/<?php echo $row['file']?>" > -->
<link rel="shortcut icon" type="x-con" href="../img/<?php  echo $row['file']?>">
				<?php
			   }

				?>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/student.css">
	<link rel="stylesheet" href="../css/settings.css">
	
</head>
<body>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">EDU <b>SYNC</b>
			<label for="checkbox">
				<i id="navbtn"  class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		
				
	<div class="set">
	<div class="dropdown">
    <i class="fa fa-cog" aria-hidden="true" id="set"></i>
    <div class="dropdown-content">
        <a href="edit.profile.php">Edit Profile</a>
    </div>
</div>
		
	</div>
		
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<!-- <img src="img/user.jpg"> -->
				<?php
			
				

			   session_start();
              if(isset($_SESSION["studentsusername"])){
                 $username = $_SESSION["studentsusername"];
                     
                    $qry ="SELECT * FROM students WHERE id='$username'";

					$result = mysqli_query($conn,$qry);

					if($result->num_rows > 0){
                      $row = mysqli_fetch_assoc($result);

					  ?>
                      <img src="../img/<?php echo $row['file']?>" >
					  <?php
					}
				
				 
			  }
			

				?>
			
				<?php
				include "../config/database.php";
			
              if(isset($_SESSION["studentsusername"])){
                 $username = $_SESSION["studentsusername"];
                     
                    $qry ="SELECT * FROM students WHERE id='$username'";

					$result = mysqli_query($conn,$qry);

					if($result->num_rows > 0){
                      $row = mysqli_fetch_assoc($result);

					  ?>
                       <h4><?php echo $row['firstname']." ".$row['lastname']?></h4>
					  <?php
					}
				
				 
			  }
				?>
			</div>
			<ul>
				<li>
					<a href="profile.php">
						<i class="fa fa-user" aria-hidden="true"></i>
						<span>Profile</span>
					</a>
				</li>
				<li>
					<a href="schedule.php">
						<i class="fa fa-calendar" aria-hidden="true"></i>
						<span>Schedule</span>
					</a>
				</li>
			
				
				<li>
					<?php
// Start the session


// Check if the user is logged in
if (isset($_SESSION['studentsusername'])) {
    // echo 'Logged in as ' . $_SESSION['username'] . '<br>'.'<br>';
    echo '<script>
    function confirmLogout() {
        var confirmLogout = confirm("Are you sure you want to log out?");
        if (confirmLogout) {
            window.location.href = "logout.php"; // Redirect to logout.php if the user clicks "OK"
        }
    }
</script>';

echo ' 
    <a href="javascript:void(0);" onclick="confirmLogout()">
        <i class="fa fa-power-off" aria-hidden="true"></i>
        <span>Logout</span>
    </a>';
} else {
  header("location: logout.php");
}
?>
				</li>
			</ul>
		</nav>
		<section class="section-1">
			<div class="main1">
				<?php
              echo "Full Name : ".$row['lastname'].",".$row['firstname']." ".$row['middlename'];
				?>
			</div>

			<div class="main2">
				<?php
              echo "Gender : ".$row['gender'];
				?>
			</div>

			<div class="main3">
				<?php
              echo "Course : ".$row['course'];
				?>
			</div>
			<div class="main4">
				<?php
              echo "Course : ".$row['institute'];
				?>
			</div>
		</section>
	</div>

</body>
</html>