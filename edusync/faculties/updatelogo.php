<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Logo</title>
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
</head>
<body>
    
</body>
</html>
<?php
include "../config/database.php";
include "../header/head.php";
if(isset($_POST['submitimage'])){
    // Check if a file is uploaded
    if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $file_name = $_FILES['image']['name'];
        $temp_name = $_FILES['image']['tmp_name'];
        $folder = '../img/'.$file_name;

        // Update the database with the new file name
        $qry = mysqli_query($conn, "UPDATE image SET file='$file_name' WHERE id=1"); // Replace 'id=1' with the appropriate condition for your update

        // Move the new file to the specified folder
        if(move_uploaded_file($temp_name, $folder)){
            echo '<script>
    Swal.fire({
        title: "Successfully Updated",
        text: "Back To The Page",
        icon: "success",
        showConfirmButton: false,
        timer: 2000,
        onClose: () => {
            window.location.href = "../faculties/updatelogo.php";
        }
    });
</script>';
        } else {
            echo "Failed to move the uploaded file.";
        }
    } else {
        echo "No file uploaded. Database updated without changing the image.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Logo</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" name="submitimage">
    </form>
 <a href="dashboard.php"><button >Back</button></a>
</body>
</html>
