<?php if ($_COOKIE['lang_set'] == 'in') { ?>
<div class="col-md-4 col-sm-4 col-xs-12">
    <div class="sidebar sidebar-page">
        <div class='panel panel-submenu'>
            <div class='panel-header'>
                <h3 class='panel-title '><a href='<?= base_url('') ?>'><i class='fa fa-angle-left'></i> Akademik </a></h3>
            </div>
            <div class="panel-body pt-0">
                <ul id="sidebar-nav" class="list-group list-sibling">
                    <li id="menu-item-705" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-705"><a title="Program Studi Ilmu Kesehatan Masyarakat (S1)" href="<?= site_url() ?>academy/program-1/">Program Studi Ilmu Kesehatan Masyarakat (S1)</a></li>
                    <li id="menu-item-401" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-401"><a title="Program Studi Gizi (S1)" href="<?= site_url() ?>academy/program-2/">Program Studi Gizi (S1)</a></li>
                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a title="Program Studi Kesehatan Lingkungan (S1)" href="<?= site_url() ?>academy/program-3/">Program Studi Kesehatan Lingkungan (S1)</a></li>
                    <li id="menu-item-708" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-708"><a title="Program Studi Ilmu Kesehatan Masyarakat (S2)" href="<?= site_url() ?>academy/program-4/">Program Studi Ilmu Kesehatan Masyarakat (S2)</a></li>
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
                <li id="menu-item-705" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-705"><a title="Public Health Study Program (S1))" href="<?= site_url() ?>academy/program-1/">Public Health Study Program (S1)</a></li>
                          <li id="menu-item-401" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-401"><a title="Nutrition Study Program (S1)" href="<?= site_url() ?>academy/program-2/">Nutrition Study Program (S1)</a></li>
                          <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a title="Environmental Health Study Program (S1)" href="<?= site_url() ?>academy/program-3/">Environmental Health Study Program (S1)</a></li>
                          <li id="menu-item-708" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-708"><a title="Public Health Studies Program (S2)" href="<?= site_url() ?>academy/program-4/">Public Health Studies Program (S2)</a></li>
                          <li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68"><a title="Academic Calendar" href="<?= site_url() ?>academy/calendar/">Academic Calendar </a></li>
                    <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a title="Research" href="<?= site_url() ?>academy/research/">Research</a></li>
                       
                          <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a title="Guide" href="<?= site_url() ?>academy/guide/">Guide</a></li>
                
                </ul>
            </div>
        </div>
    </div>
</div>
    <?php };?>