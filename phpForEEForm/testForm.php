<html>
<body>

<form action="/html/tags/html_form_tag_action.cfm" method="get">
<fieldset>
<legend>Your Details</legend>
<div>
<label for="first_name">First Name:</label><br>
<input type="text" name="first_name" value="" maxlength="100"><br>
</div>
<div>
<label for="lunch">Lunch:</label><br>
<input type="radio" name="lunch" value="pasta"> Pasta
<input type="radio" name="lunch" value="fish"> Fish
</div>
<div>
<label for="drinks">Drinks:</label><br>
<input type="checkbox" name="drinks" value="beer"> Beer
<input type="checkbox" name="drinks" value="wine"> Wine
</div>
<div>
<label for="city">Preferred City:</label><br>
<select name="city">
  <option value ="sydney">Sydney</option>
  <option value ="melbourne">Melbourne</option>
  <option value ="cromwell">Cromwell</option>
  <option value ="queenstown">Queenstown</option>
</select>
</div>
<div>
<label for="comments">Comments:</label><br>
<textarea rows="3" cols="20" name="comments"></textarea>
</div>
<div>
<input type="submit" value="Submit">
</div>
</fieldset>
</form>

</body>
</html>