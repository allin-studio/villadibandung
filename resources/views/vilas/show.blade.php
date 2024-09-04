<style>
    .container-fluid {
        padding: 30px;
        background-color: #f8f9fa;
    }

    .text-center {
        text-align: center;
    }

    .photo-gallery {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        justify-content: center;
        margin-bottom: 30px;
    }

    .card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: box-shadow 0.3s ease;
    }

    .card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }

    .vila-image {
        width: 100%;
        height: auto;
        border-bottom: 1px solid #ddd;
        border-radius: 15px 15px 0 0;
    }

    .table {
        background-color: #fff;
        border-radius: 10px;
        overflow: hidden;
        margin-top: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .table th,
    .table td {
        padding: 15px;
        vertical-align: middle;
        text-align: left;
    }

    .table thead th {
        background-color: #007bff;
        color: #fff;
        font-weight: bold;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
        transition: background-color 0.3s, border-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .btn-primary:focus,
    .btn-primary:active {
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
    }
</style>



  <!-- resources/views/vilas/show.blade.php -->
  @extends('layouts.custom')

  @section('content')
  <div class="container-fluid">
    <h1 class="text-center">{{ $vila->nama_vila }}</h1>

    <!-- Gallery Section -->
    @if ($vila->foto && count($vila->foto) > 0)
    <h3 class="mt-4">Foto-foto Villa:</h3>
    <div class="photo-gallery">
        @foreach ($vila->foto as $photo)
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/' . $photo) }}" alt="{{ $vila->nama_vila }}" class="vila-image card-img-top">
            </div>
        @endforeach
    </div>
    @else
        <p class="mt-3">Tidak ada foto</p>
    @endif

    <!-- Villa Details -->
    <div class="mt-4">
      <table class="table table-bordered">
          <tbody>
              <tr>
                  <th scope="row">Deskripsi</th>
                  <td>{{ $vila->deskripsi }}</td>
              </tr>
              <tr>
                  <th scope="row">Lokasi</th>
                  <td>{{ $vila->lokasi }}</td>
              </tr>
              <tr>
                  <th scope="row">Harga Weekday</th>
                  <td>Rp {{ number_format($vila->harga, 2, ',', '.') }}</td>
              </tr>
              <tr>
                  <th scope="row">Harga Weekend</th>
                  <td>Rp {{ number_format($vila->harga_weekend, 2, ',', '.') }}</td>
              </tr>
              <tr>
                  <th scope="row">Kapasitas</th>
                  <td>{{ $vila->kapasitas }}</td>
              </tr>
              <tr>
                  <th scope="row">Jumlah Kasur</th>
                  <td>{{ $vila->jumlah_kasur }}</td>
              </tr>
              <tr>
                  <th scope="row">Jumlah Kamar Mandi</th>
                  <td>{{ $vila->jumlah_kamar_mandi }}</td>
              </tr>
              <tr>
                  <th scope="row">Fasilitas</th>
                  <td>{{ $vila->fasilitas }}</td>
              </tr>
          </tbody>
      </table>
    </div>

    <!-- Back Button -->
    <div class="buttons">
      <a href="{{ route('vila.index') }}" class="btn btn-primary">Kembali ke Daftar Vila</a>
    </div>
  </div>
  @endsection
