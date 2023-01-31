Последнее, что нам осталось реализовать, это работа с моделями. Для начала давайте в файле index.php подключим файл с
настройками подключения к базе данных (разместим это подключение вверху файла):

    <?php
        namespace Core;
        
        error_reporting(E_ALL);
        ini_set('display_errors', 'on');
        
        require_once $_SERVER['DOCUMENT_ROOT'] . '/project/config/connection.php';
        
        ...
    ?>

Файл настроек содержит константы PHP. После подключения файла эти константы будут доступны во всех вызываемых нами
классах.

# Родитель всех моделей

Давайте реализуем родительский класс всех моделей:

    <?php
        namespace Core;
        
        class Model
        {
            private $link;
            
            public function __construct()
            {
                $this->link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                mysqli_query($this->link, "SET NAMES 'utf8'");
            }
            
            protected function findOne($query)
            {
                // тут будет какой-то код
            }
            
            protected function findMany($query)
            {
                // тут будет какой-то код
            }
        }
    ?>

Как вы видите, в конструкторе класса мы осуществляем подключение к базе данных. Есть, однако, проблема: каждая
создаваемая модель (если внутри одного действия контроллера будет несколько моделей) будет делать свое подключение к
базе данных, а это не оптимально.

Давайте сделаем так, чтобы подключение к базе создавалось только для первой созданной модели, а остальные модели
использовали уже созданное подключение. Для этого свойство link сделаем статическим:

    <?php
        namespace Core;
        
        class Model
        {
            private static $link;
            
            public function __construct()
            {
                if (!self::$link) { // если свойство не задано, то подключаемся
                    self::$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                    mysqli_query(self::$link, "SET NAMES 'utf8'");
                }
            }
            
            protected function findOne($query)
            {
                
            }
            
            protected function findMany($query)
            {
                
            }
        }
    ?>

### Задача №1

Скопируйте приведенный код класса Model и разместите его в файле /core/Model.php.

### Задача №2

Реализуйте метод findOne в этом классе. Проверьте его работу.

### Задача №3

Реализуйте метод findMany в этом классе. Проверьте его работу.