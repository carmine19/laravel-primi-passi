<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <title>Chi siamo</title>
</head>
<body>

<div class="breadcump">
    <ul>
        <li>
            <a href="{{url('/')}}">Home</a>
        </li>
    </ul>
</div>

<div class="container cbt">
    <div class="box-text">
        <div class="user-title">
            <h2>Chi siamo</h2>
        </div>
        <div class="todo">
            <div class="box-text">
                <h2>I fondatori</h2>
            </div>
            <div class="box-list">
                <ul>
                    @forelse($fondatori as $value)
                    <li>{{$value}}</li>
                    @empty
                    <li>Non ci sono cose da fare</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>

</body>
</html>
