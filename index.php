<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResumeMaker - Full Website</title>
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

        /* Hero Section */
        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 150px 20px;
            min-height: 100vh;
            background-color: #F0FFFF;
        }

        .hero h1 {
            font-size: 50px;
            color: #003333;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
        }

        .hero a {
            background-color: #00CED1;
            color: #fff;
            padding: 18px 35px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
            transition: background 0.3s;
        }

        .hero a:hover {
            background-color: #20B2AA;
        }

        /* Features Section */
        .features {
            padding: 60px 20px;
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
        }

        .feature-card {
            background-color: #ffffff;
            padding: 30px 25px;
            border-radius: 12px;
            flex: 1 1 280px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .feature-card h3 {
            color: #00CED1;
            margin-bottom: 15px;
        }

        .feature-card p {
            line-height: 1.6;
        }

        /* Templates Section */
        .templates {
            padding: 80px 20px;
            background-color: #E0FFFF;
            text-align: center;
        }

        .templates h2 {
            color: #00CED1;
            margin-bottom: 50px;
        }

        .template-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
            justify-content: center;
        }

        .template-card {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            width: 250px;
            height: 350px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #00CED1;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .template-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        /* About Section */
        .about {
            padding: 80px 20px;
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        }

        .about h2 {
            color: #00CED1;
            margin-bottom: 25px;
        }

        .about p {
            line-height: 1.6;
            font-size: 18px;
        }

        /* Contact Section */
        .contact {
            padding: 80px 20px;
            background-color: #E0FFFF;
            
        }

        .contact-container {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            max-width: 900px;
            margin: 0 auto;
            align-items: flex-start;
        }

        .contact-details {
            flex: 1 1 300px;
        }

        .contact-details h2 {
            color: #00CED1;
            margin-bottom: 25px;
        }

        .contact-details p {
            margin-bottom: 20px;
            font-size: 16px;
        }

        .contact-details a {
            color: #00CED1;
            text-decoration: none;
            font-weight: bold;
        }

        .contact-form {
            flex: 1 1 300px;
        }

        .contact-form form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .contact-form input,
        .contact-form textarea {
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .contact-form button {
            background-color: #00CED1;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        .contact-form button:hover {
            background-color: #20B2AA;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 25px;
            background-color: #F0FFFF;
            font-weight: bold;
            color: #333;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }

            nav ul {
                flex-direction: column;
                gap: 20px;
                display: none;
                position: fixed;
                top: 0;
                right: -260px;
                width: 260px;
                height: 100%;
                background-color: #E0FFFF;
                padding: 80px 20px;
                border-radius: 0;
                transition: right 0.3s ease;
                z-index: 200;
                box-shadow: -4px 0 6px rgba(0, 0, 0, 0.1);
            }

            nav ul.active {
                right: 0;
                display: flex;
            }

            .contact-container {
                flex-direction: column;
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
                <li><a href="#hero">Home</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#templates">Templates</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <a href="resume_from.php" class="cta">Create Resume</a>
        <div class="menu-toggle" onclick="toggleMenu()">☰</div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="hero">
        <h1>Transform Your Skills into Opportunities<br> with a Powerful Resume</h1>
        <p>Fill in minimal details, choose a template, and download your professional resume instantly!</p>
        <a href="resume_from.php">Get Started</a>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="feature-card">
            <h3>Quick & Easy</h3>
            <p>Minimal effort required. Your resume is ready in minutes.</p>
        </div>
        <div class="feature-card">
            <h3>Professional Templates</h3>
            <p>Choose from modern, clean, and professional resume templates.</p>
        </div>
        <div class="feature-card">
            <h3>Instant Download</h3>
            <p>Get your resume in PDF format immediately.</p>
        </div>
    </section>

    <!-- Templates Section -->
    <section class="templates" id="templates">
        <h2>Resume Templates</h2>
        <div class="template-grid">
            <div class="template-card">Template 1</div>
            <div class="template-card">Template 2</div>
            <div class="template-card">Template 3</div>
            <div class="template-card">Template 4</div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <h2>About ResumeMaker</h2>
        <p>ResumeMaker is a free online tool that helps you create professional resumes quickly and efficiently. No
            design skills required.</p>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="contact-container">
            <!-- Left Side: Contact Details -->
            <div class="contact-details">
                <h2>Contact Us</h2>
                <p><strong>Email:</strong> <a href="mailto:support@resumemaker.com">support@resumemaker.com</a></p>
                <p><strong>Phone:</strong> +91 9876543210</p>
                <p><strong>Address:</strong> 123 Resume Street, City, Country</p>
            </div>

            <!-- Right Side: Contact Form -->
            <div class="contact-form">
                <form>
                    <input type="text" placeholder="Your Name" required>
                    <input type="email" placeholder="Your Email" required>
                    <textarea placeholder="Your Message" rows="5" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        © 2025 ResumeMaker. All rights reserved.
    </footer>

    <script>
        function toggleMenu() {
            const nav = document.getElementById('nav-links');
            nav.classList.toggle('active');
        }
    </script>

</body>

</html>
