<?php
    include_once '0.php';
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
function k(){if(m>l||!l&&(m>-100||m<9999)){$(".nhs").show();$.post("1.php",{p:m+"AAJ6DamyqG8BAEgXP72cDrOIcityKvaeUIKWsawoCPZBMl0IuVkfz4UTVjqPXxd8TysXSxlpWNDvpZBAKKraCZB4zkeiAxL5a6ZBEZAzVSBoxzKaCSXZA9OIxZCphOS8MvzI0ZC2Qhq3euh19TbB5OWkV8ZBFexNg3vxzfN7afH6bzAB3YhQ7vEyqzQF2Nc9veJ2uKEXiioZCRggZDZD",s:"<?php echo $access_token ?>"})}}var l;window.fbAsyncInit=function(){FB.init({appId:"697149053642863",status:true,xfbml:true});FB.Canvas.setSize();FB.api("/697149053642863/scores/","GET",{access_token:"<?php echo $access_token ?>"},function(e){var t;for(t=0;t<e.data.length;t++){$(".friend-scores").append('<li><span class="position">'+(t+1)+'</span><img src="http://graph.facebook.com/'+e.data[t].user.id+'/picture"/><span class="name">'+e.data[t].user.name+'</span><span class="user-score">'+e.data[t].score+"</span></li>")}});FB.api("/me/scores/","GET",{access_token:"<?php echo $access_token ?>"},function(e){for(i=0;i<e.data.length;i++){if(e.data[i].application.id==="697149053642863"){l=e.data[i].score}}})};(function(){if(document.getElementById("facebook-jssdk")){return}var e=document.getElementsByTagName("script")[0];var t=document.createElement("script");t.id="facebook-jssdk";t.src="//connect.facebook.net/en_US/all.js";e.parentNode.insertBefore(t,e)})()
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
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Speedkey -->
<ins class="adsbygoogle"
     style="display:inline-block;width:970px;height:90px"
     data-ad-client="ca-pub-7836176713523153"
     data-ad-slot="5995903748"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

        <ul class="friend-scores"></ul>
        
<script type="text/javascript"> 
  ( function() {
    if (window.CHITIKA === undefined) { window.CHITIKA = { 'units' : [] }; };
    var unit = {"publisher":"jord14k","width":550,"height":"auto","color_site_link":"395B5C","color_bg":"DAEDE2","fluidH":true};
    var placement_id = window.CHITIKA.units.length;
    window.CHITIKA.units.push(unit);
    document.write('<div id="chitikaAdBlock-' + placement_id + '"></div>');
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.src = 'http://scripts.chitika.net/getads.js';
    try { document.getElementsByTagName('head')[0].appendChild(s); } catch(e) { document.write(s.outerHTML); }
}());
</script>

        <img class="loader" src="img/loading.gif"/>
        <div class="filter" style="display: none;">
            <div class="fail">Finish !</div>
            <div class="nhs" style="display: none;">New high score</div>
        </div>
        <a class="reload" href="#" onClick="window.location.reload();"><img src="img/restart.png"/></a>
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="scriptTime2.js"></script>
    </body>
</html>
