<div>
	<style>
		button#add_new_user{
			text-align:left;
			width:25px;
			height:25px;
			font-size:1.5em;
			text-align:center;
			vertical-align:middle;
		}
		table{
			margin-left:auto;
			margin-right:auto;
		}
		table tr>th{
			color:gold;
		}
		table tr>*{
			padding:0px 10px;
		}
	</style>
	<p class="return_value"></p>
	<button id="add_new_user">+</button>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th><?php echo $words['Name'] ?></th>
				<th><?php echo $words['Phone'] ?></th>
				<th><?php echo $words['E-Mail'] ?></th>
				<th><?php echo $words['Address'] ?></th>
			</tr>
		</thead>
		<tbody>
			<?php $counter = 0;?>
			<?php foreach($dbh->query('Select * From people')->fetchAll() as $row){ ?> 
				<tr>
					<td><?php echo ++$counter; ?></td>
					<td><?php echo $row['Name']; ?></td>
					<td><?php echo $row['Phone']; ?></td>
					<td><?php echo $row['Email']; ?></td>
					<td><?php echo $row['Address']; ?></td>
					<td>
						<form method="POST" action="controlers_remove-user">
							<input type="hidden" value="<?php echo $row['ID']; ?>" id="user_id"/>
							<button type="button" class="submit"><?php echo $words['Delete']; ?></button>
						</form>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<div class="popup_window" id="new_user">
		<div>
			<button class="close_window">X</button>
			<h4>New User</h4>
			<div class="window_content">
				<p class="return_value"></p>
				<form method="POST" action="controlers_new-user">
					<label for="user_name"><?php echo $words['Name'] ?></label>
					<input type="text" id="user_name" placeholder="<?php echo $words['Name'] ?>" /><br>
					<label for="user_phone"><?php echo $words['Phone'] ?></label>
					<input type="text" id="user_phone" placeholder="<?php echo $words['Phone'] ?>" /><br>
					<label for="user_email"><?php echo $words['E-Mail'] ?></label>
					<input type="e-mail" id="user_email" placeholder="<?php echo $words['E-Mail'] ?>" /><br>
					<label for="user_address"><?php echo $words['Address'] ?></label>
					<input type="text" id="user_address" placeholder="<?php echo $words['Address'] ?>" /><br>
					<button type="button" class="submit"><?php echo $words['Create'] ?></button>
				</form>
			</div>
		</div>
	</div>
</div>