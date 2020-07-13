<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'includes/header.php'; ?>
<title>Telemedicine Service Organization</title>
<!-- <link rel="stylesheet" type="text/css" href="css/view.css" media="all"> -->
<!-- <script type="text/javascript" src="js/view.js"></script> -->

</head>
<body id="main_body" >
<div id="layout">
<?php include 'includes/sidemenu.php'; ?>
	
	<div id="main">
		<h1><a>Telemedicine Service Organization</a></h1>
		<form id="form_116733" class="pure-form-stacked"  method="post" action="create_org.php">
					<div class="form_description">
			<h2>Telemedicine Service Organization</h2>
			<p>Please fill in the below details. For Demonstration only the below fields are amended for the request to the back end. 
Fields not mentioned below are hardcoded in the request message to the server.</p>
		</div>						
		<label class="description" for="element_6">Organization Name </label>
		<div>
			<input id="element_6" name="element_6" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_6"><small>Please enter the Organization Name</small></p> 
		<label class="description" for="element_5">Organization Identifier </label>
		<div>
			<input id="element_5" name="element_5" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_5"><small>Please fill in the Organization Identifier</small></p> 
			    <input type="hidden" name="form_id" value="116733" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</form>	
	</div>
	</div>
<script src="js/ui.js"></script>
	</body>
</html>
