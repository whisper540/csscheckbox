<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Checkbox样式</title>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:1445447964,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"cf71d1f65997597f86473d87e4feb924",petok:"7ae94587bbaf2ad7611997f0d4c57533c95a0ff7-1446220169-86400",zone:"xiumu.org",rocket:"a",apps:{}}];document.write('<script type="text/javascript" src="//edge.yunjiasu.com/cdn-cgi/nexp/dok3v=b0bfc08c34/cloudflare.min.js"><'+'\/script>');}}catch(e){};
//]]>
</script>
<style type="text/css" media="screen">body{color:#444;font-size:1.6em;background:#ccc;}.container{width:90%;margin:20px 3%;padding:25px;min-height:400px;height:auto;background:#FFF;}section{float:left;width:30%;margin:20px 20px;}hr{clear:both;}input[type=checkbox]{visibility:hidden;}.checkboxOne{width:40px;height:10px;background:#555;margin:20px 80px;position:relative;border-radius:3px;}.checkboxOne label{display:block;width:16px;height:16px;border-radius:50%;-webkit-transition:all .5s ease;-moz-transition:all .5s ease;-o-transition:all .5s ease;-ms-transition:all .5s ease;transition:all .5s ease;cursor:pointer;position:absolute;top:-3px;left:-3px;background:#ccc;}.checkboxOne input[type=checkbox]:checked+label{left:27px;}.checkboxTwo{width:120px;height:40px;background:#333;margin:20px 60px;border-radius:50px;position:relative;}.checkboxTwo:before{content:'';position:absolute;top:19px;left:14px;height:2px;width:90px;background:#111;}.checkboxTwo label{display:block;width:22px;height:22px;border-radius:50%;-webkit-transition:all .5s ease;-moz-transition:all .5s ease;-o-transition:all .5s ease;-ms-transition:all .5s ease;transition:all .5s ease;cursor:pointer;position:absolute;top:9px;z-index:1;left:12px;background:#ddd;}.checkboxTwo input[type=checkbox]:checked+label{left:84px;background:#26ca28;}.checkboxThree{width:120px;height:40px;background:#333;margin:20px 60px;border-radius:50px;position:relative;}.checkboxThree:before{content:'On';position:absolute;top:12px;left:13px;height:2px;color:#26ca28;font-size:16px;}.checkboxThree:after{content:'Off';position:absolute;top:12px;left:84px;height:2px;color:#ddd;font-size:16px;}.checkboxThree label{display:block;width:52px;height:22px;border-radius:50px;-webkit-transition:all .5s ease;-moz-transition:all .5s ease;-o-transition:all .5s ease;-ms-transition:all .5s ease;transition:all .5s ease;cursor:pointer;position:absolute;top:9px;z-index:1;left:12px;background:#ddd;}.checkboxThree input[type=checkbox]:checked+label{left:60px;background:#26ca28;}.checkboxFour{width:40px;height:40px;background:#ddd;margin:20px 90px;border-radius:100%;position:relative;-webkit-box-shadow:0px 1px 3px rgba(0,0,0,0.5);-moz-box-shadow:0px 1px 3px rgba(0,0,0,0.5);box-shadow:0px 1px 3px rgba(0,0,0,0.5);}.checkboxFour label{display:block;width:30px;height:30px;border-radius:100px;-webkit-transition:all .5s ease;-moz-transition:all .5s ease;-o-transition:all .5s ease;-ms-transition:all .5s ease;transition:all .5s ease;cursor:pointer;position:absolute;top:5px;left:5px;z-index:1;background:#333;-webkit-box-shadow:inset 0px 1px 3px rgba(0,0,0,0.5);-moz-box-shadow:inset 0px 1px 3px rgba(0,0,0,0.5);box-shadow:inset 0px 1px 3px rgba(0,0,0,0.5);}.checkboxFour input[type=checkbox]:checked+label{background:#26ca28;}.checkboxFive{width:25px;margin:20px 100px;position:relative;}.checkboxFive label{cursor:pointer;position:absolute;width:25px;height:25px;top:0;left:0;background:#eee;border:1px solid #ddd;}.checkboxFive label:after{opacity:0.2;content:'';position:absolute;width:9px;height:5px;background:transparent;top:6px;left:7px;border:3px solid #333;border-top:none;border-right:none;-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-o-transform:rotate(-45deg);-ms-transform:rotate(-45deg);transform:rotate(-45deg);}.checkboxFive label:hover::after{opacity:0.5;}.checkboxFive input[type=checkbox]:checked+label:after{opacity:1;}</style>
</head>
<body>
<section class="container">
<section>
 
<h3>样式一</h3>
<div class="checkboxOne">
<input type="checkbox" value="1" id="checkboxOneInput" name=""/>
<label for="checkboxOneInput"></label>
</div>
</section>
<section>
 
<h3>样式二</h3>
<div class="checkboxTwo">
<input type="checkbox" value="1" id="checkboxTwoInput" name=""/>
<label for="checkboxTwoInput"></label>
</div>
</section>
<section>
 
<h3>样式三</h3>
<div class="checkboxThree">
<input type="checkbox" value="1" id="checkboxThreeInput" name=""/>
<label for="checkboxThreeInput"></label>
</div>
</section>
<section>
 
<h3>样式四</h3>
<div class="checkboxFour">
<input type="checkbox" value="1" id="checkboxFourInput" name=""/>
<label for="checkboxFourInput"></label>
</div>
</section>
<section>
 
<h3>样式五</h3>
<div class="checkboxFive">
<input type="checkbox" value="1" id="checkboxFiveInput" name=""/>
<label for="checkboxFiveInput"></label>
</div>
</section>
<div style="clear:both;"></div>
<hr/>
</section>
</body>
</html>
