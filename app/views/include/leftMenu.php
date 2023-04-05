<div class="list-group mt-2">
    <?php if (user_id() > 0) : ?>
        <a class="list-group-item" href="/?output">Выход</a>
    <?php else : ?>
        <a class="list-group-item" href="/<?=$authDir?>">Вход</a>
    <?php endif; ?>
</div>

<div>Документация</div>
<div class="list-group mt-2">
    <a href="/doc/configs" class="list-group-item">Конфигурация</a>
    <a href="/doc/route" class="list-group-item">Маршрутизация</a>
    <a href="/doc/model" class="list-group-item">Модели</a>
    <a href="/doc/db" class="list-group-item">База данных</a>
    <a href="/doc/migrate" class="list-group-item">Миграции</a>
    <a href="/doc/controller" class="list-group-item">Контроллеры</a>
    <a href="/doc/view" class="list-group-item">Шаблонизатор</a>
    <a href="#" class="list-group-item">Локализация</a>
    <a href="#" class="list-group-item">Валидация</a>
    <a href="#" class="list-group-item">Дата и время</a>
    <a href="#" class="list-group-item">Глобальные функции</a>
    <a href="#" class="list-group-item">Работа с консолью</a>
	<a href="#" class="list-group-item">Пагинация</a>
</div>