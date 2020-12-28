<?php
	session_start();
	$user = $_SESSION['user'];
	include "connection.php";
	$conn = new mysqli($servername, $username, $password, $user);
	$sql = "SELECT * FROM comanda";
	$result = $conn ->query($sql);
	$sum = 0;

echo "<table border='1'>
<tr>
<th>Produs</th>
<th>Cantitate</th>
<th>Pret</th>
</tr>";

while($row = $result->fetch_assoc())
{
echo "<tr>";
echo "<td>" . $row['produs'] . "</td>";
echo "<td>" . $row['cantitate'] . "</td>";
echo "<td>" . $row['pret'] . "</td>";
echo "</tr>";
$sum = $sum + $row['pret'];
}
echo "<tr>";
echo "<td>"."TOTAL:"."</td";
echo "<td>" . $sum."</td>";
echo "</tr>";
echo "</table>";

?>