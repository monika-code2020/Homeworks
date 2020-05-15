<?php 

    const MONTH_DAY = [
        "January" => "31",
        "February" => "28 days, if leap year 29",
        "March" => "31",
        "April" => "30",
        "May" => "31",
        "June" => "30",
        "July" => "31",
        "August" => "31",
        "September" => "30",
        "October" => "31",
        "November" => "30",
        "December" => "31"
    ];

    function makeOptions(){
        foreach (MONTH_DAY as $key => $value) {
            echo "<option>$key</option>";
             
        }
    };

    function makeSelect(){
        if (MONTH_DAY) {
            echo '
                <form action="" method="POST"><br>
                <label for="month">Please choose a month!</label><br>
                <select name="month"><br>
                <option value="" selected>Select month</option><br>';
            makeOptions();
            echo 
                '</select>
                <button type="submit" name="submit">Submit</button><br>
                </form>';        } 
        else {
            echo "You don't have select month!";
            
        }
        
    };
    makeSelect();

    if(isset($_POST["submit"])){

        $months = $_POST["month"];
    };
    if(isset($months)){

        echo $months." has: ".MONTH_DAY[$months]." days";
    };


?>