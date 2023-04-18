<use name="modalAdmin" />
<block name="modal">
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
</block>