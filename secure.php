<?php

$pass = $_POST['pass'];

if($pass == "admin")
{
        include("fullcopysecure.html");
}
else
{
    if(isset($_POST))
    {?>

            <form method="POST" action="secure.php">
            Access Code: <input type="password" name="pass"></input><br/>
            <input type="submit" name="submit" value="Submit"></input>
            </form>
    <?}
}
?>