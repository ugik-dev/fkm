<?php $this->load->view('Fragment/HeaderFragment', ['title' => $title]); ?>
<div style="float: right; padding : 3px" class="alert alert-light">
  <a id='lang_in'> Indonesia</a> | <a id='lang_en'>English </a>
</div>
<div class="loginColumns animated fadeInDown">
  <div class="row">
    <div class="col-md-6">
      <span class="text-center">
        <h3><img class="col-xs-8 col-lg-8 logo" src="<?php echo base_url('assets/img/logo-unsri.png'); ?>"></h3>
        <h2 class="font-bold">
          FAKULTAS ILMU KESEHATAN MASYARAKAT
        </h2>
        <h1 class="font-bold">
          UNIVERSITAS SRIWIJAYA </h1>
      </span>

    </div>
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
          <a class="btn btn-default block full-width m-b" href="<?= site_url() ?>">
            <?php if (!empty($_COOKIE['lang_set']) && $_COOKIE['lang_set'] == 'en') {
              echo 'Home Page';
            } else {
              echo 'Halaman Utama';
            } ?></a>
        </form>
        <p class="m-t">
          <small></small>
        </p>
      </div>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-6">
      Fakultas Ilmu Kesehatan Masyarakat - Universitas Sriwijaya
    </div>
    <div class="col-md-6 text-right">
      <small>© 2020</small>
    </div>
  </div>
</div>
</div>
<style>
  .logo {
    flex: 0 0 50%;
    max-width: 50%;
  }
</style>
<script>
  $(document).ready(function() {

    var loginForm = $('#loginForm');
    var submitBtn = loginForm.find('#loginBtn');
    <?php if (!empty($activator)) {
      echo 'swal("Succes Activation", "", "success")';
    } ?>;

    loginForm.on('submit', (ev) => {
      ev.preventDefault();
      buttonLoading(submitBtn);
      $.ajax({
        url: "<?= site_url() . 'login-process' ?>",
        type: "POST",
        data: loginForm.serialize(),
        success: (data) => {
          buttonIdle(submitBtn);
          json = JSON.parse(data);
          if (json['error']) {
            swal("Login Gagal", json['message'], "error");
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
<style>
  body {
    background-color: #f3f3f4 !important;
  }
</style>
<?php $this->load->view('Fragment/FooterFragment'); ?>