<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking Reservation</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/smoothness/jquery-ui.css" />
	<style>
        body {
            background-image: url('{{ asset('images/background.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-top: 2rem;
        }
        .gallery img {
            max-width: 200px;
            height: auto;
            object-fit: cover;
            border: 1px solid #ddd;
            border-radius: .25rem;
        }
	</style>
</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Make Your Reservation</h1>
							<p>Complete the form below to make a reservation at {{ $vila->nama_vila }}.</p>
                            <div class="gallery">
                                <div class="d-flex overflow-auto mb-4">
                                    @foreach ($vila->foto as $photo)
                                        <img src="{{ asset('storage/' . $photo) }}" alt="{{ $vila->nama_vila }}" class="me-3">
                                    @endforeach
                                </div>
                            </div>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form id="reservationForm" class="row g-3">
								@csrf
								<div class="form-group">
									<span class="form-label">Your Destination</span>
									<input class="form-control" type="text" value="{{ $vila->nama_vila }}" readonly>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Check In</span>
											<input type="text" id="checkin" name="checkin" class="form-control" placeholder="Choose date" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Check Out</span>
											<input type="text" id="checkout" name="checkout" class="form-control" placeholder="Choose date" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Rooms</span>
											<input type="number" id="rooms" name="rooms" class="form-control" required>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Adults</span>
											<input type="number" id="adults" name="adults" class="form-control" required>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Children</span>
											<input type="number" id="children" name="children" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<span class="form-label">Promo Code</span>
									<input type="text" id="access_code" name="access_code" class="form-control">
								</div>
								<input type="hidden" name="vila_id" id="vila_id" value="{{ $vila->id }}">
								<div class="form-btn">
									<button type="submit" class="btn btn-primary">Submit Reservation</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="text-center mt-4">
        <p>&copy; {{ date('Y') }} VilladiBandung. All rights reserved.</p>
    </footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
	<script>
        var $pelican = jQuery.noConflict();
        $pelican(function () {
            var _intDefaultCi = 1;
            var _intDefaultLOS = 2;
            var _intDefaultRoom = 1;
            var _intDefaultAdult = 2;
            var _intDefaultChild = 0;

            // Set default dates
            var dtCiDate = new Date();
            var dtCoDate = new Date();
            dtCiDate.setDate(dtCiDate.getDate() + _intDefaultCi);
            dtCoDate.setDate(dtCoDate.getDate() + _intDefaultCi + _intDefaultLOS);
            $pelican("#checkin").val(getDate(dtCiDate));
            $pelican("#checkout").val(getDate(dtCoDate));
            $pelican("#rooms").val(_intDefaultRoom);
            $pelican("#adults").val(_intDefaultAdult);
            $pelican("#children").val(_intDefaultChild);

            // Datepicker settings
            $pelican("#checkin").datepicker({
                minDate: 0,
                onSelect: function (dateText, inst) {
                    var dtTemp = new Date(dateText);
                    dtTemp.setDate(dtTemp.getDate() + _intDefaultLOS);
                    var dtCheckOut = getDate(dtTemp);
                    $pelican("#checkout").val(dtCheckOut);
                }
            });
            $pelican("#checkout").datepicker({ minDate: 0 });

            // Form submit
            $pelican("#reservationForm").on("submit", function(event) {
                event.preventDefault();

                var villaId = $pelican("#vila_id").val();
                var checkin = $pelican("#checkin").val();
                var checkout = $pelican("#checkout").val();
                var rooms = $pelican("#rooms").val();
                var adults = $pelican("#adults").val();
                var children = $pelican("#children").val();
                var accessCode = $pelican("#access_code").val();

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
                    '69': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005738&amp;lang=EN',
                    '94': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005743&amp;lang=EN',
                    '97': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005736&amp;lang=EN',
                    '82': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005735&amp;lang=EN',
                    '81': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005698&amp%3blang=EN'
                };

                if (urlMap[villaId]) {
                    window.location.href = urlMap[villaId];
                } else {
                    alert('Invalid villa ID!');
                }
            });

            // Helper functions
            function getDate(dtDate) {
                var dtYear = dtDate.getFullYear();
                var dtMonth = dtDate.getMonth() + 1;
                var dtDay = dtDate.getDate();
                return (dtMonth < 10 ? '0' + dtMonth : dtMonth) + '/' + (dtDay < 10 ? '0' + dtDay : dtDay) + '/' + dtYear;
            }
        });
	</script>
</body>

</html>
