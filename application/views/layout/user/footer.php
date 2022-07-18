<section class="our_client">
	<h4 class="title"><span class="text">Manufactures</span></h4>
	<div class="row">
		<div class="span2">
			<a href="#"><img alt="" src="<?= base_url('assets_user/') ?>themes/images/sponsor/1.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="<?= base_url('assets_user/') ?>themes/images/sponsor/2.png"></a>
		</div>
	</div>
</section>

<section id="footer-bar">
	<div class="row">
		<div class="span3">
			<h4>Navigation</h4>
			<ul class="nav">
				<li><a href="<?= base_url('assets_user/') ?>./index.html">Homepage</a></li>
				<li><a href="<?= base_url('assets_user/') ?>./about.html">About Us</a></li>
				<li><a href="<?= base_url('assets_user/') ?>./contact.html">Contac Us</a></li>
				<li><a href="<?= base_url('assets_user/') ?>./cart.html">Your Cart</a></li>
				<li><a href="<?= base_url('assets_user/') ?>./register.html">Login</a></li>
			</ul>
		</div>
		<div class="span4">
			<h4>Contact</h4>
			<ul class="nav">
				<li><a href="<?= base_url('assets_user/') ?>#">melodimusic@gmail.com</a></li>
				<li><a href="<?= base_url('assets_user/') ?>#">071-986-0</a></li>
				<li><a href="<?= base_url('assets_user/') ?>#">Jl.Durian</a></li>
			</ul>
		</div>
		<div class="span5">
			<p class="logo"><img src="<?= base_url('assets_user/') ?>themes/images/melodi.png" class="site_logo" alt=""></p>
			<p>Melody Music is a shop that sells various kinds of musical instruments. please choose the best!</p>
			<br />
			<span class="social_icons">
				<a class="facebook" href="<?= base_url('assets_user/') ?>#">Facebook</a>
				<a class="twitter" href="<?= base_url('assets_user/') ?>#">Twitter</a>
				<a class="skype" href="<?= base_url('assets_user/') ?>#">Skype</a>
				<a class="vimeo" href="<?= base_url('assets_user/') ?>#">Vimeo</a>
			</span>
		</div>
	</div>
</section>

<section id="copyright">
	<span>Copyright 2013 bootstrappage template All right reserved.</span>
</section>

</div>
<script src="<?= base_url('assets_user/') ?>themes/js/common.js"></script>
<script src="<?= base_url('assets_user/') ?>themes/js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
	$(function() {
		$(document).ready(function() {
			$('.flexslider').flexslider({
				animation: "fade",
				slideshowSpeed: 4000,
				animationSpeed: 600,
				controlNav: false,
				directionNav: true,
				controlsContainer: ".flex-container" // the container that holds the flexslider
			});
		});
	});
</script>

<script>
	$('.custom-file-input').on('change', function() {
		let fileName = $(this).val().split('\\').pop();

		$(this).next('.custom-file-label').addClass("selected").html(fileName);

	})
	$(document).ready(function() {
		$("#jumlah").on('keydown keyup change blur', function() {
			var harga = $("#harga").val();
			var jumlah = $("#jumlah").val();
			var total = parseInt(harga) * parseInt(jumlah);
			$("#total").val(total);
			if (parseInt($('input[name="stok"]').val()) <=

				parseInt(jumlah)) {

				alert('stok tidak tersedia! stok tersedia : ' +

					parseInt($('input[name="stok"]').val()))

				reset()
			}
		});

		function reset() {
			$('input[name="jumlah"]').val('')
			$('input[name="total"]').val('')
		}
	})
</script>

</body>

</html>