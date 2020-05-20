@extends('layout/layout')

@section('title', 'About')

@section('content')
    <!-- Jumbotron -->
    <div class="jumbotron text-center p-3 mb-5 bg-white rounded">
      <div class="container">
        <h1>About This App</h1>
        <p>This App made with Laravel and Javascript by Muhammad Fauzan Al-Ghifari</p>
      </div>
    </div>

    <!-- App Spec -->
    <div class="about p-3 mb-5 rounded">
      <ul class="list-group">
        <li class="list-group-item list-group-item-danger">APP SPECIFICATION</li>
        <li class="list-group-item">Campuspedia membutuhkan sebuah sistem untuk menghitung berapa jam anak magang mengerjakan tugas di kantor.</li>
        <li class="list-group-item">inputan berupa tanggal, jam masuk, jam pulang, tugas yang dikerjakan dan kendala apa saja saat mengerjakan tugas</li>
        <li class="list-group-item"> Jam 12.00-13.00 kemudian jam 16.00-17.00 dan jam 18.00-19.00 tidak dihitung jam kerja karena waktu istirahat dan sholat.</li>
        <li class="list-group-item">Buatlah sistem yang bisa mengakomodasi kebutuhan tersebut. Gunakan juga jquery/javascript untuk tampilan input/output data;</li>
        <li class="list-group-item">Buat dengan menggunakan framework laravel project taruh di github kemudian kumpulkan link repositorinya.</li>
      </ul>
    </div>



@endsection