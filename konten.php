<?php 
if (isset($_GET['m']))
{
	if($_GET['m'] == 'user')
	{
		include("user.php");
	}
	if($_GET['m'] == 'user_form')
	{
		include("user_form.php");
	}
}
else
	{
		include("dashboard.php");
	}
 ?>
