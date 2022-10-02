<?php
    function formatName($name){
        if(!preg_match("/^[a-zA-Z]+/",$name)){
            echo $name="Only letters allowed";
        }else{
            return ucfirst($name);
        }
    }

    function formatEmail($email){
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if(filter_var($email, FILTER_SANITIZE_EMAIL)){
            return $email;
        }else{
            echo "$email is not a valid emailaddress";
        }
    }

?>