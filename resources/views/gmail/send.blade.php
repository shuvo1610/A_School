<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>verification</title>
    <style>.button {
            background-color: #4CAF50;
            color: white;
            padding: 15px 32px;
            text-align: center;
            display: inline-block;
            font-size: 20px;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div style="text-align: center">
    <h2>{{$title}}<br></h2>
    <a href="{{route('user.Verified',['id'=>$user->id])}}" type="button" class="button">Verified Now</a>
</div>
</body>
</html>
