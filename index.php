<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dream Job Registration</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1em;
			height: 30px;
			width: 300px;
		}
		label {
			display: inline-block;
			width: 150px;
		}
		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 50px;
		}
		table, th, td {
		  border: 1px solid black;
		}
		th, td {
			padding: 8px;
			text-align: left;
		}
	</style>
</head>
<body>
	<h3>Welcome to the Dream Job Registration System. Input your details here to register:</h3>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="firstName">First Name</label>
			<input type="text" name="firstName">
		</p>
		<p>
			<label for="lastName">Last Name</label>
			<input type="text" name="lastName">
		</p>
		<p>
			<label for="religion">Religion</label>
			<input type="text" name="religion">
		</p>
		<p>
			<label for="course">Course</label>
			<input type="text" name="course">
		</p>
		<p>
			<label for="yearLevel">Year Level</label>
			<input type="text" name="yearLevel">
		</p>
		<p>
			<label for="dreamProfession">Dream Profession</label>
			<input type="text" name="dreamProfession">
		</p>
		<p>
			<input type="submit" name="insertNewStudentBtn" value="Register">
		</p>
	</form>

	<h3>Registered Dream Jobs:</h3>
	<table>
	  <tr>
	    <th>Student ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Religion</th>
	    <th>Course</th>
	    <th>Year Level</th>
	    <th>Dream Profession</th>
	    <th>Action</th>
	  </tr>

	  <?php $dreamJobs = seeAllDreamJobs($pdo); ?>
	  <?php foreach ($dreamJobs as $row) { ?>
	  <tr>
	  	<td><?php echo $row['student_id']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['religion']; ?></td>
	  	<td><?php echo $row['course']; ?></td>
	  	<td><?php echo $row['year_level']; ?></td>
	  	<td><?php echo $row['dream_profession']; ?></td>
	  	<td>
	  		<a href="editstudent.php?student_id=<?php echo $row['student_id']; ?>">Edit</a> |
	  		<a href="deletestudent.php?student_id=<?php echo $row['student_id']; ?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>
</body>
</html>
