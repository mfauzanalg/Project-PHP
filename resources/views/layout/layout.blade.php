<!DOCTYPE html>
<html>

<head>
    <!-- Date -->
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
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
    
    <title>@yield('title')</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="shadow-lg navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #16817b;">
    <a class="navbar-brand">
        <img src="https://cdn.clipart.email/623d2ac2b844be0e664e54b414166ae3_letter-f-logo-png-picture-729936-letter-f-logo-png_900-900.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Laravel Project 
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="/">Restart</a> 
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
        </ul>
        
        <ul class="navbar-nav navbar-right">
            <li>
                <a class="btn btn-danger my-2 my-sm-0" href="https://www.linkedin.com/in/mfauzanalg/">Author</a>
            </li>
        </ul>
    </div>
    </nav>

    
    @yield('content')
    
    
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
