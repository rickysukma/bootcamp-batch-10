<?php 

function is_username_valid($username){
    if(strlen($username) < 8 && ctype_lower($username)){
        return 'false';
    }else{
        return 'true';
    }
};

function is_password_valid($password){
        if(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$%^&]).*$/',$password)){
            return 'true';
        }else{
            return 'false';
        }
}

$username = ['ampas','ampas123'];
$password = '‘qazW_123’';

foreach ($username as $value) {
        echo $value.' '.is_username_valid($value).'<br>';
}

echo is_password_valid($password);