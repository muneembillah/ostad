<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 6: Comparison Tool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container my-5">
<?php
if ( isset( $_POST['submit'] ) ) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number1'];
    // check numeric value 
    if(is_numeric($number1) && is_numeric($number2)){
        $compare = ($number1 > $number2) ? "<b>Result</b>: The larger number is: $number1" : '<b>Result</b>: The larger number is: '.$number2;
    }else{
        $errorNumber = "Please insert number/numeric value";
    }
}
?>
        <div class="row mt-3">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1 class="text-center">Task 6: Comparison Tool</h1>
                <div class="card p-3">
                    <div class="text-center text-danger mb-3">
                        <?php echo (!empty($errorNumber)) ? $errorNumber : ""; ?>
                    </div>
                    <form action="" method="post">
                        <div class="my-3">
                            <label for="temperature"><b>Number 1:</b></label><br>
                            <input class="form-control" type="number" id="number1" name="number1" placeholder="0" required>
                        </div>
                        <div class="my-3">
                            <label for="temperature"><b>Number 2:</b></label><br>
                            <input class="form-control" type="number" id="number2" name="number2" placeholder="0" required>
                        </div>
                        <div class="text-center">
                            <input class="btn btn-primary my-3" type="submit" name="submit" value="Compare" style="width:250px;">
                        </div>
                        <div class="p-4 bg-light text-center">
                            <h3><?php if ( !empty( $compare ) ) {echo $compare;}?></h3>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>