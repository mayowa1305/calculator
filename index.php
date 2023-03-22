<!DOCTYPE html>
<html>
<head>
	<title>Advanced Calculator</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}

		h1 {
			text-align: center;
		}

		.calculator {
			margin: 0 auto;
			width: 400px;
			padding: 10px;
			background-color: #f5f5f5;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		input[type="number"] {
			width: 100%;
			height: 30px;
			padding: 5px;
			margin-bottom: 10px;
			border: 1px solid #ccc;
			border-radius: 3px;
			font-size: 16px;
			box-sizing: border-box;
		}

		input[type="submit"] {
			width: 100%;
			height: 40px;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 3px;
			font-size: 18px;
			cursor: pointer;
			transition: background-color 0.3s ease-in-out;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
		}

		.output {
			font-size: 24px;
			font-weight: bold;
			margin-top: 20px;
			text-align: center;
		}

		.error {
			color: red;
			font-size: 16px;
			margin-top: 10px;
			text-align: center;
		}

		table {
			margin: 0 auto;
			margin-top: 20px;
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			padding: 8px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}

		th {
			background-color: #4CAF50;
			color: white;
		}

		.units {
			margin-top: 20px;
			font-size: 16px;
			font-weight: bold;
			text-align: center;
		}

		select {
			width: 100%;
			height: 30px;
			padding: 5px;
			margin-bottom: 10px;
			border: 1px solid #ccc;
			border-radius: 3px;
			font-size: 16px;
			box-sizing: border-box;
		}

	</style>
</head>
<body>
	<h1>Advanced Calculator</h1>
	<div class="calculator">
		<form method="post" action="">
			<input type="number" name="num1" placeholder="Enter first number">
			<select name="operator">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="x">*</option>
				<option value="/">/</option>
				<option value="^">^</option>
				<option value="sqrt">sqrt</option>
				<option value="log">log</option>
				<option value="sin">sin</option>
				<option value="cos">cos</option>
				<option value="tan">tan</option>
			</select>
			<input type="number" name="num2" placeholder="Enter second number">
			<input type="submit" name="submit" value="Calculate">
		</form>
		<?php
			if(isset($_POST['submit'])){
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];
				$operator = $_POST['operator'];

				switch($operator) {
					case "+":
						echo $num1 + $num2;
						break;
					case "-":
						echo $num1 - $num2;
						break;
					case "x":
						echo $num1 * $num2;
						break;
					case "/":
						echo $num1 / $num2;
						break;
					case "^":
						echo $num1 ** $num2;
						break;
					case "sqrt":
						echo sqrt($num2);					
						break;
					case "log":
						echo log($num2);
						break;
					case "sin":
						echo sin($num2);
						break;
					case "cos":
						echo cos($num2);
						break;
					case "tan":
						echo tan($num2);
						break;			
				}

            }
            ?>
        </body>    
        </html>