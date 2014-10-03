<p class="return_value"></p>
<p><?php echo $words['All fields marked with * are required.'] ?></p>
<form method="POST" action="controlers_users_new-user">
	<label for="user_name"><?php echo $words['Name'] ?> *</label>
	<input type="text" id="user_name" placeholder="<?php echo $words['Name'] ?>" required /><br>
	<label for="user_phone"><?php echo $words['Phone'] ?></label>
	<input type="text" id="user_phone" placeholder="<?php echo $words['Phone'] ?>" /><br>
	<label for="user_email"><?php echo $words['E-Mail'] ?></label>
	<input type="e-mail" id="user_email" placeholder="<?php echo $words['E-Mail'] ?>" /><br>
	<label for="user_address"><?php echo $words['Address'] ?></label>
	<input type="text" id="user_address" placeholder="<?php echo $words['Address'] ?>" /><br>
	<button type="button" id="create_user"><?php echo $words['Create'] ?></button>
</form>