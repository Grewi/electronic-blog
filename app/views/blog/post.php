<use layout="index" />

<block name="index">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand"><?=$post->title?></a>
            <div class="d-flex">
                <?php if (user_id()) : ?>
                    <a href="<?=referal_url()?>" class="btn btn-outline-success" type="submit">Назад</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

</block>