<use layout="admin">
    <block name="index">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <div><?= $title ?></div>
                <div>
                    <a class="btn btn-primary btn-sm e-ajax" data-url="/<?= $adminDir ?>/blog/category/create"><i class="fa fa-plus"></i></a>
                </div>
            </div>
        </nav>
        <div class="container">
            <?php if (count($categories) > 0) : ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col"><?=lang('blog', 'name')?></th>
                            <th scope="col"><?=lang('blog', 'slug')?></th>
                            <th scope="col"><?=lang('blog', 'sort')?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $category) : ?>
                            <tr>
                                <th scope="row"><?=$category->id?></th>
                                <td><?=$category->name?></td>
                                <td><?=$category->slug?></td>
                                <td><?=$category->sort?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <div><?= lang('blog', 'noCatigories') ?></div>
            <?php endif; ?>
        </div>
    </block>