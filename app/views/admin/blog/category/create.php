<use name="modal"></use>
<block name="modal">
    <form method="post" action="/<?= $adminDir ?>/blog/category/create">
        <div class="modal-header">
            <h5 class="modal-title"><?=lang('blog', 'blogCategoryCreate')?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <csrf type="input" name="blogCategoryCreate"></csrf>
            <div class="mb-3 row">
                <div class="col-sm-12">
                    <?= lang('blog', 'parentCategory') ?> - <?= $parentName ?>
                    <input name="parent" value="<?=$parentId?>" hidden >
                    <hr>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-6 col-form-label"><?= lang('blog', 'name') ?></label>
                <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" value="">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-6 col-form-label"><?= lang('blog', 'slug') ?></label>
                <div class="col-sm-6">
                    <input type="text" name="slug" class="form-control" value="">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-6 col-form-label"><?= lang('blog', 'description') ?></label>
                <div class="col-sm-6">
                    <textarea type="text" name="description" class="form-control" value=""></textarea>
                </div>
            </div> 
            <div class="mb-3 row">
                <label class="col-sm-6 col-form-label"><?= lang('blog', 'sort') ?></label>
                <div class="col-sm-6">
                    <input type="number" name="sort" class="form-control" value="">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"><?=lang('global', 'closed')?></button>
            <button type="submite" class="btn btn-success btn-sm"><?=lang('global', 'save')?></button>
        </div>
    </form>
</block>