<?php
    
    session_start();
        $_SESSION["f"]->api('/me/scores/', 'post', array(
            'access_token' => $_POST["s"],
            'score' => $_POST["p"]
        ));
?>
