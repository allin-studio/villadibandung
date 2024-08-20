<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Amethyst Villas Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/reservation.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    <script src="{{ asset('js/reservation.js') }}"></script>
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
    <style>
        body {
            background-image: url('images/hero_bg_001.jpg'); /* Replace with your image path */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Adds a white background with slight transparency */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .hotel-details img {
            max-width: 100%;
            border-radius: 5px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center">
                <h3>Reservation Form</h3>
            </div>
            <div class="card-body">
                <!-- Hotel Details Section -->
                <div class="hotel-details mb-4">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="images/hotel_photo.jpg" alt="Hotel Photo" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <h5>Hotel Description</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum.</p>
                            <p><strong>Price:</strong> $100 per night</p>
                        </div>
                    </div>
                </div>

                <form method="post" id="form1" action="">
                    <input type="hidden" id="hdnCO0001" value="CI00002|~|Bandung"/>
                    <input type="hidden" id="hdnHotelData" value="CO0001_CI00002*|HT24005616|~|Amethyst M08 Dago..."/>

                    <div class="mb-3">
                        <label for="slcHotel" class="form-label">Destinations</label>
                        <select id="slcHotel" class="form-select">
                            <option value=''>[Select Hotel or Destination]</option>
                            <option value='ALL'>All Hotels</option>
                            <option value='' disabled></option>
                            <option value='CI00002'>- Bandung -</option>
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
                        </select>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="txtCi" class="form-label">Check-In Date</label>
                            <input type="text" id="txtCi" class="form-control dtpicker" placeholder="Choose date">
                        </div>
                        <div class="col-md-6">
                            <label for="txtCo" class="form-label">Check-Out Date</label>
                            <input type="text" id="txtCo" class="form-control dtpicker" placeholder="Choose date">
                        </div>
                    </div>

                    <div class="row g-3 mt-3">
                        <div class="col-md-3">
                            <label for="txtRoom" class="form-label">Room(s)</label>
                            <input type="text" id="txtRoom" class="form-control" onkeyup='allowNumericOnly(this)' placeholder="1">
                        </div>
                        <div class="col-md-3">
                            <label for="txtAdult" class="form-label">Adult(s)</label>
                            <input type="text" id="txtAdult" class="form-control" onkeyup='allowNumericOnly(this)' placeholder="1">
                        </div>
                        <div class="col-md-3">
                            <label for="txtChild" class="form-label">Children</label>
                            <input type="text" id="txtChild" class="form-control" onkeyup='allowNumericOnly(this)' placeholder="0">
                        </div>
                        <div class="col-md-3">
                            <label for="txtAccessCd" class="form-label">Access Code</label>
                            <input type="text" id="txtAccessCd" class="form-control" placeholder="Enter code">
                        </div>
                    </div>

                    <div class="d-grid gap-2 mt-4">
                        <button type="button" id="btnSearch" class="btn btn-primary btn-lg" onclick="fSearch()">Search</button>
                        <button type="button" class="btn btn-secondary btn-lg" onclick="javascript:fRetrieve();">Retrieve</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
