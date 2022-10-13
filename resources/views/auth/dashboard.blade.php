<html>
<div style="text-align: center">
    <head>
        <h1>Welcome {{ Auth::user()->user_name }}</h1>



    </head>
    <body>
    <p>{{ session()->get('Success') }}</p>
    <a href="{{route('user.logout')}}" type="button" class="btn btn-primary">Logout</a><br>
    <a href="{{route('dashboard')}}" type="button">Dashboard</a>

    </body>
</div>
</html>
