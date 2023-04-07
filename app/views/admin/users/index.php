<use layout="admin">
    <block name="index">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                            <div><?=$title?></div>
                            <div>
                            <a class="btn btn-primary btn-sm" href="/<?= $adminDir ?>/users/create"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </nav>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col"><?= lang('users', 'role') ?></th>
                                <th scope="col">Email</th>
                                <th scope="col"><?= lang('users', 'name') ?></th>
                                <th scope="col"><?= lang('users', 'date') ?></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user) : ?>
                                <?php $role = \app\models\user_role::find($user->user_role_id); ?>
                                <tr>
                                    <th scope="row"><?= $user->id ?></th>
                                    <td><?= lang('roles', $role->slug) ?></td>
                                    <td><?= $user->email ?></td>
                                    <td><?= $user->name ?></td>
                                    <td><?= eDate($user->date_create) ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-success btn-sm" href="/<?= $adminDir ?>/users/create"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            <a class="btn btn-danger btn-sm" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>

                    <include file="include/pagination" />
                </div>
            </div>
        </div>
    </block>