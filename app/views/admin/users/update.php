<use layout="modal">
    <block name="modal">
        <form method="post" action="/<?= $adminDir ?>/users/update/<?= $user->id ?>">
            <div class="modal-header">
                <h5 class="modal-title">Редактирование пользователя id - <?= $user->id ?> (<?= $user->email ?>)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <csrf type="input" name="userUpdate"></csrf>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"><?= lang('users', 'userRole') ?></label>
                    <div class="col-sm-10">
                        <select class="form-select" name="user_role" required>
                            <option value=""><?= lang('users', 'userRoleSelect') ?></option>
                            <?php foreach ($roles as $role) : ?>
                                <?php $selected = $role->id == $user->user_role_id ? 'selected' : ''; ?>
                                <option value="<?= $role->id ?>" <?=$selected?>><?= lang('roles', $role->slug) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"><?= lang('users', 'userName') ?></label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" value="<?=$user->name?>">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"><?= lang('users', 'userEmail') ?></label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" value="<?=$user->email?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"><?= lang('users', 'userPass') ?></label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" value="">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Закрыть</button>
                <button type="submite" class="btn btn-success btn-sm">Сохранить</button>
            </div>
        </form>
    </block>