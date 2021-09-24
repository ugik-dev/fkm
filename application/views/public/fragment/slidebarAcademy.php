<?php
$menus = menus_instance(array('parent' => 'academy'));
if ($_COOKIE['lang_set'] == 'in') { ?>
    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="sidebar sidebar-page">
            <div class='panel panel-submenu'>
                <div class='panel-header'>
                    <h3 class='panel-title '><a href='<?= base_url('') ?>'><i class='fa fa-angle-left'></i> Akademik </a></h3>
                </div>
                <div class="panel-body pt-0">
                    <ul id="sidebar-nav" class="list-group list-sibling">
                        <?php foreach ($menus["academy"] as $menu) {
                            echo '<li id="menu-item-705" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-705"><a title="' . $menu['berita_judul'] . '" href="' . base_url() . 'academy/' . $menu['slug'] . '/">' . $menu['berita_judul'] . '</a></li>';
                        } ?>
                        <li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68"><a title="Kalender Akademik" href="<?= site_url() ?>academy/calendar/">Kalender Akademik</a></li>
                        <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a title="Penelitian" href="<?= site_url() ?>academy/research/">Penelitian</a></li>
                        <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a title="Panduan" href="<?= site_url() ?>academy/guide/">Panduan</a></li>

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
                    <h3 class='panel-title '><a href='<?= base_url('') ?>'><i class='fa fa-angle-left'></i> Academic </a></h3>
                </div>
                <div class="panel-body pt-0">
                    <ul id="sidebar-nav" class="list-group list-sibling">
                        <?php foreach ($menus["academy"] as $menu) {
                            echo '<li id="menu-item-705" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-705"><a title="' . $menu['berita_judul_en'] . '" href="' . base_url() . 'academy/' . $menu['slug'] . '/">' . $menu['berita_judul_en'] . '</a></li>';
                        } ?>
                        <li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68"><a title="Academic Calendar" href="<?= site_url() ?>academy/calendar/">Academic Calendar </a></li>
                        <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a title="Research" href="<?= site_url() ?>academy/research/">Research</a></li>

                        <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a title="Guide" href="<?= site_url() ?>academy/guide/">Guide</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php }; ?>