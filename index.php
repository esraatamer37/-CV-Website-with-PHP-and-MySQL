<?php
error_reporting(E_ALL);
ini_set('display_errors', 1)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV of Esraa</title>
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 1rem;
            line-height: 1.6;
        }
        header {
            background-color: #6b0707;
            color: #cf3737;
            padding: 1rem;
        }
        nav ul {
            list-style: none;
            margin: 5px;
            padding: 1rem;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            margin:  1rem;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
        }
        nav ul li a:hover {
            color: #cf3737;
        }
        .bar {
            background-color: #f0f0f0;
            height: 2rem;
            width: 100%;
        }
        .intro {
            background-color: #fff;
            padding: 2rem;
            text-align: center;
        }
        .intro .icon {
            margin-left: 0.5rem;
        }
        section {
            padding: 2rem;
            border-bottom: 1px solid #eee;
        }
        section h2 {
            display: flex;
            align-items: center;
            font-size: 1.5rem;
        }
        section .icon {
            margin-left: 0.5rem;
        }
        form {
            max-width: 600px;
            margin: auto;
            padding: 1rem;
            background: #f9f9f9;
            border-radius: 5px;
        }
        form label {
            display: block;
            margin-top: 1rem;
        }
        form input, form textarea {
            width: 100%;
            padding: 0.5rem;
            margin-top: 0.5rem;
        }
        form button {
            display: block;
            width: 80%;
            padding: 0.5rem;
            background: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 1rem;
        }
        form button:hover {
            background: #555;
            width: 80%;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 1rem;
            display: flex;
            justify-content: center;
        }
        
        nav ul li {
            margin: 0 1rem;
        }
        
        nav ul li a {
            color: #ffffff;
            text-decoration: none;
        }
        
        .intro, section {
            background-color: #a5bea6;
            padding: 2rem;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: auto;
        }
        
        .intro .icon, section .icon {
            margin-left: 0.5rem;
        }
        
        hr {
            border: 1px ;
            margin: 2rem 0;
            width: 0%;
        }
        
        #contact {
            width: 50%;
            margin:  auto;
            padding: 2rem;
            background-color: #f0f0f0;
            border-radius: 8px;
        }
        
        #contact form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }
        
        #contact label {
            margin: 0.5rem ;
            font-weight: bold;
        }
        
        #contact input, #contact textarea {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        #contact button {
            padding: 1rem;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        #contact button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php

        $header = [
            ["link" => "#experience", "label" => "Experience"],
            ["link" => "#skills", "label" => "Skills"],
            ["link" => "#projects", "label" => "Projects"],
            ["link" => "#contact", "label" => "Contact"],
            ["link" => "#about", "label" => "About Me"],
            ["link" => "#education", "label" => "Education"]
        ];

        $intro = [
            "name" => "Esraa Tamer",
            "title" => "Software Developer",
            "address" => [
                "line" => "123 Abdel Fattah Ibrahim St, Bader, NR, 10001",
                "icon" => "https://img.icons8.com/?size=24&id=85798&format=png"
            ],
            "email" => [
                "line" => "esraa2alganna@gmail.com",
                "icon" => "https://img.icons8.com/?size=24&id=85500&format=png"
            ]
        ];

        $sections = [
            "about" => [
                "title" => "About Me",
                "icon" => "https://img.icons8.com/?size=26&id=12437&format=png",
                "content" => "in progress...."
            ],
            "education" => [
                "title" => "Education",
                "icon" => "https://img.icons8.com/?size=80&id=2TIqcjesvxCK&format=png",
                "content" => "in progress...."
            ],
            "experience" => [
                "title" => "Experience",
                "icon" => "https://img.icons8.com/?size=80&id=bCmhToD58Ji6&format=png",
                "content" => "in progress...."
            ],
            "skills" => [
                "title" => "Skills",
                "icon" => "https://img.icons8.com/?size=48&id=Zlp0ZPOfbcJG&format=png",
                "content" => "in progress...."
            ],
            "projects" => [
                "title" => "Projects",
                "icon" => "https://img.icons8.com/?size=30&id=64794&format=png",
                "content" => "in progress...."
            ]
        ];

        $contact = [
            "title" => "Contact us",
            "icon" => "https://img.icons8.com/?size=32&id=RgIoeLcuZEq1&format=png",
            "form" => [
                "fields" => [
                    ["label" => "Name", "type" => "text", "name" => "name", "required" => true],
                    ["label" => "Email", "type" => "email", "name" => "email", "required" => true],
                    ["label" => "Message", "type" => "textarea", "name" => "message", "required" => true]
                ],
                "submit" => "Send Message"
            ]
        ];

        $footer = "Created by Esraa Tamer";
    ?>

    <header>
        <nav>
            <ul>
                <?php foreach ($header as $navItem): ?>
                    <li><a href="<?= $navItem['link']; ?>"><?= $navItem['label']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>

    <div class="bar"></div>

    <section class="intro">
        <h2><?= $intro["name"]; ?></h2>
        <p><?= $intro["title"]; ?></p>
        <p>
            <?= $intro["address"]["line"]; ?>
            <span class="icon"><img src="<?= $intro["address"]["icon"]; ?>" alt="icon"></span>
        </p>
        <p>
            <?= $intro["email"]["line"]; ?>
            <span class="icon"><img src="<?= $intro["email"]["icon"]; ?>" alt="icon"></span>
        </p>
    </section>

    <hr>

    <?php foreach ($sections as $sectionId => $sectionData): ?>
        <section id="<?= $sectionId; ?>">
            <h2><?= $sectionData["title"]; ?> <span class="icon"><img src="<?= $sectionData["icon"]; ?>" alt="icon"></span></h2>
            <p><?= $sectionData["content"]; ?></p>
        </section>
        <hr>
    <?php endforeach; ?>

    <section id="contact">
        <h2><?= $contact["title"]; ?><span class="icon"><img src="<?= $contact["icon"]; ?>" alt="icon"></span></h2>
        <form action="contact_form_handler.php" method="post">
            <?php foreach ($contact["form"]["fields"] as $field): ?>
                <label><?= $field["label"]; ?></label>
                <?php if ($field["type"] == "textarea"): ?>
                    <textarea name="<?= $field["name"]; ?>" required></textarea>
                <?php else: ?>
                    <input type="<?= $field["type"]; ?>" name="<?= $field["name"]; ?>" required>
                <?php endif; ?>
            <?php endforeach; ?>
            <button type="submit"><?= $contact["form"]["submit"]; ?></button>
        </form>
    </section>

    <footer>
        <p><?= $footer; ?></p>
    </footer>
</body>
</html>
