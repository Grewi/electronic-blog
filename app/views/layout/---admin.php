<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link href="/style/css/bootstrap.min.css" rel="stylesheet">
    <link href="/style/css/font-awesome.css" rel="stylesheet">
    <link href="/style/css/admin.css" rel="stylesheet">
    <script src="/style/scripts/jquery-3.6.0.min.js"></script>
    <script src="/style/scripts/bootstrap.bundle.min.js"></script>
    <script src="/style/scripts/html5_drag_and_drop.js"></script>

    <link rel="stylesheet" href="/style/highlight/styles/an-old-hope.min.css">
    <script src="/style/highlight/highlight.min.js"></script>
    <script src="/style/tinymce/tinymce.min.js"></script>
</head>

<body>
    <include file="include/alert2" />
    <div class="wrapper">
        <nav class="navbar sticky-top navbar-expand-sm navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Electronic</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </div>
            </div>
        </nav>
        <div class="container-xxl height100">
            <div class="row height100">
                <div class="col-xs-0 col-md-2 lef-column">
                    <include file="admin/leftMenu" />
                </div>
                <div class="col-xs-12 col-md-10">
                    <block name="index" />
                </div>
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


</body>

</html>