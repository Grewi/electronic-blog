<use layout="index" />

<block name="index">
    <?php foreach($allCategory as $category): ?>
        <a href="/doc/<?=$category->id?>"><?=$category->name?></a>
    <?php endforeach; ?>
</block>