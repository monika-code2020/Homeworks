<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days of the Week</title>
    <style>
    input{
        display:block;
        margin: 5px 0;
    }
    </style>
</head>
<body>
<h2>Days of the Week</h2> <br>
<?php 
    $daysOfWeek = ["Monday","Thuesday","Wednesday","Thursday","Friday","Saturday"];
?>
<?php if(isset($_POST['day'])): 
    $day = $_POST['day'];
    if($day === $daysOfWeek[0]){
        echo "Laugh on Monday, laugh for danger.";
    }    
    else if($day === $daysOfWeek[1]){
        echo "Laugh on Tuesday, kiss a stranger.";
    }
    else if($day === $daysOfWeek[2]){
        echo "Laugh on Wednesday, laugh for a letter.";
    }
    else if($day === $daysOfWeek[3]){
        echo "Laugh on Thursday, something better.";
    }
    else if($day === $daysOfWeek[4]){
        echo "Laugh on Friday, laugh for sorrow.";
    }
    else if($day === $daysOfWeek[4]){
        echo "Laugh on Saturday, joy tomorrow.";
    }
    else{
        echo "Enter valid day from Monday to Saturday!";
    }
?>
<?php else :?>
    <form action = "" method="POST">
        <label for="dayOfWeek">Please enter a day of the week!</label> 
        <input type="text" name="day" id="dayOfWeek">
        <button type="submit">Go</button>
    </form>
<?php endif ;?>

</body>
</html>