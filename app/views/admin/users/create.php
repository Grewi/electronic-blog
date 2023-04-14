<use layout="admin"></use>
<block name="index">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="post">
                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                            <div><?= $title ?></div>
                            <div>
                                <button type="submit" class="btn btn-success btn-sm" href="/<?= $adminDir ?>/users/create"><i class="fa fa-floppy-o"></i></button>
                            </div>
                        </div>
                    </nav>

                    <csrf type="input" name="userCreate">
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><?= lang('users', 'userRole') ?></label>
                            <div class="col-sm-10">
                                <select class="form-select" name="user_role">
                                    <option selected><?= lang('users', 'userRoleSelect') ?></option>
                                    <?php foreach ($roles as $role) : ?>
                                        <option value="<?= $role->id ?>"><?= lang('roles', $role->slug) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><?= lang('users', 'userName') ?></label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" value="">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><?= lang('users', 'userEmail') ?></label>
                            <div class="col-sm-10">
                                <input type="text" name="email" class="form-control" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><?= lang('users', 'userPass') ?></label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" value="">
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</block>