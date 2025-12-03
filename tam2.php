<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Resume - ResumeMaker</title>
  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background-color: #F0F8FF;
      color: #333;
    }

    /* Header */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 40px;
      background-color: #003333;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
      color: #00CED1;
      text-decoration: none;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 25px;
    }

    nav ul li a {
      text-decoration: none;
      color: #ffffff;
      font-weight: 500;
      transition: color 0.3s;
    }

    nav ul li a:hover {
      color: #00CED1;
    }

    /* Resume Container */
    .resume-container {
      max-width: 900px;
      margin: 40px auto;
      background-color: #ffffff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    }

    /* Name & Contact */
    .resume-header {
      text-align: center;
      margin-bottom: 30px;
    }

    .resume-header img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 15px;
      border: 3px solid #00CED1;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .resume-header h1 {
      color: #00CED1;
      font-size: 36px;
      margin-bottom: 10px;
    }

    .resume-header p {
      font-size: 16px;
      color: #333;
    }

    /* Section Titles */
    .section-title {
      color: #00CED1;
      font-size: 22px;
      margin-bottom: 15px;
      border-bottom: 2px solid #00CED1;
      display: inline-block;
      padding-bottom: 5px;
    }

    /* Sections */
    .section {
      margin-bottom: 30px;
    }

    .section ul {
      list-style: none;
    }

    .section li {
      margin-bottom: 15px;
      line-height: 1.6;
    }

    .section li span {
      font-weight: bold;
      color: #003333;
    }

    /* Footer */
    footer {
      text-align: center;
      padding: 20px;
      background-color: #E0FFFF;
      font-weight: bold;
      color: #333;
      margin-top: 40px;
    }

    @media(max-width:768px) {
      .resume-container {
        padding: 20px;
      }

      .resume-header h1 {
        font-size: 28px;
      }
    }
  </style>
</head>

<body>
  <!-- Header -->
  <header>
    <div class="logo">ResumeMaker</div>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Templates</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Resume Content -->
  <div class="resume-container">
    <!-- Name, Image & Contact -->
    <div class="resume-header">
      <img src="profile.jpg" alt="Profile Picture"> <!-- 🔹 Replace with your passport size image -->
      <h1>Rohit Mahajan</h1>
      <p>Email: rohit@example.com | Phone: +91 9876543210 | Address: 123 Resume Street, City, Country</p>
    </div>

    <!-- Professional Summary -->
    <div class="section">
      <h2 class="section-title">Professional Summary</h2>
      <p>Highly motivated web developer with 3+ years of experience in building modern web applications using HTML, CSS, JavaScript, PHP, and React. Passionate about creating user-friendly, responsive, and aesthetically pleasing web solutions.</p>
    </div>

    <!-- Skills -->
    <div class="section">
      <h2 class="section-title">Skills</h2>
      <ul>
        <li>HTML, CSS, JavaScript, Bootstrap, jQuery</li>
        <li>PHP, MySQL, React.js, React Native</li>
        <li>UI/UX Design with Figma</li>
        <li>Responsive Web Design & Cross-browser Compatibility</li>
      </ul>
    </div>

    <!-- Experience -->
    <div class="section">
      <h2 class="section-title">Professional Experience</h2>
      <ul>
        <li><span>Front-End Developer | ABC Solutions</span> (2023 - Present)<br>
          Developed responsive web apps with React.js and optimized performance across multiple platforms.
        </li>
        <li><span>Full-Stack Developer | XYZ Technologies</span> (2021 - 2023)<br>
          Built PHP-MySQL applications with interactive UI and seamless backend integration.
        </li>
      </ul>
    </div>

    <!-- Education -->
    <div class="section">
      <h2 class="section-title">Education</h2>
      <ul>
        <li><span>Bachelor of Science in Computer Science</span> - University Name, 2017 - 2021</li>
        <li><span>High School Diploma</span> - School Name, 2015 - 2017</li>
      </ul>
    </div>

    <!-- Projects -->
    <div class="section">
      <h2 class="section-title">Projects</h2>
      <ul>
        <li><span>Resume Maker App:</span> Built a full-stack web application for creating resumes with multiple templates.</li>
        <li><span>DJ Booking App Clone:</span> Developed a booking system using React Native and PHP backend.</li>
      </ul>
    </div>

    <!-- Certifications -->
    <div class="section">
      <h2 class="section-title">Certifications</h2>
      <ul>
        <li>Full-Stack Web Development Certification - XYZ Academy</li>
        <li>React & React Native Professional Course - ABC Institute</li>
      </ul>
    </div>
  </div>
<div style="text-align:center; margin:30px 0;">
  <button onclick="downloadResume()" style="
    background:#00CED1;
    color:#fff;
    border:none;
    padding:12px 25px;
    font-size:16px;
    font-weight:bold;
    border-radius:8px;
    cursor:pointer;
    transition:0.3s;
  "
  onmouseover="this.style.background='#009999'" 
  onmouseout="this.style.background='#00CED1'">
    Download / Submit Resume
  </button>
</div>

<script>
function downloadResume() {
    window.print(); // Opens browser print dialog to save as PDF
}
</script>

  <!-- Footer -->
  <footer>
    © 2025 ResumeMaker. All rights reserved.
  </footer>
</body>

</html>
