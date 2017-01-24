<html>
<body>
<table border="1" style="width:100%">
<thead>
<tr>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Phone</th>
	<th>Craft</th>
</tr>
</thead>

<tbody>


<?PHP
include 'connectToDB.php';

$sql = "SELECT * FROM LaborContacts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo"<tr><td>{$row["firstName"]}</td><td>{$row["lastName"]}</td><td>{$row["phone"]}</td><td>{$row["craft"]}</td></tr>\n";
    }
} else {
    echo "0 results";
}
 $conn->close();
?>


</tbody>
</table>
</body>
</html>