<?php 
    echo "<h2>How's Your Wheather</h2>";
    echo "<h3>with function</h3>";
?>

<?php if((isset($_POST['city'])) && (isset($_POST['month'])) && (isset($_POST['year']))):
        $city = $_POST['city'];
        $month = $_POST['month'];
        $year = $_POST['year'];        

        echo "In " .$city. " in the month of ".$month." ".$year. " you observed the following wheather:"; 

    if(!empty($_POST['weather'])) {

        foreach($_POST['weather'] as $value){
            
            echo "<li>".$value."</li>";
        }
    }    
?>

<?php else: ?>
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
        <?php         
            
            $check = ["Rain", "Sunshine", "Clouds", "Hail", "Sleet", "Snow", "Wind"];
            function createCheckbox($check){
                for($i=0 ; $i < count($check); $i++){
                    echo '<input type="checkbox" name="weather[]" value=" '.$check[$i].' ">';
                    echo '<label for=" '.$check[$i].' "> ' .$check[$i]. '</label><br>';                }
            }
            createCheckbox($check);
        ?> 
        <br>
        <button type="submit">Go</button>
    </form>
<?php endif ; ?>