<!DOCTYPE html>
<head>

<script>
var message="Sorry, right-click has been disabled"; 

function clickIE() {if (document.all) {(message);return false;}} 
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) { 
if (e.which==2||e.which==3) {(message);return false;}}} 
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;} 
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;} 
document.oncontextmenu=new Function("return false") 
</script>

<meta charset="utf-8">
<title>heroverin</title>

<link rel="shortcut icon" href="/images/favicon.ico" type="image/png">

<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<meta property="og:image" content="/images/image.png">
<meta name="keywords" content="Heroverin">
<meta name="description" content="Heroverin Inc">

<link rel="stylesheet" href="/css/normalize.css" media="all">
<link rel="stylesheet" href="/css/style.css" media="all">
<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic|Raleway:400,200,300,500,700,600,800,900' rel='stylesheet' type='text/css'>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<script src="/js/jquery-1.11.1.min.js"></script>
<script src="/js/device.min.js"></script>
<script src="/js/jquery.mb.YTPlayer.js"></script>
<script src="/js/custom.js"></script>
    
</head>
<body>

<section class="big-background">
<a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=R_XIPxjdnms', containment:'body', autoPlay:true, mute:false, startAt:21, stopAt:180, stopMovieOnBlur:0, vol:100}"></a>
        
<div class="pattern"></div> 
<div class="big-background-container">
<h1 class="big-background-title">Heroverin</h1>
<div class="divider"></div>
<a href="https://vk.com/heroverin" class="big-background-btn" target="_blank">VK</a>
<a href="https://vk.com/gelikone" class="big-background-btn" target="_blank">Group</a>
<a href="#" class="big-background-btn" target="_blank">access-token</a>
</div>                                                    
</section>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83879672-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>