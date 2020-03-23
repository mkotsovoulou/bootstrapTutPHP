<?php
include_once ('../inc/functions.php');

$users = getAllUsers();

foreach ($users as $user) {

    echo $user['email'];
    //If a user image is uploaded display it
    if (!empty($user['avatar'])) echo '<img src="' . $user['avatar'] . '" width="50px">';
    echo "<br>";
}

?>