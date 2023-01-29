### Задача №1

Упростите следующий код с использованием use:

    <?php
        namespace Project;
        
        class Test
        {
            public function __construct()
            {
                // Создаем 3 объекта одного класса:
                $data1  = new \Core\Users\Data('user1');
                $data2  = new \Core\Users\Data('user3');
                $data3  = new \Core\Users\Data('user3');
            }
        }
    ?>

### Задача №2

Даны следующие классы:

    <?php
        namespace Core\Admin;
        
        class Controller
        {
            
        }
    ?>
    <?php
        namespace Users;
        
        class Page extends \Core\Admin\Controller
        {
            
        }
    ?>

Упростите код наследования класса,

### Задача №3

Упростите следующий код с использованием use:

    <?php
        namespace Project;
        
        class Test
        {
            public function __construct()
            {
                $model = new \Core\Admin\Model;
                $data  = new \Core\Users\Storage\Data;
            }
        }
    ?>

### Задача №4

Упростите следующий код с использованием use:

    <?php
        namespace Core\Storage;
        
        class Model
        {
            public function __construct()
            {
                $database  = new \Core\Storage\DataBase;
            }
        }
    ?>