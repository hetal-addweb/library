<!DOCTYPE html>
<html>
<head>
    <title>Details</title>
    <body>
    <h2>{{$data->name}}</h2>
    <h2>{{$data->bookname}}</h2>
    <p>
    <iframe src="{{url('storage/'.$data->file)}}" style="width: 600px; height:500px;"></iframe>
    </p>
    </body>
</head>
</html>