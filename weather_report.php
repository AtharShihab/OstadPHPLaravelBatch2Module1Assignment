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
                    <label class="form-label col-md-2" for="temperature">Temperature (°C):</label>
                    <input class="form-control col-md-6" name="temperature" id="temperature" placeholder="Enter temperature in Celsius" type="text">
                </div>
                <input class="btn btn-success" type="submit" value="Submit">
            </form>
        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];

        if (is_numeric($temperature)) {


            if ($temperature < 10) {
                echo '<div class="container"><div class="alert alert-success"> It\'s freezing! </div></div>';
            } else if ($temperature >= 10 && $temperature <= 20) {
                echo '<div class="container"><div class="alert alert-success"> It\'s cool! </div></div>';
            } else if ($temperature > 20 && $temperature <= 30) {
                echo '<div class="container"><div class="alert alert-success"> It\'s warm! </div></div>';
            } else if ($temperature > 30) {
                echo '<div class="container"><div class="alert alert-success"> It\'s burning! </div></div>';
            }
        } else {
            echo '<div class="container"><div class="alert alert-danger">Invalid temperature</div></div>';
        }
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>