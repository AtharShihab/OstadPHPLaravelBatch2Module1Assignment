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
                    <label class="form-label col-md-2" for="firstNumber">1st Number:</label>
                    <input class="form-control col-md-6" name="firstNumber" id="firstNumber" type="text">
                </div>
                <div class="mb-3">
                    <label class="form-label col-md-2" for="secondNumber">1st Number:</label>
                    <input class="form-control col-md-6" name="secondNumber" id="secondNumber" type="text">
                </div>
                <div class="mb-3">

                    <label class="form-label" for="operator">Select Operator:</label>
                    <select class="form-control" name="operator" id="operator">
                        <option value="addition">+</option>
                        <option value="subtraction">-</option>
                        <option value="multiplication">*</option>
                        <option value="division">/</option>
                    </select>
                </div>
                <input class="btn btn-success" type="submit" value="Submit">
            </form>
        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstNumber = $_POST["firstNumber"];
        $secondNumber = $_POST["secondNumber"];
        $operator = $_POST["operator"];

        if (is_numeric($firstNumber) && is_numeric($secondNumber)) {

            $result = 0;
            if ($operator == "addition") {
                $result = $firstNumber + $secondNumber;
            } else if ($operator == "subtraction") {
                $result = $firstNumber - $secondNumber;
            } else if ($operator == "multiplication") {
                $result = $firstNumber * $secondNumber;
            } else {
                $result = $firstNumber / $secondNumber;
            }
            echo '<div class="container"><div class="alert alert-success"> The result is: ' . $result . '</div></div>';
        } else {
            echo '<div class="container"><div class="alert alert-danger">Invalid number</div></div>';
        }
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>