<div class="container">
  <div class="col-md-12 col-md-offset-2" id="editor_modal">
    <!-- <form opd="form" onsubmit="return false;" type="multipart" id="editor_form"  autocomplete="off"> -->
    <form opd="form" id="editor_form" onsubmit="return false;" type="multipart" method="POST" autocomplete="off">
      <br>
      <div class="form-group col-lg-12">
        <label for="des"></label>

        <select class="form-control mr-sm-2" name="act" id="act">
          <option value='1'>Tampilkan</option>
          <option value='2'>Tidak Tampilkan</option>
        </select>
      </div>

      <div class="form-group col-lg-12">
        <label for="des">Konten Indonesia</label>
        <textarea id="pengumuman" name="pengumuman" class="form-control" required><?php if (!empty($dataContent['berita_isi'])) {
                                                                                    echo $dataContent['berita_isi'];
                                                                                  } else {
                                                                                    echo '';
                                                                                  } ?></textarea><br />

      </div>

      <div class="form-group col-lg-12">
        <label for="des">Konten Inggris</label>

        <textarea id="pengumuman_en" name="pengumuman_en" class="form-control" required><?php if (!empty($dataContent['berita_isi_en'])) {
                                                                                          echo $dataContent['berita_isi_en'];
                                                                                        } else {
                                                                                          echo '';
                                                                                        } ?></textarea><br />

      </div>

      <button class="btn btn-success my-1 mr-sm-2" type="submit" id="save_edit_btn" data-loading-text="Loading..."><strong>Simpan Perubahan</strong></button>

    </form>
  </div>

</div>

<!-- <script src="<?php echo base_url() . 'assets/jquery/jquery-2.2.3.min.js' ?>"></script> -->
<!-- <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script> -->
<script src="<?php echo base_url() . 'assets/ckeditor/ckeditor.js' ?>"></script>
<!-- <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script> -->
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script> -->
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/balloon-block/ckeditor.js"></script> -->
<script type="text/javascript">
  $(function() {


    $('#papan_pengumuman').addClass('active');

    // CKEDITOR.replace('ckeditor_en', {
    //   filebrowserImageBrowseUrl: '<?php echo base_url('assets/kcfinder/browse.php'); ?>',
    //   height: '400px'
    // });
    berita_id = <?php if (!empty($berita_id)) {
                  echo 'true';
                } else {
                  echo 'false';
                } ?>;
    console.log(berita_id);
    var EditorModal = {
      'self': $('#editor_modal'),
      'form': $('#editor_modal').find('#editor_form'),
      'save_edit_pengumuman': $('#editor_modal').find('#save_edit_pengumuman'),
      'pengumuman': $('#editor_modal').find('#pengumuman'),
      'pengumuman_en': $('#editor_modal').find('#pengumuman_en'),
      'act' : $('#editor_modal').find('#act')
    }
    // EditorModal.saveEditBtn.hide()

    var swalSaveConfigure = {
      title: "Konfirmasi simpan",
      text: "Yakin akan menyimpan data ini?",
      type: "info",
      showCancelButton: true,
      confirmButtonColor: "#18a689",
      confirmButtonText: "Ya, Simpan!",
    };

    getPapanPengumuman();

    function getPapanPengumuman() {
      return $.ajax({
        url: `<?php echo site_url('NewsController/getPapanPengumuman/') ?>`,
        'type': 'GET',
        data: {},
        success: function(data) {
          swal.close();
          var json = JSON.parse(data);
          if (json['error']) {
            return;
          }
          p = json['data'];
          console.log(p['pengumuman'])
          EditorModal.pengumuman.val(p['pengumuman']);
          EditorModal.pengumuman_en.val(p['pengumuman_en']);
EditorModal.act.val(p['act']);
          CKEDITOR.replace('pengumuman', {
            filebrowserImageBrowseUrl: '<?php echo base_url('assets/kcfinder/browse.php'); ?>',
            height: '400px'
          });
          CKEDITOR.replace('pengumuman_en', {
            filebrowserImageBrowseUrl: '<?php echo base_url('assets/kcfinder/browse.php'); ?>',
            height: '400px'
          });
        },
        error: function(e) {}
      });
    }


    EditorModal.form.submit(function(event) {
      event.preventDefault();
      //   var isAdd = EditorModal.addBtn.is(':visible');
      var url = "<?= site_url('NewsController/save_edit_pengumuman') ?>";
      var button = EditorModal.save_edit_pengumuman;

      swal(swalSaveConfigure).then((result) => {
        if (!result.value) {
          return;
        }
        buttonLoading(button);
        $.ajax({
          url: url,
          'type': 'POST',
          data: new FormData(EditorModal.form[0]),
          contentType: false,
          processData: false,
          success: function(data) {
            buttonIdle(button);
            var json = JSON.parse(data);
            if (json['error']) {
              swal("Simpan Gagal", json['message'], "error");
              return;
            }
            var user = json['data']
            // dataUser[user['id_user']] = user;
            swal("Simpan Berhasil", "", "success");
            // renderUser(dataUser);
            // UserModal.self.modal('hide');
          },
          error: function(e) {}
        });
      });
    });
  });
</script>