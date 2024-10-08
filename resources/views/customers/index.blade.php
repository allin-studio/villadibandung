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

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/reservation.js') }}"></script>

    <script type="text/javascript">
        $(function() {
            // Initialize the datepickers
            $("#txtCi").datepicker({
                dateFormat: 'mm/dd/yy', // Format yang sesuai untuk SmartBooking
                minDate: 0 // Prevent selection of past dates
            });

            $("#txtCo").datepicker({
                dateFormat: 'mm/dd/yy', // Format yang sesuai untuk SmartBooking
                minDate: 1 // Ensure check-out is after check-in
            });

            // Function to convert date format from mm/dd/yy to mm/dd/yyyy
            function formatDate(dateStr) {
                var parts = dateStr.split('/');
                var year = (parseInt(parts[2]) < 1000) ? '20' + parts[2] : parts[2]; // Handle year
                return parts[0] + '/' + parts[1] + '/' + year; // mm/dd/yyyy
            }

            // Update date fields with correct format
            $("#txtCi").on('change', function() {
                var formattedDate = formatDate($(this).val());
                $(this).val(formattedDate);
            });

            $("#txtCo").on('change', function() {
                var formattedDate = formatDate($(this).val());
                $(this).val(formattedDate);
            });

            // Prevent numeric-only input for rooms, adults, and children
            function allowNumericOnly(element) {
                element.value = element.value.replace(/[^0-9]/g, '');
            }

            // Set the default values
            $("#txtCi").val(formatDate(new Date().toLocaleDateString())); // Default Check-In Date
            $("#txtCo").val(formatDate(new Date(new Date().setDate(new Date().getDate() + 1)).toLocaleDateString())); // Default Check-Out Date
            $("#txtRoom").val("1"); // Default Room
            $("#txtAdult").val("1"); // Default Adult
            $("#txtChild").val("0"); // Default Children
        });


        // Configuration for SmartBooking
        var _strHtlCCCode = "HCC2400197";
        var _strPath = "https://reservation.smartbooking-asia.com/";
        var _strBackurl = "https://reservation.smartbooking-asia.com/booking/index.aspx?htlcccode=" + _strHtlCCCode;
        var _intDefaultLOS = 2;
        var checkInDate = $("#txtCi").val(); // Format mm/dd/yyyy
        var checkOutDate = $("#txtCo").val(); // Format mm/dd/yyyy
        var rooms = $("#txtRoom").val();
        var adults = $("#txtAdult").val();
        var children = $("#txtChild").val();

    </script>

	<title>VILLA &mdash; BANDUNG </title>
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
                <label class="rsvlabel">Destinations</label>
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
                    <option value='HT24005737'>Amethyst CG01 Dago</option>
                    <option value='HT24005735'>Amethyst F45 Dago</option>
                    <option value='HT24005746'>Amethyst FE22 Dago</option>
                    <option value='HT24005744'>Amethyst J8 Lembang</option>
                    <option value='HT24005742'>Amethyst JB2 Lembang</option>
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
  </body>
  </html>
