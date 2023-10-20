<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<p>Simon you have new message <b> from -{{$name}}</b>
</p>
<div style="text-align: center">
    <h2>
        {{$email}}
    </h2>
    <p>  {{$phone}}   </p>
</div>
<br>
<div style="border: 1px solid black;width: 100%;height: 100px;text-align: center">
    <span class="pull-right"><em><b>{{$time->format('Y-m-D')}}</b></em></span>
    <br>
    <p>{{$text}}</p>
</div>

<br>


</body>
</html>