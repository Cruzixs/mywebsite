<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .navbar {
            display: flex;
            justify-content: center;
            background: #444;
            flex-wrap: wrap;
        }
        .navbar a {
            color: #fff;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
        }
        .navbar a:hover {
            background: #575757;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        #main {
            padding: 20px;
            background: #fff;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
        @media (max-width: 600px) {
            .navbar {
                flex-direction: column;
            }
            .navbar a {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Welcome to My Portfolio</h1>
        </div>
    </header>
    <div class="navbar">
        <a href="#about">About Me</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
    </div>
    <div class="container">
        <div id="main">
            <h2 id="about">About Me</h2>
            <p>Hi, I'm [Your Name], a [Your Profession].</p>
            <h2 id="projects">Projects</h2>
            <ul>
                <?php
                    $projects = [
                        ['title' => 'Project One', 'description' => 'Description for project one.'],
                        ['title' => 'Project Two', 'description' => 'Description for project two.'],
                        ['title' => 'Project Three', 'description' => 'Description for project three.']
                    ];

                    foreach ($projects as $project) {
                        echo "<li><strong>{$project['title']}</strong>: {$project['description']}</li>";
                    }
                ?>
            </ul>
            <h2 id="contact">Contact</h2>
            <p>Email: youremail@example.com</p>
        </div>
    </div>
    <footer>
        <p>Copyright &copy; 2024 Your Name</p>
    </footer>
</body>
</html>
