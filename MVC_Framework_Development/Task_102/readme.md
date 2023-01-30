# Работа с роутами в своем MVC фреймворке
Вы уже знаете, что в файле /project/config/routes.php размещаются роуты, указывающие соответствия между URL и контроллерами с действиями. Роуты представляют собой объекты класса Route. Давайте сделаем этот класс в файле /core/Route.php:

    <?php
        namespace Core;
        
        class Route
        {
            private $path;
            private $controller;
            private $action;
            
            public function __construct($path, $controller, $action)
            {
                $this->path = $path;
                $this->controller = $controller;
                $this->action = $action;
            }
            
            public function __get($property)
            {
                return $this->$property;
            }
        }
    ?>
Как вы видите, в этом классе свойства предназначены только для чтения, что достигается использованием магии.

Загляните теперь в файл с роутами. Вы можете увидеть, что там находится массив, который возвращается через return. Это значит, что если подключить такой файл через require, то результат подключения можно записать в переменную и в этой переменной окажется наш массив:

    <?php
        namespace Core;
        
        error_reporting(E_ALL);
        ini_set('display_errors', 'on');
        
        spl_autoload_register(function($class) {
            // ваша реализация автозагрузки
        });
        
        // Прочитываем массив из файла с роутами в переменную:
        $routes = require $_SERVER['DOCUMENT_ROOT'] . '/project/config/routes.php';
    ?>
### Задача №1

Скопируйте код моего класса Route и разместите его в файле /core/Route.php.

### Задача №2

Получите массив с роутами в файле index.php.