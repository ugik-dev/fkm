<div class="wrapper wrapper-content animated fadeInRight" id="periodeContainer">
    <form opd="form" id="mahasiswaalumni_form" onsubmit="return false;" type="multipart" autocomplete="off">
        <input type="hidden" id="id_mahasiswaalumni" name="id_mahasiswaalumni">
        <div class="form-group col-lg-4">
            <label for="tahun_skripsi">Tahun Skripsi</label>
            <input type="text" placeholder="" class="form-control" id="tahun_skripsi" name="tahun_skripsi">
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="dospem1">Dosen Pembimbing 1</label>
                <input type="text" placeholder="Dosen Pembimbing 1" class="form-control" id="dospem1" name="dospem1">
            </div>

            <div class="form-group col-lg-6">
                <label for="dospem2">Dosen Pembimbing 2</label>
                <input type="text" placeholder="Dosen Pembimbing 2" class="form-control" id="dospem2" name="dospem2">
            </div>

            <div class="form-group col-lg-6">
                <label for="judul_skripsi">Judul Skripsi Indonesia</label>
                <input type="text" placeholder="Judul Skripsi Indonesia" class="form-control" id="judul_skripsi" name="judul_skripsi">
            </div>

            <div class="form-group col-lg-6">
                <label for="judul_skripsi_en">Judul Skripsi Inggris</label>
                <input type="text" placeholder="Judul Skripsi Inggris" class="form-control" id="judul_skripsi_en" name="judul_skripsi_en">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-lg-6">
                <label for="abstrak">Abstrak Indonesia</label>
                <textarea id="abstrak" name="abstrak" class="form-control"></textarea>
            </div>

            <div class="form-group col-lg-6">
                <label for="abstrak_en">Abstrak Inggris</label>
                <textarea id="abstrak_en" name="abstrak_en" class="form-control"></textarea>
            </div>

        </div>

        <div class="row">
            <div class="form-group col-lg-6">

                <div class="form-group" id="skripsi_fm">
                    <label for="skripsi">File Skripsi Indonesia <span> (max: 10mb)</span></label>
                    <p class="no-margins"><span id="skripsi">-</span></p>
                </div>
            </div>
            <!-- <div id="photo_p_frame"></div> -->
            <div class="form-group col-lg-6">

                <div class="form-group" id="skripsi_en_fm">
                    <label for="skripsi_en">File Skirpsi Inggris <span> (max: 10mb)</span> </label>
                    <p class="no-margins"><span id="skripsi_en">-</span></p>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="form-group col-lg-6">

                <div id="skripsi_frame"></div>

            </div>
            <div class="form-group col-lg-6">

                <div id="skripsi_en_frame"></div>
            </div>

        </div>
        <div class="row">

        <div class="form-group col-lg-6">
            <label for="keyword">Keyword</label>
            <input type="text" placeholder="Keyword" class="form-control" id="keyword" name="keyword">
        </div>
        <div class="form-group col-lg-6">

            <div class="form-group" id="cover_fm">
                <label for="cover">Sampul / Cover <span> (max: 300kb)</span></label>
                <p class="no-margins"><span id="cover">-</span></p>
            </div>

            <div id="cover_frame"></div>
        </div>
        </div>
        <button class="btn btn-success my-1 mr-sm-2" type="submit" id="save_edit_btn" data-loading-text="Loading..."><strong>Simpan Perubahan</strong></button>
    </form>

</div>

