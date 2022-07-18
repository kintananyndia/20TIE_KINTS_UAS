<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Sembako
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $sembako["nama"]; ?></h2>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $sembako["ruangan"]; ?></h6>
                    <div class="row">
                        <div class="col-md-4">Jurusan</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $sembako["jurusan"]; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Akreditasi</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $sembako["akreditasi"]; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Nama Kasembako</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $sembako["nama_sembako"]; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Tahun Berdiri</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $sembako["tahun_berdiri"]; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Output Lulusan</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $sembako["output_lulusan"]; ?></div>
                    </div>
                    <div class="card-footer justify-content-center">
                        <a href="<?= base_url('Sembako') ?>" class="btn btn-danger">Tutup</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>