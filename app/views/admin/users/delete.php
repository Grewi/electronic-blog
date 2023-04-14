<use layout="modalAdmin"></use>
<block name="modal">
    <form method="post" action="/<?= $adminDir ?>/users/delete/<?= $user->id ?>">
        <h5 class="modal-title">Удаление пользователя</h5>

        <div class="uk-margin">
            <csrf type="input" name="deleteUser">
                Удалить пользователя id - <?= $user->id ?> (<?= $user->email ?>)?
        </div>
        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Закрыть</button>
            <button class="uk-button uk-button-danger" type="submit">Удалить</button>
        </p>
    </form>
</block>