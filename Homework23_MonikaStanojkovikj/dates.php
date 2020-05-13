
<?php 
    echo "Exercise 1 <br>";

    echo "&copy;". date("Y") . " PHP Exercises - CodeAcademy <br>";

    echo "<br><br>";
?>
<?php 
    echo "Exercise 2 <br>";

    $birthday = strtotime("04-08-2020");
    $today = strtotime("now");
    $diff = $today - $birthday;

    $days = abs(floor($diff/((1000*60*60*24)/1000)));
    echo "Until your next birthday has " . $days . " days.";
    echo "<br><br>";
?>
<?php
    echo "Exercise 3 <br>";

        echo date('Y/m/d') ."<br>";
        echo date('y.m.d') . "<br>";
        echo date('d-m-y') . "<br>";

        echo "<br>";
?>
<?php
    echo "Exercise 4 <br>";
        $dateOne = "1981-11-04";
        $dateTwo = "2013-09-04";

        $diff = abs(strtotime($dateTwo)-strtotime($dateOne));

        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - ($years * 365*60*60*24)) / (30*60*60*24));
        $days = floor(($diff - ($years * 365*60*60*24) - ($months*30*60*60*24)) / (60*60*24));

        echo "There is " . $years . " years, " .$months ." months, ". $days . " days, between ".$dateOne. " and ".$dateTwo;

        echo "<br><br>";
?>
<?php
    echo "Exercise 5 <br>";
        $date = "1981-11-04";
        $timestampForDate = strtotime($date);

        echo date('d-m-Y' , $timestampForDate);

        echo "<br><br>";
?>


<?php
    echo "Exercise 6 <br>";
        $someDateOne = '2020-05-05';
        $someDateTwo = '2020-05-10';

        $diff = abs(strtotime($someDateTwo)-strtotime($someDateOne));

        $days = floor($diff/(1000/60/60/24));

        echo "Number of days between " . $someDateOne . " and ".$someDateTwo. " are ".$days;
        echo "<br><br>";
?>
<?php
        echo "Exercise 7 <br>";
        $date = "2020-09-12";
        $firstDay =date("01-m-Y",strtotime($date));
        $lastDay = date("t-m-Y", strtotime($date));

        echo "First day of month is: " . $firstDay . ". Last day is: " . $lastDay;
        echo "<br><br>";
?>
<?php
    echo "Exercise 8 <br>";
        $date = "2020-03-07";
        echo $date . "<br>";
        echo date("l jS",strtotime($date));
        echo "<br><br>";
?>
<?php
    echo "Exercise 9 <br>";
        $date = "2020-09-07 10:30:00";
        echo date("h:m a jS,F", strtotime($date));
        echo "<br><br>";
?>
<?php
    echo "Exercise 10 <br>";
    
        function convertTime($d,$m){
            if($m == 'AM'){
                $time = date("Y-m-d 09:00:00", strtotime($d));
                echo $time ."<br>";
            }
            else if($m == 'PM'){
                $time = date("Y-m-d 12:00:00", strtotime($d));
                echo $time ."<br>";
            }
        }


    convertTime("19/05/2020", "AM");
    convertTime("19/05/2020", "PM");
        echo "<br><br>";
?>








