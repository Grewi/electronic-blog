<use layout="index" />

<block name="index">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand"> Блог</a>
            <div class="d-flex">
                <?php if (user_id()) : ?>
                    <a href="/blog/post/create" class="btn btn-outline-success" type="submit">Написать</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <a href="/blog/category">Категории</a>
    <div class="row">
        <?php foreach ($posts as $post) : ?>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$post->title?></h5>
                        <p class="card-text"><?=$post->description?></p>
                        <a href="/blog/post/<?=$post->id?>" class="btn btn-primary">Перейти куда-нибудь</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</block>