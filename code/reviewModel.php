<?php 

function dropdown($fld, $data, $oneval) {
	echo '<select class="form-control" id="' . $fld . '" name="' . $fld . '" required="required">';
	echo '<option value="" selected="selected">Please make a choice</option>';
	foreach ($data as $r) {
		if ($r[$fld] == $oneval) {
			echo '<option value="' . $r[$fld] . '" selected="selected">' . $r[$fld] . '</option>';
		} else {
			echo '<option value="' . $r[$fld] . '">' . $r[$fld] . '</option>';
		}
	}
	echo '</select>';
}

?>