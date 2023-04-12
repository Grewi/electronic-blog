
<?php if ($alert2) : ?>
    <div class="toast-container end-0 p-3" style="z-index:10000; top:30px">
        <?php foreach ($alert2 as $key => $a) : ?>
            <?php $svg = [
                'primary'   => '#0d6efd',
                'secondary' => '#6c757d',
                'success'   => '#198754',
                'danger'    => '#dc3545',
                'warning'   => '#ffc107',
                'info'      => '#0dcaf0',
                'light'     => '#f8f9fa',
                'dark'      => '#212529',
            ]; ?>
            <div id="aler_id_{{$key}}" class="toast <!-- text-bg-{{$a['type']}} --> " role="alert" aria-live="assertive" aria-atomic="true" data-bs-animation="true">
                <div class="toast-header">
                    <svg class="bd-placeholder-img rounded me-2 blink " width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="{{$svg[$a['type']]}}"></rect>
                    </svg>
                    <strong class="me-auto">{{$a['header']}}</strong>
                    <!-- <small>11 мин назад</small> -->
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Закрыть"></button>
                </div>
                <div class="toast-body">
                    {{$a['text']}}
                </div>
            </div>
            <script>
                $(function() {
                    let a = new bootstrap.Toast(document.getElementById('aler_id_{{$key}}'));
                    a.show();
                });
            </script>
        <?php endforeach; ?>
    </div>
<?php endif; ?>


<div class="toast-container top-0 end-0 p-3 " style="position:fixed; z-index: 10000;">
    <div id="alert_ajax" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-animation="true">
        <div class="toast-header">
            <svg class="bd-placeholder-img rounded me-2 blink " width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect id="recAlertAjax" width="100%" height="100%" fill=""></rect>
            </svg>
            <strong id="headerAlertAjax" class="me-auto"></strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Закрыть"></button>
        </div>
        <div id="textAlertAjax" class="toast-body"></div>
    </div>
</div>
<script>
    function alertAjax(title, type, text = '') {
        let typeAlertAjax = {
            primary: '#0d6efd',
            secondary: '#6c757d',
            success: '#198754',
            danger: '#dc3545',
            warning: '#ffc107',
            info: '#0dcaf0',
            light: '#f8f9fa',
            dark: '#212529',
        };
        $('#recAlertAjax').attr('fill', typeAlertAjax[type]);
        $('#headerAlertAjax').html(title);
        $('#textAlertAjax').html(text);
        $(function() {
            let a = new bootstrap.Toast(document.getElementById('alert_ajax'));
            a.show();
        });
    }
</script>