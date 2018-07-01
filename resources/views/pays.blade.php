<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>liste pays</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
@foreach($pays as $obj)
 <a href={{url('pays/'.$obj->name)}}> {{$obj->name}}</a><br>
@endforeach
    
</body>
</html>