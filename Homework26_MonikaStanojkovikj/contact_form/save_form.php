<?php 
 if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
    $userRequest = $_POST['name'] . " | " . $_POST ['email'] . " | " . $_POST['message'] . " \n";
    $users = 'USER_requests.txt';

    if(file_exists($users) && is_writable($users)){
        
        file_put_contents($users, $userRequest, FILE_APPEND);
        echo $_POST['name'] . ", your request is saved and you will be contacted soon via your email " . $_POST['email'];
    }
}
    else{
        echo "Please fill all data for You to proceed to server";
    }
?>