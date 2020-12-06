<div class="wrapper wrapper-content animated fadeInRight" id="periodeContainer">
  <form opd="form" id="mahasiswaalumni_form" onsubmit="return false;" type="multipart" autocomplete="off">
    <input type="hidden" id="id_mahasiswaalumni" name="id_mahasiswaalumni">
    <div class="row">
      <div class="form-group col-lg-6">
        <label for="nama">Nama</label>
        <input type="text" placeholder="Nama" class="form-control" id="nama" disabled="disabled">
      </div>

      <div class="form-group col-lg-6">
        <label for="nim">NIM</label>
        <input type="text" placeholder="NIM" class="form-control" id="nim"  disabled="disabled">

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

    </div>
    <button class="btn btn-success my-1 mr-sm-2" type="submit" id="save_edit_btn" data-loading-text="Loading..."><strong>Simpan Perubahan</strong></button>
  </form>

</div>

<script>
  $(document).ready(function() {
    $('#dashboard').addClass('active');
    var swalSaveConfigure = {
      title: "Konfirmasi simpan",
      text: "Yakin akan menyimpan data ini?",
      type: "info",
      showCancelButton: true,
      confirmButtonColor: "#18a689",
      confirmButtonText: "Ya, Simpan!",
    };
    var MahasiswaAlumniModal = {
      // 'self': $('#mahasiswaalumni_modal'),
      // 'info': $('#mahasiswaalumni_modal').find('.info'),
      'form': $('#mahasiswaalumni_form'),
      'addBtn': $('#mahasiswaalumni_form').find('#add_btn'),
      'saveEditBtn': $('#mahasiswaalumni_form').find('#save_edit_btn'),
      'idMahasiswaAlumni': $('#mahasiswaalumni_form').find('#id_mahasiswaalumni'),
      'status': $('#mahasiswaalumni_form').find('#status'),
      'nama': $('#mahasiswaalumni_form').find('#nama'),
      'tahun_masuk': $('#mahasiswaalumni_form').find('#tahun_masuk'),
      'tahun_keluar': $('#mahasiswaalumni_form').find('#tahun_keluar'),
      'deskripsi': $('#mahasiswaalumni_form').find('#deskripsi'),

      'jk': $('#mahasiswaalumni_form').find('#jk'),
      'tempat_lahir': $('#mahasiswaalumni_form').find('#tempat_lahir'),
      'tanggal_lahir': $('#mahasiswaalumni_form').find('#tanggal_lahir'),
      'prodi': $('#mahasiswaalumni_form').find('#prodi'),
      'sks_ditempuh': $('#mahasiswaalumni_form').find('#sks_ditempuh'),
      'sks_saat_ini': $('#mahasiswaalumni_form').find('#sks_saat_ini'),
      'nim': $('#mahasiswaalumni_form').find('#nim'),
    }

    function getMahasiswaSelf() {
      swal({
        title: 'Loading mahasiswaalumni...',
        allowOutsideClick: false
      });
      swal.showLoading();
      return $.ajax({
        url: `<?php echo site_url('MahasiswaAlumniController/getMahasiswaSelf/') ?>`,
        'type': 'POST',
        data: {},
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
          getMahasiswaSelf();

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

    function renderMahasiswaAlumni(currentData) {
      console.log(currentData)
      MahasiswaAlumniModal.idMahasiswaAlumni.val(currentData['id_mahasiswaalumni']);
      MahasiswaAlumniModal.deskripsi.val(currentData['deskripsi']);
      MahasiswaAlumniModal.tahun_masuk.val(currentData['tahun_masuk']);
      MahasiswaAlumniModal.tahun_keluar.val(currentData['tahun_keluar']);
      deskripsi
      MahasiswaAlumniModal.status.val(currentData['status']);
      MahasiswaAlumniModal.nama.val(currentData['nama']);
      // currentData['photo'] ? MahasiswaAlumniModal.photo_frame.html(`<img src="<?= base_url('uploads/photo/') ?>${currentData['photo']}" width="190px" >`) : MahasiswaAlumniModal.photo_frame.html('-');
      // MahasiswaAlumniModal.opd.val(currentData['id_opd']);

      MahasiswaAlumniModal.jk.val(currentData['jk']);
      MahasiswaAlumniModal.tempat_lahir.val(currentData['tempat_lahir']);
      MahasiswaAlumniModal.tanggal_lahir.val(currentData['tanggal_lahir']);
      MahasiswaAlumniModal.prodi.val(currentData['id_prodi']);
      MahasiswaAlumniModal.sks_ditempuh.val(currentData['sks_ditempuh']);
      MahasiswaAlumniModal.sks_saat_ini.val(currentData['sks_saat_ini']);
      MahasiswaAlumniModal.nim.val(currentData['nim']);

    }

    MahasiswaAlumniModal.form.submit(function(event) {
      event.preventDefault();
      var isAdd = MahasiswaAlumniModal.addBtn.is(':visible');
      var url = "<?= site_url('MahasiswaAlumniController/editSelf') ?>";
      var button =  MahasiswaAlumniModal.saveEditBtn;

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
            // var mahasiswaalumni = json['data']
            // dataMahasiswaAlumni[mahasiswaalumni['id_mahasiswaalumni']] = mahasiswaalumni;
            swal("Simpan Berhasil", "", "success");
            getMahasiswaSelf();
          },
          error: function(e) {}
        });
      });
    });

  });
</script>