<?php 
if($name == null) 
			echo 'Notifies: Truong name trong, moi nhap lai ! ';
		else if($pass == null) 
			echo 'Notifies: Truong password trong, moi nhap lai ! ';
		else if($cfpass == null || $pass != $cfpass) 
			echo 'Notifies: Truong confirm password trong hoac khong dung, moi nhap lai ! ';
		else if($email == null) 
			echo 'Notifies: Truong mail trong, moi nhap lai ! ';
		else if($address == null) 
			echo 'Notifies: Truong dia chi trong, moi nhap lai ! ';
		else if($phone == null) 
			echo 'Notifies: Truong phone number trong, moi nhap lai ! ';
		else { 
			header('Location: login.php');
			echo 'dang ky thanh cong! Xin moi dang nhap!';
		}
?>