<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        body{
            background: blueviolet;
        }
        .btn-info{
            background: blueviolet;
            color: white;
        }
    </style>
</head>
<body>
    <div id="app">
        <div class="conainer mt-5">
            <div class="col-md-5 m-auto">
                <router-view></router-view>
            </div>
        </div>
    </div>


    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>