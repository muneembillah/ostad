<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1: Personal Information Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

    <div class="container my-5">
        <div class="row mt-3">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1 class="text-center pb-3">Task 1: Personal Information</h1>

                <?php
                $name="Md Abdul Muneem Billah";
                $age=32;
                $country="Bangladesh";
                $introduction="I am Muneem Billah. I have completed B.Sc. in Computer Science & Engineering (CSE) in 2015. Currently I am learning PHP & Laravel Web Development From OSTAD.";
                ?>


                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <td><?php echo $name; ?></td>
                        </tr>
                        <tr>
                            <th>Age</th>
                            <td><?php echo $age; ?></td>
                        </tr>
                        <tr>
                            <th>Country</th>
                            <td><?php echo $country; ?></td>
                        </tr>
                        <tr>
                            <th>Brief Introduction</th>
                            <td><?php echo $introduction; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>