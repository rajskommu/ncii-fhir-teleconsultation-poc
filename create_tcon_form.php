<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Patient Details</title>
<link rel="stylesheet" type="text/css" href="css/view.css" media="all">
<script type="text/javascript" src="js/view.js"></script>
<script type="text/javascript" src="js/calendar.js"></script>
</head>
<body id="main_body" >
	
	<img id="top" src="images/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Patient Details</a></h1>
		<form id="form_116739" class="appnitro"  method="post" action="create_tcon.php">
					<div class="form_description">
			<h2>Create Tele Consultation Request</h2>
		</div>						
		<p>Patient Details </p>
			<ul >
			
					<li id="li_4" >
		<label class="description" for="element_4">Aadhar Number(Or any other approved ID number) </label>
		<div>
			<input id="element_4" name="element_4" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_1" >
		<label class="description" for="element_1">Name* </label>
		<span>
			<input id="element_1_1" name= "element_1_1" class="element text" maxlength="255" size="8" value=""/>
			<label>First</label>
		</span>
		<span>
			<input id="element_1_2" name= "element_1_2" class="element text" maxlength="255" size="14" value=""/>
			<label>Last</label>
		</span><p class="guidelines" id="guide_1"><small>Name of the Patient</small></p> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Phone </label>
		<span>
			<input id="element_2_1" name="element_2_1" class="element text" size="3" maxlength="3" value="" type="text"> -
			<label for="element_2_1">(###)</label>
		</span>
		<span>
			<input id="element_2_2" name="element_2_2" class="element text" size="3" maxlength="3" value="" type="text"> -
			<label for="element_2_2">###</label>
		</span>
		<span>
	 		<input id="element_2_3" name="element_2_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_2_3">####</label>
		</span>
		<p class="guidelines" id="guide_2"><small>Add 10 digit phone number</small></p> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Date of Birth </label>
		<span>
			<input id="element_3_1" name="element_3_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_3_1">MM</label>
		</span>
		<span>
			<input id="element_3_2" name="element_3_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_3_2">DD</label>
		</span>
		<span>
	 		<input id="element_3_3" name="element_3_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_3_3">YYYY</label>
		</span>
	
		<span id="calendar_3">
			<img id="cal_img_3" class="datepicker" src="images/calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_3_3",
			baseField    : "element_3",
			displayArea  : "calendar_3",
			button		 : "cal_img_3",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li id="li_14" >
		<label class="description" for="element_14">Gender </label>
		<div>
		<select class="element select medium" id="element_14" name="element_14"> 
			<option value="" selected="selected"></option>
<option value="male" >Male</option>
<option value="female" >Female</option>
<option value="others" >Others</option>

		</select>
		</div> 
		</li>		<li class="section_break">
			<h3>Observations / Symptoms</h3>
			<p></p>
		</li>		<li id="li_6" >
		<label class="description" for="element_6">Symptom </label>
		<div>
			<input id="element_6" name="element_6" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_16" >
		<label class="description" for="element_16">Severity </label>
		<div>
		<select class="element select medium" id="element_16" name="element_16"> 
			<option value="" selected="selected"></option>
<option value="1" >Mild</option>
<option value="2" >Low</option>
<option value="3" >Unknown</option>

		</select>
		</div> 
		</li>		<li class="section_break">
			<h3>Comorbidities /Conditions</h3>
			<p></p>
		</li>		<li id="li_17" >
		<label class="description" for="element_17">Condition </label>
		<div>
		<select class="element select medium" id="element_17" name="element_17"> 
			<option value="" selected="selected"></option>
<option value="Diabetes">Diabetes</option>
<option value="Hypertension">Hypertension</option>
<option value="COPD">COPD</option>
<option value="Kideny diesease">Kidney disease</option>
<option value="Heart diesease">Heart disease</option>

		</select>
		</div> 
		</li>		<li id="li_18" >
		<label class="description" for="element_18">Severity</label>
		<div>
		<select class="element select medium" id="element_18" name="element_18"> 
			<option value="" selected="selected"></option>
			<option value="Severe">Severe</option>
			<option value="Mild">Mild</option>
			<option value="Low">Low</option>
		</select>
		</div> 
		</li>		<li class="section_break">
			<h3>Questionnaire Response </h3>
			<p></p>
		</li>		<li id="li_19" >
		<label class="description" for="element_19">Contact with covid-19 patient in the last 14 days </label>
		<span>
			<input id="element_19_1" name="element_19" class="element radio" type="radio" value="Yes" />
<label class="choice" for="element_19_1">Yes</label>
<input id="element_19_2" name="element_19" class="element radio" type="radio" value="No" />
<label class="choice" for="element_19_2">No</label>
<input id="element_19_3" name="element_19" class="element radio" type="radio" value="Indeterminate" />
<label class="choice" for="element_19_3">Indeterminate</label>

		</span> 
		</li>		<li id="li_20" >
		<label class="description" for="element_20">Travel to COVID-19 hotspot in the last 14 days </label>
		<span>
			<input id="element_20_1" name="element_20" class="element radio" type="radio" value="Yes" />
<label class="choice" for="element_20_1">Yes</label>
<input id="element_20_2" name="element_20" class="element radio" type="radio" value="No" />
<label class="choice" for="element_20_2">No</label>
<input id="element_20_3" name="element_20" class="element radio" type="radio" value="Indeterminate" />
<label class="choice" for="element_20_3">Indeterminate</label>

		</span> 
		</li>		<li id="li_21" >
		<label class="description" for="element_21">Living in COVID-19 hotspot </label>
		<span>
			<input id="element_21_1" name="element_21" class="element radio" type="radio" value="Yes" />
<label class="choice" for="element_21_1">Yes</label>
<input id="element_21_2" name="element_21" class="element radio" type="radio" value="No" />
<label class="choice" for="element_21_2">No</label>
<input id="element_21_3" name="element_21" class="element radio" type="radio" value="Indeterminate" />
<label class="choice" for="element_21_3">Indeterminate</label>

		</span> 
		</li>	
<!--	<li class="section_break">
			<h3>Encounter</h3>
			<p></p>
		</li>		<li id="li_11" >
		<label class="description" for="element_11">Identifier </label>
		<div>
			<input id="element_11" name="element_11" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_22" >
		<label class="description" for="element_22">Status </label>
		<div>
		<select class="element select medium" id="element_22" name="element_22"> 
			<option value="" selected="selected"></option>
<option value="1" >planned</option>
<option value="2" >in-progress</option>
<option value="3" >finished</option>

		</select>
		</div> 
		</li> -->
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="116739" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
	</div>
	<img id="bottom" src="images/bottom.png" alt="">
	</body>
</html>
