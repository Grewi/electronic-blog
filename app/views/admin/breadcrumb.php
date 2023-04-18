<?php if($breadcrumb): ?>
<ul class="uk-breadcrumb">
    <?php foreach($breadcrumb as $a => $i): ?>
        <?php if($a + 1 < count($breadcrumb)): ?>
        <li><a href="<?=$i['url']?>"><?=$i['name']?></a></li>
        <?php else: ?>
            <li><span><?=$i['name']?></span></li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>
<?php endif;?>