<div class="wrapper wrapper-content animated fadeInRight">
    <div class="ibox ssection-container">
        <div class="ibox-content">
            <form class="form-inline" id="toolbar_form" onsubmit="return false;">
                <button type="button" class="btn btn-success my-1 mr-sm-2" id="new_btn" disabled="disabled"><i class="fal fa-plus"></i> Tambah Jurnal</button>
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
                                    <th style="width: 7%; text-align:center!important">No</th>
                                    <th style="width: 24%; text-align:center!important">Judul Jurnal</th>
                                    <th style="width: 24%; text-align:center!important">Institusi</th>
                                    <th style="width: 16%; text-align:center!important">jurnal</th>
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

<div class="modal inmodal" id="mhs_modal" tabindex="-1" opd="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Kelola Jurnal</h4>
                <span class="info"></span>
            </div>
            <div class="modal-body" id="modal-body">
                <form opd="form" id="mhs_form" onsubmit="return false;" type="multipart" autocomplete="off">
                    <input type="hidden" id="id_jurnal" name="id_jurnal">

                    <div class="form-group">
                        <label for="judul_jurnal">Judul Jurnal</label>
                        <input type="text" placeholder="Judul Jurnal" class="form-control" id="judul_jurnal" name="judul_jurnal" required="required">
                    </div>
                    <div class="form-group">
                        <label for="vol">Vol</label>
                        <input type="text" placeholder="Vol" class="form-control" id="vol" name="vol" required="required">
                    </div>
                    <div class="form-group">
                        <label for="institusi">Institusi</label>
                        <input type="text" placeholder="Institusi" class="form-control" id="institusi" name="institusi" required="required">
                    </div>
                    <div class="form-group">
                        <label for="nama_pengarang">Author</label>
                        <input type="text" placeholder="Author" class="form-control" id="nama_pengarang" name="nama_pengarang" required="required">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Lainnya</label>
                        <textarea id="deskripsi" name="deskripsi" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="abstrak">Abstrak</label>
                        <textarea id="abstrak" name="abstrak" class="form-control"></textarea>
                    </div>

                    <div class="form-group" id="jurnal_form">
                        <label for="jurnal">File *pdf</label>
                        <p class="no-margins"><span id="jurnal">-</span></p>
                    </div>
                    <div class="form-group" id="cover_form">
                        <label for="cover">Cover *jpg jpeg png</label>
                        <p class="no-margins"><span id="cover">-</span></p>
                    </div>
                    <div id="jurnal_frame"></div>
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

