<?php
class connect
{

    public $SERVER_NAME = "localhost";
    public $PASSWORD = "";
    public $USER_NAME = "root";
    public $DB_NAME = "resume";
    public $conn;
    public $findid;
    public $fromdata;

    public function conn()
    {
        $this->conn = new mysqli($this->SERVER_NAME, $this->USER_NAME, $this->PASSWORD, $this->DB_NAME);
        if (mysqli_connect_error()) {
            echo mysqli_connect_error();
        } else {
            return $this->conn;
        }
    }
    public function inserrd($fullname, $email, $phone, $address, $summary, $skills, $experience, $educationa, $projects, $certifications, $portfolio, $pic_name, $jobroll)
    {
        $ins = "INSERT INTO `resumes` (`id`, `fullname`, `email`, `phone`, `address`, `summary`, `skills`, `experience`, `education`, `projects`, `certifications`, `portfolio`, `profile_pic`, `created_at`,`jobroll`) VALUES (NULL,'$fullname', '$email', '$phone', '$address', '$summary', '$skills', '$experience', '$educationa', '$projects', '$certifications', '$portfolio', '$pic_name', current_timestamp(),'$jobroll')";

        $qurey = mysqli_query($this->conn, $ins);
        $this->findid=mysqli_insert_id($this->conn);
        $sel="SELECT * FROM `resumes` WHERE `id` = '$this->findid'";
        $data=mysqli_query($this->conn,$sel);
        $maindata=mysqli_fetch_assoc($data);
        $this->fromdata=$maindata;
        if ($qurey) {
            return $qurey;
        } else {
            echo "error";
        }
    }
   public function getformdata(){
    return $this->fromdata;
   }
}
