<!DOCTYPE html>
<html>
<head>
  <?php include("config.php"); ?>
  <title><?php echo $maintitle ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  #myTopnav{
    opacity: 1;
    position: absolute;
  }
  #header {
  padding-top: 160px;
  padding-bottom: 60px;

}
  </style>
</head>
<body>
<div id="top"></div>
<?php include("assets/php/nav.php");?>


<main>
<p id="main">
<p>AnyPost Online Chat are intended to be a fun place in which participants can post about almost anything. We kindly request that all participants using AnyPost follow the guidelines laid out on this Chat Code of Conduct. Following these guidelines will help our participants feel safe whle using AnyPost</p>

<p><ol>
    <li>Any pornographic content will not be tolerated and will be removed immediately.</li>
    <li>No Vulgar language. Vulgar or abusive language, masked with symbols, characters or otherwise, will not be tolerated and the session will be immediately terminated.</li>
    <li>No racist remarks, sexually oriented remarks, or religious persecution will be tolerated; any such remarks will trigger the immediate termination of the chat session.</li>
    <li>Actions that seem specifically designed to test the limits of what is not offensive and to serve no other purpose will not be tolerated and such sessions will be immediately terminated.</li>
    <li>Any code, weather it be html, css, js, php is not tolerated and will be removed immediately.</li>
</ol></p>

<p>I am not liable any advice or tips given on anypost. What ever is posted does not belong to anypost</p>
<p>AnyPost reserves the right to change or amend the code of conduct at any time and without notice.  You are encouraged to review these guidelines from time to time to ensure your adherence and compliance.</p>




</main>

  <script src='https://unpkg.com/material-components-web@latest/dist/material-components-web.js'></script><script  src="./script.js"></script>
  <script>
function fullnav() {
  var x = document.getElementById("fullnav");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
<script >
 document.getElementById("myTopNav").style.opacity = "1";
</script>
<?php include("assets/php/footer.php");?>
</body>
</html>
</html>