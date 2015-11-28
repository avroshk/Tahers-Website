<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet prefetch' href='http://maxcdin.bootstrapcdin.com/font-awesome/4.1.0/css/font-awesome.min.css'/>
<link type="text/css" rel="stylesheet" href="form.css" />
<title>Application Form</title>
</head>

<body>

<form class="app" action = "action.php" method="post">
<fieldset>
<legend class="legend">Form</legend>

<div class="input">
<input type="text" name="comp_name" placeholder="Company's Name" required />
</div>

<div class="input">
<select name="core_business_area" placeholder="Core Business Area" required>
<option value="Mechanical">Mechanical</option>
<option value="Civil">Civil</option>
<option value="Electrical">Electrical</option>
</select>
</div>

<div class="input">
<input type="textarea" name="address"  placeholder="Address" required />
</div>

<div class="input">
<input type="text" name="city" placeholder="City" required />
</div>

<div class="input">
<input type="text" name="country" placeholder="Country" required />
</div>

<div class="input">
<input type="number" name="phone" placeholder="Contact Number" required />
</div>

<div class="input">
<input type="email" name="email" placeholder="Contact email" required />
</div>

<div class="input">
<select name="products_and_services" placeholder="Please Select From Product/Services" required>
<option value="Pumps">Pumps</option>
<option value="Cement">Cement</option>
<option value="Motars">Motars</option>
</select>
</div>

<div class="input">
<input type="number" name="num_branches" placeholder="Total Number Of Branches" required />
</div>

<div class="input">
<input type="number" name="num_employees"  placeholder="Total Number Of Employees" required />
</div>

<div class="input">
<input type="text" name="avg_experience"  placeholder="On An Average How Experienced Are Your Employees" required />
</div>

<div class="input">
<input type="text" name="cert" placeholder="Please List Any Certification & Credibility(ISO 9000,9001 etc)" />
</div>

<div class="input">
<input type="textarea" name="portfolio" placeholder="Client Portfolio" required />
</div>

<button type="submit" class="submit"><i class="fa fa-long-arrow-right"></i></button>


</fieldset>
</form>

</body>
</html>
