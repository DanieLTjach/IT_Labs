<?php
    $result = $_POST['language'];
    $file = 'results.txt';
    $other_results = file_get_contents($file);
    $temp_array = explode(";", $other_results);
    $results_array = [];

    for($i = 0; $i < count($temp_array); $i++){
        $temp = explode(":", $temp_array[$i]);

        if(count($temp) == 2){
            $results_array[$i] = $temp;
        } else {
            $results_array[$i] = [$temp_array[$i], 0];
        }
    }

    switch ($result){
        case "Python":
            $results_array[0][1]++;
            break;
        case "Java":
            $results_array[1][1]++;
            break;
        case "C++":
            $results_array[2][1]++;
            break;
        case "JavaScript":
            $results_array[3][1]++;
            break;
        case "PHP":
            $results_array[4][1]++;
            break;
    }

    for($i = 0; $i < count($results_array); $i++){
        $temp_array[$i] = implode(":", $results_array[$i]);
    }

    file_put_contents($file, implode(";", $temp_array));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>
<body>
<div class="main">
    Ви обрали мову програмування:
    <?php
        echo $result."<br>";
        for($i = 0; $i < count($results_array)-1; $i++){
            echo $results_array[$i][0].":".$results_array[$i][1]."<br>";
        }
    ?>
</div>
</body>
</html>