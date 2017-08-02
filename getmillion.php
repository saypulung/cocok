<?php

$db = new mysqli('localhost', 'root', 'rootjuga1', 'test');

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}
$sql = "
    SELECT *
    FROM `names`
    ";

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}
?>
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Email</th>
	</tr>
<?php

while($row = $result->fetch_assoc()){
    echo "<tr><td>".$row['id']."</td><td>". $row['name']."</td><td>". $row['email'] . '</td></tr>';
}
echo "</table>";