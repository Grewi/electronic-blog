<use layout="index" />

<block name="index">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <h1 class="navbar-brand mb-0 h1">Модели</h1>
        </div>
    </nav>
    <div class="card">
        <div class="card-body">
Каждый класс модели отвечает за взаимодействие с конкретной таблицей в базе данных. Для создания класса модели 
необходимо создать файл в директории <span class="badge bg-secondary">app/models</span>, может генерироваться командой:
<code class="language-shell">$ php e create/model name</code>
Пример файла:
<code class="language-php">namespace app\models;
use system\core\model\model;
class doc extends model
{
    public function index()
    {

    }
}</code>
Родительский класс <span class="badge bg-secondary">model</span> имеет ряд методов, позволяющих устанавливать запрос 
в базу данных и формировать цепочку. Пример запроса:
<code class="language-php">use app\models\users;
users::where(user_id())->get();
</code>

<h3>Метод where</h3>
Метод позволяет формировать условия запроса, множественный вызов метода объединяет их логическим "И".<br>
Метод может принимать один, два или три параметра. В случае передачи одного парметра будет сформирован запрос
поиска идентификатора:
<code class="language-php">users::where('1')->get();</code>
Будет равнозначна:
<code class="language-sql">SELECT * FROM model WHERE id = 1;</code>
При передаче двух параметров, первый параметр указывает имя столбца, а второе его значение:
<code class="language-php">users::where('user_id','1')->get();</code>
При передаче трёх параметров добавляется оператор сравнения:
<code class="language-php">users::where('user_id', '!=', '1')->all();</code>

<h3>Методы whereNull и whereNotNull</h3>
Данные методы принимают в качестве параметра имя столбца, которое должно быть рано/не равно null.
<code class="language-php">users::whereNull('user_id')->all();</code>

<h3>Методы whereStr</h3>
Метод принимает SQL запрос и массив значений. Предназначен для сложных запросов.
<code class="language-php">$data = [
    'user' => 1,
    ];
users::whereStr('WHERE user_id = :user', $data)->get();</code>

<h3>Метод whereIn</h3>
Метод принимает два аргумента. Первый, это строка с именем поля, а второй, массив возможных значений.
<code class="language-php">users::whereIn('id', [1, 5, 10, 20])->all();</code>

<h3>Метод leftJoin</h3>
Принимает три параметра. Первый, имя таблицы, два других связанные ячейки.
<code class="language-php">users::leftJoin('permission', 'permission.id', user.permission_id)->get();</code>

<h3>Метод select</h3>
По умолчанию имеет значение <span class="badge bg-secondary">*</span>, в качестве параметра принимает произвольную строку.
<code class="language-php">users::select('id, mame')->where(1)->get();</code>

<h3>Метод limit</h3>
В качестве параметра принимает число.
<code class="language-php">users::select('id, mame')->where('name', 'Ivan')->limit(1)->get();</code>

<h3>Метод sort</h3>
В качестве параметра принимает <span class="badge bg-secondary">asc</span> или <span class="badge bg-secondary">desc</span>
По умолчанию имеет значение <span class="badge bg-secondary">DESC</span>
<code class="language-php">users::select('id, mame')->where('name', 'Ivan')->sort('asc')->all();</code>

<h3>Метод count</h3>
Метод возвращает количество выбранных строк
<code class="language-php">users::select('id, mame')->where('name', 'Ivan')->count();</code>

<h3>Метод summ</h3>
Метод возвращает сумму выбранных строк, в качестве параметра принимает имя столбца.
<code class="language-php">users::where('name', 'Ivan')->summ('age');</code>

<h3>Метод all</h3>
Метод возвращает все найденные совпадения в виде массива объектов.
<code class="language-php">users::where('name', 'Ivan')->all();</code>

<h3>Метод get</h3>
Метод возвращает первое найденное совпадение в виде объекта класса.
<code class="language-php">users::where('email', 'ivan@ivanov.ru')->get();</code>

<h3>Метод find</h3>
Метод принимает в качестве параметра, значение идентификатора. 
<code class="language-php">users::find(1);</code>

<h3>Метод delete</h3>
Метод может принимать не обязательный параметр - значение идентификатора.
<code class="language-php">users::where('email', 'ivan@ivanov.ru')->delete();
users::delete(1);</code>

<h3>Метод insert</h3>
Метод осуществляет единичную вставку данных, принимает в качестве значений массив данных. 
Возвращает новую запись.
<code class="language-php">$data = [
    'name'  => 'ivan',
    'email' => 'ivan@ivanov.ru',
    'pass'  => '123456',
    ];
$newUser = users::insert($data);</code>

<h3>Метод update</h3>
Метод осуществляет обновление данных, принимает в качестве значений массив данных. 
Возвращает новую запись.
<code class="language-php">$data = [
    'name'  => 'ivan',
    'email' => 'ivan@ivanov.ru',
    'pass'  => '123456',
    ];
users::where(1)->update($data);</code>

<h3>Метод save</h3>
Метод предназначен для сохранения экземпляра модели, после несения в неё изменений.
<code class="language-php">$user = users::find(1);
$user->name = 'Иван';
$user->save();
</code>
        </div>
    </div>
</block>