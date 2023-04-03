<use layout="index" />

<block name="index">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Новый пост</a>
            <div class="d-flex">
                <a href="<?=referal_url()?>" class="btn btn-outline-success" type="submit">Назад</a>
            </div>
        </div>
    </nav>

    <div>
        <form method="post" action="/blog/post/save">
            <csrf type="input" name="createPostBlog"></csrf>
            <div class="mb-3 form-floating">
                <input type="text" name="title" class="form-control" placeholder="Заголовок">
                <label>Заголовок</label>
            </div>
            <div class="mb-3 form-floating">
                <textarea class="form-control" name="description" placeholder="Описание"></textarea>
                <label>Описание</label>
            </div>
            <div class="mb-3">
                <a class="e-ajax btn btn-primary" href="#" data-url="/blog/ajax/gallery" data-block="ajaxModal">
                    <i class="fa fa-file-image-o" aria-hidden="true"></i>
                </a>
            </div>            
            <div class="mb-3">
                <textarea id="editable" name="content"></textarea>
            </div>

            <div class="mb-3">
                <input class="btn btn-secondary " type="submit" value="Отправить">
            </div>
        </form>
    </div>
    <script>
        tinymce.init({
            selector: 'textarea#editable',
            language: 'ru',
            plugins: 'code, codesample',
        });
    </script>
</block>