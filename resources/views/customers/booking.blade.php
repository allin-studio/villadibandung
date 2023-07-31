<style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #11574a;
    }
  
    .form-container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #ffffff;
      border: 5px solid #0e3d34;
      border-radius: 5px;
      padding: 20px;
    }
  
    h1 {
      text-align: center;
      margin-bottom: 20px;
    }
  
    label {
      display: block;
      margin-bottom: 5px;
    }
  
    input,
    textarea,
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      margin-bottom: 15px;
    }
  
    textarea {
      resize: vertical;
    }
  
    .submit-btn {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #11574a;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }
  
    .submit-btn:hover {
      background-color: #0e3d34;
    }
  </style>  

<!-- Ganti {villa_id} dengan id villa yang sesuai -->

<div class="form-container">
<h1>Form Pemesanan Villa </h1>
<h1>-- {{ $vila->nama_vila }} --</h1>
<div id="vilaData" data-harga="{{ $vila->harga }}"></div>
<!-- Form pemesanan -->
<form action="{{ route('storeBooking') }}" method="post">
    @csrf
    <input type="hidden" name="villa_id" value="{{ $vila->id }}">
    <!-- Informasi Pemesan -->
    <h2>Informasi Pemesan</h2>
    <div>
        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="username" required>
        @error('nama_lengkap')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="@gmail.com" required>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat" placeholder="Jl. Raya Cikole No. 123, Bandung" required></textarea>
        @error('alamat')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="notelp">Nomor Telepon:</label>
        <input type="tel" name="notelp" id="notelp" placeholder="087-822-611-896" required>
        @error('notelp')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Informasi Pemesanan -->
    <h2>Informasi Pemesanan</h2>
    <div>
        <label for="check_in">Tanggal Check-in:</label>
        <input type="date" name="check_in" id="check_in" required>
        @error('check_in')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="check_out">Tanggal Check-out:</label>
        <input type="date" name="check_out" id="check_out" required>
        @error('check_out')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="metode_pembayaran">Metode Pembayaran:</label>
        <select name="metode_pembayaran" id="metode_pembayaran" required>
            <option value="transfer_bank">Transfer Bank</option>
            <option value="kartu_kredit">Kartu Kredit</option>
            <!-- Tambahkan pilihan metode pembayaran lainnya sesuai kebutuhan -->
        </select>
        @error('metode_pembayaran')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Total Bayar (tambahkan sesuai perhitungan total bayar) -->
    <div>
        <label for="total_bayar">Total Bayar:</label>
        <input type="text" name="total_bayar" id="total_bayar" readonly>
    </div>
    <script>
        // Fungsi untuk menghitung total bayar berdasarkan tanggal check-in, check-out, dan harga villa
        function calculateTotalBayar() {
            // Ambil nilai tanggal check-in dan check-out
            var checkInDate = new Date(document.getElementById('check_in').value);
            var checkOutDate = new Date(document.getElementById('check_out').value);

            // Harga villa (ganti 1000000 dengan harga sesuai dengan data villa yang sebenarnya)
            var hargaVilla = parseInt(document.getElementById('vilaData').dataset.harga);

            // Hitung selisih hari antara check-in dan check-out
            var timeDiff = checkOutDate - checkInDate;
            var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

            // Hitung total bayar
            var totalBayar = hargaVilla * diffDays;

            // Tampilkan total bayar di input field
            document.getElementById('total_bayar').value = totalBayar;
        }

        // Panggil fungsi calculateTotalBayar() saat tanggal check-in atau check-out berubah
        document.getElementById('check_in').addEventListener('change', calculateTotalBayar);
        document.getElementById('check_out').addEventListener('change', calculateTotalBayar);
    </script>

    <button type="submit" class="submit-btn">Pesan</button>
</form>
</div>
