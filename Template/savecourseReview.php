<?php 
	$conn = new mysqli('localhost','root','','wikipingdia');
	if ($conn->connect_error) die($conn->connect_error);

	$data['course_code'] = $_POST['course_code'];
	$data['num_stars'] = $_POST['num_stars'];
	$data['review_text'] = $_POST['review_text'];

	if ($_POST['review_ID']) {
		$q = "update `review_class` set "; 
		foreach ($data as $fldName => $postdata) {
			$q .= $fldName . " = '" . $postdata . "', ";
		}
		$q = substr($q,0,-2);
		$q .= " where review_id = " . $_POST['review_id'];
		$tryit = $conn->query($q);
	} else {
		$q = "insert into `review_class` (`";
		$qd = ") values ('";
		foreach ($data as $fldName => $postdata) {
			$q .= $fldName . "`, `";
			$qd .= $postdata . "', '";
		}
		$qstr = substr($q,0,-3) . substr($qd,0,-3) . ");";
		echo $qstr . "<br>";
		$result = $conn->query($qstr);
	}
	header('Location: course_add_review.php');
	$q = "select * from review_class";

	$result = $conn->query($q);
	if (!$result) die($conn->error);
	echo "<a href='index.html'>All done </a><br>";
?>