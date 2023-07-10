<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ashray payment portal</title>
	<link rel="stylesheet" type="text/css" href="donate.css">
</head>

<body>

	<header style="width: 100vw;
	min-height: 100vh;
	background: #223C75;
	font-size: 1.2rem;
	display: flex;
	justify-content: center;
	align-items: center;">
		<div class="container" style = "background: white;
	max-width: 1000px;
	min-height: 500px;
	display: flex;
	justify-content:space-between;
	align-items: flex-start;
	padding: 0.5rem 1.5rem;+">
			<div class="left" style="flex-basis: 50%;">
				<h3>BILLING ADDRESS</h3>
				<form method="POST" action="service_pay.php">
					Full name
					<input type="text" name="username" placeholder="Enter name" required>
					Service <br>
					<select style="width: 100%;
	padding: 0.5rem 0.7rem;
	margin: 0.5rem 0;
	outline: none;" name="service" required>
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
							<input type="number" name="" placeholder="Zip code" required> <br>
						</label> <br>
						
					</div> <br>
					<input type="submit" value="Proceed to Checkout">
				</form>
			</div>
			<div class="right" style="flex-basis: 50%";>
				<h3>PAYMENT FOR ASHRAY</h3>
				<form action="LoginHome.php">
					Accepted Card <br>
					<img src="images/card.jpg" width="200">
					<br><br>

					Credit card number
					<input type="text" name="" maxlength=12 placeholder="Enter card number">

					Exp month
					<input type="text" name="" placeholder="Enter Month">
					<div id="zip">
						<label>
							Exp year
							<select>
								<option>Choose Year..</option>
								<option>2024</option>
								<option>2025</option>
								<option>2026</option>
								<option>2027</option>
							</select>
						</label>
						<label>
							CVV
							<input type="number" name="" placeholder="CVV">
						</label><br>
						
					</div> <br><br><br><br>
					<input type="submit"  style=" background-color:#223C75; color:white " value="Return to home page">
				</form>
			</div>
		</div>
	</header>
	
</body>

</html>