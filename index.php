<html>
<body>
<?php
include 'connect.php';
include $_SERVER['DOCUMENT_ROOT'].'/vk/services/UserService.php';
include $_SERVER['DOCUMENT_ROOT'].'/vk/services/GroupService.php';
include $_SERVER['DOCUMENT_ROOT'].'/vk/services/MarketService.php';
include $_SERVER['DOCUMENT_ROOT'].'/vk/helpers/requestHelper.php';

if (isset($_POST['getUser'])){
		
		foreach (GetUser($_POST['userID']) as $user )
		{	
			echo "<br>";
			foreach ($user as $a => $b)
			{
				echo "$a = $b <br>";
			}
			echo "<br>";
		}
	}
	if (isset($_POST['getGroups'])){
		
		foreach (GetGroups($_POST['userID']) as $user )
		{	
			echo "<br>";
			foreach ($user as $a => $b)
			{
				echo "$a = $b <br>";
			}
			echo "<br>";
		}
	}
	if (isset($_POST['getProducts'])){
		
		foreach (GetProducts($_POST['groupId']) as $user )
		{	
			echo "<br>";
			foreach ($user as $a => $b)
			{
				echo "$a = $b <br>";
			}
			echo "<br>";
		}
	}
?>
			
		
<form method="POST">
    <p><input name="userID" type="text" size="20"></p>
    <input type="submit" name="getUser" value="User" />
</form>	
<form method="POST">
    <p><input name="userID" type="text" size="20"></p>
	<input type="submit" name="getGroups" value="Groups" />
</form>	
<form method="POST">
	<p><input name="groupId" type="text" size="20"></p>
	<input type="submit" name="getProducts" value="Produtcs" />
</form>	
		
</body>	
</html>