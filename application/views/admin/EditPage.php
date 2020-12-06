<div class="container">
  <div class="col-md-8 col-md-offset-2" id="editor_modal">
    <!-- <form opd="form" onsubmit="return false;" type="multipart" id="editor_form"  autocomplete="off"> -->
    <form opd="form" id="editor_form" onsubmit="return false;" type="multipart" method="POST" autocomplete="off">
      <input type="text" name="berita_judul" id="berita_judul" class="form-control" placeholder="Judul Berita Indonesia" required /><br />
      <input type="text" name="berita_judul_en" id="berita_judul_en" class="form-control" placeholder="Judul berita Inggris" required /><br />

      <input type="hidden" name="id_menu" class="form-control" placeholder="" id="id_menu" /><br />
      <textarea id="ckeditor" name="berita_isi" class="form-control" required><?php if (!empty($dataContent['berita_isi'])) {
                                                                                echo $dataContent['berita_isi'];
                                                                              } else {
                                                                                echo '';
                                                                              } ?></textarea><br />

      <textarea id="ckeditor_en" name="berita_isi_en" class="form-control" required><?php if (!empty($dataContent['berita_isi_en'])) {
                                                                                echo $dataContent['berita_isi_en'];
                                                                              } else {
                                                                                echo '';
                                                                              } ?></textarea><br />


    
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

    $('#menu_post').addClass('active');
    CKEDITOR.replace('ckeditor', {
      filebrowserImageBrowseUrl: '<?php echo base_url('assets/kcfinder/browse.php'); ?>',
      height: '400px',
      
    });

    CKEDITOR.replace('ckeditor_en', {
      filebrowserImageBrowseUrl: '<?php echo base_url('assets/kcfinder/browse.php'); ?>',
      height: '400px'
    });
    id_menu = <?php if (!empty($id_menu)) {
                  echo 'true';
                } else {
                  echo 'false';
                } ?>;
    console.log(id_menu);
    var EditorModal = {
      'self': $('#editor_modal'),
      'form': $('#editor_modal').find('#editor_form'),
      'addBtn': $('#editor_modal').find('#add_btn'),
      'saveEditBtn': $('#editor_modal').find('#save_edit_btn'),
      'berita_judul': $('#editor_modal').find('#berita_judul'),
      'berita_judul_en': $('#editor_modal').find('#berita_judul_en'),
       'id_menu': $('#editor_modal').find('#id_menu'),
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
      EditorModal.id_menu.val('<?= $dataContent['id_menu'] ?>');
      EditorModal.berita_judul.val('<?= $dataContent['berita_judul'] ?>')
      EditorModal.berita_judul_en.val('<?= $dataContent['berita_judul_en'] ?>')
      EditorModal.saveEditBtn.show();
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
  
      var url = "<?= site_url('MenuController/save_edit_post') ?>";
     var button = EditorModal.saveEditBtn;

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