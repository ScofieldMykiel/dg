
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from www.w3schools.com/w3css/tryit.asp?filename=tryw3css_examples_home by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Sep 2016 16:15:47 GMT -->
<head>
<title>Tryit Editor v3.0</title>
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../lib/w3.css">
<script src="../lib/w3codecolor.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-3855518-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');
</script>
<script>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>
<script type='text/javascript'>
 // GPT slots
 var gptAdSlots = [];
 googletag.cmd.push(function() {

   var leaderMapping = googletag.sizeMapping().
   // Mobile ad
   addSize([0, 0], [320, 50]). 
   // Vertical Tablet ad
   addSize([468, 0], [468, 60]). 
   // Horizontal Tablet
   addSize([728, 0], [728, 90]).
   // Desktop and bigger ad
 addSize([970, 0], [[728, 90], [970, 90]]).build();
// addSize([970, 0], [728, 90]).build();
 gptAdSlots[0] = googletag.defineSlot('/16833175/TryitLeaderboard', [[728, 90], [970, 90]], 'div-gpt-ad-1428407818244-0').
// gptAdSlots[0] = googletag.defineSlot('/16833175/TryitLeaderboard', [728, 90], 'div-gpt-ad-1428407818244-0').
   defineSizeMapping(leaderMapping).addService(googletag.pubads());
   googletag.pubads().setTargeting("content","try" + (function () {
     var folder = location.pathname;
     folder = folder.replace("../index.html", "");
     folder = folder.substr(0, folder.indexOf("../index.html"));
     return folder;
   })()
   );
   googletag.enableServices();
 });
</script>
<script>
if (window.addEventListener) {              
    window.addEventListener("resize", browserResize);
} else if (window.attachEvent) {                 
    window.attachEvent("onresize", browserResize);
}
var xbeforeResize = window.innerWidth;

function browserResize() {
    var afterResize = window.innerWidth;
    if ((xbeforeResize < (970) && afterResize >= (970)) || (xbeforeResize >= (970) && afterResize < (970)) ||
        (xbeforeResize < (728) && afterResize >= (728)) || (xbeforeResize >= (728) && afterResize < (728)) ||
        (xbeforeResize < (468) && afterResize >= (468)) ||(xbeforeResize >= (468) && afterResize < (468))) {
        xbeforeResize = afterResize;
        googletag.cmd.push(function() {
            googletag.pubads().refresh([gptAdSlots[0]]);
        });
    }
    if (window.screen.availWidth <= 768) {
      restack(window.innerHeight > window.innerWidth);
    }
    fixDragBtn();
    showFrameSize();    
}
</script>
<style>
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
body {
  color:#000000;
  margin:0px;
  font-size:100%;
}
.trytopnav {
  height:40px;
  overflow:hidden;
  min-width:380px;
  position:absolute;
  width:100%;
  top:99px;
}
.w3-navbar button {
  border:none;
  padding:8px 16px;
  display:block;
}
a.w3schoolslink {
  padding:0 !important;
  display:inline !important;
}
a.w3schoolslink:hover,a.w3schoolslink:active {
  text-decoration:underline !important;
  background-color:transparent !important;
}
#dragbar{
  position:absolute;
  cursor: col-resize;
  z-index:3;
  padding:5px;
}
#shield {
  display:none;
  top:0;
  left:0;
  width:100%;
  position:absolute;
  height:100%;
  z-index:4;
}
#framesize span {
  font-family:Consolas, monospace;
}
#container {
  background-color:#f1f1f1;
  width:100%;
  overflow:auto;
  position:absolute;
  top:138px;
  bottom:0;
  height:auto;
}
#textareacontainer, #iframecontainer {
  float:left;
  height:100%;
  width:50%;
}
#textarea, #iframe {
  height:100%;
  width:100%;
  padding-bottom:10px;
  padding-top:1px;
}
#textarea {
  padding-left:10px;
  padding-right:5px;  
}
#iframe {
  padding-left:5px;
  padding-right:10px;  
}
#textareawrapper {
  width:100%;
  height:100%;
  background-color: #ffffff;
  position:relative;
  box-shadow:0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
