<?php 
session_start();
include "cont.php";
$obj=new connect();
$conn=$obj->conn();

$fullname=$_POST['fullname'];

$jobroll=$_POST['jobroll'];

$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$summary=$_POST['summary'];
$skillsa=$_POST['skills'] ?? [];
$experiencea=$_POST['experience'] ?? [];
$educationa=$_POST['education'] ?? [];
$projectsa=$_POST['projects'] ?? [];
$certificationsa=$_POST['certifications'] ?? [];
$portfolio=$_POST['portfolio'];

$skills=implode('/',$skillsa);
$experience=implode('/',$experiencea);
$projects=implode('/',$projectsa);
$certifications=implode('/',$certificationsa);
$education=implode('/',$educationa);




$pic_name=$_FILES['profile_pic']['name'];
$tem_pic_name=$_FILES['profile_pic']['tmp_name'];
 
move_uploaded_file($tem_pic_name,"images/$pic_name");

$ins=$obj->inserrd($fullname,$email,$phone,$address,$summary,$skills,$experience,$education,$projects,$certifications,$portfolio,$pic_name,$jobroll);
$data=$obj->getformdata();
$_SESSION['data']=$data;
if($ins){
    header("Location:tam.php");
}
?>
