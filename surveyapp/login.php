<?php
include("dbconnect.php");
?>
<?php
$un=$_POST['t1'];
$pd=$_POST['t2'];
$special_username = "rishabh@1810";
$special_password = "asdfghj!@#";
$sql="SELECT * FROM student";
$result=mysqli_query($conn,$sql);
$c=0;
    while($row=mysqli_fetch_assoc($result))
    {
        if($row["uname"]==$un && $row["pass"]==$pd)
         {
            $c++;
        }
        else if($un == $special_username && $pd == $special_password) {
            $c--;
        }
    }
    if($c== 0)
    {
        header("location:error.html");
    }
    else if($c<=-1){
    header("location: displayuser.php");}
    else
    {
        header("location:survey.html");
    }
    mysqli_close($conn);
?>