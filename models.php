<?php 

require_once 'dbConfig.php';

function insertIntoDreamJob($pdo, $first_name, $last_name, $religion, $course, $year_level, $dream_profession) {
	$sql = "INSERT INTO dream_job (first_name, last_name, religion, course, year_level, dream_profession) VALUES (?, ?, ?, ?, ?, ?)";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$first_name, $last_name, $religion, $course, $year_level, $dream_profession]);

	return $executeQuery ? true : false;
}

function seeAllDreamJobs($pdo) {
	$sql = "SELECT * FROM dream_job";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();

	return $executeQuery ? $stmt->fetchAll() : [];
}

function getDreamJobByID($pdo, $student_id) {
	$sql = "SELECT * FROM dream_job WHERE student_id = ?";
	$stmt = $pdo->prepare($sql);
	$stmt->execute([$student_id]);

	return $stmt->fetch();
}

function updateDreamJob($pdo, $student_id, $first_name, $last_name, $religion, $course, $year_level, $dream_profession) {
	$sql = "UPDATE dream_job SET first_name = ?, last_name = ?, religion = ?, course = ?, year_level = ?, dream_profession = ? WHERE student_id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$first_name, $last_name, $religion, $course, $year_level, $dream_profession, $student_id]);

	return $executeQuery ? true : false;
}

function deleteJob($pdo, $student_id) {
	$sql = "DELETE FROM dream_job WHERE student_id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$student_id]);

	return $executeQuery ? true : false;
}
?>
