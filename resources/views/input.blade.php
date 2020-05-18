@extends('layout/layout')

@section('title', 'Home')


@section('content')
    <!-- Jumbotron -->
    <div class="jumbotron text-center p-3 mb-5 bg-white rounded">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      </div>
    </div>

    
    <div class="bg p-3 mb-5 bg-white rounded">
        <div class="full">
            <div class="row time">
                <div class="col-md-4">
                    <div class="dates" style="color:#white;">
                        <h3>Tanggal</h3>
                            <input type="text" style="width:200px;background-color:#whute;" class="form-control tanggal" id="usr1" name="event_date" placeholder="YYYY-MM-DD" autocomplete="off" >
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Jam Masuk</h3>
                    <input id="timepkr" style="width:200px;float:left;" class="form-control jam_masuk" placeholder="HH:MM" />
                    <button class="btn btn-danger" onclick="showpickers('timepkr',24)" style="width:40px;float:left;"><i class="fa fa-clock-o"></i>
                </div>
                <div class="timepicker"></div>  <!--Important to add and keep it seprate to the end-->
                <div class="col-md-4">
                    <h3>Jam Keluar</h3>
                    <input id="timepkr2" style="width:200px;float:left;" class="form-control jam_keluar" placeholder="HH:MM" />
                    <button class="btn btn-danger" onclick="showpickers('timepkr2',24)" style="width:40px;float:left;"><i class="fa fa-clock-o"></i>
                </div>
                <div class="timepicker"></div>  <!--Important to add and keep it seprate to the end-->
            </div>
        </div>
    
        <br><br>

        <div class="form-group time">
            <h3>Deskripsi Pekerjaan</h3>
            <input type="text" class="input_pekerjaan form-control" placeholder="Pekerjaan"></textarea>
        </div>

        <br>

        <div class="form-group time">
            <h3>Kendala yang dihadapi</h3>
            <input type="text" class="input_kendala form-control" placeholder="Kendala"></input>
        </div>
   
        <br>

        <div class="container pad">    
            <button type="submit" class="btn btn-danger submit_button">Submit</button>
        </div>
    </div>
@endsection