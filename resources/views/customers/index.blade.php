<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>

    <title>Amethyst Villas Management</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link type="text/css" href="css/style.css" rel="Stylesheet" />
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/reservation.js') }}"></script>
        <script type="text/javascript">
            var _strHtlCCCode = "HCC2400197";
            var _strPath = "https://reservation.smartbooking-asia.com/";
            var _strBackurl = "https://reservation.smartbooking-asia.com/booking/index.aspx?htlcccode=" + _strHtlCCCode;
            var _intDefaultLOS = 2;
            var _intDefaultCi = 0;
            var _intDefaultRoom = 1;
            var _intDefaultAdult = 1;
            var _intDefaultChild = 0;
        </script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="csss/tiny-slider.css">
	<link rel="stylesheet" href="csss/aos.css">
	<link rel="stylesheet" href="csss/style.css">

	<title>VILLA &mdash; BANDUNG </title>
	<style>
		.review-image {
    width: 100%;
    height: auto;
    border-radius: 15px;
	}
	.green-box {
        background-color: #055555; /* Warna hijau */
        padding: 50px;
		width: 115%;
		margin-left: -15%;
		border-radius: 30px;
      	box-shadow: 0 8px 10px 10px rgba(0, 0, 0, 0.1);
    }

    .green-box p {
        color: white;
		font-size: 18px;
    }

	.grean-box {
        background-color: #055555; /* Warna hijau */
        padding: 50px;
		width: 115%;
		margin-left: 8%;
		border-radius: 30px;
      	box-shadow: 0 8px 10px 10px rgba(0, 0, 0, 0.1);
    }

    .grean-box p {
        color: white;
		font-size: 18px;
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
        border: none;
        cursor: pointer;
    }

	.left-align {
    text-align: left;
	}

    .pelican-reservation {
        max-width: 1200px;
        margin: 0 auto;
        padding: 50px;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        font-family: 'Helvetica Neue', Arial, sans-serif;
        display: flex; /* Menambahkan display flex */
        flex-direction: column; /* Menambahkan flex-direction column */
        align-items: center; /* Menambahkan align-items center */
    }

    .pelican-reservation .rsvlabel {
        font-weight: 600;
        margin-bottom: 8px;
        display: block;
        color: #333;
    }

    .pelican-reservation .pelican-multiproperty {
        display: flex;
        flex-direction: column;
        gap: 20px; /* Untuk memberi jarak antar elemen form */
        align-items: flex-end; /* Menyelaraskan semua elemen ke kanan */
        width: 100%; /* Menambahkan lebar 100% */
    }

    .pelican-reservation .destinations {
        width: 100%;
    }

    .pelican-reservation select,
    .pelican-reservation input[type="text"] {
        width: 100%;
        padding: 12px;
        margin-top: 5px;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-sizing: border-box;
        font-size: 16px;
        transition: border-color 0.3s ease, box-shadow 0.9s ease;
    }

    .pelican-reservation select:focus,
    .pelican-reservation input[type="text"]:focus {
        border-color: #055555;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .pelican-reservation .mpinput {
        display: flex;
        gap: 20px; /* Jarak antar field */
        align-items: center;
        flex-wrap: wrap; /* Agar field bisa membungkus pada layar kecil */
    }

    .pelican-reservation .rsvfield {
        flex: 1 1 calc(10% - 10px); /* Lebar setiap field */
        min-width: 150px; /* Lebar minimum untuk field */
        margin-bottom: 0;
        box-sizing: border-box; /* Agar margin dan padding diperhitungkan dalam lebar */
    }

    .pelican-reservation .btnaction {
        display: flex;
        gap: 5px;
        justify-content: center; /* Menyelaraskan tombol ke tengah */
        margin-top: 30px;
        width: 100%; /* Menambahkan lebar 100% */
    }

    .pelican-reservation .btnaction input[type="button"] {
        padding: 12px 25px;
        border: none;
        background-color: #055555;
        color: #fff;
        font-size: 18px;
        cursor: pointer;
        border-radius: 6px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .pelican-reservation .btnaction input[type="button"]:hover {
        background-color: #055555;
        transform: translateY(-2px);
    }

    .pelican-reservation .btnaction input[type="button"]:active {
        background-color: #055555;
        transform: translateY(0);
    }

    #villa {
        color: #055555;
    }

    .text-primary {
        color: #055555;
    }

    /* Responsif untuk layar yang lebih kecil */
    @media (max-width: 992px) {
        .pelican-reservation {
            padding: 30px;
        }

        .pelican-reservation .mpinput {
            flex-direction: column;
            align-items: center; /* Menyelaraskan elemen ke tengah */
        }

        .pelican-reservation .rsvfield {
            flex: 1 1 100%; /* Menyesuaikan lebar field */
            min-width: 0;
        }

        .pelican-reservation .btnaction {
            justify-content: center;
        }

        .pelican-reservation .btnaction input[type="button"] {
            width: 100%;
            text-align: center;
        }
    }

    @media (max-width: 768px) {
        .pelican-reservation {
            padding: 20px;
        }

        .pelican-reservation .rsvlabel {
            font-size: 14px;
        }

        .pelican-reservation select,
        .pelican-reservation input[type="text"] {
            font-size: 14px;
            padding: 10px;
        }

        .pelican-reservation .btnaction input[type="button"] {
            padding: 10px 20px;
            font-size: 16px;
        }
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
					<a href="https://villadibandung.com/" class="logo m-0 float-start">Villa di Bandung </a>

					<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
						<li class="has-children"><a href="#home" id="home">Home</a></li>
						<li class="has-children">
							<a href="#villa">Villa</a>
							<ul class="dropdown">
								<li class="has-children">
									<a href="#">Villa Lembang</a>
									<ul class="dropdown">
									@foreach($vilas as $vila)
                                    @if ($vila->lokasi === 'Lembang') <!-- Ganti 'Lembang' dengan lokasi yang ingin Anda filter -->
                                        <li>
                                            <a href="{{ route('customers.vilas.show', $vila->id) }}">{{ $vila->nama_vila }}</a>
                                        </li>
                                    @endif
                                @endforeach
							</ul>
								</li>
                                    <li class="has-children">
                                                        <a href="#">Villa Dago</a>
                                                        <ul class="dropdown">
                                                        @foreach($vilas as $vila)
                                    @if ($vila->lokasi === 'Dago') <!-- Ganti 'Lembang' dengan lokasi yang ingin Anda filter -->
                                        <li>
                                            <a href="{{ route('customers.vilas.show', $vila->id) }}">{{ $vila->nama_vila }}</a>
                                        </li>
                                    @endif
                                @endforeach
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="{{ url('/new-peraturan') }}">Peraturan Villa</a></li>
						<li><a href="#contact">Contact Us</a></li>
                        <li>
                            <a href="https://reservation.smartbooking-asia.com/Booking/Index.aspx?htlcccode=HCC2400197&lang=en">
                                Book Now
                            </a>
                        </li>

					</ul>

					<a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
						<span></span>
					</a>

				</div>
			</div>
		</div>
	</nav>


	<div class="hero">


		<div class="hero-slide">
			<div class="img overlay" style="background-image: url('images/hero_bg_001.jpg')"></div>
			<div class="img overlay" style="background-image: url('images/hero_bg_002.jpg')"></div>
			<div class="img overlay" style="background-image: url('images/hero_bg_003.jpg')"></div>
		</div>

		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center">
					<h1 class="heading" data-aos="fade-up">Temukan tempat menginap Villa di Bandung</h1>
					<form action="#" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
						<input type="text" class="form-control px-4" placeholder="   villadibandung.com">
						<button type="submit" class="btn btn-primary">Search</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<br>
<br>
<div class="pelican-reservation">
    <form method="post" id="form1" action="">
        <input type="hidden" id="hdnCO0001" value="CI00002|~|Bandung"/>
        <input type="hidden" id="hdnHotelData" value="CO0001_CI00002*|HT24005616|~|Amethyst M08 Dago|#|CO0001_CI00002*|HT24005617|~|Amethyst M09 Dago|#|CO0001_CI00002|*|HT24005618|~|Amethyst M26 Dago|#|CO0001_CI00002|*|HT24005619|~|Amethyst M18 Dago|#|CO0001_CI00002|*|HT24005620|~|Amethyst KB05 Lembang|#|CO0001_CI00002|*|HT24005621|~|Amethyst M57 Dago|#|CO0001_CI00002|*|HT24005698|~|Amethyst P12A Dago|#|CO0001_CI00002|*|HT24005699|~|Amethyst M-59 Dago|#|CO0001_CI00002|*|HT24005700|~|Amethyst PG28 Dago|#|CO0001_CI00002|*|HT24005701|~|Amethyst M92 Dago|#|CO0001_CI00002|*|HT24005702|~|Amethyst PR31 Dago|#|CO0001_CI00002|*|HT24005703|~|Amethyst S09 Lembang" />

        <div class="pelican-multiproperty">
            <div class="destinations">
                <label class="rsvlabel" >Destinations</label>
                <select id="slcHotel">
                    <option value=''>[Select Hotel or Destination]</option>
                    <option value='ALL' class="citynm">All Hotels</option>
                    <option value='' disabled></option>
                    <option value='CI00002' class="citynm">- Bandung -</option>
                    <option value='HT24005616'>Amethyst M08 Dago</option>
                    <option value='HT24005617'>Amethyst M09 Dago</option>
                    <option value='HT24005618'>Amethyst M26 Dago</option>
                    <option value='HT24005619'>Amethyst M18 Dago</option>
                    <option value='HT24005620'>Amethyst KB05 Lembang</option>
                    <option value='HT24005621'>Amethyst M57 Dago</option>
                    <option value='HT24005698'>Amethyst P12A Dago</option>
                    <option value='HT24005699'>Amethyst M-59 Dago</option>
                    <option value='HT24005700'>Amethyst PG28 Dago</option>
                    <option value='HT24005701'>Amethyst M92 Dago</option>
                    <option value='HT24005702'>Amethyst PR31 Dago</option>
                    <option value='HT24005703'>Amethyst S09 Lembang</option>
                    <option value='HT24005703'>Amethyst CG01 Dago</option>
                    <option value='HT24005735'>Amethyst F45 Dago</option>
                    <option value='HT24005746'>Amethyst FE22 Dago</option>
                    <option value='HT24005742'>Amethyst J8 Lembang</option>
                    <option value='HT24005703'>Amethyst JB2 Lembang</option>
                    <option value='HT24005741'>Amethyst JB3 Lembang</option>
                    <option value='HT24005740'>Amethyst JB3a Lembang </option>
                    <option value='HT24005745'>Amethyst JB6 Lembang</option>
                    <option value='HT24005743'>Amethyst JB8 Lembang</option>
                    <option value='HT24005736'>Amethyst K11 Lembang</option>
                    <option value='HT24005739'>Amethyst JB7 Lembang</option>
                    <option value='HT24005738'>Amethyst K28 Dago</option>
                </select>
            </div>

            <div class="mpinput">
                <div class="rsvfield checkin">
                    <label class="rsvlabel">Check-In Date</label>
                    <input type="text" id="txtCi" size="12">
                </div>
                <div class="rsvfield checkout">
                    <label class="rsvlabel">Check-Out Date</label>
                    <input type="text" id="txtCo" size="12">
                </div>

                <div class="rsvfield room">
                    <label>Room(s)</label>
                    <input type="text" id="txtRoom" size="3" maxlength="3" onkeyup='allowNumericOnly(this)' onkeydown='allowNumericOnly(this)' onblur='allowNumericOnly(this)' />
                </div>
                <div class="rsvfield adult">
                    <label>Adult(s)</label>
                    <input type="text" id="txtAdult" size="3" maxlength="3" onkeyup='allowNumericOnly(this)' onkeydown='allowNumericOnly(this)' onblur='allowNumericOnly(this)' />
                </div>
                <div class="rsvfield children">
                    <label>Children</label>
                    <input type="text" id="txtChild" size="3" maxlength="2" onkeyup='allowNumericOnly(this)' onkeydown='allowNumericOnly(this)' onblur='allowNumericOnly(this)' />
                </div>
                <div class="rsvfield promocd">
                    <label>Promo Code</label>
                    <input type="text" id="txtAccessCd" size="3" maxlength="2" />
                </div>
            </div>
            <div class="btnaction">
                <input type="button" id="btnSearch" value="Search" class="pelican-btn" onclick="fSearch()" />
            </div>
        </div>
    </form>
</div>


	<div class="section">
		<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-lg-6">
                    <h2 class="font-weight-bold" id="villa" style="color: #055555;">Villa & Resorts in Bandung</h2>
				</div>
				<div class="col-lg-6 text-lg-end">
					<p><a href="{{ route('customers.all') }}" target="_blank" class="btn btn-primary text-white py-3 px-4">Lihat Semua Villa</a></p>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="property-slider-wrap">
						<div class="property-slider">

				@foreach($vilas as $vila)
					<!-- Tampilkan satu foto pertama dari setiap vila -->
					@if ($vila->foto && count($vila->foto) > 0)
						<div class="property-item">
						<img src="{{ asset('storage/' . $vila->foto[0]) }}" alt="{{ $vila->nama_vila }}" class="vila-image">
							</a>
							<div class="property-content">
								<div class="price mb-2"><span>{{ $vila->nama_vila }}</span></div>
								<div>
									<span class="city d-block mb-3">{{ $vila->lokasi }}</span>
									<!-- Tampilkan data lainnya seperti jumlah kasur, jumlah kamar mandi, dll. -->
									<div class="specs d-flex mb-4">
									<div class="d-block d-flex align-items-center me-3">
										<span class="icon-bed me-2"></span>
										<span class="caption">{{ $vila->jumlah_kasur }}</span>
									</div>
									</div>
									<div class="specs d-flex mb-5">
								<div class="d-block d-flex align-items-center">
									<span class="icon-bath me-2"></span>
									<span class="caption">{{ $vila->jumlah_kamar_mandi }} kamar mandi</span>
								</div>
								</div>
								<a href="{{ route('customers.vilas.show', $vila->id) }}" class="btn btn-primary py-2 px-3">Lihat Detail</a>
								</div>
							</div>
						</div>
					@endif
				@endforeach
						</div>
						<div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
							<span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
							<span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="section sec-testimonials">
		<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-md-6">
					<h2 class="font-weight-bold heading mb-4 mb-md-0" style="color: ">Customer Says</h2>
				</div>
				<div class="col-md-6 text-md-end">
					<div id="testimonial-nav">
						<span class="prev" data-controls="prev">Prev</span>

						<span class="next" data-controls="next">Next</span>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4">

				</div>
			</div>
			<div class="testimonial-slider-wrap">
				<div class="testimonial-slider">
				@foreach($reviews as $review)
				@if ($review->photo)
					<div class="item">
						<div class="testimonial">
						<img src="{{ asset('photos/' . $review->photo) }}" alt="Image" class="review-image">
						</div>
					</div>
					@endif
					@endforeach
				</div>
			</div>

		</div>
	</div>

			</div>
		</div>
	</div>
	<div class="section">
		<div class="row justify-content-center footer-cta" data-aos="fade-up">
			<div class="col-lg-7 mx-auto text-center">
				<h2 class="mb-4 ">Hubungi Kami Villa di Bandung</h2>
				<p><a href="https://api.whatsapp.com/send?phone=6281323961402&text=Hallo%20admin,%20saya%20ingin%20bertanya%20tentang%20villa" target="_blank" class="btn btn-primary text-white py-3 px-4" id="contact">Hubungi Admin</a></p>
			</div> <!-- /.col-lg-7 -->
		</div> <!-- /.row -->
	</div>

	<div class="site-footer">
		<div class="container">

			<div class="row">
				<div class="col-lg-4">
					<div class="widget">
						<h3>Contact </h3>
						<address>Jl. Permata Permai XII No. 44, Cisaranten Kulon Arcamanik Bandung.</address>
						<ul class="list-unstyled links">

							<li><a href="tel://11234567890">+62 81323961402</a></li>
							<li><a href="mailto:info@mydomain.com">info@villadibandung.com</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<div class="widget">
						<h3>Links</h3>
						<ul class="list-unstyled links">
							<ul class="list-unstyled links">
								<li><a href="https://www.tokopedia.com/villabandungamethys">Tokopedia</a></li>
								<li><a href="https://shopee.co.id/jiwaramadhan">Shopee</a></li>
								<li><a href="https://www.facebook.com/amethystdago/">Facebook</a></li>
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

            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; by <a href=" ">Allin.studio</a> <!-- License information: https://untree.co/license/ -->
            </p>

          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.site-footer -->


    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
    	<div class="spinner-border" role="status">
    		<span class="visually-hidden">Loading....</span>
    	</div>
    </div>



    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
	@include('sweetalert::alert')
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).ready(function() {
    // Cek apakah session flash "wa_message" ada
    @if(session('wa_message'))
        var no_booking = '{{ session('no_booking') }}';
        var whatsappText = 'Hallo saya ingin verifikasi pesanan melalui website villadibandung.com dengan no booking ' + no_booking;

        Swal.fire({
            title: 'Pesanan Berhasil',
            text: '{{ session('wa_message') }}',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect pengguna ke situs web WhatsApp dengan nomor dan pesan yang sesuai
                window.location.href = "https://api.whatsapp.com/send?phone=6281323961402&text=" + encodeURIComponent(whatsappText);
            }
        });
    @endif
});


</script>
<script>
    $(document).ready(function() {
        // Inisialisasi datepicker untuk Check-In dan Check-Out
        $("#txtCi").datepicker({
            dateFormat: "yy-mm-dd", // Format tanggal (sesuaikan dengan kebutuhan Anda)
            minDate: 0, // Tidak bisa memilih tanggal sebelum hari ini
            onSelect: function(selectedDate) {
                var minDate = $(this).datepicker('getDate');
                minDate.setDate(minDate.getDate() + 1);
                $("#txtCo").datepicker("option", "minDate", minDate);
            }
        });

        $("#txtCo").datepicker({
            dateFormat: "yy-mm-dd",
            minDate: 1 // Set minimum tanggal Check-Out sebagai hari berikutnya setelah Check-In
        });
    });
    </script>


  </body>
  </html>
