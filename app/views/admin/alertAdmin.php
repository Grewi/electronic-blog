
<?php if($alertAdmin):?>
    <script>
        console.log(0);
        <?php foreach($alertAdmin as $alert):?>
            UIkit.notification("<?=$alert['text']?>", {status:'<?=$alert['type']?>', pos: 'top-right'});
        <?php endforeach;?>
    </script>
<?php endif; ?>