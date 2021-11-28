<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_database = 'LibraryDB';

$connect = mysqli_connect($db_host, $db_username, $db_password, $db_database) or die('Error connecting to MySQL server.');

$query = "SELECT * FROM Users WHERE userName = '" . $_POST['form_input_UserName'] . "' AND password= '". $_POST['form_input_Password'] . "'";

$result = mysqli_query($connect, $query) or die('Error querying database.');

if (mysqli_num_rows($result)==0){
	echo '<script language="javascript">';
	echo 'alert("Incorret Credentials!");';
	echo 'window.location.href="index.html";';
	echo '</script>';
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SQL Injection Prototype</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
</head>
<body>
    <div style="display:none;"><?php print_r($_POST); ?></div>

<h1>Query</h1>
<?php $query_display = "SELECT * FROM Users WHERE userName = '". $_POST['form_input_UserName'] . "' AND password= '". $_POST['form_input_Password'] . "'";?>
<div><pre style="color:#00f;"><?php echo $query_display; ?></pre></div>

<h1>Result</h1>
<table border="1">
	<tr>
		<th>firstName</th>
		<th>lastName</th>
		<th>memberID</th>
		<th>phoneNumber</th>
		<th>emailAddress</th>
	</tr>
	<?php
                    while($row = mysqli_fetch_array($result)){      
                        echo "<tr><td>".$row['firstName'];
                        echo "</td><td>".$row['lastName'];
                        echo "</td><td>".$row['memberID'];
                        echo "</td><td>".$row['phoneNumber'];
                        echo "</td><td>".$row['emailAddress']."</td><tr>";
                    }                                      
         ?>
</table>

<p><a href="index.html">Back to the Login Screen</a></p>
<p><a href="search.php">Search For a Book</a></p>
</body>
</html>
