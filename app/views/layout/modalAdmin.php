<div id="e-modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <block name="modal"></block>
    </div>
</div>

<script>
    UIkit.modal(document.getElementById('e-modal')).show();
</script>