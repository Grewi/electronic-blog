<use name="admin"></use>
<block name="index">

    <div class="uk-section uk-background-secondary uk-section-xsmall uk-padding-remove-vertical">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left uk-margin-left uk-padding-small">
                <div><?= $title ?></div>
            </div>
            <div class="uk-navbar-right uk-margin-right uk-padding-small">
                <a class="uk-button uk-button-primary uk-button-small e-ajax" data-url="/<?= $adminDir ?>/blog/category/create/<?= $parentId ?>"><i class="fa fa-plus"></i></a>
            </div>
        </nav>
    </div>

    <div class="uk-section uk-section-xsmall">
        <div class="uk-container">
            <include file="admin/breadcrumb" />
            <?php if (count($categories) > 0) : ?>
                <table class="uk-table uk-table-divider uk-table-striped uk-table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th><?= lang('blog', 'name') ?></th>
                            <th><?= lang('blog', 'slug') ?></th>
                            <th><?= lang('blog', 'sort') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $category) : ?>
                            <?php  ?>
                            <tr>
                                <th><?= $category->id ?></th>
                                <td><a href="/grewi/blog/category/<?= $category->id ?>"><?= $category->name ?></a></td>
                                <td><?= $category->slug ?></td>
                                <td><?= $category->sort ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <div class="uk-alert-primary" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p><?= lang('blog', 'noCatigories') ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</block>