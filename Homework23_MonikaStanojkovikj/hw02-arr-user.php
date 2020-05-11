
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wheather</title>
</head>
<body>
<h2>How's Your Wheather</h2>
<h3>with arrays</h3>
<form action="" method="POST">
        <p>Please enter your information:</p>
        <label for="city">City:</label>
        <input type="text" name="city" id="city">
        <label for="month">Month:</label>
        <input type="text" name="month" id="month">
        <label for="city">Year:</label>
        <input type="text" name="year" id="year">
        <br>
        <p>Please choose the kinds of weather you experienced from the list below.</p>
        <p>Choose all that applay.</p>
        <br>
        <input type="checkbox" id="rain" name="wheather" value="rain">
        <label for="rain">Rain</label><br>
        <input type="checkbox" id="sunshine" name="wheather" value="sunshine">
        <label for="sunshine">Sunshine</label><br>
        <input type="checkbox" id="clouds" name="wheather" value="clouds">
        <label for="clouds">Clouds</label><br>
        <input type="checkbox" id="hail" name="wheather" value="hail">
        <label for="hail">Hail</label><br>
        <input type="checkbox" id="sleet" name="wheather" value="sleet">
        <label for="sleet">Sleet</label><br>
        <input type="checkbox" id="snow" name="wheather" value="snow">
        <label for="snow">Snow</label><br>
        <input type="checkbox" id="wind" name="wheather" value="wind">
        <label for="wind">Wind</label><br>
        <br>
        <button type="submit">Go</button>
    </form>
    
</body>
</html>
<?php
    if((isset($_POST['city'])) && (isset($_POST['month'])) && (isset($_POST['year']))){
        $city = $_POST['city'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $wheater =[$_POST['wheather']];
        

        echo "In " .$city. " in the month of ".$month." ".$year. " you observed the following wheather: "; 
    //    var_dump($wheater);
    // UNFINISHED// I HOPE, TOMORROW WILL BE DONE
    }
    
?>