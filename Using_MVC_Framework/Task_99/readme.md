Пусть в вашей базе данных есть таблица page с какими-нибудь записями. Давайте сделаем модель Page с двумя методами.
Первый метод будет получать одну запись по ее id, а второй метод - получать массив записей из диапазона id:

    <?php
        namespace Project\Models;
        use \Core\Model;
        
        class Page extends Model
        {
            public function getById($id)
            {
                return $this->findOne("SELECT * FROM page WHERE id=$id");
            }
            
            public function getByRange($from, $to)
            {
                return $this->findMany("SELECT * FROM page WHERE id>=$from AND id<=$to");
            }
        }
    ?>

Давайте теперь поработаем с нашей моделью в контроллере:

    <?php
        namespace Project\Controllers;
        use \Core\Controller;
        use \Project\Models\Page; // подключаем нашу модель
        
        class PageController extends Controller
        {
            public function test() {
                $page = new Page; // создаем объект модели
            
                $data = $page->getById(3); // получим запись с id=3
                var_dump($data);
                
                $data = $page->getById(5); // получим запись с id=5
                var_dump($data);
                
                $data = $page->getByRange(2, 5); // записи с id от 2 до 5
                var_dump($data);
            }
        }
    ?>

### Задача №1

Создайте в вашей базе данных таблицу page, заполните ее данными. Проверьте работу кода, описанного в теории.