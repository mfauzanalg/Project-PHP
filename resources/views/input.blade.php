<!DOCTYPE html>
<html>

<head>
    <!-- Date -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-datepicker.css') }}">  
    
	<script>

        $(function() {

            $('.dates #usr1').datepicker({
                'format': 'yyyy-mm-dd',
				'autoclose': true
			});
            
            
		});
        </script>
    

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- Clock -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/tpicker.css') }}">
    <script type="text/javascript" src="{{ asset('js/tpicker.js') }}"></script>
    
    <title> Kelarin Yok </title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
    <a class="navbar-brand" href="#">
        <img src="https://cdn.clipart.email/623d2ac2b844be0e664e54b414166ae3_letter-f-logo-png-picture-729936-letter-f-logo-png_900-900.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Laravel
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="/input">Input</a> 
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/output">output</a>
            </li>
        </ul>
    </div>
    </nav>

    
    <!-- Jumbotron -->
    <div class="jumbotron text-center shadow-lg p-3 mb-5 bg-white rounded">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      </div>
    </div>

    
    
        <div class="row time">
            <div class="col-md-4">
                <div class="dates" style="color:#white;">
                    <h3>Tanggal</h3>
                        <input type="text" style="width:200px;background-color:#whute;" class="form-control" id="usr1" name="event_date" placeholder="YYYY-MM-DD" autocomplete="off" >
                </div>
            </div>
            <div class="col-md-4">
                <h3>Jam Masuk</h3>
                <input id="timepkr" style="width:200px;float:left;" class="form-control" placeholder="HH:MM" />
                <button class="btn btn-danger" onclick="showpickers('timepkr',24)" style="width:40px;float:left;"><i class="fa fa-clock-o"></i>
            </div>
            <div class="timepicker"></div>  <!--Important to add and keep it seprate to the end-->
            <div class="col-md-4">
                <h3>Jam Pulang</h3>
                <input id="timepkr2" style="width:200px;float:left;" class="form-control" placeholder="HH:MM" />
                <button class="btn btn-danger" onclick="showpickers('timepkr2',24)" style="width:40px;float:left;"><i class="fa fa-clock-o"></i>
            </div>
            <div class="timepicker"></div>  <!--Important to add and keep it seprate to the end-->
        </div>
    
        <br><br>

        <div class="form-group time">
            <h3>Deskripsi Pekerjaan</h3>
            <textarea class="form-control" placeholder="Pekerjaan"></textarea>
        </div>

        <br>

        <div class="form-group time">
            <h3>Kendala yang dihadapi</h3>
            <textarea class="form-control" placeholder="Kendala"></textarea>
        </div>
   
        <br>

        <div class="container pad">    
            <button type="submit" class="btn btn-danger">Submit</button>
        </div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
