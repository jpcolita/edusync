<!DOCTYPE html>
<html>
<head>
	<title>Subject</title>
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
	<link rel="stylesheet" href="../css/subject.css">
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
			
        <form action="../controller/class.controller.php" method="POST" class="container">
			<label for="">Subject Code : </label>
			<input type="text" name="code" placeholder="Enter Subject Code" required class="code">
			<label for="">Description : </label>
			<input type="text" name="description" placeholder="Enter Description" required class="description">
			<label for="">Unit</label>
			<input type="text" name="unit" placeholder="Enter Unit" required class="unit">
			<label for="">Subject Type : </label>
			<select name="type" id="" required class="type">
                <option value="Laboratory">Laboratory</option>
                <option value="Lecture">Lecture</option>
            </select>

            <input type="submit" name="addsubject" class="button">
		</form>	

		</form>

<form  method="get" class="container">
	<label for="search">Search Here:</label>
	<!-- <input type="text" id="search" name="query" placeholder="Enter ID To Search"> -->
<input type="text" name="query" placeholder="Enter Subject Code">

	<button type="submit">Search</button>
</form>

		<?php

if (isset($_GET['query'])) {
	$searchQuery = $_GET['query'];

include "../config/database.php";
$display = "SELECT * FROM subject WHERE code LIKE '%$searchQuery%' ORDER BY code DESC ";
$result = $conn->query($display);

if($result->num_rows > 0){
 echo "<table border='1'>
 <tr >
	 <th>Code</th>
	 <th>Description</th>
	 <th>Unit</th>
	 <th>Type</th>
	 <th>Delete</th>
	

 </tr>";
 while($row = $result->fetch_assoc()){
	 $id  = $row['code'];

	 echo "<tr>
	 <td>" . $row["code"]. "</td>
	 <td>" . $row["description"]. "</td>
	 <td>" . $row["unit"]. "</td>
	 <td>" . $row["type"]. "</td>
	 <td><a href='?delete_id={$row['code']}'><button>Delete</button></a></td>

	  
   
   


 </tr>";

 }
 echo "</table>";
}else{
	echo '<script>
	window.location.href="subject.php";
	alert("Wrong Code");
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
    $query = "DELETE FROM subject WHERE code = '$id_to_delete'";
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
                window.location.href = "subject.php";
            }
        });
    </script>';
    } else {
        echo "Error deleting record: " . mysqli_error($connection);
    }
}

?>
