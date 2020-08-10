<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
<form action="/files" method="post" enctype="multipart/form-data">
{{csrf_field()}}
<input type="text" name="name" placeholder="Enter your name">
<input type="text" name="bookname" placeholder="Enter Book Title">
<input type="file" name="file">
<input type="submit" value="Submit">
</form>
</body>
</html>