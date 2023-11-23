<?php
include("dbconnect.php");
?>


<?php
$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) // for checking the presence of data
{
while($row = mysqli_fetch_assoc($result)) //returns in the form of array
{
echo "<hr>Username:" . $row["uname"]. "Password:" . $row["pass"];
}
}

else{
    echo"0 results";
}
?>