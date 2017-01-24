<?PHP
//variables come from insertForm.php
$firstName = $_POST['firstName'];
$lastName= $_POST['lastName'];
$homePhone= $_POST['homePhone'];
$cellPhone= $_POST['cellPhone'];
$craft= $_POST['craft'];
$workStatus= $_POST['workStatus'];
$currentLocation= $_POST['currentLocation'];

//includes the code from connectDB.php
include 'connectToDB.php';

//sql variable holds the sql statement
$sql = "INSERT INTO ApplicantInformation (firstName, lastName, homePhone, cellPhone, craft, workStatus, currentLocation)
 VALUES ('$firstName', '$lastName', '$homePhone', '$cellPhone', '$craft', '$workStatus', '$currentLocation')";

//querries the DB and inserts the form data 
if ($conn->query($sql) === TRUE) {
    echo "</br>New record created successfully</br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();





?>