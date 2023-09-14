<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2: Temperature Converter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container my-5">
        <div class="row mt-3">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1 class="text-center pb-3">Task 2: Temperature Converter</h1>
                <div class="card p-3">
<?php
if ( isset( $_POST['submit'] ) ) {
$value = $_POST['temp'];
$convertTo = $_POST['temperature'];
// check numeric value 
if(is_numeric($value)){
    if ( $convertTo == "F" ) {
        $result = 5 / 9 * ( $value - 32 );
        $result = $result . "&deg; Celsius";
    } elseif ( $convertTo == "C" ) {
        $result = $value * 9 / 5 + 32;
        $result = $result . "&deg; Fahrenheit";
    } else {
        echo "Please Input Information";
    }
}else{
    $errorTemp = "Please Insert Number/Numeric value";
}
}
?>
                <form action="" method="post">

                    <label for="temperature"><b>Convert To:</b></label><br><br>
                    <select class="form-select" id="temperature" name="temperature" required>
                        <option value="">please select one</option>
                        <option value="C">Celsius To Fahrenheit</option>
                        <option value="F">Fahrenheit To Celsius</option>
                    </select>

                    <br>

                    <label for="temperature"><b>Temperature:</b></label><br><br>
                    <input class="form-control" type="number" id="temp" name="temp" placeholder="0">
                    <br><br>
                    <center><input class="btn btn-primary" type="submit" name="submit" value="Convert" style="width:250px;"></center>
                    <div class="text-center text-danger mb-3">
                    <?php echo (!empty($errorTemp)) ? $errorTemp : ""; ?>
                    </div>
                    <div class="p-4 bg-light text-center">
                        <h3><b>Result: </b><?php if ( !empty( $result ) ) {echo $result;}?></h3>
                    </div>
                </form>

                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>