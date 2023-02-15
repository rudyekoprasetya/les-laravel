<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$judul}}</title>
    <!-- load css  -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <!-- container -->
    <div class="container">

        <!-- header  -->
        @include('template/header')
        <!-- header  -->

        <div class="isi">

            <!-- sidebar  -->
            @include('template/sidebar')
            <!-- sidebar  -->

            <!-- content  -->
            <div class="content">
               @yield('content')
            </div>
            <!-- content  -->

        </div>


    </div>
    <!-- container -->
    
</body>
</html>