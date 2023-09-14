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
                    <label class="form-label col-md-2" for="scoreOne">1st Score:</label>
                    <input class="form-control col-md-6" name="scoreOne" id="scoreOne" type="text">
                </div>

                <div class="mb-3">
                    <label class="form-label col-md-2" for="scoreTwo">2nd Score:</label>
                    <input class="form-control col-md-6" name="scoreTwo" id="scoreTwo" type="text">
                </div>

                <div class="mb-3">
                    <label class="form-label col-md-2" for="scoreThree">3rd Score:</label>
                    <input class="form-control col-md-6" name="scoreThree" id="scoreThree" type="text">
                </div>

                <input class="btn btn-success" type="submit" value="Submit">
            </form>
        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $scoreOne = $_POST["scoreOne"];
        $scoreTwo = $_POST["scoreTwo"];
        $scoreThree = $_POST["scoreThree"];
        $sum = 0;
        if (
            is_numeric($scoreOne) && $scoreOne >= 0 && $scoreOne <= 100 &&
            is_numeric($scoreTwo) && $scoreTwo >= 0 && $scoreTwo <= 100 &&
            is_numeric($scoreThree) && $scoreThree >= 0 && $scoreThree <= 100
        ) {
            $sum = $scoreOne + $scoreTwo + $scoreThree;
            $avgScore = $sum / 3;

            $isGradeF = $avgScore >= 0 && $avgScore < 33;
            $isGradeD = $avgScore >= 33 && $avgScore < 45;
            $isGradeC = $avgScore >= 45 && $avgScore < 60;
            $isGradeB = $avgScore >= 60 && $avgScore < 80;
            $isGradeA = $avgScore >= 80 && $avgScore < 100;


            if ($isGradeF) {
                echo '<div class="container"><div class="alert alert-danger"> Your avg Score: ' . $avgScore . '. Your grade: F </div></div>';
            } else if ($isGradeD) {
                echo '<div class="container"><div class="alert alert-success"> Your avg Score: ' . $avgScore . '. Your grade: D </div></div>';
            } else if ($isGradeC) {
                echo '<div class="container"><div class="alert alert-success"> Your avg Score: ' . $avgScore . '. Your grade: C </div></div>';
            } else if ($isGradeB) {
                echo '<div class="container"><div class="alert alert-success"> Your avg Score: ' . $avgScore . '. Your grade: B </div></div>';
            } else if ($isGradeA) {
                echo '<div class="container"><div class="alert alert-success"> Your avg Score: ' . $avgScore . '. Your grade: A </div></div>';
            } else {
                echo '<div class="container"><div class="alert alert-danger">All scores must be number between 0 and 100.</div></div>';
            }
        } else {
            echo '<div class="container"><div class="alert alert-danger">All scores must be number between 0 and 100.</div></div>';
        }
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>