#iframewrapper {
  width:100%;
  height:100%;
  -webkit-overflow-scrolling: touch;
  background-color: #ffffff;
  box-shadow:0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
#textareaCode {
  background-color: #ffffff;
  font-family: consolas,"courier new",monospace;
  font-size:15px;
  height:100%;
  width:100%;
  padding:8px;
  resize: none;
  border:none;
  line-height:normal;    
}
textarea.textareaCC {
  background-color:transparent !important;
  z-index:2;
  position:relative;
  -webkit-text-fill-color: transparent;
  line-height:normal;
}
.codecolorCC {
  position:absolute;
  font-family: consolas,"courier new",monospace;
  font-size: 15px;
  height: 100%;
  width: 100%;
  padding: 8px;
  resize: none;
  border: none;
  z-index: 1;
  overflow-y:auto;
  word-wrap: break-word;
  line-height:normal;    
}
#iframeResult, #iframeSource {
  background-color: #ffffff;
  height:100%;
  width:100%;  
}
#stackV {background-color:#999999;}
#stackV.horizontal,#stackV.horizontal {background-color:transparent;}
#stackV.horizontal:hover {background-color:#d3d3d3;}
#stackH,#stackH {background-color:transparent;}
#stackH:hover {background-color:#d3d3d3;}
#stackH.horizontal {background-color:#999999;}
#textareacontainer.horizontal,#iframecontainer.horizontal{
  height:50%;
  float:none;
  width:100%;
}
#textarea.horizontal{
  height:100%;
  padding-left:10px;
  padding-right:10px;
}
#iframe.horizontal{
  height:100%;
  padding-right:10px;
  padding-bottom:10px;
  padding-left:10px;  
}
#container.horizontal{
  min-height:200px;
  margin-left:0;
}
#tryitLeaderboard {
  overflow:hidden;
  text-align:center;
  margin-top:5px;
  height:90px;
}
@media screen and (max-width: 727px) {
  .trytopnav {top:70px;}
  #container {top:108px;}
}
@media screen and (max-width: 467px) {
  .trytopnav {top:60px;}
  #container {top:98px;}
}
@media only screen and (max-device-width: 768px) {
  #iframewrapper {overflow: auto;}
  #container     {min-width:320px;}
  .stack         {display:none;}
  #tryhome       {display:block;}
}

@font-face {
font-family: 'fontawesome';
src:url('../lib/fonts/fontawesome8deb.eot?14663396');
src:url('../lib/fonts/fontawesome8deb.eot?14663396#iefix') format('embedded-opentype'),
    url('../lib/fonts/fontawesome8deb.woff?14663396') format('woff'),
    url('../lib/fonts/fontawesome8deb.ttf?14663396') format('truetype'),
    url('../lib/fonts/fontawesome8deb.svg?14663396#fontawesome') format('svg');
font-weight:normal;
font-style:normal;
}
.fa {
  display:inline-block;
  font:normal normal normal 14px/1 FontAwesome;
  font-size:inherit;
  text-rendering:auto;
  -webkit-font-smoothing:antialiased;
  -moz-osx-font-smoothing:grayscale;
  transform:translate(0,0);
}
.fa-2x {
  font-size:2em;
}
.fa-home:before {content: '\e800'; }

#iframewrapper {
	
}
</style>
<!--[if lt IE 8]>
<style>
#textareacontainer, #iframecontainer {width:48%;}
#container {height:500px;}
#textarea, #iframe {width:90%;height:450px;}
#textareaCode, #iframeResult {height:450px;}
.stack {display:none;}
</style>
<![endif]-->
</head>
<body>
<div id='tryitLeaderboard' style="background-color:#ffffff">
<!-- TryitLeaderboard -->
<div id='div-gpt-ad-1428407818244-0'>
<script type='text/javascript'>googletag.cmd.push(function() { googletag.display('div-gpt-ad-1428407818244-0'); });</script>
</div>
</div>

