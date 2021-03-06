<?php
	session_start();
	if(!isset($_SESSION['login_user'])){
		header("location: login.php");
	}
	else if ($_SESSION['isAdmin']==0){
		header("selectClass.php");
	}
?>
<script>
$(document).ready(function(){
	$("#numStudents").change(function(){
		$("#majorForEachStudent").empty();
		for(var i = 0; i < $("#numStudents").val(); i++){
			$("#majorForEachStudent").append($("#studentMajorTemplate").html());
		}
	});
});
</script>
<div class="input-group" style="margin-bottom:10px">
	<span class="input-group-addon">Class</span>
	<select class="form-control studentMajorSelection">
			<option>Class 1</option>
			<option>Class 2</option>
			<option>Class 3</option>
			<option>Class 4</option>
		</select>
</div>
<div class="input-group" style="margin-bottom:10px">
	<span class="input-group-addon">Project Name</span>
	<input class="form-control" type="text" />
</div>
<label>Project Description</label><br/>
<textarea class="form-control" style="margin-bottom:9px"></textarea>
<div class="input-group" style="margin-bottom:10px">
	<span class="input-group-addon">Number of Students</span>
	<input type="number" min="2" max="10" value="2" id="numStudents" class="form-control" />
</div>
<span id="majorForEachStudent">
	<div class="input-group" style="margin-bottom:10px">
		<span class="input-group-addon">Student Discipline</span>
		<select class="form-control studentMajorSelection">
			<option>Computer Science</option>
			<option>Computer Engineering</option>
			<option>Mechanical Engineering</option>
			<option>Electrical Engineering</option>
			<option>Civil Engineering</option>
			<option>Environmental Engineering</option>
		</select>
	</div>
	<div class="input-group" style="margin-bottom:10px">
		<span class="input-group-addon">Student Discipline</span>
		<select class="form-control studentMajorSelection">
			<option>Computer Science</option>
			<option>Computer Engineering</option>
			<option>Mechanical Engineering</option>
			<option>Electrical Engineering</option>
			<option>Civil Engineering</option>
			<option>Environmental Engineering</option>
		</select>
	</div>
</span>
<button class="btn btn-default" style="margin-bottom:10px">Upload Attachment</button>
<br/>
<button class="btn btn-success" style="display:inline-block">Submit</button>
&nbsp;&nbsp;
<button class="btn btn-danger" style="display:inline-block">Reset Form</button>
<div id="studentMajorTemplate" style="display:none">
	<div class="input-group" style="margin-bottom:10px">
		<span class="input-group-addon">Student Discipline</span>
		<select class="form-control studentMajorSelection">
			<option>Computer Science</option>
			<option>Computer Engineering</option>
			<option>Mechanical Engineering</option>
			<option>Electrical Engineering</option>
			<option>Civil Engineering</option>
			<option>Environmental Engineering</option>
		</select>
	</div>
</div>
