<use layout="index" />

<block name="index">
    Категории
    <a href="/blog">Блог</a>
    <?php if(user_id() > 0) : ?>
        <a href="/blog/category/create">Создать новую категорию</a>
    <?php endif; ?>
</block>