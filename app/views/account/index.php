<?php require 'C:\wamp\www\csm\app\views\header.php'; ?>

<?php require 'C:\wamp\www\csm\app\views\menu.php'; ?>

<div class="error"><?php echo $data['error']; ?></div>

<?php  
	include "changePassword.php";

	if($data["menu"] == "menuAdmin")
	{
		include "editUsers.php";
	}
?>

<?php require 'C:\wamp\www\csm\app\views\footer.php'; ?>