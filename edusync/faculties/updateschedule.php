<!DOCTYPE html>
<html lang="en">
<head>
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Schedule</title>
</head>
<body>

<?php


session_start();

if (isset($_SESSION["id_number"])) {
    $id_number = $_SESSION["id_number"];

    // echo "Welcome, $username!";

    // Assuming you have a database connection named $conn
    $qry = "SELECT * FROM students WHERE id = '$id_number'";
    $result = mysqli_query($conn, $qry);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        // echo "Your email is: " . $row['email'];
        $section1 = $row['section1'];
        $time1 = $row['time1'];
        $room1 = $row['room1'];
        $day1 = $row['day1'];
        $section2 = $row['section2'];
        $time2 = $row['time2'];
        $room2 = $row['room2'];
        $day2 = $row['day2'];
        $section3 = $row['section3'];
        $time3 = $row['time3'];
        $room3 = $row['room3'];
        $day3 = $row['day3'];
        $section4 = $row['section4'];
        $time4 = $row['time4'];
        $room4 = $row['room4'];
        $day4 = $row['day4'];
        $section5 = $row['section5'];
        $time5 = $row['time5'];
        $room5 = $row['room5'];
        $day5 = $row['day5'];
        $section6 = $row['section6'];
        $time6 = $row['time6'];
        $room6 = $row['room6'];
        $day6 = $row['day6'];
        $section7 = $row['section7'];
        $time7 = $row['time7'];
        $room7 = $row['room7'];
        $day7 = $row['day7'];
        $section8 = $row['section8'];
        $time8 = $row['time8'];
        $room8 = $row['room8'];
        $day8 = $row['day8'];
        

     
     
     
       
    } else {
        echo '<script>
		window.location.href="schedule.php";
		alert("ID Not Existed")
		</script>';
    }
} else {
    // Redirect to the login page if not logged in
  echo "Mali";
    exit();
}





?>
<form action="../controller/class.controller.php" method="POST">
<div class="part1">
<?php
  echo '<input type="text" readonly name="id1" value="' . $id_number . '" class="input1">';

  ?>
</div>
<br>
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

   <?php
echo '   <input type="text" name="section1" placeholder="Enter Section" value="' . $section1 . '" required>';
   ?>
	  </div>

   
         <div class="part4">
        <label for="time">Time :</label>
        <?php
echo ' <input type="time"  name="time1" required value="' . $time1 . '">';
        ?>
       
		 </div>

		 <div class="part5">
        <label for="grade">Room :</label>
        <?php
echo ' <input type="text" name="room1" placeholder="Enter Student Grade" required value="' . $room1 . '" required>';
        ?>
     
		 </div>
		 <div class="part6">
	  <label for="">Day</label>
    <?php
echo '<input type="text" name="day1" placeholder="Enter Day " value="' . $day1 . '" required >';
    ?>
	  
		 </div>
		 </div><br>

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

   <?php
echo '   <input type="text" name="section2" placeholder="Enter Section" value="' . $section2 . '" required>';
   ?>
	  </div>

   
         <div class="part9">
        <label for="time">Time :</label>
        <?php
echo ' <input type="time"  name="time2" required value="' . $time2 . '">';
        ?>
       
		 </div>

		 <div class="part10">
        <label for="grade">Room :</label>
        <?php
echo ' <input type="text" name="room2" placeholder="Enter Student Grade" required value="' . $room2 . '" required>';
        ?>
     
		 </div>
		 <div class="part11">
	  <label for="">Day</label>
    <?php
echo '<input type="text" name="day2" placeholder="Enter Day " value="' . $day2 . '" required >';
    ?>
	  
		 </div>
		 </div><br>

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

   <?php
echo '   <input type="text" name="section3" placeholder="Enter Section" value="' . $section3 . '" required>';
   ?>
	  </div>

   
         <div class="part14">
        <label for="time">Time :</label>
        <?php
echo ' <input type="time"  name="time3" required value="' . $time3 . '">';
        ?>
       
		 </div>

		 <div class="part15">
        <label for="grade">Room :</label>
        <?php
echo ' <input type="text" name="room3" placeholder="Enter Student Grade" required value="' . $room3 . '" required>';
        ?>
     
		 </div>
		 <div class="part16">
	  <label for="">Day</label>
    <?php
echo '<input type="text" name="day3" placeholder="Enter Day " value="' . $day3 . '" required >';
    ?>
	  
		 </div>
		 </div><br>

     <div class="part12">
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

      <div class="part13">
		  <label for="">Section :</label>

   <?php
