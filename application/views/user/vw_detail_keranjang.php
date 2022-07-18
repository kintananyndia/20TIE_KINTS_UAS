<section class="header_text sub">
    <br>
    <h4><span>Shopping Cart</span></h4>
</section>
<section class="main-content">
    <div class="row">
        <div class="span12">
            <h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <td>Tanggal</td>
                        <td>Picture</td>
                        <td>Merk</td>
                        <td>Jenis</td>
                        <td>Harga</td>
                        <td>Jumlah</td>
                        <td>Sub Total</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <form action="<?= base_url('User/pesanan'); ?>" method="POST" enctype="multipart/form-data">
                        <?php
                        function rupiah($angka)
                        {
                            $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                            return $hasil_rupiah;
                        }
                        $i = 1;
                        $total_bayar = 0;
                        $total_p = 0; ?>
                        <?php foreach ($keranjang as $us) :
                            $total_bayar += $us['total'];
                        ?>
                            <tr>
                                <td><?= $us['tanggal']; ?></td>
                                <td><img width="100" src="<?= base_url('assets_admin/img/music/') . $us['gambar']; ?>"></a></td>
                                <td><?= $us['merk']; ?></td>
                                <td><?= $us['jenis']; ?></td>
                                <td><?= $us['harga']; ?></td>
                                <td><?= $us['jumlah']; ?></td>
                                <td><?= $us['total']; ?></td>
                                <td><a href="<?= base_url('User/delkeranjang/') . $us['id']; ?>" class="btn btn-light">
                                        <img width="25" src="<?= base_url('assets_user/') ?>themes/images/trash.png" alt=""></a></td>
                            </tr>
                            <input type="hidden" name="music[]" value="<?= $us['id_music']; ?>">
                            <input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
                            <input type="hidden" name="harga" value="<?= $us['harga']; ?>">
                            <input type="hidden" name="jumlah_p[]" value="<?= $us['jumlah']; ?>">
                            <input type="hidden" name="total_p[]" value="<?= $us['total']; ?>">
                            <?php $i++; ?>
                        <?php endforeach; ?>
                        <tr>
                            <td>Alamat Pengiriman</td>
                            <td colspan="5"><input name="alamat" type="text" class="form-control" id="alamat"></td>
                        </tr>
                        <tr>
                            <td>Pembayaran</td>
                            <td colspan="5">
                                <select name="pembayaran" id="pembayaran" class="form-control">
                                    <option value="">Pilih Bank</option>
                                    <option value="BRI">BRI - 1111-11111-11111-1111</option>
                                    <option value="MANDIRI">MANDIRI - 2222-2222-2222</option>
                                    <option value="BNI">BNI - 3333-3333-3333</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Bukti Transfer</td>
                            <td colspan="5">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="gambar" id="gambar">

                                    <label for="gambar" class="custom-file-label">Choose File</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td colspan="5"><input name="keterangan" type="text" class="form-control" id="keterangan"></td>
                        </tr>
                        <tr>
                            <td colspan="4" align="right"><strong>Total : </strong></td>
                            <td><?= rupiah($total_bayar); ?></td>
                            <td>
                                <input type="hidden" name="no_penjualan" value="PJ<?= time() ?>" readonly class="form-control">

                                <input type="hidden" name="bayar" value="<?= $total_bayar; ?>">


                                <button class="btn" type="button">Cancel</button>
                                <button type="submit" class="btn btn-inverse"><i class="fa fa-save"></i>&nbsp;&nbsp;Pesan</button>

                            </td>
                        </tr>
                    </form>
                </tbody>
            </table>

            <hr />
            <!-- <p class="buttons center">
                <button class="btn" type="button">Update</button>
                <button class="btn" type="button">Continue</button>
                <button class="btn btn-inverse" type="submit" id="checkout">Checkout</button>
            </p> -->
        </div>
        <div class="span3 col">
            <!-- <div class="block">
                <ul class="nav nav-list">
                    <li class="nav-header">SUB CATEGORIES</li>
                    <li><a href="products.html">Nullam semper elementum</a></li>
                    <li class="active"><a href="products.html">Phasellus ultricies</a></li>
                    <li><a href="products.html">Donec laoreet dui</a></li>
                    <li><a href="products.html">Nullam semper elementum</a></li>
                    <li><a href="products.html">Phasellus ultricies</a></li>
                    <li><a href="products.html">Donec laoreet dui</a></li>
                </ul>
            </div> -->
            <!-- <div class="block">
                <h4 class="title">
                    <span class="pull-left"><span class="text">Randomize</span></span>
                    <span class="pull-right">
                        <a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
                    </span>
                </h4>
                <div id="myCarousel" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="active item">
                            <ul class="thumbnails listing-products">
                                <li class="span3">
                                    <div class="product-box">
                                        <span class="sale_tag"></span>
                                        <a href="product_detail.html"><img alt="" src="themes/images/ladies/2.jpg"></a><br />
                                        <a href="product_detail.html" class="title">Fusce id molestie massa</a><br />
                                        <a href="#" class="category">Suspendisse aliquet</a>
                                        <p class="price">$261</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="thumbnails listing-products">
                                <li class="span3">
                                    <div class="product-box">
                                        <a href="product_detail.html"><img alt="" src="themes/images/ladies/4.jpg"></a><br />
                                        <a href="product_detail.html" class="title">Tempor sem sodales</a><br />
                                        <a href="#" class="category">Urna nec lectus mollis</a>
                                        <p class="price">$134</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>