<?php
//$branch=$_POST['branch'];
//$lang=$_POST['lang'];
//$conn=mysqli_connect("localhost","root","","radiob");
  //  if (isset($_POST['branch'])){
       // $q1 = $_POST['branch'];
       // $q2 = $_POST['lang'];
        //$query=("INSERT INTO survey (branch, lang) VALUES ('$branch','$lang')");
       // $query_run = mysqli_query($conn, $query);
   // }
   $branch=$_POST['branch'];
   $lang=$_POST['lang'];
   $conn=mysqli_connect("localhost","root","","radiob");
   if(!$conn)
{
    die("Connection failed:". mysqli_connect_error());
}
$sql=("INSERT INTO survey (branch, lang) VALUES ('$branch','$lang')");
if(mysqli_query($conn, $sql))
{
    echo "Your response has been sucessfully submitted";
}
else{
    echo "Error:" .$sql ."<br>" .mysqli_error($conn);
}
    ?>