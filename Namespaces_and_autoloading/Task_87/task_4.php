<?php

namespace Core\Data;

class Controller
{
    public function __construct()
    {
        echo "Controller";
    }
}

?>
<?php

namespace Core\Data;

class Model
{
    public function __construct()
    {
        echo "Model";
    }
}

?>

<?php
namespace Core\Data;

$controller = new Controller;
$model = new Model;
?>
