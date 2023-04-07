<use layout="admin">
    <block name="index">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1><?=lang('users', 'newUser')?></h1>
                    <form method="post">
                        <csrf type="input" name="userCreate">
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label"><?=lang('users', 'userName')?></label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label"><?=lang('users', 'userEmail')?></label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" class="form-control" value="">
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </block>