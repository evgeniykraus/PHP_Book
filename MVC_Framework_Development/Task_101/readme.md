# Точка входа

Для начала в корневой папке вашего домена сделаем файл index.php со следующим содержанием:

    <?php
        namespace Core;
        
        error_reporting(E_ALL);
        ini_set('display_errors', 'on');
    ?>

### Задача №1

Создайте файл index.php и добавьте в него указанные строки.

# Настраиваем htaccess

Теперь сделаем так, чтобы все запросы из адресной строки адресовались на наш файл index.php. То есть всё, что бы не вбил
пользователь в браузер будет адресоваться на index.php, а код этого файла будет разбираться с тем, какую именно страницу
показать пользователю.

Вот содержимое файла htaccess:

    RewriteEngine On
    RewriteBase /
    
    RewriteCond %{REQUEST_URI} !^/project/webroot/
    RewriteRule .+ index.php

### Задача №2

Создайте файл htaccess. Выполните описанную настройку. Проверьте ее работу: все адреса, кроме адресов из папки
project/webroot должны редиректится на index.

# Автозагрузка классов

Наш учебный фреймворк использует нестандартные правила для автозагрузки классов (расскажите, в чем отличия), поэтому нам
придется реализовать свою автозагрузку в файле index.php:

    <?php
        namespace Core;
        
        error_reporting(E_ALL);
        ini_set('display_errors', 'on');
        
        spl_autoload_register(function($class) {
            // ваша реализация автозагрузки
        });
    ?>

### Задача №3

Реализуйте функцию автозагрузки. Проверьте ее работу.