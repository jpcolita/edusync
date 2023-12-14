

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	
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
	<link rel="stylesheet" href="../css/admin.css">
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
        <a href="updatelogo.php">Edit Logo</a>
    </div>
</div>
		
	</div>
		
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
			

				<?php
				include "../config/database.php";
               $sel = mysqli_query($conn,"SELECT * FROM image");

			   if($row = mysqli_fetch_assoc($sel)){
				?>
<img src="../img/<?php echo $row['file']?>" >
				<?php
			   }

				?>
			
				
			</div>
			<ul>
				<li>
					<a href="dashboard.php">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>
                <li>
					<a href="faculty.php">
						<i  class="fa fa-user" aria-hidden="true"></i>
						<span>Faculty</span>
					</a>
				</li>
				<li>
					<a href="student.php">
						<i class="fa fa-graduation-cap" aria-hidden="true"></i>
						<span>Student</span>
					</a>
				</li>
				<li>
					<a href="subject.php">
						<i class="fa fa-book" aria-hidden="true"></i>
						<span>Subject</span>
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

session_start();
// Check if the user is logged in
if (isset($_SESSION['facultyusername'])) {
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

	
			
	<div>
		<?php
		include "../config/database.php";
$sel = "SELECT id FROM faculty";

$qry = mysqli_query($conn,$sel);

if($total = $qry->num_rows){

	echo "Total Faculty : ".$total;
	

}
		?>
	</div>

	<div>
<?php

$sel = "SELECT id FROM students";

$qry = mysqli_query($conn,$sel);

if($total = $qry->num_rows){

	echo "Total Students : ".$total;
	

}	
?>
	<div>

	<div>
	<?php

$sel = "SELECT code FROM subject";

$qry = mysqli_query($conn,$sel);

if($total = $qry->num_rows){

	echo "Total Subject : ".$total;
	

}	
?>
	</div>

	
		</section>
	</div>

</body>
</html>