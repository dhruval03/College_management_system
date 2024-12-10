<html>
    <head>
        <link rel="stylesheet" href="css/splash_screen.css">
    </head>
    <body onload="myFunction()" style="margin:0;">
    <div id="loader_bg" class="blink-animation"><img src="LE-logo.png"></div>
        
        </div>
        <script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 5000);
  window.location="index2.php";
}

function showPage() {
  document.getElementById("loader_bg").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
    </body>
</html>