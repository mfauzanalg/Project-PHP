@extends('layout/layout')

@section('title', 'output')

@section('content')
    <!-- Jumbotron -->
    <div class="jumbotron text-center p-3 mb-5 bg-white rounded">
      <div class="container">
        <h1>Daftar Kerja Magang</h1>
        <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      </div>
    </div>

    <div class="data rounded">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Tanggal</th>
                <th scope="col">Jam-Masuk</th>
                <th scope="col">Jam-Keluar</th>
                <th scope="col">Kendala</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Waktu Kerja</th>
                </tr>
            </thead>

            <tbody>
                <!-- <tr>
                    <th scope="row">12 Maret 2019</th>
                    <td>13:30</td>
                    <td>12:20</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, nobis architecto saepe odit vitae facere ab nihil veritatis distinctio, repellat fugit, delectus amet adipisci et quae molestiae quod pariatur quisquam.</td>
                    <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo enim neque excepturi molestias nemo ex dignissimos ratione fugiat odit architecto? Nulla omnis aliquid eveniet! Ullam libero ut ab repellat numquam!</td>
                    <td>Apa</td>
                </tr> -->
            </tbody>
        </table>
    </div>


@endsection