<?php
    require_once __DIR__ . '/vendor/propaganistas/email-obfuscator/src/Obfuscator.php';
?><!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sebastian Kenk</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
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
