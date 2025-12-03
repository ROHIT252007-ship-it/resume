<?php
// Assuming $data is already available from session
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modern Resume - ResumeMaker</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background: #f4f9fb;
      color: #1f2937;
    }

    .resume {
      max-width: 950px;
      margin: 40px auto;
      background: #fff;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
      padding: 0;
    }

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
      height: 170px;
      object-fit: cover;
      border: 4px solid #fff;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
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

    .timeline {
      border-left: 3px solid #00CED1;
      padding-left: 20px;
    }

    .timeline-item {
      margin-bottom: 16px;
    }
  </style>
</head>

<body>
  <div class="resume">
    <!-- Profile -->
    <div class="profile-header">
      <img src="images/<?php echo $data['profile_pic']?>" alt="Profile Picture">
      <div>
        <h1><?php echo $data['fullname'] ?></h1>
        <p><?php echo $data['jobroll']?></p>
        <p><i class="fa fa-envelope"></i> <?php echo $data['email'] ?> | <i class="fa fa-phone"></i> +91 <?php echo $data['phone'] ?></p>
        <p><i class="fa fa-map-marker-alt"></i> <?php echo $data['address'] ?></p>
      </div>
    </div>

    <!-- About -->
    <div class="section">
      <h2>About Me</h2>
      <p><?php echo $data['summary'] ?></p>
    </div>

    <!-- Skills -->
    <?php $skills = explode("/", $data['skills']); ?>
    <div class="section">
      <h2>Skills</h2>
      <div class="skills">
        <?php foreach($skills as $skill) { ?>
          <div class="skill"><?php echo $skill; ?></div>
        <?php } ?>
      </div>
    </div>

    <!-- Experience -->
    <?php $experiences = explode("/", $data['experience']); ?>
    <div class="section">
      <h2>Experience</h2>
      <div class="timeline">
        <?php foreach($experiences as $exp) { ?>
          <div class="timeline-item">
            <p><?php echo $exp; ?></p>
          </div>
        <?php } ?>
      </div>
    </div>

    <!-- Education -->
    <?php $educations = explode("/", $data['education']); ?>
    <div class="section">
      <h2>Education</h2>
      <div class="timeline">
        <?php foreach($educations as $edu) { ?>
          <div class="timeline-item">
            <p><?php echo $edu; ?></p>
          </div>
        <?php } ?>
      </div>
    </div>

    <!-- Projects -->
    <?php $projects = explode("/", $data['projects']); ?>
    <div class="section">
      <h2>Projects</h2>
      <ul>
        <?php foreach($projects as $proj) { ?>
          <li><?php echo $proj; ?></li>
        <?php } ?>
      </ul>
    </div>

    <!-- Certifications -->
    <?php $certs = explode("/", $data['certifications']); ?>
    <div class="section">
      <h2>Certifications</h2>
      <ul>
        <?php foreach($certs as $cert) { ?>
          <li><?php echo $cert; ?></li>
        <?php } ?>
      </ul>
    </div>

    <!-- Portfolio -->
    <div class="section">
      <h2>Portfolio</h2>
      <p><a href="<?php echo $data['portfolio']; ?>" target="_blank"><?php echo $data['portfolio']; ?></a></p>
    </div>
  </div>
</body>
</html>
