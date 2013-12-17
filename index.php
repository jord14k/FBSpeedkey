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
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Speed key</title>
        <link href='style.css' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <script src="http://www.parsecdn.com/js/parse-1.2.13.min.js"></script>
    </head>
    <body>
        
<div id="fb-root"></div>
<script>
    var best;
  window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
      appId      : '697149053642863',                        // App ID from the app dashboard
      status     : true,                                 // Check Facebook Login status
      xfbml      : true                                  // Look for social plugins on the page
    });
FB.Canvas.setSize();
        FB.api('/697149053642863/scores/', 'GET', {access_token : "<?php echo $access_token ?>"}, function(response) {
            var i;
            for(i=0; i<response.data.length; i++) {
                $(".friend-scores").append('<li><span class="position">'+(i+1)+'</span><img src="http://graph.facebook.com/'+response.data[i].user.id+'/picture"/><span class="name">'+response.data[i].user.name+'</span><span class="user-score">'+response.data[i].score+'</span></li>');
            }
        });
        
      FB.api('/me/scores/', 'GET', {access_token : "<?php echo $access_token ?>"}, function(response) {
            for(i=0; i<response.data.length; i++) {
                if(response.data[i].application.id === "697149053642863")
                    best = response.data[1].score;
            }
     });
  };

function saveScore() {
    if(score > best || !best) {
          FB.api('/me/scores/', 'POST', {access_token : "<?php echo $access_token ?>", score : score}, function(response) {
            alert("New High Score");
        });
     }
}
  // Load the SDK asynchronously
  (function(){
     // If we've already installed the SDK, we're done
     if (document.getElementById('facebook-jssdk')) {return;}

     // Get the first script element, which we'll use to find the parent node
     var firstScriptElement = document.getElementsByTagName('script')[0];

     // Create a new script element and set its id
     var facebookJS = document.createElement('script'); 
     facebookJS.id = 'facebook-jssdk';

     // Set the new script's source to the source of the Facebook JS SDK
     facebookJS.src = '//connect.facebook.net/en_US/all.js';

     // Insert the Facebook JS SDK into the DOM
     firstScriptElement.parentNode.insertBefore(facebookJS, firstScriptElement);
   }());
</script>
        
        <div id="container" style="display: none;">
            <div class="timer">
                <input type="text" value="20" data-max="20" class="dial" data-width="75" data-height="75" data-fgColor="#046380" data-readOnly=true><br/>
                <input type="text" value="30" class="htimer" data-displayInput=false data-width="50" data-height="50" data-readOnly=true data-fgColor="#C0392B"
                       data-max="30"></div>
            <br/>
            <span class="score">0</span>
            <ul class="scoreadd">
                <li class="hide"></li>
            </ul>
            <div id="screen"><span class="action">a</span></div>
            
            <div class="controllers">
                <img class="keyboard" src="img/keyboard.png"/>
                <img src="img/mouse.png"/>
                <div style="clear: both;"></div>
            </div>
            
            
        </div>
        <ul class="friend-scores"></ul>
        <img class="loader" src="img/loading.gif"/>
        <div class="filter" style="display: none;"><div class="fail">Finish !</div></div>
        <a class="reload" href="#" onClick="window.location.reload();"><img src="img/restart.png"/></a>
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="scriptTime2.js"></script>
    </body>
</html>
