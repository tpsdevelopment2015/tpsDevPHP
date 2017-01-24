<html>
<body>
<table border="1" style="width:100%">
<thead>
<tr>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Home Phone</th>
	<th>Cell Phone</th>
	<th>Craft</th>
	<th>Current Work Status</th>
	<th>Current Location</th>
</tr>
</thead>

<tbody>


<?PHP
include 'connectToDB.php';

$sql = "SELECT * FROM ApplicantInformation";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo"<tr><td>{$row["firstName"]}</td><td>{$row["lastName"]}</td><td>{$row["homePhone"]}</td><td>{$row["cellPhone"]}</td><td>{$row["craft"]}</td><td>{$row["workStatus"]}</td><td>{$row["currentLocation"]}</td></tr>\n";
    }
} else {
    echo "0 results - No Records Found";
}
 $conn->close();
?>


</tbody>
</table>
</body>
</html>