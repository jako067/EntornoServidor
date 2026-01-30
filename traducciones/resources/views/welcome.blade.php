<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @php
        $username="Diego Efrain";
    @endphp
    {{__('index.welcome',['name'=>$username])}}
    <br>
    {{__('index.message')}}
    <footer>
        {{__('index.author')}}
    </footer>

</body>
</html>
