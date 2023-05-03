<use name="admin"></use>
<block name="index">
    <div class="uk-section uk-background-secondary uk-section-xsmall uk-padding-remove-vertical">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left uk-margin-left uk-padding-small">
                <div><?= $title ?></div>
            </div>
            <div class="uk-navbar-right uk-margin-right uk-padding-small">
                <a class="uk-button uk-button-primary uk-button-small" href="/<?= $adminDir ?>/blog/post/create"><i class="fa fa-plus"></i></a>
            </div>
        </nav>
    </div>
    <div class="uk-section uk-section-xsmall">
        <div class="uk-container">
            <include file="admin/breadcrumb" />
            <form method="post" action="/<?= $adminDir ?>/blog/category/create" class="uk-form-horizontal">
                <h5><?= $title ?></h5>
                <csrf type="input" name="blogCategoryCreate" />
                <input name="parent" value="<?= $parentId ?>" hidden>

                <div class="uk-margin">
                    <label class="uk-form-label"><?= lang('blog', 'name') ?></label>
                    <div class="uk-form-controls">
                        <input type="text" name="name" class="uk-input" value="">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label"><?= lang('blog', 'slug') ?></label>
                    <div class="uk-form-controls">
                        <input type="text" name="slug" class="uk-input" value="">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label"><?= lang('blog', 'description') ?></label>
                    <div class="uk-form-controls">
                        <input type="text" name="description" class="uk-input" value="">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label"><?= lang('blog', 'sort') ?></label>
                    <div class="uk-form-controls">
                        <input type="number" name="description" class="uk-input" value="">
                    </div>
                </div>

                <p class="uk-text-right">
                    <button class="uk-button uk-button-default uk-modal-close" type="button"><?= lang('global', 'closed') ?></button>
                    <button class="uk-button uk-button-primary" type="submit"><?= lang('global', 'create') ?></button>
                </p>
            </form>
        </div>
    </div>
</block>