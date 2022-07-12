<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PHPDay1</title>
</head>
    <body>
        <div class="wrapper d-flex flex-column justify-content-center align-items-center">
            <h2>Classwork</h2>
            <div class="d-flex flex-column justify-content-start w-75">
                <h4>Exercise 1</h4>
                <div class="d-flex justify-content-center h4 test mb-3">
                    <?php $f_name="Stefan"; echo $f_name; ?>
                </div>
                <br>
                <h4>Exercise 2</h4>
                <div class="mx-5 mb-3">
                    <?php $name="Stefan"; $age=37; $job_title="Full Stack Web Developer";  echo "hi, my name is {$name}, i am {$age}, and i work as a {$job_title}";?>
                </div>
                <h4>Exercise 3</h4>
                <div class="mx-5">
                    <?php $team=["Mark", "John", "Georg", "Lisa"]; echo "the third player in the team is {$team[2]}" ?>
                </div>
            </div>
            <div class="d-flex flex-column justify-content-start w-75 mt-5">
                <h4>Advanced</h4>
                <div class="mx-5">
                    <?php $array = array(
                            "Pokemon" => [
                                "Bulbasaur" => ["Plant",2,3,4],
                                "Charmander" => ["Fire",2,3,4]
                                ],
                            "game" =>[
                                "Super Mario" => [1,2,3,"World"]
                                ],
                            "cartoon" => [
                                "Bugs Bunny" => [1,2,3,4]
                            ]); 
                        echo $array["Pokemon"]["Bulbasaur"][0]."<br>";
                        echo $array["Pokemon"]["Charmander"][0]."<br>";
                        echo $array["game"]["Super Mario"][3]."<br>";
                        ?>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>