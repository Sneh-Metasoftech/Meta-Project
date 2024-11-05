<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optimize Your Data Strategy</title>
    <style>
        /* Resetting some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            color: #333;
        }

        /* Container for the whole layout */
        .container {
            display: flex;
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        /* Sidebar styles */
        .sidebar {
            width: 20%;
            padding-right: 20px;
        }

        .sidebar ul {
            list-style: none;
            padding: 10px;
        }

        .sidebar ul li {
            margin: 10px 0;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        /* Main content area */
        .main-content {
            width: 80%;
        }

        .main-content h1 {
            font-size: 2.5em;
            font-weight: lighter;
            margin-bottom: 20px;
        }

        .tab-menu {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .tab-menu button {
            background: none;
            border: 2px solid #333;
            padding: 10px 20px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        .tab-menu button.active {
            background-color: #333;
            color: #fff;
        }

        .tab-menu button:hover {
            background-color: #f0f0f0;
        }

        /* Content section with image and text */
        .content-section {
            display: none; /* Hide all sections by default */
            flex: 1;
            gap: 20px;
            align-items: center;
        }

        .content-section.active {
            display: flex; /* Show only the active section */
        }

        .content-text {
            flex: 1;
        }

        .content-text h2 {
            font-size: 1.8em;
            margin-bottom: 10px;
        }

        .content-text p {
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .content-text a {
            color: #0072c6;
            text-decoration: none;
            font-weight: bold;
        }

        .content-image {
            width: 300px;
        }

        .content-image img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Sidebar Navigation -->
    <aside class="sidebar">
        <ul>
            <li><a href="#">Overview</a></li>
            <li><a href="#">Statistics</a></li>
            <li><a href="#">Why Expert Labs?</a></li>
            <li><a href="#">Solutions</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Case studies</a></li>
            <li><a href="#">Featured technologies</a></li>
            <li><a href="#">Next steps</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <h1>Designed for your business</h1>

        <!-- Tab Menu -->
        <div class="tab-menu">
            <button onclick="showTab(0)" class="active">Optimize your data strategy</button>
            <button onclick="showTab(1)">Automate your business</button>
            <button onclick="showTab(2)">Build sustainability into your business</button>
            <button onclick="showTab(3)">Accelerate your security posture</button>
            <button onclick="showTab(4)">Deploy next-gen infrastructure</button>
            <button onclick="showTab(5)">Adopt IBM Cloud</button>
        </div>

        <!-- Content Sections -->
        <div class="content-section active">
            <div class="content-text">
                <h2>Optimize your AI and data strategy</h2>
                <p>
                    Use the power of INS watsonx™ to deliver more value with your data. Through our market-leading solutions,
                    you can build and deploy artificial intelligence (AI) apps with ease. Scale AI workloads with all your data,
                    anywhere. Monitor and govern the entire AI lifecycle and deliver intelligent customer care with conversational AI.
                </p>
                <a href="#">Read the story →</a>
            </div>
            <div class="content-image">
                <img src="https://via.placeholder.com/300" alt="Data Strategy Illustration">
            </div>
        </div>

        <div class="content-section">
            <div class="content-text">
                <h2>Automate your business</h2>
                <p>
                    Streamline operations with automation solutions that increase efficiency, reduce errors, and free up your team's time
                    for more strategic work.
                </p>
                <a href="#">Read the story →</a>
            </div>
            <div class="content-image">
                <img src="https://via.placeholder.com/300" alt="Automation Illustration">
            </div>
        </div>

        <div class="content-section">
            <div class="content-text">
                <h2>Build sustainability into your business</h2>
                <p>
                    Implement strategies that reduce your environmental impact and drive sustainable growth.
                </p>
                <a href="#">Read the story →</a>
            </div>
            <div class="content-image">
                <img src="https://via.placeholder.com/300" alt="Sustainability Illustration">
            </div>
        </div>

        <div class="content-section">
            <div class="content-text">
                <h2>Accelerate your security posture</h2>
                <p>
                    Protect your business with solutions designed to keep your data and infrastructure secure.
                </p>
                <a href="#">Read the story →</a>
            </div>
            <div class="content-image">
                <img src="https://via.placeholder.com/300" alt="Security Illustration">
            </div>
        </div>

        <div class="content-section">
            <div class="content-text">
                <h2>Deploy next-gen infrastructure</h2>
                <p>
                    Future-proof your business with scalable, modern infrastructure solutions.
                </p>
                <a href="#">Read the story →</a>
            </div>
            <div class="content-image">
                <img src="https://via.placeholder.com/300" alt="Infrastructure Illustration">
            </div>
        </div>

        <div class="content-section">
            <div class="content-text">
                <h2>Adopt IBM Cloud</h2>
                <p>
                    Embrace the power and flexibility of cloud solutions to accelerate your digital transformation.
                </p>
                <a href="#">Read the story →</a>
            </div>
            <div class="content-image">
                <img src="https://via.placeholder.com/300" alt="Cloud Illustration">
            </div>
        </div>
    </main>
</div>

<script>
    function showTab(index) {
        const tabs = document.querySelectorAll('.tab-menu button');
        const contentSections = document.querySelectorAll('.content-section');
        
        // Remove 'active' class from all tabs and content sections
        tabs.forEach(tab => tab.classList.remove('active'));
        contentSections.forEach(section => section.classList.remove('active'));

        // Add 'active' class to the clicked tab and corresponding content section
        tabs[index].classList.add('active');
        contentSections[index].classList.add('active');
    }
</script>

</body>
</html>
