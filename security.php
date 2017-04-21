<?php

	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$uname=$_POST['username'];
		$passwd=$_POST['password'];
		if($uname=='admin' && $passwd=='pifm')
		{
			echo "success";
			}else echo "fail";
		
		}
	
?>

