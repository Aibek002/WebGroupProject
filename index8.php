<!DOCTYPE html>
<html>

<head>
	<title>Example</title>
	<style>
		body {
			display: flex;
			align-items: center;
			justify-content: center;
			min-height: 100vh;
			font-family: arial, sans-serif;
		}

		input,
		textarea {
			display: block;
			width: 300px;
			font-size: 18px;
			margin: 7px 0px;
		}

		label {
			display: block;
			padding: 2px 0px;
		}

	</style>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/mobile.css">
</head>

<body>
	<header>

		<div id="flexHeader">
			<div>
				<p id="tarihs">
					<a href="http://localhost/WebGroupProject/index1.php"> <button id="tarih">Kazakhs<br>history</button></a>

				</p>
			</div>
			<div>
				<p id="tarihs">
					<a href="http://localhost/WebGroupProject/index2.php"><button id="tarih">National <br> food</button></a>

				</p>
			</div>

			<div>
				<p id="tarihs">
					<a href="http://localhost/WebGroupProject/index3.php"> <button id="tarih">National<br>drink</button></a>

				</p>
			</div>
			<div>
				<p id="tarihs">
					<a href="http://localhost/WebGroupProject/index4.php"> <button id="tarih">National<br>games</button></a>

				</p>
			</div>
			<div>
				<p id="tarihs">
					<a href="http://localhost/WebGroupProject/index5.php"> <button id="tarih">Kazakhs<br>clothes</button></a>

				</p>
			</div>
			<div>
				<p id="tarihs">
					<a href="http://localhost/WebGroupProject/index6.php"> <button id="tarih">Kazakhs<br>sport</button></a>

				</p>
			</div>
			<div>
				<p id="tarihs">
					<a href="http://localhost/WebGroupProject/index7.php"> <button id="tarih">National <br>dances</button></a>
				</p>
			</div>
			<div>
				<p id="tarihs">
					<a href="http://localhost/WebGroupProject/index8.php"> <button id="tarih">Add Info<br>or quation</button></a>
			</div>

		</div>

	</header>
	<div id='conf'>Add Message</div>
	<form method="post" action="send.php">
		<label>Name:</label>
		<input type="text" name="name">

		<label>Message:</label>
		<textarea name="message"></textarea>

		<input type="submit" name="btn">
	</form>
</body>

</html>