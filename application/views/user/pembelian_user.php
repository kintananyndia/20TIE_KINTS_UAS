<br />
<br />
<section class="main-content">
    <div class="row">
        <div class="span4 col">
            <div class="span11 block">
                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
                    <div class="row">
                        <div class="col-md-12">
                            <?= $this->session->flashdata('message');
                            ?>
                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>No Pembelian</td>
                                        <td>Tanggal</td>
                                        <td>Total</td>
                                        <td>Status</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($pembelian as $us) : ?>
                                        <tr>
                                            <td> <?= $i; ?>.</td>
                                            <td><?= $us['no_penjualan']; ?></td>
                                            <td><?= $us['tanggal']; ?></td>
                                            <td><?= $us['total_bayar']; ?></td>
                                            <td><?= $us['status']; ?></td>
                                            <td>
                                                <a href="<?= base_url('User/statusbeli/') . $us['no_penjualan']; ?>" class="badge badge-warning">Detail</a>

                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

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
                <br />
                <ul class="nav nav-list below">
                    <li class="nav-header">MANUFACTURES</li>
                    <li><a href="products.html">Adidas</a></li>
                    <li><a href="products.html">Nike</a></li>
                    <li><a href="products.html">Dunlop</a></li>
                    <li><a href="products.html">Yamaha</a></li>
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
                                        <a href="product_detail.html"><img alt="" src="themes/images/ladies/7.jpg"></a><br />
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
                                        <a href="product_detail.html"><img alt="" src="themes/images/ladies/8.jpg"></a><br />
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
            <!-- <div class="block">
                <h4 class="title"><strong>Best</strong> Seller</h4>
                <ul class="small-product">
                    <li>
                        <a href="#" title="Praesent tempor sem sodales">
                            <img src="themes/images/ladies/1.jpg" alt="Praesent tempor sem sodales">
                        </a>
                        <a href="#">Praesent tempor sem</a>
                    </li>
                    <li>
                        <a href="#" title="Luctus quam ultrices rutrum">
                            <img src="themes/images/ladies/2.jpg" alt="Luctus quam ultrices rutrum">
                        </a>
                        <a href="#">Luctus quam ultrices rutrum</a>
                    </li>
                    <li>
                        <a href="#" title="Fusce id molestie massa">
                            <img src="themes/images/ladies/3.jpg" alt="Fusce id molestie massa">
                        </a>
                        <a href="#">Fusce id molestie massa</a>
                    </li>
                </ul>
            </div> -->
        </div>
    </div>
</section>