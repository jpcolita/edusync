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
					<a href="#">
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
              echo $row['subject1']." ".$row['section1']." ".$row['time1']." ".$row['room1']." ".$row['day1'];
				?>
			</div>

			<div class="main2">
				<?php
              echo $row['subject2']." ".$row['section2']." ".$row['time2']." ".$row['room2']." ".$row['day2'];
				?>
			</div>

            <div class="main3">
				<?php
              echo $row['subject3']." ".$row['section3']." ".$row['time3']." ".$row['room3']." ".$row['day3'];
				?>
			</div>
            <div class="main4">
				<?php
              echo $row['subject4']." ".$row['section4']." ".$row['time4']." ".$row['room4']." ".$row['day4'];
				?>
			</div>
            <div class="main5">
				<?php
              echo $row['subject5']." ".$row['section5']." ".$row['time5']." ".$row['room5']." ".$row['day5'];
				?>
			</div>
            <div class="main6">
				<?php
              echo $row['subject6']." ".$row['section6']." ".$row['time6']." ".$row['room6']." ".$row['day6'];
				?>
			</div>
            <div class="main7">
				<?php
              echo $row['subject7']." ".$row['section7']." ".$row['time7']." ".$row['room7']." ".$row['day7'];
				?>
			</div>
            <div class="main8">
				<?php
              echo $row['subject8']." ".$row['section8']." ".$row['time8']." ".$row['room8']." ".$row['day8'];
				?>
			</div>
		</section>
	</div>

</body>
</html>