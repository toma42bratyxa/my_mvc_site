<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Мой сайт-визитка</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        nav { margin-bottom: 20px; border-bottom: 1px solid #ccc; padding-bottom: 10px; }
        nav a { margin-right: 15px; text-decoration: none; color: blue; }
    </style>
</head>
<body>
    <nav>
        <a href="/my_mvc_site/">Главная</a>
        <a href="/my_mvc_site/about">О нас</a>
        <a href="/my_mvc_site/contacts">Контакты</a>
    </nav>
    <main>
        <?php include 'application/views/'.$content_view; ?>
    </main>
</body>
</html>