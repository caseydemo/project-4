@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
	<title>write message</title>
</head>
<body>

	<h1>Write new message</h1>

	<form action="/home/{id}" method="post">
		<label for="recipient">recipient</label>
		<input type="text" name="recipient" value=""><br>

		<label for="message">message</label>
		<input type="text" name="message" value=""><br>

		{{ method_field('POST') }}
  		{{ csrf_field() }}

		<label for="submit">send message</label>
		<button type="submit" name="submit" value="submit">hey im a button</button><br>

	</form>

</body>
</html>