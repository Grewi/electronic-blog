<use layout="index" />

<block name="index">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <h1 class="navbar-brand mb-0 h1">База данных</h1>
        </div>
    </nav>
    <div class="card">
        <div class="card-body">
            <h3>Подключение</h3>
Для подключения базы данных к системе, необходимо создать  файл 
<span class="badge bg-secondary">app/configs/database.php</span> пример файла:
<code class="language-php">namespace app\configs;
class database
{
    public function set() : array
    {
        return [
            'type' => '',
            'name' => 'grewi',
            'user' => 'root',
            'pass' => '',
            'host' => 'localhost',
            'file_name' => '',
        ];
    }
}</code>
далее запустить команду:
<code class="language-shell">$ php e create/config/ini</code>
или обратиться к файлу конфигурации 
<code class="language-php">use system\core\config\config;
config::database('name');</code>
Будет создан файл <span class="badge bg-secondary">app/configs/.database.ini</span>
<code class="language-shell">$ php e create/config/ini</code>

<code class="language-shell">type = 
name = electronic
user = root
pass = 
host = localhost
file_name = </code>

В данном файле необходимо указать данные для подключения к базе данных.

<h3>Метод query</h3>
Пример обращения:
<code class="language-php">use system\core\database\database;
$data = ['id' => 1];
database::query('SELECT * FROM user WHERE id = :id', $data);</code>
Метод принимает первым параметром SQL строку, вторым параметром массив данных, третим параметром экземпляр класса
который должен сгенерировать метод, по умолчанию, метод возвращает объект класса <span class="badge bg-secondary">stdClass</span>

<h3>Методы fetch и fetchAll</h3>
Методы работают аналогично методу <span class="badge bg-secondary">query</span> и являются его обётками<br>
Метод fetch возвращает объект с запрошенными свойствами, а метод fetchAll массив объектов.


<h3>Методы transaction, commit и beginTransaction</h3>
Методы обращаются к аналогичным методам PDO.

        </div>
    </div>
</block>