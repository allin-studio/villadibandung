<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css')}}">
	<link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css')}}">

	<link rel="stylesheet" href="{{ asset('csss/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('csss/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('csss/style.css') }}">

	<title>VILLA &mdash; BANDUNG </title>
	<style>
        #map {
            height: 400px;
            width: 100%;
        }
		.img-property-slide {
    		display: flex;
		}

		.img-property-slide td {
			flex: 1;
			padding: 10px;
		}

		.vila-image {
			width: 100%;
			height: auto;
			object-fit: cover;
		}
		.p {
			font-size: 10px;
		}

        .btn-spacing {
            display: inline-block;
            margin-right: 10px; /* Sesuaikan jarak sesuai kebutuhan */
        }

        .btn-spacing:last-child {
            margin-right: 0; /* Hilangkan margin pada tombol terakhir */
        }

        .btn {
            margin-right: 0px !important;
            padding: 10px 24px !important;
            display: inline-block !important;
        }

        .btn:last-child {
            margin-right: 0 !important;
        }
    </style>

</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<a href="25" class="logo m-0 float-start">VilladiBandung.com</a>

					<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
						<li class="active"><a href="{{ route('customers.index')}}">Kembali</a></li>

					<a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
						<span></span>
					</a>

				</div>
			</div>
		</div>
	</nav>

	<div class="hero page-inner overlay" style="background-image: url('{{ asset('images/hero_bg_001.jpg') }}');">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center mt-5">
					<h1 class="heading" data-aos="fade-up">Villa di Bandung</h1>

					<nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
						<ol class="breadcrumb text-center justify-content-center">
							<li class="breadcrumb-item "><a href="index.html">Home</a></li>
							<li class="breadcrumb-item "><a href="index.htm">Properties</a></li>
							<li class="breadcrumb-item active text-white-50" aria-current="page">{{ $vila->nama_vila }}</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<div class="section">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-7">
					<div class="img-property-slide-wrap">
						<div class="img-property-slide">
						@foreach ($vila->foto as $photo)
           				 <img src="{{ asset('storage/' . $photo) }}" alt="{{ $vila->nama_vila }}" class="vila-image">
       				 @endforeach
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<br>
					<h2 class="heading text-primary">{{ $vila->nama_vila }}, {{ $vila->lokasi }}</h2>
					<p class="meta">{{ $vila->alamat_lengkap }}</p>
					<script>
				var today = new Date();
				var dayOfWeek = today.getDay(); // Mendapatkan hari dalam bentuk angka (0 = Minggu, 1 = Senin, dst.)

				function isWeekend(day) {
					return day === 0 || day === 6; // Hari 0 (Minggu) dan 6 (Sabtu) adalah akhir pekan
				}
			</script
			@php
				$dayOfWeek = date('N'); // Mendapatkan hari dalam bentuk angka (1 = Senin, 2 = Selasa, dst.)
			@endphp

			<h3 class="heading text-primary">
				@if ($dayOfWeek >= 6) <!-- Jika akhir pekan -->
					Rp {{ number_format($vila->harga_weekend, 2, ',', '.') }}/Hari (Weekend)
				@else <!-- Jika hari biasa -->
					Rp {{ number_format($vila->harga, 2, ',', '.') }}/Hari (Weekday)
				@endif
			</h3>
			        <p class="text-black-50 fs-5"><span class="icon-bed me-2"></span>{{ $vila->jumlah_kasur }}</p>
					<p class="text-black-50 fs-5"><span class="icon-bath me-2"></span>{{ $vila->jumlah_kamar_mandi }} kamar mandi</p>
                    <p class="text-black-50 fs-5"><span class="icon-people me-2"></span>{{ $vila->kapasitas }}</p>
					<p class="text-black-50 fs-5">{{ $vila->deskripsi }}</p>
					<p class="text-black-50 fs-5">{{ $vila->fasilitas }}</p>
					<div id="map">

                        <div style="display: flex; justify-content: flex-start; gap: 15px;">
                            <a href="{{ route('createBookingForm', ['id' => $vila->id]) }}" class="btn btn-primary">Manual Booking</a>
                            <a href="#" id="online-booking-btn" data-id="{{ $vila->id }}" class="btn btn-primary">Online Booking</a>
                            {{--  <a href="{{ route('reservation.details', ['id' => $vila->id]) }}" class="btn btn-primary">Online Booking</a>  --}}
                        </div>


				</div>
			</div>
		</div>
	</div>


		<div class="site-footer">
		<div class="container">

			<div class="row">
				<div class="col-lg-4">
					<div class="widget">
						<h3>Contact</h3>
						<address>Jl. Permata Permai XII No. 44, <br> Cisaranten Kulon Arcamanik Bandung</address>
						<ul class="list-unstyled links">
							<li><a href="tel://11234567890">+62(022)-456-7890</a></li>
							<li><a href="tel://11234567890">+62 85462548526</a></li>
							<li><a href="mailto:info@mydomain.com">info@viladibandung.com</a></li>
						</ul>
					</div> <!-- /.widget -->
					</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<div class="widget">
						<h3>Produk</h3>
						<ul class="list-unstyled float-start links">
							<li><a href="#">Villa Dago</a></li>
							<li><a href="#">Villa Lembang</a></li>
							<li><a href="#">Bandung Raya</a></li>
							<li><a href="#"> </a></li>


						</ul>


					</div> <!-- /.widget -->


				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<div class="widget">
						<h3>Follow Kami</h3>
						<ul class="list-unstyled links">
							<ul class="list-unstyled links">
								<li><a href="https://www.tokopedia.com/villabandungamethys">Tokopedia</a></li>
								<li><a href="https://shopee.co.id/jiwaramadhan">Shopee</a></li>

								<li><a href="https://www.airbnb.co.id/users/show/186407489">airbnb</a></li>
							</ul>
						</ul>
						<ul class="list-unstyled social">
							<li><a href="https://www.facebook.com/amethystdago/"><span class="icon-facebook"></span></a></li>
							<li><a href="https://www.pinterest.com/adagoresort/"><span class="icon-pinterest"></span></a></li>
							<li><a href="https://www.instagram.com/amethyst_villas/"><span class="icon-instagram"></span></a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->


			<div class="row mt-5">
				<div class="col-12 text-center">
					<!--
              **==========
              NOTE:
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/
              **==========
            -->

            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>.  &mdash; by <a href=" ">Allin.studio</a> <!-- License information: https://untree.co/license/ -->
            </p>

          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.site-footer -->




    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
    	<div class="spinner-border" role="status">
    		<span class="visually-hidden">Loading...</span>
    	</div>
    </div>


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset('js/counter.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <script>
        // Definisikan objek urlMap
        var urlMap = {
            '70': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005616&amp%3blang=EN',
            '72': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005618&amp%3blang=EN',
            '83': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005619&amp%3blang=EN',
            '71': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005617&amp%3blang=EN',
            '91': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005620&amp%3blang=EN',
            '85': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005621&amp%3blang=EN',
            '80': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005701&amp%3blang=EN',
            '84': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005699&amp%3blang=EN',
            '98': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005703&amp%3blang=EN',
            '88': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005702&amp%3blang=EN',
            '86': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005700&amp%3blang=EN',
            '69': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005738&amp;lang=EN',
            '68': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005746&amp;lang=EN',
            '89': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005742&amp;lang=EN',
            '96': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005740&amp;lang=EN',
            '90': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005741&amp;lang=EN',
            '103': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005739&amp;lang=EN',
            '92': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005745&amp;lang=EN',
            '94': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005744&amp%3blang=EN',
            '97': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005736&amp;lang=EN',
            '82': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005735&amp;lang=EN',
            '87': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005737&amp%3blang=EN',
            '81': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005698&amp%3blang=EN'
        };

        // Tangani klik pada tombol Online Booking
        document.getElementById('online-booking-btn').addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah aksi default dari link
            var villaId = this.getAttribute('data-id'); // Ambil ID dari atribut data-id
            var url = urlMap[villaId]; // Dapatkan URL dari objek urlMap
            if (url) {
                window.location.href = url; // Arahkan ke URL yang sesuai
            } else {
                console.error('URL untuk ID villa ' + villaId + ' tidak ditemukan.');
            }
        });
    </script>

  </body>
  </html>
