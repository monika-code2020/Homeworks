<?php 
    $days= ["Monday","Thuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];

if (isset($_POST['days'])){
    $day = ($_POST['days']);
    switch ($day) {
        case 'Monday':
            echo "Laugh on Monday, laugh for danger.";
        break;
        case 'Thuesday':
                echo "Laugh on Tuesday, kiss a stranger.";
        break;
        case 'Wednesday':
            echo "Laugh on Wednesday, laugh for a letter.";
        break;
        case 'Thursday':
            echo "Laugh on Thursday, something better.";
        break;
        case 'Friday':
            echo "Laugh on Friday, laugh for sorrow.";
        break;
        case 'Saturday':
            echo "Laugh on Saturday, joy tomorrow.";
        break;
        case 'Sunday':
            echo "Sunday is not in a poem, joy.";
        break;
    }   
} 

?>
<html style="margin:15px 10px; padding:15px;">
<form action='hw02-switch.php'method='POST'>
<button>Back</button>
</form>
</html>
