<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task 1: Looping with Increment using a Function</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
<?php
// for loop
function evennumbersfor( $start = 1, $end = 20, $step = 2 ) {
    for ( $a = $start; $a < $end; $a++ ) {
        if ( $a % $step == 0 ) {
            echo "<span class='badge bg-primary mx-1'>" . $a . "</span>";
        }
    }
}
// while loop
function evennumberswhile( $start = 1, $end = 20, $step = 2 ) {
    while ( $start <= $end ) {
        if ( $start % $step == 0 ) {
            echo "<span class='badge bg-success mx-1'>" . $start . "</span>";
        }
        $start++;
    }
}
// do-while loop
function evennumbersdowhile( $start = 1, $end = 20, $step = 2 ) {
    do {
        if ( $start % $step == 0 ) {
            echo "<span class='badge bg-dark mx-1'>" . $start . "</span>";
        }
        $start++;
    } while ( $start <= $end );
}
?>
    <section class="container">
        <h1 class="py-5 text-center">Task 1: Looping with Increment using a Function</h1>
        <div class="row">
            <div class="col-md-2">&nbsp;</div>
            <div class="col-md-8">
              <div class="border border-warning p-2 py-3">
                <div><span class="fw-bold">For loop:</span> <?php evennumbersfor();?></div><br>
                <div><span class="fw-bold">While loop:</span> <?php evennumberswhile();?></div><br>
                <div><span class="fw-bold">Do-while loop:</span> <?php evennumbersdowhile();?></div><br>
              </div>
            </div>
            <div class="col-md-2">&nbsp;</div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>