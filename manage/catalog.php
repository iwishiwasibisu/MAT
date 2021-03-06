<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd"> 
<html>
<head>
  <? require_once "catalogInc.php";
     require_once "../headers/topBar.php" ?>
  <meta http-equiv="X-UA-Compatible" content="IE=9" /> 
  <link rel="stylesheet" type="text/css" href="../styles/main.css">
  <link rel="stylesheet" type="text/css" href="../styles/topBar.css">
  <link rel="stylesheet" type="text/css" href="../styles/database.css">
  
  <link rel="icon" href="../favicon.ico" type="image/x-icon"> 
  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
  
  <script type="text/javascript" src="../scripts/specifications.js"></script>
</head>

<body>
<div class="topBarBackground"></div>
  <!-- MAIN-->
  <div id="div_main">
    <!-- TOP BAR-->      
    <? topBar("catalog"); ?> 

    <!-- CONTENT-->
    <div class="generalContentContainer roundCorners">
      <!-- GENE DISPLAY-->
      <span class="titleFormat textShadow" >Sequences</span>
      <hr>
      <table id="catalogTable">
      <!-- LABEL -->
        <? drawRows(); ?>
      </table>
	  <form action="annotate.php" method="get">
		Name: <input type="text" name="lastGeneId" />
	<input type="submit" />
</form> 
    </div>
  </div>
</body>
</html>