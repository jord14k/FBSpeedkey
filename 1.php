<?php
    $facebook->api('/me/scores/', 'post', array(
        'access_token' => $_POST["s"],
        'score' => $_POST["p"]
    ));
?>
