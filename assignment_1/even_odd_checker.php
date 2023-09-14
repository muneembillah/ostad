<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 4: Even or Odd Checker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container my-5">
<?php 
if (isset($_POST['number_check'])) {
    $number = $_POST['number'];
    if(is_numeric($number) && $number > 0){
        if($number % 2 == 0){
            $result = $number." is an <b>Even Number</b>";
        } else {
            $result = $number." is an <b>Odd Number</b>";
        }
    } else {
        $errorcheck = "Please insert a valuable number";
    }
}
?>
        <div class="row mt-3">
            <h1 class="text-center">Task 4: Even or Odd Checker</h1>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card p-3">
                    <div class="text-center text-danger p-3">
                        <?php echo (!empty($errorcheck)) ? $errorcheck : ""; ?>
                    </div>
                    <form action="" method="post">
                        <label for="temperature"><b>Number:</b></label><br><br>
                        <input type="number" class="form-control" name="number" placeholder="0">
                        <br>
                        <center><button class="btn btn-primary" type="submit" name="number_check" style="width: 250px;">Check</button></center>
                        <br><br>
                        <h3><b>Result</b>: <?php echo (!empty($result)) ? $result : ""; ?></h3>
                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>