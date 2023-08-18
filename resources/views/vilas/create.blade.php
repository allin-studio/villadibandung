
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .edit-container {
        max-width: 600px;
        padding: 20px;
        background-color: #f5f5f5;
        border: 1px solid #ddd;
        border-radius: 5px;
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
        padding: 5px;
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
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 10px;
    }

    .submit-btn:hover {
        background-color: #45a049;
    }
    .cancel-btn {
        display:block;
        width: 100%;
        padding: 10px;
        background-color: #ccc;
        color: rgb(0, 0, 0);
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
    }
    

    .cancel-btn:hover {
        background-color: #b3b3b3;
    }

    .buttons {
        text-align: center;
        margin-top: 20px;
    }

    img {
        max-width: 200px;
        max-height: 200px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .bordered-box {
        border: 1px solid #ccc;
    padding: 10px;
    width:1000px; /* Mengatur lebar kotak */
    border-radius: 7px; /* Mengatur sudut tidak siku-siku */
    margin-bottom:10px;
}
.checkbox-label {
    display: inline-flex;
    align-items: center;
    margin-bottom: 5px;
    white-space: nowrap; /* Menjaga teks dalam satu baris */
    overflow: hidden; /* Mengatur overflow jika terlalu lebar */
    text-overflow: ellipsis;
    margin-left: 5px; /* Jarak 5px ke kiri */
    margin-right: 5px;
}

.checkbox-label input[type="checkbox"] {
    margin-right: 5px;
}
</style>
<!-- resources/views/vilas/create.blade.php -->
<div class="container-fluid">
@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1>Tambah Data Villa</h1>

    <div class="card">
    <div class="card-body">
    <form action="{{ route('vila.store') }}" method="POST" enctype="multipart/form-data"  class="row g-8">
        @csrf
        <div class="row mb-3">
        <div class="col-md-6">
        <label for="nama_vila" class="form-label">Nama vila:</label>
        <input type="text" name="nama_vila" placeholder="Villa Cikole" required>
        </div>

        <div class="col-md-6">
        <label for="alamat_lengkap" class="form-label">Alamat Lengkap:</label>
        <input type="text" name="alamat_lengkap" placeholder="Jl. Raya Cikole No. 123, Bandung" required>
        </div>

        <div class="col-md-6">
        <label for="lokasi" class="form-label">Lokasi:</label>
        <input type="text" name="lokasi" placeholder=" Di lereng gunung, dekat hutan pinus" required>
        </div>

        <div class="col-md-6">
        <label for="deskripsi" class="form-label">Deskripsi:</label>
        <textarea name="deskripsi" placeholder="vila nyaman dengan pemandangan alam yang indah" required></textarea>
        </div>

        <div class="col-md-6">
        <label for="jumlah_kasur" class="form-tabel">Deskripsi Kasur:</label>
        <input type="text" name="jumlah_kasur" placeholder="3 kasur single, 1 kasur double" required>
        </div>

        <div class="col-md-6">
        <label for="jumlah_kamar_mandi" class="form-tabel">Jumlah Kamar Mandi:</label>
        <input type="number" name="jumlah_kamar_mandi" placeholder="2" required>
        </div>
        
        <div class="col-md-6">
        <label for="kapasitas" class="form-tabel">Kapasitas</label>
        <input type="text" name="kapasitas" id="kapasitas" placeholder="3 orang" required>
        </div>

<<<<<<< HEAD
   
        <div class="col-md-6">
        <label for="fasilitas" class="form-tabel">Fasilitas</label>
        <textarea name="fasilitas" id="fasilitas" rows="4" placeholder=" Kolam renang, dapur lengkap, taman" required></textarea>
        </div>

=======
>>>>>>> 222599b71938c73f518664158220b498dcbe969e
        <div class="col-md-6">
            <label for="harga" class="form-tabel">Harga/Hari Weekday</label>
            <input type="text" name="harga" id="harga" placeholder="1000000" required>
            </div>
            <div class="col-md-6">
            <label for="harga" class="form-tabel">Harga/Hari Weekend</label>
            <input type="text" name="harga_weekend" id="harga" placeholder="1000000" required>
            </div>

<<<<<<< HEAD
        <div class="col-md-3">
=======
        <div class="col-md-6">
            <label for="Fasilitas" class="form-tabel">Fasilitas</label>
            <div class="col-md-6 bordered-box">
            <div class="fasilitas-checkboxes">
            <label class="checkbox-label">
                    <input type="checkbox" name="fasilitas[]" value="Kolam Renang"> Kolam Renang
                </label>
                <label class="checkbox-label">
                    <input type="checkbox" name="fasilitas[]" value="Kolam Renang Hangat"> Kolam Renang Hangat
                </label>
                <label class="checkbox-label">
                    <input type="checkbox" name="fasilitas[]" value="Jacuzzi"> Jacuzzi
                </label>
                <label class="checkbox-label">
                    <input type="checkbox" name="fasilitas[]" value="Hot Tub"> Hot Tub
                </label>
                <label class="checkbox-label">
                    <input type="checkbox" name="fasilitas[]" value="Karaoke Set"> Karaoke Set
                </label>
                <label class="checkbox-label">
                    <input type="checkbox" name="fasilitas[]" value="Karaoke Room"> Karaoke Room
                </label>
                <label class="checkbox-label">
                    <input type="checkbox" name="fasilitas[]" value="Barbeque Set"> Barbeque Set
                </label>
                <label class="checkbox-label">
                    <input type="checkbox" name="fasilitas[]" value="Wifi"> Wifi
                </label>
                <label class="checkbox-label">
                    <input type="checkbox" name="fasilitas[]" value="Tv Kabel"> Tv Kabel
                </label>
                <label class="checkbox-label">
                    <input type="checkbox" name="fasilitas[]" value="Alat Masak Standar Lengkap"> Alat Masak Standar Lengkap
                </label>
                <label class="checkbox-label">
                    <input type="checkbox" name="fasilitas[]" value="Alat Makan Standar Lengkap"> Alat Makan Standar Lengkap
                </label>
                <label class="checkbox-label">
                    <input type="checkbox" name="fasilitas[]" value="Barbeque Set" checked> Barbeque Set
                </label>
                <label class="checkbox-label">
                    <input type="checkbox" name="fasilitas[]" value="Carport" checked> Carport
                </label>
                <label class="checkbox-label">
                    <input type="checkbox" name="fasilitas[]" value="Ruang Keluarga" checked> Ruang Keluarga
                </label>
                <label class="checkbox-label">
                    <input type="checkbox" name="fasilitas[]" value="Ruang Makan & Dapur" checked> Ruang Makan & Dapur
                </label>
                <label class="checkbox-label">
                    <input type="checkbox" name="fasilitas[]" value="Kolam Renang Anak" checked> Kolam Renang Anak
                </label>
            </div>
            </div>
        </div>
        <br>

        <div class="col-md-6">
>>>>>>> 222599b71938c73f518664158220b498dcbe969e
         <label for="foto">Foto</label>
        <input type="file" name="foto[]" id="foto" multiple required>
        <br>
        </div>
        <br>
        <button type="submit" class="submit-btn" class="form-tabel">Simpan</button>
        <a href="{{ route('vila.index') }}" class="cancel-btn" class="form-tabel">Cancel</a>
    </form>
    </div>
</div>
</div>
@endsection

