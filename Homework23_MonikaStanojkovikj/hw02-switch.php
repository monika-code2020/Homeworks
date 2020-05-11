<?php 
    $days= ["Monday","Thuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    div{
        display:block;
        margin: 10px 0;
    }
    </style>
</head>
<body>

<h2>Pick a Day</h2> <br>
<form action = "switch.php" method="POST">
        <label for="dayOfWeek">Please choose a day!</label> 
        <div>
            <select name="days" id="daysOfWeek">
            <?php foreach($days as $day): ?>
                <option value="<?php echo $day ?>"><?php echo $day ?></option>
            <?php endforeach; ?>
             </select>
        </div>
        <button type="submit">Go</button>
    </form>

</body>
</html>