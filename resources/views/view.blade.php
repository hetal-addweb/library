<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<body>
<table border="1">
	<tr>
		<th>S1</th>
		<th>name</th>
		<th>bookname</th>
		<th>view</th>
		<th>Download</th>
	</tr>
	@foreach($file as $key=>$data)
	<tr>
		<td>{{++$key}}</td>
		<td>{{$data->name}}</td>
		<td>{{$data->bookname}}</td>
		<td><a href="/files/{{$data->id}}">View</a> </td>
		<td><a href="/file/download/{{$data->file}}">Download</a></td>
	
	</tr>
	@endforeach
</table>
</body>
</html>