<use layout="modalAdmin"></use>
<block name="modal">
    <form method="post" action="/<?= $adminDir ?>/users/update/<?= $user->id ?>" class="uk-form-horizontal">
        <h5><?= $titleModal ?></h5>

        <csrf type="input" name="userUpdate"></csrf>
        
        <div class="uk-margin">
            <label class="uk-form-label"><?= lang('users', 'userRole') ?></label>
            <div class="uk-form-controls">
                <select class="uk-select" id="form-horizontal-select" name="user_role">
                    <?php foreach ($roles as $role) : ?>
                        <?php $selected = $role->id == $user->user_role_id ? 'selected' : ''; ?>
                        <option value="<?= $role->id ?>" <?= $selected ?>><?= lang('roles', $role->slug) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label"><?= lang('users', 'userName') ?></label>
            <div class="uk-form-controls">
                <input type="text" name="name" class="uk-input" value="<?= $user->name ?>">
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label"><?= lang('users', 'userEmail') ?></label>
            <div class="uk-form-controls">
                <div class="uk-text-small uk-text-danger uk-text-italic"></div>
                <input data-user="<?= $user->id ?>" data-url="/<?= $adminDir ?>/users/valid-email" type="email" name="email" class="uk-input e-valid-input" value="<?= $user->email ?>">
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label"><?= lang('users', 'userPass') ?></label>
            <div class="uk-form-controls">
                <input type="password" name="password" class="uk-input" value="">
            </div>
        </div>
        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Закрыть</button>
            <button class="uk-button uk-button-primary" type="submit">Сохранить</button>
        </p>
    </form>
</block>