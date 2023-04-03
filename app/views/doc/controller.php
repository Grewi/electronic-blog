<use layout="index" />

<block name="index">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <h1 class="navbar-brand mb-0 h1">Контроллер</h1>
        </div>
    </nav>
    Контроллер, это класс в который роутер перенаправляет запрос, для контроллеров существует специальная директрия
    <span class="badge bg-secondary">app/controllers</span>, но технически они могут располагаться в любом месте
     на которое указывает коммана <span class="badge bg-secondary">namespace</span> в роутере. Пример контроллера:
     <code class="language-php">namespace app\controllers\doc;
use app\controllers\controller;
use system\core\view\view;

class controllerController extends controller
{
    public function index()
    {
        $this->title('Контроллер');
        new view('doc/controller', $this->data);
    }
}</code>

По умолчанию, контроллер наследуется от абстрактного  класса <span class="badge bg-secondary">app/controllers/controller.php</span>
Данный файл содержит общие для всех контроллеров данной системы свойства и методы.
</block>