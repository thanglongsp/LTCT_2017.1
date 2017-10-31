<?php 
if($name == null) 
			echo 'Notifies: Truong name trong, moi nhap lai ! ';
		else if($pass == null) 
			echo 'Notifies: Truong password trong, moi nhap lai ! ';
		else if($cfpass == null || $pass != $cfpass) 
			echo 'Notifies: Truong confirm password trong hoac khong dung, moi nhap lai ! ';
		else {
			header('Location: home_page_user.php');
			echo 'thanh cong nhap thanh cong!';
		}
?>