<?php if ($_COOKIE['lang_set'] == 'in') { ?>
    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="sidebar sidebar-page">
            <div class='panel panel-submenu'>
                <div class='panel-header'>
                    <h3 class='panel-title '><a href='<?= base_url('') ?>'><i class='fa fa-angle-left'></i> Tentang </a></h3>
                </div>
                <div class="panel-body pt-0">
                    <ul id="sidebar-nav" class="list-group list-sibling">
                        <li id="menu-item-705" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-705"><a title="Sejarah" href="<?= site_url() ?>about/history/">Sejarah FKM UNSRI</a></li>
                        <li id="menu-item-401" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-401"><a title="Lambang, Logo, Motto, dan Maskot" href="<?= site_url() ?>about/logo/">Makna Lambang</a></li>
                        <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a title="Visi dan Misi" href="<?= site_url() ?>about/vision-and-mission/">Visi dan Misi</a></li>
                        <li id="menu-item-708" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-708"><a title="Hymne dan Mars" href="<?= site_url() ?>about/senate/">Senat Fakultas</a></li>
                        <li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68"><a title="Organisasi" href="<?= site_url() ?>about/structure/">Struktur Pimpinan</a></li>
                        <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a title="Kerjasama" href="<?= site_url() ?>about/lecturer/">Dosen dan Tenaga Pendidik</a></li>
                        <li id="menu-item-62" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62"><a title="Akreditasi" href="<?= site_url() ?>about/accreditation/">Akreditasi</a></li>
                        <li id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63"><a title="Prestasi" href="<?= site_url() ?>about/achievements/">Prestasi</a></li>
                        <li id="menu-item-2687" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2687"><a title="Dokumen Resmi" href="<?= site_url() ?>about/education-personnel/">Tenaga Kependidikan FKM UNSRI</a></li>

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
                    <h3 class='panel-title '><a href='<?= base_url('') ?>'><i class='fa fa-angle-left'></i> About </a></h3>
                </div>
                <div class="panel-body pt-0">
                    <ul id="sidebar-nav" class="list-group list-sibling">
                    <li id="menu-item-705" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-705"><a title="History" href="<?= site_url() ?>about/history/">History FKM UNSRI</a></li>
                          <li id="menu-item-401" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-401"><a title="Meaning of Symbol" href="<?= site_url() ?>about/logo/">Meaning of Symbol</a></li>
                          <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a title="Vision and Mission" href="<?= site_url() ?>about/vision-and-mission/">Vision dan Mission</a></li>
                          <li id="menu-item-708" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-708"><a title="Faculty Senate" href="<?= site_url() ?>about/senate/">Faculty Senate</a></li>
                          <li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68"><a title="Leadership Structure" href="<?= site_url() ?>about/structure/">Leadership Structure</a></li>
                          <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a title="Lecturers and Educators" href="<?= site_url() ?>about/lecturer/">Lecturers and Educators</a></li>
                          <li id="menu-item-62" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62"><a title="Acderitation" href="<?= site_url() ?>about/accreditation/">Acderitation</a></li>
                          <li id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63"><a title="Achievements" href="<?= site_url() ?>about/achievements/">Achievements</a></li>
                          <li id="menu-item-2687" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2687"><a title="Education Personnel" href="<?= site_url() ?>about/education-personnel/">Education Personnel FKM UNSRI</a></li>
                 
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php }; ?>