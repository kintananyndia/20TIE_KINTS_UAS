<!-- Begin Page Content -->
<!-- <div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Music
                </div> -->
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Form Tambah Alat Music</h2>
                <p class="text-muted"></p>
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">Form Tambah</strong>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="jenis">Merk</label>
                                <input type="text" name="merk" class="form-control" id="merk" placeholder="Merk Music">
                                <?= form_error('merk', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="jenis">Jenis</label>
                                <select name="jenis" value="<?= set_value('jenis') ?>" id="jenis" class="form-control">
                                    <option value="">Jenis</option>
                                    <option value="Guitar">Guitar</option>
                                    <option value="Drum">Drum</option>
                                    <option value="Piano">Piano</option>
                                    <option value="Violin">Violin</option>
                                    <option value="Saxophone">Saxophone</option>
                                    <option value="Harp">Harp</option>
                                </select>
                                <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input type="number" name="stok" class="form-control" id="stok" placeholder="Stok">
                                <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga (Rp.)</label>
                                <input type="number" name="harga" class="form-control" id="harga" placeholder="Harga">
                                <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <div class="custom-file">
                                    <input type="file" name="gambar" class="custom-file-input" id="gambar">
                                    <label for="gambar" class="custom-file-label">Choose File</label>
                                </div>
                            </div>

                            <!-- <a href="<?= base_url('Music') ?>" class="btn btn-danger">Tutup</a> -->
                            <button type="submit" name="tambah" class="btn btn-warning float-left">Tambah Music</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>