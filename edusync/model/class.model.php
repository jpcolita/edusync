<?php

class Model{

public function GetID(){
    include "../config/database.php";
    $sel = "SELECT * FROM students";
    $qry = mysqli_query($conn,$sel);

    while($row = mysqli_fetch_assoc($qry)){
        $id = $row['id'];
echo "	<option value='$id'>$id</option>";
    }
}

public function GetSubject(){
    include "../config/database.php";
    $sel = "SELECT * FROM subject";
    $qry = mysqli_query($conn,$sel);

    while($row = mysqli_fetch_assoc($qry)){
    
        echo "	<option>{$row['code']}{$row['description']}</option>";
    }
}

}
class Login{

    private $conn;
    
    public function __construct($conn)
    {
        $this->conn=$conn;
    }
    
    public function LoginFaculty($id,$dofb){
        $qry ="SELECT * FROM faculty WHERE id='$id' AND dofb='$dofb'";
    
        $result = $this->conn->query($qry);
    
        return $result->fetch_assoc();
    
    }
    
    public function LoginStudent($id,$dofb){
        $qry ="SELECT * FROM students WHERE id='$id' AND dofb='$dofb'";

        $result = $this->conn->query($qry);


        return $result->fetch_assoc();
    }
    
    
    
    
    }

class Faculty{


private $conn;


public function __construct($conn)
{
    $this->conn=$conn;
}


public function InsertFaculty($id,$lastname,$firstname,$middlename,$dofb,$gender,$institute,$course,$email){

$insert = $this->conn->prepare("INSERT INTO faculty (id,lastname,firstname,middlename,dofb,gender,institute,course,email)VALUES(?,?,?,?,?,?,?,?,?)");

$insert->bind_param("sssssssss",$id,$lastname,$firstname,$middlename,$dofb,$gender,$institute,$course,$email);

return $insert->execute();

}

public function CheckFaculty($id){
    $qry = "SELECT * FROM faculty WHERE id='$id'";

    $result = $this->conn->query($qry);


    if($result->num_rows > 0){
  return true;
    }else{
        return false;
    }

}

}

class Student{


    private $conn;

    public function __construct($conn)
    {
        $this->conn=$conn;
    }


    public function InsertStudent($id,$lastname,$firstname,$middlename,$dofb,$gender,$institute,$course){
        $insert  =$this->conn->prepare("INSERT INTO students(id,lastname,firstname,middlename,dofb,gender,institute,course) VALUES(?,?,?,?,?,?,?,?)");
        $insert->bind_param("ssssssss",$id,$lastname,$firstname,$middlename,$dofb,$gender,$institute,$course);

        return $insert->execute();
    }

    public function CheckStudent($id){
        $sel ="SELECT * FROM students WHERE id='$id'";

        $qry = $this->conn->query($sel);

        if($qry->num_rows >0){
          return true;
        }else{
            return false;
        }

    }




}

class Subject{

private $conn;


public function __construct($conn)
{
$this->conn=$conn;    
}

public function InsertSubject($code,$description,$unit,$type){
    $insert =$this->conn->prepare("INSERT INTO subject(code,description,unit,type)VALUES(?,?,?,?)");

    $insert-> bind_param("ssss",$code,$description,$unit,$type);


    return $insert->execute();
}

public function CheckSubject($code){

    $sel = "SELECT * FROM subject WHERE code='$code'";

    $qry = $this->conn->query($sel);


    if($qry->num_rows > 0){
    return true;
    }else{
        return false;
    }

}





}


class Schedule{

    private $conn;

    public function __construct($conn)
    {
        $this->conn=$conn;
    }

   public function InsertSchedule($id,$subjec1,$section1,$time1,$room1,$day1,$subjec2,$section2,$time2,$room2,$day2,
   $subject3,$section3,$time3,$room3,$day3,$subject4,$section4,$time4,$room4,$day4,
   $subject5,$section5,$time5,$room5,$day5,$subject6,$section6,$time6,$room6,$day6,
   $subject7,$section7,$time7,$room7,$day7, $subject8,$section8,$time8,$room8,$day8){
    $update = $this->conn->prepare("UPDATE students SET subject1=?,section1=?,time1=?,room1=?,day1=?,
     subject2=?,section2=?,time2=?,room2=?,day2=?,subject3=?,section3=?,time3=?,room3=?,day3=?,
     subject4=?,section4=?,time4=?,room4=?,day4=?,  subject5=?,section5=?,time5=?,room5=?,day5=?,
     subject6=?,section6=?,time6=?,room6=?,day6=?, subject7=?,section7=?,time7=?,room7=?,day7=?,
     subject8=?,section8=?,time8=?,room8=?,day8=?   WHERE id=?");
    $update->bind_param("sssssssssssssssssssssssssssssssssssssssss", $subjec1,$section1,$time1,$room1,$day1,$subjec2,$section2,$time2,$room2,$day2,
    $subject3,$section3,$time3,$room3,$day3,$subject4,$section4,$time4,$room4,$day4,$subject5,$section5,$time5,$room5,$day5,
    $subject6,$section6,$time6,$room6,$day6,$subject7,$section7,$time7,$room7,$day7, $subject8,$section8,$time8,$room8,$day8,$id);

    return $update->execute();

   }
   public function EditSchedule($id,$subjec1,$section1,$time1,$room1,$day1,$subjec2,$section2,$time2,$room2,$day2,
   $subject3,$section3,$time3,$room3,$day3,$subject4,$section4,$time4,$room4,$day4,
   $subject5,$section5,$time5,$room5,$day5,$subject6,$section6,$time6,$room6,$day6,
   $subject7,$section7,$time7,$room7,$day7, $subject8,$section8,$time8,$room8,$day8){
    $update = $this->conn->prepare("UPDATE students SET subject1=?,section1=?,time1=?,room1=?,day1=?,
     subject2=?,section2=?,time2=?,room2=?,day2=?,subject3=?,section3=?,time3=?,room3=?,day3=?,
     subject4=?,section4=?,time4=?,room4=?,day4=?,  subject5=?,section5=?,time5=?,room5=?,day5=?,
     subject6=?,section6=?,time6=?,room6=?,day6=?, subject7=?,section7=?,time7=?,room7=?,day7=?,
     subject8=?,section8=?,time8=?,room8=?,day8=?   WHERE id=?");
    $update->bind_param("sssssssssssssssssssssssssssssssssssssssss", $subjec1,$section1,$time1,$room1,$day1,$subjec2,$section2,$time2,$room2,$day2,
    $subject3,$section3,$time3,$room3,$day3,$subject4,$section4,$time4,$room4,$day4,$subject5,$section5,$time5,$room5,$day5,
    $subject6,$section6,$time6,$room6,$day6,$subject7,$section7,$time7,$room7,$day7, $subject8,$section8,$time8,$room8,$day8,$id);

    return $update->execute();

   }

  
   

}


















?>