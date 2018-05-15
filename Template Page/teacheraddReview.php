<?php 
	include 'resources/bslinks.php';
	$a = "select teacher_ID, CONCAT(teacher_fname, ' ', teacher_lname) AS teachername, teacher_fname, teacher_lname, teacher_email from teacher order by teacher_ID";
	$b = "select * from review_teacher order by review_id ASC";

	$row = null;
	$conn = new mysqli('localhost','root','','wikipingdia');
	if ($conn->connect_error) die($conn->connect_error);
	$teacher = $conn->query($a);
	$review = $conn->query($b);
	if ($_GET['tid']) {
		$teacheridq = "select teacher_ID, CONCAT(teacher_fname, ' ', teacher_lname) AS teachername, teacher_fname, teacher_lname, teacher_email from teacher WHERE teacher_ID = " . $_GET['tid'];
		$teacher = $conn->query($teacheridq);
		$row = $ar->fetch_assoc();
	}
	include 'reviewModel.php';
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add A Review</title>
	<link rel="stylesheet" href="css/main-php.css">
</head>
<body>
<div class="content">
	<div class="container">
		<div class="row">
			<h1>Add a review</h1>
			<form action="saveReview.php" method="post" class="form-horizontal">
				<input type="hidden" name="review_id" value="<?=$row['review_id']?>" id="review_id">

				

				   <!--  <div class="form-group">
					<label for="teachername" class="control-label col-sm-3">Select A Teacher</label>
					<div class="col-sm-5">
						<?=dropdown('teachername', $teacher, $row['teachername'])?>
						<select name ="teachername">
  						<option value="<?=$row['teachername']?>">
						</select>
					</div>
				</div> -->

				<select name="teacher" id=“teacher" class="form-control" required="required">
					<option value="" selected="selected">Please make a choice</option>
					<?php foreach ($teacher as $r):?>
						<?php if ($r['teacher_ID'] == $row['teachername']):?>
							<option value="<?=$r['teacher_ID']?>" selected="selected"><?=$r['teacher_lname'] . ", " . $r['teacher_fname']?></option>
						<?php else: ?>
							<option value="<?=$r['teacher_ID']?>"><?=$r['teacher_lname'] . ", " . $r['teacher_fname']?></option>
						<?php endif ?>
					<?php endforeach ?>
				</select>

				<div class="form-group">
					<label for="num_stars" class="control-label col-sm-3">Number of stars  </label>
					<div class="col-sm-5">
						<input type="Number" onchange="validText(this.value, this.name)" name="num_stars" placeholder="(From 1 to 5)" value="<?=$row['num_stars']?>" class="form-control" id="num_stars" required="required">
						<span class="small text-warning" id="titleerr"></span>
					</div>
				</div>

				<div class="form-group">
					<label for="review_text" class="control-label col-sm-3">Review Text...</label>
					<div class="col-sm-5">
						<input type="text" onchange="validText(this.value, this.name)" name="review_text" placeholder="Review Body" value="<?=$row['review_text']?>" class="form-control" id="review_text" required="required">
						<span class="small text-warning" id="titleerr"></span>
					</div>
				</div>

				<div class="form-group">
					<input type="submit" value="Submit" class="btn btn-info pull-left">
				</div>


			</form>	
		</div>	
	</div>
</div>
<?php 
	include 'resources/bsfooter.php';
?>
</body>
</html>