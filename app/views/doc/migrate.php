<use layout="index" />

<block name="index">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <h1 class="navbar-brand mb-0 h1">Миграции</h1>
        </div>
    </nav>
    Для работы миграций необходимо настроить соединение с базой данных. Принцип работы очень прост, в папке <span class="badge bg-secondary">app/migrations</span>
    находятся <span class="badge bg-secondary">sql</span> файлы в начале имени которых указана дата в формате <span class="badge bg-secondary">YYYY-MM-DD</span>, далее произвольное имя. Файл с текущей датой и произвольным именем
    можно создать командой:
    <code class="language-shell">$ php e create/migration name</code>
    При первом запуске миграции система проверит наличие таблицы в базе данных и при необходимости создаст её, а далее
    выполнит все файлы миграций в папке. Все выполненные миграции записываются в базу данных и при повторном запуске игнорируются.
    Запустить процесс миграции можно командой:
    <code class="language-shell">$ php e migrate</code>
</block>