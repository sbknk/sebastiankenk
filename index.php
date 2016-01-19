<?php
    require_once __DIR__ . '/vendor/propaganistas/email-obfuscator/src/Obfuscator.php';
?><!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sebastian Kenk</title>
    <link rel="shortcut icon" href="/images/favicon.ico" />
    <link href="/css/style.css" type="text/css" rel="stylesheet" />
    <script src="/vendor/propaganistas/email-obfuscator/assets/EmailObfuscator.js"></script>
</head>
<body>
    <section id="wrapper">
        <div class="profile">
            <header id="header">
                <img id="avatar" src="/images/avatar.jpg"/>
                <h1>Sebastian Kenk</h1>
                <h2>Looking for me?</h2>
            </header>
        </div>

        <div class="home">
            <p>I am a highly passionate web developer based in Freiburg, Germany. One day I will have a website, and that day is coming soon.<br />For now you can <?= obfuscateEmail('<a href="mailto:hey@sebastiankenk.de">drop me a line</a>')?>.</p>
        </div>

        <footer id="footer">
            <p class="small">© Copyright 2016 Sebastian Kenk</p>
        </footer>
    </section>
</body>
</html>
