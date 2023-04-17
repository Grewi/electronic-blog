<use name="admin"></use>
<block name="index">

    <div class="uk-section uk-background-secondary uk-section-xsmall uk-padding-remove-vertical">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left uk-margin-left uk-padding-small">
                <div><?=$title?></div>
            </div>
            <div class="uk-navbar-right uk-margin-right uk-padding-small">
                <a class="uk-button uk-button-primary uk-button-small e-ajax" data-url="/<?= $adminDir ?>/users/create"><i class="fa fa-plus"></i></a>
            </div>
        </nav>
    </div>

    <div class="uk-section uk-section-xsmall">
        <div class="uk-container">
            <table class="uk-table uk-table-divider uk-table-striped uk-table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th><?= lang('users', 'role') ?></th>
                        <th>Email</th>
                        <th><?= lang('users', 'name') ?></th>
                        <th><?= lang('users', 'date') ?></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <?php $role = \app\models\user_role::find($user->user_role_id); ?>
                        <tr>
                            <th><?= $user->id ?></th>
                            <td><?= lang('roles', $role->slug) ?></td>
                            <td><?= $user->email ?></td>
                            <td><?= $user->name ?></td>
                            <td><?= eDate($user->date_create) ?></td>
                            <td>
                                <div class="uk-button-group">
                                    <a class="uk-button uk-button-primary uk-button-small e-ajax" data-url="/<?= $adminDir ?>/users/update/<?= $user->id ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <?php if ($role->slug != 'admin') : ?>
                                        <a class="uk-button uk-button-danger uk-button-small e-ajax" data-url="/<?= $adminDir ?>/users/delete/<?= $user->id ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</block>