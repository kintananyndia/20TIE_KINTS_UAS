<section class="homepage-slider" id="home-slider">
    <?= $this->session->flashdata('message'); ?>
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="<?= base_url('assets_user/') ?>themes/images/carousel/music1.jpg" alt="" />
            </li>
            <li>
                <img src="<?= base_url('assets_user/') ?>themes/images/carousel/music2.jpg" alt="" />
            </li>
            <li>
                <img src="<?= base_url('assets_user/') ?>themes/images/carousel/music3.jpg" alt="" />
                <div class="intro">
                    <h1>Enjoy your music sale</h1>
                    <p><span>Up to 50% Off</span></p>
                    <p><span>On selected items online and in stores</span></p>
                </div>
            </li>
            <li>
                <img src="<?= base_url('assets_user/') ?>themes/images/carousel/music4.jpg" alt="" />
            </li>
            <li>
                <img src="<?= base_url('assets_user/') ?>themes/images/carousel/music5.jpg" alt="" />
            </li>
        </ul>
    </div>
</section>


<section class="header_text">
    Melody Music is a shop that sells various kinds of musical instruments. please choose the best
</section>

<section class="main-content">
    <div class="row">
        <div class="span12">
            <div class="row">
                <div class="span12">
                    <h4 class="title">
                        <span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
                        <span class="pull-right">
                            <a class="left button" href="<?= base_url('assets_user/') ?>#myCarousel" data-slide="prev"></a><a class="right button" href="<?= base_url('assets_user/') ?>#myCarousel" data-slide="next"></a>
                        </span>
                    </h4>

                    <div id="myCarousel" class="myCarousel carousel slide">
                        <div class="carousel-inner">
                            <div class="active item">

                                <ul class="thumbnails">
                                    <?php $i = 1; ?>
                                    <?php foreach ($music as $us) : ?>
                                        <li class="span3">
                                            <div class="product-box">
                                                <span class="sale_tag"></span>

                                                <p>
                                                    <a href="<?= base_url('User/keranjang/') . $us['id'] ?>">
                                                        <img src="<?= base_url('assets_admin/img/music/') . $us['gambar']; ?>" alt="" /></a>
                                                </p>

                                                <a href="<?= base_url('User/keranjang/') . $us['id'] ?>" class="title"><?= $us['merk'] ?></a><br />
                                                <a href="<?= base_url('User/keranjang/') . $us['id'] ?>" class="title"><?= $us['jenis'] ?></a><br />
                                                <div>Stok <a class="badge badge-info"><?= $us['stok'] ?></a></div>

                                                <p class="price">Rp.<?= $us['harga'] ?></p>
                                                <!-- <a href="<?= base_url('User/keranjang/') . $us['id'] ?>" class="badge badge-warning badge-block">Beli</a> -->
                                            </div>
                                        </li>
                                    <?php endforeach ?>
                                </ul>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <br />
        </div>
</section>