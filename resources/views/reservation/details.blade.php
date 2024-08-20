<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Reservation Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/smoothness/jquery-ui.css">
    <style>
        body {
            background-image: url('images/hero_bg_001.jpg');
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

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">VilladiBandung.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('reservation.details', ['id' => $vila->id]) }}">Reservation</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="gallery">
            <h2>Gallery</h2>
            <div class="d-flex overflow-auto mb-4">
                @foreach ($vila->foto as $photo)
                    <img src="{{ asset('storage/' . $photo) }}" alt="{{ $vila->nama_vila }}" class="me-3">
                @endforeach
            </div>
        </div>

        <h1>Reservation for {{ $vila->nama_vila }}</h1>

        <form id="reservationForm" class="row g-3">
            @csrf
            <div class="col-md-6">
                <label for="checkin" class="form-label">Check-in Date</label>
                <input type="text" id="checkin" name="checkin" class="form-control" placeholder="Choose date" required>
            </div>
            <div class="col-md-6">
                <label for="checkout" class="form-label">Check-out Date</label>
                <input type="text" id="checkout" name="checkout" class="form-control" placeholder="Choose date" required>
            </div>
            <div class="col-md-6">
                <label for="rooms" class="form-label">Rooms</label>
                <input type="number" id="rooms" name="rooms" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="adults" class="form-label">Adults</label>
                <input type="number" id="adults" name="adults" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="children" class="form-label">Children</label>
                <input type="number" id="children" name="children" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="access_code" class="form-label">Promo Code</label>
                <input type="text" id="access_code" name="access_code" class="form-control">
            </div>
            <input type="hidden" name="vila_id" id="vila_id" value="{{ $vila->id }}">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit Reservation</button>
            </div>
        </form>
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
                    '49': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005616&amp%3blang=EN',
                    'm-26': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005618&amp%3blang=EN',
                    'm-18': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005619&amp%3blang=EN',
                    '50': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005617&amp%3blang=EN',
                    'kb-05': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005620&amp%3blang=EN',
                    'm-57': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005621&amp%3blang=EN',
                    'm-92': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005701&amp%3blang=EN',
                    'm-59': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005699&amp%3blang=EN',
                    's-09': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005703&amp%3blang=EN',
                    'pr-31': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005702&amp%3blang=EN',
                    'pg-28': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005700&amp%3blang=EN',
                    'p-12A': 'https://reservation.smartbooking-asia.com/booking/index.aspx?hotelcd=HT24005698&amp%3blang=EN'
                };

                var bookingUrl = urlMap[villaId] || '#';
                if (bookingUrl !== '#') {
                    var reservationUrl = `${bookingUrl}&checkin=${checkin}&checkout=${checkout}&rooms=${rooms}&adults=${adults}&children=${children}&accesscode=${accessCode}`;
                    window.location.href = reservationUrl;
                } else {
                    alert("Booking URL not found for this villa.");
                }
            });
        });

        function getDate(dt) {
            var strMonth = (dt.getMonth() + 1).toString().padStart(2, '0');
            var strDay = dt.getDate().toString().padStart(2, '0');
            return `${strMonth}/${strDay}/${dt.getFullYear()}`;
        }
    </script>
</body>
</html>
