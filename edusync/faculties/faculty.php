<!DOCTYPE html>
<html>
<head>
	<title>Faculty</title>
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
	<link rel="stylesheet" href="../css/adminfaculty.css">
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
		<form action="../controller/class.controller.php" method="POST">
			<label for="">Faculty ID</label>
			<input type="text" name="id" placeholder="Enter Faculty ID" required>
            <label for="">Lastname :</label>
            <input type="text" name="lastname" placeholder="Enter Lastname" required>
            <label for="">Firstname :</label>
            <input type="text" name="firstname" placeholder="Enter Firstname" required>
            <label for="">Middlename :  </label>    
            <input type="text" name="middlename" placeholder="Enter Middlename" required>
            <label for="">Date of Birth</label>
            <input type="date" name="dofb" required>
            <label for="">Gender :</label>
			<select name="gender" id="" required>
				<option value="">Select</option>
			<?php
include "../config/database.php";
$sel ="SELECT * FROM genders";

$qry = mysqli_query($conn,$sel);

while($row = mysqli_fetch_assoc($qry)){
$id  = $row['gender'];
echo "<option value='$id'>$id</option>";
}
?>
			</select>
     
            <label for="">Institute :</label>
            <select name="institute" id="" required>
			<option value="">Select</option>
			<?php
include "../config/database.php";
$sel ="SELECT * FROM institutes";

$qry = mysqli_query($conn,$sel);

while($row = mysqli_fetch_assoc($qry)){
$id  = $row['institute'];
echo "<option value='$id'>$id</option>";
}
?>
			</select>
            <label for="">Course : </label>
            <select name="course" id="" required>
			<option value="">Select</option>
			<?php
include "../config/database.php";
$sel ="SELECT * FROM courses";

$qry = mysqli_query($conn,$sel);

while($row = mysqli_fetch_assoc($qry)){
$id  = $row['course'];
echo "<option value='$id'>$id</option>";
}
?>
			</select>
            <label for="">Email : </label>
            <input type="email" name="email" placeholder="Enter Email " required>
			
			<input type="submit"  name="addfaculty">
        </form>	


   
<form  method="get" class="container">
        <label for="search">Search Here:</label>
        <!-- <input type="text" id="search" name="query" placeholder="Enter ID To Search"> -->
  <input type="text" name="query" placeholder="Enter Faculty ID">

        <button type="submit">Search</button>
    </form>
<?php

include "../config/database.php";

if (isset($_GET['query'])) {
	$searchQuery = $_GET['query'];

	$display = "SELECT * FROM faculty WHERE id LIKE '%$searchQuery%' ORDER BY id DESC ";

$result = $conn->query($display);

if($result->num_rows > 0){
 echo "<table border='1'>
 <tr >
	 <th>ID</th>
	 <th>Lastname</th>
	 <th>Firstname</th>
	 <th>Middlename</th>
	 <th>Date Of Birth</th>
	 <th>Gender</th>
	 <th>Institute</th>
	 <th>Course</th>
	 <th>Email</th>
	 <th>Delete</th>

	

 </tr>";
 while($row = $result->fetch_assoc()){
	 $id  = $row['id'];

	 echo "<tr>
	 <td>" . $row["id"]. "</td>
	 <td>" . $row["lastname"]. "</td>
	 <td>" . $row["firstname"]. "</td>
	 <td>" . $row["middlename"]. "</td>
	 <td>" . $row["dofb"]. "</td>
	 <td>" . $row["gender"]. "</td>
	 <td>" . $row["institute"]. "</td>
	 <td>" . $row["course"]. "</td>
	 <td>" . $row["email"]. "</td>
	 <td><a href='?delete_id={$row['id']}'><button>Delete</button></a></td>

	  
   
   


 </tr>";

 }
 echo "</table>";
}else{
 echo '<script>
 window.location.href="faculty.php";
 alert("Wrong Id ");
 </script>';
}
}

?>
		
		</section>
	</div>

</body>
</html>

<?php
include "../config/database.php";
include "../header/head.php";
// Check if the delete button is clicked
if (isset($_GET['delete_id'])) {
    $id_to_delete = $_GET['delete_id'];

    // Delete the record from the database
    $query = "DELETE FROM faculty WHERE id = '$id_to_delete'";
    $result = mysqli_query($conn, $query);

    // Check if the delete operation was successful
    if ($result) {
        echo '<script>
        Swal.fire({
            title: "Successfully Deleted",
            text: "Back To Faculty Page",
            icon: "success",
            showConfirmButton: false,
            timer: 2000,
            onClose: () => {
                window.location.href = "faculty.php";
            }
        });
    </script>';
    } else {
        echo "Error deleting record: " . mysqli_error($connection);
    }
}

?>