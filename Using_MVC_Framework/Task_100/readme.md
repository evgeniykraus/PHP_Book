# Таблица в БД

Для начала создадим таблицу pages в базе данных. Добавим туда колонки id, title и text. Заполним эту таблицу
какими-нибудь данными через PhpMyAdmin.

# Модель

Сделаем модель с методом для получения одной записи и методом для получения всех записей:

    <?php
        namespace Project\Models;
        use \Core\Model;
        
        class Page extends Model
        {
            public function getById($id)
            {
                return $this->findOne("SELECT * FROM pages WHERE id=$id");
            }
            
            public function getAll()
            {
                return $this->findMany("SELECT id, title FROM pages");
            }
        }
    ?>

# Роутинг

Сделаем соответствующий роутинг:

    <?php
        use \Core\Route;
        
        return [
            new Route('/page/:id', 'page', 'one'),
            new Route('/pages/',   'page', 'all'),
        ];
    ?>

# Контроллер
Сделаем контроллер:

    <?php
        namespace Project\Controllers;
        use \Core\Controller;
        use \Project\Models\Page;
        
        class PageController extends Controller
        {
            public function one($params)
            {
                $page = (new Page) -> getById($params['id']);
                
                $this->title = $page['title'];
                return $this->render('page/one', [
                    'text' => $page['text'],
                    'h1' => $this->title
                ]);
            }
            
            public function all()
            {
                $this->title = 'Список всех страниц';
                
                $pages = (new Page) -> getAll();
                return $this->render('page/all', [
                    'pages' => $pages,
                    'h1' => $this->title
                ]);
            }
        }
    ?>

# Представления
Сделаем представление для метода one:

    <h1><?= $h1; ?></h1>
    <div id="content">
        <?= $text; ?>
    </div>
Сделаем представление для метода all:

    <h1><?= $h1; ?></h1>
    <div id="content">
        <table>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>ссылка</th>
            </tr>
            <?php foreach ($pages as $page): ?>
            <tr>
                <td><?= $page['id']; ?></td>
                <td><?= $page['title']; ?></td>
                <td><a href="/page/<?= $page['id']; ?>/">ссылка на страницу</td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>

### Задача №1

Пусть у вас в базе данных есть продукты. Каждый продукт содержит название, цену и количество, описание. Реализуйте вывод
одного продукта по id и всех продуктов подобно тому, как это сделано в теории.