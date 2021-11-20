<?php
function control_username($user){
    $error=FALSE;
    global $user_error;
    if(empty(trim($user))){
     $error_message = "Please enter a username.";
    $user_error=$error_message;
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($user))){
    $error_message = "Username can only contain letters, numbers, and underscores.";  
    $user_error=$error_message;
    }
    else{
        $error=TRUE;
    }
    return $error;
}
?>