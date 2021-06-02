<!doctype html>
<html class="no-js"  lang="en">

	<head>
		<!-- META DATA -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<!-- TITLE OF SITE -->
		<title>@yield('title','Home')</title>

		<!-- favicon img -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/icon.jpeg"/>

		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--animate.css-->
		<link rel="stylesheet" href="assets/css/animate.css" />

		<!--hover.css-->
		<link rel="stylesheet" href="assets/css/hover-min.css">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="assets/css/datepicker.css" >

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css"/>

		<!-- range css-->
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css"/>

		<!--style.css-->
		<link rel="stylesheet" href="assets/css/style.css" />

		<!--responsive.css-->
		<link rel="stylesheet" href="assets/css/responsive.css" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>
        @include('layouts_user.navbar')
		<!--packages start-->
		<section id="pack" class="packages">
			<div class="container">
				<div class="gallary-header text-center">
					<h2>
						paket wisata
					</h2>
					<h2>
						Open Trip
					</h2>
				</div><!--/.gallery-header-->
				<div class="packages-content">
					<div class="row">
						@foreach ($produk as $p)
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="{{asset('product/'.$p->gbr1)}}" alt="package-place">
								<div class="single-package-item-txt">
									<h3>{{$p->nama_produk}} <span class="pull-right">Rp {{$p->harga}}</span></h3>
									<div class="packages-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> {{$p->itenerary}}
											</span>
											<i class="fa fa-angle-right"></i>  {{$p->type}}
										</p>
										<p>
											<span>
												<i class="fa fa-angle-right"></i>  {{$p->fasilitas}}
											</span>
											<i class="fa fa-angle-right"></i>  {{$p->deskripsi}}
										 </p>
									</div><!--/.packages-para-->
									<div class="packages-review">
										<p>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<span>234 penilaian</span>
										</p>
									</div><!--/.packages-review-->
									<div class="about-btn">
										<button  class="about-view packages-btn">
											pesan
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						@endforeach

					</div><!--/.row-->
				</div><!--/.packages-content-->
			</div><!--/.container-->

		</section><!--/.packages-->
		<!--packages end-->        
        @include('layouts_user.footer')

		<script src="assets/js/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->

		<!--modernizr.min.js-->
		<script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


		<!--bootstrap.min.js-->
		<script  src="assets/js/bootstrap.min.js"></script>

		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

		<!-- jquery.filterizr.min.js -->
		<script src="assets/js/jquery.filterizr.min.js"></script>

		<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!--jquery-ui.min.js-->
        <script src="assets/js/jquery-ui.min.js"></script>

        <!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>

		<!--owl.carousel.js-->
        <script  src="assets/js/owl.carousel.min.js"></script>

        <!-- jquery.sticky.js -->
		<script src="assets/js/jquery.sticky.js"></script>

        <!--datepicker.js-->
        <script  src="assets/js/datepicker.js"></script>

		<!--Custom JS-->
		<script src="assets/js/custom.js"></script>
    </body>
</html>