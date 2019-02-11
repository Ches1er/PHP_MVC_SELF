<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title><?=$data['title']?></title>
</head>
<body>
<header>
    <ul>
        <li><a href="/">Main</a></li>
        <li><a href="/contacts">Contacts</a></li>
        <li><a href="/portfolio">Portfolio</a></li>
        <li><a href="/services">Services</a></li>
    </ul></header>
<?php include 'application/views/'.$content_view;?>
</body>
</html>