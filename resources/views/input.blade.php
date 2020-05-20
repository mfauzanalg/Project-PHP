@extends('layout/layout')

@section('title', 'Home')

@section('content')
    <!-- Jumbotron -->
    <div class="jumbotron text-center p-3 mb-5 bg-white rounded">
      <div class="container">
        <h1>Internship Calculator</h1>
        <p>Enter the input according to the format provided then press Submit</p>
      </div>
    </div>

    <!-- Input Fields -->
    <div class="bg p-3 mb-5 bg-white rounded">
        <div class="full">
            <div class="row time">
                <div class="col-md-4">
                    <div class="dates" style="color:#white;">
                        <!-- Data Input Field -->
                        <h3>Tanggal</h3>
                            <input autocomplete="off" type="text" style="width:200px;background-color:#whute;" class="form-control tanggal" id="usr1" name="event_date" placeholder="YYYY-MM-DD" autocomplete="off" >
                    </div>
                </div>

                <!-- Time Input Field -->
                <div class="col-md-4">
                    <h3>Jam Masuk</h3>
                    <input autocomplete="off" id="timepkr" style="width:200px;float:left;" class="form-control jam_masuk" placeholder="HH:MM" />
                    <button class="btn btn-danger" onclick="showpickers('timepkr',24)" style="width:40px;float:left;"><i class="fa fa-clock-o"></i>
                </div>
                <div class="timepicker"></div>  <!--Important to add and keep it seprate to the end-->
                <div class="col-md-4">
                    <h3>Jam Pulang</h3>
                    <input autocomplete="off" id="timepkr2" style="width:200px;float:left;" class="form-control jam_keluar" placeholder="HH:MM" />
                    <button class="btn btn-danger" onclick="showpickers('timepkr2',24)" style="width:40px;float:left;"><i class="fa fa-clock-o"></i>
                </div>
                <div class="timepicker"></div>  <!--Important to add and keep it seprate to the end-->
            </div>
        </div>
    
        <br><br>

        <!-- Work Description -->
        <div class="form-group time">
            <h3>Deskripsi Pekerjaan</h3>
            <input autocomplete="off" type="text" class="input_pekerjaan form-control" placeholder="Pekerjaan"></textarea>
        </div>

        <br>

        <!-- obstacles encountered -->
        <div class="form-group time">
            <h3>Kendala yang dihadapi</h3>
            <input autocomplete="off" type="text" class="input_kendala form-control" placeholder="Kendala"></input>
        </div>
   
        <br>

        <!-- Submit Button -->
        <div class="container pad">    
            <button type="submit" class="btn btn-danger submit_button">Submit</button>
        </div>
    </div>
    
    <!-- output table -->
    <div class="data rounded">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Tanggal</th>
                <th scope="col">Jam-Masuk</th>
                <th scope="col">Jam-Pulang</th>
                <th scope="col">Kendala</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Durasi Kerja</th>
                </tr>
            </thead>

            <tbody id = "output">
                
            </tbody>
        </table>
    </div>

@endsection