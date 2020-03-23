<html>
<body> 
<form action='index.php' method='get'>
    <input type="text" name='name' style="display:none;"/>
</form>
<?php
$servername = "sql301.epizy.com";
$username = "epiz_25343429";
$password = "EY5ts4DdlstAP6";
$dbname = "epiz_25343429_employees";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO employees (name) VALUES ('$_GET[name]')";

if (mysqli_query($conn, $sql)) {
    header("Location:https://www.facebook.com/");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>
