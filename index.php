
<html>
<head><title>Home</title> 
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php include("header.php");
      include("menu.php");
	  
	  if(isset($_SESSION['id']))
	  {
	  echo '<div style="padding-left:0px;padding-top:0px">';
echo '<br>';
echo "Your Reference Order no is:".'<b>'.$_SESSION['id'];
echo '<br>';
echo '<b> Please Login again to purchase at Shopping Portal <br><b><U>Thank You</u></b>';	
echo '</div>';
      }
?>
<?php 
unset($_SESSION['id']);

?>
</body>
</html>