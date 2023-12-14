
<!DOCTYPE html>
<html>
<head>
	<title>Schedule</title>
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

<h2>Edit Student Information</h2>
		<form action="schedule.php" method="POST" class="container">
    <label for="">Student ID</label>
      <input type="text" name="id" placeholder="Enter Student ID" required>

    <input type="submit" name="edit">

</form>

		<h2>Student Information Form</h2>
    
    <form action="../controller/class.controller.php" method="post">
	<div class="main1">
<div class="part1">
<label for="">ID Number :  </label>
        <input type="text" name="id1" placeholder="Enter ID Number">
</div>
  
    <div class="part2">
	<label for="name">Subject :</label>
    <select name="subject1" id="" required>


<?php
include "../config/database.php";
$sel = "SELECT * FROM subject";
$qry = mysqli_query($conn,$sel);

while($row = mysqli_fetch_assoc($qry)){


	echo "<option>{$row['code']}{$row['description']}</option>";

}
?>
	</select>
	</div>

      <div class="part3">
		  <label for="">Section :</label>
      <input type="text" name="section1" placeholder="Enter Section">
	  </div>

   
         <div class="part4">
        <label for="time">Time :</label>
        <input type="time"  name="time1" required>
		 </div>

		 <div class="part5">
        <label for="grade">Room :</label>
      <input type="text" name="room1" placeholder="Enter Student Grade">
		 </div>
		 <div class="part6">
	  <label for="">Day</label>
	  <input type="text" name="day1" placeholder="Enter Day ">
		 </div>
		 </div><br>


		 <div class="main2">

    <div class="part7">
	<label for="name">Subject :</label>
    <select name="subject2" id="" required>


<?php
include "../config/database.php";
$sel = "SELECT * FROM subject";
$qry = mysqli_query($conn,$sel);

while($row = mysqli_fetch_assoc($qry)){


	echo "<option>{$row['code']}{$row['description']}</option>";

}
?>
	</select>
	</div>

      <div class="part8">
		  <label for="">Section :</label>
      <input type="text" name="section2" placeholder="Enter Section">
	  </div>

   
         <div class="part9">
        <label for="time">Time :</label>
        <input type="time"  name="time2" required>
		 </div>

		 <div class="part10">
        <label for="grade">Room :</label>
      <input type="text" name="room2" placeholder="Enter Student Grade">
		 </div>
		 <div class="part11">
	  <label for="">Day</label>
	  <input type="text" name="day2" placeholder="Enter Day ">
		 </div>
		 </div><br>

		 <div class="main3">

    <div class="part12">
	<label for="name">Subject :</label>
    <select name="subject3" id="" required>


<?php
include "../config/database.php";
$sel = "SELECT * FROM subject";
$qry = mysqli_query($conn,$sel);

while($row = mysqli_fetch_assoc($qry)){


	echo "<option>{$row['code']}{$row['description']}</option>";

}
?>
	</select>
	</div>

      <div class="part13">
		  <label for="">Section :</label>
      <input type="text" name="section3" placeholder="Enter Section">
	  </div>

   
         <div class="part14">
        <label for="time">Time :</label>
        <input type="time"  name="time3" required>
		 </div>

		 <div class="part15">
        <label for="grade">Room :</label>
      <input type="text" name="room3" placeholder="Enter Student Grade">
		 </div>
		 <div class="part16">
	  <label for="">Day</label>
	  <input type="text" name="day3" placeholder="Enter Day ">
		 </div>
		 </div><br>

		 <div class="main4">

<div class="part17">
<label for="name">Subject :</label>
<select name="subject4" id="" required>


<?php
include "../config/database.php";
$sel = "SELECT * FROM subject";
$qry = mysqli_query($conn,$sel);

while($row = mysqli_fetch_assoc($qry)){


echo "<option>{$row['code']}{$row['description']}</option>";

}
?>
</select>
</div>

  <div class="part18">
	  <label for="">Section :</label>
  <input type="text" name="section4" placeholder="Enter Section">
  </div>


	 <div class="part19">
	<label for="time">Time :</label>
	<input type="time"  name="time4" required>
	 </div>

	 <div class="part20">
	<label for="grade">Room :</label>
  <input type="text" name="room4" placeholder="Enter Student Grade">
	 </div>
	 <div class="part21">
  <label for="">Day</label>
  <input type="text" name="day4" placeholder="Enter Day ">
	 </div>
	 </div><br>

	 <div class="main5">

