<html>
    <head>
        <link rel="stylesheet" href="splash_screen.css">
    </head>
    <body onload="myFunction()" style="margin:0;">
    <div id="loader_bg" class="blink-animation"><img src="LE-logo.png"></div>
        <div style="display:none;" id="myDiv">
            <h1>hello</h1>
        </div>
        <script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
  
}

function showPage() {
  document.getElementById("loader_bg").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
    </body>
</html>