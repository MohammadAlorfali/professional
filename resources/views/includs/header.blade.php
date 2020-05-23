<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <title>Bootstrap 4 Design Number 1</title>
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{ asset('css/font-awesome.min.css')}}>
    <link rel="stylesheet" href={{ asset('css/main.css')}}>
</head>

<body>
        <!--Start Upper Bar-->
        <div class="upper-bar">
            <div class="container">
                <div class="row">
                    <div class="info col-sm text-center text-sm-left">
                        <i class="fa fa-phone"></i> <span>0992982467,</span>
                        <i class="fa fa-envelope-o" style="margin-right: 5px;"></i>mohammad@gmail.com
                    </div>
                    <div class="info col-sm text-center text-sm-right">
                        <span>Letts Work Together!</span>
                        <span class="get-quote">Get Quote</span>
                    </div>
                </div>
            </div>
        </div>
        <!--End Upper Bar-->


        <!-- Start Navpar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <span>Elite</span><span>Corp</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" style="color: #ee4343 !important;" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Content</a>
                        </li>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navpar -->
