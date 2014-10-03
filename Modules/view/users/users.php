<div>
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
						<form method="POST" action="controlers_users_remove-user">
							<input type="hidden" value="<?php echo $row['ID']; ?>" id="user_id"/>
							<button type="button" class="delete"><?php echo $words['Delete']; ?></button>
						</form>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>