<div class="trytopnav">
<ul class="w3-navbar w3-light-grey" style="border-top:1px solid #f1f1f1;">
  <li class="stack" id="tryhome" style="width:auto !important;float:left;"><a href="../index.html" target="_blank" title="w3schools.com Home" class="topnav-icons fa fa-home" style="font-size:28px;color:#999999;margin-top:-2px" title="Home"></a></li>
  <li class="stack" style="width:auto !important;float:left;"><button title="Vertically" onclick="restack(false)" id="stackV"><img src="../images/stack_vertically.png"></button></li>
  <li class="stack" style="width:auto !important;float:left;"><button title="Horizontally" onclick="restack(true)" id="stackH"><img src="../images/stack_horizontally.png"></button></li>
  <li style="width:auto !important;float:left;"><button class="w3-green w3-hover-white w3-hover-text-green" onclick="submitTryit(1)">Run &raquo;</button></li>
  <li class="w3-right" style="width:auto !important;float:left;" class="w3-hide-medium w3-hide-small"><span style="padding:8px 8px 8px 8px;display:block"></span></li>
  <li class="w3-right w3-hide-small"><span style="padding:8px 0;display:block"><div id="framesize"></div></span></li>  
</ul>
</div>
<div id="shield"></div>
<a href="javascript:void(0)" id="dragbar"></a>
<div id="container">
  <div id="textareacontainer">
    <div id="textarea">
      <div id="textareawrapper">
        <div id="codecolor"></div>
        <textarea autocomplete="off" id="textareaCode" wrap="logical" spellcheck="false"><!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../lib/w3.css">
