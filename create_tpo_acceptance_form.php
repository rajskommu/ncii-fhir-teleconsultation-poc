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
	
									
						  
 
		<h1><a>TPO Accept TeleHealth Consultation</a></h1>
		<form id="create_tpo_acceptance" class="appnitro"  method="post" action="create_tpo_acceptance.php">
					<div class="form_description">
			<h2>Telemedicine Provider Organization</h2>
			<p>Please fill in the below details. For Demonstration only the below fields are amended for the request to the back end. 
Fields not mentioned below are hardcoded in the request message to the server.</p>
		</div>						
		
   
					
		<label class="description" for="taskIdElement">Task Identifier </label>
		<div>
			<input id="taskIdElement" name="taskIdElement" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_6"><small>Please enter the Task Id</small></p> 
						
		<label class="description" for="tpoIdElement">TPO Identifier</label>
		<div>
			<input id="tpoIdElement" name="tpoIdElement" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_5"><small>Please enter your TPO Id</small></p> 
		  
						 
			    <input type="hidden" name="form_id" value="form_create_tpo_acceptance" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
	   
		
		</form>	
		</div>
		</div>
<script src="js/ui.js"></script>
	</body>
</html>
