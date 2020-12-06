<body class="page-template-default page page-id-31 page-child parent-pageid-27 wp-custom-logo">
  <section style="height: 30px;" id="page-header" class="page-header parallax-window section-row hidden-sm hidden-xs" data-parallax="scroll" data-image-src="https://ub.ac.id/wp-content/uploads/2017/09/bg-default.jpg">
    <div class="container">
      <div class="page-header-title">
        <?php if ($_COOKIE['lang_set'] == 'in') { ?>
          <h1 class="entry-title"><a href="<?= base_url() ?>" title="Pencarian">Login</a></h1>
        <?php } else { ?>
          <h1 class="entry-title"><a href="<?= base_url() ?>" title="Search">Login</a></h1>
        <?php }; ?>

  </section>
  <section class="page-row article-row bg-white">
    <div class="container">
      <div class="col-md-6">
        <div class="ibox-content">
          <form id="loginForm" class="m-t" role="form">
            <!-- <h3>Masuk</h3> -->
            <div class="form-group">
              <input type="text" class="form-control" name="username" placeholder="Username" required="required" autocomplete="username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password" required="required" autocomplete="current-password">
            </div>
            <button type="submit" id="loginBtn" class="btn btn-primary block full-width m-b" data-loading-text="Loging In..."> <?php if (!empty($_COOKIE['lang_set']) && $_COOKIE['lang_set'] == 'en') {
                                                                                                                                  echo 'Login';
                                                                                                                                } else {
                                                                                                                                  echo 'Masuk';
                                                                                                                                } ?></button>

        </div>
      </div>


      </form>
      <p class="m-t">
        <small></small>
      </p>
    </div>
    </div>
    </div>
  </section>
  <style>
    .page-header {
      height: 100px !important;
      padding-top: 15.76px !important;
    }
  </style>
  <div class="modal fade" id="error_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login Gagal !!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Password atau Username salah !!..
        </div>
      </div>
    </div>
  </div>
</body>
<script>
  $(document).ready(function() {

    var loginForm = $('#loginForm');
    var submitBtn = loginForm.find('#loginBtn');
    <?php if (!empty($activator)) {
      echo 'swal("Succes Activation", "", "success")';
    } ?>;

    loginForm.on('submit', (ev) => {
      ev.preventDefault();
      // buttonLoading(submitBtn);
      $.ajax({
        url: "<?= site_url() . 'login-process' ?>",
        type: "POST",
        data: loginForm.serialize(),
        success: (data) => {
          // buttonIdle(submitBtn);
          json = JSON.parse(data);
          if (json['error']) {
            $('#error_login').modal('show');
            // swal("Login Gagal", json['message'], "error");
            return;
          }
          $(location).attr('href', '<?= site_url() ?>' + json['user']['nama_controller']);
        },
        error: () => {
          buttonIdle(submitBtn);
        }
      });
    });

    var lang_in = $('#lang_in');
    var lang_en = $('#lang_en');
    lang_in.on('click', (ev) => {
      document.cookie = "lang_set=in";
      location.reload();
    });
    lang_en.on('click', (ev) => {
      document.cookie = "lang_set=en";
      location.reload();
    });


  });
</script>