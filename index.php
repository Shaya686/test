<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!--<link type="text/css" rel='stylesheet' href='css/style.css'> -->
	<link type="text/css" rel='stylesheet' href='css/style2.css'>
</head>
<body>
<?php
include_once ('pages/functions.php');
//session_start(); 
?>
       
	     <div class='header'>
	      
				<div class='menu'> 
				<?php
				include_once('pages/menu.php');
				?>
				</div> 
        <?php
					if(isset($_COOKIE['reg']))
					{
						?>
							<form action="index.php" method="post">
						  <input type="submit" name="Logout" value="Sign Out">
				    	</form>
					<?php
				     }
				 elseif(isset($_POST['log']))
				{
          if(login($_POST['login'], $_POST['pass']))
             {
             	setcookie("reg",$_POST['login']);
             	 //$_SESSION['reg']=$_POST['login'];
             	 echo '<script>window.location=document.URL</script>';
             }
           //////////knhgljknhlgkn
             ///////dgjfkjnkfnb
            				}
				elseif(isset($_POST['Logout']))
				{//session_destroy();
				 //unset($_SESSION['reg']);
				 setcookie("reg","",time()-30);
				  //echo '<script>window.location=document.URL</script>';
				
				}
				else
				{
					?>
				  <form action="index.php" method="post">
					<input type="text" name="login">
					<input type="password" name="pass">
					<input type="submit" name="log" value="Sign In">
					</form>
<?php
      }
      ?> 
			</div>
			<!--<div class='left_menu'>
		
				<div class="line"></div>
			</div>-->
			

				<div class='content'>
				<?php
if(isset($_GET['menu']))
{
	$menu=$_GET['menu'];
	if($menu==1)include_once('pages/register.php');
	if($menu==2)include_once('pages/upload.php');
	if($menu==3)include_once('pages/gallery.php');
	if($menu==4)include_once('pages/view.php');
}
				?>

				</div>
				<div class='footer'>
				2017 ©</div>
			</div>
</body>
</html>