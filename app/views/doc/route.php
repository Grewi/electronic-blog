<use layout="index" />

<block name="index">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <h1 class="navbar-brand mb-0 h1">Маршрутизация</h1>
        </div>
    </nav>
    <div class="card">
        <div class="card-body">

            Настройки маршрутизации находятся в директории <span class="badge bg-secondary">app/route</span>. Маршрутизация web запросов
            располагается в файле <span class="badge bg-secondary">app/config/web.php</span> для запросов через консоль в файле <span class="badge bg-secondary">app/config/console.php</span>

            <h2>Web маршрутизация</h2>
            Пример файла <span class="badge bg-secondary">web.php</span>

            <code class="language-php">use system\core\route\route;
use app\controllers\error\error;

$route = route::connect();
$route->filter('auth', 'index');

$route->namespace('app/controllers/index');
$route->get('/')->controller('indexController', 'index')->exit();

error::error404();</code>

            <h3>Методы prefix и filter</h3>
            Файлы <strong class="badge bg-secondary">prefix</strong> находятся в папке <strong class="badge bg-secondary">app/prefix</strong>
            <br> Пример класса prefix:
            <code class="language-php">namespace app\prefix;
use system\core\view\view;
class forGuest
{
    public function index():bool
    {
        if(user_id() > 0){
            return false;
        }
    }
}</code>
            Класс предназначен для различных проверок, должен содержать обязательный метод <strong class="badge bg-secondary">index</strong>
            и возвращать булевое значение. Вызов префикса осуществляется в цепочке методов:
            <code class="language-php">$route->get('/')->prefix('forGuest')->controller('indexController', 'index')->exit();</code>

            <br>
            Файлы <strong class="badge bg-secondary">filter</strong> находятся в папке <strong class="badge bg-secondary">app/filter</strong>
            Класс также предназначен для выполнения различных проверок и должен содержать обязательный метод <strong class="badge bg-secondary">index</strong>.
            <br>
            Класс фильтра ничего не возращает и не может быть вызван в цепочке. Пример вызова фильтра:
            <code class="language-php">$route->filter('auth');</code>

            <h3>Метод namespace</h3>
            Метод <strong class="badge bg-secondary">namespace</strong> устанавливает значение пути для контроллеров.
            Установленное значение может использоваться для вызова контроллерров в цепочках, до тех пор, пока не
            будет установленно новое значение. Пример:
            <code class="language-php">$route->namespace('app/controllers/auth');</code>


            <h3>Методы get и post</h3>
            Методы обрабатывают соответствующие web запросы и принимают, в качестве аргумента, строку с 
            маской url строки. В случае совпадения типа запроса и маски, следующий метод в цепочке продолжит
            обработку запроса, иначе запрос в цепочке будет проигнорирован. <br>
            Маска должна начинаться со слеша, может содержать обязательные параметры в фигурных скобках и 
            не обязательные параметры в фигурных скобках со знаком вопроса.
            <code class="language-php">$route->get('/users/{id}/{str?}')->controller('users', 'index')->exit();</code>

            <h3>Метод controller</h3>
            Метод подключает необходимый контроллер. Принимает в качестве аргументов наименование класса и метода.

            <h3>Метод exit</h3>
            Метод очевидным образом завершает цепочку.
        </div>
    </div>
</block>