echo '   <input type="text" name="section4" placeholder="Enter Section" value="' . $section4 . '" required>';
   ?>
	  </div>

   
         <div class="part14">
        <label for="time">Time :</label>
        <?php
echo ' <input type="time"  name="time4" required value="' . $time4 . '">';
        ?>
       
		 </div>

		 <div class="part15">
        <label for="grade">Room :</label>
        <?php
echo ' <input type="text" name="room4" placeholder="Enter Student Grade" required value="' . $room4 . '" required>';
        ?>
     
		 </div>
		 <div class="part16">
	  <label for="">Day</label>
    <?php
echo '<input type="text" name="day4" placeholder="Enter Day " value="' . $day4 . '" required >';
    ?>
	  
		 </div>
		 </div><br>

     <div class="part17">
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

      <div class="part18">
		  <label for="">Section :</label>

   <?php
echo '   <input type="text" name="section5" placeholder="Enter Section" value="' . $section5 . '" required>';
   ?>
	  </div>

   
         <div class="part19">
        <label for="time">Time :</label>
        <?php
echo ' <input type="time"  name="time5" required value="' . $time5 . '">';
        ?>
       
		 </div>

		 <div class="part20">
        <label for="grade">Room :</label>
        <?php
echo ' <input type="text" name="room5" placeholder="Enter Student Grade" required value="' . $room5 . '" required>';
        ?>
     
		 </div>
		 <div class="part21">
	  <label for="">Day</label>
    <?php
echo '<input type="text" name="day5" placeholder="Enter Day " value="' . $day5 . '" required >';
    ?>
	  
		 </div>
		 </div><br>

     <div class="part22">
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

      <div class="part23">
		  <label for="">Section :</label>

   <?php
echo '   <input type="text" name="section6" placeholder="Enter Section" value="' . $section6 . '" required>';
   ?>
	  </div>

   
         <div class="part24">
        <label for="time">Time :</label>
        <?php
echo ' <input type="time"  name="time6" required value="' . $time6 . '">';
        ?>
       
		 </div>

		 <div class="part25">
        <label for="grade">Room :</label>
        <?php
echo ' <input type="text" name="room6" placeholder="Enter Student Grade" required value="' . $room6 . '" required>';
        ?>
     
		 </div>
		 <div class="part26">
	  <label for="">Day</label>
    <?php
echo '<input type="text" name="day6" placeholder="Enter Day " value="' . $day6 . '" required >';
    ?>
	  
		 </div>
		 </div><br>


     <div class="part27">
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

      <div class="part28">
		  <label for="">Section :</label>

   <?php
echo '   <input type="text" name="section7" placeholder="Enter Section" value="' . $section7 . '" required>';
   ?>
	  </div>

   
         <div class="part29">
        <label for="time">Time :</label>
        <?php
echo ' <input type="time"  name="time7" required value="' . $time7 . '">';
        ?>
       
		 </div>

		 <div class="part30">
        <label for="grade">Room :</label>
        <?php
echo ' <input type="text" name="room7" placeholder="Enter Student Grade" required value="' . $room7 . '" required>';
        ?>
     
		 </div>
		 <div class="part31">
	  <label for="">Day</label>
    <?php
echo '<input type="text" name="day7" placeholder="Enter Day " value="' . $day7 . '" required >';
    ?>
	  
		 </div>
		 </div><br>

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

      <div class="part33">
		  <label for="">Section :</label>

   <?php
echo '   <input type="text" name="section8" placeholder="Enter Section" value="' . $section8 . '" required>';
   ?>
	  </div>

   
         <div class="part34">
        <label for="time">Time :</label>
        <?php
echo ' <input type="time"  name="time8" required value="' . $time8 . '" >';
        ?>
       
		 </div>

		 <div class="part35">
        <label for="grade">Room :</label>
        <?php
echo ' <input type="text" name="room8" placeholder="Enter Student Grade" required value="' . $room8 . '" required>';
        ?>
     
		 </div>
		 <div class="part36">
	  <label for="">Day</label>
    <?php
echo '<input type="text" name="day8" placeholder="Enter Day " value="' . $day8 . '" required >';
    ?>
	  
		 </div>
		 </div><br>

<input type="submit" name="editinfo" >


</form>
<a href="schedule.php"><button>Back </button></a>
</div>
</body>
</html>