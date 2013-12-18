<?php
    
    
    try {
        $facebook->api('/me/scores/', 'post', array(
            'access_token' => $_POST["s"],
            'score' => $_POST["p"]
        ));
    } catch (Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }
?>
