<?php
    include_once '0.php';
    $score = str_replace("AAJ6DamyqG8BAEgXP72cDrOIcityKvaeUIKWsawoCPZBMl0IuVkfz4UTVjqPXxd8TysXSxlpWNDvpZBAKKraCZB4zkeiAxL5a6ZBEZAzVSBoxzKaCSXZA9OIxZCphOS8MvzI0ZC2Qhq3euh19TbB5OWkV8ZBFexNg3vxzfN7afH6bzAB3YhQ7vEyqzQF2Nc9veJ2uKEXiioZCRggZDZD", "", $_POST["p"]);
    if ($score > -1200 && $score < 6789)
        $facebook->api('/me/scores/', 'post', array(
            'access_token' => $_POST["s"],
            'score' => intval($score)
        ));
?>
