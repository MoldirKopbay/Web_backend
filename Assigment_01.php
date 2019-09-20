<?php  include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>HW1</title>
	<link rel="stylesheet" type="text/css" href="style_Assigment_01.css">
</head>
<body>


	</div>
	<table>
		<thead>

			<tr>
				<th>ID</th>
				<th>name</th>
				<th>surname</th>
				<th>email</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<body>

			<?php while ($row = mysqli_fetch_array($results)) { ?>
				<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['surname']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td>
					<a href="#">Edit</a>
				</td>
				<td>
					<a href="#">Delete</a>
				</td>
			</tr>
			<?php } ?>
			
		</tbody>
	</table>

	<form method="post" action="server.php">
		<div class="input_group">
			<label>ID</label>
			<input type="text" name="id">
		</div>

		<div class="input_group">
			<label>Name</label>
			<input type="text" name="name">
		</div>
		<div class="input_group">
			<label>Surname</label>
			<input type="text" name="surname">
		</div>
		<div class="input_group">
			<label>email</label>
			<input type="text" name="email">
		</div>
		<div class="input_group">
			<?php if ($edit_state == false): ?>
				<button type="submit" name="save" class="btn">
		     Save</button>
		    <?php else: ?>
		    	<button type="submit" name="update" class="btn">
		     Update</button>
		</div>
	</form>
</body>
</html>