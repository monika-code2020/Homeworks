<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite City</title>
    <style>
    input{
        display:block;
        margin: 5px 0;
    }
    </style>
</head>
<body>
<h2>Favorite City</h2> <br>

<?php if(isset($_POST['city'])): 
    $city =$_POST['city'];
    echo "Your favorite city is " .$city;
?>
<?php else :?>
    <form action = "" method="POST">
        <label for="favoriteCity">Please enter your favorite city</label> 
        <input type="text" name="city" id="favoriteCity">
        <button type="submit">Go</button>
    </form>
<?php endif ;?>

</body>
</html>
