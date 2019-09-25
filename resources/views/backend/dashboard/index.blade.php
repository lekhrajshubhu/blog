<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    	<link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="{{ asset('template/vendors/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{asset('template/vendors/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('template/vendors/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('template/vendors/linericon/style.css')}}">
  <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/all.css')}}">
    <title>Document</title>

    <style>
        .head{
            color: #fff;
            padding: 10px;
            background: #645f5f;
        }
        .left-side{
            height: 400px;
            background: gray;
        }
        .right-side{
            height: 400px;
            background: #fafafa;
        }
        ul{
            padding: 10px;
            color: #fff;
        }
        li{
            padding: 5px 0;
        }
        ul li:hover{
            text-decoration: underline;
            cursor: pointer;
            color: #fafafa;
        }
    </style>
</head>
<body>



    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div>
                    <h2 class="head">Welcome to Dashboard</h2>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-3">
                <div class="left-side">
                    <ul>
                        <li class="menu-item" data-url="blog-dashboard">Blog</li>
                        <li class="menu-item" data-url="service-dashboard">Service</li>
                        <li class="menu-item" data-url="contact-dashboard">Contact</li>
                    </ul>
                </div>

            </div>



            <div class="col-md-9">
                <div class="right-side">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repudiandae architecto iure, quisquam saepe libero harum possimus expedita facere alias velit nihil laborum similique explicabo maxime fugiat voluptatum atque iusto.
                </div>
            </div>
        </div>
    </div>



    <script src="{{asset('assets/js/all.js')}}"></script>
</body>
</html>
