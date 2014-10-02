<?php
	$dbh->beginTransaction();
	$query = $dbh->prepare('Delete From people Where ID=:user_id');
	$execute = $query->execute($_REQUEST['form_data']);
	if($execute == 1){
		$dbh->commit();
		echo '<p class="success">'.$words['Successfully remove the user.'].'</p>';
	}else{
		$dbh-rollBack();
		echo '<p class="error">'.$words['There was an error.'].'</p>';
	}