### Задача №1

Даны два класса:

    <?php
        namespace Modules\Shop;
        
        class Cart
        {
            
        }
    ?>

    <?php
        namespace Modules\Shop;
        
        class UserCart extends \Modules\Shop\Cart
        {
            
        }
    ?>
Упростите код для наследования класса, учитывая то, что оба класса находятся в одном пространстве имен.

### Задача №2

Пусть в файле index.php создается объект класса Controller:

    <?php
        namespace Admin;
        
        new \Admin\Controller;
    ?>  

Упростите код для создания объекта, учитывая то, что создание объекта класса происходит в том же пространстве имен, которому принадлежит класс.

### Задача №3

Даны два класса:

    <?php
        namespace Modules\Shop\Core;
        
        class Cart
        {
            
        }
    ?>
    <?php
        namespace Modules\Shop;
        
        class UserCart extends \Modules\Shop\Core\Cart
        {
            
        }
    ?>
Упростите код для наследования класса, учитывая то, что пространства имен наших классов имеют совпадающую часть.

### Задача №4

Даны два класса:

    <?php
        namespace Core\Data;
        
        class Controller
        {
            
        }
    ?>
    <?php
        namespace Core\Data;
        
        class Model
        {
            
        }
    ?>
Вот так создаются объекты этих классов в файле index.php:

    <?php
        namespace Core\Data;
        
        $controller = new \Core\Data\Controller;
        $model      = new \Core\Data\Model;
    ?>
Упростите код для создания объектов, учитывая пространство имен, в котором создаются объекты наших классов.