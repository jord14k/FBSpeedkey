<?php
    require 'facebook.php';
            
    $app_id = '697149053642863';
    $app_secret = '7054403e5f2f3d12e962b35b97e1b53a';
    $app_namespace = 'speedkey';
    $app_url = 'https://apps.facebook.com/' . $app_namespace . '/';
    $scope = 'publish_actions, user_games_activity';

    // Init the Facebook SDK
    
        $facebook = new Facebook(array(
             'appId'  => $app_id,
             'secret' => $app_secret,
        ));
        
        $_SESSION["f"] = $facebook;
    

// Get the current user
$user = $facebook->getUser();
// If the user has not installed the app, redirect them to the Login Dialog
if (!$user) {
        $loginUrl = $facebook->getLoginUrl(array(
        'scope' => $scope,
        'redirect_uri' => $app_url,
        ));
        
        print('<script> top.location.href=\'' . $loginUrl . '\'</script>');
        
        
}

$access_token = $facebook->getAccessToken();
?>
