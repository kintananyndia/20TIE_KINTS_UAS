<!-- Begin Page Content -->
<!-- <div class="container-fluid">
    <?= $this->session->flashdata('message') ?>
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        </div>
        <div class="float-right">
            <a href="<?= base_url() ?>Music/tambah" class="btn btn-info mb-2">Tambah
                Music</a>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="table_id" width="100%" cellspacing="0"> -->
<main role="main" class="main-content">
    <div class="container-fluid">
        <?= $this->session->flashdata('message') ?>
        <div class="clearfix">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-2 page-title">Data table</h2>
                    <a href="<?= base_url() ?>Music/tambah" class="btn btn-warning ">Tambah
                        Music</a>
                    <div class="row my-4">
                        <!-- Small table -->
                        <div class="col-md-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <!-- table -->
                                    <table class="table datatables" id="dataTable-1">
                                        <thead>
                                            <tr>
                                                <td>No</td>
                                                <td>Gambar</td>
                                                <td>Merk</td>
                                                <td>Jenis</td>
                                                <td>Stok</td>
                                                <td>Harga</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($music as $us) : ?>
                                                <tr>
                                                    <td><?= $i; ?>.</td>
                                                    <td><img src="<?= base_url('assets_admin/img/music/') . $us['gambar']; ?>" style="width : 100px;" class="img-thumbnail"></td>
                                                    <td><?= $us['merk']; ?></td>
                                                    <td><?= $us['jenis']; ?></td>
                                                    <td><?= $us['stok']; ?></td>
                                                    <td><?= $us['harga']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('Music/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                                                        <a href="<?= base_url('Music/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- simple table -->
                    </div> <!-- end section -->
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
</main>