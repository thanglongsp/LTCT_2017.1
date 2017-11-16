<?php 
if($pid == null) 
			echo 'Notifies: field pid is empty?';
		else if($pid == null) 
			echo 'Notifies: field pname is empty? ';
		else if($style == null) 
			echo 'Notifies: field style is empty? ';
		else if($size == null) 
			echo 'Notifies: field size is empty? ';
		else if($source == null) 
			echo 'Notifies: field source is empty?';
		else if($price == null) 
			echo 'Notifies: field price is empty?';
		else if($number == null) 
			echo 'Notifies: field number is empty? ';
		else if($dateinput == null) 
			echo 'Notifies: field dateinput is empty? ';
		else { 
			include 'check_addproduct_db.php';
		}
?>