<div class="part22">
<label for="name">Subject :</label>
<select name="subject5" id="" required>


<?php
include "../config/database.php";
$sel = "SELECT * FROM subject";
$qry = mysqli_query($conn,$sel);

while($row = mysqli_fetch_assoc($qry)){


echo "<option>{$row['code']}{$row['description']}</option>";

}
?>
</select>
</div>

  <div class="part23">
	  <label for="">Section :</label>
  <input type="text" name="section5" placeholder="Enter Section">
  </div>


	 <div class="part24">
	<label for="time">Time :</label>
	<input type="time"  name="time5" required>
	 </div>

	 <div class="part25">
	<label for="grade">Room :</label>
  <input type="text" name="room5" placeholder="Enter Student Grade">
	 </div>
	 <div class="part26">
  <label for="">Day</lbel>
  <input type="text" name="day5" placeholder="Enter Day ">
	 </div>
	 </div><br>
	 <div class="main6">

<div class="part27">
<label for="name">Subject :</label>
<select name="subject6" id="" required>


<?php
include "../config/database.php";
$sel = "SELECT * FROM subject";
$qry = mysqli_query($conn,$sel);

while($row = mysqli_fetch_assoc($qry)){


echo "<option>{$row['code']}{$row['description']}</option>";

}
?>
</select>
</div>

  <div class="part28">
	  <label for="">Section :</label>
  <input type="text" name="section6" placeholder="Enter Section">
  </div>


	 <div class="part29">
	<label for="time">Time :</label>
	<input type="time"  name="time6" required>
	 </div>

	 <div class="part30">
	<label for="grade">Room :</label>
  <input type="text" name="room6" placeholder="Enter Student Grade">
	 </div>
	 <div class="part31">
  <label for="">Day</lbel>
  <input type="text" name="day6" placeholder="Enter Day ">
	 </div>
	 </div><br>


	 <div class="main7">

<div class="part32">
<label for="name">Subject :</label>
<select name="subject7" id="" required>


<?php
include "../config/database.php";
$sel = "SELECT * FROM subject";
$qry = mysqli_query($conn,$sel);

while($row = mysqli_fetch_assoc($qry)){


echo "<option>{$row['code']}{$row['description']}</option>";

}
?>
</select>
</div>

  <div class="part33">
	  <label for="">Section :</label>
  <input type="text" name="section7" placeholder="Enter Section">
  </div>


	 <div class="part34">
	<label for="time">Time :</label>
	<input type="time"  name="time7" required>
	 </div>

	 <div class="part35">
	<label for="grade">Room :</label>
  <input type="text" name="room7" placeholder="Enter Student Grade">
	 </div>
	 <div class="part36">
  <label for="">Day</lbel>
  <input type="text" name="day7" placeholder="Enter Day ">
	 </div>
	 </div><br>


	 <div class="main7">

<div class="part32">
<label for="name">Subject :</label>
<select name="subject8" id="" required>


<?php
include "../config/database.php";
$sel = "SELECT * FROM subject";
$qry = mysqli_query($conn,$sel);

while($row = mysqli_fetch_assoc($qry)){


echo "<option>{$row['code']}{$row['description']}</option>";

}
?>
</select>
</div>

  <div class="part38">
	  <label for="">Section :</label>
  <input type="text" name="section8" placeholder="Enter Section">
  </div>


	 <div class="part39">
	<label for="time">Time :</label>
	<input type="time"  name="time8" required>
	 </div>

	 <div class="part40">
	<label for="grade">Room :</label>
  <input type="text" name="room8" placeholder="Enter Student Grade">
	 </div>
	 <div class="part41">
  <label for="">Day</lbel>
  <input type="text" name="day8" placeholder="Enter Day ">
	 </div>
	 </div>





        <button type="submit" name="insertschedule">Submit</button>
        
    </form>







	</div>

</body>
</html>

<?php

include "../config/database.php";



if (isset($_POST['edit'])) {
    $id_number = $_POST['id'];

   $sel = "SELECT * FROM students WHERE id='$id_number' ";

   $result = mysqli_query($conn,$sel);

   if($result){
    $_SESSION["id_number"]=$id_number;
	echo '<script>
	window.location.href= "updateschedule.php";
	</script>';
   }else{
	echo '<script>
	alert("Invalid ID!!");
	window.location.href= "schedule.php";
	</script>';
   }
}


?>

