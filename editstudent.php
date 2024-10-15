<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Entry</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 30px;
			width: 300px;
		}
		label {
			display: inline-block;
			width: 150px;
		}
	</style>
</head>
<body>
	<?php $getJobById = getDreamJobByID($pdo, $_GET['student_id']); ?>
	<form action="core/handleForms.php?student_id=<?php echo $_GET['student_id']; ?>" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getJobById['first_name']; ?>">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo $getJobById['last_name']; ?>">
		</p>
		<p>
			<label for="religion">Religion</label>
			<input type="text" name="religion" value="<?php echo $getJobById['religion']; ?>">
		</p>
		<p>
			<label for="course">Course</label>
			<input type="text" name="course" value="<?php echo $getJobById['course']; ?>">
		</p>
		<p>
			<label for="yearLevel">Year Level</label>
			<input type="text" name="yearLevel" value="<?php echo $getJobById['year_level']; ?>">
		</p>
		<p>
			<label for="dreamProfession">Dream Profession</label>
			<input type="text" name="dreamProfession" value="<?php echo $getJobById['dream_profession']; ?>">
		</p>
		<p>
			<input type="submit" name="editStudentBtn" value="Update">
		</p>
	</form>
</body>
</html>
