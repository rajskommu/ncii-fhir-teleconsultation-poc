<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'includes/header.php'; ?>
<title>Get Patient Summary</title>
</head>
<body id="main_body" >
<div id="layout">
<?php include 'includes/sidemenu.php'; ?>
	
	<div id="main">
		<h1><a>Get Patient Summary</a></h1>
		<form id="form_116733" class="pure-form-stacked"  method="post" action="view_patient_summary.php">
					<div class="form_description">
		</div>						
		<label class="description" for="patientIdElement">Patient ID</label>
		<div>
			<input id="patientIdElement" placeholder="Please enter patient ID" name="patientIdElement" class="element text medium" type="text" maxlength="255" value=""/> 
		</div>
		<p></p>
		<input type="hidden" name="form_id" value="116733" />
		<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
	</form>	
	</div>
	</div>
<script src="js/ui.js"></script>
	</body>
</html>
