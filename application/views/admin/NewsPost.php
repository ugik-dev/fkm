<div class="wrapper wrapper-content animated fadeInRight">
  <!-- <div class="ibox ssection-container"> -->
  <div class="ibox-content">
    <form class="form-inline" id="toolbar_form" onsubmit="return false;">
      <input type="hidden" id="is_not_self" name="is_not_self" value="1">
      <a type="button" class="btn btn-success my-1 mr-sm-2" id="new_btn" href="<?php echo base_url() . 'AdminController/new_news_post'; ?>"><i class="fal fa-plus"></i> Tambah Berita Baru</a>
    </form>
  </div>
</div>

<div class="ibox-content">
  <div class="col-lg-12">
    <div class="ibox">
      <div class="ibox-content">
        <div class="table-responsive">
          <table id="FDataTable" class="table table-bordered table-hover" style="padding:0px">
            <thead>
              <tr>
                <th style="width: 7%; text-align:center!important">Judul</th>
                <th style="width: 24%; text-align:center!important">Tanggal</th>
                <th style="width: 24%; text-align:center!important">Kategori</th>
                <!-- <th style="width: 16%; text-align:center!important">Role</th> -->
                <th style="width: 5%; text-align:center!important">Action</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12" id="news-list"></div>
</div>
</div>
<script>
  $(document).ready(function() {
    $('#news_post').addClass('active');
    var news_list = $('#news-list');
    // var toolbar = {
    //   'form': $('#toolbar_form'),
    //   'id_role': $('#toolbar_form').find('#id_role'),
    //   'id_opd': $('#toolbar_form').find('#id_opd'),
    //   'newBtn': $('#new_btn'),
    // }

    var FDataTable = $('#FDataTable').DataTable({
      'columnDefs': [],
      deferRender: true,
      "order": [
        [0, "desc"]
      ]
    });

    var UserModal = {
      'self': $('#user_modal'),
      'info': $('#user_modal').find('.info'),
      'form': $('#user_modal').find('#user_form'),
      'addBtn': $('#user_modal').find('#add_btn'),
      'saveEditBtn': $('#user_modal').find('#save_edit_btn'),
      'idUser': $('#user_modal').find('#id_user'),
      'username': $('#user_modal').find('#username'),
      'nama': $('#user_modal').find('#nama'),
      'password': $('#user_modal').find('#password'),
      'id_role': $('#user_modal').find('#id_role'),
      'opd': $('#user_modal').find('#opd'),
    }

    var dataRole = {}

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

    $.when(getAllNews()).then((e) => {
      // toolbar.newBtn.prop('disabled', false);
    }).fail((e) => {
      console.log(e)
    });


    // toolbar.newBtn.on('click', (e) => {
    //   resetUserModal();
    //   UserModal.self.modal('show');
    //   UserModal.addBtn.show();
    //   UserModal.saveEditBtn.hide();
    //   UserModal.password.prop('placeholder', 'Password');
    //   UserModal.password.prop('required', true);
    // });


    function getAllNews() {
      swal({
        title: 'Loading news...',
        allowOutsideClick: false
      });
      swal.showLoading();
      return $.ajax({
        url: `<?php echo site_url('NewsController/getAll/') ?>`,
        'type': 'GET',
        data: {},
        success: function(data) {
          swal.close();
          var json = JSON.parse(data);
          if (json['error']) {
            return;
          }
          dataNews = json['data'];
          // renderNews(dataNews);
          renderTabelBerita(dataNews)
        },
        error: function(e) {}
      });
    }

    function renderNews(data) {
      if (data == null || typeof data != "object") {
        console.log("News::UNKNOWN DATA");
        return;
      }

      news_list.empty();
      Object.values(data).forEach((news) => {

        var panjang = news['berita_isi'];
        // var p = panjang.substring(0, 1200);
        var index_p = panjang.lastIndexOf("</p>", 1200);
        p = panjang.substring(0, index_p);

        news_list.append(`
      <div class="col-sm-12">
          <div class="ibox product-box" style="cursor:pointer" >
            <div class="ibox-title text-center">
              <h5>${news['berita_judul']}</h5>
            </div>
            <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-5 ibox-content  text-center">
              <div class="product-item" style="background-image:url('<?= base_url('assets/img/news/') ?>${news['berita_image']}')"></div>
            
              </div>
              <div class="col-sm-7 ibox-content">
                <p>${p}</p>
              </div>
              <div class="col-sm-12 ibox-content">
                
             
              <a type="button" class="delete btn btn-danger my-1 mr-sm-3" href='' data-id='${news['berita_id']}' ><i class="fal fa-trash"></i>  Hapus </a>
              <a type="button" class="btn btn-primary my-1 mr-sm-3" href="<?php echo base_url() . 'index.php/newsx?id_news='; ?>${news['berita_id']}"><i class="fal fa-eye"></i>  Lihat Post </a>
              Tanggal Post : ${news['berita_tanggal']}
              </div>
              </div>
            </div>
          </div>
        </div>
      `);
      });
    }

    function renderTabelBerita(data) {
      if (data == null || typeof data != "object") {
        console.log("User::UNKNOWN DATA");
        return;
      }
      var i = 0;

      var renderData = [];
      Object.values(data).forEach((b) => {
        var lihatBtn = `      <a type="button" class="btn btn-primary my-1 mr-sm-3" href="<?php echo base_url() . 'post/'; ?>${b['slug']}"><i class="fal fa-eye"></i>  Lihat Post </a>
        `;
        var editButton = `
        <a class="dropdown-item" data-id='${b['berita_id']}' href="<?php echo base_url() . 'NewsController/edit_post?id='; ?>${b['berita_id']}"><i class='fa fa-pencil'></i> Edit User</a>
      `;
        var deleteButton = `
        <a class="delete dropdown-item" data-id='${b['berita_id']}'><i class='fa fa-trash'></i> Hapus User</a>
      `;
        var button = `
        <div class="btn-group" opd="group">
          <button id="action" type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class='fa fa-bars'></i></button>
          <div class="dropdown-menu" aria-labelledby="action">
            ${lihatBtn}
            ${editButton}
            ${deleteButton}
          </div>
        </div>
      `;
        renderData.push([b['berita_judul'], b['berita_tanggal'], (b['topik_utama'] == '2' ? 'Topik Utama :: ' : '') + b['nama_jenis_berita'], button]);
      });
      FDataTable.clear().rows.add(renderData).draw('full-hold');
    }

    //  <a type="button" class="edit btn btn-success my-1 mr-sm-3"  href="<?php echo base_url() . 'index.php/NewsController/edit_post?id_news='; ?>${news['berita_id']}"><i class="fal fa-pencil"></i>  Edit </a>


    FDataTable.on('click', '.delete', function() {

      event.preventDefault();
      var id = $(this).data('id');
      swal(swalDeleteConfigure).then((result) => {
        // console.log('delete'+ id);
        if (!result.value) {
          return;
        }
        $.ajax({
          url: "<?= site_url('NewsController/delete') ?>",
          'type': 'POST',
          data: {
            'berita_id': id
          },
          success: function(data) {
            var json = JSON.parse(data);
            if (json['error']) {
              swal("Delete Gagal", json['message'], "error");
              return;
            }
            // delete dataUser;
            swal("Delete Berhasil", "", "success");
            getAllNews();
          },
          error: function(e) {}
        });
      });
    });

  });
</script>