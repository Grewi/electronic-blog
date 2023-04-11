<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link href="/style/css/bootstrap.min.css" rel="stylesheet">
    <link href="/style/css/font-awesome.css" rel="stylesheet">
    <link href="/style/css/style.css" rel="stylesheet">
    <script src="/style/scripts/jquery-3.6.0.min.js"></script>
    <script src="/style/scripts/bootstrap.bundle.min.js"></script>
    <script src="/style/scripts/html5_drag_and_drop.js"></script>

    <link rel="stylesheet" href="/style/highlight/styles/an-old-hope.min.css">
    <script src="/style/highlight/highlight.min.js"></script>
    <script src="/style/tinymce/tinymce.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <include file="topMenu/userMenu" />
        <div class="container-xxl height100">
            <div class="row height100">
                <div class="col-xs-0 col-md-2 lef-column">
                    <include file="include/leftMenu">
                </div>
                <div class="col-xs-12 col-md-10">
                    <block name="index" />
                    <?php dump($_SERVER['viewList'])?>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('code').forEach(el => {
            let parent = el.parentElement;
            if (parent && parent.tagName != 'PRE') {
                el.outerHTML = '<pre>' + el.outerHTML + '</pre>';
            }
        });
        hljs.highlightAll();
    </script>

    <!-- //AjaxModal -->
    <div id="ajaxModal"></div>
    <script>
        $(function() {
            $('.e-ajax').on('click', function(e) {
                e.preventDefault();
                let url = $(this).attr('data-url');
                let block = $(this).attr('data-block')
                $.ajax({
                    url: url,
                    success: function(data) {
                        let d = JSON.parse(data);
                        $('#' + block).html(d);
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

</body>

</html>