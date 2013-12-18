<?php
    require_once 'facebook.php';

    $facebook->api('/697149053642863/scores/', 'DELETE');
//    $facebook->api('/me/scores/', 'post', array(
//        'access_token' => $access_token,
//        'score' => $_POST["p"]
//    ));
?>