<style>
.w3-theme {color:#fff !important;background-color:#4CAF50 !important}
.w3-btn {background-color:#4CAF50;margin-bottom:4px}
.w3-code{border-left:4px solid #4CAF50}
.myMenu {margin-bottom:150px}
</style>
<body>

<!-- Top -->
<div class="w3-top">
  <div class="w3-row w3-white w3-padding">
    <div class="w3-half" style="margin:4px 0 6px 0"><a href='../index.html'><img src='../images/w3schools.png' alt='W3Schools.com'></a></div>
    <div class="w3-half w3-margin-top w3-wide w3-hide-medium w3-hide-small"><div class="w3-right">THE WORLD'S LARGEST WEB DEVELOPER SITE</div></div>
  </div>

  <ul class="w3-navbar w3-theme w3-large" style="z-index:4;">
    <li class="w3-opennav w3-left w3-hide-large">
      <a class="w3-hover-white w3-large w3-theme w3-padding-16" href="javascript:void(0)" onclick="w3_open()">&#9776;</a>
    </li>
    <li class="w3-hide-medium w3-hide-small"><a class="w3-hover-white w3-padding-16" href="javascript:void(0)" onclick="w3_show_nav('menuTut')">TUTORIALS</a></li>
    <li class="w3-hide-medium w3-hide-small"><a class="w3-hover-white w3-padding-16" href="javascript:void(0)" onclick="w3_show_nav('menuRef')">REFERENCES</a></li>
  </ul>
</div>

<!-- Sidenav -->
<nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:270px" id="mySidenav">
  <div class="w3-hide-large">
    <a href="javascript:void(0)" onclick="w3_show_nav('menuTut')" class="w3-left w3-theme w3-hover-white w3-padding-16 w3-large" style="width:50%">Tutorials</a>
    <a href="javascript:void(0)" onclick="w3_show_nav('menuRef')" class="w3-left w3-theme w3-hover-white w3-padding-16 w3-large" style="width:50%">References</a>
  </div>
  <div class="w3-clear"></div>
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hide-large" title="close menu">&times;</a>
  <div id="menuTut" class="myMenu">
  <div class="w3-container w3-padding-top">
    <h3>Tutorials</h3>
  </div>
  <a href="../html/default.html">Learn HTML</a>
  <a href="../css/default.html">Learn CSS</a>
  <a href="default.html">Learn W3.CSS</a>
  <a href="../colors/default.html">Learn Colors</a>
  <a href="../js/default.html">Learn JavaScript</a>
  <a href="../json/default.html">Learn JSON</a>
  <a href="../xml/default.html">Learn XML</a>
  <a href="../ajax/default.html">Learn AJAX</a>
  <a href="../sql/default.html">Learn SQL</a>
  <a href="../php/default.html">Learn PHP</a>
  </div>
  <div id="menuRef" class="myMenu w3-padding-top" style="display:none">
  <div class="w3-container">
    <h3>References</h3>
  </div>
  <a href='../tags/default.html'>HTML Tag Reference</a>
  <a href='../tags/ref_eventattributes.html'>HTML Event Reference</a>
  <a href='../colors/default.html'>HTML Color Reference</a>
  <a href='../cssref/default.html'>CSS Reference</a>
  <a href='../cssref/css_selectors.html'>CSS Selector Reference</a>
  <a href='w3css_references.html'>W3.CSS Reference</a>
  <a href='../jsref/default.html'>JavaScript Reference</a>
  <a href='../jsref/default.html'>HTML DOM Reference</a>
  <a href='../php/php_ref_array.html'>PHP Reference</a>
  <a href='../sql/sql_quickref.html'>SQL Reference</a>
  </div>
</nav>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 270 pixels when the sidenav is visible -->
<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

<div class="w3-container w3-section w3-padding-large w3-card-4 w3-light-grey">
  <h1 class="w3-jumbo">CSS</h1>
  <p class="w3-xlarge">The Language for Styling Web Pages</p>
  <a class="w3-btn w3-hover-white" href="../css/default.html">LEARN CSS</a>
  <a class="w3-btn w3-hover-white" href="../ccsref/default.asp">CSS REFERENCE</a>
  <p class="w3-large">
  <p><div class="w3-code cssHigh notranslate">
  body {<br>
  &nbsp;&nbsp;&nbsp; background-color: #d0e4fe;<br>}<br>h1 {<br>
  &nbsp;&nbsp;&nbsp; color: orange;<br>
  &nbsp;&nbsp;&nbsp; text-align: center;<br>}<br>p {<br>
  &nbsp;&nbsp;&nbsp; font-family: &quot;Times New Roman&quot;;<br>
  &nbsp;&nbsp;&nbsp; font-size: 20px;<br>}
  </div>
  <a class="w3-btn w3-hover-white" href="../css/tryit438d.html?filename=trycss_default" target="_blank">Try it Yourself</a>
</div>

<div class="w3-container w3-section w3-padding-large w3-card-4 w3-light-grey">
  <h1 class="w3-jumbo">JS</h1>
  <p class="w3-xlarge">The Language for Programming Web Pages</p>
  <a href="../js/default.html" class="w3-btn w3-hover-white">LEARN JS</a>
  <a href="../jsref/default.html" class="w3-btn w3-hover-white">JS REFERENCE</a>

  <p><div class="w3-code jsHigh notranslate">
   // Click the button to change the color of this paragraph<br><br>function myFunction() {<br>
  &nbsp;&nbsp;&nbsp; var x;<br>
  &nbsp;&nbsp;&nbsp; x = document.getElementById(&quot;demo&quot;);<br>
  &nbsp;&nbsp;&nbsp; x.style.fontSize = &quot;25px&quot;; <br>
  &nbsp;&nbsp;&nbsp; x.style.color = &quot;red&quot;; <br>}
  </div>
  <a class="w3-btn w3-hover-white" href="../js/tryit8004.html?filename=tryjs_default" target="_blank">Try it Yourself</a>
</div>


<footer class="w3-container w3-section w3-padding-32 w3-card-4 w3-light-grey w3-center w3-opacity">
  <p><nav>
  <a href="http://w3schools.invisionzone.com/" target="_blank">FORUM</a> |
  <a href="../about/default.html" target="_top">ABOUT</a>
  </nav></p>
</footer>

<!-- END MAIN -->
</div>

<script>
// Script to open and close the sidenav
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
function w3_show_nav(name) {
    document.getElementById("menuTut").style.display = "none";
    document.getElementById("menuRef").style.display = "none";
    document.getElementById(name).style.display = "block";
    w3-open();
}
</script>
<script src="../lib/w3codecolors.js"></script>

</body>

<!-- Mirrored from www.w3schools.com/w3css/tryit.asp?filename=tryw3css_examples_home by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Sep 2016 16:15:47 GMT -->
</html>
</textarea>
        <form autocomplete="off" style="margin:0px;display:none;">
          <input type="hidden" name="code" id="code" />
          <input type="hidden" id="bt" name="bt" />
        </form>
       </div>
    </div>
  </div>
  <div id="iframecontainer">
    <div id="iframe">
      <div id="iframewrapper"></div>
    </div>
  </div>
</div>
<script>
submitTryit()
//var adrefreshtimer
function submitTryit(n) {
  var text = document.getElementById("textareaCode").value;
  var ifr = document.createElement("iframe");
  ifr.setAttribute("frameborder", "0");
  ifr.setAttribute("id", "iframeResult");  
  document.getElementById("iframewrapper").innerHTML = "";
  document.getElementById("iframewrapper").appendChild(ifr);
  var ifrw = (ifr.contentWindow) ? ifr.contentWindow : (ifr.contentDocument.document) ? ifr.contentDocument.document : ifr.contentDocument;
  ifrw.document.open();
  ifrw.document.write(text);  
  ifrw.document.close();
  //23.02.2016: contentEditable is set to true, to fix text-selection (bug) in firefox.
  //(and back to false to prevent the content from being editable)
  //(To reproduce the error: Select text in the result window with, and without, the contentEditable statements below.)  
  if (ifrw.document.body && !ifrw.document.body.isContentEditable) {
    ifrw.document.body.contentEditable = true;
    ifrw.document.body.contentEditable = false;
  }
//  if (!adrefreshtimer) {adrefreshtimer = new Date().getTime();}
//  if (new Date().getTime() - adrefreshtimer >= 30000) {
//  if (n == 1) {
//    googletag.cmd.push(function() {
//      googletag.pubads().refresh([gptAdSlots[0]]);
//    });
//  }
//    adrefreshtimer = new Date().getTime();
//  }
}
if ((window.screen.availWidth <= 768 && window.innerHeight > window.innerWidth) || "" == " horizontal") {restack(true);}
function restack(horizontal) {
    var tc, ic, t, i, c, f, sv, sh, d, height, flt, width;
    tc = document.getElementById("textareacontainer");
    ic = document.getElementById("iframecontainer");
    t = document.getElementById("textarea");
    i = document.getElementById("iframe");
    c = document.getElementById("container");    
    sv = document.getElementById("stackV");
    sh = document.getElementById("stackH");
    tc.className = tc.className.replace("horizontal", "");
    ic.className = ic.className.replace("horizontal", "");        
    t.className = t.className.replace("horizontal", "");        
    i.className = i.className.replace("horizontal", "");        
    c.className = c.className.replace("horizontal", "");                        
    sv.className = sv.className.replace("horizontal", "");
    sh.className = sh.className.replace("horizontal", "");
    stack = "";
    if (horizontal) {
        tc.className = tc.className + " horizontal";
        ic.className = ic.className + " horizontal";        
        t.className = t.className + " horizontal";        
        i.className = i.className + " horizontal";                
        c.className = c.className + " horizontal";                
        sv.className = sv.className + " horizontal";                        
        sh.className = sh.className + " horizontal";
        stack = " horizontal";
        document.getElementById("textareacontainer").style.height = "50%";
        document.getElementById("iframecontainer").style.height = "50%";
        document.getElementById("textareacontainer").style.width = "100%";
        document.getElementById("iframecontainer").style.width = "100%";
    } else {
        document.getElementById("textareacontainer").style.height = "100%";
        document.getElementById("iframecontainer").style.height = "100%";
        document.getElementById("textareacontainer").style.width = "50%";
        document.getElementById("iframecontainer").style.width = "50%";
    }
    fixDragBtn();
    showFrameSize();
}
if (navigator.userAgent.indexOf("WebKit") > -1 && navigator.userAgent.indexOf("Edge") == -1) {
    document.getElementById("codecolor").className += " codecolorCC";
    document.getElementById("textareaCode").className += " textareaCC";
    removetabs();
    removespaces();
    colorcoding();
    if (document.getElementById("textareaCode").addEventListener) {              
        document.getElementById("textareaCode").addEventListener("input", removetabs);
        document.getElementById("textareaCode").addEventListener("input", colorcoding);
        document.getElementById("textareaCode").addEventListener("scroll", syncscroll);
    } else if (document.getElementById("textareaCode").attachEvent) {                 
        document.getElementById("textareaCode").attachEvent("oninput", removetabs);
        document.getElementById("textareaCode").attachEvent("oninput", colorcoding);
        document.getElementById("textareaCode").attachEvent("onscroll", syncscroll);
    }
}
function removetabs() {
    var text = document.getElementById("textareaCode").value;
    text = text.replace(/\t/g, " ");
    document.getElementById("textareaCode").value = text;
}
function removespaces() {
  var textlines, i, j, newtext = "", newline;
  textlines = document.getElementById("textareaCode").value.split("\n");
  for (i = 0; i < textlines.length; i++) {
    newline = textlines[i];
    for (j = newline.length - 1; j >= 0; j--) {
      if (newline[j] != " ") {
        newline = newline.substr(0, j + 1);
        break;
      }
    }
    newtext += newline + "\n";
  }
  document.getElementById("textareaCode").value = newtext;
}
function colorcoding() {
    var text = document.getElementById("textareaCode").value;
    text = text.replace(/&/g, "&amp;");
    text = text.replace(/\t/g, "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");   
    text = text.replace(/  /g, " &nbsp;");  
    text = text.replace(/</g, "&lt;");
    text = text.replace(/>/g, "&gt;");
    text = text.replace(/(?:\r\n|\r|\n)/g, '<br>');
    text = text.replace(/<br> /g, "<br>&nbsp;");  
    text = w3CodeColorize(text);
    document.getElementById("codecolor").innerHTML = text + "<br>";
}
function syncscroll() {
    document.getElementById("codecolor").scrollTop = document.getElementById("textareaCode").scrollTop;
}
//var framesizetimeout;
function showFrameSize() {
  var t;
//  if (navigator.userAgent.indexOf("Edge") > -1) {return;}
//  if (stack == " horizontal") {
//    document.getElementById("framesize").style.top = "auto";
//    document.getElementById("framesize").style.bottom = "11px";
//  } else {
//    t = (Number(w3_getStyleValue(document.getElementById("container"), "top").replace("px", "")) + 2).toFixed();
//    document.getElementById("framesize").style.top = t + "px";
//    document.getElementById("framesize").style.bottom = "auto";
//  }
  var width, height;
//  if (framesizetimeout) {window.clearTimeout(framesizetimeout);}
  width = Number(w3_getStyleValue(document.getElementById("iframeResult"), "width").replace("px", "")).toFixed();
  height = Number(w3_getStyleValue(document.getElementById("iframeResult"), "height").replace("px", "")).toFixed();
//  document.getElementById("framesize").style.display = "block";
  document.getElementById("framesize").innerHTML = "Result Size: <span>" + width + " x " + height + "</span>";
//  framesizetimeout = window.setTimeout(function () {document.getElementById("framesize").style.display = "none";}, 1000);
}
var dragging = false;
var stack;
function fixDragBtn() {
  var textareawidth, leftpadding, dragleft, containertop, buttonwidth
  var containertop = Number(w3_getStyleValue(document.getElementById("container"), "top").replace("px", ""));
  if (stack != " horizontal") {
    document.getElementById("dragbar").style.width = "5px";    
    textareasize = Number(w3_getStyleValue(document.getElementById("textareaCode"), "width").replace("px", ""));
    leftpadding = Number(w3_getStyleValue(document.getElementById("textarea"), "padding-left").replace("px", ""));
    buttonwidth = Number(w3_getStyleValue(document.getElementById("dragbar"), "width").replace("px", ""));
    textareaheight = w3_getStyleValue(document.getElementById("textareaCode"), "height");
    dragleft = textareasize + leftpadding + (leftpadding / 2) - (buttonwidth / 2);
    document.getElementById("dragbar").style.top = containertop + "px";
    document.getElementById("dragbar").style.left = dragleft + "px";
    document.getElementById("dragbar").style.height = textareaheight;
    document.getElementById("dragbar").style.cursor = "col-resize";
    
  } else {
    document.getElementById("dragbar").style.height = "5px";
    if (window.getComputedStyle) {
        textareawidth = window.getComputedStyle(document.getElementById("textareaCode"),null).getPropertyValue("height");
        textareaheight = window.getComputedStyle(document.getElementById("textareaCode"),null).getPropertyValue("width");
        leftpadding = window.getComputedStyle(document.getElementById("textarea"),null).getPropertyValue("padding-top");
        buttonwidth = window.getComputedStyle(document.getElementById("dragbar"),null).getPropertyValue("height");
    } else {
        dragleft = document.getElementById("textareaCode").currentStyle["width"];
    }
    textareawidth = Number(textareawidth.replace("px", ""));
    leftpadding = Number(leftpadding .replace("px", ""));
    buttonwidth = Number(buttonwidth .replace("px", ""));
    dragleft = containertop + textareawidth + leftpadding + (leftpadding / 2);
    document.getElementById("dragbar").style.top = dragleft + "px";
    document.getElementById("dragbar").style.left = "5px";
    document.getElementById("dragbar").style.width = textareaheight;
    document.getElementById("dragbar").style.cursor = "row-resize";        
  }
}
function dragstart(e) {
  e.preventDefault();
  dragging = true;
  var main = document.getElementById("iframecontainer");
}
function dragmove(e) {
  if (dragging) 
  {
    document.getElementById("shield").style.display = "block";        
    if (stack != " horizontal") {
      var percentage = (e.pageX / window.innerWidth) * 100;
      if (percentage > 5 && percentage < 98) {
        var mainPercentage = 100-percentage;
        document.getElementById("textareacontainer").style.width = percentage + "%";
        document.getElementById("iframecontainer").style.width = mainPercentage + "%";
        fixDragBtn();
      }
    } else {
      var containertop = Number(w3_getStyleValue(document.getElementById("container"), "top").replace("px", ""));
      var percentage = ((e.pageY - containertop + 20) / (window.innerHeight - containertop + 20)) * 100;
      if (percentage > 5 && percentage < 98) {
        var mainPercentage = 100-percentage;
        document.getElementById("textareacontainer").style.height = percentage + "%";
        document.getElementById("iframecontainer").style.height = mainPercentage + "%";
        fixDragBtn();
      }
    }
    showFrameSize();    
  }
}
function dragend() {
  document.getElementById("shield").style.display = "none";
  dragging = false;
}
if (window.addEventListener) {              
  document.getElementById("dragbar").addEventListener("mousedown", function(e) {dragstart(e);});
  document.getElementById("dragbar").addEventListener("touchstart", function(e) {dragstart(e);});
  window.addEventListener("mousemove", function(e) {dragmove(e);});
  window.addEventListener("touchmove", function(e) {dragmove(e);});
  window.addEventListener("mouseup", dragend);
  window.addEventListener("touchend", dragend);
  window.addEventListener("load", fixDragBtn);
  window.addEventListener("load", showFrameSize);
}
function w3_getStyleValue(elmnt,style) {
    if (window.getComputedStyle) {
        return window.getComputedStyle(elmnt,null).getPropertyValue(style);
    } else {
        return elmnt.currentStyle[style];
    }
}
</script>
</body>
</html>