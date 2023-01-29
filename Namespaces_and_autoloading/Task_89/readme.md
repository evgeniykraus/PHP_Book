### Задача №1

Упростите следующий код с использованием use:

    <?php
        namespace Project;
        
        class Test
        {
            public function __construct()
            {
                $pageController  = new \Resource\Controller\Page;
                $pageModel       = new \Resource\Model\Page;
            }
        }
    ?>
### Задача №2

Упростите следующий код с использованием use:

    <?php
        namespace Project\Data;
        
        class Test
        {
            public function __construct()
            {
                $pageController  = new \Project\Data\Controller\Page;
                $pageModel       = new \Project\Data\Model\Page;
            }
        }
    ?>