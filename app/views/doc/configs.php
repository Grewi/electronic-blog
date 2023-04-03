<use layout="index" />

<block name="index">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <h1 class="navbar-brand mb-0 h1">Конфигурационные файлы</h1>
        </div>
    </nav>
    <div class="card">
        <div class="card-body">
            Конфигурационные файлы системы находятся в папке:

<code class="language-php">app/configs</code>

            Пример конфигурационного файла globals.php:
            <code class="language-php">namespace app\configs;
class globals
{
    public function set() : array
    {
        return [
            'dev' => 0,
            'lang' => 'ru',
            'app' => 'app',
            'title' => 'Electronic',
        ];
    }
}</code>
            Файл конфигурации можно автоматически сформировать командой:

<code class="language-shell">$ php e create/config test</code>

            Метод set возвращает массив с именами пунктов конфигурации и их значениями по умолчанию. 
            Для установки значений необходимо сгенерировать ini файл для каждого класса конфигурации, 
            файл генерируется при первом обращении или командой:
            
<code class="language-shell">$ php e create/config/ini</code>

            Данная команда позволяет также обновлять ini файлы, в случае добавления параметров в php файле, 
            без изменения уже установленных значений. <br>
            Ini файлы добавленны в .gitignore, установленные значения действуют только в текущей установке.

           <br> Пример ini файла:

<code class="language-ini">dev = 1
lang = ru
app = app
title = Electronic</code> 

Пример получения значений из кофигурационных файлов:
<code class="language-php">use system\core\config\config;
$lang = config::globals('lang');
//или
$lang = config::test()->lang;</code>
        </div>
    </div>
</block>