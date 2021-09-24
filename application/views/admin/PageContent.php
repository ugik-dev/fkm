<div class="wrapper wrapper-content animated fadeInRight">
  <!-- <div class="ibox ssection-container"> -->
  <div class="ibox-content">
    <form class="form-inline" id="toolbar_form" onsubmit="return false;">
      <input type="hidden" id="is_not_self" name="is_not_self" value="1">
      <a type="button" class="btn btn-success my-1 mr-sm-2" id="new_btn" href="<?php echo base_url() . 'AdminController/new_menu'; ?>"><i class="fal fa-plus"></i> Tambah Berita Baru</a>
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
                <th style="width: 50%; text-align:center!important">Menu</th>
                <th style="width: 24%; text-align:center!important">Slug</th>
                <!-- <th style="width: 24%; text-align:center!important">Kategori</th> -->
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
    $('#page_content').addClass('active');
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
        url: `<?php echo site_url('MenuController/getAll/') ?>`,
        'type': 'GET',
        data: {
          simpel: true
        },
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


    function renderTabelBerita(data) {
      if (data == null || typeof data != "object") {
        console.log("User::UNKNOWN DATA");
        return;
      }
      var i = 0;

      var renderData = [];
      Object.values(data).forEach((b) => {
        var lihatBtn = `<a type="button" class="btn btn-primary my-1 mr-sm-3" href="<?php echo base_url() . 'MenuController/edit_post?id='; ?>${b['id_menu']}"><i class="fal fa-pencil"></i>  Edit Page </a>
        `;
        var editButton = `
        <a class="dropdown-item" data-id='${b['id_menu']}' href="<?php echo base_url() . 'MenuController/edit_post?id='; ?>${b['id_menu']}"><i class='fa fa-pencil'></i> Edit User</a>
      `;
        var deleteButton = `
        <a class="delete btn btn-danger my-1 mr-sm-3 active" data-id='${b['id_menu']}'><i class='fa fa-trash'></i> Hapus </a>
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
        renderData.push([b['berita_judul'], b['slug'], lihatBtn + (b['deleteable'] == '1' ? deleteButton : '')]);
      });
      FDataTable.clear().rows.add(renderData).draw('full-hold');
    }

    //  <a type="button" class="edit btn btn-success my-1 mr-sm-3"  href="<?php echo base_url() . 'index.php/NewsController/edit_post?id_news='; ?>${news['id_menu']}"><i class="fal fa-pencil"></i>  Edit </a>


    FDataTable.on('click', '.delete', function() {

      event.preventDefault();
      var id = $(this).data('id');
      swal(swalDeleteConfigure).then((result) => {
        // console.log('delete'+ id);
        if (!result.value) {
          return;
        }
        $.ajax({
          url: "<?= site_url('MenuController/delete') ?>",
          'type': 'POST',
          data: {
            'id_menu': id
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