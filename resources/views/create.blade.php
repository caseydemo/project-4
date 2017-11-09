@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
	<title>Evil Messages!</title>
</head>
<body>

	<h1>Compose a new EVIL MESSAGE!!!</h1>

	<a href="/home">
		<button class="btn btn-info">BACK TO EVIL MESSAGES!!!</button>
	</a>
	<br>
	<br>

	<form action="/message" method="post">
		<label for="recipient">EVIL RECIPIENT!</label>
		  <select name="recipient_id">
		    <option value="1">gru</option>
		    <option value="2">stuart</option>
		    <option value="3">kevin</option>
		    <option value="4">bob</option>
		    <option value="5">scarlet</option>
		  </select>
		  <br><br>


		<label for="subject">EVIL SUBJECT!</label>
		<input type="text" name="subject" value=""><br><br>


		<label for="message">EVIL MESSAGE!</label>
		<input type="text" name="message" value=""><br><br>

		{{ method_field('POST') }}
  		{{ csrf_field() }}

		<label for="submit">WORLD DOMINATION!  </label>
		<button type="submit" name="submit" value="submit">(send your message)</button><br>

	</form>

</body>
</html>