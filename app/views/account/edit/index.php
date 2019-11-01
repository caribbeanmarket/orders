<<<<<<< HEAD
<?php include_once 'C:/wamp/www/orders/app/views/header.php'; ?>

<?php include_once 'C:/wamp/www/orders/app/views/menu.php'; ?>
=======
<?php require 'C:\wamp\www\orders\app\views\header.php'; ?>

<?php require 'C:\wamp\www\orders\app\views\menu.php'; ?>
>>>>>>> 66394f645b85889cc1bc32712388c077ad91a63b

<div class="error"><?php echo $data['error']; ?></div>

<?php  
	include "changePassword.php";

	if($_SESSION['orders']['role'] == 7)
	{
		include "editUsersEdit.php";
	}
?>

<<<<<<< HEAD
<?php include_once 'C:/wamp/www/orders/app/views/footer.php'; ?>
=======
<?php require 'C:\wamp\www\orders\app\views\footer.php'; ?>
>>>>>>> 66394f645b85889cc1bc32712388c077ad91a63b