<script>
    $(document).ready(function() {
        $('#data_skripsi').addClass('active');
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
            'dospem1': $('#mahasiswaalumni_form').find('#dospem1'),
            'dospem2': $('#mahasiswaalumni_form').find('#dospem2'),
            'judul_skripsi': $('#mahasiswaalumni_form').find('#judul_skripsi'),
            'judul_skripsi_en': $('#mahasiswaalumni_form').find('#judul_skripsi_en'),
            'abstrak': $('#mahasiswaalumni_form').find('#abstrak'),
            'abstrak_en': $('#mahasiswaalumni_form').find('#abstrak_en'),
            'tahun_skripsi': $('#mahasiswaalumni_form').find('#tahun_skripsi'),
            'keyword': $('#mahasiswaalumni_form').find('#keyword'),

            'skripsi_frame': $('#mahasiswaalumni_form').find('#skripsi_frame'),
            'skripsi': new FileUploader($('#mahasiswaalumni_form').find('#skripsi'), "", "skripsi", ".pdf", false, false),
            'skripsi_fm': $('#mahasiswaalumni_form').find('#skripsi_fm'),


            'skripsi_en_frame': $('#mahasiswaalumni_form').find('#skripsi_en_frame'),
            'skripsi_en': new FileUploader($('#mahasiswaalumni_form').find('#skripsi_en'), "", "skripsi_en", ".pdf", false, false),
            'skripsi_en_fm': $('#mahasiswaalumni_form').find('#skripsi_en_fm'),

            'cover_frame': $('#mahasiswaalumni_form').find('#cover_frame'),
            'cover': new FileUploader($('#mahasiswaalumni_form').find('#cover'), "", "cover", ".jpg , .jpeg , .png", false, false),
            'cover_fm': $('#mahasiswaalumni_form').find('#cover_fm'),


        }

        function getMahasiswaSelf() {
            swal({
                title: 'Loading mahasiswaalumni...',
                allowOutsideClick: false
            });
            swal.showLoading();
            return $.ajax({
                url: `<?php echo site_url('MahasiswaAlumniController/getMahasiswaSelfSkripsi/') ?>`,
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

        getMahasiswaSelf();



        function renderMahasiswaAlumni(currentData) {
            console.log(currentData)
            MahasiswaAlumniModal.dospem1.val(currentData['dospem1']);
            MahasiswaAlumniModal.dospem2.val(currentData['dospem2']);
            MahasiswaAlumniModal.judul_skripsi.val(currentData['judul_skripsi']);
            MahasiswaAlumniModal.judul_skripsi_en.val(currentData['judul_skripsi_en']);
            // deskripsi
            MahasiswaAlumniModal.keyword.val(currentData['keyword']);
            MahasiswaAlumniModal.tahun_skripsi.val(currentData['tahun_skripsi']);
            // currentData['photo'] ? MahasiswaAlumniModal.photo_frame.html(`<img src="<?= base_url('uploads/photo/') ?>${currentData['photo']}" width="190px" >`) : MahasiswaAlumniModal.photo_frame.html('-');
            // MahasiswaAlumniModal.opd.val(currentData['id_opd']);

            MahasiswaAlumniModal.abstrak.val(currentData['abstrak']);
            MahasiswaAlumniModal.abstrak_en.val(currentData['abstrak_en']);
            if (currentData['skripsi'] != '') {
                tx = `
                <embed type="application/pdf" src="<?= base_url('uploads/skripsi/') ?>${currentData['skripsi'] }" width="100%" height="400"></embed>
           `;
                // console.log(tx)
                MahasiswaAlumniModal.skripsi_frame.html(tx)
            }

            if (currentData['skripsi_en'] != '') {
                tx = `
                <embed type="application/pdf" src="<?= base_url('uploads/skripsi_en/') ?>${currentData['skripsi_en'] }" width="100%" height="400"></embed>
           `;
                // console.log(tx)
                MahasiswaAlumniModal.skripsi_en_frame.html(tx)
            }
            if (currentData['cover'] != '') {
                tx = `
                <img src="<?= base_url('uploads/cover/') ?>${currentData['cover'] }" alt="Girl in a jacket" width="500" height="600">
           `;
                // console.log(tx)
                MahasiswaAlumniModal.cover_frame.html(tx)
            }

            // MahasiswaAlumniModal.tanggal_lahir.val(currentData['tanggal_lahir']);
            // MahasiswaAlumniModal.prodi.val(currentData['id_prodi']);
            // MahasiswaAlumniModal.sks_ditempuh.val(currentData['sks_ditempuh']);
            // MahasiswaAlumniModal.sks_saat_ini.val(currentData['sks_saat_ini']);
            // MahasiswaAlumniModal.nim.val(currentData['nim']);

        }

        MahasiswaAlumniModal.form.submit(function(event) {
            event.preventDefault();
            // var isAdd = MahasiswaAlumniModal.addBtn.is(':visible');
            var url = "<?= site_url('MahasiswaAlumniController/editSelfSkripsi') ?>";
            var button = MahasiswaAlumniModal.saveEditBtn;

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