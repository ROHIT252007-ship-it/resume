<?php
session_start();
require __DIR__ . '/vendor/autoload.php';
include "cont.php";

$obj = new connect();
$conn = $obj->conn();
$data = $_SESSION['data'];

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isRemoteEnabled', true); // allow external CSS/fonts
$dompdf = new Dompdf($options);
$data = $_SESSION['data'];

// Capture same UI HTML

$skills = explode("/", $data['skills']);

// Build HTML for skills
$skillsHtml = '<div class="section">
  <div class="skills">';
if (!empty($skills)) {
    foreach ($skills as $skill) {
      $skillsHtml .= '<div class="skill">'.htmlspecialchars($skill) . '</div>';
    }
} else {
    $skillsHtml .= '<p>No skills added.</p>';
}
$skillsHtml .= '</div></div>';

$html='
<!DOCTYPE html>
<html lang="en">
<!-- Add in <head> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modern Resume - ResumeMaker</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: "Poppins", sans-serif;
      margin: 0;
      background: #f4f9fb;
      color: #1f2937;
    }

    /* Resume Container */
    .resume {
      max-width: 950px;
      margin: 40px auto;
      background: #fff;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }

    /* Profile Header */
    .profile-header {
      background: #003333;
      color: #fff;
      padding: 40px;
      display: flex;
      align-items: center;
      gap: 24px;
    }

    .profile-header img {
      width: 140px;
      /* make slightly bigger if needed */
      height: 170px;
      /* keep equal to width */
      object-fit: cover;
      /* ensures the image fills circle without distortion */
      border: 4px solid #fff;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    }


    .profile-header h1 {
      margin: 0;
      font-size: 28px;
    }

    .profile-header p {
      margin: 4px 0;
      font-size: 15px;
      opacity: .9;
    }

    /* Sections */
    .section {
      padding: 30px 40px;
      border-bottom: 1px solid #eee;
    }

    .section:last-child {
      border-bottom: none;
    }

    .section h2 {
      margin: 0 0 15px;
      font-size: 20px;
      color: #00CED1;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .section h2::before {
      content: "";
      width: 8px;
      height: 20px;
      background: #00CED1;
      border-radius: 4px;
    }

    /* Skills */
    .skills {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
    }

    .skill {
      background: #e0f7f7;
      color: #004d4d;
      font-size: 14px;
      padding: 6px 12px;
      border-radius: 6px;
      font-weight: 500;
    }

    /* Timeline */
    .timeline {
      border-left: 3px solid #00CED1;
      padding-left: 20px;
    }

    .timeline-item {
      margin-bottom: 16px;
    }

    .timeline-item h3 {
      margin: 0;
      font-size: 16px;
      font-weight: 600
    }

    .timeline-item span {
      font-size: 13px;
      color: #6b7280
    }

  </style>
</head>

<body>
  <!-- Resume -->
  <div class="resume">
    <!-- Profile -->
    <div class="profile-header">
      <img src="images/'.$data['profile_pic'].'" alt="Profile Picture">
      <div>
        <h1>'.$data['fullname'].'</h1>
        <p>'.$data['jobroll'].'</p>
        <p><i class="fa fa-envelope"></i> '.$data['email'].' | <i class="fa fa-phone"></i> +91 '.$data['phone'].'</p>
        <p> <i class="fa fa-map-marker-alt"></i> '.$data['address'].'</p>
      </div>
    </div>

    <!-- Summary -->
    <div class="section">
      <h2>About Me</h2>
      <p>'.$data['summary'].'</p>
    </div>

    <!-- Skills -->
    <?php 
    $skills = [];
    $str = '.$data['skills'].';
    $skills = explode("/", $str);
    ?>


    <div class="section">
  <h2>Skills</h2>
  <div class="skills">
    '.$skillsHtml.';
</div>


    <!-- Experience -->
    <?php
    $e = '.$data['experience'].';
    $experiences = explode("/", $e);
    ?>
    <div class="section">
      <h2>Experience</h2>
      <div class="timeline">
        <div class="timeline-item">
          <?php foreach ($experiences as $experience) {
          ?>
            <p><?php echo $experience; ?> </p>
          <?php  } ?>
        </div>
      </div>
    </div>

    <!-- Education -->

    <?php
    $ed = '.$data['education'].';
    $educations = explode("/", $e);
    ?>
    <div class="section">
      <h2>Education</h2>
      <div class="timeline">
        <div class="timeline-item">
          <?php foreach ($educations as $education) {
          ?>
            <p><?php echo $education; ?> </p>
          <?php  } ?>
        </div>
      </div>
    </div>

    <!-- Projects -->
    <?php
    $p ='. $data['projects'].';
    $Projects = explode("/", $p);
    ?>
    <div class="section">
      <h2>Projects</h2>
      <ul>
        <?php foreach ($Projects as $Project) {
        ?>
          <li><?php echo $Project; ?> </li>
        <?php  } ?>
      </ul>
    </div>

    <!-- Certifications -->

    <?php
    $c = '.$data['certifications'].';
    $Certifications = explode("/", $c);
    ?>
    <div class="section">
      <h2>Certifications</h2>
      <ul>
        <li> <?php foreach ($Certifications as $Certification) {
              ?>
        <li><?php echo $Certification; ?> </li>
      <?php  } ?>
      </ul>
      </li>
      </ul>
    </div>

    <!-- Portfolio -->
    <div class="section">
      <h2>Portfolio</h2>
      <p><a href="'.$data['portfolio'].'" target="_blank">'.$data['portfolio'].' </a></p>
    </div>
  </div>
</body>

</html>';

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

// Output
$dompdf->stream("resume.pdf", ["Attachment" => 0]); // 0 = open in browser, 1 = force download
