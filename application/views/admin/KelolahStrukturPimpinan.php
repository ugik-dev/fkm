<div class="wrapper wrapper-content animated fadeInRight">
  <div class="ibox ssection-container">
    <div class="ibox-content">
      <form class="form-inline" id="toolbar_form" onsubmit="return false;">
        <button type="button" class="btn btn-success my-1 mr-sm-2" id="new_btn" disabled="disabled"><i class="fal fa-plus"></i> Tambah Pimpinan Baru</button>
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

<div class="modal inmodal" id="pimpinan_modal" tabindex="-1" opd="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content animated fadeIn">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Kelola Pimpinan</h4>
        <span class="info"></span>
      </div>
      <div class="modal-body" id="modal-body">
        <form opd="form" id="pimpinan_form" onsubmit="return false;" type="multipart" autocomplete="off">
          <input type="hidden" id="id_pimpinan" name="id_pimpinan">
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
    $('#struktur_pimpinan').addClass('active');

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

    var PimpinanModal = {
      'self': $('#pimpinan_modal'),
      'info': $('#pimpinan_modal').find('.info'),
      'form': $('#pimpinan_modal').find('#pimpinan_form'),
      'addBtn': $('#pimpinan_modal').find('#add_btn'),
      'saveEditBtn': $('#pimpinan_modal').find('#save_edit_btn'),
      'idPimpinan': $('#pimpinan_modal').find('#id_pimpinan'),
      'jabatan': $('#pimpinan_modal').find('#jabatan'),
      'nama': $('#pimpinan_modal').find('#nama'),
      'no': $('#pimpinan_modal').find('#no'),
      'nip_nidn': $('#tenaga_kependidikan_modal').find('#nip_nidn'),
      'golongan': $('#tenaga_kependidikan_modal').find('#golongan'),
      's1': $('#tenaga_kependidikan_modal').find('#s1'),
      's2': $('#tenaga_kependidikan_modal').find('#s2'),
      's3': $('#tenaga_kependidikan_modal').find('#s3'),
      'bidang_keilmuan': $('#tenaga_kependidikan_modal').find('#bidang_keilmuan'),
      'fokus_penelitian': $('#tenaga_kependidikan_modal').find('#fokus_penelitian'),
    
      'photo_frame': $('#pimpinan_modal').find('#photo_frame'),
      'photo': new FileUploader($('#pimpinan_modal').find('#photo'), "", "photo", ".jpg , .jpeg , .png", false, false),
      'photo_form': $('#pimpinan_modal').find('#photo_form'),
    }

    var dataRole = {}
    var dataPimpinan = {}

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

    getAllStrukturPimpinan();

    function getAllStrukturPimpinan() {
      swal({
        title: 'Loading pimpinan...',
        allowOutsideClick: false
      });
      swal.showLoading();
      return $.ajax({
        url: `<?php echo site_url('PimpinanController/getAllPimpinan/') ?>`,
        'type': 'POST',
        data: toolbar.form.serialize(),
        success: function(data) {
          swal.close();
          var json = JSON.parse(data);
          if (json['error']) {
            return;
          }
          dataPimpinan = json['data'];
          renderPimpinan(dataPimpinan);
        },
        error: function(e) {}
      });
    }

    function renderPimpinan(data) {
      if (data == null || typeof data != "object") {
        console.log("Pimpinan::UNKNOWN DATA");
        return;
      }
      var i = 0;

      var renderData = [];
      Object.values(data).forEach((pimpinan) => {
        var editButton = `
        <a class="edit dropdown-item" data-id='${pimpinan['id_pimpinan']}'><i class='fa fa-pencil'></i> Edit Pimpinan</a>
      `;
        var deleteButton = `
        <a class="delete dropdown-item" data-id='${pimpinan['id_pimpinan']}'><i class='fa fa-trash'></i> Hapus Pimpinan</a>
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
      Jabatan : ${pimpinan['jabatan'] } <br>
      NIP/NIDN : ${pimpinan['nip_nidn'] } <br>
      Golongan : ${pimpinan['golongan'] } <br>
      Pendidikan <br>
      S1 : ${pimpinan['s1'] } <br>
      S2 : ${pimpinan['s2'] } <br>
      S3 : ${pimpinan['s3'] } <br>
      Bidang Keilmuan : ${pimpinan['bidang_keilmuan'] } <br>
      Fokus Penelitian : ${pimpinan['fokus_penelitian'] } <br>

      `;
        img = pimpinan['photo'] ? `<img src="<?= base_url('uploads/photo/') ?>${pimpinan['photo']}" width="190px" >` : '';
        renderData.push([pimpinan['no'], pimpinan['nama'], desk, img, button]);
      });
      FDataTable.clear().rows.add(renderData).draw('full-hold');
    }

    function resetPimpinanModal() {
      // PimpinanModal.id_role.val(toolbar.id_role.val());
      // PimpinanModal.opd.val(toolbar.id_opd.val() != -1 ? toolbar.id_opd.val() : "");
    }

    toolbar.newBtn.on('click', (e) => {
      // resetPimpinanModal();
      PimpinanModal.form.trigger('reset');
      PimpinanModal.self.modal('show');
      PimpinanModal.addBtn.show();
      PimpinanModal.saveEditBtn.hide();
      PimpinanModal.photo_frame.html('-');

    });

    FDataTable.on('click', '.edit', function() {
      PimpinanModal.form.trigger('reset');
      PimpinanModal.self.modal('show');
      PimpinanModal.addBtn.hide();
      PimpinanModal.saveEditBtn.show();
      var currentData = dataPimpinan[$(this).data('id')];
      PimpinanModal.idPimpinan.val(currentData['id_pimpinan']);
      PimpinanModal.no.val(currentData['no']);
      PimpinanModal.jabatan.val(currentData['jabatan']);
      PimpinanModal.nama.val(currentData['nama']);
      PimpinanModal.nip_nidn.val(currentData['nip_nidn']);
      PimpinanModal.golongan.val(currentData['golongan']);
      PimpinanModal.s1.val(currentData['s1']);
      PimpinanModal.s2.val(currentData['s2']);
      PimpinanModal.s3.val(currentData['s3']);
      PimpinanModal.bidang_keilmuan.val(currentData['bidang_keilmuan']);
      PimpinanModal.fokus_penelitian.val(currentData['fokus_penelitian']);
    
      currentData['photo'] ? PimpinanModal.photo_frame.html(`<img src="<?= base_url('uploads/photo/') ?>${currentData['photo']}" width="190px" >`) : PimpinanModal.photo_frame.html('-');
      // PimpinanModal.opd.val(currentData['id_opd']);
    });

    PimpinanModal.form.submit(function(event) {
      event.preventDefault();
      var isAdd = PimpinanModal.addBtn.is(':visible');
      var url = "<?= site_url('PimpinanController/') ?>";
      url += isAdd ? "addPimpinan" : "editPimpinan";
      var button = isAdd ? PimpinanModal.addBtn : PimpinanModal.saveEditBtn;

      swal(swalSaveConfigure).then((result) => {
        if (!result.value) {
          return;
        }
        buttonLoading(button);
        $.ajax({
          url: url,
          'type': 'POST',
          data: new FormData(PimpinanModal.form[0]),
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
            var pimpinan = json['data']
            dataPimpinan[pimpinan['id_pimpinan']] = pimpinan;
            swal("Simpan Berhasil", "", "success");
            renderPimpinan(dataPimpinan);
            PimpinanModal.self.modal('hide');
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
          url: "<?= site_url('PimpinanController/deletePimpinan') ?>",
          'type': 'POST',
          data: {
            'id_pimpinan': id
          },
          success: function(data) {
            var json = JSON.parse(data);
            if (json['error']) {
              swal("Delete Gagal", json['message'], "error");
              return;
            }
            delete dataPimpinan[id];
            swal("Delete Berhasil", "", "success");
            renderPimpinan(dataPimpinan);
          },
          error: function(e) {}
        });
      });
    });
  });
</script>