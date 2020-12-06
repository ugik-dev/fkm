<div class="wrapper wrapper-content animated fadeInRight">
    <div class="ibox ssection-container">
        <div class="ibox-content">
            <form class="form-inline" id="toolbar_form" onsubmit="return false;">
                <!-- <div class="form-group my-1 mr-sm-2">

                    <input type="text" placeholder="Cari" class="form-control my-1 mr-sm-2" id="search" name="search">
                </div>
                <button type="button" class="btn btn-success my-1 mr-sm-2" id="search_btn" disabled="disabled"><i class="fal fa-search"></i> Cari </button> -->

                <button type="button" class="btn btn-success my-1 mr-sm-2" id="new_btn" disabled="disabled"><i class="fal fa-plus"></i> Tambah Galery</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table id="FDataTable" class="table table-bordered table-hover" style="padding:0px">
                            <thead>
                                <tr>
                                    <th style="width: 50%; text-align:center!important">Deskripsi</th>
                                    <!-- <th style="width: 24%; text-align:center!important">Nama</th> -->
                                    <th style="width: 24%; text-align:center!important">Media</th>
                                    <!-- <th style="width: 16%; text-align:center!important">Deskripsi</th> -->
                                    <th style="width: 5%; text-align:center!important">Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal inmodal" id="galery_modal" tabindex="-1" opd="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Kelola Galery</h4>
                <span class="info"></span>
            </div>
            <div class="modal-body" id="modal-body">
                <form opd="form" id="galery_form" onsubmit="return false;" type="multipart" autocomplete="off">
                    <input type="hidden" id="id_galery" name="id_galery">


                    <div class="form-group col-lg-12">
                        <div class="form-group" id="media_galery_form">
                            <label for="media_galery">Media</label>
                            <p class="tahun_masuk-margins"><span id="media_galery">-</span></p>
                        </div>
                        <div id="media_galery_frame"></div>
                        <!-- </div> -->
                    </div>
                    <!-- <div class="row"> -->
                    <div class="form-group col-lg-12">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-success my-1 mr-sm-2" type="submit" id="add_btn" data-loading-text="Loading..."><strong>Tambah Data</strong></button>
                    <button class="btn btn-success my-1 mr-sm-2" type="submit" id="save_edit_btn" data-loading-text="Loading..."><strong>Simpan Perubahan</strong></button>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#galery').addClass('active');

        var toolbar = {
            'form': $('#toolbar_form'),
            // 'id_role': $('#toolbar_form').find('#id_role'),
            // 'id_opd': $('#toolbar_form').find('#id_opd'),
            'newBtn': $('#new_btn'),
            'searchBtn': $('#search_btn')
        }

        var FDataTable = $('#FDataTable').DataTable({
            'columnDefs': [],
            deferRender: true,
            "order": [
                [0, "desc"]
            ]
        });

        var GaleryModal = {
            'self': $('#galery_modal'),
            'info': $('#galery_modal').find('.info'),
            'form': $('#galery_modal').find('#galery_form'),
            'addBtn': $('#galery_modal').find('#add_btn'),
            'saveEditBtn': $('#galery_modal').find('#save_edit_btn'),
            'idGalery': $('#galery_modal').find('#id_galery'),
           'deskripsi': $('#galery_modal').find('#deskripsi'),
            'media_galery_frame': $('#galery_modal').find('#media_galery_frame'),
            'media_galery': new FileUploader($('#galery_modal').find('#media_galery'), "", "media_galery", ".jpg , .jpeg , .png", false, false),
            'media_galery_form': $('#galery_modal').find('#media_galery_form'),
        }

        // GaleryModal.self.modal('show')

        var dataRole = {}
        var dataGalery = {}

        var swalSaveConfigure = {
            title: "Konfirmasi simpan",
            text: "Yakin akan menyimpan data ini?",
            type: "info",
            showCancelButton: true,
            confirmButtonColor: "#18a689",
            confirmButtonText: "Ya, Simpan!",
        };

        var swalDeleteConfigure = {
            title: "Konfirmasi hapus",
            text: "Yakin akan menghapus data ini?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, Hapus!",
        };

        toolbar.newBtn.prop('disabled', false);
        toolbar.searchBtn.prop('disabled', false);

        toolbar.searchBtn.on('click', (e) => {
            getAllStrukturGalery();
        })
        getAllStrukturGalery();
       
        function getAllStrukturGalery() {
            swal({
                title: 'Loading galery...',
                allowOutsideClick: false
            });
            swal.showLoading();
            return $.ajax({
                url: `<?php echo site_url('GaleryController/getAllGalery/') ?>`,
                'type': 'POST',
                data: toolbar.form.serialize(),
                success: function(data) {
                    swal.close();
                    var json = JSON.parse(data);
                    if (json['error']) {
                        return;
                    }
                    dataGalery = json['data'];
                    renderGalery(dataGalery);
                },
                error: function(e) {}
            });
        }

        function renderGalery(data) {
            if (data == null || typeof data != "object") {
                console.log("Galery::UNKNOWN DATA");
                return;
            }
            var i = 0;

            var renderData = [];
            Object.values(data).forEach((galery) => {
                var editButton = `
        <a class="edit dropdown-item" data-id='${galery['id_galery']}'><i class='fa fa-pencil'></i> Edit Galery</a>
      `;
                var deleteButton = `
        <a class="delete dropdown-item" data-id='${galery['id_galery']}'><i class='fa fa-trash'></i> Hapus Galery</a>
      `;
                var button = `
        <div class="btn-group" opd="group">
          <button id="action" type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class='fa fa-bars'></i></button>
          <div class="dropdown-menu" aria-labelledby="action">
            ${editButton}
            ${deleteButton}
          </div>
        </div>
      `;
                img = galery['media_galery'] ? `<img src="<?= base_url('uploads/media_galery/') ?>${galery['media_galery']}" width="190px" >` : '';
                renderData.push([galery['deskripsi'], img, button]);
            });
            FDataTable.clear().rows.add(renderData).draw('full-hold');
        }

        function resetGaleryModal() {
            // GaleryModal.id_role.val(toolbar.id_role.val());
            // GaleryModal.opd.val(toolbar.id_opd.val() != -1 ? toolbar.id_opd.val() : "");
        }

        toolbar.newBtn.on('click', (e) => {
            // resetGaleryModal();
            GaleryModal.form.trigger('reset');
            GaleryModal.self.modal('show');
            GaleryModal.addBtn.show();
            GaleryModal.saveEditBtn.hide();
            GaleryModal.media_galery_frame.html('-');

        });

        FDataTable.on('click', '.edit', function() {
            GaleryModal.form.trigger('reset');
            GaleryModal.self.modal('show');
            GaleryModal.addBtn.hide();
            GaleryModal.saveEditBtn.show();
            var currentData = dataGalery[$(this).data('id')];
            GaleryModal.idGalery.val(currentData['id_galery']);
            GaleryModal.deskripsi.val(currentData['deskripsi']);
            // GaleryModal.tahun_masuk.val(currentData['tahun_masuk']);
            // GaleryModal.tahun_keluar.val(currentData['tahun_keluar']);
            // deskripsi
            // GaleryModal.status.val(currentData['status']);
            // GaleryModal.nama.val(currentData['nama']);
            currentData['media_galery'] ? GaleryModal.media_galery_frame.html(`<img src="<?= base_url('uploads/media_galery/') ?>${currentData['media_galery']}" width="190px" >`) : GaleryModal.media_galery_frame.html('-');
            // GaleryModal.opd.val(currentData['id_opd']);
        });

        GaleryModal.form.submit(function(event) {
            event.preventDefault();
            var isAdd = GaleryModal.addBtn.is(':visible');
            var url = "<?= site_url('GaleryController/') ?>";
            url += isAdd ? "addGalery" : "editGalery";
            var button = isAdd ? GaleryModal.addBtn : GaleryModal.saveEditBtn;

            swal(swalSaveConfigure).then((result) => {
                if (!result.value) {
                    return;
                }
                buttonLoading(button);
                $.ajax({
                    url: url,
                    'type': 'POST',
                    data: new FormData(GaleryModal.form[0]),
                    contentType: false,
                    processData: false,
                    // FormData(bp3l_rek_modal.form[0])
                    success: function(data) {
                        buttonIdle(button);
                        var json = JSON.parse(data);
                        if (json['error']) {
                            swal("Simpan Gagal", json['message'], "error");
                            return;
                        }
                        var galery = json['data']
                        dataGalery[galery['id_galery']] = galery;
                        swal("Simpan Berhasil", "", "success");
                        renderGalery(dataGalery);
                        GaleryModal.self.modal('hide');
                    },
                    error: function(e) {}
                });
            });
        });

        FDataTable.on('click', '.delete', function() {
            event.preventDefault();
            var id = $(this).data('id');
            swal(swalDeleteConfigure).then((result) => {
                if (!result.value) {
                    return;
                }
                $.ajax({
                    url: "<?= site_url('GaleryController/deleteGalery') ?>",
                    'type': 'POST',
                    data: {
                        'id_galery': id
                    },
                    success: function(data) {
                        var json = JSON.parse(data);
                        if (json['error']) {
                            swal("Delete Gagal", json['message'], "error");
                            return;
                        }
                        delete dataGalery[id];
                        swal("Delete Berhasil", "", "success");
                        renderGalery(dataGalery);
                    },
                    error: function(e) {}
                });
            });
        });
    });
</script>