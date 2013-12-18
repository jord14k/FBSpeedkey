<?php
    require_once 'facebook.php';

    $facebook->api('/me/scores/', 'post', array(
        'access_token' => $access_token,
        'score' => $_POST["p"]
    ));
?>
