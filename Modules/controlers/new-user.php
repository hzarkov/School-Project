<?php
	$dbh->beginTransaction();
	$query = $dbh->prepare('Insert Into people(ID,Name,Phone,Email,Address) values(NULL,:user_name,:user_phone,:user_email,:user_address)');
	$execute = $query->execute($_REQUEST['form_data']);
	if($execute == 1){
		$dbh->commit();
		echo '<p class="success">'.$words['Successfully create the new user.'].'</p>';
	}else{
		$dbh-rollBack();
		echo '<p class="error">'.$words['There was an error.'].'</p>';
	}