<div class="modal inmodal" id="show_jurnal_modal" tabindex="-1" opd="dialog" aria-hidden="true" >
    <div class="modal-dialog modal-xl">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">JURNAL</h4>
                <span class="info"></span>
            </div>
            <div class="modal-body" id="show_jurnal_fream">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#mhs').addClass('active');

        var toolbar = {
            'form': $('#toolbar_form'),
            // 'id_role': $('#toolbar_form').find('#id_role'),
            // 'id_opd': $('#toolbar_form').find('#id_opd'),
            'newBtn': $('#new_btn'),
        }

        var FDataTable = $('#FDataTable').DataTable({
            'columnDefs': [],
            deferRender: true,
            "order": [
                [0, "desc"]
            ]
        });

        var MahasiswaAlumniModal = {
            'self': $('#mhs_modal'),
            'info': $('#mhs_modal').find('.info'),
            'form': $('#mhs_modal').find('#mhs_form'),
            'addBtn': $('#mhs_modal').find('#add_btn'),
            'saveEditBtn': $('#mhs_modal').find('#save_edit_btn'),
            'id_jurnal': $('#mhs_modal').find('#id_jurnal'),
            'institusi': $('#mhs_modal').find('#institusi'),
            'judul_jurnal': $('#mhs_modal').find('#judul_jurnal'),
            // 'no': $('#mhs_modal').find('#no'),
            'vol': $('#mhs_modal').find('#vol'),
            'nama_pengarang': $('#mhs_modal').find('#nama_pengarang'),
            'abstrak': $('#mhs_modal').find('#abstrak'),
            'deskripsi': $('#mhs_modal').find('#deskripsi'),

            'jurnal_frame': $('#mhs_modal').find('#jurnal_frame'),
            'jurnal': new FileUploader($('#mhs_modal').find('#jurnal'), "", "jurnal", ".pdf", false, false),
            'jurnal_form': $('#mhs_modal').find('#jurnal_form'),
            'cover': new FileUploader($('#mhs_modal').find('#cover'), "", "cover", ".jpg, .png , .jpeg", false, false),
            'cover_form': $('#mhs_modal').find('#cover_form'),
        }

        var dataRole = {}
        var dataJurnal = {}

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

        getAllStrukturMahasiswaAlumni();

        function getAllStrukturMahasiswaAlumni() {
            swal({
                title: 'Loading mhs...',
                allowOutsideClick: false
            });
            swal.showLoading();
            return $.ajax({
                url: `<?php echo site_url('MahasiswaAlumniController/getAllJurnal/') ?>`,
                'type': 'POST',
                data: toolbar.form.serialize(),
                success: function(data) {
                    swal.close();
                    var json = JSON.parse(data);
                    if (json['error']) {
                        return;
                    }
                    dataJurnal = json['data'];
                    renderMahasiswaAlumni(dataJurnal);
                },
                error: function(e) {}
            });
        }

        function renderMahasiswaAlumni(data) {
            if (data == null || typeof data != "object") {
                console.log("MahasiswaAlumni::UNKNOWN DATA");
                return;
            }
            var i = 0;

            var renderData = [];
            Object.values(data).forEach((mhs) => {
                var editButton = `
        <a class="edit dropdown-item" data-id='${mhs['id_jurnal']}'><i class='fa fa-pencil'></i> Edit Jurnal</a>
      `;
                var deleteButton = `
        <a class="delete dropdown-item" data-id='${mhs['id_jurnal']}'><i class='fa fa-trash'></i> Hapus Jurnal</a>
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
                desk = `
      Institusi : ${mhs['institusi'] } <br>
      Vol : ${mhs['vol'] } <br>
  

      `;
      cover = mhs['cover'] ? `<br><img src="<?=base_url('uploads/cover/')?>${mhs['cover']}" width="190px" >` : "";
     
                img = mhs['jurnal'] ? `<a class="show_modal_pdf" data-id='${mhs['id_jurnal']}'><i class='fa fa-eye'></i> Lihat File</a>` : "";
                renderData.push([mhs['nama_pengarang'], mhs['judul_jurnal'], desk, img+cover, button]);
                // '<img src="<?= base_url('assets/img/profile_small.jpg') ?>" width="190px" >'
            });
            FDataTable.clear().rows.add(renderData).draw('full-hold');
        }

        function resetMahasiswaAlumniModal() {
            // MahasiswaAlumniModal.id_role.val(toolbar.id_role.val());
            // MahasiswaAlumniModal.opd.val(toolbar.id_opd.val() != -1 ? toolbar.id_opd.val() : "");
        }

        toolbar.newBtn.on('click', (e) => {
            // resetMahasiswaAlumniModal();
            MahasiswaAlumniModal.form.trigger('reset');
            MahasiswaAlumniModal.self.modal('show');
            MahasiswaAlumniModal.addBtn.show();
            MahasiswaAlumniModal.saveEditBtn.hide();
            MahasiswaAlumniModal.jurnal_frame.html('-');

        });

        FDataTable.on('click', '.show_modal_pdf', function() {
            var fl = dataJurnal[$(this).data('id')];
            console.log(fl['jurnal'])
            tx = `
                <embed type="application/pdf" src="<?= base_url('uploads/jurnal/') ?>${fl['jurnal'] }" width="100%" height="700"></embed>
           `;
                // console.log(tx)
                $('#show_jurnal_fream').html(tx)
            $('#show_jurnal_modal').modal('show')
        
        });
        FDataTable.on('click', '.edit', function() {
            MahasiswaAlumniModal.form.trigger('reset');
            MahasiswaAlumniModal.self.modal('show');
            MahasiswaAlumniModal.addBtn.hide();
            MahasiswaAlumniModal.saveEditBtn.show();
            var currentData = dataJurnal[$(this).data('id')];
            MahasiswaAlumniModal.id_jurnal.val(currentData['id_jurnal']);
            // MahasiswaAlumniModal.no.val(currentData['no']);
            MahasiswaAlumniModal.institusi.val(currentData['institusi']);
            MahasiswaAlumniModal.judul_jurnal.val(currentData['judul_jurnal']);
            MahasiswaAlumniModal.vol.val(currentData['vol']);
            MahasiswaAlumniModal.nama_pengarang.val(currentData['nama_pengarang']);
            MahasiswaAlumniModal.abstrak.val(currentData['abstrak']);
            MahasiswaAlumniModal.deskripsi.val(currentData['deskripsi']);

            // currentData['jurnal'] ? MahasiswaAlumniModal.jurnal_frame.html(`<img src="<?= base_url('uploads/jurnal/') ?>${currentData['jurnal']}" width="190px" >`) : MahasiswaAlumniModal.jurnal_frame.html('-');
            // MahasiswaAlumniModal.opd.val(currentData['id_opd']);
        });

        MahasiswaAlumniModal.form.submit(function(event) {
            event.preventDefault();
            var isAdd = MahasiswaAlumniModal.addBtn.is(':visible');
            var url = "<?= site_url('MahasiswaAlumniController/') ?>";
            url += isAdd ? "addJurnal" : "editJurnal";
            var button = isAdd ? MahasiswaAlumniModal.addBtn : MahasiswaAlumniModal.saveEditBtn;

            swal(swalSaveConfigure).then((result) => {
                if (!result.value) {
                    return;
                }
                buttonLoading(button);
                $.ajax({
                    url: url,
                    'type': 'POST',
                    data: new FormData(MahasiswaAlumniModal.form[0]),
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
                        var mhs = json['data']
                        dataJurnal[mhs['id_jurnal']] = mhs;
                        swal("Simpan Berhasil", "", "success");
                        renderMahasiswaAlumni(dataJurnal);
                        MahasiswaAlumniModal.self.modal('hide');
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
                    url: "<?= site_url('MahasiswaAlumniController/deleteJurnal') ?>",
                    'type': 'POST',
                    data: {
                        'id_jurnal': id
                    },
                    success: function(data) {
                        var json = JSON.parse(data);
                        if (json['error']) {
                            swal("Delete Gagal", json['message'], "error");
                            return;
                        }
                        delete dataJurnal[id];
                        swal("Delete Berhasil", "", "success");
                        renderMahasiswaAlumni(dataJurnal);
                    },
                    error: function(e) {}
                });
            });
        });
    });
</script>