<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delete Entry</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
	</style>
</head>
<body>
	<h1>Are you sure you want to delete this entry?</h1>
	<?php $getJobById = getDreamJobByID($pdo, $_GET['student_id']); ?>
	<form action="core/handleForms.php?student_id=<?php echo $_GET['student_id']; ?>" method="POST">
		<div style="border: 1px solid; padding: 10px;">
			<p>First Name: <?php echo $getJobById['first_name']; ?></p>
			<p>Last Name: <?php echo $getJobById['last_name']; ?></p>
			<p>Religion: <?php echo $getJobById['religion']; ?></p>
			<p>Course: <?php echo $getJobById['course']; ?></p>
			<p>Year Level: <?php echo $getJobById['year_level']; ?></p>
			<p>Dream Profession: <?php echo $getJobById['dream_profession']; ?></p>
			<input type="submit" name="deleteStudentBtn" value="Delete">
		</div>
	</form>
</body>
</html>
