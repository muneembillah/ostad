<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task 3: Break on Condition</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
<?php
function fibonacci( $n = 15 ) {
    if ( isset( $_POST['submit'] ) && $_POST['fibonacci_number'] != "" ) {
        $n = $_POST['fibonacci_number'];
    }
    $f1 = 0;
    $f2 = 1;
    for ( $i = 0; $i < $n; $i++ ) {
        $f3 = $f1 + $f2;
        $f1 = $f2;
        $f2 = $f3;
        echo "<span class='badge bg-dark mx-1'> $f3 </span>";
    }
}
?>
    <section class="container">
        <h1 class="py-5 text-center">Task 3: Break on Condition</h5>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 text-center">
              <div class="border border-warning p-2 py-3">
                <form class="py-4" action="" method="post">
                    <label for="number"><b>Number</b></label><br><br>
                    <input name="fibonacci_number" class="form-control" type="number" placeholder="0"><br>
                    <button name="submit" class="btn btn-primary" type="submit">Calculate</button>
                </form>
                <div> <?php fibonacci();?></div>
              </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>