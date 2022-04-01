<?php
include "templates/menu.html";
include "../inc/config.inc.php"
?>
<div class="container main-container">
<h2>Schüler</h2>
<table>
<tr>
	<th>Edu-ID</th>
	<th>Vorname</th>
	<th>Nachname</th>
	<th>E-Mail</th>
</tr>
<?php 
$statement = $pdo->prepare("SELECT * FROM users ORDER BY id");
$result = $statement->execute();
$count = 1;
while($row = $statement->fetch()) {
	echo "<tr>";
	echo "<td>".$count++."</td>";
	echo "<td>".$row['vorname']."</td>";
	echo "<td>".$row['nachname']."</td>";
	echo '<td><a href="mailto:'.$row['email'].'">'.$row['email'].'</a></td>';
	echo "</tr>";
}
?>
</table>
</div>
<style>
table, th, td {
  border: 1px solid black;
}
</style>

