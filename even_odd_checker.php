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
                    <label class="form-label col-md-2" for="number">Enter your number:</label>
                    <input class="form-control col-md-6" name="number" id="number" type="text">
                </div>
                <input class="btn btn-success" type="submit" value="Submit">
            </form>
        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        if (is_numeric($number)) {


            if ($number == 0) {
                echo '<div class="container"><div class="alert alert-danger">0.</div></div>';
            } else if ($number % 2 == 0) {
                echo '<div class="container"><div class="alert alert-success">Even number.</div></div>';
            } else {
                echo '<div class="container"><div class="alert alert-success">Odd number.</div></div>';
            }
        } else {
            echo '<div class="container"><div class="alert alert-danger">Not a number.</div></div>';
        }
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>