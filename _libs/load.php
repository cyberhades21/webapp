<?php
function load_template($name){
    include "__template/$name.php";
}
function validate_password($username, $password)
{
    if ($username == "user@123.com" and $password == "password")
    {
        return true;
    }
    else
    {
        false;
    }

}
?>