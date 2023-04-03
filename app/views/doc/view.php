<use layout="index" />

<block name="index">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <h1 class="navbar-brand mb-0 h1">Шаблонизатор</h1>
        </div>
    </nav>
    <div class="card">
        <div class="card-body">
            Подключение шаблонизатора в контроллере не является обязательной, при необходимости может быть подключен любой другой шаблонизатор.
            Для подключения шаблонизатора необходимо создать экземпляр класса и передать в конструктор первым аргументом путь к шаблону в
            директории <span class="badge bg-secondary">app/view</span>, а вторым аргументом массив данных:
<code class="language-php">use system\core\view\view;
new view('doc/view', $this->data);</code>
            Данные для шаблонизатора, по умолчанию, располагаются в свойстве <span class="badge bg-secondary">$data</span> контроллера.
            <h3>layout - макет</h3>
            <code  class="language-html"><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}} </title>
</head>
<body>
    <block name="index" />
</body>

</html></code>
Макет должен содержать специальные теги <span class="badge bg-secondary">block</span> с параметром <span class="badge bg-secondary">name</span>
В макете можно использовать любое количество блоков. Также можно выводить данные передаваемые контроллером и подключать другие шаблны.
Если файл шаблона использует макет, то необходимо с помощью тега <span class="badge bg-secondary">use</span> указать его расположение
А в тегах <span class="badge bg-secondary">block</span> содержимое блоков
<code class="language-html"><use layout="index" /> 
<block name="index"><h1>Содержание</h1></block>
</code>
В данном примере результат будет такой:
<code  class="language-html"><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Электроник</title>
</head>
<body>
    <h1>Содержание</h1>
</body>
</html></code>

<h3>include - подключение других файлов</h3>
Для подключения другого файла шаблона необходимо использовать тег <span class="badge bg-secondary">include</span> 
с параметром <span class="badge bg-secondary">file</span> указывающем путь к файлу.
<code class="language-html"><include file="include/menu" /></code>


        </div>
    </div>
</block>