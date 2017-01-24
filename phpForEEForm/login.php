<?php
$username = ""; //Change to whatever you want your username to be
$password = ""; //Change to whatever you want your password to be

if(isset($_POST['submit'])){
	if($_POST['username'] == $username && $_POST['password'] == $password){
        //EXECUTE YOUR CODE HERE
        
		include 'selectAllApplicantInformation.php';
	
        } else {
        echo "<h2>***ACCESS DENIED***</h2>";
		
		//sends and email to the administrator informing them of a failed access attempt
		$to      = "tpaulson@irondale.com";
		$subject = "DO NOT REPLY - Failed Database Access Login Attempt";
		$message = "DO NOT REPLY - Failed Database Access Login Attempt.";
		$headers = "From: tpaulson@irondale.com" . "\r\n" .
		"Reply-To: tpaulson@irondale.com" . "\r\n" .
		"X-Mailer: PHP/" . phpversion();

		mail($to, $subject, $message, $headers);

		
		
        }
} else { //IF THE FORM WAS NOT SUBMITTED
//SHOW FORM
	?><form method="post">
		<label for="username">Username:</label><br />
		<input type="text" name="username" /><br />
		<label for="password">Password:</label><br />
		<input type="password" name="password" /><br /><br />
		<input type='submit' name='submit' value='Login' />
	</form><?php
}


?>
