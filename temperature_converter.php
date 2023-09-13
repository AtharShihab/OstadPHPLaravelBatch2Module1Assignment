<!DOCTYPE html>
<html>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperature = $_POST["temperature"];
    $convDirectionFrom = $_POST["convDirectionFrom"];
    $convDirectionTo = $_POST["convDirectionTo"];
    
    $isCelsiusToFahrenheit = ($temperature != null && $temperature != "") && $convDirectionFrom == "Celsius" && $convDirectionTo == "Fahrenheit";
    $isFahrenheitToCelsius = ($temperature != null && $temperature != "") && $convDirectionFrom == "Fahrenheit" && $convDirectionTo == "Celsius";
    
    if ($isCelsiusToFahrenheit) {
        $result = ($temperature * 9/5) + 32;
        echo "{$temperature}°C is {$result}°F";
    } elseif ($isFahrenheitToCelsius) {
        $result = ($temperature - 32) * 5/9;
        echo "{$temperature}°F is {$result}°C";
    } else {
        echo "Invalid conversion parameters";
    }
}
   
?>


<form action="" method="POST">
	<label for="temperature">Temperature:</label>
    <input name="temperature" id="temperature" type="text">

    <label for="convDirectionFrom">From:</label>
    <select name="convDirectionFrom" id="convDirectionFrom">
      <option value="Celsius">Celsius</option>
      <option value="Fahrenheit">Fahrenheit</option>
    </select>
    <label for="convDirectionTo">To:</label>
    <select name="convDirectionTo" id="convDirectionTo">
      <option value="Celsius">Celsius</option>
      <option value="Fahrenheit">Fahrenheit</option>
    </select>
    <input type="submit" value="Submit">
</form>



</body>
</html>