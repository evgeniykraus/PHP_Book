<?php

namespace Core\Admin;

class Controller
{
    public function __construct()
    {
        echo "Core\Admin\Controller";
    }
}

?>

<?php

namespace Users;

use Core\Admin\Controller;

class Page extends Controller
{
    public function __construct()
    {
        echo "Users";
        echo "<br>";
        new Controller;
    }
}

new Page();

?>