<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewStudentBtn'])) {
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$religion = trim($_POST['religion']);
	$course = trim($_POST['course']);
	$yearLevel = trim($_POST['yearLevel']);
	$dreamProfession = trim($_POST['dreamProfession']);

	if (!empty($firstName) && !empty($lastName) && !empty($religion) && !empty($course) && !empty($yearLevel) && !empty($dreamProfession)) {
		$query = insertIntoDreamJob($pdo, $firstName, $lastName, $religion, $course, $yearLevel, $dreamProfession);

		if ($query) {
			header("Location: ../index.php");
		} else {
			echo "Insertion failed";
		}
	} else {
		echo "Make sure that no fields are empty";
	}
}

if (isset($_POST['editStudentBtn'])) {
	$student_id = $_GET['student_id'];
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$religion = trim($_POST['religion']);
	$course = trim($_POST['course']);
	$yearLevel = trim($_POST['yearLevel']);
	$dreamProfession = trim($_POST['dreamProfession']);

	if (!empty($student_id) && !empty($firstName) && !empty($lastName) && !empty($religion) && !empty($course) && !empty($yearLevel) && !empty($dreamProfession)) {
		$query = updateDreamJob($pdo, $student_id, $firstName, $lastName, $religion, $course, $yearLevel, $dreamProfession);

		if ($query) {
			header("Location: ../index.php");
		} else {
			echo "Update failed";
		}
	} else {
		echo "Make sure that no fields are empty";
	}
}

if (isset($_POST['deleteStudentBtn'])) {
	$query = deleteJob($pdo, $_GET['student_id']);

	if ($query) {
		header("Location: ../index.php");
	} else {
		echo "Deletion failed";
	}
}
?>
