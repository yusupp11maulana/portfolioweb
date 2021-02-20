<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PorfolioWeb</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{!! asset('img/icon.png') !!}">
    <link rel="stylesheet" href="{!! asset('css/index.css') !!}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" id="nama" href="/">PortfolioWeb</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" id="activated" href="/">Home</a>
                    <a class="nav-item nav-link" id="warna" href="#">Profile</a>
                    <a class="nav-item nav-link" id="warna" href="#">Portfolio</a>
                    <a class="nav-item nav-link" id="btn1" href="/login">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="jumbotron-fluid jumbo">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-4">Save and display</h1>
                    <p class="display-2">Your profile and project on repository</p>
                    <a href="/login"><p class="btn-outline-primary1">LOGIN</p></a>
                </div>
                <div class="col">
                    <img src="{!! asset('img/ilustrasi.png') !!}" alt="PortfolioWeb" class="display-3">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-10">
                <div class="row">
                    <div class="col-lg bg-dark">
                        <h1>Content</h1>
                    </div>
                    <div class="col-lg bg-dark">
                        <h1>Test</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>