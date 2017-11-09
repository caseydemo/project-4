@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
	<title>write message</title>
</head>
<body>

	<h1>Write new message</h1>

	<form action="/message" method="post">
		<label for="recipient">recipient</label>
		  <select name="recipient_id">
		    <option value="1">gru</option>
		    <option value="2">stuart</option>
		    <option value="3">kevin</option>
		    <option value="4">bob</option>
		    <option value="5">scarlet</option>
		  </select>
		  <br><br>


		<label for="subject">subject</label>
		<input type="text" name="subject" value=""><br><br>


		<label for="message">message</label>
		<input type="text" name="message" value=""><br><br>

		{{ method_field('POST') }}
  		{{ csrf_field() }}

		<label for="submit">send message</label>
		<button type="submit" name="submit" value="submit">hey im a button</button><br>

	</form>

</body>
</html>