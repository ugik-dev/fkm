<div class="wrapper wrapper-content animated fadeInRight">
  <div class="ibox ssection-container">
    <div class="ibox-content">
      <form class="form-inline" id="toolbar_form" onsubmit="return false;">
        <button type="button" class="btn btn-success my-1 mr-sm-2" id="new_btn" disabled="disabled"><i class="fal fa-plus"></i> Tambah TenagaKependidikan Baru</button>
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
                  <th style="width: 24%; text-align:center!important">Nama</th>
                  <th style="width: 24%; text-align:center!important">Jabatan</th>
                  <th style="width: 16%; text-align:center!important">Photo</th>
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

<div class="modal inmodal" id="tenaga_kependidikan_modal" tabindex="-1" opd="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content animated fadeIn">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Kelola TenagaKependidikan</h4>
        <span class="info"></span>
      </div>
      <div class="modal-body" id="modal-body">
        <form opd="form" id="tenaga_kependidikan_form" onsubmit="return false;" type="multipart" autocomplete="off">
          <input type="hidden" id="id_tenaga_kependidikan" name="id_tenaga_kependidikan">
          <div class="form-group">
            <label for="no">No Urutan</label>
            <input type="number" placeholder="No Urutan" class="form-control" id="no" name="no" required="required">
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" placeholder="Nama" class="form-control" id="nama" name="nama" required="required">
          </div>
          <div class="form-group">
            <label for="nip_nidn">NIP/NIDN</label>
            <input type="text" placeholder="NIP/NIDN" class="form-control" id="nip_nidn" name="nip_nidn" required="required">
          </div>
          <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" placeholder="Jabatan" class="form-control" id="jabatan" name="jabatan" required="required">
          </div>
          <div class="form-group">
            <label for="golongan">Golongan</label>
            <input type="text" placeholder="Golongan" class="form-control" id="golongan" name="golongan" required="required">
          </div>
          <div class="form-group">
            <label for="pendidikan">Pendidikan</label>
          </div>
          <div class="form-group">
            <label for="s1">S1</label>
            <input type="text" placeholder="S1" class="form-control" id="s1" name="s1" required="required">
          </div>
          <div class="form-group">
            <label for="s2">S2</label>
            <input type="text" placeholder="S2" class="form-control" id="s2" name="s2" required="required">
          </div>
          <div class="form-group">
            <label for="s3">S3</label>
            <input type="text" placeholder="S3" class="form-control" id="s3" name="s3" required="required">
          </div>
          <div class="form-group">
            <label for="bidang_keilmuan">Bidang Keilmuan</label>
            <input type="text" placeholder="Bidang Keilmuan" class="form-control" id="bidang_keilmuan" name="bidang_keilmuan" required="required">
          </div>
          <div class="form-group">
            <label for="fokus_penelitian">Fokus Penelitian</label>
            <input type="text" placeholder="Fokus Penelitian" class="form-control" id="fokus_penelitian" name="fokus_penelitian" required="required">
          </div>
         
            <div class="form-group" id="photo_form">
            <label for="photo">Photo</label>
            <p class="no-margins"><span id="photo">-</span></p>
          </div>
          <div id="photo_frame"></div>
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
    $('#tenaga_kependidikan').addClass('active');

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

    var TenagaKependidikanModal = {
      'self': $('#tenaga_kependidikan_modal'),
      'info': $('#tenaga_kependidikan_modal').find('.info'),
      'form': $('#tenaga_kependidikan_modal').find('#tenaga_kependidikan_form'),
      'addBtn': $('#tenaga_kependidikan_modal').find('#add_btn'),
      'saveEditBtn': $('#tenaga_kependidikan_modal').find('#save_edit_btn'),
      'idTenagaKependidikan': $('#tenaga_kependidikan_modal').find('#id_tenaga_kependidikan'),
      'jabatan': $('#tenaga_kependidikan_modal').find('#jabatan'),
      'nama': $('#tenaga_kependidikan_modal').find('#nama'),
      'no': $('#tenaga_kependidikan_modal').find('#no'),
      'nip_nidn': $('#tenaga_kependidikan_modal').find('#nip_nidn'),
      'golongan': $('#tenaga_kependidikan_modal').find('#golongan'),
      's1': $('#tenaga_kependidikan_modal').find('#s1'),
      's2': $('#tenaga_kependidikan_modal').find('#s2'),
      's3': $('#tenaga_kependidikan_modal').find('#s3'),
      'bidang_keilmuan': $('#tenaga_kependidikan_modal').find('#bidang_keilmuan'),
      'fokus_penelitian': $('#tenaga_kependidikan_modal').find('#fokus_penelitian'),
      'photo_frame': $('#tenaga_kependidikan_modal').find('#photo_frame'),
      'photo': new FileUploader($('#tenaga_kependidikan_modal').find('#photo'), "", "photo", ".jpg , .jpeg , .png", false, false),
      'photo_form': $('#tenaga_kependidikan_modal').find('#photo_form'),
    }

    var dataRole = {}
    var dataTenagaKependidikan = {}

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
    // $.when(getAllStrukturTenagaKependidikan()).then((e) => {
    // }).fail((e) => {
    //   console.log(e)
    // });

    // function getAllRole() {
    //   return $.ajax({
    //     url: `<?php echo site_url('ParameterController/getAllRole/') ?>`,
    //     'type': 'POST',
    //     data: {},
    //     success: function(data) {
    //       var json = JSON.parse(data);
    //       if (json['error']) {
    //         return;
    //       }
    //       dataRole = json['data'];
    //       renderRoleSelectionFilter(dataRole);
    //       renderRoleSelectionAdd(dataRole);
    //     },
    //     error: function(e) {}
    //   });
    // }

    // function renderRoleSelectionFilter(data) {
    //   toolbar.id_role.empty();
    //   toolbar.id_role.append($('<option>', {
    //     value: "",
    //     text: "-- Semua Role --"
    //   }));
    //   Object.values(data).forEach((d) => {
    //     toolbar.id_role.append($('<option>', {
    //       value: d['id_role'],
    //       text: d['id_role'] + ' :: ' + d['title_role'],
    //     }));
    //   });
    // }

    // function renderRoleSelectionAdd(data) {
    //   TenagaKependidikanModal.id_role.empty();
    //   TenagaKependidikanModal.id_role.append($('<option>', {
    //     value: "",
    //     text: "-- Pilih Role --"
    //   }));
    //   Object.values(data).forEach((d) => {
    //     TenagaKependidikanModal.id_role.append($('<option>', {
    //       value: d['id_role'],
    //       text: d['id_role'] + ' :: ' + d['title_role'],
    //     }));
    //   });
    // }

    getAllStrukturTenagaKependidikan();

    function getAllStrukturTenagaKependidikan() {
      swal({
        title: 'Loading tenaga_kependidikan...',
        allowOutsideClick: false
      });
      swal.showLoading();
      return $.ajax({
        url: `<?php echo site_url('TenagaKependidikanController/getAllTenagaKependidikan/') ?>`,
        'type': 'POST',
        data: toolbar.form.serialize(),
        success: function(data) {
          swal.close();
          var json = JSON.parse(data);
          if (json['error']) {
            return;
          }
          dataTenagaKependidikan = json['data'];
          renderTenagaKependidikan(dataTenagaKependidikan);
        },
        error: function(e) {}
      });
    }

    function renderTenagaKependidikan(data) {
      if (data == null || typeof data != "object") {
        console.log("TenagaKependidikan::UNKNOWN DATA");
        return;
      }
      var i = 0;

      var renderData = [];
      Object.values(data).forEach((tenaga_kependidikan) => {
        var editButton = `
        <a class="edit dropdown-item" data-id='${tenaga_kependidikan['id_tenaga_kependidikan']}'><i class='fa fa-pencil'></i> Edit TenagaKependidikan</a>
      `;
        var deleteButton = `
        <a class="delete dropdown-item" data-id='${tenaga_kependidikan['id_tenaga_kependidikan']}'><i class='fa fa-trash'></i> Hapus TenagaKependidikan</a>
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
      desk  = `
      Jabatan : ${tenaga_kependidikan['jabatan'] } <br>
      NIP/NIDN : ${tenaga_kependidikan['nip_nidn'] } <br>
      Golongan : ${tenaga_kependidikan['golongan'] } <br>
      Pendidikan <br>
      S1 : ${tenaga_kependidikan['s1'] } <br>
      S2 : ${tenaga_kependidikan['s2'] } <br>
      S3 : ${tenaga_kependidikan['s3'] } <br>
      Bidang Keilmuan : ${tenaga_kependidikan['bidang_keilmuan'] } <br>
      Fokus Penelitian : ${tenaga_kependidikan['fokus_penelitian'] } <br>
      `;
        img = tenaga_kependidikan['photo'] ? `<img src="<?= base_url('uploads/photo/') ?>${tenaga_kependidikan['photo']}" width="190px" >` : '';
        renderData.push([tenaga_kependidikan['no'], tenaga_kependidikan['nama'], desk, img, button]);
      });
      FDataTable.clear().rows.add(renderData).draw('full-hold');
    }

    function resetTenagaKependidikanModal() {
      // TenagaKependidikanModal.id_role.val(toolbar.id_role.val());
      // TenagaKependidikanModal.opd.val(toolbar.id_opd.val() != -1 ? toolbar.id_opd.val() : "");
    }

    toolbar.newBtn.on('click', (e) => {
      // resetTenagaKependidikanModal();
      TenagaKependidikanModal.form.trigger('reset');
      TenagaKependidikanModal.self.modal('show');
      TenagaKependidikanModal.addBtn.show();
      TenagaKependidikanModal.saveEditBtn.hide();
      TenagaKependidikanModal.photo_frame.html('-');

    });

    FDataTable.on('click', '.edit', function() {
      TenagaKependidikanModal.form.trigger('reset');
      TenagaKependidikanModal.self.modal('show');
      TenagaKependidikanModal.addBtn.hide();
      TenagaKependidikanModal.saveEditBtn.show();
      var currentData = dataTenagaKependidikan[$(this).data('id')];
      TenagaKependidikanModal.idTenagaKependidikan.val(currentData['id_tenaga_kependidikan']);
      TenagaKependidikanModal.no.val(currentData['no']);
      TenagaKependidikanModal.jabatan.val(currentData['jabatan']);
      TenagaKependidikanModal.nama.val(currentData['nama']);
      TenagaKependidikanModal.nip_nidn.val(currentData['nip_nidn']);
      TenagaKependidikanModal.golongan.val(currentData['golongan']);
      TenagaKependidikanModal.s1.val(currentData['s1']);
      TenagaKependidikanModal.s2.val(currentData['s2']);
      TenagaKependidikanModal.s3.val(currentData['s3']);
      TenagaKependidikanModal.bidang_keilmuan.val(currentData['bidang_keilmuan']);
      TenagaKependidikanModal.fokus_penelitian.val(currentData['fokus_penelitian']);
    
      currentData['photo'] ? TenagaKependidikanModal.photo_frame.html(`<img src="<?= base_url('uploads/photo/') ?>${currentData['photo']}" width="190px" >`) : TenagaKependidikanModal.photo_frame.html('-');
      // TenagaKependidikanModal.opd.val(currentData['id_opd']);
    });

    TenagaKependidikanModal.form.submit(function(event) {
      event.preventDefault();
      var isAdd = TenagaKependidikanModal.addBtn.is(':visible');
      var url = "<?= site_url('TenagaKependidikanController/') ?>";
      url += isAdd ? "addTenagaKependidikan" : "editTenagaKependidikan";
      var button = isAdd ? TenagaKependidikanModal.addBtn : TenagaKependidikanModal.saveEditBtn;

      swal(swalSaveConfigure).then((result) => {
        if (!result.value) {
          return;
        }
        buttonLoading(button);
        $.ajax({
          url: url,
          'type': 'POST',
          data: new FormData(TenagaKependidikanModal.form[0]),
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
            var tenaga_kependidikan = json['data']
            dataTenagaKependidikan[tenaga_kependidikan['id_tenaga_kependidikan']] = tenaga_kependidikan;
            swal("Simpan Berhasil", "", "success");
            renderTenagaKependidikan(dataTenagaKependidikan);
            TenagaKependidikanModal.self.modal('hide');
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
          url: "<?= site_url('TenagaKependidikanController/deleteTenagaKependidikan') ?>",
          'type': 'POST',
          data: {
            'id_tenaga_kependidikan': id
          },
          success: function(data) {
            var json = JSON.parse(data);
            if (json['error']) {
              swal("Delete Gagal", json['message'], "error");
              return;
            }
            delete dataTenagaKependidikan[id];
            swal("Delete Berhasil", "", "success");
            renderTenagaKependidikan(dataTenagaKependidikan);
          },
          error: function(e) {}
        });
      });
    });
  });
</script>