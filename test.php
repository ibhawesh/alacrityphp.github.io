<!DOCTYPE html>
<html>
<body>
<form method="post" action="test.php">
<input type="checkbox" name="vehicle[]" value="Bike">I have a bike <br>
<input type="checkbox" name="vehicle[]" value="Cycle">I have a Cycle <br>
<input type="checkbox" name="vehicle[]" value="Car">I have a car <br><br>
<input type="submit" value="Submit">
</form> 
</body>
</html>
<?php
$url='127.0.0.1';
$username = "root";
$password = "";
$dbname = "alacrity";
$checkbox1 = $_POST['vehicle'];
$chk=""; 
foreach($checkbox1 as $chk1) 
{ 
$chk.= $chk1.","; 
} 
$conn = mysqli_connect($url, $username, $password, $dbname);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO test(test1)VALUES( '$chk' )";
if(mysqli_query($conn,$sql)) {
echo 'Data added sucessfully';
} 
else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>


<form action="test.php" method="post">
<input type="checkbox" name="check_list[]" value="value 1">
<input type="checkbox" name="check_list[]" value="value 2">
<input type="checkbox" name="check_list[]" value="value 3">
<input type="checkbox" name="check_list[]" value="value 4">
<input type="checkbox" name="check_list[]" value="value 5">
<input type="submit" />
</form>
<?php
if(!empty($_POST['check_list'])) {
    foreach($_POST['check_list'] as $check) {
            echo $check; //echoes the value set in the HTML form for each checked checkbox.
                         //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
                         //in your case, it would echo whatever $row['Report ID'] is equivalent to.
    }
}
?>