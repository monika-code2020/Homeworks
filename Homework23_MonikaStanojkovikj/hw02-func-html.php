<?php

$monthName = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
$month = ["January" => cal_days_in_month(CAL_GREGORIAN, 1, 2020),
          "February" => cal_days_in_month(CAL_GREGORIAN, 2, 2020),
          "March" => cal_days_in_month(CAL_GREGORIAN, 3, 2020), 
          "April" => cal_days_in_month(CAL_GREGORIAN, 4, 2020), 
          "May" => cal_days_in_month(CAL_GREGORIAN, 5, 2020), 
          "June" => cal_days_in_month(CAL_GREGORIAN, 6, 2020),
           "July" => cal_days_in_month(CAL_GREGORIAN, 7, 2020) ,
           "August" => cal_days_in_month(CAL_GREGORIAN, 8, 2020),
           "September" => cal_days_in_month(CAL_GREGORIAN, 9, 2020), 
           "October"=> cal_days_in_month(CAL_GREGORIAN, 10, 2020), 
           "November" =>cal_days_in_month(CAL_GREGORIAN, 11, 2020), 
           "December" =>cal_days_in_month(CAL_GREGORIAN, 12, 2020)];
// var_dump($month);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days in a Month</title>

    <style>
    div{
        display:block;
        margin: 10px 0;
    }
    </style>
</head>
<body>
<h2>Days in a Month</h2> <br>

<?php if(isset($_POST['month'])) :
    $monthValue = $_POST['month'];
    foreach($month as $key => $value){
        if($monthValue === $key){
            echo "The month of " .$monthValue. " has " .$value. " days.";
        }
    }  
?>
<?php else :?>
<form action = "" method="POST">
        <label for="monthInYear">Please choose a month</label> 
        <div>
            <select name="month" id="daysOfWeek">
            <?php foreach($monthName as $month): ?>
                <option value="<?php echo $month ?>"><?php echo $month ?></option>
            <?php endforeach; ?>
             </select>
        </div>
        <button type="submit">Go</button>
    </form>
 <?php endif ;?>
<!-- 
I created this task as I understood it, because I didn't understand exactly the requirements of the task -->
</body>
</html>