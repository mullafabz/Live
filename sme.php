<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>MY PLAYER</title><link rel="stylesheet" href="/client3.css" type="text/css">


<script type="text/javascript" src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js"></script>
<div id="oper"></div>
<div id="vid"></div>
<script>

 player = new Clappr.Player({
 source: "https://iwebmakermobile.cachefly.net/skypremierleague/playlist.m3u8",
 mimeType: "application/x-mpegURL",
 autoPlay: true, 
 height: "100%",
 width: "100%",
 plugins: {"core": [LevelSelector]},
 parentId: "#vid"});

</script>   
