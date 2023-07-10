<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ashray payment portal</title>
	<link rel="stylesheet" type="text/css" href="donate.css">
</head>
<body>
	<header>
	<div class="container">
		<div class="left">
			<h3>BILLING ADDRESS</h3>
			<form method="POST" action="service_pay.php">
				Full name
				<input type="text" name="username" placeholder="Enter name" required>
				Service
				<select placeholder="Choose service" name="service" required>
							<option>Educational help</option>
							<option>Food help</option>
							<option>Medicine help</option>
						</select>
				<br>
				Contact
				<input type="text" name="contact" placeholder="Enter phone number" required>
				
				Amount
				<input type="text" name="amount" placeholder="Enter amount" required>
				<div id="zip">
					<label>
						State
						<select required>
							<option>Choose State..</option>
							<option>Tamil Nadu</option>
							<option>Haryana</option>
							<option>Uttar Pradesh</option>
							<option>Madhya Pradesh</option>
						</select>
					</label>
						<label>
						Zip code
						<input type="number" name="" placeholder="Zip code" required>
					</label>
				</div>
			</form>
		</div>
		<div class="right">
			<h3>PAYMENT FOR ASHRAY</h3>
			<form>
				Accepted Card <br>
				<img src="images/card.jpg" width="200">
				<br><br>

				Credit card number
			<input type="text" name="" placeholder="Enter card number" required>
				
				Exp month
				<input type="text" name="" placeholder="Enter Month" required>
				<div id="zip">
					<label>
						Exp year
						<select required>
							<option>Choose Year..</option>
							<option>2024</option>
							<option>2025</option>
							<option>2026</option>
							<option>2027</option>
						</select>
					</label>
						<label>
						CVV
						<input type="number" name="" placeholder="CVV" required>
					</label>
				</div>
			</form>
			<input type="submit" value="Proceed to Checkout" onclick="check()">
		</div>
	</div>
	</header>
<script>
		function check()
		{
			alert("Payment done!!");
		}
</script>
</body>
</html>