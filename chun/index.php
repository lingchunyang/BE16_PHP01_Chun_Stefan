<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP Day1</title>
</head>

<body>
    <div class="container d-flex justify-content-start flex-column align-items-center">
        <div class="d-flex justify-content-start flex-column align-items-center pb-3">
            <h1>CLASSWORK</h1>
            <div class="d-flex justify-content-start flex-column align-items-center">
                <h2>Exercise 1</h2>
                <div class="">
                    <?php
                    $name = 'Ling-chun';
                    echo $name;
                    ?>
                </div>
            </div>
            <div class="d-flex justify-content-start flex-column align-items-center">
                <h2>Exercise 2</h2>
                <div class="">
                    <?php
                    $name = 'Ling-chun';
                    $birthYear = 1989;
                    $age = 120;
                    $job = "Black Magician";
                    echo "Hi, my name is <strong>$name</strong>, and I am <strong>$age</strong> years old, and I work as a <strong>$job</strong>.";
                    ?>
                </div>
            </div>
            <div class="d-flex justify-content-start flex-column align-items-center">
                <h2>Exercise 3</h2>
                <div class="">
                    <?php
                    $name = 'Ling-chun';
                    $birthYear = 1900;
                    $date = date("Y");
                    $age = $date - $birthYear;
                    $job = "Black Magician";
                    echo "Hi, my name is <strong>$name</strong>, and I am <strong>$age</strong> years old, and I work as a <strong>$job</strong>.";
                    ?>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-start flex-column align-items-center pb-3">
            <h1>ADVANCED</h1>
            <div class="d-flex justify-content-start flex-column align-items-center">
                <h2>Exercise 1</h2>
                <div class="">
                    <?php
                    require "advanced.php";
                    ?>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-start flex-column align-items-center pb-3">
            <h1>Challenge</h1>
            <div class="d-flex justify-content-start flex-column align-items-center">
                <h2>Exercise 1</h2>
                <div class="">
                    <?php
                    require "advanced.php";
                    ?>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>