<div class="wrapper wrapper-content animated fadeInRight">
  <div class="ibox ssection-container">
    <div class="ibox-content">
      <form class="form-inline" id="toolbar_form" onsubmit="return false;">
        <div class="form-group my-1 mr-sm-2">

          <input type="text" placeholder="Cari" class="form-control my-1 mr-sm-2" id="search" name="search">
        </div>
        <button type="button" class="btn btn-success my-1 mr-sm-2" id="search_btn" disabled="disabled"><i class="fal fa-search"></i> Cari </button>

        <button type="button" class="btn btn-success my-1 mr-sm-2" id="new_btn" disabled="disabled"><i class="fal fa-plus"></i> Tambah Mahasiswa / Alumni Baru</button>
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
                  <th style="width: 7%; text-align:center!important">NIM</th>
                  <th style="width: 24%; text-align:center!important">Nama</th>
                  <th style="width: 24%; text-align:center!important">Deskripsi</th>
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

<div class="modal inmodal" id="mahasiswaalumni_modal" tabindex="-1" opd="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content animated fadeIn">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Kelola MahasiswaAlumni</h4>
        <span class="info"></span>
      </div>
      <div class="modal-body" id="modal-body">
        <form opd="form" id="mahasiswaalumni_form" onsubmit="return false;" type="multipart" autocomplete="off">
          <input type="hidden" id="id_mahasiswaalumni" name="id_mahasiswaalumni">
          <div class="row">
            <div class="form-group col-lg-6">
              <label for="nama">Nama</label>
              <input type="text" placeholder="Nama" class="form-control" id="nama" name="nama" required="required">
            </div>

            <div class="form-group col-lg-6">
              <label for="nim">NIM</label>
              <input type="text" placeholder="NIM" class="form-control" id="nim" name="nim" required="required">
           
            </div>
          </div>
          <div class="row">
            <div class="form-group col-lg-6">
              <label for="prodi">Program Studi</label>
              <select class="form-control mr-sm-2" name="prodi" id="prodi">
              </select>

            </div>

            <div class="form-group col-lg-3">
              <label for="sks_ditempuh">SKS Ditempuh</label>
              <input type="text" placeholder="SKS Ditempu" class="form-control" id="sks_ditempuh" name="sks_ditempuh" required="required">
            </div>
            <div class="form-group col-lg-3">
              <label for="sks_saat_ini">SKS Saat Ini</label>
              <input type="text" placeholder="SKS Saat Ini" class="form-control" id="sks_saat_ini" name="sks_saat_ini" required="required">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-lg-4">
              <label for="status">Status</label>
              <select class="form-control mr-sm-2" name="status" id="status">
                <option value="1">Aktif</option>
                <option value="2">Lulus</option>
                <option value="3">Drop Out</option>
                <option value="4">Stop Out</option>
              </select>

            </div>
            <div class="form-group col-lg-4">
              <label for="tahun_masuk">Tahun Masuk</label>
              <input type="number" placeholder="Tahun Masuk" class="form-control" id="tahun_masuk" name="tahun_masuk" required="required">
            </div>
            <div class="form-group col-lg-4">
              <label for="tahun_keluar">Tahun Keluar</label>
              <input type="number" placeholder="Tahun Keluar" class="form-control" id="tahun_keluar" name="tahun_keluar">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-lg-4">
              <label for="jk">Jenis Kelamin</label>
              <select class="form-control mr-sm-2" name="jk" id="jk">
                <option value="L">Laki Laki</option>
                <option value="P">Perempuan</option>
              </select>

            </div>
            <div class="form-group col-lg-4">
              <label for="tempat_lahir">Tempat Lahir</label>
              <input type="text" placeholder="Tempat Lahir" class="form-control" id="tempat_lahir" name="tempat_lahir" required="required">
            </div>
            <div class="form-group col-lg-4">
              <label for="tanggal_lahir">Tanggal Lahir</label>
              <input type="date" placeholder="Tanggal Lahir" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-lg-6">
              <label for="tahun_keluar">Deskripsi</label>
              <textarea id="deskripsi" name="deskripsi" class="form-control"></textarea>
            </div>
            <div class="form-group col-lg-6">
              <div class="form-group" id="photo_form">
                <label for="photo">Photo</label>
                <p class="tahun_masuk-margins"><span id="photo">-</span></p>
              </div>
              <div id="photo_frame"></div>
            </div>
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
    $('#mahasiswaalumni').addClass('active');

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

    var MahasiswaAlumniModal = {
      'self': $('#mahasiswaalumni_modal'),
      'info': $('#mahasiswaalumni_modal').find('.info'),
      'form': $('#mahasiswaalumni_modal').find('#mahasiswaalumni_form'),
      'addBtn': $('#mahasiswaalumni_modal').find('#add_btn'),
      'saveEditBtn': $('#mahasiswaalumni_modal').find('#save_edit_btn'),
      'idMahasiswaAlumni': $('#mahasiswaalumni_modal').find('#id_mahasiswaalumni'),
      'status': $('#mahasiswaalumni_modal').find('#status'),
      'nama': $('#mahasiswaalumni_modal').find('#nama'),
      'tahun_masuk': $('#mahasiswaalumni_modal').find('#tahun_masuk'),
      'tahun_keluar': $('#mahasiswaalumni_modal').find('#tahun_keluar'),
      'deskripsi': $('#mahasiswaalumni_modal').find('#deskripsi'),
      'photo_frame': $('#mahasiswaalumni_modal').find('#photo_frame'),
      'photo': new FileUploader($('#mahasiswaalumni_modal').find('#photo'), "", "photo", ".jpg , .jpeg , .png", false, false),
      'photo_form': $('#mahasiswaalumni_modal').find('#photo_form'),

      'jk': $('#mahasiswaalumni_modal').find('#jk'),
      'tempat_lahir': $('#mahasiswaalumni_modal').find('#tempat_lahir'),
      'tanggal_lahir': $('#mahasiswaalumni_modal').find('#tanggal_lahir'),
      'prodi': $('#mahasiswaalumni_modal').find('#prodi'),
      'sks_ditempuh': $('#mahasiswaalumni_modal').find('#sks_ditempuh'),
      'sks_saat_ini': $('#mahasiswaalumni_modal').find('#sks_saat_ini'),
      'nim': $('#mahasiswaalumni_modal').find('#nim'),
  
    }

    var dataRole = {}
    var dataMahasiswaAlumni = {}

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
      getAllStrukturMahasiswaAlumni();
    })

    function status(a) {
      if (a == '1')
        return 'Aktif'
      else if (a == '2')
        return 'Lulus'
      else if (a == '3')
        return 'Drop Out'
      else if (a == '4')
        return 'Stop Out'

    }

    function getAllStrukturMahasiswaAlumni() {
      swal({
        title: 'Loading mahasiswaalumni...',
        allowOutsideClick: false
      });
      swal.showLoading();
      return $.ajax({
        url: `<?php echo site_url('MahasiswaAlumniController/getAllMahasiswaAlumni/') ?>`,
        'type': 'POST',
        data: toolbar.form.serialize(),
        success: function(data) {
          swal.close();
          var json = JSON.parse(data);
          if (json['error']) {
            return;
          }
          dataMahasiswaAlumni = json['data'];
          renderMahasiswaAlumni(dataMahasiswaAlumni);
        },
        error: function(e) {}
      });
    }
    getAllProdi();

    function getAllProdi() {
      swal({
        title: 'Loading mahasiswaalumni...',
        allowOutsideClick: false
      });
      swal.showLoading();
      return $.ajax({
        url: `<?php echo site_url('MahasiswaAlumniController/getAllProdi/') ?>`,
        'type': 'GET',
        data: {},
        success: function(data) {
          swal.close();
          var json = JSON.parse(data);
          if (json['error']) {
            return;
          }
          dataProdi = json['data'];
          renderProdi(dataProdi);
        },
        error: function(e) {}
      });;
    }

    
    function renderProdi(data) {
      MahasiswaAlumniModal.prodi.empty();
      // MahasiswaAlumniModal.prodi.append($('<option>', {
      //   value: "",
      //   text: "-- Semua Role --"
      // }));
      Object.values(data).forEach((d) => {
        MahasiswaAlumniModal.prodi.append($('<option>', {
          value: d['id_prodi'],
          text: d['id_prodi'] + ' :: ' + d['nama_prodi'],
        }));
      });
    }



    function renderMahasiswaAlumni(data) {
      if (data == null || typeof data != "object") {
        console.log("MahasiswaAlumni::UNKNOWN DATA");
        return;
      }
      var i = 0;

      var renderData = [];
      Object.values(data).forEach((mahasiswaalumni) => {
        var skripsiButton = `
        <a class="dropdown-item" href='<?=base_url('AdminController/DetailMahasiswa')?>?nim=${mahasiswaalumni['nim']}'><i class='fa fa-arrow'></i> Data Skripsi</a>
        <a class="dropdown-item" href='<?=base_url('AdminController/DetailJurnalMahasiswa')?>?nim=${mahasiswaalumni['nim']}'><i class='fa fa-arrow'></i> Data Jurnal</a>
      `;
        var editButton = `
        <a class="edit dropdown-item" data-id='${mahasiswaalumni['id_mahasiswaalumni']}'><i class='fa fa-pencil'></i> Edit MahasiswaAlumni</a>
      `;
        var deleteButton = `
        <a class="delete dropdown-item" data-id='${mahasiswaalumni['id_mahasiswaalumni']}'><i class='fa fa-trash'></i> Hapus MahasiswaAlumni</a>
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

      tex = `
      Status : ${status(mahasiswaalumni['status'])}<br>
      Tahun Masuk : ${mahasiswaalumni['tahun_masuk']}<br>
      Tahun Keluar : ${mahasiswaalumni['tahun_keluar']}<br>
      Tempat Lahir : ${mahasiswaalumni['tempat_lahir']}<br>
      Tanggal Lahir : ${mahasiswaalumni['tanggal_lahir']}<br>
      Jenis Kelamin : ${mahasiswaalumni['tahun_masuk']}<br>
      Prodi : ${mahasiswaalumni['nama_prodi']}<br>
      SKS Saat Ini : ${mahasiswaalumni['sks_saat_ini']}<br>
      SKS Ditempuh : ${mahasiswaalumni['sks_ditempuh']}<br>
      IPK : ${mahasiswaalumni['ipk']}<br>
      Deskripsi : ${mahasiswaalumni['deskripsi']}<br>
     
      `;
        img = mahasiswaalumni['photo'] ? `<img src="<?= base_url('uploads/photo/') ?>${mahasiswaalumni['photo']}" width="190px" >` : '';
        renderData.push([mahasiswaalumni['nim'], mahasiswaalumni['nama'], tex, img, button]);
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
      MahasiswaAlumniModal.photo_frame.html('-');

    });

    FDataTable.on('click', '.edit', function() {
      MahasiswaAlumniModal.form.trigger('reset');
      MahasiswaAlumniModal.self.modal('show');
      MahasiswaAlumniModal.addBtn.hide();
      MahasiswaAlumniModal.saveEditBtn.show();
      var currentData = dataMahasiswaAlumni[$(this).data('id')];
      MahasiswaAlumniModal.idMahasiswaAlumni.val(currentData['id_mahasiswaalumni']);
      MahasiswaAlumniModal.deskripsi.val(currentData['deskripsi']);
      MahasiswaAlumniModal.tahun_masuk.val(currentData['tahun_masuk']);
      MahasiswaAlumniModal.tahun_keluar.val(currentData['tahun_keluar']);
      deskripsi
      MahasiswaAlumniModal.status.val(currentData['status']);
      MahasiswaAlumniModal.nama.val(currentData['nama']);
      currentData['photo'] ? MahasiswaAlumniModal.photo_frame.html(`<img src="<?= base_url('uploads/photo/') ?>${currentData['photo']}" width="190px" >`) : MahasiswaAlumniModal.photo_frame.html('-');
      // MahasiswaAlumniModal.opd.val(currentData['id_opd']);

      MahasiswaAlumniModal.jk.val(currentData['jk']);
      MahasiswaAlumniModal.tempat_lahir.val(currentData['tempat_lahir']);
      MahasiswaAlumniModal.tanggal_lahir.val(currentData['tanggal_lahir']);
      MahasiswaAlumniModal.prodi.val(currentData['id_prodi']);
      MahasiswaAlumniModal.sks_ditempuh.val(currentData['sks_ditempuh']);
      MahasiswaAlumniModal.sks_saat_ini.val(currentData['sks_saat_ini']);
      MahasiswaAlumniModal.nim.val(currentData['nim']);
    

      // 'jk': $('#mahasiswaalumni_modal').find('#jk'),
      // 'tempat_lahir': $('#mahasiswaalumni_modal').find('#tempat_lahir'),
      // 'tanggal_lahir': $('#mahasiswaalumni_modal').find('#tanggal_lahir'),
      // 'prodi': $('#mahasiswaalumni_modal').find('#prodi'),
      // 'sks_ditempuh': $('#mahasiswaalumni_modal').find('#sks_ditempuh'),
      // 'sks_saat_ini': $('#mahasiswaalumni_modal').find('#sks_saat_ini'),
      // 'nim': $('#mahasiswaalumni_modal').find('#nim'),

    });

      MahasiswaAlumniModal.form.submit(function(event) {
        event.preventDefault();
        var isAdd = MahasiswaAlumniModal.addBtn.is(':visible');
        var url = "<?= site_url('MahasiswaAlumniController/') ?>";
        url += isAdd ? "addMahasiswaAlumni" : "editMahasiswaAlumni";
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
              var mahasiswaalumni = json['data']
              dataMahasiswaAlumni[mahasiswaalumni['id_mahasiswaalumni']] = mahasiswaalumni;
              swal("Simpan Berhasil", "", "success");
              renderMahasiswaAlumni(dataMahasiswaAlumni);
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
          url: "<?= site_url('MahasiswaAlumniController/deleteMahasiswaAlumni') ?>",
          'type': 'POST',
          data: {
            'id_mahasiswaalumni': id
          },
          success: function(data) {
            var json = JSON.parse(data);
            if (json['error']) {
              swal("Delete Gagal", json['message'], "error");
              return;
            }
            delete dataMahasiswaAlumni[id];
            swal("Delete Berhasil", "", "success");
            renderMahasiswaAlumni(dataMahasiswaAlumni);
          },
          error: function(e) {}
        });
      });
    });
  });
</script>