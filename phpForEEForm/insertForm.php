<html>
<head>
<title>IIC Applicant Info Form</title>

<script>
function validateForm() {
    var a = document.forms["myForm"]["firstName"].value;
	var b = document.forms["myForm"]["lastName"].value;
	var c = document.forms["myForm"]["homePhone"].value;
	var d = document.forms["myForm"]["cellPhone"].value;
	var e = document.forms["myForm"]["craft"].value;
	var f = document.forms["myForm"]["workStatus"].value;
	var g = document.forms["myForm"]["currentLocation"].value;
	
    if (a == null || a == "" || b == null || b == "" || c == null || c == "" || d == null || d == "" || e == null || e == "" || f == null || f == "" || g == null || g == "" ) {
        alert("Please fill out all required fields. '*Required'");
        return false;
    }
}
</script>


</head>
<body>

<form  onsubmit="return validateForm()"  name="myForm" enctype="multipart/form-data "action="insertApplicantInformation.php" method="post">
<h1>IRONDALE INDUSTRIAL CONTRACTORS, INC.<h3>"APPLICANT INFORMATION FORM"</h3></h1></br>
<label for="firstName"><strong>First Name:</strong>  *Required</label></br>
<input type="text" name="firstName" size= "30"></br></br>

<label for="lastName"><strong>Last Name:</strong>  *Required</label></br>
<input type="text" name="lastName" size= "30"></br></br>

<label for="homePhone"><strong>Home Phone:</strong>  *Required</label></br>
<input type="text" name="homePhone" size= "30"></br></br>

<label for="cellPhone"><strong>Cell Phone:</strong>  *Required</label></br>
<input type="text" name="cellPhone" size= "30"></br></br>

<label for="craft"><strong>Craft:</strong>  *Required</label></br>
<select name="craft" title="Click to SELECT a Craft.">
<option value ="">Select</option>
  <option value ="Rigger">Crane Operator</option>
  <option value ="Ironworker">Ironworker</option>
  <option value ="Millwright">Millwright</option>
  <option value ="Pipefitter">Pipefitter</option>
  <option value ="Rigger">Rigger</option>
  <option value ="Welder">Welder</option>
  </select></br></br>
  
<label for="workStatus"><strong>Current Work Status:</strong>  *Required</label></br>
<select name="workStatus" title="Click to SELECT a Craft.">
<option value ="">Select</option>
  <option value ="W">Working</option>
  <option value ="NW">Not Working</option>
  </select></br></br>

<label for="currentLocation"><strong>Current Location:</strong>  *Required</label></br>
<select name="currentLocation" title = "Click to SELECT a State.">
	<option value="">Select</option>
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select></br></br>				



<!--http://www.php-mysql-tutorial.com/wikis/mysql-tutorials/uploading-files-to-mysql-database.aspx

<strong>Upload Resume:</strong> <input type="file" name="userfile"/ title="Click to BROWSE and SELECT a file."></br></br>
-->

<input type="submit" name= "submit" value="CLICK HERE TO SUBMIT YOUR INFORMATION">

</form>

</body>



</html>