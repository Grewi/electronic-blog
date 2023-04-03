<div class="modal fade" tabindex="-1" id="e-modal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Галлерея</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-9">
                        
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Сохранить изменения</button>
            </div>
        </div>
    </div>
</div>

<script>
    var myModal = new bootstrap.Modal(document.getElementById('e-modal'), {
        keyboard: false
    });
    myModal.show();
</script>