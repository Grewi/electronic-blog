<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>

    <link href="/style/css/uikit.min.css" rel="stylesheet">
    <script src="/style/scripts/uikit.min.js"></script>
    <script src="/style/scripts/uikit-icons.min.js"></script>
    <script src="/style/scripts/jquery-3.6.0.min.js"></script>
    <link href="/style/css/font-awesome.css" rel="stylesheet">

    <script src="/style/valid/admin.js"></script>

    <link rel="stylesheet" href="/style/highlight/styles/an-old-hope.min.css">
    <script src="/style/highlight/highlight.min.js"></script>
    <script src="/style/tinymce/tinymce.min.js"></script>
</head>

<body>
<div class="uk-section  uk-section-xsmall uk-padding-remove-vertical uk-section-primary uk-light">
    <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
        <div class="uk-navbar-left uk-margin-left">
            <button class="uk-navbar-toggle uk-hidden@m" uk-toggle="target: #nav-offcanvas" uk-navbar-toggle-icon></button>
            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="/">electronic</a></li>
            </ul>
        </div>
        <div class="uk-navbar-right uk-margin-right">
            <form class="uk-search uk-search-default">
                <input class="uk-search-input" type="search" placeholder="Search...">
            </form>
        </div>
    </nav>
</div>
<div class="uk-section  uk-section-xsmall uk-padding-remove-vertical">
    <div class="uk-grid-collapse" uk-grid>
        <div class="" style="width:200px;">
            <a class="uk-button uk-button-default uk-width-1-1" href="/<?= $adminDir ?>">
                <i class="fa fa-university" aria-hidden="true"></i> Главная
            </a>
            <a class="uk-button uk-button-default uk-width-1-1" href="/<?= $adminDir ?>/users">
                <i class="fa fa-user" aria-hidden="true"></i> Пользователи
            </a>
            <a class="uk-button uk-button-default uk-width-1-1" href="/<?= $adminDir ?>/blog/category">
                <i class="fa fa-user" aria-hidden="true"></i> Категории блога
            </a>            
        </div>
        <div class="uk-width-expand ">
            <block name="index"></block>
        </div>
    </div>    
</div>


    <!-- //AjaxModal -->
    <script>
        let ajaxModal = null;
        $(function() {
            $('.e-ajax').on('click', function(e) {
                e.preventDefault();
                let url = $(this).attr('data-url');
                let block = $(this).attr('data-block')
                $.ajax({
                    url: url,
                    success: function(data) {
                        let old = document.getElementById('e-ajax');
                        if (old != null) {
                            old.remove();
                        }
                        let e_modal = document.getElementById('e-modal');
                        if (e_modal != null) {
                            e_modal.remove();
                        }
                        let d = JSON.parse(data);
                        let elem = document.createElement('div');
                        elem.setAttribute('id', 'e-ajax');
                        let body = document.querySelector('body');
                        body.appendChild(elem);
                        $('#e-ajax').html(d);
                    },
                    beforeSend: function() {

                    },
                    error: function(data) {
                        let d = JSON.parse(data.responseText);
                        if (d.error) {
                            alertAjax('Ошибка', 'danger', d.error);
                        } else {
                            alertAjax('Ошибка', 'danger', 'Данные не доступны');
                        }
                    }
                });
            });
        });
    </script>
    <include file="admin/alertAdmin"></include>
</body>

</html>