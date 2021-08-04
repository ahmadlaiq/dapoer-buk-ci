@extends('user.layouts.master')

@section('content')
<!-- Start Content Page -->
<div class="container-fluid bg-light py-5">
	<div class="col-md-6 m-auto text-center">
		<h3 class="h2">Kontak kami</h3>
		<p>
			Silahkan mengirimkan pesan kepada kami apabila ada pertanyaan, kritik, dan saran. Atau anda bisa mengunjungi
			kami pada lokasi yang tertera.
		</p>
	</div>
</div>

<section class="contact-area section--padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="form-box">
					<div class="form-title-wrap">
						<h3 class="title">Dengan Senang Kami Mendengarkan</h3>
						<p class="font-size-15">Silahkan mengirim pesan dan kami akan meresponnya.</p>
					</div><!-- form-title-wrap -->
					<div class="form-content ">
						<div class="contact-form-action">
							<form class="row messenger-box-form" method="post" action="mailer.php">
								<div class="alert alert-success messenger-box-contact__msg col-lg-12" style="display: none" role="alert">
									Thank You! Your message has been sent.
								</div>
								<div class="col-lg-6 responsive-column">
									<div class="input-box messenger-box-input-wrap">
										<label class="label-text" for="name">Nama</label>
										<div class="form-group">
											<span class="la la-user form-icon"></span>
											<input class="form-control" type="text" id="name" name="name" placeholder="Ketik nama" required="">
										</div>
									</div>
								</div><!-- end col-lg-6 -->
								<div class="col-lg-6 responsive-column">
									<div class="input-box messenger-box-input-wrap">
										<label class="label-text" for="email">Email</label>
										<div class="form-group">
											<span class="la la-envelope-o form-icon"></span>
											<input class="form-control" type="email" name="email" id="email" placeholder="Ketik alamat email" required="">
										</div>
									</div>
								</div><!-- end col-lg-6 -->
								<div class="col-lg-12">
									<div class="input-box messenger-box-input-wrap">
										<label class="label-text" for="message">Pesan</label>
										<div class="form-group">
											<span class="la la-pencil form-icon"></span>
											<textarea class="message-control form-control" name="message" id="message" placeholder="Ketik pesan" required=""></textarea>
										</div>
									</div>
								</div><!-- end col-lg-12 -->
								<div class="col-lg-12">
									<div class="btn-box messenger-box-input-wrap">
										<button name="submit" type="submit" class="theme-btn send-message-btn" id="send-message-btn">Kirim Pesan</button>
									</div>
								</div><!-- end col-lg-12 -->
							</form>
						</div><!-- end contact-form-action -->
					</div><!-- end form-content -->
				</div><!-- end form-box -->
			</div><!-- end col-lg-8 -->
			<div class="col-lg-4">
				<div class="form-box">
					<div class="form-title-wrap">
						<h3 class="title">Contact Us</h3>
					</div><!-- form-title-wrap -->
					<div class="form-content">
						<div class="address-book">
							<ul class="list-items contact-address">
								<li>
									<i class="la la-map-marker icon-element"></i>
									<h5 class="title font-size-16 pb-1">Address</h5>
									<p class="map__desc">
										Jalan Sumber Mulyo Desa Wedani, RT.6/RW.3, Wedani, Cerme, Gresik, Jatim 61171
									</p>
								</li>
								<li>
									<i class="la la-phone icon-element"></i>
									<h5 class="title font-size-16 pb-1">Phone</h5>
									
									<p class="map__desc">Mobile: 0812-3562-4746</p>
								</li>
								<li>
									<i class="la la-envelope-o icon-element"></i>
									<h5 class="title font-size-16 pb-1">Email</h5>
									<p class="map__desc">dapoerbuci@gmail.com</p>
									
								</li>
							</ul>
							<ul class="social-profile text-center">
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-tiktok"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
							</ul>
						</div>
					</div><!-- end form-content -->
				</div><!-- end form-box -->
			</div><!-- end col-lg-4 -->
		</div><!-- end row -->
	</div><!-- end container -->
</section>
@endsection