<?php if ($_COOKIE['lang_set'] == 'in') { ?>
    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="sidebar sidebar-page">
            <div class='panel panel-submenu'>
                <div class='panel-header'>
                    <h3 class='panel-title '><a href='<?= base_url('') ?>'><i class='fa fa-angle-left'></i> Seminar </a></h3>
                </div>
                <div class="panel-body pt-0">
                    <ul id="sidebar-nav" class="list-group list-sibling">
                        <li id="menu-item-705" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-705"><a title="Seminar Nasional" href="<?= site_url() ?>seminar/seminar-nasional/">Seminar Nasional</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="sidebar sidebar-page">
            <div class='panel panel-submenu'>
                <div class='panel-header'>
                    <h3 class='panel-title '><a href='<?= base_url('') ?>'><i class='fa fa-angle-left'></i> Qolloquium </a></h3>
                </div>
                <div class="panel-body pt-0">
                    <ul id="sidebar-nav" class="list-group list-sibling">
                    <li id="menu-item-705" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-705"><a title="National Qolloquium" href="<?= site_url() ?>seminar/seminar-nasional/">National Qolloquium</a></li>
                            
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php }; ?>