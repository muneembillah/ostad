<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3: Grade Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container my-5">
<?php
if(isset($_POST['calculate'])){
$score1 = $_POST['score1'];
$score2 = $_POST['score2'];
$score3 = $_POST['score3'];
if (($score1 <= 100 && $score1 >= 0) && ($score2 <= 100 && $score2 >= 0) && ($score3 <= 100 && $score3 >= 0) && is_numeric($score1) && is_numeric($score2) && is_numeric($score3)) {
$arrayScore = [$score1, $score2, $score3];
$scoreLength = count($arrayScore);

if(is_numeric($score1) && is_numeric($score2) && is_numeric($score3)){
$total = $score1 + $score2 + $score3;
$average = $total/$scoreLength;
if ($average >= 80 && $average <=100) {
    $average = "A";
} elseif ($average >= 70 && $average <=79) {
    $average = "B";
} elseif ($average >= 60 && $average <=69) {
    $average = "C";
} elseif ($average >= 33 && $average <=59) {
    $average = "D";
} else {
    $average = "F";
}
}
} else {
$errorAvg = "Please input a valid data";
}
}
?>
        <div class="row mt-3">
            <h1 class="text-center">Task 3: Grade Calculator</h1>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card p-3">
                    <div class="p-3 text-center text-danger">
                        <?php echo (!empty($errorAvg)) ? $errorAvg : "" ?>
                    </div>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="score1" class="form-label">Test Score 1</label>
                            <input type="number" name="score1" class="form-control" id="score1" placeholder="0" required>
                        </div>
                        <div class="mb-3">
                            <label for="score2" class="form-label">Test Score 2</label>
                            <input type="number" name="score2" class="form-control" id="score2" placeholder="0" required>
                        </div>
                        <div class="mb-3">
                            <label for="score3" class="form-label">Test Score 3</label>
                            <input type="number" name="score3" class="form-control" id="score3" placeholder="0" required>
                        </div>
                        <div class="mb-3 text-center">
                            <button name="calculate" class="btn btn-primary" style="width: 250px;">Calculate</button>
                        </div>
                    </form>
                    <div class="p-3 bg-light">
                        <h3>Result: <b><?php echo ( !empty( $average ) ) ? $average : "No Result Found!" ?></b></h3>
                        <br>
                        <small> Score 80-100 = A | Score 70-79 = B | Score 60-69 = C | Score 33-59 = D | Score 0-32 = F</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>