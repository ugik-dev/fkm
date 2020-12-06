<div class="container">
  <div class="col-md-12 col-md-offset-2" id="editor_modal">
    <!-- <form opd="form" onsubmit="return false;" type="multipart" id="editor_form"  autocomplete="off"> -->
    <form opd="form" id="editor_form" onsubmit="return false;" type="multipart" method="POST" autocomplete="off">
      <input type="text" name="berita_judul" id="berita_judul" class="form-control" placeholder="Judul Berita Indonesia" required /><br />
      <input type="text" name="berita_judul_en" id="berita_judul_en" class="form-control" placeholder="Judul berita Inggris" required /><br />
      <input type="datetime-local" name="berita_tanggal" id="berita_tanggal" class="form-control" placeholder="Tanggal" required /><br />

    
      <input type="hidden" name="berita_id" class="form-control" placeholder="" id="berita_id" /><br />
      <select class="form-control mr-sm-2" name="topik_utama" id="topik_utama">
        <option value='1'>Bukan Berita Utama</option>
        <option value='2'>Berita Utama</option>
      </select>
      
      <select class="form-control mr-sm-2" name="jenis_berita" id="jenis_berita">
        <option value='1'>Berita Lainnya</option>
        <option value='2'>Pengumuman</option>
        <option value='3'>Kegiatan</option>
        <option value='4'>Prestasi</option>
        <option value='5'>Kalender Akademik</option>
        <option value='6'>Panduan</option>
        <option value='7'>Fasilitas</option>
        <option value='8'>Penelitian</option>
      </select>
      <br>
      <div class="form-group col-lg-12">
              <label for="des">Konten Indonesia</label>
              <textarea id="ckeditor" name="berita_isi" class="form-control" required><?php if (!empty($dataContent['berita_isi'])) {
                                                                                echo $dataContent['berita_isi'];
                                                                              } else {
                                                                                echo '';
                                                                              } ?></textarea><br />

            </div>

            <div class="form-group col-lg-12">
              <label for="des">Konten Inggris</label>
     
      <textarea id="ckeditor_en" name="berita_isi_en" class="form-control" required><?php if (!empty($dataContent['berita_isi_en'])) {
                                                                                echo $dataContent['berita_isi_en'];
                                                                              } else {
                                                                                echo '';
                                                                              } ?></textarea><br />

            </div>
      <div id="editor_berita"></div>
      <div class="form-group" id="berita_image_form">
        <label for="berita_image">Gambar Tumblr</label>
        <p class="no-margins"><span id="berita_image">-</span></p>
      </div>
      <div id="berita_image_frame"></div>

      <button class="btn btn-success my-1 mr-sm-2" type="submit" id="add_btn" data-loading-text="Loading..."><strong>Tambah Data</strong></button>
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

    $('#news_post').addClass('active');
    CKEDITOR.replace('ckeditor', {
      filebrowserImageBrowseUrl: '<?php echo base_url('assets/kcfinder/browse.php'); ?>',
      height: '400px'
    });

    CKEDITOR.replace('ckeditor_en', {
      filebrowserImageBrowseUrl: '<?php echo base_url('assets/kcfinder/browse.php'); ?>',
      height: '400px'
    });
    berita_id = <?php if (!empty($berita_id)) {
                  echo 'true';
                } else {
                  echo 'false';
                } ?>;
    console.log(berita_id);
    var EditorModal = {
      'self': $('#editor_modal'),
      'form': $('#editor_modal').find('#editor_form'),
      'addBtn': $('#editor_modal').find('#add_btn'),
      'saveEditBtn': $('#editor_modal').find('#save_edit_btn'),
      'berita_judul': $('#editor_modal').find('#berita_judul'),
      'berita_judul_en': $('#editor_modal').find('#berita_judul_en'),
      'topik_utama': $('#editor_modal').find('#topik_utama'),
      'jenis_berita': $('#editor_modal').find('#jenis_berita'),
      'berita_id': $('#editor_modal').find('#berita_id'),
          'berita_tanggal': $('#editor_modal').find('#berita_tanggal'),
      'berita_image': new FileUploader($('#editor_modal').find('#berita_image'), "", "berita_image", ".jpg , .jpeg , .png", false, false),
      'berita_image_form': $('#editor_modal').find('#berita_image_form'),
      'berita_image_frame': $('#editor_modal').find('#berita_image_frame'),
      'ckeditor': $('#editor_modal').find('#ckeditor'),
    }
    EditorModal.saveEditBtn.hide()

    var swalSaveConfigure = {
      title: "Konfirmasi simpan",
      text: "Yakin akan menyimpan data ini?",
      type: "info",
      showCancelButton: true,
      confirmButtonColor: "#18a689",
      confirmButtonText: "Ya, Simpan!",
    };

    <?php if (!empty($dataContent['berita_isi'])) { ?>
      EditorModal.berita_id.val('<?= $dataContent['berita_id'] ?>');
      EditorModal.berita_judul.val('<?= $dataContent['berita_judul'] ?>')
      EditorModal.berita_judul_en.val('<?= $dataContent['berita_judul_en'] ?>')
      EditorModal.topik_utama.val('<?= $dataContent['topik_utama'] ?>')
      EditorModal.jenis_berita.val('<?= $dataContent['jenis_berita'] ?>')
      EditorModal.berita_tanggal.val('<?= str_replace(' ','T',$dataContent['berita_tanggal']) ?>')
      EditorModal.addBtn.hide();
      EditorModal.saveEditBtn.show();
      EditorModal.berita_image_frame.html('<img alt="" src="<?= base_url('uploads/berita_image/') . $dataContent['berita_image'] ?>" style="height:auto; width:333px">')
    <?php        }  ?>


    // }

    function build_up() {
      CKEDITOR.replace('ckeditor', {
        filebrowserImageBrowseUrl: '<?php echo base_url('assets/kcfinder/browse.php'); ?>',
        height: '400px'
      });
    }
    // var ss = $('#ckeditor');
    // ss.val('asdasdsad')

    EditorModal.form.submit(function(event) {
      event.preventDefault();
      var isAdd = EditorModal.addBtn.is(':visible');
      var url = "<?= site_url('NewsController/') ?>";
      url += isAdd ? "simpan_post" : "save_edit_post";
      var button = isAdd ? EditorModal.addBtn : EditorModal.saveEditBtn;

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