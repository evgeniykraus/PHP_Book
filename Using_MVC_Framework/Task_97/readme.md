### Задача №1

Разместите в файле с шаблоном вот такой макет сайта по пути: /project/layouts/default.php:

    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>тайтл страницы</title>
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

Зайдите на любое действие любого контроллера. Посмотрите, что поменялось.

### Задача №2

Модифицируйте файл шаблона и все ваши контроллеры так, чтобы для каждого представления выводился свой тайтл.

### Задача №3

Пусть в контроллере Page дан следующий массив:

    <?php
        $this->pages = [
            1 => ['title'=>'страница 1', 'text'=>'текст страницы 1'],
            2 => ['title'=>'страница 2', 'text'=>'текст страницы 2'],
            3 => ['title'=>'страница 3', 'text'=>'текст страницы 3'],
        ];
    ?>

Сделайте действие show, которое будет выводить заданную страницу. Пусть в представлении текст страницы из ключа 'text'
будет обернут в абзац, а текст из ключа 'title' станет тайтлом страницы.