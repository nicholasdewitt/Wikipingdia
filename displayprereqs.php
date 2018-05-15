<!-- This is the PHP to gather all of the data from the prereqs table. It still needs to look pretty and be embedded in our stylesheet & html stuff	 -->
	<?php
		include 'resources/bslinks.php';
		$a = "SELECT c1.course_code, c1.course_name as course, c2.course_code AS pre_course_code, c2.course_name as prereq_name FROM courses c1 JOIN prereqs p ON c1.course_code = p.course_code JOIN courses c2 ON p.pre_course_code = c2.course_code;";
		$row = null;
		$conn = new mysqli('localhost','root','','wikipingdia');
		if ($conn->connect_error) die($conn->connect_error);
		$prereq = $conn->query($a);
		$ar = $conn->query($prereq);
		$result = mysqli_query($conn, $a);

		echo "<table cellpadding='2' cellspacing='2' border='1' bgcolor='#dfdfdf' width='125%' align='left'>"; // start a table tag in the HTML


	while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
	echo "<thead><tr><td>" . $row['course_code'] . "</td><td>" . $row['course'] . "</td><td>" . $row['pre_course_code'] ."</td><td>" . $row['prereq_name'] . "</td></tr></thead>";  //$row['index'] the index here is a field name
	}

	echo "</table>"; //Close the table in HTML
