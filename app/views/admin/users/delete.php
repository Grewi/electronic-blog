<use layout="modal">
    <block name="modal">
        <form method="post">
            <div class="modal-header">
                <h5 class="modal-title">Удаление пользователя</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <csrf type="input" name="deleteUser">
                    Удалить пользователя id - <?=$user->id?> (<?=$user->email?>)?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Закрыть</button>
                <button type="submite" class="btn btn-danger btn-sm">Удалить</button>
            </div>
        </form>
    </block>