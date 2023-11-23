<?php
$un=$_POST['t1'];
$pd=$_POST['t2'];
$em=$_POST['t3'];
$mb=$_POST['t4'];


$severname='localhost';
$username='root';
$password='';
$dbname='abes';

$conn=mysqli_connect($severname,$username,$password,$dbname);
if(!$conn)
{
    die("Connection failed:". mysqli_connect_error());
}
$sql="INSERT INTO student (fname, uname, emailid, pass)
   VALUES ('$un', '$pd' , '$em' , '$mb')";

if(mysqli_query($conn, $sql))
{
    echo "New record created successfully";
    header("location:index.html");
}
else{
    echo "Error:" .$sql ."<br>" .mysqli_error($conn);
}
?>