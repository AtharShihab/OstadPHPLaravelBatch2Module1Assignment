<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

</head>

<body>



    <div class="container">
        <div class="mb-3">
            <form class="mb-4" action="" method="POST">
                <div class="mb-3">
                    <label class="form-label col-md-2" for="temperature">Temperature:</label>
                    <input class="form-control col-md-6" name="temperature" id="temperature" type="text">
                </div>


                <div class="mb-3">
                    <label class="form-label" for="convDirectionFrom">From:</label>
                    <select class="form-control" name="convDirectionFrom" id="convDirectionFrom">
                        <option value="Celsius">Celsius</option>
                        <option value="Fahrenheit">Fahrenheit</option>
                    </select>
                </div>
                <div class="mb-3">

                    <label class="form-label" for="convDirectionTo">To:</label>
                    <select class="form-control" name="convDirectionTo" id="convDirectionTo">
                        <option value="Celsius">Celsius</option>
                        <option value="Fahrenheit">Fahrenheit</option>
                    </select>
                </div>
                <input class="btn btn-success" type="submit" value="Submit">
            </form>
        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        $convDirectionFrom = $_POST["convDirectionFrom"];
        $convDirectionTo = $_POST["convDirectionTo"];

        $isCelsiusToFahrenheit = ($temperature != null && $temperature != "") && $convDirectionFrom == "Celsius" && $convDirectionTo == "Fahrenheit";
        $isFahrenheitToCelsius = ($temperature != null && $temperature != "") && $convDirectionFrom == "Fahrenheit" && $convDirectionTo == "Celsius";

        $isCelsiusToCelsius = ($temperature != null && $temperature != "") && $convDirectionFrom == "Celsius" && $convDirectionTo == "Celsius";
        $isFahrenheitToFahrenheit = ($temperature != null && $temperature != "") && $convDirectionFrom == "Fahrenheit" && $convDirectionTo == "Fahrenheit";

        if ($isCelsiusToFahrenheit) {
            $result = ($temperature * 9 / 5) + 32;
            echo '<div class="container"><div class="alert alert-success"> ' . $temperature . '°C is ' . $result . '°F </div></div>';
        } elseif ($isFahrenheitToCelsius) {
            $result = ($temperature - 32) * 5 / 9;
            echo '<div class="container"><div class="alert alert-success"> ' . $temperature . '°F is ' . $result . '°C </div></div>';
        } else if ($isCelsiusToCelsius) {
            echo '<div class="container"><div class="alert alert-success"> ' . $temperature . '°C is ' . $temperature . '°C </div></div>';
        } else if ($isFahrenheitToFahrenheit) {
            echo '<div class="container"><div class="alert alert-success"> ' . $temperature . '°F is ' . $temperature . '°F </div></div>';
        } else {
            echo '<div class="container"><div class="alert alert-danger">Invalid conversion parameters</div></div>';
        }
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>