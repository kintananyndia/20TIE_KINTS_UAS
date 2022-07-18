<!-- Begin Page Content -->
<!-- <div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data Music
                </div> -->
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Form elements</h2>
                <p class="text-muted">Demo for form control styles, layout options, and custom components for creating a wide variety of forms.</p>
                <div class="card shadow mb-4">

                    <div class="card-header">
                        <strong class="card-title">Form controls</strong>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $music['id']; ?>">
                            <div class="form-group">
                                <label for="merk">Merk</label>
                                <input type="text" name="merk" value="<?= $music['merk']; ?>" class="form-control" id="merk" placeholder="Nama">
                                <?= form_error('merk', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="jenis">Jenis</label>
                                <select name="jenis" id="jenis" class="form-control">
                                    <option value="Guitar" <?php if ($music['jenis'] == "Guitar") {
                                                                echo "selected";
                                                            } ?>>Guitar</option>
                                    <option value="Drum" <?php if ($music['jenis'] == "Drum") {
                                                                echo "selected";
                                                            } ?>>Drum</option>
                                    <option value="Piano" <?php if ($music['jenis'] == "Piano") {
                                                                echo "selected";
                                                            } ?>>Piano</option>
                                    <option value="Violin" <?php if ($music['jenis'] == "Violin") {
                                                                echo "selected";
                                                            } ?>>Violin</option>
                                    <option value="Saxophone" <?php if ($music['jenis'] == "Saxophone") {
                                                                    echo "selected";
                                                                } ?>>Saxophone</option>
                                    <option value="Harp" <?php if ($music['jenis'] == "Harp") {
                                                                echo "selected";
                                                            } ?>>Harp</option>
                                </select>
                                <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input type="text" name="stok" value="<?= $music['stok']; ?>" class="form-control" id="stok" placeholder="Stok">
                                <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" name="harga" value="<?= $music['harga']; ?>" class="form-control" id="harga" placeholder="Harga">
                                <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <img src="<?= base_url('assets_admin/img/music/') . $music['gambar']; ?>" style="width : 100px;" class="img-thumbnail">
                                <label for="gambar">Gambar</label>
                                <div class="custom-file">
                                    <input type="file" name="gambar" class="custom-file-input" id="gambar">
                                    <label for="gambar" class="custom-file-label">Choose File</label>
                                    <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <a href="<?= base_url('Music') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Update
                                Music</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>