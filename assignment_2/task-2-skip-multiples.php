<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task 2: Skip Multiples of 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
<?php
function encounters() {
    for ( $i = 1; $i < 50; $i++ ) {
        if ( $i % 5 == 0 ) {
            continue;
        }
        echo "<span class='badge bg-dark mx-1'> $i </span>";
    }
}
?>
    <section class="container">
        <h1 class="py-5 text-center">Task 2: Skip Multiples of 5</h1>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="border border-warning p-2 py-3">
                <div> <?php encounters();?></div>
              </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>