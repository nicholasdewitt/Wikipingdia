<?php 
	$conn = new mysqli('localhost','root','','wikipingdia');
	if ($conn->connect_error) die($conn->connect_error);

	$data['teacher_ID'] = $_POST['teacher_ID'];
	$data['num_stars'] = $_POST['num_stars'];
	$data['review_text'] = $_POST['review_text'];

	if ($_POST['review_ID']) {
		$q = "update `review_teacher` set "; 
		foreach ($data as $fldName => $postdata) {
			$q .= $fldName . " = '" . $postdata . "', ";
		}
		$q = substr($q,0,-2);
		$q .= " where review_id = " . $_POST['review_id'];
		$tryit = $conn->query($q);
	} else {
		$q = "insert into `review_teacher` (`";
		$qd = ") values ('";
		foreach ($data as $fldName => $postdata) {
			$q .= $fldName . "`, `";
			$qd .= $postdata . "', '";
		}
		$qstr = substr($q,0,-3) . substr($qd,0,-3) . ");";
		echo $qstr . "<br>";
		$result = $conn->query($qstr);
	}
	header('Location: teacheraddReview.php');
	$q = "select * from review_teacher";

	$result = $conn->query($q);
	if (!$result) die($conn->error);
	echo "<a href='index.html'>All done </a><br>";
?>