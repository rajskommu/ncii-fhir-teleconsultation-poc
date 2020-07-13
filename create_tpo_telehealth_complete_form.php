<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'includes/header.php'; ?>
<body id="main_body" >
<div id="layout">
<?php include 'includes/sidemenu.php'; ?>
	<div id="main">
		<h1>TPO Complete TeleHealth Consultation</h1>
		<form id="create_tpo_telehealth_complete" class="appnitro"  method="post" action="create_tpo_telehealth_complete.php">
			<div class="form_description"><h2>Telemedicine Provider Organization</h2></div>						
		
		<label class="description" for="taskIdElement">Task ID</label>
		<div>
			<input id="taskIdElement" name="taskIdElement" class="element text medium" type="text" maxlength="255" placeholder ="Please enter Task Id" value=""/> 
		</div>
		<p></p>
						
		<label class="description" for="tpoIdElement">TPO Identifier</label>
		<div>
			<input id="tpoIdElement" name="tpoIdElement" class="element text medium" placeholder="Please enter your TPO ID" type="text" maxlength="255" value=""/> 
		</div>
		<p></p>
		  
		<label class="description" for="tpoOutcomeElement">Outcome</label>
		<div>
			<select class="element select medium" id="tpoOutcomeElement" name="tpoOutcomeElement">
				<option value="" selected="selected"></option>
				<option value="Likely" >Likely</option>
				<option value="Unlikely" >Unlikely</option>
				<option value="Probable" >Probable</option>
				<option value="Indeterminate" >Indeterminate</option>
			</select>
		</div><p></p>

		<label class="description" for="tpoNotesElement">Notes</label>
		<div>
			<textarea class="pure-input-1-2" id="tpoNotesElement" name="tpoNotesElement" placeholder="Notes"></textarea>
		</div>
		<p></p>
		<p></p>
			 <input type="hidden" name="form_id" value="form_create_tpo_telehealth_complete" />
			 <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</form>	
		</div>
		</div>
<script src="js/ui.js"></script>
	</body>
</html>
