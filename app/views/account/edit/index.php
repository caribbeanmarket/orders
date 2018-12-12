<?php require 'C:\wamp\www\orders\app\views\header.php'; ?>

<?php require 'C:\wamp\www\orders\app\views\menu.php'; ?>

<div class="error"><?php echo $data['error']; ?></div>

<?php  
	include "changePassword.php";

	if($_SESSION['orders']['role'] == 7)
	{
		include "editUsersEdit.php";
	}
?>

<?php require 'C:\wamp\www\orders\app\views\footer.php'; ?>