<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Search</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<form action="" method="post">
Enter Employee ID : <input type="text" name="search"><br><br>
<input type="submit" name="submit" value="Search"><br><br>
</form>
<?php
$search_value=$_POST["search"];

$link = mysqli_connect("localhost","root","") or die ("Couldn't not connect");
mysqli_select_db($link, "hr");

if($link->connect_error){
    echo 'Connection Failed: '.$link->connect_error;
    }else{
        $sql="select * from attendance where id='$search_value'";

        $res=$link->query($sql);

        while($row=$res->fetch_assoc()){
            echo 'ID:'.$row["id"];  
            echo 'Name:'.$row["name"]; 
            echo 'Branch:'.$row["branch"];
            echo 'Month:'.$row["month"];
            echo 'Day 1:'.$row["d1"];
            echo 'Day 2:'.$row["d2"];
            echo 'Day 3:'.$row["d3"];
            echo 'Day 4:'.$row["d4"];
            echo 'Day 5:'.$row["d5"];
            echo 'Day 6:'.$row["d6"];
            echo 'Day 7:'.$row["d7"];
            echo 'Day 8:'.$row["d8"];
            echo 'Day 9:'.$row["d9"];
            echo 'Day 10:'.$row["d10"];
            echo 'Day 11:'.$row["d11"];
            echo 'Day 12:'.$row["d12"];
            echo 'Day 13:'.$row["d13"];
            echo 'Day 14:'.$row["d14"];
            echo 'Day 15:'.$row["d15"];
            echo 'Day 16:'.$row["d16"];
            echo 'Day 17:'.$row["d17"];
            echo 'Day 18:'.$row["d18"];
            echo 'Day 19:'.$row["d19"];
            echo 'Day 20:'.$row["d20"];
            echo 'Day 21:'.$row["d21"];
            echo 'Day 22:'.$row["d22"];
            echo 'Day 23:'.$row["d23"];
            echo 'Day 24:'.$row["d24"];
            echo 'Day 25:'.$row["d25"];
            echo 'Day 26:'.$row["d26"];
            echo 'Day 27:'.$row["d27"];
            echo 'Day 28:'.$row["d28"];
            echo 'Day 29:'.$row["d29"];
            echo 'Day 30:'.$row["d30"];
            echo 'Day 31:'.$row["d31"];
            }       

        }
?>
</body>
</html>