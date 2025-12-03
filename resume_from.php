
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResumeMaker - Resume Form</title>
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

        .cta {
            background-color: #00CED1;
            color: #fff;
            padding: 12px 25px;
            border-radius: 6px;
            font-weight: bold;
            text-decoration: none;
            transition: background 0.3s;
        }

        .cta:hover {
            background-color: #20B2AA;
        }

        .menu-toggle {
            display: none;
            font-size: 28px;
            cursor: pointer;
            color: #fff;
        }

        /* Resume Form Section */
        .form-section {
            max-width: 900px;
            margin: 60px auto;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .form-section h2 {
            color: #00CED1;
            text-align: center;
            margin-bottom: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        input,
        textarea,
        select {
            padding: 12px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 16px;
            width: 100%;
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: #00CED1;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background-color: #20B2AA;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 25px;
            background-color: #F0FFFF;
            font-weight: bold;
            color: #333;
            margin-top: 40px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                gap: 10px;
            }

            nav ul {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="logo">ResumeMaker</div>
        <nav>
            <ul id="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#templates">Templates</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <a href="index.html" class="cta">Back to Home</a>
        <div class="menu-toggle" onclick="toggleMenu()">☰</div>
    </header>

    <!-- Resume Form Section -->
<section class="form-section">
    <h2>Fill Your Resume Details</h2>
    <form action="resume_back.php" method="POST" enctype="multipart/form-data">

        <!-- Personal Info -->
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" placeholder="Full Name" required>
        
        <label for="jobroll">Job Roll:</label>
        <input type="text" id="jobroll" name="jobroll" placeholder="jobroll" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" placeholder="Email Address" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" placeholder="Phone Number" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" placeholder="Address" required>

        <!-- Professional Summary -->
        <label for="summary">About You:</label>
        <textarea id="summary" name="summary" placeholder="Professional Summary" rows="4" required></textarea>

        <!-- Skills -->
        <div id="skills-section">
            <label>Skills:</label>
            <div id="skills-container">
                <div class="skill-item">
                    <input type="text" name="skills[]" placeholder="Enter a skill" required>
                </div>
            </div>
            <button type="button" onclick="addInput('skills-container','skills[]','Enter a skill')">Add Skill</button>
        </div>

        <!-- Experience -->
        <div id="experience-section">
            <label>Work Experience:</label>
            <div id="experience-container">
                <div class="experience-item">
                    <textarea name="experience[]" placeholder="Work Experience (Job Title, Company, Years)" rows="2"></textarea>
                </div>
            </div>
            <button type="button" onclick="addInput('experience-container','experience[]','Work Experience', true)">Add Experience</button>
        </div>

        <!-- Education -->
        <div id="education-section">
            <label>Education:</label>
            <div id="education-container">
                <div class="education-item">
                    <textarea name="education[]" placeholder="Education (Degree, Institution, Year)" rows="2"></textarea>
                </div>
            </div>
            <button type="button" onclick="addInput('education-container','education[]','Education', true)">Add Education</button>
        </div>

        <!-- Projects -->
        <div id="projects-section">
            <label>Projects:</label>
            <div id="projects-container">
                <div class="project-item">
                    <textarea name="projects[]" placeholder="Projects (Name, Description)" rows="2"></textarea>
                </div>
            </div>
            <button type="button" onclick="addInput('projects-container','projects[]','Project', true)">Add Project</button>
        </div>

        <!-- Certifications -->
        <div id="certifications-section">
            <label>Certifications:</label>
            <div id="certifications-container">
                <div class="cert-item">
                    <input type="text" name="certifications[]" placeholder="Certification Name">
                </div>
            </div>
            <button type="button" onclick="addInput('certifications-container','certifications[]','Certification')">Add Certification</button>
        </div>

        <!-- File Uploads -->
        <label for="profile_pic">Upload Profile Picture:</label>
        <input type="file" id="profile_pic" name="profile_pic" accept="image/*">

        <label for="portfolio">Upload Portfolio link:</label>
        <input type="text" id="portfolio" name="portfolio">

        <button type="submit">Generate Resume</button>
    </form>
</section>




    <!-- Footer -->
    <footer>
        © 2025 ResumeMaker. All rights reserved.
    </footer>

   
</body>

<script>
function toggleMenu() {
    const nav = document.getElementById('nav-links');
    nav.classList.toggle('active');
}

// Generic function to add input or textarea
function addInput(containerId, name, placeholder, isTextarea=false){
    const container = document.getElementById(containerId);

    const div = document.createElement('div');
    div.style.marginBottom = '10px';

    let input;
    if(isTextarea){
        input = document.createElement('textarea');
        input.rows = 2;
    } else {
        input = document.createElement('input');
        input.type = 'text';
    }
    input.name = name;
    input.placeholder = placeholder;
    input.required = false;

    // Cancel button
    const cancelBtn = document.createElement('button');
    cancelBtn.type = 'button';
    cancelBtn.textContent = 'Cancel';
    cancelBtn.style.marginLeft = '10px';
    cancelBtn.onclick = function(){ div.remove(); }

    div.appendChild(input);
    div.appendChild(cancelBtn);
    container.appendChild(div);
}
</script>

</html>













