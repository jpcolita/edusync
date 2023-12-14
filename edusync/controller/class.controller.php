
<?php

use function PHPSTORM_META\type;

include "../header/head.php";
include "../model/class.model.php";
include "../config/database.php";
session_start();
if($_SERVER['REQUEST_METHOD'] = "POST"){

if(isset($_POST['addfaculty'])){
    $id = $_POST['id'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $dofb = $_POST['dofb'];
    $gender = $_POST['gender'];
    $institute = $_POST['institute'];
    $course = $_POST['course'];
    $email = $_POST['email'];


    $faculty = new Faculty($conn);



    if($faculty->CheckFaculty($id)){
        echo '<script>
        Swal.fire({
            title: "ID Already Taken",
            text: "Please choose a different ID",
            icon: "error",
            showConfirmButton: true,
        }).then(() => {
            window.location.href = "../faculties/faculty.php"; 
        });
    </script>';
    }else{

        $result = $faculty->InsertFaculty($id,$lastname,$firstname,$middlename,$dofb,$gender,$institute,$course,$email);

        if($result){
            echo '<script>
            Swal.fire({
                title: "Successfully Added",
                text: "Back To Faculty Page",
                icon: "success",
                showConfirmButton: false,
                timer: 2000,
                onClose: () => {
                    window.location.href = "../faculties/faculty.php";
                }
            });
        </script>';
        }
    }

}

if(isset($_POST['studentform'])){
  
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = new Login($conn);

    $result = $login->LoginStudent($username,$password);


    if($result){
        $_SESSION["studentsusername"] = $username;
        echo '<script>
        Swal.fire({
            title: "Login Successfully",
            text: "Redirecting To Dashboard",
            icon: "success",
            showConfirmButton: false,
            timer: 2000,
            onClose: () => {
                window.location.href = "../student/profile.php";
            }
        });
    </script>';
    }else{
        echo '<script>
        Swal.fire({
            title: "Invalid Username or Password",
            text: "Please check your credentials and try again",
            icon: "error",
            showConfirmButton: true,
        }).then(() => {
            window.location.href = "../login.php"; // Redirect to the login page
        });
    </script>'; 
 
    }
}



if(isset($_POST['facultyform'])){
  
$username = $_POST['username'];
$password = $_POST['password'];

$login = new Login($conn);

$result = $login->LoginFaculty($username,$password);




if($result){
    $_SESSION["facultyusername"] = $username;
    echo '<script>
    Swal.fire({
        title: "Login Successfully",
        text: "Redirecting To Dashboard",
        icon: "success",
        showConfirmButton: false,
        timer: 2000,
        onClose: () => {
            window.location.href = "../faculties/dashboard.php";
        }
    });
</script>';

}else{
    
    echo '<script>
        Swal.fire({
            title: "Invalid Username or Password",
            text: "Please check your credentials and try again",
            icon: "error",
            showConfirmButton: true,
        }).then(() => {
            window.location.href = "../login.php"; // Redirect to the login page
        });
    </script>'; 

   
}




}

if(isset($_POST['addstudent'])){
  $id = $_POST['id'];
  $lastname = $_POST['lastname'];
  $firstname = $_POST['firstname'];
  $middlename = $_POST['middlename'];
  $dofb = $_POST['dofb'];
  $gender = $_POST['gender'];
  $institute =$_POST['institute'];
  $course = $_POST['course'];

  $student = new Student($conn);

 

  if($student->CheckStudent($id)){
    echo '<script>
    Swal.fire({
        title: "ID Already Taken",
        text: "Please choose a different ID",
        icon: "error",
        showConfirmButton: true,
    }).then(() => {
        window.location.href = "../faculties/student.php"; 
    });
</script>';
  }else{
    $result = $student->InsertStudent($id,$lastname,$firstname,$middlename,$dofb,$gender,$institute,$course);
    echo '<script>
    Swal.fire({
        title: "Successfully Added",
        text: "Back To Faculty Page",
        icon: "success",
        showConfirmButton: false,
        timer: 2000,
        onClose: () => {
            window.location.href = "../faculties/student.php";
        }
    });
</script>';
  }
}



if(isset($_POST['addsubject'])){
$code = $_POST['code'];
$description = $_POST['description'];
$unit = $_POST['unit'];
$type = $_POST['type'];


$subject = new Subject($conn);



if($subject->CheckSubject($code)){
    echo '<script>
    Swal.fire({
        title: "Code Already Added",
        text: "Please Enter Another Code",
        icon: "error",
        showConfirmButton: true,
    }).then(() => {
        window.location.href = "../faculties/subject.php"; 
    });
</script>';
}else{
    $result = $subject->InsertSubject($code,$description,$unit,$type);  
    echo '<script>
    Swal.fire({
        title: "Successfully Added",
        text: "Back To Faculty Page",
        icon: "success",
        showConfirmButton: false,
        timer: 2000,
        onClose: () => {
            window.location.href = "../faculties/subject.php";
        }
    });
</script>';
}

}


if(isset($_POST['insertschedule'])){
    $id1 = $_POST['id1'];
$subject1 = $_POST['subject1'];
$section1 = $_POST['section1'];
$time1 = $_POST['time1'];
$room1 = $_POST['room1'];
$day1 = $_POST['day1'];
$subject2 = $_POST['subject2'];
$section2 = $_POST['section2'];
$time2 = $_POST['time2'];
$room2 = $_POST['room2'];
$day2 = $_POST['day2'];
$subject3 = $_POST['subject3'];
$section3 = $_POST['section3'];
$time3 = $_POST['time3'];
$room3 = $_POST['room3'];
$day3 = $_POST['day3'];
$subject4 = $_POST['subject4'];
$section4 = $_POST['section4'];
$time4 = $_POST['time4'];
$room4 = $_POST['room4'];
$day4 = $_POST['day4'];
$subject5 = $_POST['subject5'];
$section5 = $_POST['section5'];
$time5 = $_POST['time5'];
$room5 = $_POST['room5'];
$day5 = $_POST['day5'];
$subject6 = $_POST['subject6'];
$section6 = $_POST['section6'];
$time6 = $_POST['time6'];
$room6 = $_POST['room6'];
$day6 = $_POST['day6'];
$subject7 = $_POST['subject7'];
$section7 = $_POST['section7'];
$time7 = $_POST['time7'];
$room7 = $_POST['room7'];
$day7 = $_POST['day7'];
$subject8 = $_POST['subject8'];
$section8 = $_POST['section8'];
$time8 = $_POST['time8'];
$room8 = $_POST['room8'];
$day8 = $_POST['day8'];


$update = new Schedule($conn);

$result = $update->InsertSchedule($id1,$subject1,$section1,$time1,$room1,$day1,$subject2,$section2,$time2,$room2,$day2,
$subject3,$section3,$time3,$room3,$day3,$subject4,$section4,$time4,$room4,$day4,
$subject5,$section5,$time5,$room5,$day5,$subject6,$section6,$time6,$room6,$day6,
$subject7,$section7,$time7,$room7,$day7,$subject8,$section8,$time8,$room8,$day8);

if($result){
    echo '<script>
    Swal.fire({
        title: "Successfully Added",
        text: "Back To Faculty Page",
        icon: "success",
        showConfirmButton: false,
        timer: 2000,
        onClose: () => {
            window.location.href = "../faculties/schedule.php";
        }
    });
</script>';
}else{
    echo '<script>
    Swal.fire({
        title: "Something Wrong",
        text: "Please Try Again!",
        icon: "success",
        showConfirmButton: false,
        timer: 2000,
        onClose: () => {
            window.location.href = "../faculties/schedule.php";
        }
    });
</script>';
}
}


if(isset($_POST['editinfo'])){
    $id1 = $_POST['id1'];
$subject1 = $_POST['subject1'];
$section1 = $_POST['section1'];
$time1 = $_POST['time1'];
$room1 = $_POST['room1'];
$day1 = $_POST['day1'];
$subject2 = $_POST['subject2'];
$section2 = $_POST['section2'];
$time2 = $_POST['time2'];
$room2 = $_POST['room2'];
$day2 = $_POST['day2'];
$subject3 = $_POST['subject3'];
$section3 = $_POST['section3'];
$time3 = $_POST['time3'];
$room3 = $_POST['room3'];
$day3 = $_POST['day3'];
$subject4 = $_POST['subject4'];
$section4 = $_POST['section4'];
$time4 = $_POST['time4'];
$room4 = $_POST['room4'];
$day4 = $_POST['day4'];
$subject5 = $_POST['subject5'];
$section5 = $_POST['section5'];
$time5 = $_POST['time5'];
$room5 = $_POST['room5'];
$day5 = $_POST['day5'];
$subject6 = $_POST['subject6'];
$section6 = $_POST['section6'];
$time6 = $_POST['time6'];
$room6 = $_POST['room6'];
$day6 = $_POST['day6'];
$subject7 = $_POST['subject7'];
$section7 = $_POST['section7'];
$time7 = $_POST['time7'];
$room7 = $_POST['room7'];
$day7 = $_POST['day7'];
$subject8 = $_POST['subject8'];
$section8 = $_POST['section8'];
$time8 = $_POST['time8'];
$room8 = $_POST['room8'];
$day8 = $_POST['day8'];


$update = new Schedule($conn);

$result = $update->InsertSchedule($id1,$subject1,$section1,$time1,$room1,$day1,$subject2,$section2,$time2,$room2,$day2,
$subject3,$section3,$time3,$room3,$day3,$subject4,$section4,$time4,$room4,$day4,
$subject5,$section5,$time5,$room5,$day5,$subject6,$section6,$time6,$room6,$day6,
$subject7,$section7,$time7,$room7,$day7,$subject8,$section8,$time8,$room8,$day8);

if($result){
    echo '<script>
    Swal.fire({
        title: "Successfully Edited",
        text: "Back To Faculty Page",
        icon: "success",
        showConfirmButton: false,
        timer: 2000,
        onClose: () => {
            window.location.href = "../faculties/updateschedule.php";
        }
    });
</script>';
}else{
    echo '<script>
    Swal.fire({
        title: "Something Wrong ",
        text: "Please Try Again",
        icon: "success",
        showConfirmButton: false,
        timer: 2000,
        onClose: () => {
            window.location.href = "../faculties/updateschedule.php";
        }
    });
</script>'; 
}
}



}


















?>