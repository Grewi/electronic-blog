<use name="admin"></use>
<block name="index">
    <div class="uk-section uk-background-secondary uk-section-xsmall uk-padding-remove-vertical">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left uk-margin-left uk-padding-small">
                <div><?= $title ?></div>
            </div>
            <div class="uk-navbar-right uk-margin-right uk-padding-small">
                <a class="uk-button uk-button-primary uk-button-small" href="/<?= $adminDir ?>/blog/posts/create"><i class="fa fa-plus"></i></a>
            </div>
        </nav>
    </div>
    <div class="uk-section uk-section-xsmall">
        <div class="uk-container">
            <include file="admin/breadcrumb" />
            
        </div>
    </div>
</block>