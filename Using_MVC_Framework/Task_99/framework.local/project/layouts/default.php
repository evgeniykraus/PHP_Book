<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/project/webroot/styles.css">
    <title><?= $title ?></title> <!-- выводим тайтл страницы -->
    <img src="/project/webroot/PHP-logo.jpg">
</head>
<body>
<header>
    хедер сайта
</header>
<div class="container">
    <aside class="sidebar left">
        левый сайдбар
    </aside>
    <main>
        <?= $content ?>
    </main>
    <aside class="sidebar right">
        правый сайдбар
    </aside>
</div>
<footer>
    футер сайта
</footer>
</body>
</html>