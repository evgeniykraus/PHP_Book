<?php

namespace Core\Users;

class Data
{
    public function __construct($num)
    {
        var_dump($num);
    }
}

?>

<?php

namespace Project;

use Core\Users\Data;

class Test
{
    public function __construct()
    {
        // Создаем 3 объекта одного класса:
        $data1 = new Data('user1');
        $data2 = new Data('user3');
        $data3 = new Data('user3');
    }
}

new Test;