<div class="modal fade" id="ajaxModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog <?=$paramModal?>">
        <div class="modal-content">
<block name="modal">
        </div>
    </div>
</div>
<script>
    ajaxModal = new bootstrap.Modal(document.getElementById('ajaxModal'), {
        keyboard: false
    });
    ajaxModal.show();
</script>