<section class="header_text sub">
    <br>
    <h4><span>Product Detail</span></h4>
</section>
<section class="main-content">
    <div class="row">
        <div class="span4 col">
            <div class="span11 block">
                <div class="row">
                    <div class="span5">
                        <a class="thumbnail" data-fancybox-group="group1" title="Description 1">
                            <img alt="" src="<?= base_url('assets_admin/img/music/') . $music['gambar']; ?>"></a>
                    </div>
                    <div class="col mr-2">
                        <div class="card-body">
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?= $music['id']; ?>">
                                <input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
                                <input type="hidden" name="stok" value="<?= $music['stok'] ?>">
                                <br />
                                <div class="form-group">
                                    <label for="merk"><strong>Merk</strong></label>
                                    <input name="merk" type="text" value="<?= $music['merk']; ?>" readonly class="form-control" id="merk">
                                </div>
                                <div class="form-group">
                                    <label for="stok">Stok</label>
                                    <input name="stok" value="<?= $music['stok']; ?>" type="text" readonly class="form-control" id="pengarang">
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>

                                    <input name="harga" value="<?= $music['harga']; ?>" type="text" readonly class="form-control" id="harga">

                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah</label>
                                    <input type="number" name="jumlah" id="jumlah" class="form-control" min='1'>
                                    <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="total">Total Harga</label>
                                    <input type="text" name="total" id="total" readonly class="form-control">
                                </div>
                                <button type="submit" id="tambah" name="tambah" class="btn btn-primary float-right">Add to Chart</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="span11">
                        <!-- <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#home">Description</a></li>
                            <li class=""><a href="#profile">Additional Information</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="home">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem</div>
                            <div class="tab-pane" id="profile">
                                <table class="table table-striped shop_attributes">
                                    <tbody>
                                        <tr class="">
                                            <th>Size</th>
                                            <td>Large, Medium, Small, X-Large</td>
                                        </tr>
                                        <tr class="alt">
                                            <th>Colour</th>
                                            <td>Orange, Yellow</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> -->
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