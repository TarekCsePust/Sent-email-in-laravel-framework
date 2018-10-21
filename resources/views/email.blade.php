<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Welcome to this mail System.</h1>
	<form action="email" method="post">
		{{csrf_field()}}
		To:<input type="email" name="email"><br>
		Message: <textarea rows="5" cols="20" name="msg"></textarea>
		<input type="submit" value="submit">
	</form>
		
</body>
</html>